<html>
<head>
    <title>Desafio Web Developer - Euax</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
    <?php 
        include 'conexao.php';
        $sql_pro = 'select * from projetos';
        $sql_ati = 'select * from atividades';
        $query_pro = mysqli_query($conexao,$sql_pro);
        $query_ati = mysqli_query($conexao,$sql_ati);
    ?>
</head>
<body>
    <h3>Sistema de Cadastro de Projetos</h3>
    <h6 class="text-muted font-weight-normal">Cadastre projetos e atividades de forma prática.</h6>
    <hr>
    <table>
        <tr>
            <td>
                <form action="PHPcadastros/cadastrarProjeto.php">
                    <button type="submit" class="btn btn-info">Cadastrar Projeto</button>
                </form>
            </td>
            <td>
                <form action="PHPcadastros/cadastrarAtividade.php">
                    <button type="submit" class="btn btn-dark">Cadastrar Atividade</button>
                </form>
            </td>
        </tr>
    </table>
    <br>
    <h3>Projetos em aberto</h3>
    <h6 class="text-muted font-weight-normal">Abaixo estão listados os projetos em aberto.</h6>
    <br>		
    <table class="table table-hover">
        <thead>
            <th scope="col">ID Projeto</td>
            <th scope="col">Nome do Projeto</td>
            <th scope="col">Data Início</td>
            <th scope="col">Data Fim</td>
            <th scope="col">% Completo</th>
            <th scope="col">Atrasado?</th>
        </thead>
        <?php
            while ($projetos = mysqli_fetch_array($query_pro)) {
                $IDProjeto = $projetos["IDProjeto"];
                $nomeProjeto = $projetos["nomeProjeto"];
                $dataInicioPro = $projetos["dataInicioPro"];
                $dataFimPro = $projetos["dataFimPro"];

                $maxDataFimAti = mysqli_query($conexao, "SELECT MAX(dataFimAti) FROM atividades");
                $reMaxDataFimAti = mysqli_fetch_array($maxDataFimAti);

                $maxDataFimPro = mysqli_query($conexao, "SELECT MAX(dataFimPro) FROM projetos");
                $reMaxDataFimPro = mysqli_fetch_array($maxDataFimPro);

                $infoFinalizadaAti = mysqli_query($conexao, "SELECT infoFinalizada FROM atividades");

                $colunaInfo = Array();
                while ($linhaInfo = mysqli_fetch_array($infoFinalizadaAti, MYSQLI_ASSOC)) {
                    $colunaInfo [] =  $linhaInfo['infoFinalizada'];  
                }

                $infoConcluida = 0;

                for ($i = 0; $i < count($colunaInfo); $i++) {
                    if ($reMaxDataFimAti[0] > $reMaxDataFimPro[0] && $colunaInfo[$i] == 0) {
                        $atrasado = "Sim";
                    } else {
                        $atrasado = "Não";
                    }

                    if ($colunaInfo[$i] == 1) {
                        $infoConcluida++;
                    }
                }

                $totalInfo = count($colunaInfo);
                $porcentagemCon = ($infoConcluida/$totalInfo) * 100; 
        ?>	
        <tr>
            <td><?php echo $IDProjeto ?></td>
            <td><?php echo $nomeProjeto ?></td>
            <td><?php echo date('d/m/Y',strtotime($dataInicioPro)) ?></td>
            <td><?php echo date('d/m/Y',strtotime($dataFimPro)) ?></td>
            <td><?php echo round($porcentagemCon), "%" ?></td>
            <td><?php echo $atrasado ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
    <br>
    <h3>Atividades em aberto</h3>
    <h6 class="text-muted font-weight-normal">Abaixo estão listadas as atividades em aberto.</h6>
    <br>
    <table class="table table-hover">
        <thead>
            <th scope="col">ID Atividade</td>
            <th scope="col">ID Projeto</td>
            <th scope="col">Nome da Atividade</td>
            <th scope="col">Data Início</td>
            <th scope="col">Data Fim</td>
            <th scope="col">Finalizada?</th>
        </thead>
        <?php
            while ($atividades = mysqli_fetch_array($query_ati)) {
                $IDAtividade = $atividades["IDAtividade"];
                $IDProjeto = $atividades["IDProjeto"];
                $nomeAtividade = $atividades["nomeAtividade"];
                $dataInicioAti = $atividades["dataInicioAti"];
                $dataFimAti = $atividades["dataFimAti"];
                $infoFinalizada = $atividades["infoFinalizada"];

                if ($infoFinalizada == 1) {
                    $Finalizada = "Sim";
                } else if ($infoFinalizada == 0) {
                    $Finalizada = "Não";
                } else {
                    $Finalizada = "Não Informado";
                }
        ?>	
        <tr>
            <td><?php echo $IDAtividade ?></td>
            <td><?php echo "<b>$IDProjeto</b>" ?></td>
            <td><?php echo $nomeAtividade ?></td>
            <td><?php echo date('d/m/Y',strtotime($dataInicioAti)) ?></td>
            <td><?php echo date('d/m/Y',strtotime($dataFimAti)) ?></td>
            <td><?php echo $Finalizada ?></td>
        </tr>
        <?php 
            }
        ?>
    </table>
</body>
</html>