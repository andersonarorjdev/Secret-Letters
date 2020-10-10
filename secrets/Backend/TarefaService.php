<?php

    //As 4 operacoes de CRUD
    //C - CREATE
    //R - READ
    //U - UPDATE
    //D - DELETE
    class TarefaService{

        private $conexao;
        private $tarefa;

        public function __construct(Conexao $conexaopam, Tarefa $tarefapam){
            $this->conexao = $conexaopam->conectar();
            $this->tarefa = $tarefapam;
        }


       public function Inserir(){
            $querry = 'insert into tb_tarefas(tarefa) values(:tarefa)';
            //stmt = STATEMENT
            $stmt = $this->conexao->prepare($querry);
            $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
            $stmt->execute();
       }

       public function recuperar(){
            $querry = '
            select 
                t.id, 
                s.status, 
                t.tarefa 
            from 
                tb_tarefas as t
                left join tb_status as s on (t.id_status = s.id)
            
            ';
            $stmt = $this->conexao->prepare($querry);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
       }

       public function remover(){
            $querry = 'delete from tb_tarefas where id = :id';

            $stmt = $this->conexao->prepare($querry);
            $stmt->bindValue(':id', $this->tarefa->__get('id'));
            $stmt->execute();
       }

    //    public function atualizar(){
    //       $querry = 'update tb_tarefas set id_status = ? where id = ? ';
    //       $stmt = $this->conexao->prepare($querry);
    //       $stmt = bindValue(1, $this->tarefa->__get('id_status'));
    //       $stmt = bindValue(2, $this->tarefa->__get('id'));
    //       return $stmt->execute();

       //}

    }
?>