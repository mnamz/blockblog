<script setup>
import { Link } from "@inertiajs/vue3";
import { ref, watchEffect, onMounted } from 'vue';
import newtabSm from "./svg/newtab-sm.vue";
import githubIcon from "./svg/github.vue";
import Linkedin from "./svg/linkedin.vue";
import telegram from "./svg/telegram.vue";
import Discord from "./svg/discord.vue";
import instagram from "./svg/instagram.vue";

defineProps({
    socials: Array,
});
</script>



<template>
    <div class="panel inline-flex items-center justify-center gap-2.5 sm:float-right mb-2.5">
        <Link v-if="socials.github_link" class="panel-icon" :href="socials.github_link">
        <githubIcon />
        </Link>

        <Link v-if="socials.linkedin_link" class="panel-icon" :href="socials.linkedin_link">
        <Linkedin />
        </Link>

        <Link v-if="socials.instagram_link" class="panel-icon" :href="socials.instagram_link">
        <instagram />
        </Link>

        <Link v-if="socials.discord_link" class="panel-icon" :href="socials.discord_link">
        <discord />
        </Link>

    </div>
</template>

<script>
export default {
    methods: {
        getFullPath(relativePath) {
            return process.env.BASE_URL + relativePath;
        },
    },
};
</script>
