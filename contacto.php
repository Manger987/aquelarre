<?php

/* ---------------------------
Note: most servers require that one of the emails (sender or receiver) to be an email hosted by same server,
so make sure your email is one hosted on same server.
--------------------------- */

// Taking variables from flash
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$occation = $_REQUEST['occation'];
$date = $_REQUEST['date'];
$message = $_REQUEST['message'];
$contentmsg = "Name: ".$name."\nEmail: ".$email."\nOcacion: ".$occation."\nFecha: ".$date."\nMessage: \n".$message;

//Variables for notifying
$subjectrecep = "GRACIAS POR TU MENSAJE!";
$contentrecep = "FORMULARIO DE CONTACTO FUNCIONANDO,SU MENSAJE A SIDO ENVIADO MUCHAS GRACIAS";



// Mail setup
$to="contacto@aquelarreeventos.cl"; //Put your email here
$subject="".$subjectmsg."";

$headers .= "From: ".$email."\n";


//Notify that the message was sent
 $headers2 .= "From: ".$to."\n";


mail($to,$subject,$contentmsg,$headers);
mail($email,$subjectrecep,$contentrecep,$headers2);

/*print_r($_REQUEST);
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$occation = $_REQUEST['occation'];
$date = $_REQUEST['date'];
$message = $_REQUEST['message'];
//print_r($name);

$mail = "tu_correo@tucorreo.com";
//Titulo
$titulo = "PRUEBA DE TITULO";
//cabecera
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
//dirección del remitente
$headers .= "From: Geeky Theory < $email >\r\n";
//Enviamos el mensaje a tu_dirección_email
$bool = mail($mail,$titulo,$mail,$headers);
if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}*/

?>
