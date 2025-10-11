<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>

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
    #user-mode {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      font-size: 16px;
    }
    #submit-btn {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    #submit-btn:hover {
      background-color: #45a049;
    }
    #account-exists {
      text-align: center;
      margin-top: 10px;
      color: #333;
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
  	<h2>Login</h2>
  </div>
	 
  <form action="loginto.php" method="post" class="container">
  	<?php include('err.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" required>
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" required>
  	</div>
	
  	<div class="input-group" id="term">
      <label>User Mode</label>
      <select name="user" id="user-mode">
          <option value="Student">Student</option>
          <option value="Teacher">Teacher</option>
          <option value="Admin">Admin</option>
      </select>
  	</div>
            
  	<button type="submit" id="submit-btn" name="login_user">Login</button>
  	<p id="account-exists">Not yet a member? <a href="reg.php">Sign up</a></p>
  </form>
</body>
</html>
