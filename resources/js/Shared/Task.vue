<script setup lang="ts">
    defineProps({
        data: Object
    });
</script>

<template>
    <tr class="text-start">
        <td class="p-3 text-sm font-medium">
            <p class="text-gray-800 dark:text-white"> {{ data.id }} </p>
        </td>
        <td class="p-4 text-sm font-medium whitespace-nowrap">
            <div>
                <h2 class="font-medium text-gray-800 dark:text-white ">{{ data.name }}</h2>
                <p class="text-sm font-normal text-gray-600 dark:text-gray-400">
                    catalogapp.io</p>
            </div>
        </td>
        <td class="p-4 text-sm font-medium whitespace-nowrap">
            <div
                class="attr" :class="data.priority == 1 ? 'attr-success' : data.priority == 2 ? 'attr-warn' : 'attr-danger'">
                {{ data.priority }}
            </div>
        </td>
        <td class="p-4 text-sm font-medium whitespace-nowrap">
            <div
                class="attr" :class="data.status == 'C' ? 'attr-success' : data.status == 'P' ? 'attr-warn' : 'attr-danger'">
                {{ data.status }}
            </div>
        </td>
        <td class="p-4 text-sm whitespace-nowrap">
            <p class="font-normal text-gray-800 dark:text-white">
                {{ data.description }}
            </p>
        </td>

        <td class="px-4 py-4 text-sm whitespace-nowrap">
            <button class="bg-white dark:text-white dark:bg-gray-900 dark:border-yellow-700 dark:hover:bg-yellow-800 rounded-lg hover:bg-gray-100 duration-300 transition-colors border px-4 py-2.5 me-4">Edit</button>
            <button class="bg-white dark:text-white dark:bg-gray-900 dark:border-red-700 dark:hover:bg-red-800 rounded-lg hover:bg-gray-100 duration-300 transition-colors border px-4 py-2.5">Delete</button>
        </td>

        <!--                                    <td class="px-4 py-4 text-sm whitespace-nowrap">-->
        <!--                                        <button-->
        <!--                                            class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-100">-->
        <!--                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"-->
        <!--                                                 stroke-width="1.5" stroke="currentColor" class="w-6 h-6">-->
        <!--                                                <path stroke-linecap="round" stroke-linejoin="round"-->
        <!--                                                      d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />-->
        <!--                                            </svg>-->
        <!--                                        </button>-->
        <!--                                    </td>-->
    </tr>
</template>

<style scoped>

</style>
