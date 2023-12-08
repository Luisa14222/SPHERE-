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
                                        <img class="sphere" src="imagenes/Sphere nuevo.png" alt="">
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
                                    <img src="imagenes/direccion.png" width="25px" alt="">
                               </li>
                               <!--Texto Dirección de la empresa-->
                               <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#sobre-mi">
                                    Dirección
                                    </a>
                                </li>
                                <!--Imagen Teléfono de la empresa-->
                                <li class="nav-item">
                                    <img src="imagenes/telefono.png" width="25px" alt="">
                                </li>
                                <!--Texto Teléfono de la empresa-->
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#sobre-mi">Contacto</a>
                                </li>
                                <!--Accesar a usuario-->
                                <li class="nav-item">
                                    <img src="imagenes/usuario.png" width="25px" alt="">
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

     
             








      
        <script src="SPHERE.js" type="text/javascript"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
        <!-----------------------------------------------BODY FINAL---------------------------------------->





</html>