<script setup>
import { Link } from "@inertiajs/vue3";
import { blogarrowIcon } from '@/Components/Portfolio';
import SocialPanel from '@/Components/Portfolio/SocialPanel.vue';
import newtabSmIcon from '@/Components/Portfolio/svg/newtab-sm.vue';
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
import Cloud from 'images/Cloud.png'
import Drupal from 'images/Drupal.png'
import Flutter from 'images/Flutter.png'
import FzIcon from 'images/Fz.png'
import GitIcon from 'images/Git.png'
import JqueryIcon from 'images/Jquery.png'
import { onMounted } from "vue";


const props = defineProps({
    project: Array,
    projects: Array,
    socials: Array,
});

const formatDate = (dateString) => {
  const options = { year: 'numeric', month: 'long', day: 'numeric' };
  const formattedDate = new Date(dateString).toLocaleDateString('en-US', options);
  return formattedDate;
};

</script>

<template>
    <Head :title="props.project.name" />
    <div
        class="relative sm:flex flex-col sm:justify-start sm:items-center min-h-screen bg-center selection:bg-red-500 selection:text-white">
        <div class="custom-container w-full px-3 lg:px-0">
            <!-- logo -->
            <div class="w-full text-center py-5">
                <Link :href="route('landing')" class="az-logo text-2xl font-bold">az.</Link>
            </div>
            <div class="flex flex-col sm:flex-row gap-2.5">

                <div class="w-full sm:w-3/4">
                    <div class="panel flex flex-col gap-3">
                        <p class="panel-label text-label mb-0">Project summary</p>
                        <p class="text-xl text-white font-normal">
                            {{ props.project.name }}
                        </p>
                        <p class="text-white font-light text-sm">
                            <span v-html="props.project.content"></span>
                        </p>
                    </div>
                </div>

                <div class="w-full sm:w-1/4 sm:relative">
                    <div class="sm:sticky sm:top-2.5 flex flex-col justify-start items-start gap-2.5">
                        <div class="panel flex flex-col gap-2 w-full">
                            <div class="flex justify-between items-center">
                                <p class="panel-label text-label mb-0">Other projects</p>
                                <Link :href="route('portfolio')" class="newtabIcon">
                                <newtabSmIcon />
                                </Link>
                            </div>

                            <div class="otherBlog-listing blog-overflow overflow-y-scroll pr-2">
                                <div v-for="project in props.projects" class="blog-item flex flex-col gap-1 pt-2">
                                    <p class="text-white">
                                        <Link :href="route('project.single', { slug: project.slug })" class="normal-link">
                                        {{ project.name }}
                                        </Link>
                                    </p>
                                    <div class="flex flex-row justify-between items-center">
                                        <p class="text-xs text-grey">{{ formatDate(project.created_at) }}</p>
                                        <Link :href="route('project.single', { slug: project.slug })">
                                        <blogarrowIcon />
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sm:sticky sm:top-2.5">
                            <SocialPanel :socials="props.socials" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            imageArray: [Cloud, Drupal, Flutter, GitIcon, FzIcon, JqueryIcon]
        };
    },
    methods: {
        getFullPath(relativePath) {
            return process.env.BASE_URL + relativePath;
        },
    },
    components: {
        Carousel,
        Slide,
        Pagination,
        Navigation,
    },
};
</script>
