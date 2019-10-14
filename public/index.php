<?php

require '../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello as HelloWorld;

$helloWorld = new HelloWorld;
echo $helloWorld->world();

echo"<br>";

$hello = new Hello();
echo $hello->talk();



