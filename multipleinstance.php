<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="vue.js"></script>
</head>

<body>
    <div id='app1'>

        <p>Title: {{title}}</p>
        <p>Atuhor name: {{author}}</p>
        <p>{{scndapp}}</p>

    </div>
    <div id='app2'>
        <p>Author : {{author}}</p>

    </div>

    <script>
        var app2 = new Vue({
            el: '#app2',
            data: {
                author: 'author from app2'

            },
            methods: {
                scndapp: function() {
                    return "this secon instanse"
                }
            }

        });
        var app = new Vue({
            el: '#app1',
            data: {
                title: 'this app1 title',
                author: app2.author
            },
            scndapp: function() {
                return "this first instanse"
            }

        });
    </script>
</body>

</html>