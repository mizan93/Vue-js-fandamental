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

        <ol>
            <li v-for="student in students">{{student}}</li>
        </ol>
        <ol>
            <li v-for="teacher in Teachers">{{teacher.name}} -{{teacher.subjec}} from: {{teacher.loc}} </li>
        </ol>
    </div>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                students: ['mizan', 'razu', 'foysal'],
                Teachers: [{
                        name: "t1",
                        subjec: "sub1",
                        loc: 'loc1'
                    },
                    {
                        name: "t2",
                        subjec: "sub2",
                        loc: 'loc1'
                    },
                    {
                        name: "t3",
                        subjec: "sub3",
                        loc: 'loc1'
                    },
                    {
                        name: "t4",
                        subjec: "sub4",
                        loc: 'loc1'
                    },
                ]
            }
        });
    </script>
</body>

</html>