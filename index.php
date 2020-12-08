
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compre Já</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
                    <img src="img/logo.png" class="img-thumbnail" style="display: table-cell; float:left;">
                </div>
                <div class="col-lg-9" style="display: table-cell; float:left;">
                    <h3 style="color: #DAA520;">Óculos de Sol</h3>
                    <h1 style="color: #DAA520;">SunStylish</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6" id="form-container">
                    <form id="step_1" class="form-step">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Preencha seus dados para receber contato
                                </div>
                            </div>
                            <div class="panel-body">
                                <fieldset>
                                    <div class="row form-group">
                                        <form method="get" action="1PHP.php">
                                        <div class="col-lg-6">
                                            <label>Nome Completo</label>
                                            <input class="form-control" type="text" name="nome" placeholder="Nome">
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Data de Nascimento</label>
                                            <input class="form-control" type="date" name="data_nascimento"
                                                placeholder="01-10-2020">
                                        </div>
                                        <form method="get" action="1PHP.php">
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-lg-6">
                                            <label>Email</label>
                                            <input class="form-control" type="email" name="email"
                                                placeholder="xxxxxxxx@xxxx.com">
                                        </div>

                                        <div class="col-lg-6">
                                            <label>Telefone</label>
                                            <input class="form-control" type="tel" name="telefone"
                                                placeholder="(ddd)9XXXX-XXXX">
                                        </div>
                                    </div>

                                    <div>
                                        <button type="submit" value="Botao"
                                            class="btn btn-lg btn-info next-step">Próximo Passo</button>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                    <form id="step_2" class="form-step" style="display:none">
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
                                                <select class="form-control" name="regiao">
                                                    <option value="">Selecione a sua região</option>
                                                    <option>Sul</option>
                                                    <option>Sudeste</option>
                                                    <option>Centro-Oeste</option>
                                                    <option>Nordeste</option>
                                                    <option>Norte</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Unidade</label>
                                                <select class="form-control" name="unidade">
                                                    <option value="">Selecione a unidade mais próxima</option>
                                                    <option>Belo Horizonte</option>
                                                    <option>Brasília</option>
                                                    <option>Curitiba</option>
                                                    <option>Porto Alegre</option>
                                                    <option>Recife</option>
                                                    <option>Rio de Janeiro</option>
                                                    <option>Salvador</option>
                                                    <option>São Paulo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-lg btn-info next-step">Enviar</button>
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
        $(function () {
            $('.next-step').click(function (event) {
                event.preventDefault();
                $(this).parents('.form-step').hide().next().show();
            });
        });
    </script>
</body>

</html>