<?php 
session_start();

extract($_REQUEST);

$_c??='';
$_a??='';
$id??=0;

$app=(object)[
    'email'=>'me@gmail.com',
    'telephone'=>'+243823455672',
    'adresse'=>'123 Avenue des Champs, Kinshasa, RDC',
    'facebook'=>'#',
    'x'=>'#',
    'linkedin'=>'#',
    'youtube'=>'#',
];

/* end */ 

try{
    $cn=new PDO("sqlite:db.sqlite");
}
catch(PDOException $e){
    die("Erreur de connexion à la base de données : ".$e->getMessage());
}