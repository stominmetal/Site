<div class="row">
    <div class="border">
        <?php if (isset($_SESSION['user'])) { ?>
            <p>
            <table class="table" width='100%'>
                <tr>
                    <th class="table">Photo ID</th>
                    <th class="table">Photo</th>
                    <th class="table">User</th>
                    <th class="table">Comment</th>
                    <th class="table">Date</th>
                    <th class="table">Uploaded</th>
                </tr>
                <?php
                global $con;
                if (isset($_GET['p'])) {
                    $p = $_GET['p'];
                } else {
                    $p = 0;
                }

                $result = mysqli_query($con, "SELECT COUNT(*) FROM photos");
                $max = mysqli_fetch_all($result);
                $max = (int)$max[0][0];

                $start = $p*5;

                $result = mysqli_query($con, "SELECT photos.id, `lat`,`long`,`filename`,`comment`,`upload_time`,`date`,`device_model`,`fullname` as user_name FROM photos JOIN users ON photos.user_id = users.id ORDER BY `upload_time` DESC LIMIT $start, 5");

                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td class=\"table\">$row[id]</td>";
                    echo "<td class=\"table\"><img src='thumbs/$row[filename]'/></td>";
                    echo "<td class=\"table\">$row[user_name]</td>";
                    echo "<td class=\"table\">$row[comment]</td>";
                    echo "<td class=\"table\">$row[date]</td>";
                    echo "<td class=\"table\">$row[upload_time]</td>";
                    echo "</tr>";
                }

                $result->close();
                ?>
            </table>
            </p>
            <?php
            $pnext = $p + 1;
            $pprev = $p - 1;
            if($pprev >= 0) {
                echo "<a href = \"?page=photos&p=$pprev\" class=\"btn\">Previous</a>";
            }

            if ($pnext <= $max/5) {
                echo "<a href = \"?page=photos&p=$pnext\" class=\"btn\">Next</a>";
            }
            ?>
        <?php } else {
            include('notLoggedIn.php');
        } ?>
    </div>
</div>