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
                <input type="submit" id="logout"  value="Loggout">
                </form>';
            }
    ?>
    </div>
    <div class="body">
        <div class="animeList">
        <button class="anime" onclick="window.location.href = 'https://pt.wikipedia.org/wiki/One_Piece'"><img
                class="anime"
                src="./one_piece_list.jpg"></button>
        <button class="anime" onclick="window.location.href = 'https://pt.wikipedia.org/wiki/Tokyo_Revengers'"><img
                class="anime"
                src="./tkr_list.jpg"></button>
        <button class="anime"
            onclick="window.location.href = 'https://pt.wikipedia.org/wiki/Boruto:_Naruto_Next_Generations'"> <img
                class="anime"
                src="./boruto_list.jpg"></button>
        <button class="anime" onclick="window.location.href = 'https://pt.wikipedia.org/wiki/Boku_no_Hero_Academia'">
            <img class="anime"
                src="./boku_no_hero_list.jpg"></button>
        <button class="anime"
            onclick="window.location.href = 'https://pt.wikipedia.org/wiki/Tensei_Shitara_Slime_Datta_Ken'">
            <img class="anime"
                src="./slime_list.jpg"></button>
        <button class="anime" onclick="window.location.href = 'https://pt.wikipedia.org/wiki/Jujutsu_Kaisen'">
            <img class="anime"
                src="./jujutsu_list.jpg"></button>
        <button class="anime" onclick="window.location.href = 'https://pt.wikipedia.org/wiki/Black_Clover'">
            <img class="anime"
                src="./black_clover_list.jpg"></button>
        <button class="anime" onclick="window.location.href = 'https://pt.wikipedia.org/wiki/Kobayashi-san_Chi_no_Maid_Dragon'">
            <img class="anime"
            src="./kobayashi_list.jpg"></button>
        </div>
        <a href="https://www.crunchyroll.com/pt-br/videos/anime">Imagens e conteúdo utilizado como base</a>
    </div>
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