<?php

$query = require 'src/bootstrap.php';

$query = new QueryBuilder( new Connection());
$query->selectAll('todos', 'Task');
$query->CSRF();

$result = new task();
$result->showTasks();
