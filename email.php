<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['nome']);
$sobrenome = addslashes($_POST['sobrenome']);
$cpf = addslashes($_POST['cpf']);
$endereco = addslashes($_POST['endereco']);
$cidade = addslashes($_POST['cidade']);
$estado = addslashes($_POST['estado']);
$telefone = addslashes ($_POST['telefone']);
$foto = addslashes($_POST['foto']);
$email = addslashes($_POST['email']);



$email = 'marcoshmarcarini@hotmail.com';
$list_id = 'fd8e892738';
$api_key = '7f74bfb470a433764b59fcc2ccb0bb3d-us18';

$data_center = substr($api_key,strpos($api_key,'-')+1);

$url = 'https://'. $data_center .'.api.mailchimp.com/3.0/lists/'. $list_id .'/members';

/*Abaixo a a coleta de dados de usuário*/



$json = json_encode([
    'email_address' => $email,
    'nome'          => $nome,
    'sobrenome'     => $sobrenome,
    'cpf'           => $cpf,
    'endereco'      => $endereco,
    'cidade'        => $cidade,
    'estado'        => $estado,
    'status'        => 'subscribed', //pass 'subscribed' or 'pending'
]);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $api_key);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
$result = curl_exec($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
echo $status_code;

}

?>


























































<?php






/*

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

*/
?>