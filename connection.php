<?php
// configuration
$host = 'localhost';
$dbname = 'softuni';
$user = 'stomin';
$pass = '1q2a3z4';

$con = mysqli_connect($host, $user, $pass, $dbname);

/*-----------------------------------------------*/

//redirect to other page

function redirect(string $url) :string
{
    header("Location: ".$url);
    exit;
}

/*-----------------------------------------------*/

//making thumbs

function make_thumb($src, $dest, $desired_width)
{
    $source_image = imagecreatefromjpeg($src);
    $width = imagesx($source_image);
    $height = imagesy($source_image);

    $desired_height = floor($height * ($desired_width / $width));

    $virtual_image = imagecreatetruecolor($desired_width, $desired_height);

    imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);

    imagejpeg($virtual_image, $dest);
}