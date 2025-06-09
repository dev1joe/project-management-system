<script setup lang="ts">
    import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="sidebar nav flex-column nav-pills p-3 text-white text-start" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <h4 class="text-center text-white">Dashboard</h4>
        <Link href="/" class="nav-link text-start" :class="{active: $page.component === 'Home'}" id="v-pills-home-tab" data-bs-toggle="pill"
              data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home"
              aria-selected="true">Home</Link>

        <Link href="/tasks" class="nav-link text-start" :class="{active: $page.component === 'Tasks'}" id="v-pills-users-tab" data-bs-toggle="pill"
              data-bs-target="#v-pills-users" role="tab" aria-controls="v-pills-users"
              aria-selected="false">Tasks</Link>

        <Link href="/projects" class="nav-link text-start" :class="{active: $page.component === 'Projects'}" id="v-pills-products-tab" data-bs-toggle="pill"
              data-bs-target="#v-pills-products" role="tab" aria-controls="v-pills-products"
              aria-selected="false">Projects</Link>

        <Link href="/orders" class="nav-link text-start" :class="{active: $page.component === 'Orders'}" id="v-pills-orders-tab" data-bs-toggle="pill"
              data-bs-target="#v-pills-orders" role="tab" aria-controls="v-pills-orders"
              aria-selected="false">Orders</Link>
    </div>
</template>

<style>
    .sidebar {
        background-color: #343a40;
        height: 100dvh;
    }

    .nav-link {
        color: #adb5bd;
    }

    .nav-link:hover {
        color: white;
    }
</style>

