<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Login</title>

<style>
body{
    margin:0;
    padding:0;
    font-family:"Segoe UI", Arial, sans-serif;
    background:linear-gradient(to right, #eef2f3, #dfe9f3);
}

#box{
    width:400px;
    margin:80px auto;
    background:white;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,0.12);
}

#header{
    background:linear-gradient(135deg, #667eea, #764ba2);
    color:white;
    text-align:center;
    padding:35px;
}

#header h1{
    margin:0;
    font-size:36px;
}

#konten{
    padding:35px;
}

form{
    line-height:2.5;
}

input[type="text"],
input[type="password"]{
    width:100%;
    padding:12px;
    border:1px solid #ccc;
    border-radius:10px;
    font-size:15px;
    margin-top:5px;
    margin-bottom:15px;
    box-sizing:border-box;
}

input[type="submit"]{
    width:100%;
    background:#667eea;
    color:white;
    border:none;
    padding:12px;
    border-radius:10px;
    font-size:16px;
    cursor:pointer;
    transition:0.3s;
}

input[type="submit"]:hover{
    background:#4c63d2;
}

#footer{
    background:#2d3748;
    color:white;
    text-align:center;
    padding:20px;
    font-size:15px;
}
</style>

</head>

<body>

<div id="box">

<div id="header">
    <h1>Login</h1>
    <p>Silakan Masuk</p>
</div>

<div id="konten">

<form action="proses_login.php" method="post">

    Username :
    <input type="text" name="username">

    Password :
    <input type="password" name="password">

    <input type="submit" value="Login">

</form>

</div>

<div id="footer">
    Web Programming I <br>
    2025
</div>

</div>

</body>
</html>