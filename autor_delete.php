<?php

    $id = $_GET['id'];


    $url = 'https://bibliapp.herokuapp.com/api/authors/'.$id;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                   // curl_setopt($curl, CURLOPT_POST, true);
                  //  curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

        header("Location:autor.php");
    return $result;


?>