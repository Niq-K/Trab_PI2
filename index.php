<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./estilo.css">
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
                <input type="submit" id="logout" value="Loggout">
                </form>';
            }
    ?>
    </div>
    <div class="body">
        <p class="title">
            <font face="Brush Script MT">Welcome to the world of pure imagination</font>
        </p>
        <br>
        <center><img src="./SGU.gif"></center>
        <br>
        <center>
            <p>This page has the propouse of being a place where you can organize your animes and web-series. So just
                have fun and enjoy this incredible world.</p>
            <br>
            <p>Essa página tem o intuito de ser um lugar onde você pode organizar seus animes e web-series. Então, divirta-se e aproveite esse mundo incrível.</p>
        </center>
    </div>
    <br>
    <br>
    <br>
    <?php
        $log = Login::isLogged();
        if($log){ 
        } else {
            echo '<footer>
            <div class="foot">
                <a class="foot" href="./pg Profile.php">Entre ou crie sua conta.</a>
            </div>
            </footer>';
        }
    ?>
</body>

</html>