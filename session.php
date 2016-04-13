<?php
    session_start();
        
    if(isset($_COOKIE['username'])){
        $_SESSION['username'] = $_COOKIE['username'];
        //$_SESSION['usertype'] = $_COOKIE['usertype'];
    }
   
  
    function redirect(){
        if(isset($_SESSION['username'])&&($_SESSION['usertype']!="admin")){
            header('Location: index.html');
        }
    }
    
    function isLoggedIn(){
        if(!isset($_SESSION['username'])){
            $uri = explode("/", substr(@$_SERVER["REQUEST_URI"], 1));
            $url = "/".$uri[0]."/";   
            header('Location: '.$url.'login.html');
            die;
        }
    }
    
?>