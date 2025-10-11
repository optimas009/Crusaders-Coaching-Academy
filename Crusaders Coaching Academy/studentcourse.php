
<?php //ongoin//
include ('connect.php');
$id_query = "SELECT ID,Name,level FROM student WHERE user_name = '" . $_SESSION["username"] . "'";
$id_result = mysqli_query($db, $id_query);
if ($id_result) {
    $row = mysqli_fetch_assoc($id_result);
    $id = $row["ID"];
    $name=$row["Name"];
    $level=$row["level"];
}
$query= "select s.sub_code from routine r,schedule s where r.S_ID='$id' and r.Sub_code=s.Sub_code and r.section=s.section";
$query1= "select  sub_code,level from grades g,student s where g.S_id=s.ID and grade is not Null and S_id=$id order by grade asc";
$result=mysqli_query($db,$query);
$result1=mysqli_query($db,$query1);




$feeO=3000;
$feeA=5000;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a04710cb7f.js" crossorigin="anonymous"></script>
</head>
<body style="height: 1500px;" >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="4.logo.jpg" alt="Image" width="130" height="100"> 
            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNa" aria-controls="navbarNa" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNa">
        <ul class="navbar-nav">
                <li class="nav-item">
                   <p1 style="color:white">&nbsp; <?php echo $name; ?>'s profile &nbsp;</p1><!-- ekhane user name thakbe -->
                </li>


            </ul>
            <ul class="navbar-nav mx-auto"> <!-- Center align the links -->
                <li class="nav-item ">
                    <a class="nav-link" href="studentview.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="studentcourse.php">course information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="studentschedule.php">Class Schedule</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="studentenrol.php">course enrolment</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="studentresult.php">result</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="studentsetting.php">Settings</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Logout</a>
                </li>
            </ul>
        </div>

        </nav>

       


<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Course Information</h1>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr class="bg-dark text-white">
                            <td>Ongoing Courses</td>
                            <td>Completed Courses</td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                $ongoincourse=0;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo $row["sub_code"] . "<br>";
                                    $ongoincourse ++ ;
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                while ($row = mysqli_fetch_assoc($result1)) {
                                    echo $row["sub_code"] . "<br>";
                                    
                                } 
                                ?>
                            </td>
                        </tr>
                    </table>
                    <h4 style="center-align"> total course fee <?php 

                      if($level=='o') {
                        echo($ongoincourse * $feeO);
                      }
                      else{
                        echo($ongoincourse * $feeA);
                      }
                           ?> TK </h4>
                </div>
            </div>
        </div>
    </div>
</div>


















        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
    <ul class="navbar-nav mx-auto">
        <li class="nav-item">
            <a class="nav-link" href="https://www.facebook.com">
                <i class="fab fa-facebook-f"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://www.youtube.com">
                <i class="fab fa-youtube"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://www.twitter.com">
                <i class="fab fa-twitter"></i>
            </a>
        </li>
    </ul>
</nav>


   
</body>