<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Landing from "@/Components/Portfolio/Landing.vue";
import BlogList from "@/Components/Portfolio/Blog-list.vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Aliif Zin" />
    <div
        class="relative sm:flex flex-col sm:justify-start sm:items-center min-h-screen bg-center selection:bg-red-500 selection:text-white">
        <div class="custom-container w-full px-3 lg:px-0">
            <!-- logo -->
            <div class="w-full text-center py-5">
                <a href="" class="az-logo text-2xl font-bold">az.</a>
            </div>
            <!-- Main content -->
            <BlogList :canLogin="canLogin" :canRegister="canRegister" :laravelVersion="laravelVersion"
                :phpVersion="phpVersion" />
            <!-- <Landing :canLogin="canLogin" :canRegister="canRegister" :laravelVersion="laravelVersion"
                    :phpVersion="phpVersion" /> -->
        </div>
    </div>
</template>
