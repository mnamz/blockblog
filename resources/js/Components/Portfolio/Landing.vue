<script setup>
import { Link } from "@inertiajs/vue3";
import { ref, watchEffect, onMounted } from 'vue';
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
import Drupal from 'images/drupal.svg'
import GitIcon from 'images/git.svg'
import JqueryIcon from 'images/jquery.svg'
import LaravelIcon from 'images/laravel.png'
import vueIcon from 'images/vuejs.svg'
import phpIcon from 'images/php.svg'
import javscriptIcon from 'images/javascript.svg'
import bootstrapIcon from 'images/bootstrap.svg'
import drupalIcon from 'images/drupal.svg'
import nginxIcon from 'images/nginx-original.svg'
import mysqlIcon from 'images/mysql.svg'
import wordpressIcon from 'images/wordpress.svg'

defineProps({
    posts: Array,
    projects: Array,
    socials: Array,
});


onMounted(() => {
    // watchEffect(() => {
    //     const panels = document.querySelectorAll(".panel");

    //     panels.forEach((panel) => {
    //         const rect = panel.getBoundingClientRect();
    //         const left = mouseX.value - rect.left;
    //         const top = mouseY.value - rect.top;

    //         panel.style.setProperty("--left", `${left}px`);
    //         panel.style.setProperty("--top", `${top}px`);
    //     });
    // });

    // document.addEventListener("mousemove", (e) => {
    //     mouseX.value = e.pageX;
    //     mouseY.value = e.pageY;
    // });

    $(".techStack-carousel").slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        pauseOnHover: false,
        speed: 2000,
        nextArrow: false,
        prevArrow: false,
        cssEase: "linear",
    });

    $(".project-carousel").slick({
        infinite: true,
        dots: false,
        autoplay: true,
        autoplaySpeed: 1500,
        prevArrow: $(".prevBtn"),
        nextArrow: $(".nextBtn"),
    });
});

const formatDate = (dateString) => {
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    const formattedDate = new Date(dateString).toLocaleDateString('en-US', options);
    return formattedDate;
};

const asset = (path) => {
    return `/storage/${path}`;
}
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
                        <span v-html="socials.details"></span>
                    </p>
                </div>
                <div class="header-cta flex flex-row items-center gap-2">
                    <a href="storage/resume.pdf">
                    <buttonPrimary :buttonText="'resume'" />
                    </a>
                    <Link :href="socials.github_link">
                    <button class="icon-button p-1.5 rounded-lg">
                        <githubIcon />
                    </button>
                    </Link>
                    <Link :href="socials.linkedin_link">
                    <button class="icon-button p-1.5 rounded-lg">
                        <linkedinIcon />
                    </button>
                    </Link>
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
                    <a class="normal-link text-white" href="mailto:mnamz101@gmail.com">mnamz101@gmail.com</a>
                </div>
                <div class="flex flex-row gap-2 items-center">
                    <phoneIcon />
                    <Link class="normal-link text-white" target="_blank" href="https://wa.me/601151456165">601151456165
                    </Link>
                </div>
            </div>
            <div class="flex flex-col gap-.5">
                <p class="text-xs italic text-grey">Socials</p>
                <p>
                    <Link class="arrow-link text-white" :href="socials.linkedin_link">Linkedin</Link>
                </p>
                <p>
                    <Link class="arrow-link text-white" :href="socials.instagram_link">Instagram</Link>
                </p>
                <p>
                    <Link class="arrow-link text-white" :href="socials.discord_link">Discord</Link>
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
                <!-- <div v-if="projects.length > 0"> -->
                    <div v-if="projects.length > 0" v-for="project in projects" :key="project.id" class="item relative">

                        <img :src="asset(project.image)" class="object-fill min-h-[308px]" alt="">
                        <div class="item-title absolute z-10 flex flex-row gap-3 items-center">
                            <p class="text-white text-2xl font-bold">{{ project.name }}</p>
                            <Link :href="route('project.single', { slug: project.slug })">
                                <newtablgIcon />
                            </Link>
                        </div>
                    </div>
                <!-- </div> -->
                <div v-else class="item relative">
                    <img :src="Tintedprojectimage" alt="">
                    <div class="item-title absolute z-10 flex flex-row gap-3 items-center">
                        <p class="text-white text-2xl font-bold">Moad2</p>
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
                    <img :src="phpIcon" alt="" />
                </div>
                <div class="px-2">
                    <img :src="Drupal" alt="" />
                </div>
                <div class="px-2">
                    <img :src="GitIcon" alt="" />
                </div>
                <div class="px-2">
                    <img :src="JqueryIcon" alt="" />
                </div>
                <div class="px-2">
                    <img :src="vueIcon" alt="" />
                </div>
                <div class="px-2">
                    <img :src="LaravelIcon" alt="" />
                </div>
                <div class="px-2">
                    <img :src="javscriptIcon" alt="" />
                </div>
                <div class="px-2">
                    <img :src="bootstrapIcon" alt="" />
                </div>
                <div class="px-2">
                    <img :src="nginxIcon" alt="" />
                </div>
                <div class="px-2">
                    <img :src="mysqlIcon" alt="" />
                </div>
                <div class="px-2">
                    <img :src="wordpressIcon" alt="" />
                </div>
            </div>
        </div>

        <!-- Blog Section -->
        <div class="panel col-span-2 sm:col-span-1 sm:row-span-2">
            <div class="flex flex-row justify-between items-center mb-1">
                <p class="panel-label text-label mb-0">08 blog</p>
                <Link :href="route('blog')" class="newtabIcon">
                <newtabSmIcon />
                </Link>
            </div>
            <div class="blog-listing overflow-y-scroll blog-overflow pr-2">
                <div v-for="post in posts" :key="post.id" class="blog-item flex flex-col gap-1 pt-2">
                    <p class="text-white">
                        <Link :href="route('post.single', { slug: post.slug })" class="normal-link">
                        {{ post.title }}
                        </Link>
                    </p>
                    <div class="flex flex-row justify-between items-center">
                        <p class="text-xs text-grey">{{ formatDate(post.created_at) }}</p>
                        <Link :href="route('post.single', { slug: post.slug })">
                        <blogarrowIcon />
                        </Link>
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