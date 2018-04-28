<?php  
       //$servername = "localhost";  
       $username = "root";  
       $password = "";  
       $dbname = "innervesignup";
       $conn =  new mysqli('localhost' , $username , $password, $dbname);

       $Name=filter_input(INPUT_POST,'Name');
       $Program=filter_input(INPUT_POST,'Program');
       $Amount=filter_input(INPUT_POST,'Amount');
       $Age=filter_input(INPUT_POST,'Age');
       $Gender=filter_input(INPUT_POST,'Gender');
       $Mobile=filter_input(INPUT_POST,'Mobile');
       $Email=filter_input(INPUT_POST,'Email');
       $Adr=filter_input(INPUT_POST,'Adr');
       $Mode=filter_input(INPUT_POST,'Mode');
       $Cname=filter_input(INPUT_POST,'Cname');
       $Exp=filter_input(INPUT_POST,'Exp');
       $Cnum=filter_input(INPUT_POST,'Cnum');
       $cvv=filter_input(INPUT_POST,'cvv');

       /*if (isset($_GET['Program'])) {
        $id = $_GET['Program'];
       
        $query1 = mysql_query("select Amount from amount where Program=$Program", $conn);
        while ($Amount= mysql_fetch_array($query1)) {
            echo $Amount['Amount']; 
        }*/

       if (!$conn) {
            die("Connection failed: " . $conn->connect_error);
        }
       else{
           $sql="INSERT INTO enroll(Name, Program, Amount, Age, Gender, Mobile, Email, Adr, Mode, Cname, Exp, Cnum, cvv) VALUES('$Name','$Program', '$Amount', '$Age', '$Gender','$Mobile', '$Email', '$Adr', '$Mode', '$Cname', '$Exp', '$Cnum', '$cvv')";           
                    
           if($conn->query($sql)){
               echo "Enrolled!";
           }
           else{
               echo "Error: ".$sql."<br>".$conn->error;
           }
           $conn->close();
       }
?>   