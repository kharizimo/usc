<?php 
require 'config.php';
require 'function.php';

$title="A propos";
$_c=$_c?:'index';

$url=is_file("pages/$_c.php")?"pages/$_c.php":"pages/404.php";
ob_start();require $url;
$_content=ob_get_clean();

require 'parts/layout.php';