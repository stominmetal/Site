<?php
if (isset($_POST['btnLogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    global $con;

    $statement = $con->prepare("SELECT fullname, password, id FROM users WHERE username = ?");
    $statement->bind_param("s", $username);
    $statement->execute();
    $result = $statement->get_result()->fetch_assoc();
    if (password_verify($password, $result['password'])) {
        $_SESSION['user'] = [
            'username' => $username,
            'fullname' => $result['fullname'],
            'id' => $result['id'],
            'success' => "Successful login."
        ];
        redirect("?page=home");

    } else {
        $_SESSION['wronglogin'] = [
            "error" => "Sorry, we couldn't find that combination of username and password."
        ];
        redirect("?page=login");
    }
}
?>
<div class="message"><?php if (isset($_SESSION['wronglogin']['msg'])) {
        echo $_SESSION['wronglogin']['error'];
    } ?></div>
<div class="row">
    <div class="login">
        <h1 class="login-title">Login</h1>
        <form method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter username">

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter password">

            <input type="submit" class="btnLogin" value="Login" alt="buttonLogin" name="btnLogin">

            <p class="register">If you are not registered click <a href="?page=register">here</a> to register.</p>
        </form>
    </div>
</div>