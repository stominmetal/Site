<?php
global $con;
$id = $_GET['id'];

$result = mysqli_query($con, "SELECT filename FROM photos WHERE id=$id");
$pic = mysqli_fetch_all($result);

$pic = $pic[0][0];

$result = mysqli_query($con, "SELECT photos.id, `lat`,`long`,`filename`,`upload_time`,`date`,`device_model`,`fullname` as user_name FROM photos JOIN users ON photos.user_id = users.id WHERE photos.id = $id");
$Result = mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col">
        <img src='photos/<?=$pic?>' width='900px'/>
    </div>
    <div class="col">
        <strong>User name:</strong> <?=$Result['user_name']?><br>
        <strong>Latitude:</strong> <?=$Result['lat']?><br>
     <?php
        echo "<strong>Longitude:</strong> $Result[long]<br>";
        echo "<strong>Upload date:</strong> $Result[upload_time]<br>";
        echo "<strong>Photo Date:</strong> $Result[date]<br>";
        echo "<strong>Device model:</strong> $Result[device_model]<br>";
        ?>
    </div>
</div>