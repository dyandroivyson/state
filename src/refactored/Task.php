<?php

declare(strict_types=1);

include_once 'State/Idle.php';
include_once 'State/Status.php';

use State\Idle;
use State\Status;

class Task
{
    public function __construct(
        public readonly string $title,
        private Status $status = new Idle,
    ) {
    }

    public function getStatus(): void
    {
        $this->status->handle($this->title);
    }

    public function setStatus(Status $status): void
    {
        $this->status = $status;
    }
}