<html>
<head>
    <title>Cadastrar Projeto | Desafio Web Developer - Euax</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <h3>Cadastrar Projeto</h3>
    <h6 class="text-muted font-weight-normal">Insira as informações abaixo para criar um projeto.</h6>
    <hr>
    <td>
    <div>
        <form action="../index.php">
            <button type="submit" class="btn btn-info">Voltar</button>
        </form>
    </div>
    <form name="cadastroPro_form" method="POST" action="../PHPinclusoes/inclusaoProjeto.php">
        <div class="form-row mt-2 mb-3">
            <div class="col-md-12">
                <label for="nome_projeto"><b>Nome do Projeto</b></label>
                <input type="text" class="form-control" name="nome_projeto" placeholder="Nome do Projeto" required/>
            </div>
        </div>
        <div class="form-row mt-2 mb-3">
            <div class="col-md-12">
                <label><b>Data de Início</b></label>
                <input type="date" class="form-control" name="data_inicio_pro" required/>
            </div>
        </div>
        <div class="form-row mt-2 mb-3">
            <div class="col-md-12">
                <label><b>Data de Término (ou previsão)</b></label>
                <input type="date" class="form-control" name="data_fim_pro" required/>
            </div>
        </div>
        <div class="form-row mt-2 mb-3">
            <div class="col-md-4">
                <button type="submit" class="btn btn-dark">Registrar</button>
            </div>
        </div>	
    </form>
</body>
</html>