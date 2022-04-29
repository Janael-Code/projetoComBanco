<?php
include "config.php";
include 'functions.php';

$email = $_GET['email'];
$cep = $_GET['cep'];
$rua = $_GET['rua'];
$bairro = $_GET['bairro'];
$faleconosco = $_GET['faleconosco'];
if(cadastro_contato($email)==0){
   

$sql = "INSERT INTO contato (email,cep,rua,bairro,faleconosco) VALUES ('$email','$cep','$rua','$bairro','$faleconosco')";
$query = $mysqli->query($sql);


    echo "inserido";
}
else{
    echo "Voce dnv fdp";
}


?>
