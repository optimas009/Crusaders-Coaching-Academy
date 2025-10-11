<?php

    include('connect.php');

    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $quer = "SELECT * FROM teacher WHERE user_name = '$username'";
        $res = mysqli_query($db, $quer);
        if ($row = mysqli_fetch_assoc($res)) {
             $teacher_id = $row['ID'];
        } else {
             echo "User not found";
        }
        $currentPage = 'coursetrack';


        
    } else {
        header('Location: login.php');
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a04710cb7f.js" crossorigin="anonymous"></script>
</head>
<body style="height: 5000px;">


    <?php include('teachernavbar.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        /* Custom CSS Styles */
        body {
            background-color: #f8f9fa; /* Light gray background */
        }

        .header {
            text-align: center;
            margin-top: 20px;
            background-color: #333333; 
            color: #FFFFFF; /* White text */
            padding: 10px;
        }

        .content {
            margin: 20px;
            background-color: #FFFFFF; /* White background */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(2,2,2,2); /* Box shadow for a card-like appearance */
        }

        .update-password {
            margin: 20px;
            background-color: #333333; 
            padding: 20px;
            border-radius: 5px;
            color: #FFFFFF; /* White text */
        }

        .link_format {
            color: red; 
            text-decoration: none;
            font-weight: bold; 
        }

        .link_format:hover {
            color: blue;
            text-decoration: none; 
            font-weight: bold; 
        }

        .link_format {
            color: red; 
            text-decoration: none;
            font-weight: bold; 
        }

        .link_format:hover {
            color: blue;
            text-decoration: none; 
            font-weight: bold; 
        }
       
 

    /* Change the color of the Update Password button to light red */
    .btn-update-password {
        background-color: #FF0000; /* Light red color */
        color: #FFFFFF; /* White text */
    }



        /* Add more custom styles as needed */
    </style>

</head>
<body>
<div class="container">
<div class="row">
            <div class="col">
                <div class= "card">
                    <div class= "card-header">
                        <h1 class= "text-center">Set Grade</h1>
                    </div>
                    <div class="card-body">

                    <form action="confirm_grade_update.php" method="post">
                        <table class= "table table-bordered text-center">
                            <tr>
                                <td class= "bg-dark text-white"> Student ID </td>
                                <input type="hidden" class="input-group" name="sid" value="<?php echo $_GET["s_id"]; ?>">
                                <td> <?php echo $_GET["s_id"]; ?> </td>
                            </tr>

                            <tr>
                                <td class= "bg-dark text-white"> Teacher ID </td>
                                <input type="hidden" class="input-group" name="tid" value="<?php echo $_GET["t_id"]; ?>">
                                <td> <?php echo $_GET["t_id"]; ?> </td>
                            </tr>

                            <tr>
                                <td class= "bg-dark text-white"> Subject Code </td>
                                <input type="hidden" class="input-group" name="sub" value="<?php echo $_GET["sub"]; ?>">
                                <td> <?php echo $_GET["sub"]; ?> </td>
                            </tr>

                            <tr>
                                <td class= "bg-dark text-white"> Grade </td>
                                <td> <input type="text" name="grade" style="border-color: gray; border-radius: 25px"> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <a href="coursestudent.php" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" name="set" class="btn btn-primary" >Set</button>
                                
                               </td>
                            </tr>
                        </table>
                        
                    </form>
                         
                </div>        
            </div>
        </div>
    </div>
</div>
</body>
</html>