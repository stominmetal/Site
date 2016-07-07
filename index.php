<?php

// default page
$defaultPage = 'home';

// available pages
$pages = [];

$files = scandir('pages');
unset($files[0]);
unset($files[1]);

foreach ($files as $file) {
    $pages[] = str_replace('.php', '', $file);
}

// router
if (isset($_GET['page'])) {
    if (in_array($_GET['page'], $pages)) {
        $page = $_GET['page'];
    } else {
        $page = $defaultPage;
    }
} else {
    $page = $defaultPage;
}

// render view
require_once 'view/layout.php';

