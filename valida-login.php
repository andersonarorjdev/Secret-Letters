<?php

   session_start();
   print_r($_POST['email']);
   print_r($_POST['senha']);

    $usuarioapp = array('email'=>'usuarioteste@gmail.com','senha'=>'123456');

   foreach ($usuarioapp as $user){
        $user['email'];
        $user['senha'];
   }
   if ($user['email'] === $_POST['email'] && $user['senha'] === $_POST['senha']){
    $_SESSION['autenticado'] = "sim";
    header('location:home.php');
   }
   else{
       $_SESSION['autenticado'] = "nao";
       header('location:index.php?login=erro');
       var_dump($autentica);
   }
?>