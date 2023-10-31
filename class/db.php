<?php
class Db
{
    protected $pdo;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=StreamingWebApp;charaset=utf8';
        $user = 'root';
        $password = '1127';
        try
        {
            $this->pdo = new PDO($dsn, $user, $password);
        }catch(Exception $e)
        {
            echo 'Error:'.$e->getMessage();
            die();
        }
    }
    protected function query($sql,$array_params)
    {
        $stmt = $this->pdo->prepare($sql);
        //$stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->execute($array_params);
        return $stmt;
    }
    protected function exec($sql,$array_params)
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($array_params);
        return $stmt;
    }
}
?>