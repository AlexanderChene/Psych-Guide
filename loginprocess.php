<?php


  require_once 'AdminService.class.php';
  require_once 'SQLhelper.class.php';
  $username=$_POST['username'];
  $password=$_POST['password'];
 // $username="ketchum";
  //$password="9981";
  //echo $username;
  echo "<br/>";
  //echo $password;
  
  
  //check if remember user
  //if(empty($_POST['keep'])){
      //setCookie("username",$username,time());
  //}else{
      //setCookie("username",$username,time()+7*24*3600);
  //}
  
  
  $adminservice=new AdminService();
  $test=$adminservice->checkAdmin($username, $password);
  if($test!=""){
      setcookie("username",$username,time()+7*24*3600);
      header("Location:Homepage.php?name=$username" );
      exit();
      
  }else{
      header("Location:login.php?error=1");
      exit();
  }
  //$sql="select password from users where username= '$username'";
 // echo $sql;
  //$sqlhelper=new SQLhelper();
  //$res=$sqlhelper->execute_dql2($sql);
  //if($row=mysql_fetch_assoc($res)){
  /*
      if($password==$row['password']){
          echo $row['password'];
      }else{
          echo "";
      }
  }
  */
  echo $name;
  
  ?>
  