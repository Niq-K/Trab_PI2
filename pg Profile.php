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
            <li><a href="./pg Profile.php">Profile</a></li>
            <li><a href="./pg_AList.php">Anime List</a></li>
            <li><a href="./top_A.php">Top of the Season</a></li>
        </ul>
    </nav>
    <div class="head"></div>
    <div class="aux">
    <div class="formular">
        <form class="form" action="./process_login.php" method="post">
            <div class="form-group">
              <label for="l_email">Endereço de email</label>
              <br>
              <br>
              <input type="email" class="form-control" name="email" id="l_email" aria-describedby="emailHelp" placeholder="Seu email">
            </div>
            <div class="form-group">
              <label for="l_senha">Senha</label>
              <br>
              <br>
              <input type="password" class="form-control" name="senha" id="l_senha" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="./pg_account.php">Criar uma conta</a>
          </form>
    </div>
    </div>
</body>

</html>