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
        <input type="text" v-model="character">
        <br>
        {{character}}
        <br><br>
        <form action="">
            <input type="text" v-model="name" placeholder="name">{{name}} <br>

            <input type="text" v-model="email" placeholder="name">{{email}} <br>
            <br>

        </form>
    </div>
    <div id='example-3'>
        <input type="checkbox" id="jack" value="Jack" v-model="checkedNames">
        <label for="jack">Jack</label>
        <input type="checkbox" id="john" value="John" v-model="checkedNames">
        <label for="john">John</label>
        <input type="checkbox" id="mike" value="Mike" v-model="checkedNames">
        <label for="mike">Mike</label>
        <br>
        <span>Checked names: {{ checkedNames }}</span>
    </div>
    <br>
    <div id='example-4'>
        <input type="radio" id="one" value="One" v-model="picked">
        <label for="one">One</label>
        <br>
        <input type="radio" id="two" value="Two" v-model="picked">
        <label for="two">Two</label>
        <br>
        <span>Picked: {{ picked }}</span>
        <br>
        <select v-model="selected">
            <option disabled value="">Please select one</option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
        </select>
        <span>Selected: {{ selected }}</span>
        <br>
        <select v-model="selected" multiple>
            <option>A</option>
            <option>B</option>
            <option>C</option>
        </select>
        <br>
        <span>Selected: {{ Selected }}</span>
    </div>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                character: "",
                name: "dkjd",
                email: "kdf",
            },
            methods: {
                keypress: function(event) {
                    this.character = event.key;
                },

            }
        });
        new Vue({
            el: '#example-3',
            data: {
                checkedNames: []
            }
        })
        new Vue({
            el: '#example-4',
            data: {
                picked: [],
                selected: '',
                Selected: ''
            }
        })
    </script>
</body>

</html>