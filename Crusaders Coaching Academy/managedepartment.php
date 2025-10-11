<?php
require_once('connect.php');
$query= "select * from department order by name, level";
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
                <li class="nav-item">
                    <a class="nav-link" href="managesubject.php">Subject information</a>
                </li>
                <li class="nav-item active">
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
                        <h1 class= "text-center">Departments</h1>
                    </div>
                    <div class="card-body">
                        <table class= "table table-bordered text-center">
                            <tr class= "bg-dark text-white">
                                <td> Department Name </td>
                                <td> Level </td>
                                <td>subjects</td>
                                
                            </tr>
                            <tr>
                            <?php
                                while($row= mysqli_fetch_assoc($result))
                                {
                            ?>
                                
                                 <td> <?php echo $row["name"];?> </td>
                                 <td> <?php echo $row["level"];?> </td>
                                 <td>
                                    <?php
                                    $query1 = "SELECT sub_code FROM have WHERE dep_name = '{$row['name']}' AND level = '{$row['level']}' ORDER BY sub_code";
                                    $result1 = mysqli_query($db, $query1);
                                    while ($column = mysqli_fetch_assoc($result1)) {
                                        echo $column["sub_code"] . "<br>";
                                    }
                                    ?>
                                 <td><a href="edit_department.php?name=<?php echo $row["name"];?>& level=<?php echo $row["level"];?>" class="btn btn-primary btn-sm">Add</a></td>
                                                         
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