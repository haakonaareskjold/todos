<?php


class QueryBuilder
{
    private Connection $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function CSRF()
    {
        if (isset($_POST['submit']) && ($_SESSION['token'] == $_POST['token'])) {
            $task = $_POST['task'];
            $sql = "INSERT INTO todos (tasks) VALUES (?)";
            $this->connection->make()->prepare($sql)->execute(array($task));
            header('location: /');
        } elseif (isset($_POST['submit']) && ($_SESSION['token'] !== $_POST['token'])) {
            die('wrong CSRF token');
        }
    }

    public function selectAll($table, $intoClass)
    {
        $statement = $this->connection->make()->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }
}
