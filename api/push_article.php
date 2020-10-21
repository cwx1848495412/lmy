<?php
require( '../util/Mysql.php' );
require( '../util/session.php' );

$sUserInfo = getSession();

if(empty($sUserInfo)){
    echo "用户未登录 无法评论，请登录后再操作！！！";
    exit();
}



$uid = $sUserInfo['id'];
$article_id = $_POST['article_id'];
$content = $_POST['content'];

if(empty($article_id) || empty($content)){
    echo "参数异常";
    exit();
}

// 可以发表评论
$mysql = new Mysql();
$replyRes = $mysql->insertReply( $uid, $article_id, $content );


$url = '../view/article.php?article_id='.$article_id;
if ( isset( $url ) ) {

    Header( 'HTTP/1.1 303 See Other' );

    Header( "Location: $url" );

    exit;
}
