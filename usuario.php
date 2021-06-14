
<?php 

session_start();

require'database.php';








if( isset($_SESSION['user_id'])){
    $records=$conn->prepare('SELECT id, email, nombre,grupoprof, password FROM users WHERE id=:id');
    $consulta = "SELECT * FROM students";
    $records->bindParam(':id',$_SESSION['user_id']);
    $records->execute();
    $results=$records->fetch(PDO::FETCH_ASSOC);
    $user=null;
    if(count($results)>0){
        $user=$results;
    }

   


}





?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
<title> Bienvenido </title>
    <title>Entrar</title>
    <link href="css/usuario.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script src="https://kit.fontawesome.com/3ce5ba0242.js" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link href="https://fonts.googleapis.com/css2?family=Convergence&display=swap" rel="stylesheet">





</head>
<body>





  <div class="container-fluid px-0">
    <nav class="navbar navbar-expand-md navbar-light bg-white p-0"> <a class="navbar-brand mr-4" href="#"> <a class="logo"><img src="uaeh.png"></a><strong></strong></a> <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inicio  <span class="fas fa-apple-alt"></span></a> 
                    <div class="dropdown-menu" id="dropdown-menu1" aria-labelledby="navbarDropdown1">
                        <div class="container">
                            <div class="row">
                              <div class="col-md-1"></div>  
                                <div class="col-md-5">
                                    <div class="row d-flex tab">
                                        <div class="fa-icon text-center"> <span class="fas fa-book-reader"></span> </div>
                                        <div class="d-flex flex-column"> <a class="dropdown-item" href="sobrenosotros.html">
                                                <h6 class="mb-0">Presentación</h6> <small class="text-muted">Información </small>
                                            </a> </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row d-flex tab">
                                        <div class="fa-icon text-center"> <span class="fas fa-home"></span> </div>
                                        <div class="d-flex flex-column"> <a class="dropdown-item" href="index.html">
                                                <h6 class="mb-0">Inicio</h6> <small class="text-muted">Página Principal</small>
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                           
                          
                        </div>
                    </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Activades Lúdicas  <span class="fas fa-gamepad"></span></a>
                  <div class="dropdown-menu" id="dropdown-menu3" aria-labelledby="navbarDropdown3">
                      <div class="container">
                          <div class="row">
                            <div class="col-md-1"></div>  
                              <div class="col-lg-5">
                                  <div class="row d-flex tab">
                                      <div class="fa-icon text-center"> <span class="fas fa-plus"></span> </div>
                                      <div class="d-flex flex-column"> <a class="dropdown-item" href="menusumas.html">
                                              <h6 class="mb-0">Sumas</h6> <small class="text-muted">Juegos y Actividades</small>
                                          </a> </div>
                                  </div>
                              </div>
                              <div class="col-lg-5">
                                  <div class="row d-flex tab">
                                      <div class="fa-icon text-center"> <span class="fas fa-minus"></span> </div>
                                      <div class="d-flex flex-column"> <a class="dropdown-item" href="menurestas.html">
                                              <h6 class="mb-0">Restas</h6> <small class="text-muted">Juegos y Actividades</small>
                                          </a> </div>
                                  </div>
                              </div>
                            </div>
                              <div class="row">
                                <div class="col-lg-1"></div>
                              <div class="col-lg-5">
                                <div class="row d-flex tab">
                                    <div class="fa-icon text-center"> <span class="fas fa-times"></span> </div>
                                    <div class="d-flex flex-column"> <a class="dropdown-item" href="menumulti.html">
                                            <h6 class="mb-0">Multiplicaciones</h6> <small class="text-muted">Juegos y Actividades</small>
                                        </a> </div>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
              </li>
                <li class="nav-item"> <a class="nav-link" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Instrumento de evaluación  <span class="fas fa-book-open"></span></a>
                  <div class="dropdown-menu" id="dropdown-menu2" aria-labelledby="navbarDropdown2">
                      <div class="container">
                          <div class="row">
                            <div class="col-md-1"></div>  
                              <div class="col-md-5">
                                  <div class="row d-flex tab">
                                      <div class="fa-icon text-center"> <span class="fas fa-plus"></span> </div>
                                      <div class="d-flex flex-column"> <a class="dropdown-item" href="menuexamenes.html">
                                              <h6 class="mb-0">Evaluación Sumas</h6> <small class="text-muted">Exámenes de Conocimiento </small>
                                          </a> </div>
                                  </div>
                              </div>
                              
                              <div class="col-md-5">
                                  <div class="row d-flex tab">
                                      <div class="fa-icon text-center"> <span class="fas fa-times"></span> </div>
                                      <div class="d-flex flex-column"> <a class="dropdown-item" href="menuexamenes.html">
                                              <h6 class="mb-0">Evaluación Multiplicación</h6> <small class="text-muted">Exámenes de Conocimiento</small>
                                          </a> </div>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-1"></div>  
                          
                              <div class="col-md-8">
                                  <div class="row d-flex tab">
                                      <div class="fa-icon text-center"> <span class="fas fa-minus"></span> </div>
                                      <div class="d-flex flex-column"> <a class="dropdown-item" href="menuexamenes.html">
                                              <h6 class="mb-0">Evaluación Restas</h6> <small class="text-muted">Exámenes de Conocimiento</small>
                                          </a> </div>
                                  </div>
                              </div>
                            
                          </div>
                      </div>
                  </div>
              </li>
             
                <li class="nav-item"> <a class="nav-link" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Iniciar Sesión  <span class="fas fa-chalkboard-teacher"></span></a>
                  <div class="dropdown-menu" id="dropdown-menu4" aria-labelledby="navbarDropdown4">
                      <div class="container">
                          <div class="row">
                            <div class="col-lg-1"></div>
                              <div class="col-lg-5">
                                  <div class="row d-flex tab">
                                      <div class="fa-icon text-center"> <span class="fas fa-user-circle"></span> </div>
                                      <div class="d-flex flex-column"> <a class="dropdown-item" href="loginingresar.php">
                                              <h6 class="mb-0">Ingresar</h6> <small class="text-muted">Ingresar a tu cuenta de Usuario</small>
                                          </a> </div>
                                  </div>
                              </div>
                              <div class="col-lg-1"></div>
                              <div class="col-lg-5">
                                  <div class="row d-flex tab">
                                      <div class="fa-icon text-center"> <span class="fas fa-user-plus"></span> </div>
                                      <div class="d-flex flex-column"> <a class="dropdown-item" href="loginregistro.php">
                                              <h6 class="mb-0">Registrarse</h6> <small class="text-muted">Darse de alta en la plataforma</small>
                                          </a> </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </li>
            </ul>
        </div>
    </nav>
