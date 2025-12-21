<?php 
require 'config.php';
if($_a=='newsletter'){
    if($cn->query("select 1 from newsletters where email='$email'")->fetch(PDO::FETCH_NUM)){
        echo "L'adresse mail existe déjà";
    }
    else{
        $cn->exec("insert into newsletters(email) values('$email')");
        echo "L'addresse mail est soumise avec succès";
    }
}
