<?php
        session_start();
        $_SESSION['PHPSESSID'] = session_id();
        try{
                $email = $_POST['email'];
                $pass = $_POST['pass'];

                require_once("database.php");
                $Db = new Database();
                $items = $Db->getAccountData($email);

                $_SESSION['a'] = 'error';
                if(password_verify($pass, $items['pass'])){
                        $_SESSION['email'] = $email;
                        $_SESSION['icon'] = $items['icoPath'];
                        header("Location:/streaming/test/index.php");
                }
                else{
                        header("Location:/streaming/test/loginPage.php");
                }
        }catch(Exception $e)
        {
                echo "$e";
                
        }
?>
