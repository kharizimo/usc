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
    'master'=>'kharizimo@gmail.com'
];



/* end */ 

try{
    $cn=new PDO("sqlite:db.sqlite");
}
catch(PDOException $e){
    die("Erreur de connexion à la base de données : ".$e->getMessage());
}

function upload_image($file){
    $root=__DIR__.'/img/';
    $ret='';
    $check=true;

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $allowed = array('jpg', 'jpeg', 'png');

    if(!isset($file)){$success=false;}
    if(!in_array($fileExt, $allowed)){$check=false;}
    if(!is_dir($root.'uploads/')){mkdir($root.'uploads/',0777,true);}

    $i=1;$found=true;
    while($found){
        $f='uploads/img-'.$i.'.'.$fileExt;
        if(!file_exists($root.$f)){$ret=$f;$found=false;}
        $i++;
    }

    if($check && !$fileError){
        move_uploaded_file($fileTmpName, $root.$ret);
    }
    return $ret;

}