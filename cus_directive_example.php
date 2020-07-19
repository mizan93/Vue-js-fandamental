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

        <button type="button" v-owt:blue:change="chanelname">area 1</button>
        <button type="button" v-owt:red="chanelname">area 2</button>
    </div>
    <script>
        Vue.directive("owt", function(el, binding) {
            // console.log(el);
            // console.log(binding);
            var vir_org = binding.arg;
            if (vir_org == "red") {
                var mod = binding.modifiers.change;
                if (mod == true) {
                    el.style.backgroundColor = "orange";
                    el.style.color = "white";
                    el.style.fontSize = "20px";
                } else {
                    el.style.backgroundColor = "red";
                    el.style.color = "white";
                    el.style.fontSize = "20px";
                }
            }
            if (vir_org == "blue") {
                el.style.backgroundColor = "blue";
                el.style.color = "white";
                el.style.fontSize = "20px";
            }
        })
        var app = new Vue({
            el: "#app",
            data: {
                chanelname: "online tutorial"
            }
        })
    </script>
</body>

</html>