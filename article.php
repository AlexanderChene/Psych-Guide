<?php
     require_once 'AdminService.class.php';
     require_once 'SQLhelper.class.php';
     require_once 'FileInfo.class.php';
     require_once 'CommentService.class.php';
     $FileID=$_GET['FileID'];
     $fileinfo=new FileInfo();
     $File_Dir=$fileinfo->getDir($FileID);
     //echo  $File_Dir;
     $con =file_get_contents($File_Dir);
     $con=str_replace("\r\n","<br/>",$con);
     echo $con;
     //echo $FileID;
     /*
     $sql="SELECT * FROM psy.fileinfo where FileID=$FileID";
     //echo $sql;
     $sqlhelper = new SQLhelper();
     $res=$sqlhelper->execute_dql2($sql);
     $row=mysql_fetch_assoc($res);
     $File_Dir=$row['FileDirectory'];
     echo $File_Dir; 
     */
     
     
  ?>
  <hr/>
  Comment area:<br/>
  <?php 
  $commentservice = new CommentService();
  
  $arr=$commentservice->getComment();
  
  if(count($arr)==0){
      echo "No comment yet, be the first one!";
  }
  
  for($i=0; $i<count($arr);$i++){
      if($arr[$i]['FileID']==$FileID){
        $id= $arr[$i]['userID'];
        
      //echo "<b>".$id."</b><br/>";
      echo "<b>".$arr[$i]['username']."</b><br/>";
      echo $arr[$i]['CURRENT_TIME']."<BR/>";
      //echo "date";
      echo "<br/>";
      echo $arr[$i]['text'];
      echo "<br/><br/>";
      //echo "<img src='".$arr[$i]['Path']."'/>";
      echo "<br/>";
      echo "<hr/>";
      //echo $arr[$i]['intro'];
      }
       
  }
  
  
  
  ?>
  <br/>
  <hr/>
  <br/><br/>
  
  <form method="post" action="article_process.php?fileid=<?php echo $FileID;?>">
  <table>
  <tr><td><?php echo $_COOKIE['username']; ?> says:</td></tr>
  <tr><td><textarea name="comment" rows="10" cols="80" placeholder="what's on your mind now?"/></textarea></td></tr>
  <tr><td><input type="submit" value="post"></td></tr>
  </table>
  </form>