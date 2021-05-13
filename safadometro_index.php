<?php

if (isset($_GET['dia']) && isset($_GET['mes']) && isset($_GET['ano'])) {
    $dia = $_GET["dia"];
    $mes = $_GET["mes"];
    $ano = $_GET["ano"];

    function soma($mes_parametro){
        $soma_mes = 0;
        for ($mes_parametro; $mes_parametro >=1 ; $mes_parametro--) { 
            $soma_mes = $soma_mes + $mes_parametro; 
        }

        return $soma_mes;
    }

    function safadao($dia_parametro, $somatorio_parametro, $ano_parametro){
        $safadeza = soma($somatorio_parametro) + (($ano_parametro/100) * (50-$dia_parametro));
        $anjo = 100 - $safadeza;
        $resultado = [$safadeza, $anjo];
        return $resultado;
    }

    $resultado_final = safadao($dia, $mes, $ano);

    require 'safadometro.php';
    require 'safadometroDados.php';

}else{
    require 'safadometro.php';
}