<div class="row">
    <div class="login">
        <h1 class="login-title">Login</h1>
        <form method="post">
            <?php if (!(isset($_POST['username']) && isset($_POST['password']))) { ?>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username">

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password">

                <input type="submit" class="btnLogin" value="Login" alt="buttonLogin" name="btnLogin">

                <p class="register">If you are not registered click <a href="?page=register">here</a> to register.</p>
                <?php
            } else {
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
                        'id' => $result['id']
                    ];
                    redirect("?page=home");

                } else {
                    redirect("?page=login");
                }
            }
            ?>
        </form>
    </div>
</div>