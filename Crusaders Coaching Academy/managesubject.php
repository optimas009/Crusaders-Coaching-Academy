<?php
require_once('connect.php');
$query= "select * from subject inner join schedule on subject.code=schedule.sub_code;";
$result=mysqli_query($db,$query);
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
<body>
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
                   <p1 style="color:white">WELCOME &nbsp; <?php echo $username; ?> &nbsp;</p1><!-- ekhane user name thakbe -->
                </li>


            </ul>
            <ul class="navbar-nav mx-auto"> <!-- Center align the links -->
                <li class="nav-item">
                    <a class="nav-link" href='adminview.php'>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="managestudent.php">Students information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="manageteacher.php">Teachers information</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="managesubject.php">Subject information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="managedepartment.php">Department information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminsetting.php">Settings</a>
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
                <div class= "card">
                    <div class= "card-header">
                        <h1 class= "text-center">Subjects</h1>
                    </div>
                    <div class="card-body">
                        <table class= "table table-bordered text-center">
                            <tr class= "bg-dark text-white">
                                <td> Subject code </td>
                                <td> Subject name </td>
                                <td> Section</td>
                                <td> Room </td>
                                <td> day 1 </td>
                                <td> day 2 </td>
                                <td> Time</td>


                            </tr>
                            <tr>
                            <?php
                                while($row= mysqli_fetch_assoc($result))
                                {
                            ?>
                                
                                 <td> <?php echo $row["code"];?> </td>
                                 <td> <?php echo $row["name"];?> </td>
                                 <td> <?php echo $row["section"];?> </td>
                                 <td> <?php echo $row["room_no"];?> </td>
                                 <td> <?php echo $row["day1"];?> </td>
                                 <td> <?php echo $row["day2"];?> </td>
                                 <td> <?php echo $row["time"];?> </td>
                                 <td><a href="editsubject.php?sub_code=<?php echo $row["code"];?> & section=<?php echo $row["section"];?>" class="btn btn-primary btn-sm">Edit</a></td>

                                
                                                         
                            </tr>
                            <?php
                                }
                            ?>
                        </table>
                      
                         
                </div>        
            </div>
        </div>
    </div>

</body>