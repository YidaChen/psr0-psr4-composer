<?php
require 'Psr4AutoloaderClass.php';

// instantiate the loader
$loader = new Psr4AutoloaderClass();

// register the autoloader
$loader->register();

// register the base directories for the namespace prefix
$loader->addNamespace('YidaChen', 'class/YidaChen');
$loader->addNamespace('anotherOne', 'class/anotherOne');

//$loader->addNamespace('YidaChen\sub', 'class/YidaChen/sub');

