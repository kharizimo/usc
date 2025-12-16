<?php 
session_start();

extract($_REQUEST);

$_c??='';
$_a??='';
$_l??='';

$db=(object)[
    'host'=>'localhost',
    'name'=>'usc',
    'user'=>'root',
    'pass'=>''
];
/** online **
$db=(object)[
    'host'=>'localhost',
    'name'=>'usc',
    'user'=>'root',
    'pass'=>''
];

/* end */ 

try{
    $cn=new PDO("mysql:host=$db->host;dbname=$db->name;charset=utf8",$db->user,$db->pass);
}
catch(PDOException $e){
    die("Erreur de connexion à la base de données : ".$e->getMessage());
}