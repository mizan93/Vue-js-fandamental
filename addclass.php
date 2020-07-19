<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="vue.js"></script>
</head>
<style>
    button.redclass {
        background: red;
        width: 142px;
        padding: 14px;
        color: white;
        border-radius: 24px;

    }

    button {
        background: blue;
        color: red;
        width: 142px;
        padding: 14px;
        border-radius: 24px;
    }
</style>

<body>
    <div id='app'>

        <button tupe="button" v-bind:class="{redclass:isActive} " v-on:click="isActive=!isActive">Toggle class</button>

    </div>

    <script>
        var app = new Vue({
            el: '#app',
            data: {
                isActive: true,
            },
            methods: {
                
            }
        });
    </script>
</body>

</html>