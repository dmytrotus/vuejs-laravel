<template>
<ul class="list-group mt-2">
    <li v-for="task in tasks" :key="task.id"
    class="list-group-item">{{ task.title }}</li>
</ul>   
</template>

<script>
export default {
    name: 'Tasks',
    /*props: {
        tasks: Array,
    },*/
    data () {
        return {
          tasks: []
        }
    },
    created() {
        this.getTasks()
    },
    methods: {
        getTasks(){
            fetch('/api/tasks')
            .then(response => response.json())
            .then(data => (this.tasks = data));

        },
    }
}
</script>
