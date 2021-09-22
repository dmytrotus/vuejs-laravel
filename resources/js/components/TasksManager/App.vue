<template>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <Header />
            </div>
            <div class="col-4">
                <Button />
            </div>
            <div class="col-12">
                <TaskForm />

                <Tasks />
            </div>
        </div>
        
        
    </div>
</template>


<script>
import Header from './Header'
import Button from './Button'
import TaskForm from './TaskForm'
import Tasks from './Tasks'

export default {
    components: {
        Header, Button, TaskForm,
        Tasks
    }
}
</script>
