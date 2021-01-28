<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modulo de Ciudades
            </h2>
        </template>

        <div class="py-12">
            <h3 class="text-primary ml-3 mr-3 mb-3 text-center">Editar ciudad</h3>
            <div class="container">
                <form @submit.prevent="submit">
                    <div class="form-group">
                        <label>Code: </label>
                        <input class="form-control" type="text" v-model="form.code">
                    </div>
                    <div class="form-group">
                        <label>Nombre: </label>
                        <input class="form-control" type="text" v-model="form.name">
                    </div>
                    <div class="text-center">
                        <button class="col-12 col-sm-7 col-md-4 btn btn-sm btn-primary">Editar</button>
                    </div>
                    <hr>
                    <div class="text-center">
                        <!-- <a href="#" class="col-12 col-sm-7 col-md-4 btn btn-sm btn-danger" @click.prevent="destroy">Eliminar</a> -->
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
        props: {
            city: Object,
        },
        data () {
            return {
                form: {
                    id: this.city.id,
                    code: this.city.code,
                    name: this.city.name
                }
            }
        },
        methods: {
            submit() {
                this.$inertia.put(this.route('cities.update', this.city.id), this.form)
            },
            destroy() {
                if (confirm('¿Seguro de eliminar?')) {
                    this.$inertia.delete(this.route('cities.destroy', this.city.id))
                }
            }
        }
    }
</script>
