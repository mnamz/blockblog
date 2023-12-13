<script setup>
import { Head, Link } from "@inertiajs/vue3";
import newtabSm from '@/Components/Portfolio/svg/newtab-sm.vue';
import SocialPanel from '@/Components/Portfolio/SocialPanel.vue';


const props = defineProps({
    project: Array,
    projects: Array,
    socials: Array,
});

const truncate = (text, maxLength) => {
  const words = text.split(' ');

  if (words.length <= maxLength) {
    return text;
  }

  const truncatedWords = words.slice(0, maxLength);
  return `${truncatedWords.join(' ')} ...`;
};

const formatDate = (dateString) => {
  const options = { year: 'numeric', month: 'long', day: 'numeric' };
  const formattedDate = new Date(dateString).toLocaleDateString('en-US', options);
  return formattedDate;
};

</script>

<template>
    <Head title="Projects" />
    <div
        class="relative sm:flex flex-col sm:justify-start sm:items-center min-h-screen bg-center selection:bg-red-500 selection:text-white">
        <div class="custom-container w-full px-3 lg:px-0">
            <!-- logo -->
            <div class="w-full text-center py-5">
                <Link :href="route('landing')" class="az-logo text-2xl font-bold">az.</Link>
            </div>
            <!-- Main content -->
            <div class="flex flex-col sm:flex-row gap-2.5">

                <div class="w-full sm:w-full">
                    <div class="flex items-center gap-2.5 mb-4">
                        <div class="panel text-label m-0">01 Projects</div>
                        <p class="text-white text-xs">I be saying stuff lately...</p>
                    </div>
                    <div class="flex flex-col gap-2 5">
                        <!-- Blog-items -->
                        <div v-for="project in props.projects" class="blog-item panel flex flex-col gap-2 w-full">
                            <div class="flex justify-between items-center">
                                <p class="text-grey text-xs">{{  formatDate(project.created_at)  }}</p>
                                <Link class="newtabIcon" :href="route('project.single', { slug: project.slug })" >
                                    <newtabSm />
                                </Link>
                            </div>
                            <Link class="newtabIcon" :href="route('project.single', { slug: project.slug })" >
                            <p class="text-base font-medium text-white">{{  project.name  }}</p>
                            </Link>
                            <p class="text-grey text-xs">{{  truncate(project.description, 5)  }}</p>
                        </div>

                    </div>

                </div>
                <!-- <div class="w-full sm:w-2/4 sm:relative">
                    <div class="sm:sticky sm:top-2.5">
                        <SocialPanel :socials="props.socials" />

                        <div class="add-info panel flex flex-col sm:float-right">
                            <div class="text-label">02 Additional information</div>
                            <div class="flex flex-col gap-4">
                                <p class="text-base text-white font-light">What I used for updating all this content?</p>
                                <div class="flex flex-col gap-0">
                                    <p class="text-xs italic text-grey">CMS</p>
                                    <p><a class="normal-link text-red font-normal" href="#">BlockBlog</a></p>
                                    <p><a class="normal-link text-red" href="#">Laravel</a></p>
                                </div>
                                <div class="flex flex-col gap-0">
                                    <p class="text-xs italic text-grey">Frontend</p>
                                    <p><a class="normal-link text-red font-normal" href="#">Tailwind CSS</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
</template>
