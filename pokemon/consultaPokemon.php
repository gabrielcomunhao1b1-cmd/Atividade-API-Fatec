<?php
$pokemon = $_POST["pokemon"];
$urlApi = "https://pokeapi.co/api/v2/pokemon/" . $pokemon;

$curl = curl_init($urlApi);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);

$retorno = curl_exec($curl);
curl_close($curl);

$dados = json_decode($retorno, true);

echo "<h2>Dados do Pokémon</h2>";

echo "<p>Nome: " . $dados['name'] . "</p>";
echo "<p>ID: " . $dados['id'] . "</p>";
echo "<p>Experiência: " . $dados['base_experience'] . "</p>";
echo "<p>Altura: " . $dados['height'] ."m". "</p>";
echo "<p>Peso: " . $dados['weight'] ."Kg". "</p>";

echo "<img src='".$dados['sprites']['front_default']."'>";
echo "<img src='".$dados['sprites']['back_default']."'>";

echo "<br><br>";
echo "<a href='pokemon.php'>Voltar</a>";
?>