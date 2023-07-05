<template>
    <div>
        <form @submit.prevent="createUser">

            <input name="user_name" type="text" v-model="form.user_name"/>
            <input name="user_image" type="file" @input="form.user_image = $event.target.files[0]"/>

            <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                {{ form.progress.percentage }}%
            </progress>

            <button type="submit">Submit</button>

        </form>
    </div>
</template>

<script setup>

    import { useForm } from '@inertiajs/vue3';

    const form = useForm({
        user_name: null,
        user_image: null,
    })

    function createUser() {
        form.post('/create_user');
    }

</script>
