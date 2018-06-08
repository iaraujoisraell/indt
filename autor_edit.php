<?php

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];


  
    $url = 'https://bibliapp.herokuapp.com/api/authors/'.$id;
    $cabecalho = array('Content-Type: application/json', 'Accept: application/json');
    $data = array(
        'firstName'=>$nome,
	'lastName'=>$sobrenome
    );
    $campos    = json_encode($data);
    print_r($campos);

    
    
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,            $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER,     $cabecalho);
    curl_setopt($ch, CURLOPT_POSTFIELDS,     $campos);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST,           true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,  'PUT');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $resposta = curl_exec($ch);

    curl_close($ch);

    header("Location:autor.php");
    //return $result;


?>