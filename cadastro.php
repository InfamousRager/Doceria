<?php
            include_once("src/classe/conexao.php");
            $nome = $_POST["Nome"];
            $qtd = $_POST["Quantidade"];
            $valor = $_POST["Valor"];
    
            $sql = "INSERT INTO loja_doce(nome_doce, quant_doce, valor_doce) VALUES ('$nome', $qtd, $valor)";
            if(mysqli_query($mysqli, $sql)){
                //echo "<script>alert('Records inserted successfully.')</script>";
                header('Location: cadastro_doces.php');

            }/* else{
                echo "<script>alert('Erro. Algo não ocorreu como deveria !')</script>";
            }*/
        
            
            
        ?>

