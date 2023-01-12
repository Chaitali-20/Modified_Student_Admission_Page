<?php
include("index_op.php");
$applicant_n=$_GET['applicant'];
$server_name="localhost";
$username="root";
$password="";
$database_name="register_cand";
$conn=mysqli_connect ($server_name,$username,$password,$database_name);

$query=  mysqli_query($conn,"DELETE FROM `signup` WHERE applicant_no='$applicant_n' ");
if ($query) {  
    echo" <script type='text/JavaScript'>
          alert('Data Deleted successfully !!');
          </script>";
          // or die();
          exit();
     
}
else{  
     echo "Error: ".mysqli_error($conn);  
}
// signup--table name;
//register_cand--database name;

 ?>
<!-- $run = mysqli_query($conn,$query);  
if ($run) {  
     echo "Data Deleted successfully !!";  
}else{  
     echo "Error: ".mysqli_error($conn);  
}   -->
