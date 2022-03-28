<?php
    include('conexao.php');
    class checkList{
        public static function check($num){
            if($mysqli){
                $query = "SELECT id_anim WHERE id_user = '$num'";
                $select = mysqli_query($mysqli, $query);
                if(mysqli_num_rows($select) != 0){
                    return $select->mysqli_fetch_array();
                } else {
                    return 0;
                }
            }
        } 
    }

?>