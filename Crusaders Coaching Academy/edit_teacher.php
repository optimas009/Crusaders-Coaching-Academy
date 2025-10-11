<?php include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Update student information</h2>
  </div>
<form action="confirm_teacher_update.php" method="post">
    <div class="form-group">
        <label for="id">Teacher ID:</label>
        <input type="int" name="id" value=<?php echo $_GET["id"];?> readonly >
    </div>
    <div class="form-group">
        <label for="user_name">User Name:</label>
        <input type="text" class="input-group" name="user_name" >
    </div>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="input-group" name="name" >
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="input-group" name="email" >
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="input-group" name="phone" >
    </div>
    <div class="form-group">
        <label for="salary">Salary:</label>
        <input type="int" class="input-group" name="salary" >
    </div>
    <div class="form-group">
        <label for="subject">Subject:</label>
        <input type="text" class="input-group" name="subject" >
    </div>

    <button type="submit" name="update" class="btn btn-primary" >Update</button>
    <a href="manageteacher.php" class="btn btn-secondary">Cancel</a>
</form>
