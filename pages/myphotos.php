<?php
if ($_SESSION['user']) {
global $con;
if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 0;
}

$user_id = $_SESSION['user']['id'];

$result = mysqli_query($con, "SELECT COUNT(*) FROM photos WHERE user_id=$user_id");
$max = mysqli_fetch_all($result);
$max = (int)$max[0][0];

$start = $p * 5;

$result = mysqli_query($con, "SELECT photos.id, `lat`,`long`,`filename`,`comment`,`upload_time`,`date`,`device_model`,`fullname` as user_name FROM photos JOIN users ON photos.user_id = users.id WHERE users.id = $user_id ORDER BY `upload_time` DESC LIMIT $start, 5");

$pnext = $p + 1;
$pprev = $p - 1;
?>
<div class="message success" id="success"><?php if (isset($_SESSION['delete']['success'])) {echo $_SESSION['delete']['success'];
unset($_SESSION['delete']['success']);}; ?></div>
<div class="row">
    <div class="border">
        <p>
        <table class="table" width='100%'>
            <tr>
                <th class="table">Photo ID</th>
                <th class="table">Photo</th>
                <th class="table">User</th>
                <th class="table">Device Model</th>
                <th class="table">Comment</th>
                <th class="table">Date</th>
                <th class="table">Uploaded</th>
                <th class="table">Commands</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                $id = htmlspecialchars($row['id']);
                $username = htmlspecialchars($row['user_name']);
                $uploadTime = htmlspecialchars($row['upload_time']);
                $date = htmlspecialchars($row['date']);
                $comment = htmlspecialchars($row['comment']);
                $deviceModel = htmlspecialchars($row['device_model']);
                $filename = htmlspecialchars($row['filename']);

                echo "<tr>";
                echo "<td class=\"table\">$id</td>";
                echo "<td class=\"table\"><a href=\"?page=singlephoto&id=$id\"><img src='thumbs/$filename' style='margin: 5px auto'/></a></td>";
                echo "<td class=\"table\">$username</td>";
                echo "<td class=\"table\">$deviceModel</td>";
                echo "<td class=\"table\">$comment</td>";
                echo "<td class=\"table\">$date</td>";
                echo "<td class=\"table\">$uploadTime</td>";
                echo "<td class=\"table\"><a href='#' onclick=\"myFunction($id)\" class='btn'>Delete</a></td>";
                echo "</tr>";
            }

            $result->close();
            ?>
        </table>
        </p>
        <?php
        if ($pprev >= 0) {
            echo "<a href = \"?page=myphotos&p=$pprev\" class=\"btn\">Previous</a>";
        }

        if ($pnext <= $max / 5) {
            echo "<a href = \"?page=myphotos&p=$pnext\" class=\"btn\">Next</a>";
        }

        } else {
            redirect("?page=notLoggedIn");
        }
        ?>
    </div>
</div>