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
        <br>
        Name: <input type="text" placeholder="name..." ref="name">
        <br>
        <br>
        Email: <input type="text" placeholder="email..." ref="email">
        <br>
        <br>
        <p ref="para">this is simple msg</p>
        <button type="submit" @click="btnsub">submit</button>
    </div>
    <script>
        var app = new Vue({
            el: '#app',
            data: {

            },
            methods: {
                btnsub: function() {
                    console.log(this.$refs)
                    console.log(this.$refs.name.value)
                    console.log(this.$refs.email.value)
                    console.log(this.$refs.para.innerText)
                }
            }
        });
    </script>
</body>

</html>