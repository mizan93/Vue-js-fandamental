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
        <h3>Counter : {{ counter }}</h3>
        <button tupe="button" v-on:click="increment" name="button">Increment by 1</button>
        <button tupe="button" v-on:click='decrement' name="button">Decrement by 1</button>
   
    </div>

    <script>
        var app = new Vue({
            el: '#app',
            data: {
                counter: 0
            },
            method: {
                increment : function() {
                    this.counter++;
                },
                decrement : function() {
                    this.counter--;
                }
            }
        });
    </script>
</body>

</html>