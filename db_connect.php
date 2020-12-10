<!DOCTYPE html>
<html>

<head>
    <title>Envio de Leads</title>
    <meta charset="utf-8">
</head>

<body>
    <div>
        <?php
        # CONEXÃO COM BANCO DE DADOS
        $servername = "localhost";
        $username = "root";
        $useremail = "";
        $useridade = "";
        $usertelefone = "";
        $regiao = "";
        $unidade = "";
        $userscore = "";
        $dbname = "actsales";

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $datanascimento = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
        $regiao = filter_input(INPUT_POST, 'regiao', FILTER_SANITIZE_STRING);
        $unidade = filter_input(INPUT_POST, 'unidade', FILTER_SANITIZE_STRING);

        $Score = 10;

        $connect = new mysqli($servername, $username, $useremail, $useridade, $usertelefone, $userregiao, $userunidade, $userscore, $db_name);

        if ($datanascimento >= "07-12-1920" || $datanascimento < "07-12-2002") {
            $Score -= 5;
        } elseif ($datanascimento >= "07-12-1980" && $datanascimento < "07-12-1920") {
            $Score -= 3;
        } else {
            $Score == $Score;
        }
        $useridade == $datanascimento - "09-12-2020";

        if ($regiao == "Sul") {
            $Score = -2;
        } elseif ($regiao == "Sudeste") {
            if ($unidade == "São Paulo") {
                $Score = $Score;
            } else {
                $Score = -1;
            }
        } elseif ($regiao == "Centro-Oeste") {
            $Score == -3;
        } elseif ($regiao == "Nordeste") {
            $Score == -4;
        } elseif ($regiao == "Norte") {
            $Score == -5;
        } else{
            $Score == $Score;
        }
        $userscore == $Score;

        $id = $_SESSION['id_usuario'];
        $sql = "SELECT * FROM usuarios WHERE id='$id'";

        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);
        ?>
    </div>
    <div>
        <label><h1>Nome: <?php echo $nome; ?></h1></label><br>
        <label><h1>E-mail: <?php echo $email; ?></h1></label><br>
        <label><h1>Telefone: <?php echo $telefone; ?></h1></label><br>
        <label><h1>Regiao: <?php echo $regiao; ?></h1></label><br>
        <label><h1>Unidade: <?php echo $unidade; ?></h1></label><br>
        <label><h1>Data de nascimento: <?php  echo $datanascimento?></h1></label><br>
        <label><h1>Score: <?php if($Score > -1){echo $Score;} else{echo "deu erro";} ?></h1></label><br>
        <label><h1>Token: {"success":true,"message":"Token enviado para o email vagas-ti@actualsales.com.br"}</h1></label>
    </div>
</body>

</html>