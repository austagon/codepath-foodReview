<?php

?>


<html>
<head>
  <title>Login | Food Review Website</title>
  <style>

 body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }
    
    #header {
      background-color: #f2f2f2;
      padding: 20px;
      text-align: center;
    }
    
    h1 {
      margin: 0;
    }
    
    #content {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
    }
    
    h2 {
      margin-top: 0;
    }
    
    form {
      margin-top: 20px;
    }
    
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }
    
    .btn {
      display: inline-block;
      padding: 12px 24px;
      background-color: #32CD32;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      font-size: 16px;
    }
    
    .btn:hover {
      background-color: #45a049;
    }
    
    #footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 20px;
    }

  </style>
</head>
<body>
  <div id="header">
    <h1>Login to Food Review Website</h1>
  </div>
  
 <div id="content">
    <h2>Login</h2>
    <form action="main.php" method="POST">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <input type="submit" value="Login" class="btn">
    </form>
  </div>
  
</body>
</html>
