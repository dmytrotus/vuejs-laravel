<template>
    <button v-on:click="showTaskForm()" class="btn btn-primary">Add Task</button>
</template>

<script>
    export default {
        methods:{
            showTaskForm(){
                console.log('showTaskForm')
            }
        }
    }
</script>
