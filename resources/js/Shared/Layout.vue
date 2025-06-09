<script setup>
    import Sidebar from '@/Shared/Sidebar.vue';
</script>

<template>
    <div class="flex mi-h-screen">
        <!-- Sidebar -->
        <Sidebar class="min-h-screen" />

        <!-- Content -->
        <div class="p-8 bg-gray-900 w-full min-h-screen text-black text-center overflow-hidden">
            <slot />
        </div>
    </div>
</template>
