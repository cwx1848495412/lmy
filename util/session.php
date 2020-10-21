<?php
session_start();

// 本项目用session来实现登录功能

// 设置session
function setSession($name,$value){
    $_SESSION[$name] = $value;
}

// 获取session
function getSession(){

    if(empty($_SESSION['username'])){
        return [];// 没有数据
    }

    if(empty($_SESSION['id'])){
        return [];// 没有数据
    }

    return [
        "id" => $_SESSION['id'],
        "username" => $_SESSION['username']
    ];
}


// 删除session
function deleteSession(){
    session_destroy();
}