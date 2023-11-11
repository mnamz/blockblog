<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
    style: {
        type: String,
        default: 'primary',
    },
});
</script>

<template>
    <button :type="type" :class="[
        'inline-flex items-center px-4 py-2 font-semibold text-xs uppercase tracking-widest focus:outline-none transition ease-in-out duration-150',
        {
            'bg-gray-800 border border-transparent rounded-md text-white hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2':
                style === 'primary',
            'bg-green-500 border border-transparent rounded-md text-white hover:bg-green-600 focus:bg-green-600 active:bg-green-700 focus:ring-2 focus:ring-offset-2':
                style === 'success',
            'bg-red-500 border border-transparent rounded-md text-white hover:bg-red-600 focus:bg-red-600 active:bg-red-700 focus:ring-2 focus:ring-offset-2':
                style === 'danger',
        },
    ]">
        <slot />
    </button>
</template>
  

  