<?php

require_once("Persona.php");

class App
{
  public function __construct($name = "Aplicación PHP")
  {
    $this->name = $name;
    $this->password = $password;
  }

  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'login';
    }
  
    $this->$method();      
  }

  public function login()
  {
    include('views/index.php');
    }
    
    public function login()
    {
    include('views/index.php');
      }

    public function login()
    {
      include('views/index.php');
      }
    
  
  public function setcookie()
  {
    setcookie("user", "Fulanito de Tal", time() + 3600);

    //ojo para guardar arrays:
    $hobbies = ['futbol', 'música rock', 'tocar la guitarra con mis amigos'];
    setcookie("hobbies", serialize($hobbies), time() + 3600);
    setcookie("hobbies2", json_encode($hobbies), time() + 3600);

    //y objetos:
    $persona = new Persona("Juan", "Pérez", 21);
    setcookie("persona", serialize($persona), time() + 3600);
    setcookie("persona2", json_encode($persona), time() + 3600);

    //ESTO ES NUEVO: 
    //No incluímos una vista. Reenviamos el navegador a otro sitio
    //en este caso al mismo sitio:
    header('Location: .');
  }  
}
