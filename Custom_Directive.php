<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="vue.js"></script>
</head>

<body>
    <div id="app" style="text-align:center">

        <button type="button"  title="no update" v-custom-owt:chanel.a.b="msg">click me</button> </div>
    <script>
        Vue.directive('custom-owt', {
            bind: function(el, binding, vnode) {
console.log(el);
el.style.backgroundColor="blue";
el.style.fontSize="40px";
el.style.color="red";
el.title='Title is now updated';
console.log(binding);
console.log("Value="+binding.value);
            },
            update: function(obj1,obj2) {
console.log('Running');
var data=JSON.parse(JSON.stringify(obj2));
console.log(data);
            },
            unbind: function() {

            }

        });
        var app = new Vue({
            el: "#app",
            data: {
                msg: "this is simp;e msg"
            },
            methods:{
                updatedValue:function(){
                    console.log('update...');
                    this.msg='value has been updated now.';
                }
            }
        })
    </script>
</body>

</html>