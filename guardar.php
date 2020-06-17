<?php
//conectar con el servidor
   $conexion = mysqli_connect("localhost","Info","123456","mipagina");

//comprovar coneccion

if(mysqli_connect_errno()){
    echo="la conexion a la base de datos falló".mysqli_connect_error();
    
    
}else{
    echo="Conexion Exitosa";
    
}
    //recuperamos variables del formulario
   
/* $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $asunto=$_POST['asunto'];
    $mensaje=$_POST['mensaje'];
    
    //sentencias sql
    $sql="INSERT INTO datos VALUES('$nombre','$correo','$asunto','$mensaje')";
    
    
    $ejecutar=mysql_query($sql);
        //verificamos la ejecucion
    if(!$ejecutar){
        echo"Hubo un error";
    
    }else{
        echo"Datos guardados correctamente<br><a href='index.html'>Volver<a/>";
    
    }*/
?>
