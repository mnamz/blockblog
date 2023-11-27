<script setup>
import SocialPanel from '@/Components/Portfolio/Social-panel.vue';
</script>

<template>
    <div class="flex flex-col sm:flex-row gap-2.5">
        <div class="w-full sm:w-2/4">
            
        </div>

        <div class="w-full sm:w-2/4 sm:relative">
            <div class="sm:sticky sm:top-2.5">
                <SocialPanel />

                <div class="add-info panel flex flex-col sm:float-right">
                    <div class="text-label">02 Additional information</div>
                    <div class="flex flex-col gap-4">
                        <p class="text-base text-white font-light">
                            What I used for updating all this content?
                        </p>
                        <div class="flex flex-col gap-0">
                            <p class="text-xs italic text-grey">CMS</p>
                            <p>
                                <a
                                    class="normal-link text-red font-normal"
                                    href="#"
                                    >BlockBlog</a
                                >
                            </p>
                            <p>
                                <a class="normal-link text-red" href="#"
                                    >Laravel</a
                                >
                            </p>
                        </div>
                        <div class="flex flex-col gap-0">
                            <p class="text-xs italic text-grey">Frontend</p>
                            <p>
                                <a
                                    class="normal-link text-red font-normal"
                                    href="#"
                                    >Tailwind CSS</a
                                >
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
