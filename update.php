<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>University of Banaras</title>
    <link class="favicon" rel="icon" href="favicon-32x32.png">
    <link rel="stylesheet" href="file.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="header fixed">
      <center>
      <table>
      <tr>
        <td><img class="icon" src="icon-modified.png" alt=""></td>
      <td><h1 class="header1">बनारस विश्वविद्यालय</h1>
      <h1 class="header1">UNIVERSITY OF BANARAS</h1>
      <h3 class="header2">( A Central University )</h3></td>
      </tr>
      </table>
      </center>
    </div>
    <nav class="navbar fixed navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="">WELCOME !</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">ADMISSIONS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">FACILITIES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">ADMINISTRATION</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">EVENTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">GALLERY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">ALUMNI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">CONTACT US</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
            MORE
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="">Action</a></li>
            <li><a class="dropdown-item" href="">Another action</a></li>
            <li><a class="dropdown-item" href="">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="portal-heading fixed">
  <h3>ADMISSIONS</h3>
</div>
<div class="torsal fixed">
  <h1>Admissions 2022-23</h1>
  <div class="card text-center">
    <div class="card-body">
    <h5 class="card-title">UPDATE DETAILS</h5>
    <?php
// include("index_op.php");
// error_reporting(0);
$applicant_n=$_GET['applicant'];
$first_name1=$_GET['fn'];
$middle_name1=$_GET['mn'];
$last_name1=$_GET['ln'];
$dob1=$_GET['date'];
$address1=$_GET['add'];
$mail_id1=$_GET['email_id'];
$mobile_no1=$_GET['mobile_n'];
?>
    <form class="login_credentials" action="connect.php" method="post">
          <center>
            <table>
              <tr>
                <td>
                  <label class="applicant_no" for="applicant_no">APPLICANT NUMBER : </label>
                </td>
                <td>
                  <input type="text" name="applicant_no" value="<?php echo"$applicant_n" ?>"><br>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="first_name" for="first_name">FIRST NAME : </label>
                </td>
                <td>
                  <input type="text" name="first_name" value="<?php echo"$first_name1" ?>"><br>
                </td>
              </tr>
              <tr>
                <td><label class="middle_name" for="middle_name">MIDDLE NAME : </label></td>
                <td><input type="text" name="middle_name" value="<?php echo"$middle_name1"?>"><br></td>
              </tr>
              <tr>
                <td><label class="last_name" for="last_name">LAST NAME : </label></td>
                <td><input type="text" name="last_name" value="<?php echo"$last_name1"?>"><br></td>
              </tr>
              <tr>
                <td><label class="dob" for="dob">DATE OF BIRTH : </label></td>
                <td><input type="date" name="dob" value="<?php echo"$dob1"?>"><br></td>
              </tr>
              <tr>
                <td><label class="address" for="address">ADDRESS : </label></td>
                <td><input type="text" name="address" value="<?php echo"$address1"?>"><br></td>
              </tr>
              <tr>
                <td><label class="mail_id" for="mail_id">EMAIL ID : </label></td>
                <td><input type="email" name="mail_id" value="<?php echo"$mail_id1"?>"><br></td>
              </tr>
              <tr>
                <td><label class="mobile_no" for="mobile_no">MOBILE NO. : </label></td>
                <td><input type="number" name="mobile_no" value="<?php echo"$mobile_no1"?>"><br></td>
              </tr>
              <tr>
            </table>
          </center>
          <button type="submit" class="btn btn-dark" onclick="popup()" name="UPDATE">UPDATE</button>
        </form>

      </div>
</div>
</div>
<div class="contact">
  <h3 class="contact_heading">CONTACT US</h3><br><hr><br>
  <h6>UNIVERSITY OF BANARAS <i class="fas fa-university"></i></h6>
  <p>SENATE HOUSE CAMPUS, UNIVERSITY ROAD, OLD KATRA, BANARAS (KASHI), UTTAR PRADESH - 211002 0532-2461083</p>
  <h6>TELEPHONE <i class="fa-solid fa-phone"></i></h6> <p>022-021012</p>
</div>
<!-- Footer -->
<div class="footer">
  <h6><span>
    <a href="https://www.facebook.com/bhusocialmedia/"> <i class="fab fa-facebook fa-1.5x fabs"></i></a>
    <a href="https://twitter.com/bhupro"><i class="fab fa-twitter fa-1.5x fabs"></i></a>
    <a href="https://www.instagram.com/banaras.hindu.university/"><i class="fab fa-instagram fa-1.5x fabs"></i></a>
    <a href="https://www.youtube.com/@BHUSOCIALMEDIA"><i class="fab fa-youtube fa-1.5x fabs"></i></a>
    <a href="https://www.linkedin.com/in/bhu-social-media-4353b5229/?originalSubdomain=in"> <i class="fab fa-linkedin fa-1.5x fabs"></i></a> </span></h6>
  <br><br>
  <p><i class="far fa-copyright"></i>  Copyright University of Banaras.All rights reserved.</p>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </body>

</html>
<?php
if ($_GET['UPDATE']){
    $applicant_no=$_GET['applicant_no'];
    $first_name=$_GET['first_name'];
    $middle_name=$_GET['middle_name'];
    $last_name=$_GET['last_name'];
    $dob=$_GET['dob'];
    $address=$_GET['address'];
    $mail_id=$_GET['mail_id'];
    $mobile_no=$_GET['mobile_no'];
    $query="UPDATE signup SET applicant_no='$applicant_no',first_name='$first_name',middle_name='$middle_name',last_name='$last_name',dob='$dob',address='$address',
mail_id='$mail_id',
mobile_no='$mobile_no' WHERE applicant_no='$applicant_no' ";

$data=mysqli_query($conn,$query);
}
if($data){
    echo"<script type='text/javascript'>
    alert('Updated Successfully !!');
    </script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=index_op.php">
    <?PHP
}else{
    echo"Failed to update😶‍🌫️";
}?>