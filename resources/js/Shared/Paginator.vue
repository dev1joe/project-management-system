<script setup lang="ts">
    import { Link } from '@inertiajs/vue3';

    defineProps({
        links: Array,
    })
</script>

<template>
    <div>
        <Component
            :is="link.url ? Link : 'span'"
            v-for="link in links"
            :href="link.url"
            v-html="link.label"
            class="px-1 text-decoration-none"
            :class="{ 'text-secondary-emphasis': !link.url, 'fw-700': link.active }"
        />
    </div>
</template>
