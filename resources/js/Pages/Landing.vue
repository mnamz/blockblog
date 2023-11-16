<script setup>
import { Head, Link } from "@inertiajs/vue3";

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
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-grid bg-center bg-gray-100 dark:bg-gray-900 selection:bg-red-500 selection:text-white">

        <div class="container max-940 px-3 lg:px-0">
            <div class="w-full text-center py-5">
                <a href="" class="text-2xl text-white">Az.</a>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-4 sm:grid-rows-6 gap-5">
                <div class="test col-span-2 sm:col-span-3 sm:row-span-3">1</div>
                <div class="test sm:col-span-1 sm:row-span-3">2</div>

                <div class="test sm:col-span-1 sm:row-span-3">3</div>
                <div class="test col-span-2 sm:row-span-2">4</div>
                <div class="test sm:col-span-1">5</div>
                <div class="test sm:col-span-1 sm:row-span-2">6</div>
                <div class="test col-span-2 sm:col-span-1">7</div>
                <div class="test col-span-2 sm:col-span-1 sm:row-span-2">8</div>
            </div>
        </div>
    </div>
</template>

<style>
.bg-grid {
    background-color: #001120;
    opacity: 1;
    background-image: linear-gradient(rgba(255, 255, 255, 0.1) 1.3px,
            transparent 1.3px),
        linear-gradient(to right, rgba(255, 255, 255, 0.1) 1.3px, #001120 1.3px);
    background-size: 26px 26px;
}

.max-940 {
    max-width: 940px;
}

.test {
    width: 100%;
    background-color: red;
    height: 100px;
}

</style>
