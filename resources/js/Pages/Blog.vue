<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Landing from "@/Components/Portfolio/Landing.vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Aliif Zin" />
    <!-- logo -->
    <div class="w-full text-center py-5">
        <a href="" class="az-logo text-2xl font-bold">Az.</a>
    </div>
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-grid bg-center bg-gray-100 dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="custom-container px-3 lg:px-0">
            <!-- Main content -->
            <div class="grid grid-cols-2 sm:grid-cols-4 sm:grid-rows-6 gap-5">
                <!-- <Landing :canLogin="canLogin" :canRegister="canRegister" :laravelVersion="laravelVersion" :phpVersion="phpVersion" /> -->
            </div>
        </div>
    </div>
</template>
