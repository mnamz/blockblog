<script setup>
import { ref, onMounted } from 'vue';
import { Link, router, useForm } from '@inertiajs/vue3';
import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import Editor from '@tinymce/tinymce-vue';

const props = defineProps({
    profile: Object,
});

const form = useForm({
    _method: 'PUT',
    name: props.profile.name,
    details: props.profile.details,
    facebook_link: props.profile.facebook_link,
    linkedin_link: props.profile.linkedin_link,
    instagram_link: props.profile.instagram_link,
    github_link: props.profile.github_link,
    discord_link: props.profile.discord_link,
    photo: props.profile.photo ? props.profile.photo : null,
});

const onPhotoChange = (event) => {
    const file = event.target.files[0];
    form.photo = file;
};

const submit = () => {
    form.put(route("site.settings.update"));
};

const apiKey = import.meta.env.VITE_TINYMCE_API;

</script>
<template>
    <FormSection @submitted="submit">
        <template #title>
            Profile
        </template>

        <template #description>
            Update site portfolio with your details
        </template>

        <template #form>
            <!-- Name -->
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="name" value="Name" />
                <TextInput id="name" v-model="form.name" type="text" class="mt-1 block w-full" required
                    autocomplete="name" />
                <InputError :message="form.errors.name" class="mt-2" />
            </div>

            <!-- Photo -->
            <!-- <div class="col-span-6 sm:col-span-4">
                <InputLabel for="photo" value="Profile Photo" />
                <input id="photo" type="file" accept="image/*" @change="onPhotoChange" class="mt-1 block w-full" />
                <InputError :message="form.errors.photo" class="mt-2" />
            </div> -->

            <!-- Details -->
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="details" value="Details" />
                <div>
                    <Editor v-model="form.details" :api-key="apiKey" :init='{
                        "toolbar_mode": "sliding",
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
                <InputError :message="form.errors.details" class="mt-2" />
            </div>

            <!-- Facebook Link -->
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="facebook_link" value="Facebook Link" />
                <TextInput id="facebook_link" v-model="form.facebook_link" type="text" class="mt-1 block w-full"
                    autocomplete="facebook_link" />
                <InputError :message="form.errors.facebook_link" class="mt-2" />
            </div>

            <!-- LinkedIn Link -->
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="linkedin_link" value="LinkedIn Link" />
                <TextInput id="linkedin_link" v-model="form.linkedin_link" type="text" class="mt-1 block w-full"
                    autocomplete="linkedin_link" />
                <InputError :message="form.errors.linkedin_link" class="mt-2" />
            </div>

            <!-- Instagram Link -->
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="instagram_link" value="Instagram Link" />
                <TextInput id="instagram_link" v-model="form.instagram_link" type="text" class="mt-1 block w-full"
                    autocomplete="instagram_link" />
                <InputError :message="form.errors.instagram_link" class="mt-2" />
            </div>

            <!-- Github Link -->
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="github_link" value="Github Link" />
                <TextInput id="github_link" v-model="form.github_link" type="text" class="mt-1 block w-full"
                    autocomplete="github_link" />
                <InputError :message="form.errors.github_link" class="mt-2" />
            </div>

            <!-- Discord Link -->
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="discord_link" value="Discord Link" />
                <TextInput id="discord_link" v-model="form.discord_link" type="text" class="mt-1 block w-full"
                    autocomplete="discord_link" />
                <InputError :message="form.errors.discord_link" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <PrimaryButton type="submit">
                    Update Profile
                </PrimaryButton>
            </div>
        </template>
    </FormSection>
</template>