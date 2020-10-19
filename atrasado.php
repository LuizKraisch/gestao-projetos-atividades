<?php

include 'conexao.php';
$sql_pro = 'select * from projetos';
$sql_ati = 'select * from atividades';
$query_pro = mysqli_query($conexao,$sql_pro);
$query_ati = mysqli_query($conexao,$sql_ati);

$atividades = mysqli_fetch_array($query_ati);
$projetos = mysqli_fetch_array($query_pro);

$dataFimAti = $atividades["dataFimAti"];
$dataFimPro = $projetos["dataFimPro"];

if ($dataFimAti > $dataFimPro) {
    $atrasado = "Sim";
} else {
    $atrasado = "Não";
}

echo $atrasado;

?>

