<?php
// Start the session
session_start();


?>

<?php

if(isset($_POST['login']))
{
  
  
  $user = $_POST['user'];
  $upass = $_POST['pass'];
  $utype = $_POST['utype'];
  
  // connect to mongodb
   $con = new MongoClient();
    //  Select Database
      $db = $con->mini;
      echo "Database mini selected";
    //  Select Collection
      if($utype==User)
      {
      $collection = $db->User;
      echo "Collection Selected succsessfully";

    
  $qry = array("User" => $user,"password"=>$upass);
      $result = $collection->findOne($qry);

    if($result['password']==$upass)
  {
  
    $_SESSION['user'] = $result['User'];
    
    ?>
        <!--<script>alert('"Login Sucessfull...!! ');</script> -->
        <?php
    echo "Login Sucessfull...!!";
               echo"$user is user";
          header("Location:userprofile.php");
  }
  else
  {
    ?>
        <script>alert('Wrong Details');</script>

        <?php
  }
}
else
{
  
   
      $collection = $db->Admin;
      echo "Collection Selected succsessfully";

    
  $qry = array("User" => $user,"password"=>$upass);
      $result = $collection->findOne($qry);

    if($result['password']==$upass)
  {
  
    $_SESSION['user'] = $result['User'];
    
    ?>
        <!--<script>alert('"Login Sucessfull...!! ');</script> -->
        <?php
    echo "Login Sucessfull...!!";
               echo"$user is user";
          header("Location:adprofile.php");
  }
  else
  {
    ?>
        <script>alert('Wrong Details');</script>

        <?php
  }

}
  
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login form</title>

  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Noticia+Text|Oleo+Script" rel="stylesheet">
  <!-- CORE CSS-->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="login.css">
</head>


<style type="text/css">

html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
}

.navbar{
  position: absolute;
  width: 100%;
  top:0px;
  left: 0px;
}

.nav{
  width: 50%;
}
 
body{
 background:  #82e0aa !important;
}
</style> 

</head>

<body>

 <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <!-- Logo -->
            <div class="navbar-header">
                <a href="#" class="navbar-brand">Career Navigator</a>
            </div>

            <!-- Menu Items -->
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Search Institutes</a></li>
                    <li><a href="navbar.html">Signup</a></li>
                    <li><a href="login.html">Log In</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
 </nav>
<form  method="post">
    <div class="login-page">
  <div action="userprofile.php"class="form">
    <form class="login-form"> 
      <input type="text" placeholder="username" name="user" />
      <input type="password" placeholder="password" name="pass" />

      <button type="submit" name="login">login</button><br/><br/>
       

  <fieldset>
      <legend>Select User Type:</legend>
      <select name="utype">
         <option value="User">User</option>
         <option value="Admin">Admin</option>
    </select>
  </fieldset>
</form>
      <p class="message">Not registered? <a href="navbar.php">Create an account</a></p><br/>
      <p class="message"><a href="new/fp.php">Forgot Password?</a></p>   
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
</body>

</html>