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
        <input type="text" v-model="maths">
        <input type="text" v-model="science">
        <input type="text" v-model="english">
        <h2>Total marks:{{marks}}</h2>
        <br>
        {{runme()}}
        <br><input type="text" placeholder="Enter length in metter." v-model="meter">
        <br>
        <h2>metter in cm:{{convertTocentimeter}}</h2>
        <input type="text" placeholder="Enter first name" v-model="firstname">
        <input type="text" placeholder="Enter last name" v-model="lastname"><br>
        <h4></h4> fullname: {{getfullname}}</h4>
    </div>

    <script>
        var app = new Vue({
            el: '#app',
            data: {
                firstname: '',
                lastname: '',
                meter: '',
                maths: 0,
                science: 0,
                english: 0,
            },
            methods: {
                runme: function() {
                    console.log('this is first method.')
                    return 'I am a method';
                }
            },
            computed: {
                getfullname: function() {
                    return this.firstname + ' ' + this.lastname;
                },
                convertTocentimeter: function() {
                    return this.meter * 100;
                },
                marks: function() {
                    return parseInt(this.maths) + parseInt(this.english) + parseInt(this.science);
                }
            }
        });
    </script>
</body>

</html>