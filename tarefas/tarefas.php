<?php session_start(); ?>

<?php 
    if(isset($_GET['nome']) && $_GET['nome'] != ''){
        $tarefa = [];
        $tarefa['nome'] = $_GET['nome'];
    
        if(isset($_GET['data']))
        {
            $tarefa['data'] = $_GET['data'];
        } else {
            $tarefa['data'] = '';
        }
    
        
        if(isset($_GET['prioridade']))
        {
            $tarefa['prioridade'] = $_GET['prioridade'];
        } else {
            $tarefa['prioridade'] = '';
        }
        
        if(isset($_GET['status']))
        {
            $tarefa['status'] = $_GET['status'];
        } else {
            $tarefa['status'] = '';
        }
    
        $_SESSION['lista_tarefas'][] = $tarefa;        
        }
        if(isset($_SESSION['lista_tarefas'])){
            $lista_tarefas = $_SESSION['lista_tarefas'];
        } else {
            $lista_tarefas = [];
        }

        include 'template.php';
?>
