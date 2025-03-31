<?php

require 'vendor/autoload.php';

use App\QRCodeGenerator\QRCodeGenerator;

$qr = new QRCodeGenerator();
echo $qr->generate('https://www.youtube.com/watch?v=30KI5SuECuc');