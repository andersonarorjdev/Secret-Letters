<?php
    require '../Backend/TarefaService.php';
    require '../Backend/Tarefas-model.php';
    require '../Backend/Conexao.php';

    /*if(isset($_GET['acao'])){
        $_GET['acao'];
    }else{
        $acao;
    }*/

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
        //if($_GET['acao'] == 'inserir'){
        if($acao == 'inserir'){
        $tarefa = new Tarefa;
        $tarefa->__set('tarefa', $_POST['tarefa']);
        $conexao = new Conexao(); 
        $InstanciaTarefaService = new TarefaService($conexao, $tarefa);
        $InstanciaTarefaService->inserir();
            header('Location:nova_tarefa.php?inclusao=1');
        }
        elseif($acao == 'recuperar'){
          $tarefa = new Tarefa;
          $conexao = new Conexao;

          $InstanciaTarefaService = new TarefaService($conexao, $tarefa);
        $tarefas = $InstanciaTarefaService->recuperar();
          
        }
        elseif($acao == 'remover'){
            $tarefa = new Tarefa();
            $tarefa->__set('id', $_GET['id']);
            $conexao = new Conexao();
            $InstanciaTarefaService = new TarefaService($conexao, $tarefa);
            $InstanciaTarefaService->remover();
                header('Location:todas_tarefas.php');
        }
        // elseif($acao == 'atualizar'){
        //     $tarefa = new Tarefa();
        //     $tarefa->__set('id', $_GET['id']);
        //     $tarefa->__set('id_status', 2);

        //     $conexao = new Conexao();
        //     $InstanciaTarefaService = new TarefaService($conexao, $tarefa);
        //     $InstanciaTarefaService->atualizar();
        // }
?>