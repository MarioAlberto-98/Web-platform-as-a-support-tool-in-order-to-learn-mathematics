<?php

$message='';




require 'database.php';
if(!empty($_POST['nombrestudent'])&& !empty($_POST['respuestascorrectas']) &&  !empty($_POST['respuestasincorrectas']) && !empty($_POST['grupo'])&& !empty($_POST['examen'])){
$sql="INSERT INTO students (nombrestudent, respuestascorrectas, respuestasincorrectas,grupo, examen ) VALUES (:nombrestudent, :respuestascorrectas, :respuestasincorrectas, :grupo, :examen)";
$stmt=$conn->prepare($sql);
$stmt->bindParam(':nombrestudent',$_POST['nombrestudent']);

$stmt->bindParam(':respuestascorrectas',$_POST['respuestascorrectas']);
$stmt->bindParam(':respuestasincorrectas',$_POST['respuestasincorrectas']);
$stmt->bindParam(':grupo',$_POST['grupo']);
$stmt->bindParam(':examen',$_POST['examen']);
if($stmt->execute()){
  $message='¡Listo!';
}else{
$message='Revisa bien los datos que se requieren';

}


}





?> 

























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="resutadosdeexamenes.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script src="https://kit.fontawesome.com/3ce5ba0242.js" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>




   



    <link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">




   
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
<br>





<div class="container">
  <div class="row">
    <div class="col-sm-1">
     
     
    </div>
    <div class="col-sm-4">
      <br>
      <br>
      <br>
     
      <br>
     
      <center> <h1>Resultados de la Prueba Multiplicaciones</h1>  </center>
   
   <br>
   <br>
   
   
         <?php 
   


   error_reporting(0);
   $answer = $_POST['ans']; 
   $answer2 = $_POST['ans2'];  
   $answer3 = $_POST['ans3'];  
   $answer4 = $_POST['ans4']; 
   $answer5= $_POST['ans5'];  
   $answer6= $_POST['ans6'];  
   $answer7= $_POST['ans7'];
   $answer8= $_POST['ans8'];  
   $answer9= $_POST['ans9'];  
   $answer10= $_POST['ans10'];  





   $n=0;
   $b=0;



   if($answer == null){
    echo '<center><h3>Pregunta 1: No contestada</h3></center><br>';

  
  }else{ 





   if ($answer == "ans1") {          
       echo '<center><h3>Pregunta 1: Correcta</h3></center><br>';
       $n=$n+1;     
   }
   else {
       echo '<center><h3>Pregunta 1: Incorrecta</h3></center><br>';
       $b=$b+1;
   }       
   
  }






  if($answer2 == null){
    echo '<center><h3>Pregunta 2: No contestada</h3></center><br>';

  
  }else{ 
   
   if ($answer2 == "ans5") {          
       echo '<center><h3>Pregunta 2: Correcta</h3></center><br>'; 
       $n=$n+1;
   }
   else {
       echo '<center><h3>Pregunta 2: Incorrecta</h3></center><br>';
       $b=$b+1;
   }   
   
  }
   







  if($answer3 == null){
    echo '<center><h3>Pregunta 3: No contestada</h3></center><br>';

  
  }else{ 



   if ($answer3 == "ans12") {          
       echo '<center><h3>Pregunta 3: Correcta</h3></center><br>'; 
       $n=$n+1;
   }
   else {
       echo '<center><h3>Pregunta 3: Incorrecta</h3></center><br>';
       $b=$b+1;
   }   
   
  }









  if($answer4 == null){
    echo '<center><h3>Pregunta 4: No contestada</h3></center><br>';

  
  }else{ 

   
   if ($answer4 == "ans15") {          
       echo '<center><h3>Pregunta 4:  Correcta</h3></center><br>'; 
       $n=$n+1;
   }
   else {
       echo '<center><h3>Pregunta 4:  Incorrecta</h3></center><br>';
       $b=$b+1;
   }   
  }
   













  if($answer5 == null){
    echo '<center><h3>Pregunta 5: No contestada</h3></center><br>';

  
  }else{ 


   
   if ($answer5 == "ans19") {          
       echo '<center><h3>Pregunta 5: Correcta</h3></center><br>'; 
       $n=$n+1;
   }
   else {
       echo '<center><h3>Pregunta 5:  Incorrecta</h3></center><br>';
       $b=$b+1;
   }   
   
  }





  
  if($answer6 == null){
    echo '<center><h3>Pregunta 6: No contestada</h3></center><br>';

  
  }else{ 


   
   if ($answer6 == "ans22") {          
       echo '<center><h3>Pregunta 6: Correcta</h3></center><br>'; 
       $n=$n+1;
   }
   else {
       echo '<center><h3>Pregunta 6:  Incorrecta</h3></center><br>';
       $b=$b+1;
   }   
   
  }




  
  if($answer7 == null){
    echo '<center><h3>Pregunta 7: No contestada</h3></center><br>';

  
  }else{ 


   
   if ($answer7 == "ans28") {          
       echo '<center><h3>Pregunta 7: Correcta</h3></center><br>'; 
       $n=$n+1;
   }
   else {
       echo '<center><h3>Pregunta 7:  Incorrecta</h3></center><br>';
       $b=$b+1;
   }   
   
  }



  if($answer8 == null){
    echo '<center><h3>Pregunta 8: No contestada</h3></center><br>';

  
  }else{ 


   
   if ($answer8 == "ans29") {          
       echo '<center><h3>Pregunta 8: Correcta</h3></center><br>'; 
       $n=$n+1;
   }
   else {
       echo '<center><h3>Pregunta 8:  Incorrecta</h3></center><br>';
       $b=$b+1;
   }   
   
  }





  
  if($answer9 == null){
    echo '<center><h3>Pregunta 9: No contestada</h3></center><br>';

  
  }else{ 


   
   if ($answer9 == "ans34") {          
       echo '<center><h3>Pregunta 9: Correcta</h3></center><br>'; 
       $n=$n+1;
   }
   else {
       echo '<center><h3>Pregunta 9:  Incorrecta</h3></center><br>';
       $b=$b+1;
   }   
   
  }





  
  if($answer10 == null){
    echo '<center><h3>Pregunta 10: No contestada</h3></center><br>';

  
  }else{ 


   
   if ($answer10 == "ans37") {          
       echo '<center><h3>Pregunta 10: Correcta</h3></center><br>'; 
       $n=$n+1;
   }
   else {
       echo '<center><h3>Pregunta 10:  Incorrecta</h3></center><br>';
       $b=$b+1;
   }   
   
  }




   echo '<br><h5>El numero de aciertos correctos es de:  </h5> ',$n;

   

   echo '<h5>El numero de aciertos Incorrectos  es de:  </h5> ',$b;






  ?>














</div>


<div class="col-sm-2">
  



   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   



















    </div>
    <div class="col-sm-3">

<br>
<br>
<br>
<br>

     <form action"resultadomultiplicacion.php" method="post">
 

  <?php if(!empty($message)):?>
  ><p><?=$message ?> </p>
  <?php endif; ?>

<center><h1>Ingresa tus datos</h1>
  <br>
  

  
  <input type="text"name="nombrestudent" placeholder="Ingresa tu nombre"> 
  <input type="number"name="respuestascorrectas" placeholder="Correctas">
  <input type="number"name="respuestasincorrectas" placeholder="Incorrectas">
  <input type="text"name="examen" placeholder="Materia">
  <input type="number"name="grupo" placeholder="Grupo">
  

<input type="submit" value="Guardar">

    


   
  </form>
   
    
    </div>
   
  </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
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