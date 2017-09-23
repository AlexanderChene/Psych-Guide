<?php
require_once 'SQLhelper.class.php';
class CommentService{
    
    public function addComment($sql){
        $sqlhelper=new SQLhelper();
        $result=$sqlhelper->execute_dml($sql);
        $sqlhelper->close_connect();
        return $result;
        
        
    }
    function getComment(){
        $sql="SELECT * FROM psy.comment ORDER BY `CURRENT_TIME` DESC;";
        $sqlhelper=new SQLhelper();
        $res=$sqlhelper->execute_dql($sql);
        $sqlhelper->close_connect();
        return $res;
    }
}