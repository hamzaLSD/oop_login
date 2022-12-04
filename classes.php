<?php

class connect_db{

   public $host = "127.0.0.1";
   public $user = "root";
   public $pass = "";
   public $db_name = "login_test";  
   public $connect;
   
   public function __construct(){

        $this->connect = mysqli_connect($this->host, $this->user,$this->pass,$this->db_name);

            if($this->connect){
                echo'success';
            }
            else{
                echo'unsuccessful';
            }

   }
}

// $connect1 = new connect_db();

class registration extends connect_db{

    public function register($first_name,$password){
        $sql = "SELECT * FROM  `users` WHERE  username ='$first_name' ";
        $query = mysqli_query($this->connect,$sql);
        //
    if(mysqli_num_rows($query)>0){
        echo "<h1>this username is already taken </h1>";
//availability if false
    return false;

    }
    else{
        $sql = "INSERT INTO `users`( `username`, `password`) VALUES ('$first_name','$password')";
        $query = mysqli_query($this->connect,$sql);
      return true;

    }

    }



}




class login extends connect_db{


     public function login($first_name = NULL,$pass = NULL){

        $sql = "SELECT * FROM `users` WHERE username = '$first_name' AND  password  = '$pass' "; 
        $query = mysqli_query($this->connect,$sql);
        $data = mysqli_fetch_assoc($query);
      
        if($data['username']===$first_name && $data['password']===$pass){
            echo '<h1>logged in</h1>';
            // header("location:welcome.php");


        }
        else{
            echo '<h1>pass or user are wrong</h1>';
            // header("location:index.php");



        }

    

     }




} 

?>