<script setup lang="ts">
    import { Link } from '@inertiajs/vue3';

    const props = defineProps({
        active: Boolean,
    });
</script>

<template>
    <Link class="hover:underline text-blue-500" :class="{'font-bold underline': active}">
        <slot />
    </Link>
</template>