</div>

<br>


















































<section class="texto"> 


<br>
<br>
<br>











<div class="container">
  <div class="row">
   
    <div class="col-sm-8">
      





    <div class="alert text-light text-center  alert-info" role="alert">
        <br>



 <?php if(!empty($user)): ?>
    <a class="logo"><img src="us2.png"></a>
    <br>
    <h1><i class="fas fa-angle-right"></i>   Nombre: </h1> 
    <h2> <i class="fas fa-user-friends"></i>    <?= $user['nombre'];  ?> </h2>
    <h1> <i class="fas fa-angle-right"></i>  Grupo:  </h1>
    <h2><i class="fas fa-chalkboard-teacher"></i>    <?= $user['grupoprof'];  ?> </h2>
    <h1><i class="fas fa-angle-right"></i>  Correo Electronico:  </h1>
    <h2><i class="fas fa-envelope-square"></i>    <?= $user['email'];  ?> </h2>
  <br>
  <br>
  
<a href="salir.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cerrar Sesión</a>
 

<br>

 </div>





</div>
<div class="col-sm-3">
<div class="card" style="width: 18rem;">
  <img src="imagenes/in.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Datos del Sitio Web</h5>
    <p class="card-text">Para saber mas información sobre este proyecto, ya click en el boton.</p>
    <a href="sobrenosotros.html" class="btn btn-primary">Entrar</a>
  </div>
