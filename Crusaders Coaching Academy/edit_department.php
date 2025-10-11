<?php include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
    }
    .header {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px;
    }
    .container {
      background-color: #fff;
      border-radius: 5px;
      padding: 20px;
      width: 40%;
      margin: auto;
      margin-top: 50px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #333;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      font-size: 16px;
    }
    .btn {
      padding: 10px 20px;
      border-radius: 3px;
      cursor: pointer;
      margin-right: 10px;
    }
    .btn-primary {
      background-color: #4CAF50;
      color: white;
      border: none;
    }
    .btn-primary:hover {
      background-color: #45a049;
    }
    .btn-secondary {
      background-color: #ccc;
      color: #333;
      border: none;
    }
    .btn-secondary:hover {
      background-color: #aaa;
    }
  </style>
</head>
<body>
  <div class="header">
  	<h2>Update student information</h2>
  </div>
  <div class="container">
<form action="confirm_department_update.php" method="post">
   
    <div class="form-group">
        <label for="dname">Department:</label>
        <input type="text" name="dname" value=<?php echo $_GET["name"];?> readonly >
    </div>
    <div class="form-group">
        <label for="level">Level:</label>
        <input type="text" class="input-group" name="level" value=<?php echo $_GET["level"];?> readonly>
    </div>
    <div class="form-group">
        <label for="sub_code">Subject code:</label>
        <input type="text" class="input-group" name="sub_code" required>
    </div>
    <div class="form-group">
        <label for="sub_name">Subject Name:</label>
        <input type="text" class="input-group" name="sub_name" required>
    </div>
    <div class="form-group">
        <label for="section">Subject Section:</label>
        <input type="int" class="input-group" name="section" required>
    </div>
    <div class="form-group">
        <label for="content">Content:</label>
        <input type="text" class="input-group" name="content" required>
    </div>
    <div class="form-group">
        <label for="room_no">Room:</label>
        <input type="text" class="input-group" name="room_no" required>
    </div>
    <div class="form-group">
        <label for="day1">day 1:</label>
        <input type="text" class="input-group" name="day1" required>
    </div>
    <div class="form-group">
        <label for="day2">day 2:</label>
        <input type="text" class="input-group" name="day2" required>
    </div>
    <div class="form-group">
        <label for="time">time:</label>
        <input type="time" class="input-group" name="time" required>
    </div>
    <button type="submit" name="update" class="btn btn-primary" >Add</button>
    <a href="managedepartment.php" class="btn btn-secondary">Cancel</a>
</form>
</div>
</body>
</html>
