<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro do fluxo de caixa</title>
</head>
<body>
    <?php
        include('include/conexao.php');

        $data      = $_POST['data'];
        $tipo      = $_POST['tipo'];
        $valor     = $_POST['valor'];
        $historico = $_POST['historico'];
        $cheque    = $_POST['cheque'];

        echo "<h1>Dados do fluxo de caixa<h1>";
        echo "Data:      $data<br>";
        echo "Tipo:      $tipo<br>";
        echo "Valor:     $valor<br>";
        echo "Historico: $historico<br>";
        echo "Cheque:    $cheque<br>";

        $sql = "INSERT INTO fluxo_caixa ( data, tipo, valor, historico, cheque)";
        $sql .= "VALUES ('".$data."','".$tipo."','".$valor."','".$historico."','".$cheque."')";
        echo $sql;

        $result = mysqli_query($con, $sql);
        if($result)
        {
            echo "<h2>Dados cadastrados com sucesso!<h2>";
        }
        else
        {
            echo "<h2>Erro ao cadastrar!<h2>";
            echo mysqli_error($con);
        }

    ?>
</body>
</html>
