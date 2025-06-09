<script setup>
    import {Link} from '@inertiajs/vue3';
    import NavLink from '@/Shared/NavLink.vue';
</script>

<template>
    <ul class="pb-2">
        <li>
            <NavLink href="/" :active="$page.component == 'Home'">Home</NavLink>
        </li>
        <li>
            <NavLink href="/users" :active="$page.component == 'Users'">Users</NavLink>
        </li>
        <li>
            <NavLink href="/products" :active="$page.component == 'Products'">Products</NavLink>
        </li>
        <li>
            <Link href="/post" method="post" as="button" class="hover:underline text-blue-500">Post Request</Link>
        </li>
    </ul>
</template>

<style scoped>
    li {
        display: inline-block;
        margin-right: 0.5rem;
    }
</style>