</div>
 </div>
<div class="col-sm-7">

<br>
  












<?php       
$resultado = mysqli_query($link,$consulta);


 


$user['id'];   
$user['nombre'];   
$user['password'];   
$user['email']; 
$hola=$user['grupoprof'];

if ($resultado) {
   
    while ($row = $resultado->fetch_array()) {
    
    
 
    
    $id = $row['id'];
    $nombre = $row['nombrestudent'];
    $rc = $row['respuestascorrectas'];
    $ric = $row['respuestasincorrectas'];
    $examen=$row['examen'];
    $grupo=$row['grupo'];
     

if($grupo==$hola){

    ?>




    
    <div>
    <div class="alert  bg-light" role="alert">








    
        <br>
<center><a class="logo"><img src="us.png"></a></center>
        <h2> <i class="fas fa-angle-right"></i>  Nombre Estudiante:</h2> <h1> <i class="fas fa-user-friends"></i>  <?php echo $nombre; ?></h1>
        <h4> <i class="fas fa-angle-right"></i>  Grupo: </h4> <h3> <i class="fas fa-chalkboard-teacher"></i>  <?php echo $grupo; ?></h3>
        <div>
            
           
                <h4><i class="fas fa-angle-right"></i>   Materia Examen: </h4> <h3><i class="far fa-sticky-note"></i>   <?php echo  $examen ?></h3>
                <h4><i class="fas fa-angle-right"></i>   Respuestas Correctas: </h4>  <h3><i class="far fa-check-square"></i>    <?php echo  $rc ?></h3>
                <h4><i class="fas fa-angle-right"></i>   Respuestas Incorrectas: </h4><h3><i class="far fa-times-circle"></i>    <?php echo  $ric ?> </h3>
                <br>
                 <?php  echo "<a type='button' class='btn btn-danger' href=\"?id=".$row["id"]."\">Borrrar</a>"; ?>
      
           

            
 </div>



  </div>
    
      
           

      







       
    </div> 
    <?php
}



    }
}




?>

<?php
 
 
 
 $tabla = "students";

 if($_GET)
 {
    $queryDelete = "DELETE FROM $tabla WHERE id = ".$_GET['id'].";";

    $resultDelete = mysqli_query($link, $queryDelete); 

    if($resultDelete)
    {
       echo "<strong>El registro se ha eliminado con exito</strong>.<br>";
    }
    else
    {
       echo "Hubo un problema borrando el registro.";
    }
 }
 
     
 
      ?>


<?php endif; ?>




























</div>

  </div>
  </div>




  <br>
<br>
<br>





</section>






<br>
<br>
<br>














<footer>
  <div class="footer" id="footer">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <h4 class="dya"> DYA (Diversión y Aprendizaje) </h4>
                  <br>
                  <a class="logos"><img src="uaeh.png"></a>
              </div>
              <div class="col-lg-3 col-sm-2 col-xs-3">
                  <h3> Contacto     <span class="fas fa-user-plus"></span></h3>
                  <ul>
                      <li><a class="email"href="#"> ra361018@ueah.edu.mx</a></li>
                      <br/>
                      
                  </ul>
              </div>
              <div class="col-lg-3 col-sm-2 col-xs-3">
                  <ul>
                      <li> <h5> <a href="sobrenosotros.html" style="margin-top: 5em"> Sobre el Proyecto    <span class="fas fa-book-reader"></span></a> <h5></li>
                      <li> <h5><a href="menuexamenes.html"> Examenes    <i class="fas fa-book"></i> </a> <h5></li>
                     <li> <h5><a href="loginregistro.php"> Cuenta   <span class="fas fa-user-circle"></span></a></span> <h5></li>
                  </ul>
              </div>
             
          <!--/.row--> 
      </div>
      <!--/.container--> 
  </div>
  <!--/.footer-->
                        
  <div class="footer-bottom">
      <div class="container">
        
          <p class="pull-left copyright"> Universidad Autónoma del Estado de Hidalgo </p>
     
      </div>
  </div>
  <!--/.footer-bottom--> 

</footer>


</body>
</html>