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
        <input type="text" placeholder="keypress..." @keypress="keypress">
        <br>
        <input type="text" placeholder="keyup..." @keyup="keyup">
   <br>
        <input type="text" placeholder="keydown..." @keydown="keydown">
    </div>
    <script>
        var app = new Vue({
            el: '#app',
            data: {

            },
            methods: {
                keypress: function(e) {
                    console.log(e.key)
                },
                keyup: function(e) {
                    console.log(e)
                },
                keydown: function(e) {
                    console.log(e.key)
                },
            }

        });
    </script>
</body>

</html>