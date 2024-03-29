<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Document</title>
</head>
<body>
<div id="app">
    <div class="m-5">
<div v-for="(item, index) in todoList" :key="index" class="m-1" >{{item}}</div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-6">
               <input class="form-control" @keyup.enter="updateTodoList" type="text" placeholder="Inserisci nuovo personaggio" v-model="todoItem"> 
            </div>
            <div class="col-6">
                <button class="btn btn-success" type="button" id="save-todo" @click="updateTodoList">Invia</button>
            </div>
    </div>


</form>
</div>
    <script src="script.js" type="text/javascript"></script>
</body>
</html>