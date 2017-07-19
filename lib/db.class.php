<?php

class  DB
{
    protected $connection;

    public function __construct($dsn, $user, $password)
    {
        try {
            $this->connection = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo "could not connect to db" . $e->getMessage();
        }
    }

    public function query($sql)
    {
        if (!$this->connection) {
            return false;
        }

        $result = $this->connection->prepare($sql);

        if (!$result) {
            print_r($this->connection->errorInfo());
        }

        if (is_bool($result)) {

            return $result;
        }

        $data = array();
        $result->execute();

        while ($row = $result->fetchAll(PDO::FETCH_ASSOC)) {
            $data = $row;
        }

        return $data;
    }

    public function escape($sql)
    {
       $normolize = htmlspecialchars($sql,ENT_QUOTES);
       return $this->connection->quote($normolize);

    }


}