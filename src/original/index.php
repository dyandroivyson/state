<?php

include_once 'Task.php';

$task = new Task('Criar funcionalidade xpto');
$task->setStatus('done');

if ($task->getStatus() === 'idle') {
    echo "Tarefa <b>{$task->title}</b> aguardando desenvolvimento.";
} else if ($task->getStatus() === 'doing') {
    echo "Tarefa <b>{$task->title}</b> em andamento.";
} else if ($task->getStatus() === 'testing') {
    echo "Tarefa <b>{$task->title}</b> em fase de testes.";
} else if ($task->getStatus() === 'validation') {
    echo "Tarefa <b>{$task->title}</b> sendo valiada.";
} else if ($task->getStatus() === 'deploy') {
    echo "Tarefa <b>{$task->title}</b> pronta para deploy.";
} else if ($task->getStatus() === 'done') {
    echo "Tarefa <b>{$task->title}</b> finalizada.";
}
