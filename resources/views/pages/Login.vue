<template layout="default">
    <div class="py-4 mt-10">
      <div class="max-w-md mx-auto p-8 rounded-lg shadow-lg mt-5 bg-blue-400">
        <form @submit.prevent="submit" class="bg-white shadow-lg rounded-lg px-8 py-6">
          <div class="mb-4">
            <h1 class="text-4xl text-center mb-2 font-bold text-black">Login</h1>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username:</label>
            <input v-model="form.username" type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <div class="text-sm text-red-500 italic" v-if="form.errors.username">{{ form.errors.username }}</div>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password:</label>
            <input v-model="form.password" type="password" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <div class="text-sm text-red-500 italic" v-if="form.errors.password">{{ form.errors.password }}</div>
          </div>
          <div class="flex items-center justify-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
              Sign In
            </button>
          </div>
          <h1 class="text-center mt-2">
            <Link href="users/Create" style="color: blue; text-decoration: underline;">Don't have an account yet?</Link>
          </h1>
          <div class="text-sm text-red-500 italic mt-2" v-if="form.errors.authentication">{{ form.errors.authentication }}</div>
        </form>
      </div>
    </div>
  </template>
<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import {useForm} from '@inertiajs/inertia-vue3'


let form = useForm({
    'username': '',
    'password': ''
})

let submit = () => {
    form.post('/login')
}

</script>
