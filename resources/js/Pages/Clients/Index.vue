<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modulo de Clientes
            </h2>
        </template>

        <div class="py-12">
            <div class="d-flex align-items-center justify-content-around mb-3">
                <inertia-link :href="route('clients.create')" class="btn btn-primary">Agregar</inertia-link>
                <h3 class="text-primary text-center m-0">Lista de clientes</h3>
                <input type="text" class="form-control col-4" placeholder="Filtrar por ciudad..." v-model="search">
            </div>
            <div class="container">
                
                <table class="table table-sm table-striped">
                    <thead class="bg-primary text-light">
                        <tr>
                            <th>ID</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Ciudad</th>
                            <th colspan="2" class="text-center">Acciones</th>
                        </tr>
                    </thead> 
                    <tbody>
                        <tr v-for="client in clients.data" :key="client.id">
                            <td>{{client.id}}</td>
                            <td>{{client.code}}</td>
                            <td>{{client.name}}</td>
                            <td>{{client.city}}</td>
                            <td class="text-center">
                                <inertia-link :href="route('clients.show', client.id)" class="btn btn-info btn-sm p-1">Ver</inertia-link>
                            </td>
                            <td class="text-center text-warning">
                                <inertia-link :href="route('clients.edit', client.id)" class="btn btn-warning btn-sm p-1">Editar</inertia-link>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <Paginate :data="clients" url="clients.index"/>
                
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Paginate from '@/Components/Paginate'

    export default {
        components: {
            AppLayout,
            Paginate                
        },
        props: {
            clients: Object,
        },
        data() {
            return {
                search: ''
            }
        },
        watch: {
            search: function(value) {
                this.$inertia.replace(this.route('clients.index', {search: value}))
            }
        }
    }
</script>
