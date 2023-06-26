<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Contato - PHP Profissional</title>
    <link href="./bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">

<body>
    <div class="container">
        <div class="jumbotron">
            <h1>CRUD - Contato - PHP Profissional</h1>
        </div>
        <nav class="navbar navbar-default">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li><a href="javascript:void(0);" id="listar_contato"><i class="glyphicon glyphicon-th-list"></i>
                            Listar</a>
                    </li>
                    <li><a href="javascript:void(0);" id="novo_contato"><i class="glyphicon glyphicon-plus"></i>
                            Novo</a></li>
                </ul>
            </div>
        </nav>
        <div id="carregando" style="display: none; text-align: center;">
            <img src="./images/loading-gif.gif" />
        </div>
        <div id="conteudo"></div>
        <div id="excluir_contato_modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Excluir Contato</h4>
                    </div>
                    <div class="modal-body">
                        <p>Confirma a exclusão do contato?</p>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="contato_id" value="" />
                        <button type="button" id="excluir" class="btn btn-primary">Sim</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./jQuery/js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="./bootstrap-3.3.7-dist/css/bootstrap.css"></script>
    <script type="text/javascript" src="./js/crud.js"></script>
</body>

</html>