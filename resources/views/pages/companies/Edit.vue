<template layout="default">
    <div class="flex justify-center items-center mt-10" style="background-color: #3B82F6;">
        <div class="bg-blue-600 p-10 rounded shadow-xl w-full md:w-3/4 lg:w-1/2">
            <h1 class="text-3xl text-center text-white font-bold mb-5">Edit Company</h1>
            <hr class="border-white mb-5">
            <form @submit.prevent="submit" class="w-full">
                <div class="mb-4">
                    <label for="name" class="block text-black font-bold mb-2">Company Name:</label>
                    <input v-model="form.name" type="text" class="form-input w-full border-white rounded-lg py-2 px-3 text-black leading-tight focus:outline-none focus:border-blue-400" id="name">
                    <div class="text-sm text-red-500 italic mt-1" v-if="form.errors.name">{{ form.errors.name }}</div>
                </div>
                <div class="mb-4">
                    <label for="type" class="block text-black font-bold mb-2">Company Type:</label>
                    <input v-model="form.type" type="text" class="form-input w-full border-white rounded-lg py-2 px-3 text-black leading-tight focus:outline-none focus:border-blue-400" id="type">
                    <div class="text-sm text-red-500 italic mt-1" v-if="form.errors.type">{{ form.errors.type }}</div>
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-black font-bold mb-2">Address:</label>
                    <input v-model="form.address" type="text" class="form-input w-full border-white rounded-lg py-2 px-3 text-black leading-tight focus:outline-none focus:border-blue-400" id="address">
                    <div class="text-sm text-red-500 italic mt-1" v-if="form.errors.address">{{ form.errors.address }}</div>
                </div>
                <div class="mb-4">
                    <label for="net_worth" class="block text-black font-bold mb-2">Net Worth:</label>
                    <input v-model="form.net_worth" type="number" class="form-input w-full border-white rounded-lg py-2 px-3 text-black leading-tight focus:outline-none focus:border-blue-400" id="net_worth">
                    <div class="text-sm text-red-500 italic mt-1" v-if="form.errors.net_worth">{{ form.errors.net_worth }}</div>
                </div>
                <div class="flex justify-center">
                    <button class="bg-white hover:bg-blue-400 text-blue-700 font-bold py-2 px-4 rounded-lg focus:outline-none" type="submit">
                        Edit Company
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>


<script setup>

import { useForm, usePage } from '@inertiajs/inertia-vue3'
import { setTransitionHooks } from 'vue';

const props = defineProps({
    company: Object
})

let form = useForm({
    name: props.company.name,
    type: props.company.type,
    address: props.company.address,
    net_worth: props.company.net_worth
})

const submit = () => {
    form.put('/companies/' + props.company.id)
}

</script>
