<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link, useForm } from '@inertiajs/vue3';
import Editor from '@tinymce/tinymce-vue'

const props = defineProps({
    projects: {
        type: Object,
        default: () => ({}),
    },
});

const form = useForm({
    name: '',
    slug: '',
    description: '',
    content: '',
});

const submit = () => {
    form.post(route("projects.store"));
};
</script>

<template>
    <AppLayout title="Posts">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Add Project
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <div>
                        <div class="bg-white">
                            <div class="py-12">
                                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                                        <div class="bg-white">
                                            <form @submit.prevent="submit">
                                                <div class="mb-6">
                                                    <label for="Name"
                                                        class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Name</label>
                                                    <input type="text" v-model="form.name" name="name"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                        placeholder="" />
                                                    <div v-if="form.errors.name" class="text-sm text-red-600">
                                                        {{ form.errors.name }}
                                                    </div>
                                                </div>
                                                <div class="mb-6">
                                                    <label for="Slug"
                                                        class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Slug</label>
                                                    <input type="text" v-model="form.slug" name="title"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                        placeholder="" />
                                                    <div v-if="form.errors.slug" class="text-sm text-red-600">
                                                        {{ form.errors.slug }}
                                                    </div>
                                                </div>
                                                <div class="mb-6">
                                                    <label for="Description"
                                                        class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Description</label>
                                                    <input type="text" v-model="form.description" name="description"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                        placeholder="" />
                                                    <div v-if="form.errors.description" class="text-sm text-red-600">
                                                        {{ form.errors.description }}
                                                    </div>
                                                </div>
                                                <div class="mb-6">
                                                    <label for="slug"
                                                        class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Content</label>
                                                    <div>
                                                        <Editor v-model="form.content"
                                                            api-key="7fim64n9teu9l1pfpnh5cnxlsphcs7j49fsdq21dzbgfttq9"
                                                            :init='{
                                                                "toolbar_mode": "sliding",
                                                                "plugins": "ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss",
                                                                "toolbar": "undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat",
                                                                "tinycomments_mode": "embedded",
                                                                "tinycomments_author": "Author name",
                                                                "mergetags_list": [
                                                                    { "value": "First.Name", "title": "First Name" },
                                                                    { "value": "Email", "title": "Email" }
                                                                ],
                                                                "ai_request": (request, respondWith) => respondWith.string(() => Promise.reject("see"))
                                                            }' />
                                                    </div>
                                                    <div v-if="form.errors.content" class="text-sm text-red-600">
                                                        {{ form.errors.content }}
                                                    </div>
                                                </div>
                                                <button type="submit"
                                                    class="text-white bg-blue-700  focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 "
                                                    :disabled="form.processing" :class="{ 'opacity-25': form.processing }">
                                                    Submit
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
