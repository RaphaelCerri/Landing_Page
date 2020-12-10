<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.png">
    <title>Compre Já</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="css/cssunid.css" rel="stylesheet">
    <script src="js/jsunidades.js"></script>
    <style>
        strong {
            color: #DAA520;
        }

        strong.BLACK {
            color: black;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row" style="margin:30px 0">
            <div class="col-lg-3">
                <img width="220px" src="img/logo.png" class="img-thumbnail" style="display: table-cell; float:left;">
            </div>
            <div class="col-lg-9" style="display: table-cell; float:left;">
                <h3 style="color: #DAA520;">Óculos de Sol</h3>
                <h1 style="color: #DAA520;">SunStylish</h1>
            </div>
            <div class="col-lg-3" style="display: table-cell; float:left;">
                <img width="170px" src="img/glasses.jpg" class="img-thumbnail" style="display: table-cell; float:left;">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6" id="form-container">
                <form action="db_connect.php" method="POST" id="step_1" class="form-step">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Preencha seus dados para receber contato
                            </div>
                        </div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row form-group">
                                    <div class="col-lg-6">
                                        <label>Nome Completo</label>
                                        <input class="form-control" type="text" name="nome" placeholder="Nome">
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Data de Nascimento</label>
                                        <input id="datin" class="form-control" type="date" name="data_nascimento" placeholder="aaaa-mm-dd">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-lg-6">
                                        <label>Email</label>
                                        <input class="form-control" type="email" name="email" placeholder="xxxxxxxx@xxxx.com">
                                    </div>

                                    <div class="col-lg-6">
                                        <label>Telefone</label>
                                        <input class="form-control" type="tel" name="telefone" placeholder="(ddd)9XXXX-XXXX">
                                    </div>
                                </div>

                                <div>
                                    <button type="submit" value="Botao" class="btn btn-lg btn-info next-step">Próximo Passo</button>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </form>
                <form action="db_connect.php" method="POST" id="step_2" class="form-step" style="display:none">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Preencha seus dados para receber contato
                            </div>
                        </div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row form-group">
                                    <div class="col-lg-6">
                                        <label>Região</label>
                                        <select onchange="mudarUnidade()" class="input form-control" id="regiao" name="regiao" title="Região" required>
                                            <option id="regiao" value="NDD">Selecione a sua região</option>
                                            <option id="regiao" value="Sul">Sul</option>
                                            <option id="regiao" value="Sudeste">Sudeste</option>
                                            <option id="regiao" value="Centro-Oeste">Centro-Oeste</option>
                                            <option id="regiao" value="Nordeste">Nordeste</option>
                                            <option id="regiao" value="Norte">Norte</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Unidade</label>
                                        <select class="input form-control unidade" name="unidade" id="unidade" title="Unidade" required>
                                            <option id="unidSEL" value="selec">Selecione a unidade mais próxima</option>
                                            <option id="unidSELREG" value="selecregi">!!Selecione uma região!!</option>
                                            <option id="unidPOR" value="portoalegre">Porto Alegre</option>
                                            <option id="unidCUR" value="curitiba">Curitiba</option>
                                            <option id="unidSAO" value="saopaulo">São Paulo</option>
                                            <option id="unidRIO" value="riodejaneiro">Rio de Janeiro</option>
                                            <option id="unidBEL" value="belohorizonte">Belo Horizonte</option>
                                            <option id="unidBRA" value="brasilia">Brasília</option>
                                            <option id="unidSAL" value="salvador">Salvador</option>
                                            <option id="unidREC" value="recife">Recife</option>
                                            <option id="unidNPS" value="indisponivel">Não possui disponibilidade</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <button name="btn-entrar" type="submit" class="btn btn-lg btn-info next-step">Enviar</button>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </form>

                <div id="step_sucesso" class="form-step" style="display:none">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Obrigado pelo cadastro!
                            </div>
                        </div>
                        <div class="panel-body">
                            Em breve você receberá uma ligação com mais informações!
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h1><strong>Proteja-se</strong> e seja <strong>estiloso(a)</strong></h1>
                <h2>Em breve por todo o Brasil</h2>
                <hr>
                <h5><strong class="BLACK">Feito por Raphael Cerri Caveagna</strong></h5>
                <hr>
                <h6>Landing Page para Estágio</h6>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $('.next-step').click(function(event) {
                event.preventDefault();
                $(this).parents('.form-step').hide().next().show();
            });
        });
    </script>
</body>
</html>