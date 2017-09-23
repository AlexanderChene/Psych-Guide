<a href="http://localhost/psy/Homepage.php?cat=2&id=1">Career</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://localhost/psy/Homepage.php?cat=2&id=2">Family</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://localhost/psy/Homepage.php?cat=2&id=3">Romantic Relationships</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<br>
<hr>

<?php 
    require_once 'SQLhelper.class.php';
    require_once 'FileInfo.class.php';
    $id=$_GET['id'];
    //echo $id;
    
    if($_GET['id']!=''){
        
        $fileinfo = new FileInfo();
        $arr=$fileinfo->getFileName($id);
        
        
        /*
        $sql="SELECT * FROM psy.fileinfo where problemID =$id;";
        //echo $sql;
        
        $sqlhelper= new SQLhelper();
        $arr=$sqlhelper->execute_dql($sql);
        */
        for($i=0; $i<count($arr);$i++){
            echo "<a target='_blank' href='article.php?FileID=".$arr[$i]['FileID']."'>".$arr[$i]['FileTitle'] ."</a>";
            //echo 
            echo "<br>";
            echo "<br>";
        }
       
    }
    /*
    $file_path="D:\article\Career1.txt";
    $con =file_get_contents($file_path);
    $con=str_replace("\r\n","<br/>",$con);
    echo $con;
    */


?>