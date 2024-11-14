<?php session_start(); ?>

<?php 
include "conexao.php";
include "auxiliares.php";


    if(isset($_POST['nome']) && $_POST['nome'] != ''){
        $tarefa = [];
        $tarefa['nome'] = $_POST['nome'];
    
        if(isset($_POST['descricao']))
        {
            $tarefa['descricao'] = $_POST['descricao'];
        } else {
            $tarefa['descricao'] = '';
        }
    
        
        if(isset($_POST['prioridade']))
        {
            $tarefa['prioridade'] = converte_data_para_banco($_POST['prioridade']);
        } else {
            $tarefa['prioridade'] = '';
        }
        
        if(isset($_POST['prazo']))
        {
            $tarefa['prazo'] = $_POST['prazo'];
        } else {
            $tarefa['prazo'] = '';
        }

        if(isset($_POST['concluida']))
        {
            $tarefa['concluida'] = 1;
        } else {
            $tarefa['concluida'] = 0;
        }
    
        gravar_tarefa($connection, $tarefa);     
    } 
        
    $lista_tarefas = busca_tarefas($connection, $tarefa);
    
    include 'template.php';
?>
