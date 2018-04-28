<?php  
       //$servername = "localhost";  
       $username = "root";  
       $password = "";  
       $dbname = "innervesignup";
       $conn =  new mysqli('localhost' , $username , $password, $dbname);

       $Email=filter_input(INPUT_POST,'Email');
       $regularity=filter_input(INPUT_POST,'regularity');

       if (!$conn) {
            die("Connection failed: " . $conn->connect_error);
        }
       else{
           $sql="INSERT INTO signup(Email,regularity) values('$Email','$regularity')";
       }
?>   