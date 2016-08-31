<div class="row">
    <div class="border register-container">
        <?php if (isset($_SESSION['user'])) { ?>
            <p>
            <table class="table" width='100%'>
                <tr>
                    <th class="table">User ID</th>
                    <th class="table">Username</th>
                    <th class="table">User's full name</th>
                </tr>
                <?php
                global $con;
                $result = mysqli_query($con, "SELECT * FROM users");

                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td class=\"table\">" . htmlspecialchars($row['id']) . "</td>";
                    echo "<td class=\"table\">" . htmlspecialchars($row['username']) . "</td>";
                    echo "<td class=\"table\">" . htmlspecialchars($row['fullname']) . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
            </p>
        <?php } else {
            include ('notLoggedIn.php');
        } ?>
    </div>
</div>