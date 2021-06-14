<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <title>Examen de Multiplicaciones</title>
    
    <link rel="stylesheet" href="css/examenmultiplicacion.css">
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
<br>



<div class="container">
  <div class="row">
    <div class="col-sm-3 border-primary">
     
     
    </div>
    <div class="col-sm-6">
     


<br>
<br>
<br>

<h1 class="text-center">Examen de Multiplicaciones</h1>

<form action="resultadomultiplicacion.php" method="post">


<div class="radio-toolbar text-center">

    <h1>7 x 2</h1>

    
   <input type="radio" name="ans"  value="ans1"id="1" ><label for="1">14</label>
   <input type="radio" name="ans"  value="ans2"id="2" ><label for="2">16</label>
   <input type="radio" name="ans"   value="ans3"id="3" ><label for="3">15</label>
   <input type="radio" name="ans"   value="ans4"id="4" ><label for="4">13</label>


  </div>


  <div class="radio-toolbar text-center">


  <h1>7 x 4</h1>
   <input type="radio" name="ans2" value="ans5"id="5" ><label for="5">28</label>
   <input type="radio" name="ans2" value="ans6"id="6" ><label for="6">27</label>
   <input type="radio" name="ans2" value="ans7" id="7" ><label for="7">26</label>
  <input type="radio" name="ans2" value="ans8" id="8" ><label for="8">29</label>

  </div>




  <div class="radio-toolbar text-center">


  <h1>7 x 7</h1>
  <input type="radio" name="ans3" value="ans9" id="9" ><label for="9">50</label>
  <input type="radio" name="ans3" value="ans10" id="10" ><label for="10">47</label>
 <input type="radio" name="ans3" value="ans11" id="11" ><label for="11">48</label>
   <input type="radio" name="ans3" value="ans12" id="12" ><label for="12">49</label>

  </div>



  <div class="radio-toolbar text-center">

  <h1>8 x 3</h1>
  <input type="radio" name="ans4" value="ans13" id="13" ><label for="13">25</label>
  <input type="radio" name="ans4" value="ans14" id="14" ><label for="14">23</label>
   <input type="radio" name="ans4" value="ans15" id="15" ><label for="15">24</label>
   <input type="radio" name="ans4" value="ans16" id="16" ><label for="16">26</label>


  </div>



  <div class="radio-toolbar text-center">

  
  <h1>8 x 5</h1>
   <input type="radio" name="ans5" value="ans17"id="17" ><label for="17">42</label>
   <input type="radio" name="ans5" value="ans18" id="18" ><label for="18">41</label>
   <input type="radio" name="ans5" value="ans19"  id="19" ><label for="19">40</label>
  <input type="radio" name="ans5" value="ans20" id="20" ><label for="20">43</label>

  </div>


  
  <div class="radio-toolbar text-center">


  <h1>8 x 7</h1>
   <input type="radio" name="ans6" value="ans21"id="21" ><label for="21">0</label>
   <input type="radio" name="ans6" value="ans22" id="22" ><label for="22">56</label>
   <input type="radio" name="ans6" value="ans23"  id="23" ><label for="23">5</label>
  <input type="radio" name="ans5" value="ans24" id="24" ><label for="24">6</label>

  </div>


  
  <div class="radio-toolbar text-center">


  <h1>8 x 9</h1>
   <input type="radio" name="ans7" value="ans25"id="25" ><label for="25">71</label>
   <input type="radio" name="ans7" value="ans26" id="26" ><label for="26">74</label>
   <input type="radio" name="ans7" value="ans27"  id="27" ><label for="27">73</label>
  <input type="radio" name="ans7" value="ans28" id="28" ><label for="28">72</label>

  </div>


  
  <div class="radio-toolbar text-center">


  <h1>9 x 4</h1>
   <input type="radio" name="ans8" value="ans29"id="29" ><label for="29">36</label>
   <input type="radio" name="ans8" value="ans30" id="30" ><label for="30">37</label>
   <input type="radio" name="ans8" value="ans31"  id="31" ><label for="31">35</label>
  <input type="radio" name="ans8" value="ans32" id="32" ><label for="31">38</label>

  </div>


  
  <div class="radio-toolbar text-center">


  <h1>9 x 6</h1>
   <input type="radio" name="ans9" value="ans33"id="33" ><label for="33">53</label>
   <input type="radio" name="ans9" value="ans34" id="34" ><label for="34">54</label>
   <input type="radio" name="ans9" value="ans35"  id="35" ><label for="35">55</label>
  <input type="radio" name="ans9" value="ans36" id="36" ><label for="36">56</label>

  </div>



  <div class="radio-toolbar text-center">

  <h1>9 x 9</h1>
   <input type="radio" name="ans10" value="ans37"id="37" ><label for="37">81</label>
   <input type="radio" name="ans10" value="ans38" id="38" ><label for="38">82</label>
   <input type="radio" name="ans10" value="ans39"  id="39" ><label for="39">80</label>
  <input type="radio" name="ans10" value="ans40" id="40" ><label for="40">83</label>

  </div>

<br>
  <br>
  <br>
  <div class="text-center">

  <input  type="submit" value="¡Listo!" /> </div>
</form>





    </div>
    <div class="col-sm-2">
     
    
    </div>
    <div class="col-sm-1">
     
    
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