<?php

use State\Deploy;
use State\Doing;
use State\Done;
use State\Idle;
use State\Testing;
use State\Validation;

include_once 'Task.php';
include_once 'State/Deploy.php';
include_once 'State/Doing.php';
include_once 'State/Done.php';
include_once 'State/Idle.php';
include_once 'State/Testing.php';
include_once 'State/Validation.php';

$task = new Task('Criar funcionalidade xpto');
$task->setStatus(new Done);
$task->getStatus();