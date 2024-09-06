<?php 
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'ekko';


$connection = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);



function busca_tarefas($connection, $tarefas)
{
    $sql = "SELECT * FROM tarefas";
    $resultado = mysqli_query($connection, $sql);

    $tarefas = array();

    while ($tarefa = mysqli_fetch_assoc($resultado)){
        $tarefas[] = $tarefa;
    }
    
    return $tarefas;
}

function gravar_tarefa($connection, $tarefa){
    $sql = "INSERT INTO tarefas (
    
    nome,descricao,prazo,prioridade,concluida
    ) 
    
    VALUES (
    '{$tarefa['nome']}',
    '{$tarefa['descricao']}',
    '{$tarefa['prioridade']}',
    '{$tarefa['prazo']}',
    '{$tarefa['concluida']}',
    );";

    mysqli_query($connection,$sql);
}
//if($connection->connect_errno)
//{
//    echo 'Error';
//}
//else
//{
//    echo 'Conectado ao Banco';
//}
?>