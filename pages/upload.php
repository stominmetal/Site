<div class="row">
    <div class="login register-container">
        <form method="post">
            <?php if(!(isset($_POST['username']) && isset($_POST['lat']) && isset($_POST['long']))) { ?>
            <h1 class="login-title">Upload Image</h1>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter uploader's username" required>

            <label for="lat">Latitude</label>
            <input type="text" name="lat" id="lat" placeholder="Enter photo's latitude" required>

            <label for="long">Longitude</label>
            <input type="text" name="long" id="long" placeholder="Enter photo's longitude" required>

            <label for="choosePic">Choose picture</label>
            <input type="file" name="choosePic" id="choosePic">

            <label for="comment">Comment</label>
            <textarea style="width: 271px" name="comment" id="comment" placeholder="Enter some comment"></textarea>

            <input type="submit" class="btnLogin" value="Upload">
            <?php } else {
                $username = $_POST['username'];
                $lat = $_POST['lat'];
                $long = $_POST['long'];
                $chosenPic = $_POST['choosePic'];
                $comment = $_POST['comment'];


            } ?>
        </form>
    </div>
</div>