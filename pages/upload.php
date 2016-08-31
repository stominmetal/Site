<?php

$error_msg = false;
$success_msg = false;

if (isset($_SESSION['upload']['msg'])) {
    $error_msg = $_SESSION['upload']['msg'];
    $_SESSION['upload']['msg'] = false;
}

if (isset($_SESSION['upload']['success'])) {
    $success_msg = $_SESSION['upload']['success'];
    $_SESSION['upload']['success'] = false;
}

if ($error_msg === false && $success_msg === false && isset($_POST['upload'])) {

    global $con;
    $user_id = $_SESSION['user']['id'];
    $lat = $_POST['lat'];
    $long = $_POST['long'];
    $comment = $_POST['comment'];
    $filename = uniqid() . ".jpg";
    $filepath = "photos/" . $filename;
    $type = explode("/", $_FILES["UFile"]["type"])[1];
    $exif = exif_read_data($_FILES['UFile']['tmp_name']);

    if (isset($exif['Make']) && isset($exif['DateTime']) && isset($exif['Model'])) {
        $time = $exif['DateTime'];
        $model = $exif['Make'] . " " . $exif['Model'];
    } else {
        $time = "N/A";
        $model = "N/A";
    }


    if ($type == "jpg" || $type == "jpeg") {

        $insert = $con->prepare("INSERT INTO photos (`user_id`, `lat`, `long`, `date`, `device_model`, `comment`, `filename`) VALUES (?,?,?,?,?,?,?)");
        $insert->bind_param("iddssss", $user_id, $lat, $long, $time, $model, $comment, $filename);
        $insert->execute();
        $success = $insert->fetch();
        $insert->close();

        copy($_FILES['UFile']['tmp_name'], $filepath);
        make_thumb($filepath, "thumbs/" . $filename, 200);

        $_SESSION['upload']['success'] = "Upload was successful.";
        redirect("?page=upload");
    } else {
        $_SESSION['upload']['msg'] = 'File must be JPG or JPEG.';
        redirect('?page=upload');
    }
}
?>
<div class="message"><?php if ($error_msg !== FALSE) echo htmlspecialchars($error_msg); ?></div>
<div class="message success" id="success"><?php if ($success_msg !== FALSE) echo htmlspecialchars($success_msg); ?></div>
<div class="row">
    <div class="login register-container">
        <?php if (isset($_SESSION['user'])) { ?>
        <form method="post" name="upload_form" onsubmit="return validateUploadForm(this)" enctype="multipart/form-data">
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
