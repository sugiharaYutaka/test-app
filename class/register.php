<?php
    session_start();
    require_once("database.php");
    $Db = new Database();
    try
    {
        $usrName = $_POST['name'];
        $email = $_POST['email'];

        #password hashing
        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

        #there wasnt same email
        if($Db->checkEmail($email))
        {
            $Db->insertUserData($email,$pass);
            $_SESSION['email'] = $email;
            
            header("Location:/streaming/test/index.php");
        }
        else
        {
            header("Location:/streaming/test/registerPage.php");
        }
    }catch(Exception $e)
    {
        echo "$e";
    }

?>