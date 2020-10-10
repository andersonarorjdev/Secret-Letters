<?php
    class Conexao {
     private $dns = "mysql:host=localhost;dbname=secretletters";
     private $usuario = "andersonarorjdev";
     private $senha = "slipknot#10J";

     public function conectar(){
            try{
               $conexao = new PDO($this->dns, $this->usuario, $this->senha);
               return $conexao;
            }
            catch(PDOException $e){
                echo '<p>'. $e->getMessage().'</p>';
             }
        }
    }

    $acessa = new Conexao();
    $acessa->conectar();
?>