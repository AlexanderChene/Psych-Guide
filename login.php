<?php
   require_once 'common.php';
?>
<html>
<head>
<title>Login</title>
<img src="image/key.jpg" height="100" width="200">
<hr/>
</head>
<body>

<Center>
<fieldset style="width:300px">
<legend><font color="blue">Please Login</font></legend>
<form action="loginprocess.php" method="post">
<table>
<tr><td>Username</td><td><input type="text" name="username" value="<?php echo getCookie("username");?>"/></td></tr>
<tr><td>Password</td><td><input type="password" name="password"></td></tr>

<tr><td><b>a new user?<b/></td><td><a href="register.php">Register</a></td></tr>
<tr><td><input type="submit" value="login"></td><td><input type="reset" value="reset"></td></tr>

</table>
</form>
<?php
     if(!empty($_GET['error'])){
         $error=$_GET['error'];
         if($error==1){
             echo "<font color=red>invalid username or password</font>";
             
         }
     }
?>
</body>
</html>