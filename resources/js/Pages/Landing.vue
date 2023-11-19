<script setup>
import { Head, Link } from "@inertiajs/vue3"
import buttonPrimary from "../Components/Portfolio/textButton.vue"
import githubIcon from "../Components/Portfolio/svg/github.vue"
import linkedinIcon from "../Components/Portfolio/svg/linkedin.vue"
import mailIcon from "../Components/Portfolio/svg/mail.vue"
import phoneIcon from "../Components/Portfolio/svg/phone.vue"
import newtabSmIcon from "../Components/Portfolio/svg/newtab-sm.vue"
import blogarrowIcon from "../Components/Portfolio/svg/blogArrow.vue"

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
                    <div class="header-img sm:w-2/6">
                        <img class="rounded-lg h-full w-full object-cover overflow-visible" src="../../../storage/images/memojiAlep.png" alt="A picture of me">
                    </div>
                    <div class="hero-content sm:w-4/6 flex h-full flex-col justify-between gap-3 sm:gap-16">
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
                    <p class="text-white text-sm font-light">Text here</p>
                </div>

                <!-- Contact Section -->
                <div class="panel sm:col-span-1 sm:row-span-3 flex flex-col gap-5">
                    <div class="flex flex-col">
                        <p class="panel-label text-label">03 contacts</p>
                        <p class="text-base text-white font-bold">Got something to say or enquiries?</p>
                    </div>
                    <div class="flex flex-col gap-3.5">
                        <p class="text-xs italic text-grey">Contact details</p>
                        <div class="flex flex-row gap-2 items-center">
                            <mailIcon/>
                            <a class="normal-link text-white" href="mailto:">mnamz101@gmail.com</a>
                        </div>
                        <div class="flex flex-row gap-2 items-center">
                            <phoneIcon/>
                            <a class="normal-link text-white" href="mailto:">0123456789</a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-.5">
                        <p class="text-xs italic text-grey">Socials</p>
                        <p><a class="arrow-link text-white" href="#">Linkedin</a></p>
                        <p><a class="arrow-link text-white" href="#">Instagram</a></p>
                        <p><a class="arrow-link text-white" href="#">Twitter</a></p>
                        <p><a class="arrow-link text-white" href="#">Discord</a></p>
                        <p><a class="arrow-link text-white" href="#">Jobstreet</a></p>
                    </div>
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
                    <div class="flex flex-row justify-between items-center mb-1">
                        <p class="panel-label text-label mb-0">08 blog</p>
                        <a href=""><newtabSmIcon/></a>
                    </div>
                    <div class="blog-listing overflow-y-scroll blog-overflow pr-2">
                        <div class="blog-item flex flex-col gap-1 pt-2">
                            <p class="text-sm text-white">Contoh-contoh Rizz 13 May digunakan dalam masyar...</p>
                            <div class="flex flex-row justify-between items-center">
                                <p class="text-xs text-grey">13 May 2020</p>
                                <blogarrowIcon/>
                            </div>
                        </div>
                        <div class="blog-item flex flex-col gap-1 pt-2">
                            <p class="text-sm text-white">Contoh-contoh Rizz 13 May digunakan dalam masyar...</p>
                            <div class="flex flex-row justify-between items-center">
                                <p class="text-xs text-grey">13 May 2020</p>
                                <blogarrowIcon/>
                            </div>
                        </div>
                        <div class="blog-item flex flex-col gap-1 pt-2">
                            <p class="text-sm text-white">Contoh-contoh Rizz 13 May digunakan dalam masyar...</p>
                            <div class="flex flex-row justify-between items-center">
                                <p class="text-xs text-grey">13 May 2020</p>
                                <blogarrowIcon/>
                            </div>
                        </div>
                        <div class="blog-item flex flex-col gap-1 pt-2">
                            <p class="text-sm text-white">Contoh-contoh Rizz 13 May digunakan dalam masyar...</p>
                            <div class="flex flex-row justify-between items-center">
                                <p class="text-xs text-grey">13 May 2020</p>
                                <blogarrowIcon/>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Status Section -->
                <div class="panel col-span-2 sm:col-span-1">
                    <div class="flex flex-row justify-between items-center">
                        <p class="panel-label text-label">05 status</p>
                        <div class="blob"></div>
                    </div>
                    <p class="text-white text-sm font-light">Software developer at Osky</p>
                </div>
                
                <!-- Footer Section -->
                <div class="panel col-span-2 sm:col-span-1 sm:row-span-1">
                    <p class="panel-label text-label">06 footer</p>
                    <p class="text-white text-sm font-light">© 2023 · Assembled carefully using Tailwind by Aliif Zin.</p>
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
