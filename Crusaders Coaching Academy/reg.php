<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
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
    .input-group {
      margin-bottom: 15px;
    }
    .input-group label {
      display: block;
      margin-bottom: 5px;
      color: #333;
    }
    .input-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      font-size: 16px;
    }
    .btn {
      background-color: #4CAF50; /* Green color */
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #45a049;
    }
    p {
      text-align: center;
      margin-top: 10px;
    }
    a {
      color: #331;
      text-decoration: none;
    }
    a:hover {
      color: #515;
    }
  </style>
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form action="register.php" method="post" class="container">
  	<?php include('err.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>" required>
    </div>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" value="<?php echo $name; ?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" required>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" required>
  	</div>
  	<div class="input-group">
  	  <label>Phone_no</label>
  	  <input type="tel" name="phone_no" required>
  	</div>
  	<div class="input-group" id="term">
      <label>Department</label>
      <select name="Department_name" id="user-mode">
          <option value="sci">Science</option>
          <option value="arts">Arts</option>
          <option value="com">Commerce</option>
      </select>
  	</div>
  	<div class="input-group" id="term">
      <label>Level</label>
      <select name="level" id="user-mode">
          <option value="o">O Level</option>
          <option value="a">A Level</option>
      </select>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
