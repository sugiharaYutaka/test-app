<?php
require_once('db.php');

class Database extends Db
{
    public function getAccountData($email)
    {
        $sql = 'select * from account_info where email = ?';
        $stmt = $this->query($sql,[$email]);
        $data = $stmt->fetch();
        return $data;
    }
    public function getAccountDataFromID($ID)
    {
        $sql = 'select * from account_info where ID = ?';
        $stmt = $this->query($sql,[$ID]);
        $data = $stmt->fetch();
        return $data;
    }
    public function checkEmail($email)//checking for duplicate email
    {
        $sql = 'select ID from account_info where email = ?';
        $stmt = $this->query($sql,[$email]);
        $data = $stmt->fetch();
        
        if($data == '')
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function insertUserData($email, $password)
    {
        $sql = 'insert into account_info(email,pass) values (?,?)';
        $stmt = $this->query($sql,[$email,$password]);
        $stmt->fetch();
    }
    public function updateUserName($email, $name)
    {
        $sql = 'update account_info set userName = ? where email = ?';
        $stmt = $this->query($sql,[$name,$email]);
        $stmt->fetch();
    }
}
?>