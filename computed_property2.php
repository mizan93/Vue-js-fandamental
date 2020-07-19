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

        Firs Name: <input type="text" v-model="fname" placeholder="Name" id=""><br>
        Last Name: <input type="text" v-model="lname" placeholder="Name" id=""><br>
        <br>
        <h4>Fullname: <input type="text" v-model="fullname" id=""></h4>
<p>Chanel name: {{ch_name}}</p>
    </div>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                fname: '',
                lname: '',
                ch_name:"owt"
            },
            computed: {
                fullname: {
                    get: function() {
                        return this.fname + ' ' + this.lname;
                    },
                    set:function(){
                       // console.log('set f runing')
                       this.ch_name="updated"
                    }
                }
            }
        });
    </script>
</body>

</html>