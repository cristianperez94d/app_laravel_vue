<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modulo de Clientes
            </h2>
        </template>

        <div class="py-12">
            <h3 class="text-primary ml-3 mr-3 mb-3 text-center">Detalles de un cliente</h3>
            <div class="container text-center">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="col-3">Id:</span>
                        <p class="col-9 h5">{{client.id}}</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="col-3">Codigo:</span>
                        <p class="col-9 h5">{{client.code}}</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="col-3">Nombre:</span>
                        <p class="col-9 h5">{{client.name}}</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="col-3">Ciudad:</span>
                        <p class="col-9 h5">{{client.city_id}}</p>
                    </li>
                </ul>
                <hr class="mb-3">
                <inertia-link :href="route('clients.index')">Volver</inertia-link>
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
            client: Object,
        }
    }
</script>
