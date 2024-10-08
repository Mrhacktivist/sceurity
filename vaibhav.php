<?php
  $username = $_GET['username'];
  $password = $_GET['password'];

  $query = "SELECT * FROM users WHERE username='$username ' AND password='$password'";
  $result = mysql_query($query);

  if(mysql_num_rows($result) > 0) {
    echo "Login successful!";
  } else {
    echo "Invalid username or password";
  }
?>
