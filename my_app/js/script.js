const { createApp } = Vue;
const app = createApp({
    data() {
        return {
            message: 'Hello Vue!',
        }
    }
})

app.mount('#root')