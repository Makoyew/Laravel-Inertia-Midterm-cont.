<template layout="default">
    <div class="flex justify-center items-center mt-10" style="background-color: #3B82F6;">
        <div class="bg-blue-600 p-10 rounded shadow-xl w-full md:w-3/4 lg:w-1/2">
            <h1 class="text-3xl text-center text-white font-bold mb-5">Edit Member</h1>
            <hr class="border-white mb-5">
            <form @submit.prevent="submit" class="w-full">
                <div class="mb-4">
                    <label for="last_name" class="block text-black font-bold mb-2">Last Name:</label>
                    <input v-model="form.last_name" type="text" class="form-input w-full border-white rounded-lg py-2 px-3 text-black leading-tight focus:outline-none focus:border-blue-400" id="last_name">
                    <div class="text-sm text-red-500 italic mt-1" v-if="form.errors.last_name">{{ form.errors.last_name }}</div>
                </div>
                <div class="mb-4">
                    <label for="first_name" class="block text-black font-bold mb-2">First Name:</label>
                    <input v-model="form.first_name" type="text" class="form-input w-full border-white rounded-lg py-2 px-3 text-black leading-tight focus:outline-none focus:border-blue-400" id="first_name">
                    <div class="text-sm text-red-500 italic mt-1" v-if="form.errors.first_name">{{ form.errors.first_name }}</div>
                </div>
                <div class="mb-4">
                    <label for="designation" class="block text-black font-bold mb-2">Designation:</label>
                    <input v-model="form.designation" type="text" class="form-input w-full border-white rounded-lg py-2 px-3 text-black leading-tight focus:outline-none focus:border-blue-400" id="designation">
                    <div class="text-sm text-red-500 italic mt-1" v-if="form.errors.designation">{{ form.errors.designation }}</div>
                </div>
                <div class="mb-4">
                    <label for="countries" class="block text-black font-bold mb-2">Select Company:</label>
                    <select v-model="form.company_id" id="countries" class="form-input w-full border-white rounded-lg py-2 px-3 text-black leading-tight focus:outline-none focus:border-blue-400">
                    <option value="">Choose company</option>
                    <option v-for="company in companies" :key="company.id" :value="company.id">{{ company.name }}</option>

                    </select>
                    <div class="text-sm text-red-500 italic" v-if="form.errors.company_id">The in-charge field is required</div>
                </div>
                <div class="flex justify-center">
                    <button class="bg-white hover:bg-blue-400 text-blue-700 font-bold py-2 px-4 rounded-lg focus:outline-none" type="submit">
                        Edit Member
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>
<script setup>
import { useForm } from '@inertiajs/inertia-vue3'
const props = defineProps({
    member: Object,
    companies: Array
})
let form = useForm({
    last_name: props.member.last_name,
    first_name: props.member.first_name,
    designation: props.member.designation,
    company_id: props.member.company_id,
})
const submit = () => {
    if(props.member.last_name == form.last_name && props.member.first_name == form.first_name && props.member.designation == form.designation && props.member.company_id == form.company_id){
        alert("You've made no changes!")
    } else {
        form.put('/members/' + props.member.id)
    }
}
</script>
