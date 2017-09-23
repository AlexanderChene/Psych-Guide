<?php
    require_once 'SQLhelper.class.php';
    
    class FileInfo{
        
        //get all filenames belongs to one subject
        function getFileName($id){
            $sqlhelper= new SQLhelper();
            $sql="SELECT * FROM psy.fileinfo where problemID =$id;";
            $arr=$sqlhelper->execute_dql($sql);
            $sqlhelper->close_connect();
            return $arr;
            
        }
        
        //get file directory accroding to file id
        function getDir($fileID){
            $sqlhelper = new SQLhelper();
            $sql="SELECT * FROM psy.fileinfo where FileID=$fileID";
            $res=$sqlhelper->execute_dql2($sql);
            $row=mysql_fetch_assoc($res);
            $File_Dir=$row['FileDirectory'];
            $sqlhelper->close_connect();
            return $File_Dir;
            
            
        }
        
        
    }