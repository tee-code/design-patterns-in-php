<?php
require '../vendor/autoload.php';

use Adapter\Video;
use Adapter\Kindle;
use Adapter\eReaderAdapter;

$media = new Video;

$media->play();
$media->forward();
$media->backward();

echo "<br/>";

$kindle = new eReaderAdapter(new Kindle);

$kindle->play();
$kindle->forward();
$kindle->backward();

