<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href='css/app.css' rel='stylesheet' type='text/css'/>
</head>
<body>

<!--Header-->
<?php include("modules/_header.php") ?>

<div class="row">
    <div class="row login-title">
        Login</div>
    <div class="col col-m"></div>
    <div class="col col-m login">
        <h1 class="labels">Username</h1>
        <input type="text" alt="login" name="login">
        <h1 class="labels">Password</h1>
        <input type="password" alt="register" name="register" >
        <h1 class="labels"></h1>
        <input type="button" value="Login" alt="buttonLogin" name="btnLogin">
        <p class="par">If you are not registered click <a href="#">here</a> to register.</p>
    </div>
    <div class="col col-m"></div>
</div>

<hr>

<?php include("modules/_footer.php") ?>

</body>
</html>