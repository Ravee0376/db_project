<?php
require_once "dbconnection.php";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['userType'])){
        if($_POST['userType']=='student'){
            if(isset($username)&&isset($password)){
                $sql="SELECT * FROM `studentlogindata` WHERE `Username`='$username'and `Password`='$password'";
            $searchresult = mysqli_query($conn,$sql);
            $count = mysqli_num_rows($searchresult);
            if($count>0){
    
           header("Location:dashboard.php");}
           else{
            header("Location: login.php?error=*Invalid Username/Password");
           }
            

}


        }
        else if($_POST['userType']=='faculty'){
            
        }

    }else{
        header("Location: login.php?error=*Select Specific Type");
    }
    
   
    }

 


?>