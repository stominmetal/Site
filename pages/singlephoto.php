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
        <img src='photos/<?= $pic ?>' width='900px'/>
    </div>
    <div class="col">
        <table class="table">
            <tr>
            <td class="singlephototable table"><strong>User name</strong></td>
            <td class="table"><?= htmlspecialchars($Result['user_name']) ?></td>
            </tr>
            <tr>
            <td class="singlephototable table"><strong>Latitude</strong></td>
            <td class="table"><?= htmlspecialchars($Result['lat']) ?></td>
            </tr>
            <tr>
            <td class="singlephototable table"><strong>Longitude</strong></td>
            <td class="table"><?= htmlspecialchars($Result['long']) ?></td>
            </tr>
            <tr>
            <td class="singlephototable table"><strong>Upload date</strong></td>
            <td class="table"><?= htmlspecialchars($Result['upload_time']) ?></td>
            </tr>
            <tr>
            <td class="singlephototable table"><strong>Photo Date</strong></td>
            <td class="table"><?= htmlspecialchars($Result['date']) ?></td>
            </tr>
            <tr>
            <td class="singlephototable table"><strong>Device model</strong></td>
            <td class="table"><?= htmlspecialchars($Result['device_model']) ?></td>
            </tr>
        </table>
    </div>
</div>