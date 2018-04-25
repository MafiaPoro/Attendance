<?php
  require('db_connect.php');

  if (isset($_POST['StudID']) and isset($_POST['password']))
  {
    // Assigning POST values to variables.
    global $username;
    $username = $_POST['StudID'];
    $password = $_POST['password'];

    // CHECK FOR THE RECORD FROM TABLE
    $query = "SELECT * FROM `students` WHERE StudID='$username' and Password='$password'";

    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if ($count == 1)
    {
      //echo "Login Credentials verified";
      echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
      require('LoggedIn.php');
      //header( 'Location: LoggedIn');
    }
    else
    {
      echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
      //echo "Invalid Login Credentials";
    }
  }
?>
