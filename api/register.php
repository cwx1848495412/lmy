<?php
require( '../util/Mysql.php' );
require( '../util/session.php' );

$username = $_POST['username'];
$password = $_POST['passwd'];


if ( empty( $username ) ) {
    echo '用户名为空 无法注册';
    die();
}

if ( empty( $password ) ) {
    echo '密码为空 无法注册';
    die();
}

$mysql = new Mysql();
$userInfo = $mysql->getUserInfo( $username );

if(!empty($userInfo)){
    echo '用户已存在 无法注册';
    die();
}

// 可以执行注册
$id = $mysql->insertUser($username,$password);

if($id <= 0){
    echo "注册失败";
    die();
}

setSession('id',$id);
setSession('username',$username);

$url = '../view/index.php';
if ( isset( $url ) ) {

    Header( 'HTTP/1.1 303 See Other' );

    Header( "Location: $url" );

    exit;
}