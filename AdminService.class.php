<?php
     
     require_once 'SQLhelper.class.php';
     class AdminService{
         
         public function checkAdmin($username,$password){
             $sql="select password from users where username= '$username'";
             $sqlhelper=new SQLhelper();
             $res=$sqlhelper->execute_dql2($sql);
             if($row=mysql_fetch_assoc($res)){
                 if($password==$row['password']){
                     return $row['password'];
                 }else{
                     return "";
                 }
             }
             mysql_free_result($res);
             $sqlhelper->close_connect();
             return "";            
         }
         public function getUserId($username){
             $sql="select id from users where username='.$username'";
             $sqlhelper=new SQLhelper();
             $res=$sqlhelper->execute_dql2($sql);
             if($row=mysql_fetch_assoc($res)){
                $id= $row['id'];
             }else{
                 $id= "";
             }
             return $id;
         }
         public function getUserName($id){
             $sql="select username from users where id='.$id'";
             $sqlhelper=new SQLhelper();
             $res=$sqlhelper->execute_dql2($sql);
             if($row=mysql_fetch_assoc($res)){
                 $name= $row['username'];
             }else{
                 $username= "";
             }
             return $username;
             
         }
         
         
         
     }