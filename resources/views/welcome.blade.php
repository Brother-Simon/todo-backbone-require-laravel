<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/public/css/reset.css">
        <link rel="stylesheet" href="/public/css/todos.css" />
        {{--<link rel="stylesheet" href="public/css/main.css">--}}
        <script data-main="public/js/main" src="/public/js/libs/require/require.js"></script>
    </head>
    <body>

<div id="todoapp">

    <div class="title">
        <h1>Todos</h1>
    </div>

    <div class="content">

        <div id="create-todo">
            <input id="new-todo" placeholder="What needs to be done?" type="text" />
            <span class="ui-tooltip-top" style="display:none;">Press Enter to save this task</span>
        </div>

        <div id="todos">
            <ul id="todo-list"></ul>
        </div>

        <div id="todo-stats"></div>

    </div>
</div>


</body>
</html>
