<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Gerenciador de Tarefas PHP</title>
</head>
<body>
    <h1>Gerenciador de Tarefas</h1>
    <form method="GET">
        <fieldset>
            <legend>Nova Tarefa</legend>
                <label>
                    Tarefa:
                    <input type='text' name='nome' placeholder='nome'>
                </label>
                <label>
                    Data:
                    <input type='date' name='data'>
                </label>
                <label>
                    Prioridade:
                    <input type='text' name='prioridade' placeholder='Prioridade'>
                </label>
                <label>
                    Status
                    <input type='text' name='status' placeholder='Status'>
                </label>
                <input type='submit' name='Gravar'>
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
        <td><?php echo $tarefa['data']; ?></td>
        <td><?php echo $tarefa['prioridade']; ?></td>
        <td><?php echo $tarefa['status']; ?></td>
    </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>