<?php
class Login
{
  private function login(){ // Para o construtor da classe não ser static
    if(session_status() !== PHP_SESSION_ACTIVE){

      session_start();
    }
  }

  private static function init(){
    if(session_status() !== PHP_SESSION_ACTIVE){

      session_start();
    }
  }

  public static function getLoggedUser()
  {
    self::init();
    return self::isLogged() ? $_SESSION["usuario"]['id'] : null;
  }

  public static function login2($usuario){
    self::init();


    $_SESSION['usuario'] = [
      'id'    =>  $usuario->id_user,
      'nome'  =>  $usuario->name,
      'email' =>  $usuario->email,
      'senha' =>  $usuario->senha,
      'tag' =>  $usuario->tag
    ];


    header('location: index.php');
    exit;
  }

  public static function logout(){
    self::init();
    unset($_SESSION['usuario']);
    header('location: index.php');
    exit;
  }

  public static function isLogged(){
    self::init();
    return isset($_SESSION['usuario']);
  }

  public static function requireLogin()
  {
    if(!self::isLogged()){
      header('location: login.php');
      exit;
    }
  }
  public static function requireLogout()
  {
    if(self::isLogged()){
      header('location: index.php');
      exit;
    }
  }
  public static function requireLoginAdmin()
  {
    self::init();
    if(self::isLogged()  ){
      if($_SESSION['usuario']['pefil']=="0"){

        return true;
      }
    }

     header('location: index.php');
     exit;
  }

}




?>
