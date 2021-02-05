
<html>
  <head>
    <meta charset="utf-8" />
    <title>MySecrets - Chame a atenção dele de forma anônima</title>
    <link rel="shortcut icon" href="./images/logos/logoaba.png">
    <link rel="stylesheet" href="./styles/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>
    <nav class="barradenavegacao" class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="images/SecretLetterlogo.png" width="" height="50px" class="d-inline-block align-top" alt="">
      </a>
    </nav>

    <div class="fundo" class="container">   <!--Inicia container --> 
      <div class="caixa-login" class="row"><!-- Inicio da Linha-->
          <div class="instrucao"><!-- Inicio caixa de instrucao-->
            <div class="caixa-instrucao">
              <p id="texto-instrucao">Digite suas credenciais para efetuar login</p>
            </div>
          </div><!-- Fim da caixa de instrucao -->
          
        <div class="card-login">
          <div class="cardlogin" class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida-login.php" method="post">
                <div class="form-group">
                  <input class="campo" name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input class="campo" name="senha" type="password" class="form-control" placeholder="Senha">
                  <?php
                    if (isset($_GET['login']) && $_GET['login'] == 'erro'){
                  
                  ?>
                  <div class="text-danger">Usuario ou senha invalidos</div>
                  <?php 
                    }else{
                      header('location:home.php');
                    }
                  ?>
                </div>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div> <!-- Fim da linha-->
    </div><!--Finaliza container -->
  </body>
</html>