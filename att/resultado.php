<?php
    $id = $_POST["id"];
    $apiURL = "https://jsonplaceholder.typicode.com/posts/$id";
    $curl = curl_init($apiURL);

    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    
    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        echo "Falha na requisição".curl_errno($curl);
    }else {
        echo "Registro removido com sucesso!";
    }

    curl_close($curl);
?>