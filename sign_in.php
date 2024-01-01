<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            .login{
               
               margin-left: auto;
            }
            .signner a, .login{
                padding:10px 10px;
                display: block;
                margin:0px 2px;
            }
            .signner:hover{
                background-color: lightgoldenrodyellow;

            }

            input[type="text"],input[type="submit"]{
                padding: 5px 20px;
                margin: 5px;
                
            }
            input[type="submit"]:hover{
                background-color: red;
            }
            a{
                text-decoration: none;
                color: black;
            }
    </style>
</head>
<body>
    <div class="login" style="margin-left:40%;margin-right:40%; margin-top :15%; border:1px solid black; ">
        <nav>
            <a href=".sign_in" style="font-size: larger; "class="signner" > Sign In</a>
            <a href="sign_up.php" style="font-size: larger;" class="signner">Sign Up</a>
        </nav>
        <form action="" method="GET" class="login">
               <input type="text" name="user_name" placeholder="Username"><br>
               <input type="text" name="email_id" placeholder="Email Id" id="">  <br>
               <input type="text" name="password" placeholder="Password" id=""><br>
               <input type="submit" name="submit" value="Sign in" id=""><br>

        </form>
    </div>
</body>
</html>