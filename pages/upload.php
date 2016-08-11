<div class="row">
    <div class="login register-container">
        <form method="post" enctype="multipart/form-data">
                <?php if (isset($_POST['upload'])) {

                    global $con;
                    $user_id = $_SESSION['user']['id'];
                    $lat = $_POST['lat'];
                    $long = $_POST['long'];
                    $comment = $_POST['comment'];
                    $filename = uniqid() . ".jpg";
                    $filepath = "photos/" . $filename;

                    $exif = exif_read_data($_FILES['UFile']['tmp_name']);

                    if (isset($exif['Make']) || isset($exif['DateTime']) || isset($exif['Model'])) {
                        $time = $exif['DateTime'];
                        $model = $exif['Make'] . " " . $exif['Model'];
                    } else {
                        $time = "N/A";
                        $model = "N/A";
                    }

                    $insert = $con->prepare("INSERT INTO photos (`user_id`, `lat`, `long`, `date`, `device_model`, `comment`, `filename`) VALUES (?,?,?,?,?,?,?)");
                    $insert->bind_param("iddssss", $user_id, $lat, $long, $time, $model, $comment, $filename);
                    $insert->execute();
                    $success = $insert->fetch();
                    $insert->close();

                    copy($_FILES['UFile']['tmp_name'], $filepath);
                    make_thumb($filepath, "thumbs/" . $filename, 200);

                    redirect("?page=thank you");

            } ?>
            <?php if (isset($_SESSION['user'])) { ?>
                <h1 class="login-title">Upload Image</h1>

                <label for="lat">Latitude</label>
                <input type="text" name="lat" id="lat" placeholder="Enter photo's latitude" required>

                <label for="long">Longitude</label>
                <input type="text" name="long" id="long" placeholder="Enter photo's longitude" required>

                <label for="UFile">Choose picture</label>
                <input type=file name=UFile id="choosePic">

                <label for="comment">Comment</label>
                <textarea style="width: 271px" name="comment" id="comment" placeholder="Enter some comment"></textarea>

                <input type="submit" class="btnLogin" name="upload" value="Upload">

            <?php } else {
                redirect("?page=notLoggedIn");
            } ?>
        </form>
    </div>
</div>