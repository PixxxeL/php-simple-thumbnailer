<?php

require('Gregphoto_Image.php');
$image_path = 'test.png';
$image = new Gregphoto_Image($image_path);
$type = NULL;

if (isset($_GET['type'])) {
    $type = $_GET['type'];
} else {
    exit();
}

if ($type == 'orig') {
    $image->setMaxWidth(320);
    $image->setMaxHeight(200);
    $image->resize(Gregphoto_Image::EXACT);
    $image->showThumbnail();
} elseif ($type == 'fit') {
    $image->setMaxWidth(100);
    $image->setMaxHeight(100);
    $image->resize(Gregphoto_Image::FIT);
    $image->showThumbnail();
} elseif ($type == 'crop') {
    $image->setMaxWidth(270);
    $image->setMaxHeight(100);
    $image->resize(Gregphoto_Image::CROP_FIT);
    $image->showThumbnail();
}


