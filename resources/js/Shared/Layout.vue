<script setup>
    import Sidebar from './Sidebar.vue';
</script>

<template>
    <div class="d-flex align-items-start">
        <!-- Sidebar -->
        <Sidebar />

        <!-- Content -->
        <div class="w-100 p-4">
            <slot />
        </div>
    </div>
</template>
