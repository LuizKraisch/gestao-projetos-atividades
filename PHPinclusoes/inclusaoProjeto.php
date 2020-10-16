<meta charset="utf-8">
<title>Cadastrando...</title>
<?php 
	include "../conexao.php";
	
	$nomeProjeto = $_POST['nome_projeto'];
	$dataInicio = $_POST['data_inicio_pro'];
	$dataFim = $_POST['data_fim_pro'];
	
	if ($dados = mysqli_query($conexao, "INSERT INTO projetos (nomeProjeto, dataInicio, dataFim) VALUES ('$nomeProjeto', '$dataInicio', '$dataFim')")){
		echo"<script>alert('Inclusão realizada com sucesso!');</script>";
		echo"<script>window.location='../index.php'</script>";
	}
	else
	{
		echo"<script>alert('Erro na inclusão. Por favor, verifique se os dados estão preenchidos corretamente.');</script>";
		echo"<script>window.location='../PHPcadastros/cadastrarProjeto.php'</script>";
	}
?>