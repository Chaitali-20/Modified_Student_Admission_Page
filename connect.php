<?php
error_reporting(0);
$server_name="localhost";
$username="root";
$password="";
$database_name="register_cand";
$conn=mysqli_connect ($server_name,$username,$password,$database_name);

$app_no=$_POST['applicant_no'];
$f_name=$_POST['first_name'];
$m_name=$_POST['middle_name'];
$l_name=$_POST['last_name'];
$date_b=$_POST['dob'];
$add=$_POST['address'];
$mail=$_POST['mail_id'];
$mob_no=$_POST['mobile_no'];
$u_name1=$_POST['user_name1'];
$pass=$_POST['password1'];

mysqli_query($conn,"INSERT INTO signup(applicant_no,first_name,middle_name,last_name,dob,address,mail_id,mobile_no,user_name1,password1)
                        VALUES ('$app_no','$f_name','$m_name','$l_name','$date_b','$add','$mail','$mob_no','$u_name1','$pass')");
// signup--table name;
//register_cand--database name;

include('index.html');

 ?>
