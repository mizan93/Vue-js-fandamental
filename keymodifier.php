<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="vue.js"></script>
</head>

<body>
    <div id='app'>

        <br><br>
        <input type="text" @keyup.down="keypress">

    </div>

    <script>
        var app = new Vue({
            el: '#app',
            data: {
                counter: 0
            },
            methods: {
                keypress: function() {
                    console.log('I am running..');
                }
            }
        });
    </script>
</body>

</html>