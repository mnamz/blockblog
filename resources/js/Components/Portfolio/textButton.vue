<template>
    <button @click="handleClick" class="primary-button px-5 py-1 rounded-lg text-base font-normal">
        {{ buttonText }}
    </button>
</template>
  
<script>
export default {
    props: {
        buttonText: {
            type: String,
            default: "Click me", // Default text if not provided
        },
    },
    methods: {
        handleClick() {
            this.$emit("click"); // Emit a custom click event
        },
    },
};
</script>