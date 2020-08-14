<?php 
if(isset($_GET['email']) && !empty($_GET['email'])){

$nome = $_GET['name'];
$email = $_GET['email'];
$subject = $_GET['assunto'];
$mensagem = $_GET['message'];

$to= "rogeritos260298@gmail.com";
$subject = $subject."contato site WallPlug";
$body = "Nome: $nome"."\r\n".
        "Email: $email"."\r\n".
        "Mensagem: $mensagem";
$header = "From:rogerio@wallplug.com.br"."\r\n"."Reply-to:".$email."\r\n"."x=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

   require_once 'contact.php';

}else{
    require_once 'contact.php';
}
}
?>