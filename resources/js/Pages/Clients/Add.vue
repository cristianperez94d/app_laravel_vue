<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modulo de Clientes
            </h2>
        </template>

        <div class="py-12">
            <h3 class="text-primary ml-3 mr-3 mb-3 text-center">Agregar cliente</h3>
            <div class="container">
                <form @submit.prevent="submit">
                    <div class="form-group">
                        <label>Code: </label>
                        <input class="form-control" type="text" v-model="form.code" placeholder="ingrese el codigo">
                    </div>
                    <div class="form-group">
                        <label>Nombre: </label>
                        <input class="form-control" type="text" v-model="form.name" placeholder="ingrese nombre cliente">
                    </div>
                    <div class="form-group">
                        <label>Ciudad: </label>
                        <input class="form-control" type="text" v-model="form.city_id" placeholder="Ingrese el id de la ciudad">
                    </div>
                    <div  class="text-center">
                        <button class="col-12 col-sm-7 col-md-4 btn btn-sm btn-primary">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
        },
        data () {
            return {
                form: {
                    code: '',
                    name: '',
                    city_id: '',
                }
            }
        },
        methods: {
            submit() {
                this.$inertia.post(this.route('clients.store'), this.form)
            }
        }
    }
</script>
