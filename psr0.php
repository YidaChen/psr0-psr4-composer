<?php
require 'SplClassLoader.php';

$YidaChenClassLoader = new SplClassLoader('YidaChen', 'class');

$YidaChenClassLoader->register();

$anotherOneClassLoader = new SplClassLoader('anotherOne', 'class');

$anotherOneClassLoader->register();