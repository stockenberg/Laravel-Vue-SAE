<template>
    <div class="panel panel-default row">
        <div class="panel-body">
            <form method="post" role="form">
                <legend>Add Task</legend>

                <div class="form-group">
                    <label for=""></label>
                    <input type="text" class="form-control" name="" id="" @keydown.enter.prevent="addTask()"
                           placeholder="Input..." v-model="title">
                </div>
                <p class="text-danger">{{this.error}}</p>
            </form>
        </div>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                title: null,
                error: null
            }
        },
        mounted() {
            console.log('component ready..');
        },
        methods: {
            addTask() {
                axios.post("/task", {
                    title: this.title,
                    completed: false
                }).then(res => {
                    this.title = null;
                    Event.$emit('taskCreated');
                }).catch(err => {
                    this.error = err.response.data.errors.title[0];
                })
            }

        }
    }
</script>

<style>

</style>