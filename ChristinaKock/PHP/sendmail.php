<?php

// ENVIAR EMAILS AL GESTOR DEL SITIO Y AL USUARIO QUE HA ENVIADO EL FORM _____________________


// DEFINICION VARIABLES
$to = "girobcn@gmail.com";
$from = $_POST["email"];
$nombre = $_POST["nombre"];
$message = $_POST["message"];
$subject1 = "Formulario de contacto";
$subject2 = "Christina Kock Soprano";

// TEXTO PARA EL GESTOR DEL SITIO WEB
$mailBody_01 =
    "<html>
    
    <head></head>
    
    <body>
    
    <p>
    
    Has recibido un formulario de contacto por parte de $nombre. <br><br>
    
    Este es su mensaje: <br><br>
    
    $message <br><br>
    
    y esto es su correo electrónico es $from
    
    </p>
    
    </body>
    
    </html>";

// TEXTO PARA EL USUARIO QUE HA ENVIADO EL FORM
$mailBody_02 =
    "<html>
    
    <head></head>
    
    <body>
    
    <p>
    
    Hola $nombre, <br><br>
    
    Gracias por tu mensaje. <br>
    
    Te contestaré cuanto antes posible.<br><br>
    
    Saludos Cordiales<br>
    Christina Kock
   
    </p>
    
    </body>
    
    </html>";


// CONFIGURACION content-type PARA ENBIO DE email HTML 
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($to,$subject1,$mailBody_01,$headers);
mail($from,$subject2,$mailBody_02,$headers);

//header("Location:https://cetgsproject.000webhostapp.com/confirmacion.html")
         
?>