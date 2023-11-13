<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import SectionBorder from '@/Components/SectionBorder.vue';
import UpdateSiteProfile from '@/Pages/Site/Partials/UpdateSiteProfile.vue';

defineProps({
    profile: Object,
});

</script>

<template>
    <AppLayout title="Profile">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Portfolio
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div v-if="$page.props.jetstream.canUpdateProfileInformation">
                    <UpdateSiteProfile v-if="profile" :profile="profile" />

                    <SectionBorder />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
