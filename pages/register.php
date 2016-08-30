<?php
if (isset($_POST['btnLogin'])) {
    global $con;
    $isLogged = false;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $passwordConfirm = $_POST['passwordConfirm'];
    $fullname = $_POST['fullname'];

    $result = $con->prepare("SELECT username FROM users WHERE username=?");
    $result->bind_param("s", $username);
    $result->execute();
    $found = $result->fetch();
    $result->close();


    if ($found) {
        echo "User already exists!";
        echo "<div><input type='button' value='Back' onClick=\"history.go(-1);return true;\"></div>";
    } else if (strlen($username) < 3 || strlen($fullname) < 3 || strlen($password) < 6 || $password != $passwordConfirm) {
        echo "ERROR !!!";
        echo "<div><input type='button' value='Back' onClick=\"history.go(-1);return true;\"></div>";
    } else {
        $register = $con->prepare("INSERT INTO users 
                    (username, password, fullname) 
                     VALUES (?, ?, ?)");
        $register->bind_param("sss", $username, $password_hash, $fullname);
        $register->execute();
        $register->close();

        redirect('?page=login');
    }
}
?>
<div class="message"></div>
<div class="row">
    <div class="login register-container">
        <h1 class="login-title">Register</h1>
        <form method="post" class="form" id="my_form" name="my_form" onsubmit="return validateForm(this)">

            <div id="prompt"></div>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter username"
                   value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" required>

            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" placeholder="Enter full name"
                   value="<?php if (isset($_POST['fullname'])) echo $_POST['fullname']; ?>" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter password" required>

            <label for="passwordConfirm">Confirm password</label>
            <input type="password" id="passwordConfirm" name="passwordConfirm" placeholder="Confirm password"
                   required>

            <input type="submit" class="btnLogin" id="my_button" value="Register" alt="buttonLogin"
                   name="btnLogin">
            <p class="register">If you are already registered click <a href="?page=login">here</a> to login.</p>

        </form>
    </div>
</div>