<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css">
  <link href="bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./js/jquery-3.2.1.slim.min.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>


    <title>Anime World</title>
</head>

<body>
    <input type="checkbox" id="chec">
    <label for="chec">
        <p>MENU</p>
    </label>
    <nav>
        <ul>
            <li><a href="./index.php">HOME</a></li>
            <?php
            include_once('getList.php');
            include_once('getUsuario.php');
            include('Login.php');
            $log = Login::isLogged();
            if($log){ 
                echo '<li><a href="pg_usuario.php">Profile</a></li>';
            } else {
                echo '<li><a href="pg Profile.php">Profile</a></li>';
            }
            ?>
            <li><a href="./pg_AList.php">Anime List</a></li>
            <li><a href="./top_A.php">Top of the Season</a></li>
        </ul>
    </nav>
    <div class="head" align="right">
    <?php
            $log = Login::isLogged();
            if($log){ 
                echo '
                <form class="form" action="loggout.php" method="post">
                <input type="submit" id="logout"  value="Loggout">
                </form>';
            }
    ?>
    </div>
    <div class="aux">
    <div class="formular">
        <?php
            $result = getList::getLista();
            $select = getUser::getUsuario(); // Não tenho ideia o porque deste erro nesta linha...
        ?>
    <form class="form" action="dual.php" method="POST">
        <?php
        if($select != 0){
            echo '
            <div class="form-group">  
            <label for="l_name">Nome Completo</label>
            <br>
            <br>
            <input type="text" class="form-control" name="nome">'+"$select[1]"+'</input>
        </div>
        <div class="form-group">  
          <label for="l_email">Endereço de email</label>
          <br>
          <br>
          <input type="email" class="form-control" id="l_email" name="email" aria-describedby="emailHelp">'+"$select[2]"+'</input>
        </div>
        <div class="form-group">
          <label for="l_senha">Senha</label>
          <br>
          <br>
          <input type="password" class="form-control" id="l_senha" name="senha">'+"$select[3]"+'</input>
        </div>';
        } else {
            echo "<script language='javascript' type='text/javascript'>
                        alert('Erro em buscar os dados do usuário!!!');
                        window.location.href='pg index.php';
                        </script>";
        }

        ?>
        <label>Kobayashi</label>
        <br>
        <input type="checkbox" id="outro" name="anime"
        <?php
        if($result != 0){
            foreach ($result as &$valor){
                if($valor == 1){
                    echo 'checked="checked"';
                    break;
                }
            }       
        }
        ?>
        value="1">
        <br>
        <br>
        <label>Jujutsu Kaisen</label>
        <br>
        <input type="checkbox" id="outro" name="anime"<?php
        if($result != 0){
            foreach ($result as &$valor){
                if($valor == 2){
                    echo 'checked="checked"';
                    break;
                }
            }       
        }
        ?> value="2">
        <br>
        <br>
        <label>One Piece</label>
        <br>
        <input type="checkbox" id="outro" name="anime"
        <?php
        if($result != 0){
            foreach ($result as &$valor){
                if($valor == 3){
                    echo 'checked="checked"';
                    break;
                }
            }       
        }
        ?>
        value="3">
        <br>
        <br>
        <label>Boruto: Next Generation</label>
        <br>
        <input type="checkbox" id="outro" name="anime"
        <?php
        if($result != 0){
            foreach ($result as &$valor){
                if($valor == 4){
                    echo 'checked="checked"';
                    break;
                }
            }       
        }
        ?>
        value="4">
        <br>
        <br>
        <label>Boku no Hero Academia</label>
        <br>
        <input type="checkbox" id="outro" name="anime"
        <?php
        if($result != 0){
            foreach ($result as &$valor){
                if($valor == 5){
                    echo 'checked="checked"';
                    break;
                }
            }       
        }
        ?>
        value="5">
        <br>
        <br>
        <label>Black Clover</label>
        <br>
        <input type="checkbox" id="outro" name="anime"
        <?php
        if($result != 0){
            foreach ($result as &$valor){
                if($valor == 6){
                    echo 'checked="checked"';
                    break;
                }
            }       
        }
        ?>
        value="6">
        <br>
        <br>
        <label>Tokyo Revengers</label>
        <br>
        <input type="checkbox" id="outro" name="anime"
        <?php
        if($result != 0){
            foreach ($result as &$valor){
                if($valor == 7){
                    echo 'checked="checked"';
                    break;
                }
            }       
        }
        ?>
        value="7">
        <br>
        <br>
        <label>TenSura</label>
        <br>
        <input type="checkbox" id="outro"  name="anime"
        <?php
        if($result != 0){
            foreach ($result as &$valor){
                if($valor == 8){
                    echo 'checked="checked"';
                    break;
                }
            }       
        }
        ?>
        value="8">
        <br>
        <br>
        <input type="submit" name="atualizar" value="atualizar">
        <input type="submit" name="excluir"  value="excluir">
    </form>
    </div>
    </div>
</html>