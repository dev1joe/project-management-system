<script setup xmlns="http://www.w3.org/1999/html">
    import Sidebar from '@/Shared/Sidebar.vue';
    import { Head } from '@inertiajs/vue3';
</script>

<template>
    <!-- fallback head description -->
    <!-- title is handled in app.ts -->
    <Head>
        <title>MY APP</title>
        <meta type="description" content="Information about my app" head-key="description">
    </Head>

    <div class="flex mi-h-screen">
        <!-- Sidebar -->
        <Sidebar class="min-h-screen" />

        <!-- Content -->
        <div class="p-8 bg-gray-900 w-full min-h-screen text-black text-center overflow-hidden">
            <slot />
        </div>
    </div>
</template>
