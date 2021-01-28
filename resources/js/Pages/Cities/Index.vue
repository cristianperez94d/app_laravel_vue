<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modulo de Ciudades
            </h2>
        </template>

        <div class="py-12">
            
            <inertia-link :href="route('cities.create')" class="float-right mr-3 btn btn-primary">Agregar</inertia-link>
            <h3 class="text-primary text-center mb-3">Lista de ciudades</h3>
            

            <div class="container">
                
                <table class="table table-sm table-striped">
                    <thead class="bg-primary text-light">
                        <tr >
                            <th>ID</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th colspan="2" class="text-center">Acciones</th>
                        </tr>
                    </thead> 
                    <tbody>
                        <tr v-for="city in cities.data" :key="city.id">
                            <td>{{city.id}}</td>
                            <td>{{city.code}}</td>
                            <td>{{city.name}}</td>
                            <td class="text-center">
                                <inertia-link :href="route('cities.show', city.id)" class="btn btn-info btn-sm p-1">Ver</inertia-link>
                            </td>
                            <td class="text-center">
                                <inertia-link :href="route('cities.edit', city.id)" class="btn btn-warning btn-sm p-1">Editar</inertia-link>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <Paginate :data="cities" url="cities.index"/>
                
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
            cities: Object,
        },
        
    }
</script>
