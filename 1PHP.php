<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
</head>

<body>
    <div>
        <?php
        $Score = 10;
        $datanascimento = $_POST["data_nascimento"];
        if ($datanascimento >= "07-12-1920" || $datanascimento < "07-12-2002") {
            $Score -= 5;
        } elseif ($dataNascimento >= "07-12-1980" && $datanascimento < "07-12-1920") {
            $Score -= 3;
        } else {
            $Score == $Score;
        }
        ?>
    </div>
    <div>
        <?php
        $regi = $_POST["regiao"];
        $uni = $_POST["unidade"];
        if ($regi == "Sul") {
            $Score = -2;
        } elseif ($regi == "Sudeste") {
            if ($uni == "São Paulo") {
                $Score = $Score;
            } else {
                $Score = -1;
            }
        } elseif ($regi == "Centro-Oeste") {
            $Score == -3;
        } elseif ($regi == "Nordeste") {
            $Score == -4;
        } else {
            $Score == -5;
        }
        ?>
    </div>
</body>

</html>