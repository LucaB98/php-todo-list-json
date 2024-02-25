const { createApp } = Vue;

const endpoint = 'http://localhost/boolean/php-todo-list-json/api/tasks/'

const app = createApp({
    data: () => ({
        tasks: [],
    }),
    created() {
        axios.get(endpoint).then(res => {
            this.tasks = res.data
        })
    }
})

app.mount('#root')