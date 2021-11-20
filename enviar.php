<?php
    $destinatario = "maty.britez7@gmail.com";

    $nombre = $_POST["nombre"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    $email = $_POST["email"];
   

    $header = "Enviado desde Insumos agropecuarios e industriales";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    
    echo "<script>alert("Correo enviado exitosamente!")</script>";
    echo "<script>setTimeOut(\"location.href='index.html'\", 1000)</script>";
?>