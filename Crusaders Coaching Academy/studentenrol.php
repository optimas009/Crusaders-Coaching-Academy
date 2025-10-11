<?php
include ('connect.php');
$id_query = "SELECT ID,Name,Dep_name,level FROM student WHERE user_name = '" . $_SESSION["username"] . "'";
$id_result = mysqli_query($db, $id_query);
$subCodeArray = array();


if ($id_result) {
    $row = mysqli_fetch_assoc($id_result);
    $id = $row["ID"];
    $dep = $row["Dep_name"];
    $lev=$row["level"];
    $name= $row["Name"];
}

$query = "SELECT s.Sub_code, s.section, s.room_no, s.day1, s.day2, s.time FROM routine r,schedule s WHERE r.S_ID='$id' AND r.Sub_code=s.Sub_code AND r.section=s.section";
$result = mysqli_query($db, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $subCodeArray[] = $row["Sub_code"];
}
  


$queryIN = "Select s.name, h.Sub_code, h.Dep_name, h.level, sch.section
            FROM have h
            JOIN schedule sch ON sch.Sub_code = h.Sub_code
            JOIN subject s ON s.code = h.Sub_code
            WHERE h.Dep_name = '$dep' AND h.sub_code NOT IN ('" . implode("','", $subCodeArray) . "') AND h.level='$lev'  ";

$resultIN = mysqli_query($db, $queryIN);
//if($resultIN){
    //$trow=mysqli_fetch_assoc($resultIN);
    //$subid = $trow["Sub_code"];}

//$tquery = "SELECT ID FROM teacher WHERE sub_code='$subid'";
//$tresult = mysqli_query($db, $tquery);//

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a04710cb7f.js" crossorigin="anonymous"></script>

</head>
<body style="height: 1500px;">
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
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="studentview.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="studentcourse.php">course information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="studentschedule.php">Class Schedule</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="studentenrol.php">course enrolment</a>
                </li>
                <li class="nav-item">
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











    <h3 style="text-align: center;">Available courses for <?php echo $dep ?> Department</h3><br>
  
    <div class="container">
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>Name</th>
                <th>Sub_code</th>
                <th>section</th>
                <th>Level</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($rowIN = mysqli_fetch_assoc($resultIN)) : ?>
                <tr>
                    <td><?php echo $rowIN["name"]; ?></td>
                    <td><?php echo $rowIN["Sub_code"]; ?></td>
                    <td><?php echo $rowIN["section"]; ?></td>
                    <td><?php echo $rowIN["level"]; ?></td>
                    <td><a href="studentadd.php?id=<?php echo $id;?>&Sub_code=<?php echo $rowIN["Sub_code"];?>&section=<?php echo $rowIN["section"];?>" class="btn btn-primary btn-sm">ADD</a></td>
            
            
            
            </td>
                </tr>
            <?php endwhile; ?>

            



        </tbody>
    </table>
     <br>
     <br>
    <?php if (mysqli_num_rows($resultIN) === 0) { ?>
    <h3 class="text-center" ><b>No Available Course<b></h3>
<?php } ?>


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

</html>
