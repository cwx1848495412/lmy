<?php
require( '../util/Mysql.php' );
require( '../util/session.php' );

$username = $_POST['username'];
$password = $_POST['passwd'];

if ( empty( $username ) ) {
    echo '用户名为空 无法登录';
    die();
}

if ( empty( $password ) ) {
    echo '密码为空 无法登录';
    die();
}

$mysql = new Mysql();
$userInfo = $mysql->getUserInfo( $username );

if ( empty( $userInfo ) ) {
    echo '用户不存在 无法登录';
    die();
}

if ( $userInfo['password'] != $password ) {
    echo '密码不正确 无法登录';
    die();
}

// 都正常 可以登录

// 登录成功-设置session
setSession('id',$userInfo['id']);
setSession('username',$userInfo['username']);

$url = '../view/index.php';
if ( isset( $url ) ) {

    Header( 'HTTP/1.1 303 See Other' );

    Header( "Location: $url" );

    exit;
}
