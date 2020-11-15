<?php


class Connection
{


    public function __construct()
    {
        $this->make()
            ->prepare(
            "CREATE TABLE IF NOT EXISTS todos (id integer NOT NULL UNIQUE PRIMARY KEY  AUTOINCREMENT , tasks TEXT NOT NULL)")
            ->execute();
    }

    public function make()
    {
        try {
            return new PDO('sqlite:database.db');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}