<?php
session_start();

  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== 'sim'){
    header('location:index.php?login=erro');
  }
?>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="./images/logos/logoaba.png">
    <title>Secrets - Diario Pessoal</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <!-- Inicio Modal Dicas -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dicas para Você</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="./images/logos/fechar.png" width="40" height="40" alt=""></span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-4">
            <a href="https://www.mensagenscomamor.com/carta-para-crush">Carta para crush</a>
          </div>
          <div class="col-4">
            <a href="https://www.mensagenscomamor.com/declaracoes-para-o-crush">Declarações para crush</a>
          </div>
          <div class="col-4">
            <a href="https://pt.wikihow.com/Escrever-uma-Carta-para-o-Garoto-que-Voc%C3%AA-Gosta">Para o menino que você gosta</a>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <a href="https://www.pensador.com/texto_meu_amor_virtual/">Amor virtual</a>
          </div>
          <div class="col-4">
            <a href="https://www.mensagenscomamor.com/formas-declarar-para-alguem">Formas de se declarar</a>
          </div>
          <div class="col-4">
            <a href="https://pt.wikihow.com/Escrever-uma-Carta-Amig%C3%A1vel">Carta Amigável</a>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <a href="https://brasilamo.com.br/namoro-online/como-fazer-um-homem-se-apaixonar-por-voce-online/blogpost/308">Como conquistar</a>
          </div>
          <div class="col-4">
            <a href="https://www.buzzfeed.com/br/davirocha/15-mensagens-para-ir-de-zap-com-o-crush">Conquistar pelo Whats</a>
          </div>
          <div class="col-4">
            <a href="https://br.psicologia-online.com/como-falar-para-uma-pessoa-que-gosta-dela-179.html">Como se declarar</a>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <a href="https://www.donagiraffa.com/2014/01/cinco-dicas-de-como-conquistar-um-homem-pela-internet.html">Conquistando pela internet</a>
          </div>
          <div class="col-4">
            <a href="https://medium.com/@Machado.Matheus/como-fazer-um-homem-se-apaixonar-6b5c8b6e6769">Como fazer ele se apaixonar</a>
          </div>
          <div class="col-4">
            <a href="https://areademulher.r7.com/amor/como-fazer-alguem-se-apaixonar-por-voce/">Como fazer alguém se apaixonar por você</a>
          </div>
        </div>

      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>
<!--FIm Modal Dicas-->
  <body>
      <script src="main.js"></script>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="images/SecretLetterlogo.png" height="80" class="d-inline-block align-top" alt="">
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-3 d-flex justify-content-center">
                <a href="./backend/enviaemail.php"><img src="./images/logos/mandaremail.png" width="70" height="70"></a>
                <p>Mandar email</p>
                </div>
                <div class="col-3 d-flex justify-content-center">
                  <a href="#exampleModal"  data-toggle="modal" >
                    <img src="./images/logos/dicas.png" width="70" height="70">
                  </a>
                </div>
                <div class="col-3 d-flex justify-content-center">
                  <a href="index.php">
                    <img src="./images/logos/logout.png" width="70" height="70">
                  </a>
                </div>
                <div class="col-3 d-flex justify-content-center">
                  <a href="./secrets/app_lista_tarefas_public/index.php">
                    <img src="./images/logos/diario.png" width="70" height="70">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>