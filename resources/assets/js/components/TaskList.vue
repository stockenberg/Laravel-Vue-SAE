<template>
    <ul class="list-group">
        <li class="list-group-item row" v-for="task in tasks">
            <div class="pull-left col-md-2 text-left">
                <div class="">
                    <button type="submit" @click="completeTask(task.id)" class="btn btn-success">Done</button>
                </div>
            </div>
            <strong class="col-md-8">{{task.title}}</strong>
            <div class="col-md-2 pull-right text-right">
                <div class="">
                    <button type="submit" class="btn btn-danger" @click="deleteTask(task.id)">Delete</button>
                </div>
            </div>
        </li>
    </ul>
</template>

<script>
    export default {
        data() {
            return {
                tasks: {}
            }
        },
        mounted() {
            console.log('component ready..');
            this.loadTasks();
            Event.$on('taskCreated', () => this.loadTasks());
        },

        methods: {
            loadTasks() {
                axios.get('/tasks').then((res) => {
                   this.tasks = res.data;
                });
            },
            completeTask(id) {
                axios.get('/task/complete/' + id)
                    .then(res => {
                        this.loadTasks();
                    })
            },
            deleteTask(id) {
                axios.delete('/task/' + id).then(res => {
                    this.loadTasks();
                })
            }
        }
    }
</script>

<style lang="scss">
    strong{
        font-size: 18pt;
    }
</style>