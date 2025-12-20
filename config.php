<?php 
session_start();

extract($_REQUEST);

$_c??='';
$_a??='';

$db=(object)[
    'host'=>'localhost',
    'name'=>'usc',
    'user'=>'root',
    'pass'=>''
];
/** online unive2718265 **/
$db=(object)[
    'host'=>'localhost',
    'name'=>'unive2718265',
    'user'=>'unive2718265',
    'pass'=>'Admin@1234567890'
];

/* end */ 

try{
    $cn=new PDO("sqlite:db.sqlite");
}
catch(PDOException $e){
    die("Erreur de connexion à la base de données : ".$e->getMessage());
}