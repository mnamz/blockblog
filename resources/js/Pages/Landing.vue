<script setup>
import { Head, Link } from "@inertiajs/vue3";
import buttonPrimary from "../Components/Portfolio/textButton.vue"
import githubIcon from "../Components/Portfolio/svg/github.vue"
import linkedinIcon from "../Components/Portfolio/svg/linkedin.vue"

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
            <!-- Logo -->
            <div class="w-full text-center py-5">
                <a href="" class="az-logo text-2xl font-bold">Az.</a>
            </div>

            <!-- Main content -->
            <div class="grid grid-cols-2 sm:grid-cols-4 sm:grid-rows-6 gap-5">

                <!-- Hero Section -->
                <div class="panel col-span-2 sm:col-span-3 sm:row-span-3 flex flex-col sm:flex-row-reverse justify-between gap-5">
                    <div class="header-img sm:w-1/4">
                        <img class="rounded-lg h-full w-full object-cover" src="../../../storage/images/Portrait tinted.png" alt="A picture of me">
                    </div>
                    <div class="hero-content sm:w-3/4 flex h-full flex-col justify-between gap-3 sm:gap-16">
                        <div>
                            <p class="panel-label text-label">01 welcome</p>
                            <p class="text-2xl text-white">Hi! I'm Aliif Zin, a software developer based in Selangor, Malaysia.
                                Dedicated to crafting robust, user-centric applications that ace the A to Z
                                requirements.
                            </p>
                        </div>
                        <div class="header-cta flex flex-row items-center gap-2">
                            <buttonPrimary :buttonText="'resume'" />
                            <button class="icon-button p-1.5 rounded-lg">
                                <githubIcon />
                            </button>
                            <button class="icon-button p-1.5 rounded-lg">
                                <linkedinIcon />
                            </button>
                        </div>
                    </div>
                </div>

                <!-- About Section -->
                <div class="panel sm:col-span-1 sm:row-span-3">
                    <p class="panel-label text-label">02 about</p>
                </div>

                <!-- Contact Section -->
                <div class="panel sm:col-span-1 sm:row-span-3">
                    <p class="panel-label text-label">03 contacts</p>
                </div>

                <!-- Projects -->
                <div class="panel col-span-2 sm:row-span-2">
                    <p class="panel-label text-label">04 projects</p>
                </div>

                <!-- Tech Stack Section -->
                <div class="panel sm:col-span-1">
                    <p class="panel-label text-label">07 tech stack</p>
                </div>

                <!-- Blog Section -->
                <div class="panel sm:col-span-1 sm:row-span-2">
                    <p class="panel-label text-label">08 blog</p>
                </div>

                <!-- Status Section -->
                <div class="panel col-span-2 sm:col-span-1">
                    <p class="panel-label text-label">07 status</p>
                </div>

                <!-- Footer Section -->
                <div class="panel col-span-2 sm:col-span-1 sm:row-span-1">
                    <p class="panel-label text-label">06 footer</p>
                </div>
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
</style>
