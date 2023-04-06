<?php

declare(strict_types=1);

namespace State;

include_once 'Status.php';

class Idle implements Status
{
    public function handle(string $title): void
    {
        echo "Tarefa <b>{$title}</b> aguardando desenvolvimento.";
    }
}