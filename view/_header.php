<header>
    <div class="row">
        <a class="col" href="#">
            <img src="images/logo.png" alt="Vessel Tracking">
        </a>

        <div class="col">
            <h1>Map</h1>
            <h2>Google Map API Excersises</h2>
        </div>

        <?php
        global $isIn;
        if (isset($_SESSION['user'])){
            ?>
            <div class="col col-r search">
                <h2 class="textSearch hello">Hello, <?= htmlspecialchars($_SESSION['user']['fullname']) ?></h2>
                <a href="?page=logout" class="btn">Logout</a>
            </div>
        <?php } else { ?>
            <div class="col col-r search">
                <input type="text" class="textSearch" name="searchbox">
                <input type="button" class="btn" name="submit" value="Search">
            </div>
        <?php } ?>
    </div>

    <nav class="row">
        <ul>
            <?php
            if (isset($_SESSION['user'])) {
                ?>
                <li><a href="?page=home">Home</a></li>
                <li><a href="?page=users">Users</a></li>
                <li><a href="?page=upload">Upload Photo</a></li>
                <li><a href="?page=photos">Photos</a></li>
            <?php } else { ?>
                <li><a href="?page=home">Home</a></li>
                <li><a href="?page=login">Login</a></li>
                <li><a href="?page=photos">Photos</a></li>
            <?php } ?>
        </ul>
    </nav>

</header>