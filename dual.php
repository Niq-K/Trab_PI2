<?php
include("conexao.php");
include("Login.php");
include("checkList.php");
$nome = filter_input(INPUT_POST, "nome");
$email = filter_input(INPUT_POST, "email");
$senha = filter_input(INPUT_POST, "senha");
$animes = filter_input(INPUT_POST, "anime");
foreach($animes as &$values){

}
switch (get_post_action('atualizar', 'excluir')) {
    case 'atualizar':
        if(!empty($senha) && !empty($email)){ // não consegui implementar a atualização da Lista de animes.
            $user = login::getLoggedUser();
            $query = "UPDATE usuario SET nome = '$nome', email = '$email', senha = '$senha' WHERE id_user = '$user'";
            $update = mysqli_query($mysqli, $query);
            if($update){
                echo "<script language='javascript' type='text/javascript'>
                        alert('Usuário foi atualizado com Sucesso.');
                        window.location.href='index.php';
                        </script>";
            } else {
                echo "<script language='javascript' type='text/javascript'>
                        alert('Não foi possível atualizar o usuário.');
                        window.location.href='pg Profile.php';
                        </script>";
                
            }
        }
        break;
    case 'excluir':
        if(!empty($senha) && !empty($email)){
            $query = "DELETE FROM usuario WHERE email = '$email' AND senha = '$senha';";
            $delete = mysqli_query($mysqli, $query);
            if($delete){

                echo "
                <?php
                  login::logout();                
                ?>
                <script language='javascript' type='text/javascript'>
                        alert('Usuário foi excluido com Sucesso.');
                        window.location.href='index.php';
                        </script>";
            } else {
                echo "<script language='javascript' type='text/javascript'>
                        alert('Não foi possível excluir o usuário.');
                        window.location.href='index.php';
                        </script>";
            }
        }
        break;

    default:
}
?>