<?php


class conexion{


private $servidor="localhost";
private $usuario="root";
private $contrasenia="";
private $conexion;
public function __construct(){ //New conexion de portafolio es la instancia 
try{
        $this->conexion= new PDO("mysql:host=$this->servidor;dbname=album",$this->usuario,$this->contrasenia);
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        return "falla de conexion".$e;
    }
}
public function ejecutar($sql){ // Insertar/Delete/Actualizar
    $this->conexion->exec($sql);
    return $this->conexion->lastInsertId(); //Retorna el ID que se modificó
}


//Este metodo es para consultr información en la base de datos y que nos traiga registros
public function consultar($sql){

        //Ejecutar la instruccion, prepare toma la instruccion sql y almacenarla en la variable
         $sentencia=$this->conexion->prepare($sql);
         //Ejecutar la sentencia
         $sentencia->execute();
         //La retornamos, se almacena y se ejecuta, pero la tenemos de DEVOLVER
         //FetchAll retorna todos los registros que consultemos con la sentencia SQL
         return $sentencia->fetchAll();
}

}



?>





<!DOCTYPE html>
<html lag="es">


    <head>  
        <!-----------------------------------------------HEAD INICIO---------------------------------------->
        <!--Metadatos-->
        <meta charset="utf-8">
        <meta name="author" content="Luis Valdez">
        <meta name="description" content="Portafolio de desarrollo web de Luis Valdez">
        <meta name="keywords" content="HTML,CSS,JavaScript,React">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--Esto nos permite que se ajuste el tamaño del navegador-->
        <!--Titulo-->
        <title>Luis Valdez | Desarrollo Web Front-End</title>
        <!--Favicon-->
        <link rel="icon" type="image/x-icon" href="imagenes/Sphere.png">
         <!--Bootstrap-->   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!--Bootstrap Icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        <!--CSS-->
        <link href="Header.css" rel="stylesheet">
        <!--Font Awesome-->
        <script src="https://kit.fontawesome.com/3dc9e2bbef.js" crossorigin="anonymous"></script>
        <!--Fuentes de Google-->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Open+Sans:wght@300&family=Roboto+Condensed:wght@100&family=Rubik+Dirt&family=Share+Tech+Mono&display=swap" rel="stylesheet">
        
              
     </head>
        <!-----------------------------------------------HEAD FINAL---------------------------------------->
    

        <!-----------------------------------------------BODY INICIO---------------------------------------->
        <body>
            <header>
                <!-----------------------------------------------HEADER INICIO---------------------------------------->
                 <nav class="navbar navbar-expand-md navbar-light">
                      <div class="contenedor-de-elementos container-fluid">  
                                
                            <div class="navbar-nav d-flex justify-content-center align-items-center">
                                <!--Logo  SPHERE--> 
                                    <div class=" navbar-nav d-flex justify-content-center align-items-center">
                                        <img class="sphere" src="../imagenes/Sphere nuevo.png" alt="">
                                    </div>  
                                    <div class="contenedor-logo-mas-letra container">                        
                                         <button data-text="Awesome" class="button" >
                                            <span class="actual-text">&nbsp;SPHERE&nbsp;</span>
                                            <span class="hover-text" aria-hidden="true">&nbsp;SPHERE&nbsp;</span>
                                        </button>  
                                    </div>
                            </div>
                            <ul class="navbar-nav d-flex justify-content-center align-items-center">
                               <!--Imagen Dirección de la empresa-->
                               <li class="nav-item">
                                    <img  src="../imagenes/direccion.png" width="40px" alt="">
                               </li>
                               <!--Texto Dirección de la empresa-->
                               <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#sobre-mi">
                                    Dirección
                                    </a>
                                </li>
                                <!--Imagen Teléfono de la empresa-->
                                <li class="nav-item">
                                    <img src="../imagenes/telefono.png" width="40px" alt="">
                                </li>
                                <!--Texto Teléfono de la empresa-->
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#sobre-mi">Contacto</a>
                                </li>
                                <!--Accesar a usuario-->
                                <li class="nav-item">
                                    <img src="../imagenes/usuario.png" width="40px" alt="">
                                </li>
                                <!--Texto accesar a usuario-->
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#sobre-mi">Accesar</a>
                                </li>                    
                           </ul>                
                      </div>
                  </nav>


                        

                <div class="container__menu"> 
                      <div class="menu">
                            <input type="checkbox" id="check__menu">
                            <label id="#label__check" for="check__menu">
                                <i class="fas fa-bars icon__menu" id="icon__menu"></i>
                            </label>
                        <nav class="nav-menu-negro">
                            <ul>
                                <li> <a href="#" id="selected"></i>
                                </i>
                                </a></li>
                                <li> <a href="#">Servicios</a>

                                   <!--<ul>
                                        <li> <a href="#">Servicios</a></li>
                                        <li> <a href="#">Servicios</a></li>
                                        <li> <a href="#">Servicios</a></li>
                                        <li> <a href="#">Servicios</a></li>
                                    </ul>--> 
                                                          
                                </li>
                                <li> <a href="#">Contacto</a></li>
                                <li> <a href="#">Nosotros</a></li>
                                <li> <a href="#">Blog</a></li>
                                <li> <a href="#">Desarrollo</a></li>
                            </ul>
                        </nav>
                    </div>

                 </div>   



                    <!--Barra negra de navegación-->
                <!-----------------------------------------------HEADER FINAL---------------------------------------->

            </header>
            

     
             

            <section>
                <!--Sección del video-->
                <div class="video-sphere navbar navbar-expand-md" id="video-sp">
                   <video width="100%" autoplay loop muted  src="../IMAGENES/Copia de VIDEO SPHERE.mp4" preload autobuffer></video>
                </div>
            </section>

    <!--Carrousel-->
    <section class="contenedor-carrousel container d-flex">
