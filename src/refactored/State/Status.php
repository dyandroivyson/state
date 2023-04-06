<?php

declare(strict_types=1);

namespace State;

interface Status
{
    public function handle(string $title): void;
}