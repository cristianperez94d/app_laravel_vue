<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modulo de Ciudades
            </h2>
        </template>

        <div class="py-12">
            <h3 class="text-primary ml-3 mr-3 mb-3 text-center">Detalles de una ciudad</h3>
            <div class="container text-center">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="col-3">Id:</span>
                        <p class="col-9 h5">{{city.id}}</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="col-3">Codigo:</span>
                        <p class="col-9 h5">{{city.code}}</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="col-3">Nombre:</span>
                        <p class="col-9 h5">{{city.name}}</p>
                    </li>
                </ul>
                <hr class="mb-3">
                <inertia-link :href="route('cities.index')">Volver</inertia-link>
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
        }
    }
</script>
