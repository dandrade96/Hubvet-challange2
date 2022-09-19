<?php

require __DIR__."/vendor/autoload.php";
use App\File\Upload;

if(isset($_FILES['file'])){
    error_reporting(E_ERROR | E_PARSE);
    $upload = new Upload($_FILES['file']);
    $success = $upload->run();
    if($success){
        print_r($success);
        echo 'Arquivo enviado com sucesso!';
        exit;
    }
    die('Problemas ao enviar arquivo!');
}

include __DIR__.'/includes/form.php';