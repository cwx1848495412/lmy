<?php

require( '../util/session.php' );
// 销毁所有session
deleteSession('username');

$url = '../view/index.php';
if ( isset( $url ) ) {

    Header( 'HTTP/1.1 303 See Other' );

    Header( "Location: $url" );

    exit;
}