<?php
class QueryBuilder{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo=$pdo;
    }

    public function fetchAll($table){
        try{
            $statement = $this->pdo->prepare('SELECT * FROM '.$table);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
}