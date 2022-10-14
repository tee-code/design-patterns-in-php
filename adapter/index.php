<?php
require '../vendor/autoload.php';

use Adapter\Media;
use Adapter\Video;
use Adapter\Kindle;
use Adapter\eReaderAdapter;

$media = new Media(new Video());

$media->play();
$media->forward();
$media->backward();

echo "<br/>";

$media = new Media(new eReaderAdapter(new Kindle()));

$media->play();
$media->forward();
$media->backward();

