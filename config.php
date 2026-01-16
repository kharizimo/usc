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
function upload_images($file){
    $root=__DIR__.'/img/';
    $ret=(object)['etat'=>true,'file'=>'','error'=>''];
    $check=true;

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $allowed = array('jpg', 'jpeg', 'png');

    if(!isset($file)){$ret->etat=false;$ret->error='Fichier non défini';}
    if(!in_array($fileExt, $allowed)){$ret->etat=false;$ret->error='Extension non autorisée';}
    if(!is_dir($root.'uploads/')){mkdir($root.'uploads/',0777,true);}
    if($fileError){$ret->etat=false;$ret->error='Erreur lors du téléchargement du fichier';}
    if(!$ret->etat){return $ret;}

    // Generate unique file name
    $i=1;$found=true;
    while($found){
        $f='uploads/img-'.$i.'.'.$fileExt;
        if(!file_exists($root.$f)){$ret->file=$f;$found=false;}
        $i++;
    }
    move_uploaded_file($fileTmpName, $root.$ret->file);

    return $ret;
}