<?php
require_once 'AdminService.class.php';
require_once 'SQLhelper.class.php';
$username=$_COOKIE['username'];
//echo $username;
//$username="Alex";
//get userid
$sql="select id from users where username='$username'";
//echo $sql;
$sqlhelper=new SQLhelper();
$res=$sqlhelper->execute_dql2($sql);
if($row=mysql_fetch_assoc($res)){
    $id= $row['id'];
}else{
    echo "";
}
//echo $id;
$comment=$_POST['comment'];
//echo $comment;
echo "<br/>";
$fileid=$_GET['fileid'];
//echo $fileid;

//insert comment
$sql="INSERT INTO `psy`.`comment` (`FileID`, `userID`, `text`,`username`) VALUES ('".$fileid."', '".$id."', '".$comment."','".$username."');";
$sqlhelper=new SQLhelper();
$result=$sqlhelper->execute_dml($sql);
if($result==1){
    echo "comment successfully";
    header("Location:Homepage.php");
}else{
    echo "fail";
}

?>