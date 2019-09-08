<?php
include ('auth.php');
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login page</title>
    <style>
        body{
            background:white;
        }
        .cent{
            text-align: center;
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            width:300px;
            height:400px;
            /*   background:red; */
        }
        input[type="text"],input[type="password"]{
            padding:10px 10px 10px;
            margin:5px 25px 20px;
            width:225px;
            text-align:center;
            outline:none;
            border:none;
            background:none;
            border-radius:15px;

            letter-spacing:2px;
            border-bottom:2px lightgrey solid;
            -webkit-box-shadow: 0 4px 6px -6px #222;
            -moz-box-shadow: 0 4px 6px -6px #222;
            box-shadow: 0 8px 8px -5px #222;
        }
        h1{
            letter-spacing:5px;
            text-transform:uppercase;
            font-family:sans-serif;
            font-size:3vh;
        }
        input:hover{
            cursor:pointer;
            transform:scale(1.1);
            transition:0.3s;

        }
        input:focus{
            cursor:pointer;
            transform:scale(1.1);
            transition:0.3s;
        }
        input[type="submit"]{
            width:100px;
            height:30px;
            border-radius:15px;
            outline:none;
            background:none;
            text-transform:uppercase;
            font-family:sans-serif;
            font-weight:bold;
            letter-spacing:1.5px;
        }
        input::placeholder{
            font-weight:bold;
            color:;
            letter-spacing:2px;
        }

    </style>
</head>
<body>
<div class ="cent">
    <form action="login.php" method="post">
        <!-- display validation here errors are here-->
        <?php include('errors.php')?>
    <h1>username</h1>
    <input type="text" name="userName" placeholder="username" autocomplete="off" spellcheck="false" >
    <h1>password</h1>
    <input type="password" name="password" placeholder="password">

    <input type="submit" name="loginUser" value="submit">
    </form>
    <div>
</body>
</html>
