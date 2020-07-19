<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="vue.js"></script>
</head>

<body>
    <div id='app1'>

        <n></n>

    </div>
    <br>
    <div id='app2'>

        <n></n>
    </div>

    <script>
        var data={
            name:'online web tutor',
            author:'ariful',
            count: 2
        }
        Vue.component("n", {
            template: "<div><P>This is called online tutorial chanel name: {{ name }} , Author: {{author}},</p><p> Method running :{{method1()}},</p><p> computed running :{{computed1}}<P>count: {{count}}</P></P><Button @click='click' >click me</Button></div>",
            data: function() {
                return data;
            },
            methods: {
                method1: function() {
                    return 'This is vue component'
                },
                click:function(){
                    this.count++;
                }
            },
            computed: {
                computed1: function() {
                    return "this is computed component"
                }
            }

        });
        var app1 = new Vue({
            el: '#app1',
            data: {

            },
            method: {

            }
        });
        var app2 = new Vue({
            el: '#app2',
            data: {

            },
            method: {

            }
        });
    </script>
</body>

</html>