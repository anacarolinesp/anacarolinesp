<?php
#versão 1
$frase = "";

$Letra = [
    "A" => "água com limão", 
    "B" =>"Bacon", 
    "C" =>"Cúrcuma", 
    "D" =>"Doce de leite",
    "E" =>"Azeite",
    "F" =>"Frango",
    "G" =>"Gengibre",
    "H" =>"Adoçante",
    "I" =>"Açucar",
    "J" =>"Jiló",
    "K" =>"Comida Japonesa",
    "L" =>"Leite",
    "M" =>"Macarrão",
    "N" =>"Nata",
    "O" =>"Ovo",
    "P" =>"Pizza",
    "Q" =>"Óleo de cooc",
    "R" =>"Rabanada",
    "S" =>"Suco detox",
    "T" =>"Sal rosa",
    "U" =>"Glutamina",
    "V" =>"Jiló",
    "W" =>"Peixe",
    "X" =>"Própolis",
    "Y" =>"Kumbucha",
    "Z" =>"Peixe",
    
];

$Mes = [
   "JANEIRO" => "ao acordar",
   "FEVEREIRO" => "pré-treino",
   "MARÇO" => "amassado com limão",
   "ABRIL" => "no cabelo",
   "MAIO" => "em Jejum",
   "JUNHO" => "de 3 em 3 horas",
   "JULHO" => "no chá",
   "AGOSTO" => "no café",
   "SETEMBRO" => "Depois das 18h00",
   "OUTUBRO" => "antes da aula",
   "NOVEMBRO" => "misturado na àgua",
   "DEZEMBRO" => "antes do almoço"
];

$Dia = [
    1 => "diminiu o inchaço", 2 => "diminiu o inchaço", 3 => "diminiu o inchaço",
    4 => "previne infarto", 5 => "previne infarto", 6 => "previne infarto",
    7 => "cura dor de dente", 8 => "cura dor de dente", 9 => "cura dor de dente",
    10 => "limpa o fígado", 11 => "limpa o fígado", 12 => "limpa o fígado",
    13 => "deixa mais inteligente", 14 => "deixa mais inteligente", 15 => "deixa mais inteligente",
    16 => "limpa as artérias", 17 => "limpa as artérias", 18 => "limpa as artérias",
    19 => "deixa musculos@", 20 => "deixa musculos@", 21 => "deixa musculos@",
    22 => "fortalece a unha", 23 => "fortalece a unha", 24 => "fortalece a unha",
    25 => "mata", 26 => "mata", 27 => "mata",
    28 => "dá sorte", 29 => "dá sorte",
    30 => "da azar", 31 => "da azar"
];

if (isset($_GET['letra_nome']) && isset($_GET['mes_do_nascimento']) && isset($_GET['dia_do_nascimento'])) {
    $letra_nome = $_GET['letra_nome'];
    $mes_nascimento = $_GET['mes_do_nascimento'];
    $dia_nascimento = $_GET['dia_do_nascimento'];
    $frase_fake = "{$Letra[$letra_nome]} {$Mes[$mes_nascimento]}, {$Dia[$dia_nascimento]}";
    include "geradorDados.php";
}else{
    include "geradorFrase.php";
}