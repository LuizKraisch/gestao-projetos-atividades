<meta charset="utf-8">
<title>Cadastrando Atividade...</title>
<?php 
	include "../conexao.php";
	
	$IDProjeto = $_POST['ID_projeto'];
	$nomeAtividade = $_POST['nome_atividade'];
    $dataInicio = $_POST['data_inicio_ati'];
    $dataFim = $_POST['data_fim_ati'];
    $infoFinalizada = $_POST['info_finalizada'];
	
	if ($dados = mysqli_query($conexao, "INSERT INTO atividades (IDProjeto, nomeAtividade, dataInicioAti, dataFimAti, infoFinalizada) VALUES ('$IDProjeto', '$nomeAtividade', '$dataInicio', '$dataFim', '$infoFinalizada')")){
		echo"<script>alert('Inclusão realizada com sucesso!');</script>";
		echo"<script>window.location='../index.php'</script>";
	}
	else
	{
		echo"<script>alert('Erro na inclusão. Por favor, verifique se os dados estão preenchidos corretamente.');</script>";
		echo"<script>window.location='../PHPcadastros/cadastrarAtividade.php'</script>";
	}
?>