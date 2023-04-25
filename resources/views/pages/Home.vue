

<template layout>



    </template>

    <script setup>

    import { Link, usePage } from '@inertiajs/inertia-vue3'



    const props = defineProps({
        topics:Array
    })



    const user = usePage().props.auth

    console.log(user)

    </script>
