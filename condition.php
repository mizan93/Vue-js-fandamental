<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="vue.js"></script>
</head>
<style>
    
</style>

<body>
    <div id='app'>

        <p v-if="isActive" id="if-p">This is my if statement.</p>
        <p v-else>This is my else statement.</p>
        <p v-show="isActive" id="if-show">This is my show statement.</p>
<br>
        <button type="button" @click="incvalue">inc. by 1</button>
        <br><br>
        Count:{{count}}
        <p v-if='count<=1'>This is value=1</p>
        <p v-else-if="count==2">This is value=2</p>
        <p v-else-if="count==3">This is value=3</p>
        <p v-else> This is value=no value</p>
    </div>

    <script>
        var app = new Vue({
            el: '#app',
            data: {
                isActive: false,
                count: 3
            },
            methods: {
                incvalue:function(){
                    this.count--;
                }
            }
        });
    </script>
</body>

</html>