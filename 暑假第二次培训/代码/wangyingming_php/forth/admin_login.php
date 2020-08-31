<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            min-width: 1200px;
            /* background-color: lightgreen; */
            font-size: 15px;
            font-family: 'Courier New', Courier, monospace;
            background: url(img/sunraise.jpg) no-repeat no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
        a{
            text-decoration: none;
            color: green;
            font-size: 18px;
        }
        form {
            width: 30%;
            height: 300px;
            background-color: lightskyblue;
            margin: auto;
            opacity: 0.8;
            box-shadow: 5px 5px 5px 5px grey;
        }

         #login{
            padding-top: 10px;
            background-color: maroon;
            display: block;
            font-size: 30px;
        }

        input{
            width: 80%;
            height: 25px;
            margin: 20px;
            border: 3px solid black;
            border-radius: 10px;
            outline: none;
        }
    </style>
</head>
<body>
    <div style="width: 100%;height:150px;"></div>
    <form action="admin_login_check.php" method="POST">
        <center>
            <span id="login">登陆你的管理账号</span>
            <input type="text" name="username"  placeholder="请输入你的管理用户名">
            <input type="password" name="password"  placeholder="请输入你的登陆密码">
            <input type="submit" value="登录" style="background-color: green;color: white;">
        </center>
    </form>
    <div style="width: 100%;height:150px;"></div>
</body>

</html>