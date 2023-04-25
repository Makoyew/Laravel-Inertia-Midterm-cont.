<template layout="default">
    <div class="py-4 mt-10">
        <div class="max-w-md mx-auto p-8 rounded-lg shadow-lg bg-blue-400">
            <form @submit.prevent="submit" class="bg-white shadow-lg rounded-lg px-8 py-6">
                <div class="mb-4">
                    <h1 class="text-2xl font-bold text-black text-center">Create User</h1>
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2">User Name:</label>
                    <input v-model="form.username" type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username">
                    <div class="text-sm text-red-500 italic" v-if="form.errors.username">{{ form.errors.username }}</div>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                    <input v-model="form.password" type="password" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password">
                    <div class="text-sm text-red-500 italic" v-if="form.errors.password">{{ form.errors.password }}</div>
                </div>
                <div class="mb-4">
                    <label for="fullname" class="block text-gray-700 text-sm font-bold mb-2">Full Name:</label>
                    <input v-model="form.fullname" type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fullname">
                    <div class="text-sm text-red-500 italic" v-if="form.errors.fullname">{{ form.errors.fullname }}</div>
                </div>
                <div class="mb-4">
                    <label for="designation" class="block text-gray-700 text-sm font-bold mb-2">Designation:</label>
                    <input v-model="form.designation" type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="designation">
                    <div class="text-sm text-red-500 italic" v-if="form.errors.designation">{{ form.errors.designation }}</div>
                </div>
                <div class="mb-4">
                    <label for="department" class="block text-gray-700 text-sm font-bold mb-2">Department:</label>
                        <select v-model="form.department" id="department" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="" disabled>Select Department</option>
                            <option value="Finance">Finance</option>
                            <option value="Production">Production</option>
                            <option value="IT Support">IT Support</option>
                            <option value="Maintenance">Maintenance</option>
                            <option value="Administrative">Administrative</option>
                        </select>
                        <div class="text-sm text-red-500 italic" v-if="form.errors.department">{{ form.errors.department }}</div>
                </div>

                <div class="text-center">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">
                        Create User
                    </button>
                    <h1 class="text-center mt-2">
                        <Link href="/login" style="color: blue; text-decoration: underline;">Already have an account?</Link>
                    </h1>
                </div>
            </form>
        </div>
    </div>
    </template>

    <script setup>
    import { Link, useForm } from '@inertiajs/inertia-vue3'

    let form = useForm({
        username:'',
        password:'',
        fullname:'',
        designation:'',
        department:''
    })

    const submit = () => {
        form.post('/')
    }

    </script>
