<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Landing from "@/Components/Portfolio/Landing.vue";
import { onMounted } from "vue";

const props = defineProps({
    posts: Array,
    projects: Array,
    socials: Array,
});

onMounted(() => {
    console.log(props.posts)
})
</script>

<template>
    <Head title="Home" />
    <div
        class="relative sm:flex flex-col sm:justify-start sm:items-center min-h-screen bg-center selection:bg-red-500 selection:text-white">
        <div class="custom-container w-full px-3 lg:px-0">
            <!-- logo -->
            <div class="w-full text-center py-5">
                <Link :href="route('landing')" class="az-logo text-2xl font-bold">az.</Link>
            </div>
            <!-- Main content -->
            <Landing :socials="props.socials" :projects="props.projects" :posts="props.posts" />
        </div>
    </div>
</template>