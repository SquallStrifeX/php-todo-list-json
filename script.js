const { createApp } = Vue;

 createApp({
    data() {
        return {
            apiUrl: 'server.php',
            todoItem: '',
            todoList: [],
        }
    },
    mounted() {
        this.getTodoList();
    },
    methods: {
        updateTodoList(){
            const data = {
                todoItem: this.todoItem
            }

            axios.post(this.apiUrl, data, {
                headers: { 'Content-type' : 'multipart/form-data'}
            }).then((response) => {
                this.todoItem = '';

                this.todoList = response.data;
            })
        },

        getTodoList() {
            axios.get(this.apiUrl).then((response) => {
                console.log(response.data);
                this.todoList = response.data
                console.log(apiUrl)
            });
        }
    },
 }).mount('#app')