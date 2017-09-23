<?php 
    require_once 'AdminService.class.php';
    require_once 'SQLhelper.class.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    //$username="ketchum";
  
    //check username is repeated
    
    
    /*
    $adminservice=new AdminService();
    $id=$adminservice->getUserId($username);
    echo $id;
    */
    
    $sql="select id from users where username='$username'";
    $sqlhelper=new SQLhelper();
    $res=$sqlhelper->execute_dql2($sql);
    if($row=mysql_fetch_assoc($res)){
        $id= $row['id'];
    }else{
        echo "";
    }
    echo $id;
    
  if($id!=""){
      echo "username already exists, please try some other names!";
      ?>
      <script>
      alert("username already exists, please try some other names!");
      window.location.href="login.php";

      </script>
      
      
      <?php 
  }else{
      $sql="INSERT INTO users (`username`,`password`) VALUES ('".$username."','".$password."');";
     // echo $sql;
      $sqlhelper=new SQLhelper();
      $check=$sqlhelper->execute_dml($sql);
      //echo $check;
      echo "<br/>";
      echo "Register successfully!<br/>";
      echo "Your username is:".$username."<br/>";
      echo "Your password is:".$password."<br/>";
      echo "Please memorize your username and id<br/>";
      ?>
      <a href="login.php">Go Back and Login with your new account!</a>
      
      <?php
      
  }

?>