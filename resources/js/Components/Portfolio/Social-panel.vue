<script setup>
import newtabSm from "./svg/newtab-sm.vue";
import githubIcon from "./svg/github.vue";
import Linkedin from "./svg/linkedin.vue";
import telegram from "./svg/telegram.vue";
import Discord from "./svg/discord.vue";
import instagram from "./svg/instagram.vue";
</script>

<template>
    <div
        class="panel inline-flex items-center justify-center gap-2.5 sm:float-right mb-2.5"
    >
        <a class="panel-icon" href="">
            <githubIcon />
        </a>

        <a class="panel-icon" href="">
            <Linkedin />
        </a>

        <a class="panel-icon" href="">
            <telegram />
        </a>

        <a class="panel-icon" href="">
            <instagram />
        </a>

        <a class="panel-icon" href="">
            <discord />
        </a>
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
