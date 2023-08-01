<?php


?>

<html>
<head>
  <title>Main | Food Review Website</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }
    
    #header {
      background-color: #32CD32;
      padding: 20px;
      text-align: center;
    }
    
    h1 {
      margin: 0;
      color: #fff;
    }
    
    #content {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
    }
    
    h2 {
      margin-top: 0;
      color: #32CD32;
    }
    
    .restaurant-list {
      list-style: none;
      padding: 0;
    }
    
    .restaurant-list-item {
      margin-bottom: 10px;
    }
    
    .restaurant-link {
      display: block;
      padding: 10px;
      background-color: #f2f2f2;
      color: #32CD32;
      text-decoration: none;
      border-radius: 4px;
    }
    
    .restaurant-link:hover {
      background-color: #d5f7d5;
    }
    
    .search-bar {
      margin-top: 20px;
    }
    
    .search-input {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }
    
    .search-button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #32CD32;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      font-size: 16px;
      border: none;
    }
    
    .search-button:hover {
      background-color: #228b22;
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
    <h1>Food Review Website</h1>
  </div>
  
  <div id="content">
    <h2>Featured Restaurants</h2>
    <ul class="restaurant-list">
      <li class="restaurant-list-item">
        <a href="restaurant-name.php" class="restaurant-link">Restaurant Name 1</a>
      </li>
      <li class="restaurant-list-item">
        <a href="restaurant-name.php" class="restaurant-link">Restaurant Name 2</a>
      </li>
      <li class="restaurant-list-item">
        <a href="restaurant-name.php" class="restaurant-link">Restaurant Name 3</a>
      </li>
    </ul>
    
    <div class="search-bar">
      <input type="text" name="search" class="search-input" placeholder="Search for restaurants...">
      <button class="search-button">Search</button>
    </div>
  </div>
  
</body>
</html>
