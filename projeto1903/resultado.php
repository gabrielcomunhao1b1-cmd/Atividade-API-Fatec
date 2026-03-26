<?php
    $title = $_POST["title"];
    $body = $_POST["body"];
    $userId = $_POST["userId"];

    $dadosParaEnvio = [
        "title" => $title,
        "body" => $body,
        "userId" => $userId,
    ];

    $apiUrl = "https://jsonplaceholder.typicode.com/posts";

    $curl = curl_init($apiUrl);

    curl_setopt($curl,CURLOPT_POST,true);
    curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($dadosParaEnvio));
    curl_setopt($curl,CURLOPT_HTTPHEADER, ["Content-Type:application/json"]);
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);

    $dadosRetornados = json_decode($response,true);

    curl_close($curl);

    echo "<h5>Dados da postagem cadastrada</h5>";

    echo "<p>Título: " . $dadosRetornados['title'] . "</p><br>";
    echo "<p>Corpo da postagem: " . $dadosRetornados['body'] . "</p><br>";
    echo "<p>Id do usuário: " . $dadosRetornados['userId'] . "</p><br>";
    echo "<p>ID: " . $dadosRetornados['id'] . "</p><br>";

    echo "<br><br>";
    echo "<a href='index.php'>Voltar</a>";

?>