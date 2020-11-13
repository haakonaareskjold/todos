<?php


class Task
{
    private string $tasks;


    public function __construct()
    {
        $this->showTasks();
    }


    public function showTasks()
    {
            if (isset($this->tasks)) {
            echo "<ul>";
            echo "<li>{$this->tasks}</li>";
            echo "</ul>";
        }
    }
}