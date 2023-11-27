<script setup>
import { Link } from "@inertiajs/vue3";
import { blogarrowIcon } from '@/Components/Portfolio';
import SocialPanel from '@/Components/Portfolio/Social-panel.vue';
import newtabSmIcon from '@/Components/Portfolio/svg/newtab-sm.vue';
</script>

<template>
    <div class="flex flex-col sm:flex-row gap-2.5">
        <div class="w-full sm:w-3/4">
            <div class="panel flex flex-col gap-3">
                <p class="panel-label text-label mb-0">Daiy dose of Bs</p>
                <p class="text-xl text-white font-normal">
                    Contoh-contoh Rizz 13 May digunakan dalam masyarakat kini
                </p>
                <p class="text-white font-light text-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,molestiae quas vel sint commodi
                    repudiandae consequuntur voluptatum laborumnumquam blanditiis harum quisquam eius sed odit fugiat iusto
                    fuga praesentiumoptio, eaque rerum! Provident similique accusantium nemo autem.
                    Veritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquamnihil, eveniet
                    aliquid culpa officia aut! Impedit sit sunt quaerat, odit,tenetur error, harum nesciunt ipsum debitis
                    quas aliquid. Reprehenderit,quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos
                    sapiente officiis modi at sunt excepturi expedita sint?
                    Sed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis nesciunt dolorem!
                    Officiis iure rerum voluptates a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius fugit
                    doloribus tenetur fugiat, temporibus enim commodi iusto libero magni deleniti quod quam consequuntur!
                    Commodi minima excepturi repudiandae velit hic maximedoloremque. Quaerat provident commodi consectetur
                    veniam similique ad earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo fugiat,
                    dolorum eligendi quam cupiditate excepturi mollitia maiores labore suscipit quas?
                </p>
            </div>
        </div>

        <div class="w-full sm:w-1/4 sm:relative">
            <div class="sm:sticky sm:top-2.5 flex flex-col justify-start items-start gap-2.5">
                <div class="panel flex flex-col gap-2 w-full">
                    <div class="flex justify-between items-center">
                        <p class="panel-label text-label mb-0">Other blog</p>
                        <Link :href="route('blog')" class="newtabIcon">
                            <newtabSmIcon />
                        </Link>
                    </div>

                    <div class="otherBlog-listing blog-overflow overflow-y-scroll pr-2">
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
                <div class="sm:sticky sm:top-2.5">
                    <SocialPanel />
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
