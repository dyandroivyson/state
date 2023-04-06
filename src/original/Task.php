<?php

declare(strict_types=1);

class Task
{
    public function __construct(
        public readonly string $title,
        private string $status = 'idle',
    ) {
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}