<template layout>
    <div class="px-4 py-8">
      <div class="flex justify-between mb-8">
        <h1 class="text-4xl font-bold text-blue-600 mt-5">List of Members</h1>
        <a href="/members/create" class="bg-blue-700 mt-5 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded-lg focus:outline-none">Create Member</a>
      </div>
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider lg:hidden">
              Name
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:table-cell">
              Last Name
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:table-cell">
              First Name
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:table-cell">
              Designation
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:table-cell">
              Company Name
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:table-cell">
              Actions
            </th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <tr v-for="member in members" :key="member.id" class="hover:bg-gray-100 lg:hover:bg-transparent">
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 lg:hidden">{{ member.first_name }} {{ member.last_name }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 hidden lg:table-cell">{{ member.last_name }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 hidden lg:table-cell">{{ member.first_name }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden lg:table-cell">{{ member.designation }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden lg:table-cell">{{ member.company.name }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium lg:table-cell">
              <a :href="'/members/edit/' + member.id" class="text-indigo-600 hover:text-indigo-900">Edit</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'

let props = defineProps({
    members: Array,
    companies: Array
})

const closeNotif = () => {
    const toast = document.getElementById('toast-bottom-left');
    toast.style.opacity = '0'
    toast.style.transition = '.5s all ease'
}
</script>
