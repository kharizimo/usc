<?php 
require 'config.php';

$title="A propos";

$url=is_file("pages/$_c.php")?"pages/$_c.php":"pages/404.php";
ob_start();require $url;
$_content=ob_get_clean();

require 'parts/layout.php';