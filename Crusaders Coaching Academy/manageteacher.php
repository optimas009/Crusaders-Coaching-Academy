<?php
require_once('connect.php');
$query= "select *from teacher";
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
            <ul class="navbar-nav mx-auto"> <!-- Center align the links -->
                <li class="nav-item">
                    <a class="nav-link" href='adminview.php'>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="managestudent.php">Students information</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="manageteacher.php">Teachers information</a>
                </li>
                <li class="nav-item">
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
                        <h1 class= "text-center">Teachers</h1>
                    </div>
                    <div class="card-body">
                        <table class= "table table-bordered text-center">
                            <tr class= "bg-dark text-white">
                                <td> Student ID </td>
                                <td> User name </td>
                                <td> Name </td>
                                <td> Email </td>
                                <td> Password </td>
                                <td> Phone </td>
                                <td> Salary </td>
                                <td> Subjects </td>
                                <td> Joining Date </td>

                            </tr>
                            <tr>
                            <?php
                                while($row= mysqli_fetch_assoc($result))
                                {
                            ?>
                                
                                 <td> <?php echo $row["ID"];?> </td>
                                 <td> <?php echo $row["user_name"];?> </td>
                                 <td> <?php echo $row["name"];?> </td>
                                 <td> <?php echo $row["email"];?> </td>
                                 <td> <?php echo $row["password"];?> </td>
                                 <td> <?php echo $row["phone"];?> </td>
                                 <td> <?php echo $row["salary"];?> </td>
                                 <td> <?php echo $row["sub_code"];?> </td>
                                 <td> <?php echo $row["joining_date"];?> </td>
                                 <td><a href="edit_teacher.php?id=<?php echo $row["ID"];?>" class="btn btn-primary btn-sm">Edit</a></td>
                                 <td><a href="drop_teacher.php?id=<?php echo $row["ID"];?>" class="btn btn-primary btn-sm">Remove</a></td>
                                                         
                            </tr>
                            <?php
                                }
                            ?>
                        </table>
                        <a href="add_teacher.php" class="btn btn-success">Add New Teacher</a>
                         
                </div>        
            </div>
        </div>
    </div>

</body>