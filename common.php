<?php
function getCookie($key){
    if(empty($_COOKIE["$key"])){
        return "";
    }else{
        return $_COOKIE["$key"];
    }
    
}


function getLastVisit(){
    //date_default_timezone_set("Asia/Chongqing");
    if(!empty($_COOKIE['lastVisit'])){
        echo "Last Login Time: ".$_COOKIE['lastVisit'];
        //update date
        setcookie("lastVisit",date("Y-m-d H:i:s"),time()+24*3600*30);
    }else{
        //first login

        setcookie("lastvisit",date("Y-m-d H:i:s"),time()+24*3600*30);
        echo "First login";
    }
}
?>