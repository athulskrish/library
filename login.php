<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  .login{
    display: flex;
    flex: auto;
    overflow:hidden ;
    padding: 50px;
}
input[type=text] {
  width: 80%;
  padding: 15px 40px;
  margin: 10px 15%;
   box-sizing: border-box;  
   border: none;
    border-bottom: 4px solid #8842d5; 
    text-align: center;
    width: 70%;
}
input[type=button]{
    margin:10px 40%;
    color:white;
    background-color: blue;
    padding:10px;
    font-size: large;
}
#login:hover{
     background-color: black;   
}
.userlogin{
    background-color: antiquewhite;
    flex:50%;
}
.adminlogin{
    background-color: lightblue;
    flex: 50%;
}
form{
   float: center;
}

    </style>

</head>
<body>
    <div class="login">
    <div class="userlogin">
        <h2 style="color:royalblue; text-align:center">User  Login</h2>
        <form action="" method="POST">
                <input type="text" placeholder="Username"><br>
                <input type="text" placeholder="Password"><br>
                <a href="#" style="float:right; font-size:large;">forget password</a><br>
                <input type="button" value="LOGIN" text-align="center" id="login">
                   
        </form>
    </div>
    <div class="adminlogin">
            <form action="#" method="POST">
            <h2 style="color:royalblue; text-align:center">Admin  Login</h2>
            <input type="text" placeholder="Username"><br>
            <input type="text" placeholder="Password"><br>
            <a href="#" style="float:right;  font-size:large">forget password</a><br>
            <input type="button" value="LOGIN" text-align="center" id="login">

        </form>

   </div>


    </div>
</body>
</html>