<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img id="img"  src="../IMAGENES/servicios2.svg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img id="img"  src="../IMAGENES/servicios1.svg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">

      </div>
    </div>
    <div class="carousel-item">
      <img id="img" src="../IMAGENES/servicios3.svg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>


<!--Servicios-->
<section class="service-section">

<div class="container">
    <div class="row">

        <div class="header-section">

            <h2 class="title">Servicios <span>SPHERE</span> </h2>
        </div>
        <p class="description">
        Acceso a módulos:
        </p>

    </div>

        <div class="row">
            <div class="service-column">
                <div class="single-service">
                    <div class="content">
                        <span class="icon">
                        <i class="fa-solid fa-user"></i>
                        </span>
                        <h3 class="main-title">EMPLEADOS</h3>
                            <p class="description">
                            En esta sección el empleado podrá accesar a su usuario laboral, donde podrá visualizar su kardex, historial,
                            desempeño, evaluaciones entre otras cosas.

                            </p>
                            <button type="button" class="btn-blue btn btn-primary">Accesar</button>

                    </div>
                    <span class="circle-before"></span>

                </div>

            </div>
            <div class="service-column">
                <div class="single-service">
                    <div class="content">
                        <span class="icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <h3 class="main-title">RECLUTAMIENTO</h3>
                            <p class="description">
                            En esta sección el empleado podrá accesar a su usuario laboral, donde podrá visualizar su kardex, historial,
                            desempeño, evaluaciones entre otras cosas.
                             
                            </p>
                            <button type="button" class="btn-red btn btn-danger">Accesar</button>

                    </div>
                    <span class="circle-before"></span>

                </div>

            </div>
            <div class="service-column">
                <div class="single-service">
                    <div class="content">
                        <span class="icon">
                        <i class="fa-solid fa-dumbbell"></i>
                        </span>
                        <h3 class="main-title">CAPACITACIÓN</h3>
                            <p class="description">
                            En esta sección el empleado podrá accesar a su usuario laboral, donde podrá visualizar su kardex, historial,
                            desempeño, evaluaciones entre otras cosas.
                            </p>
                            <button type="button" class="btn-purple btn btn-danger">Accesar</button>

                    </div>
                    <span class="circle-before"></span>

                </div>

            </div>
            <div class="service-column">
                <div class="single-service">
                    <div class="content">
                        <span class="icon">
                        <i class="fa-solid fa-star"></i>
                        </span>
                        <h3 class="main-title">DESEMPEÑO</h3>
                            <p class="description">
                            En esta sección el empleado podrá accesar a su usuario laboral, donde podrá visualizar su kardex, historial,
                            desempeño, evaluaciones entre otras cosas.
                            </p>
                            <button type="button" class="btn-blue btn btn-primary">Accesar</button>

                    </div>
                    <span class="circle-before"></span>

                </div>

            </div>
            <div class="service-column">
                <div class="single-service">
                    <div class="content">
                        <span class="icon">
                        <i class="fa-solid fa-gift"></i>
                        </span>
                        <h3 class="main-title">COMPENSACIONES</h3>
                            <p class="description">
                            En esta sección el empleado podrá accesar a su usuario laboral, donde podrá visualizar su kardex, historial,
                            desempeño, evaluaciones entre otras cosas.
                            </p>
                            <button type="button" class="btn-red btn btn-danger">Accesar</button>

                    </div>
                    <span class="circle-before"></span>

                </div>

            </div>
            <div class="service-column">
                <div class="single-service">
                    <div class="content">
                        <span class="icon">
                        <i class="fa-solid fa-brain"></i>
                        </span>
                        <h3 class="main-title">NOM035</h3>
                            <p class="description">
                            En esta sección el empleado podrá accesar a su usuario laboral, donde podrá visualizar su kardex, historial,
                            desempeño, evaluaciones entre otras cosas.
                            </p>
                            <button type="button" class="btn-purple btn btn-danger">Accesar</button>

                    </div>
                    <span class="circle-before"></span>

                </div>

            </div>

            <div class="service-column">
                <div class="single-service">
                    <div class="content">
                        <span class="icon">
                        <i class="fa-solid fa-gavel"></i>
                        </span>
                        <h3 class="main-title">LEGAL</h3>
                            <p class="description">
                            En esta sección el empleado podrá accesar a su usuario laboral, donde podrá visualizar su kardex, historial,
                            desempeño, evaluaciones entre otras cosas.
                            </p>
                            <button type="button" class="btn-blue btn btn-primary">Accesar</button>

                    </div>
                    <span class="circle-before"></span>

                </div>

            </div>
            <div class="service-column">
                <div class="single-service">
                    <div class="content">
                        <span class="icon">
                        <i class="fa-solid fa-book"></i>
                        </span>
                        <h3 class="main-title">POLÍTICAS</h3>
                            <p class="description">
                            En esta sección el empleado podrá accesar a su usuario laboral, donde podrá visualizar su kardex, historial,
                            desempeño, evaluaciones entre otras cosas.
                            </p>
                            <button type="button" class="btn-red btn btn-danger">Accesar</button>

                    </div>
                    <span class="circle-before"></span>

                </div>

            </div>
            <div class="service-column">
                <div class="single-service">
                    <div class="content">
                        <span class="icon">
                        <i class="fa-solid fa-pen"></i>
                        </span>
                        <h3 class="main-title">PRENOMINA</h3>
                            <p class="description">
                            En esta sección el empleado podrá accesar a su usuario laboral, donde podrá visualizar su kardex, historial,
                            desempeño, evaluaciones entre otras cosas.
                            </p>
                            <button type="button" class="btn-purple btn btn-danger">Accesar</button>

                    </div>
                    <span class="circle-before"></span>

                </div>

            </div>



        </div>

</div>



</section>


   



      
        <script src="SPHERE.js" type="text/javascript"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
        <!-----------------------------------------------BODY FINAL---------------------------------------->





</html>