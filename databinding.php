<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>vue js </title>
   <script src="vue.js"></script>
</head>
<style>
   .fiximg {
      height: 100px;
      width: 200px;
   }
</style>

<body>

   <div id="app">


      <a v-bind:href="ulink" v-bind:title="title">{{ link }}</a><br>
      <img v-bind:src="imglink" alt="image" v-bind:class="{{fiximg:isActive}}">
      <br>
      <form action="" method="post">
         <input type="text" v-bind:value="textname" placeholder="name"><br>
         <input type="text" v-bind:value="txtemail" placeholder="email"><br>
         <button type="submit">Submit</button>
      </form>
      <div v-html="htmlContent">
      </div>
   </div>

   <script src="">
      var view = new Vue({
         el: "#app",
         data: {
            name: "you tube",
            title: "this is title",
            txtName: "mizan",
            txtEmail: "ab@gmail.com",
            htmlContent: "<P>this i s my paragraph</P>",
            ulink: "https://www.youtube.com/watch?v=BqCaoGuRDC4&list=PLT9miexWCpPUZ-xD9s70PhhP37blPSuax&index=4",
            imglink: "emg.jpg",
            isActive: true,
         }
      });
   </script>


</body>

</html>