<html>
<head>
    <title>Desafio Web Developer - Euax</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
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
    <br>
    
    <hr>
    <br>
    <h3>Atividades em aberto</h3>
    <br>

</body>
</html>