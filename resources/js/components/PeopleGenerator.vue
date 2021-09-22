<template>
    <div class="container text-center">
        <img width="150" class="mt-5 img-fluid" v-bind:src="picture" alt="">
        <h1>{{ firstName }}</h1>
        <h3>{{ email }}</h3>

        <button v-on:click="changeUserAsync()"
        :class="`btn btn-primary `+gender">Get Random User</button>

        
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return{
                firstName: 'Jon Doe',
                email: 'email@email.com',
                gender: 'female',
                picture: 'https://avataaars.io/?avatar'

            }
        },
        methods: {
            changeUser() {
                console.log(this.firstName)
                this.firstName = 'Vasia Pupkin'
                this.picture = 'https://randomuser.me/api/portraits/men/10.jpg'
            },
            async changeUserAsync(){
                const res = await fetch('https://randomuser.me/api')
                const { results } = await res.json();
                this.firstName = results[0].name.first

            }
        }
    }
</script>
