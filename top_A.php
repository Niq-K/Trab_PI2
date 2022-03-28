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
    <br>
    <center>
      <h1>1- One Piece</h1>
    </center>
    <center>
      <div id="carousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100"
              src="./carrosel/one_piece_c1.png" width="500px"
              height="600px" alt="Primeiro Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100"
              src="./carrosel/one_piece_c2.jpeg"
              width="500px" height="600px" alt="Segundo Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100"
              src="./carrosel/one_piece_c3.jpeg"
              width="500px" height="600px" alt="Terceiro Slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
    </center>
    <center>
      <div class="profile">

        <p>One Piece (ワンピース Wan Pīsu?) é uma série de mangá escrita e ilustrada por Eiichiro Oda. Os capítulos têm sido
          serializados na revista Weekly Shōnen Jump desde 22 de julho de 1997,<br>
          com os capítulos compilados e publicados em 99 volumes tankōbon pela editora Shueisha até fevereiro de 2021.
          One Piece conta as aventuras de Monkey D. Luffy, um jovem cujo corpo ganhou<br>
          as propriedades de borracha após ter comido uma fruta do diabo acidentalmente. Com sua tripulação, os Piratas
          do Chapéu de Palha, Luffy explora a Grand Line em busca do tesouro mais procurado<br>
          do mundo, o "One Piece", a fim de se tornar o próximo Rei dos Piratas.</p>
        <br>
        <table>
          <th>Episodes</th>
          <td>-1200</td>
        </table>
      </div>
    </center>
    <br>
    <br>
    <center>
      <h1>2- That Time I Got Reincarned as a Slime (TenSura/Tensei Shitara Slime Datta Ken)</h1>
    </center>
    <center>
      <div id="carousel2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./carrosel/slime_c1.jpg" width="500px"
              height="600px" alt="Primeiro Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100"
              src="./carrosel/slime_c2.jpg" width="500px"
              height="600px" alt="Segundo Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100"
              src="./carrosel/slime_c3.jpg"
              width="500px" height="600px" alt="Terceiro Slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
    </center>
    <center>
      <div class="profile">
        <p>Depois de ser morto por um ladrão que fugia, um rapaz normal de 37 anos de idade se encontra reencarnado em
          um outro mundo como um slime cego com habilidades únicas.<br>
          Com um novo nome “Rimuru Tempest” ele chegou depois de conhecer seu novo amigo, o “nível de catástrofe”,
          Dragão da Tempestade Verudora, e começa sua vida de slime em outro mundo com seu crescente número de
          seguidores.<br>
          <br>
        <table>
          <th>Episodes</th>
          <td>-48</td>
        </table>
      </div>
    </center>
    <center>
      <h1>3- Tokyo Revengers</h1>
    </center>
    <center>
      <div id="carousel3" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100"
              src="./carrosel/tr_c1.jpg"
              width="500px" height="600px" alt="Primeiro Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100"
              src="./carrosel/tr_c2.jpg" width="500px"
              height="600px" alt="Segundo Slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel3" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carousel3" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
    </center>
    <center>
      <div class="profile">
        <p>Assistindo às notícias, Takemichi Hanagaki descobre que sua namorada dos tempos do ensino médio, Hinata<br>
          Tachibana, morreu. A única namorada que ele já teve foi morta por um grupo de vilões conhecido como Gang<br>
          Manji, de Tóquio. Ele mora em um apartamento ruim com paredes finas, e seu chefe seis anos mais novo o trata<br>
          como um idiota. Além disso, ele é um virgem completo e total… No auge de sua vida no fundo do poço, ele<br>
          repentinamente salta doze anos nos dias do ensino médio!! Para salvar Hinata e mudar a vida que ele passou<br>
          fugindo, Takemichi, sem esperanças, deve procurar o topo da gangue mais sinistra de delinquentes de Kanto<br>
          <br>
        <table>
          <th>Episodes</th>
          <td>-24</td>
        </table>
      </div>
    </center>
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