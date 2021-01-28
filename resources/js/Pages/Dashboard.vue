<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12 title-app">
            <h1>APP LARAVEL VUE</h1>
        </div>
    </app-layout>
</template>

<style scoped>
    .title-app {
        width: 100%;
        text-align: center;
        margin-top: 70px;
        color: #17a2b8;
    }
    .title-app h1 {
        width: auto;
        font-size: 4rem;
        border-bottom: 6px solid #17a2b8;
        border-radius: 5px;
        background: #edf2f7;
    }
</style>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'

    export default {
        components: {
            AppLayout,
            Welcome,
        },
    }
</script>
