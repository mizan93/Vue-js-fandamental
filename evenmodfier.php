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
        <h3> counter : {{ counter}}</h3>
        <button type="button" @click.once="incrementby1">click + 1</button>
        <br>
        <br>

        <a href="https://www.google.com" @click.prevent>google</a>
        <br> <br>
        <form action="" method="post" @submit.prevent>
            <button type="submit">submit</button>
        </form>
        <br> <br>
        <div id="pdiv" @click="submit">
            <button id="cdiv" @click.stop="submit">click me</button>
        </div>
        <br> <br>
        <div class="pdiv" @click.capture="pclass">
            <button id="cdiv" @click="btnclick">click me again</button>
        </div>
    </div>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                counter: 0
            },
            methods: {
                incrementby1: function() {
                    this.counter++;
                },
                submit: function() {
                    console.log('clicking...');
                },
                pclass: function() {
                    console.log('parent calss..');
                },
                btnclick: function() {
                    console.log('child calss..');
                },

            }
        });
    </script>
</body>

</html>