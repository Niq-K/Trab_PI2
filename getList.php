<?php
class getList{
    public static function getLista(){
        include('conexao.php');
        include('getUsuario.php');
        $user = login::getLoggedUser();
        if($mysqli){
            $query = "SELECT id_anime FROM lista WHERE id_user = '$user' ";
            $resultado = mysqli_query($mysqli, $query);
            if(mysqli_num_rows($resultado) != 0){
                return $resultado->mysqli_fetch_array();
            } else {
                return 0;
            }
        }
    }
}

?>