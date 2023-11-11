<template>
    <div>
        <div v-for="post in posts" :key="post.id" class="p-6 lg:p-8 bg-white border-b border-gray-200">
            <h1 class="mt-8 text-2xl font-medium text-gray-900">
                {{ post.title }}
            </h1>
            <p class="mt-6 text-gray-500 leading-relaxed">
                {{ post.content }}
            </p>
            <p class="mt-2 text-sm text-gray-600">
                Posted by {{ post.user.name }} on {{ post.created_at }}
            </p>
        </div>
    </div>
</template>

<script setup>
const props = defineProps(['posts']);
</script>
