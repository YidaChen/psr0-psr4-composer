<?php
//require 'vendor/autoload.php';
//若是新添加的文件須 composer dump-autoload
//可以遞歸搜尋子文件夾

//require 'psr0.php';

require 'psr4.php';

use YidaChen\sub\HelloWorld2;

$helloWorld = new YidaChen\HelloWorld();

$helloWorld2 = new HelloWorld2();

$helloWorld3 = new anotherOne\HelloWorld3();