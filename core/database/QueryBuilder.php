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

    public function query($dataArr,$table){
        $getDataKey=array_keys($dataArr);
        $cols=implode(',',$getDataKey);
        $QuestionMark="";
        foreach($getDataKey as $key){
            $QuestionMark.="?,";
        };
        $QuestionMark=rtrim($QuestionMark,",");
        $sql="insert into $table ($cols) values ($QuestionMark)";
        $statement=$this->pdo->prepare($sql);

        $getArrayValue=array_values($dataArr);
        $statement->execute($getArrayValue);
    }

    public function edit($id,$table){
        $statement = $this->pdo->prepare("SELECT * FROM $table WHERE id=?");
        $statement->execute([$id]);
        $result= $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function update($dataArr,$table){
        // dd($dataArr['name']);

        $data = [
            'name' => $dataArr['name'],
            'id' => $dataArr['id'],
        ];
        $sql = "UPDATE $table SET name=? WHERE id=?";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute($data);
    }
}