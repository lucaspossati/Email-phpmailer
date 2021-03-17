<!DOCTYPE html>
<html>
<head>
	<title>Enviar Email</title>
</head>
<body>
	
	<h1 class="agile-inner-title">Contatos</h1>
	<div class="col-sm-8 w3layouts-agileits">
		<form class="my-form" method="post" action="sendEmail.php" name="Fale conosco"> 						
			<input type="hidden" name="subject" value="Fale conosco"> 
			<input type="hidden" name="from" value="Contato do site X">
			<div class="form-group">
				<input type="text" name="first_name" class="form-control" id="first_name" placeholder="Nome" required="required">
			</div>
			<div class="form-group">
				<input type="text" name="company" class="form-control" id="company" placeholder="Empresa" required="required">
			</div>
			<div class="form-group">
				<input type="text" name="phone" class="form-control" id="phone" placeholder="Telefone" required="required">
			</div>
			<div class="form-group">
				<input type="email" name="email_address" class="form-control" id="email_address" placeholder="Email" required="required">
			</div>
			<div class="form-group">
				<textarea class="form-control" name="comments" id="comments" rows="7" cols="25" style="resize:none;" required="required" placeholder="Mensagem"></textarea>
			</div>
			
			<button type="submit" name="Enviar" class="btn btn-default btn-block">ENVIAR MENSAGEM</button>
		</form>
	</div>
					

</body>
</html>

