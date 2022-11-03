<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <a class="inline-flex justify-center rounded-md border border-transparent 
                                bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none 
                                focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" href="/conversor">Ir a conversor</a>
            </div>
        </div>
    </AppLayout>
</template>
