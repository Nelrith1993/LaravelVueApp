<script>
    export default {
        name: 'CategoriesCreate'
    }

</script>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import CategoryForm from '@/Components/Categories/Form.vue';

const form = useForm ({
    name: ''
})


</script>

<template>
    <AppLayout>
        <template #header>
            <h1 class="text-xl leading-tight text-gray-800 font-semibolt">Create Category</h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="p-6 bg-white border-b border-gray-200 rounded-lg shadow-md">
                    <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <CategoryForm :form="form" @submit="form.post(route('categories.store'))"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>