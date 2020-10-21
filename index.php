<?php
// 跳转至项目入口文件

$url = './view/index.php';
if ( isset( $url ) ) {

    Header( 'HTTP/1.1 303 See Other' );

    Header( "Location: $url" );

    exit;
}