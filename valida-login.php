<?php

   session_start();
   print_r($_POST['email']);
   print_r($_POST['senha']);

    $usuarioapp = array(
        array('email'=>"anderson@gmail.com", 'senha'=>'12345'),
       // array('email'=>'usuarioteste@gmail.com','senha'=>'123456'),
    );

   foreach ($usuarioapp as $user){
        $user['email'];
        $user['senha'];
   }
    $autentica = 0;
   if ($user['email'] === $_POST['email'] && $user['senha'] === $_POST['senha']){
    $autentica = true;
   }
   else{
       $autentica = false;
   }

   if ($autentica == true) {
       $_SESSION['autenticado'] = "sim";
       header('location:home.php');
   }
   else {
       $_SESSION['autenticado'] = "nao";
       header('location:index.php?login=erro');
       var_dump($autentica);
   }
?>