<template>
    <section class="bg-blue-700 fixed top-0 w-full z-10">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
        <div class="text-lg text-white font-bold">
            <Link href="/">Midterm Project</Link>
        </div>
        <nav class="flex items-center space-x-4">
            <Link v-if="user" class="text-sm font-medium text-white hover:text-blue-200" href="/companies">Company</Link>
            <Link v-if="user" class="text-sm font-medium text-white hover:text-blue-200" href="/members">Member</Link>
        </nav>
        <div class="flex items-center space-x-4">
            <Link v-if="!user" class="py-2 px-4 rounded text-white font-semibold hover:bg-blue-600 duration-300" href="/login">Log In</Link>
            <Link v-if="user" class="py-2 px-4 rounded text-white font-semibold hover:bg-blue-600 duration-300" href="/logout" method="post" as="button">Log Out || <strong>{{ user.fullname }}</strong></Link>
        </div>
        </div>
    </div>
    </section>

</template>

 <script setup>
    import { Link } from '@inertiajs/inertia-vue3'
    import { defineProps } from 'vue'
        defineProps({
        user: ''
        })
</script>
