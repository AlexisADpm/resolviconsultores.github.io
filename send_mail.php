<?php

// Seleccion de atributos

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);


require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


try { 
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    $plan = ($_POST["servicio"])?$_POST["servicio"]:"No selecciono plan";
    $tel = $_POST["tel"];
    $nombre_empresa = $_POST["nombre_empresa"];
    
    $mail = new PHPMailer(true);
    
    $mail -> isSMTP();
    $mail -> SMTPAuth = true;
    
    $mail -> Host = "mail.resolviconsultores.cl";
    $mail -> SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail -> Port = 25; 
    
    
    $mail -> Username = "contacto@resolviconsultores.cl";
    $mail -> Password = ",N(;he}ui6[k";
    
    
    $mail -> setFrom($email,$nombre);
    $mail -> addAddress("contacto@resolviconsultores.cl","Contacto");
    
    $mail -> Subject = "Solcitud de servicios";
    $mail -> Body = "Informacion de contacto\n Nombre de cliente: ".$nombre.
    "\n Email del contacto: ".$email."\n Telefono: ".$tel."\n Nombre empresa: ".$nombre_empresa.
    "\n Plan Seleccionado: ".$plan."\n Mensaje: ".$mensaje;
    
    $mail -> send();

    header ("Location: home.html");
    
} 
catch (Exception $e) {
      
};
header ("Location: home.html");
