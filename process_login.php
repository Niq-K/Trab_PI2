<?php

    include("conexao.php");
    include("Login.php");
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $email = filter_input(INPUT_POST, "email");
            $senha = filter_input(INPUT_POST, "senha");
            if(!empty($senha) && !empty($email)){
                if($mysqli) {
                    $query = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha';";
                    $select = mysqli_query($mysqli, $query);
                    if(mysqli_num_rows($select) != 0 && mysqli_num_rows($select) < 2){
                        login::login2($select);
                    }
                    else {
                        echo "<script language='javascript' type='text/javascript'>
                        alert('Usuário não existe.');
                        window.location.href='pg Profile.php';
                        </script>";
                    }
                }
            } else {
                echo "<script language='javascript' type='text/javascript'>
                        alert('Usuário ou Senha errados.');
                        window.location.href='pg Profile.php';
                        </script>";
            }
    }


?>