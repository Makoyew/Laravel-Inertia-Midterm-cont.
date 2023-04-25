<template layout>

    <ConfirmDialog></ConfirmDialog>

    <div class="px-4 py-8">
        <div class="flex justify-between mb-8">
            <h1 class="text-4xl font-bold text-blue-600 mt-5">List of Companies</h1>
            <a href="/companies/create" class="bg-blue-700 mt-5 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded-lg focus:outline-none">Create Company</a>
        </div>
                <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider lg:hidden">
                Name
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:table-cell">
                Name of Company
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:table-cell">
                Type of Company
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:table-cell">
                Address
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:table-cell">
                Net Worth
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:table-cell">
                Actions
            </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <tr v-for="company of companies" :key="company.id" class="hover:bg-gray-100 lg:hover:bg-transparent">
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 lg:hidden">{{ company.name }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 hidden lg:table-cell">{{ company.name }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden lg:table-cell">{{ company.type }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden lg:table-cell">{{ company.address }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden lg:table-cell">{{ company.net_worth }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium lg:table-cell">
                <a :href="'/companies/edit/' + company.id" class="text-indigo-600 hover:text-indigo-900">Edit</a>
            </td>
            </tr>
        </tbody>
        </table>
    </div>
</template>
<script setup>
import {Link} from '@inertiajs/inertia-vue3'
import ConfirmDialog from '@/views/components/confirm-dialog.vue';

defineProps({
    'companies': Array
})
</script>
