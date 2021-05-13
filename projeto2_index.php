<?php
// tempo
const ID = "tGlhpU6AKBvd1UHj0u8Aw";
const SECRET = "6DAHHyhrVkieYkgUqMuJbidIvXTICap9cmBV1wVS";

    const BASE_URL = "https://api.aerisapi.com/conditions/";

    $cidades = " ";
    if(isset($_GET['campo_cidade'])){
        $cidades = $_GET['campo_cidade'];

        $cidades = urlencode($cidades);

        $url = BASE_URL . "{$cidades},br?client_id=" . ID . "&client_secret=" . SECRET;

        $json  = file_get_contents($url);
        $dados = json_decode($json, true);

        $nome = $dados['response'][0]['place']['name'];
        $temperatura = $dados['response'][0]['periods'][0]['tempC'];
        $sensacao = $dados['response'][0]['periods'][0]['feelslikeC'];
        $umidade = $dados['response'][0]['periods'][0]['humidity'];
        $velocidade = $dados['response'][0]['periods'][0]['windSpeedKPH'];
     
        include "projeto2.php";
        include "projeto2_dados.php";
    }else{
        include "projeto2.php";
    }