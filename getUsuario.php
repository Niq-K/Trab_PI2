<?php
    class getUser{
        public static function getUsuario(){
            include('conexao.php');
            include('Login.php');
            $user = login::getLoggedUser();
            if($mysqli){
                $query = "SELECT id_anime FROM lista WHERE id_user = '$user' ";
                $result = mysqli_query($mysqli, $query);
                if(mysqli_num_rows($result) != 0){
                    return $result->mysqli_fetch_array();
                } else {
                    return 0;
                }
            }
        }
    }

?>