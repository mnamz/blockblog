<script setup>
import buttonPrimary from "../Portfolio/textButton.vue";
import githubIcon from "../Portfolio/svg/github.vue";
import linkedinIcon from "../Portfolio/svg/linkedin.vue";
import mailIcon from "../Portfolio/svg/mail.vue";
import phoneIcon from "../Portfolio/svg/phone.vue";
import newtabSmIcon from "../Portfolio/svg/newtab-sm.vue";
import newtablgIcon from "../Portfolio/svg/newtab-lg.vue";
import blogarrowIcon from "../Portfolio/svg/blogArrow.vue";
import prevarrowIcon from "../Portfolio/svg/prevArrow.vue";
import nextarrowIcon from "../Portfolio/svg/nextArrow.vue";
import memojiAlep from 'images/memojiAlep.png'
import Tintedprojectimage from 'images/Tintedprojectimage.png'
import Cloud from 'images/Cloud.png'
import Drupal from 'images/Drupal.png'
import Flutter from 'images/Flutter.png'
import FzIcon from 'images/Fz.png'
import GitIcon from 'images/Git.png'
import JqueryIcon from 'images/Jquery.png'


</script>

<template>
    <!-- Hero Section -->
    <div class="grid grid-cols-2 sm:grid-cols-4 sm:grid-rows-6 gap-5">
        <div class="panel col-span-2 sm:col-span-3 sm:row-span-3 flex flex-col sm:flex-row-reverse justify-between gap-5">
            <div class="header-img sm:w-2/6">
                <img class="rounded-lg h-full w-full object-cover overflow-visible" :src="memojiAlep"
                    alt="A picture of me" />
            </div>
            <div class="hero-content sm:w-4/6 flex h-full flex-col justify-between gap-3 sm:gap-16">
                <div>
                    <p class="panel-label text-label">01 welcome</p>
                    <p class="text-2xl text-white">
                        Hi! I'm Aliif Zin, a software developer based in
                        Selangor, Malaysia. Dedicated to crafting
                        robust, user-centric applications that ace the A
                        to Z requirements.
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
        <div class="panel col-span-2 sm:col-span-1 sm:row-span-3">
            <p class="panel-label text-label">02 about</p>
            <p class="text-white text-sm font-light">Text here</p>
        </div>

        <!-- Contact Section -->
        <div class="panel col-span-2 sm:col-span-1 sm:row-span-3 flex flex-col gap-5">
            <div class="flex flex-col">
                <p class="panel-label text-label">03 contacts</p>
                <p class="text-base text-white font-bold">
                    Got something to say or enquiries?
                </p>
            </div>
            <div class="flex flex-col gap-3.5">
                <p class="text-xs italic text-grey">Contact details</p>
                <div class="flex flex-row gap-2 items-center">
                    <mailIcon />
                    <a class="normal-link text-white" href="mailto:">mnamz101@gmail.com</a>
                </div>
                <div class="flex flex-row gap-2 items-center">
                    <phoneIcon />
                    <a class="normal-link text-white" href="mailto:">0123456789</a>
                </div>
            </div>
            <div class="flex flex-col gap-.5">
                <p class="text-xs italic text-grey">Socials</p>
                <p>
                    <a class="arrow-link text-white" href="#">Linkedin</a>
                </p>
                <p>
                    <a class="arrow-link text-white" href="#">Instagram</a>
                </p>
                <p>
                    <a class="arrow-link text-white" href="#">Twitter</a>
                </p>
                <p>
                    <a class="arrow-link text-white" href="#">Discord</a>
                </p>
                <p>
                    <a class="arrow-link text-white" href="#">Jobstreet</a>
                </p>
            </div>
        </div>

        <!-- Projects -->
        <div class="project-wrapper relative col-span-2 sm:row-span-2">
            <div class="carousel-control absolute z-10 w-full flex justify-center items-center mt-2.5 gap-2.5">
                <button class="carousel-button prevBtn bg-dark p-1.5 rounded-lg">
                    <prevarrowIcon />
                </button>
                <p class="text-base project-label bg-dark py-0.5 px-2 mb-0 rounded-lg">
                    04 Projects
                </p>
                <button class="carousel-button nextBtn bg-dark p-1.5 rounded-lg">
                    <nextarrowIcon />
                </button>
            </div>
            <div class="project-carousel overflow-hidden rounded-lg">
                <div class="item relative">
                    <img :src="Tintedprojectimage" alt="">
                    <div class="item-title absolute z-10 flex flex-row gap-3 items-center">
                        <p class="text-white text-2xl font-bold">Moad</p>
                        <a href="">
                            <newtablgIcon />
                        </a>
                    </div>
                </div>
                <div class="item relative">
                    <img :src="Tintedprojectimage" alt="">
                    <div class="item-title absolute z-10 flex flex-row gap-3 items-center">
                        <p class="text-white text-2xl font-bold">Moad2</p>
                        <a href="">
                            <newtablgIcon />
                        </a>
                    </div>
                </div>
                <div class="item relative">
                    <img :src="Tintedprojectimage" alt="">
                    <div class="item-title absolute z-10 flex flex-row gap-3 items-center">
                        <p class="text-white text-2xl font-bold">Moad3</p>
                        <a href="">
                            <newtablgIcon />
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tech Stack Section -->
        <div class="panel p-0 col-span-2 sm:col-span-1">
            <p class="panel-label text-label p-2.5">07 tech stack</p>
            <div class="techStack-carousel pb-2.5 sm:py-3">
                <div class="px-2">
                    <img :src="Cloud" alt="" />
                </div>
                <div class="px-2">
                    <img :src="Drupal" alt="" />
                </div>
                <div class="px-2">
                    <img :src="Flutter" alt="" />
                </div>
                <div class="px-2">
                    <img :src="GitIcon" alt="" />
                </div>
                <div class="px-2">
                    <img :src="FzIcon" alt="" />
                </div>
                <div class="px-2">
                    <img :src="JqueryIcon" alt="" />
                </div>
            </div>
        </div>

        <!-- Blog Section -->
        <div class="panel col-span-2 sm:col-span-1 sm:row-span-2">
            <div class="flex flex-row justify-between items-center mb-1">
                <p class="panel-label text-label mb-0">08 blog</p>
                <a href="" class="newtabIcon">
                    <newtabSmIcon />
                </a>
            </div>
            <div class="blog-listing overflow-y-scroll blog-overflow pr-2">
                <div class="blog-item flex flex-col gap-1 pt-2">
                    <p class="text-white">
                        <a class="normal-link" href="#">Contoh-contoh Rizz 13 May digunakan dalam
                            masyar...</a>
                    </p>
                    <div class="flex flex-row justify-between items-center">
                        <p class="text-xs text-grey">13 May 2020</p>
                        <a href="#">
                            <blogarrowIcon />
                        </a>
                    </div>
                </div>
                <div class="blog-item flex flex-col gap-1 pt-2">
                    <p class="text-white">
                        <a class="normal-link" href="#">Contoh-contoh Rizz 13 May digunakan dalam
                            masyar...</a>
                    </p>
                    <div class="flex flex-row justify-between items-center">
                        <p class="text-xs text-grey">13 May 2020</p>
                        <a href="#">
                            <blogarrowIcon />
                        </a>
                    </div>
                </div>
                <div class="blog-item flex flex-col gap-1 pt-2">
                    <p class="text-white">
                        <a class="normal-link" href="#">Contoh-contoh Rizz 13 May digunakan dalam
                            masyar...</a>
                    </p>
                    <div class="flex flex-row justify-between items-center">
                        <p class="text-xs text-grey">13 May 2020</p>
                        <a href="#">
                            <blogarrowIcon />
                        </a>
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
            <p class="text-white text-sm font-light">
                Software developer at Osky
            </p>
        </div>

        <!-- Footer Section -->
        <div class="panel col-span-2 sm:col-span-1 sm:row-span-1">
            <p class="panel-label text-label">06 footer</p>
            <p class="text-white text-sm font-light">
                © 2023 · Assembled carefully using Tailwind by Aliif
                Zin.
            </p>
        </div>
    </div>
</template>

<script>
export default {
    methods: {
        getFullPath(relativePath) {
            return process.env.BASE_URL + relativePath;
        }
    }
}
</script>