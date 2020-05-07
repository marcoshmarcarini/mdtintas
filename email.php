<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$Vai$nome = addslashes($_POST['nome']);
$sobrenome = addslashes($_POST['sobrenome']);
$cpf = addslashes($_POST['cpf']);
$endereco = addslashes($_POST['endereco']);
$cidade = addslashes($_POST['cidade']);
$estado = addslashes($_POST['estado']);
$email = addslashes($_POST['email']);

}
$to = "marcoshmarcarini@hotmail.com";
$subject = "Contato - Pintores";
$body = "Nome: ".$nome." ".$sobrenome."\r\n".
        "CPF: ".$cpf."\r\n".
        "Endereço: ".$endereco."\r\n".
        "Cidade: ".$cidade."\r\n".
        "Estado: ".$estado."\r\n".
        "E-mail: ".$email;

$header = "From:mutano09@gmail.com"."\r\n"."Reply-To: ".$email."\r\n"."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");

}else{
    echo("O Email não pode ser enviado.");
}


?>