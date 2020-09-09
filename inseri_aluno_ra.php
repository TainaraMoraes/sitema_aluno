<!Doctype hmtl>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Consulta dados dos alunos por R.A</title>
    </head>
    <body>
        <?php
            include ("conexao_bd.php");
            
            $Ra = $_POST["RA"]; 
            $sql = "SELECT * FROM pessoas WHERE R_A =  $Ra";
            
            $query = mysqli_query($conexao_bd, $sql);
            if(mysqli_num_rows($query) > 0){

                while(($resul = mysqli_fetch_assoc($query)) != null){

                    echo $resul['R_A'] . " - " . $resul['Nome'] . " - " . $resul['Idade'] . " - " . $resul['Endereco'] . "<br>";
                }            
            }else{
                echo "Não possui Aluno com esse R.A<br>";
            }
            echo "<a href='menu.php'>Voltar</a>";
            mysqli_close($conexao_bd);


        ?>
    </body>
</html>