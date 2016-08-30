<header>
    <div class="row">
        <a class="col" href="?page=home">
            <img src="images/logo.png" alt="Vessel Tracking">
        </a>

        <div class="col">
            <h1>Photo Sharing</h1>
            <h2>Softuni Project</h2>
        </div>

        <?php
        global $isIn;
        if (isset($_SESSION['user'])){
            ?>
            <div class="col col-r search">
                <h2 class="textSearch hello">Hello, <?= htmlspecialchars($_SESSION['user']['fullname']) ?></h2>
                <a href="?page=logout" class="btn">Logout</a>
            </div>
        <?php } ?>
    </div>

    <nav class="row">
        <ul>
            <?php
            if (isset($_SESSION['user'])) {
                ?>
                <li><a href="?page=home" class="home"><img src="images/home_icon_button.png"></a></li>
                <li><a href="?page=users">Users</a></li>
                <li><a href="?page=photos">Photos</a></li>
                <li><a href="?page=myphotos">My Photos</a></li>
                <li><a href="?page=upload">Upload Photo</a></li>
            <?php } else { ?>
                <li><a href="?page=home">Home</a></li>
                <li><a href="?page=photos">Photos</a></li>
                <li><a href="?page=login">Login</a></li>
            <?php } ?>
        </ul>
    </nav>

</header>