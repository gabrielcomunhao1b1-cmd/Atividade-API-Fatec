<?php
    $id = $_POST["id"];
    $title = $_POST["title"];
    $body = $_POST["body"];
    $userId = $_POST["userId"];

    $dadosParaEnvio =[
        "id" => $id,
        "title" => $title,
        "body" => $body,
        "userId" => $userId
    ];
    $apiURL = "https://jsonplaceholder.typicode.com/posts/$id";
    $curl = curl_init($apiURL);

    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($dadosParaEnvio));
    curl_setopt($curl, CURLOPT_HTTPHEADER, ["Content-Type:application/json"]);
    
    $response = curl_exec($curl);

    $dadosRetornados = json_decode($response, true);

    curl_close($curl);

    echo"Dados atualizados"."<br><br>";
    echo"Id da postagem:".$dadosRetornados["id"]."<br>";
    echo"Título:".$dadosRetornados["title"]."<br>";
    echo"Corpo da postagem:".$dadosRetornados["body"]."<br>";
    echo"Id do Usuário:".$dadosRetornados["userId"]."<br>";
    echo'<a href="index2.php">Voltar</a>';
?>
