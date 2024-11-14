<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Gerenciador de Tarefas PHP</title>
</head>
<body>
    <h1>Gerenciador de Tarefas</h1>
    <form method="POST">
        <fieldset>
            <legend>Nova Tarefa</legend>
                <label>
                    Tarefa:
                    <input type='text' name='nome' placeholder='nome'>
                </label>
                <label>
                    Descrição (Opcional):
                    <textarea name="descricao"></textarea>
                </label>
                <label>
                    Prazo (Opcional):
                    <input type='text' name='prazo'>
                </label>
                
                <fieldset>
                
                <legend>Prioridade:</legend>
                
                <label>
                
                <input type="radio" name="prioridade" value="1" checked /> Baixa
                
                        <input type="radio" name="prioridade" value="2"/> Média
                
                        <input type="radio" name="prioridade" value="3"/> Alta
                
                    </label>
                
                </fieldset>
                
                <label>
                    Tarefa Concluida:
                    <input type='checkbox' name='concluida' value="1" />
                </label>
                <input type='submit' name='Cadastrar'>
        </fieldset>
    </form>

<table border="1">
    <tr>
        <th>Tarefas</th>
        <th>Data</th>
        <th>Prioridade</th>
        <th>Status</th>
    </tr>
    <?php foreach ($lista_tarefas as $tarefa) : ?>
    <tr>
        <td><?php echo $tarefa['nome']; ?></td>
        <td><?php echo $tarefa['descricao']; ?></td>
        <td><?php echo converte_data_para_tela($tarefa['prazo']); ?></td>
        <td><?php echo converte_prioridade($tarefa['prioridade']); ?></td>
        <td><?php echo converte_concluida($tarefa['concluida']); ?></td>
    </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>