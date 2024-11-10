<script>
    export default {
        name: 'CategoryEdit'
    }

</script>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import CategoryForm from '@/Components/Categories/Form.vue';

const props = defineProps({
    category: {
        type: Object,
        required: true
    }
})

const form = useForm ({
    name: props.category.name
})


</script>

<template>
    <AppLayout title="Edit Category">
        <template #header>
            <h1 class="text-xl leading-tight text-gray-800 font-semibolt">Edit Category</h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="p-6 bg-white border-b border-gray-200 rounded-lg shadow-md">
                    <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <CategoryForm :form="form" :updating="true" @submit="form.put(route('categories.update', category.id))"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>