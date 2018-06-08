<?php


$nome =  $_POST['nome'];
$sobrenome =  $_POST['sobrenome'];
//$isbn =  $_POST['isbn'];



$url = 'https://bibliapp.herokuapp.com/api/authors';
$data = array(
        'firstName'=>$nome,
	'lastName'=>$sobrenome
);
$campos    = json_encode($data);
//print_r($campos);exit;

$cabecalho = array('Content-Type: application/json', 'Accept: application/json');


$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_URL,            $url);
curl_setopt($curl, CURLOPT_HTTPHEADER,     $cabecalho);

curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
//curl_setopt($curl, CURLOPT_POSTFIELDS, $campos);
//curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);


$resposta = curl_exec($curl);

curl_close($curl);


header("Location:autor.php");




?>