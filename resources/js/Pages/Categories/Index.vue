<script>
export default {
    name: 'CategoriesIndex'
}
</script>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/vue3'
import { Inertia } from '@inertiajs/inertia'

defineProps({
    categories: {
        type: Object,
        required: true
    }
})

const deleteCategory = id => {
    if (confirm('Are you sure you want to delete this category?')) {
        Inertia.delete(route('categories.destroy', id))
    }
}

</script>

<template>
    <AppLayout>
        <template #header>
            <h1 class="text-xl font-semibold leading-tight text-gray-800">Categories</h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="p-6 bg-white border-b border-gray-200 rounded-lg shadow-md">
                    <div class="flex justify-between">
                        <Link :href="route('categories.create')"
                            v-if="$page.props.user.permissions.includes('create categories')"
                            class="text-white bg-indigo-700 hover:bg-indigo-800 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 focus:outline-none">
                        Create category
                        </Link>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Category name
                                    </th>
                                    <th>

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 dark:border-gray-700"
                                    v-for="category in categories.data">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ category.name }}
                                    </th>
                                    <td class="flex justify-around px-6 py-4">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            <Link :href="route('categories.edit', category.id)"
                                                v-if="$page.props.user.permissions.includes('update categories')">Edit
                                            </Link>
                                        </a>
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            <Link href="" @click="deleteCategory(category.id)"
                                                v-if="$page.props.user.permissions.includes('delete categories')">Delete
                                            </Link>
                                        </a>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </AppLayout>
</template>