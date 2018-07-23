<?php 

    

    class User extends Connection {
         private $conn;
        function __construct(){
            $this->conn = $this->connect();
        }

        function verify($userId, $password){
            $query = mysqli_query($this->conn, "SELECT * FROM users WHERE id = '$id' and password = '$password'");
            if($query){
                $row = mysqli_fetch_array($query);
                if($row['id'] == $userId && $row['password'] == '$password') {
                    return True;
                }
                throw new Exception("The user ID and password combination doesn't match any records.");
            }
            throw new Exception("The user ID and password combination doesn't match any records.");
        }
    }

    $user = new User;
    try{
        $user->verify("1", "1234");
    }
    catch(Exception $e) {
        echo $e->getMessage;
        unset($e);
    }






?>