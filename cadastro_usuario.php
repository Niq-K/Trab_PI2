<?php

    include("conexao.php");
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
            $senha = filter_input(INPUT_POST, "senha");
            $email = filter_input(INPUT_POST, "email");

            if(!empty($nome) && !empty($senha) && !empty($email)){
                if($mysqli) {

                    $query = "INSERT INTO usuario (email, nome, senha) VALUES('$email','$nome','$senha')";

                    $insert = mysqli_query($mysqli, $query);
                    if($insert) {
                        echo "<script language='javascript' type='text/javascript'>
                        alert('Cadastrado com Sucesso!!!');
                        window.location.href='pg Profile.php';
                        </script>";
                    } else {
                        echo "<script language='javascript' type='text/javascript'>
                        alert('Ops, não foi possivel inserir!');
                        window.location.href='pg_account.php';
                        </script>";
                    }

                }


            } else {

                echo "<script language='javascript' type='text/javascript'>
                        alert('Não foi possivel cadastrar... Há campos vazios.');
                        window.location.href='pg_account.php';
                        </script>";

            }
    } else {
        echo "<script language='javascript' type='text/javascript'>
                        alert('Erro: Voce não pode acessar esta página por esta forma!!!');
                        window.location.href='pg_account.php';
                        </script>";
    }


?>