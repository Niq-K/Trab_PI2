<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./estilo.css">
  <link rel="stylesheet" href="./bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css">
  <script src="./jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="./bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"></script>


    <title>Anime World</title>
</head>

<body>
    <input type="checkbox" id="chec">
    <label for="chec">
        <p>MENU</p>
    </label>
    <nav>
        <ul>
            <li><a href="./pg_summary.php">HOME</a></li>
            <li><a href="./pg Profile.php">Profile</a></li>
            <li><a href="./pg_AList.php">Anime List</a></li>
            <li><a href="./top_A.php">Top of the Season</a></li>
            <li><a href="./top_usuario.php">Pagina Usuario</a></li>
            <li><a href="./pg_Admin.php">Administrador</a></li>
            <li><a href="./Add_A.php">Adicionar Anime</a></li>
        </ul>
    </nav>
    <div class="head"></div>
    <div class="aux">
    <div class="formular">
        <form action="" method="POST">
        <div class="form-group">  
                <label for="l_name">Nome Completo Anime</label>
                <br>
                <br>
                <input type="text" class="form-control" name="nome_A" placeholder="Seu Nome">
            </div>
            <div class="form-group">  
                <label for="l_dataN">Data de Nascimento</label>
                <br>
                <br>
            <input type="date" class="form-control" name="data_lanc" id="l_dataN">
            </div>
        </form>
</body>
</html>