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
        <div class="move-area" v-on:mousemove="movefucntion" style="height: 200px;width:200px;border:1px solid black;">
            <span>{{ x }},{{ y }}</span>
        </div>
        <button type="button" v-on:mouseover="ovefuntion" v-on:mouseout="mouseout">Mouserover</button>
        <!-- <button type="button">Mouserover</button> -->
    </div>

    <script>
        var app = new Vue({
            el: '#app',
            data: {
                x: 0,
                y: 0,
            },
            methods: {
                movefucntion: function(e) {
                    this.x = e.offsetX;
                    this.y = e.offsetY;
                },
                ovefuntion: function() {
                    // this.x = e.offsetX;
                    // this.y = e.offsetY;
                    console.log('mouser ovevered.')
                },
                mouseout: function() {
                    // this.x = e.offsetX;
                    // this.y = e.offsetY;
                    console.log('mouse out.')
                }
            }
        });
    </script>
</body>

</html>