<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'vendor/phpmailer/phpmailer/src/Exception.php';
	require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
	require 'vendor/phpmailer/phpmailer/src/SMTP.php';

		
	$first_name = utf8_encode($_POST['first_name']);
	$company = $_POST['company'];
	$phone = $_POST['phone'];
	$email_address = $_POST['email_address'];
	$comments = $_POST['comments'];
	$subject = $_POST['subject'];
	$from = $_POST['from'];
	

	$mail = new PHPMailer();

	//Define que será usado SMTP
	$mail->IsSMTP();


	$mail->SMTDebug = 0;
	
	//Enviar e-mail em HTML
	$mail->isHTML(true);
	
	//Aceitar carasteres especiais
	$mail->Charset = 'UTF-8';
	
	//Configurações
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	
	//nome do servidor
	$mail->Host = 'smtp.gmail.com';
	//Porta de saida de e-mail 
	$mail->Port = 465;
	
	//Dados do e-mail de saida - autenticação
	$mail->Username = "digiteseugmail@gmail.com";
	$mail->Password = "digitesuasenha";
	
	//E-mail remetente (deve ser o mesmo de quem fez a autenticação)
	$mail->setFrom ('digiteseugmail@gmail.com', utf8_decode($from));
	
	//Destinatario 
	$mail->AddAddress('emaildestinario@hotmail.com');

	//Assunto da mensagem
	$mail->Subject = $subject;

	//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
	
	
	//$mail->AltBody = 'conteudo do E-mail em texto';

	$conteudo_email = utf8_decode("

	  <h2>Você recebeu uma mensagem de $first_name:</h2>
      <h3>Empresa: </h3><h5>$company<h5>
      <h3>Telefone: </h3><h5>$phone<h5>
      <h3>Endereço de E-mail: </h3><h5>$email_address<h5>
      <h3>Mensagem: </h3><h5>$comments<h5>

  	");

	$mail->Body = $conteudo_email;


	// ----- Criar um novo arquivo html para personalizar o e-mail -------
	//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

	//$mail->addAttachment('images/phpmailer_mini.png');

	if($mail->Send()){
	echo "E-mail enviado com sucesso";
	}else{
		echo "Erro no envio do e-mail: " . $mail->ErrorInfo;
	}

	//or

	//if ($mail->Send()) {

		//header( 'Location: '.'thanks.html' );
	//}

	// If we passed all previous tests, send the email then redirect to the thank you page.
	//else {
		//header( 'Location: ' .'error_message.html' );	
	//}	
		
?>



