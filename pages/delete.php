<?php
global $con;
$id = $_GET['id'];

$filename = mysqli_query($con, "SELECT `filename` FROM photos WHERE id = $id");
$name = mysqli_fetch_assoc($filename);
$filename = $name['filename'];

$result = $con->prepare("DELETE FROM photos WHERE id = ?");
$result->bind_param("i", $id);
$result->execute();
$result->close();

unlink("photos/$filename");
unlink("thumbs/$filename");
redirect("?page=successfuldelete");

