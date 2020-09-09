<!Doctype hmtl>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Consulta dados dos alunos</title>
    </head>
    <body>
        <?php
            include ("conexao_bd.php");

            $sql = "SELECT * FROM pessoas";
            
            $query = mysqli_query($conexao_bd, $sql);
            if(mysqli_num_rows($query) > 0){

                while(($resul = mysqli_fetch_assoc($query)) != null){

                    echo $resul['R_A'] . " - " . $resul['Nome'] . " - " . $resul['Idade'] . " - " . $resul['Endereco'] . "<br>";
                }            
            }

            mysqli_close($conexao_bd);


        ?>
    </body>
</html>