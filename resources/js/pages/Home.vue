<script setup>
    import Layout from '../Shared/Layout.vue';

    defineOptions({
        layout: Layout,
    });

    defineProps({
        name: String,
        frameworks: Array,
        time: String,
    });
</script>

<template>
        <h1>Hello, {{name}}!</h1>
        <p>The Time is {{ time }}</p>

        <p>in this series we will use the following frameworks:</p>

        <ul>
            <li v-for="i in frameworks" v-text="i"></li>
        </ul>
</template>

