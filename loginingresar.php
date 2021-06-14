<?php 


session_start();
error_reporting(0);
if(isset($_SESSION['user_id'])){

  header('Location: usuario.php  ');
}
require 'database.php';

if(!empty($_POST['email'])&& !empty($_POST['password'])){
  $records=$conn->prepare('SELECT id, email, password FROM users WHERE email=:email');
  $records->bindParam(':email',$_POST['email']);
  $records->execute();
  $results=$records->fetch(PDO::FETCH_ASSOC);

  $message='';
  if(count($results)>0 && password_verify($_POST['password'],$results['password'])){
    $_SESSION['user_id']=$results['id'];
    header('Location: usuario.php ');

  }else{
$message='No ingreso bien el usuario o contraseña';

  }



}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <title>Login</title>
    <link href="css/loginingresar.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Butterfly+Kids&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chilanka&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Reem+Kufi&display=swap" rel="stylesheet">
</head>
<body>


<section class="Menu">




<nav class="navbar navbar-expand-lg navbar-light bg-light">
<img src="uaeh.png" alt="logo" style="width:80px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">Inicio</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
  
      <a class="nav-link" href="sobrenosotros.html">Sobre el Proyecto</a>
   
    
    
      <a class="nav-link" href="loginregistro.php">Registro</a>
    

      <section class="Contacto">                      
<button type="button" class="btn  bg-black" data-toggle="modal" data-target="#exampleModalScrollable">
  Contacto con el Desarrollador
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Correo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ra361018@uaeh.edu.mx
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>               
  </section> 




    </form>
  </div>
</nav>
</section>






<div class="container">
  <div class="row">
    <div class="col-sm-1 border-primary">
     
     
    </div>
    <div class="col-sm-5">


    
    <section class="datos text-center">    
    
    <form action"loginingresar.php" method="post">
      <br>
     
      <h4>Login</H4>
      <h6>Ingresa tus datos:</H6>
      <br>
      <?php if(!empty($message)):?>
  <p><?=$message ?> </p>
      <?php endif; ?>
    
      <br>
  
        <input type="text"name="email" placeholder="Ingresa tu Usuario">
        <input type="password"name="password" placeholder="Ingresa tu Contraseña">
         <input type="submit"value="Entrar"> 
    </form>
    
    </section>
    </div>
    <div class="col-sm-1">
    
    
    </div>
    <div class="col-sm-5">
     
    
      <br>
      
    <div class="jumbotron">
  <h1 class="display-4">¡Que tal!</h1>
  <p class="lead">Para hacer uso de este sitio, ingresa los datos que se requieren en los recuadros</p>
  <hr class="my-4">
  <p>Si aún no te has registrado, ingresa mediente este enlace para darte de alta.</p>
  <a class="btn btn-primary btn-lg" href="loginregistro.php" role="button">Registro</a>






  
</div>
    
    



    
    </div>
  </div>
</div>





</body>
</html>