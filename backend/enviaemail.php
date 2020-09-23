<html>
	<head>
		<meta charset="utf-8" />
    	<title>Secret Letter</title>
		<link rel="shortcut icon" href="../images/logos/logoaba.png">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>

	<body>
		<div class="container">
			<div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="../images/SecretLetterlogo.png" alt="" width="" height="72">
				<p class="lead">Fale com o crush de forma anônima</p>
			</div>

      		<div class="row">
      			<div class="col-md-12">
  				
					<div class="card-body font-weight-bold">
						<form action="envia-dados.php" method="post">
							<div class="form-group">
								<label for="para">Para</label>
								<input name="para" type="text" class="form-control" id="para" placeholder="joao@dominio.com.br">
							</div>

							<div class="form-group">
								<label for="assunto">Assunto</label>
								<input name="assunto" type="text" class="form-control" id="assunto" placeholder="Assundo do e-mail">
							</div>

							<div class="form-group">
								<label for="mensagem">Mensagem</label>
								<textarea name="texto" class="form-control" id="mensagem"></textarea>
							</div>
							<div class="row d-flex justify-content-between">
								<a href="../home.php"><img src="../images/logos/voltar.png" height="40" alt=""></a>
								<button type="submit"><img src="../images/logos/enviar.webp" width="" height="40" alt="">Flertar</button>
							</div>
						</form>
					</div>
				</div>
      		</div>
      	</div>
	</body>
</html>