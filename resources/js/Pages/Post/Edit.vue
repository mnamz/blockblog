<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
    post: {
        type: Object,
        default: () => ({}),
    },
});

const form = useForm({
    id: props.post.id,
    title: props.post.title,
    slug: props.post.slug,
    content: props.post.content,
});


const submit = () => {
    form.put(route("posts.update", props.post.id));
};
</script>

<template>
    <AppLayout title="Posts">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Posts
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
                                                    <label for="Title"
                                                        class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Title</label>
                                                    <input type="text" v-model="form.title" name="title"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                        placeholder="" />
                                                    <div v-if="form.errors.title" class="text-sm text-red-600">
                                                        {{ form.errors.title }}
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
                                                    <label for="slug"
                                                        class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Content</label>
                                                    <textarea type="text" v-model="form.content" name="content" id=""
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"></textarea>

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
