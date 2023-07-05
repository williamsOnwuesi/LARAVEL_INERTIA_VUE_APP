<template>
    <div>
        <div>
            <Nav></Nav>
        </div>

        <div>
            <LoginForm></LoginForm>
        </div>

        <div>
            <h2>{{ date }}</h2>

            <h1>Kalakuta</h1>
        </div>
    </div>
</template>

<script setup>

    import Nav from "../Components/Nav.vue";
    import LoginForm from "../Components/LoginForm.vue";

    defineProps({
        date: String,
    });

</script>