<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Button from "@/Components/Button.vue";
import PostList from '@/Components/Post/List.vue'
import PostCreate from '@/Components/Post/Create.vue';
import { Head } from '@inertiajs/vue3';
import { Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
    projects: {
        type: Object,
        default: () => ({}),
    },
});

const form = useForm({});

function destroy(id) {
    if (confirm("Are you sure you want to delete")) {
        form.delete(route('projects.destroy', id));
    }
}
</script>

<template>
    <AppLayout title="Projects">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Projects
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div>
                        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                                <div class="p-6 bg-white border-b border-gray-200">
                                    <div class="mb-2">
                                        <Link :href="route('projects.create')">
                                        <PrimaryButton>Add</PrimaryButton>
                                        </Link>
                                    </div>
                                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                        <table class="w-full text-sm text-left">
                                            <thead
                                                class="text-xs text-gray-700 uppercase">
                                                <tr class="bg-white border">
                                                    <th scope="col" class="px-6 py-3">#</th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Title
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Slug
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Edit
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Delete
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="project in projects" :key="project.id"
                                                    class="bg-white border-b">
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-gray-900 dark:text-black whitespace-nowrap">
                                                        {{ project.id }}
                                                    </th>
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-gray-900 dark:text-black whitespace-nowrap">
                                                        {{ project.name }}
                                                    </th>
                                                    <td class="px-6 py-4">
                                                        {{ project.slug }}
                                                    </td>


                                                    <td class="px-6 py-4">
                                                        <Link :href="route(
                                                            'projects.edit',
                                                            project.id
                                                        )
                                                            "
                                                            class="px-4 py-2 text-white bg-blue-600 rounded-lg">Edit</Link>
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <PrimaryButton class="bg-red-700" @click="destroy(project.id)">
                                                            Delete
                                                        </PrimaryButton>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
