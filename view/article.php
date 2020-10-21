<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文章详情</title>
</head>

<body>
    <?php
        include_once("./header.php");
        require("../util/mysql.php");
        require("../util/session.php");
    ?>
    <center>
        <div class="article">

            <div class="article-content">
                <?php 
                    $mysql = new Mysql();
                    $articleId = $_GET['article_id'];
                        
                    $article = $mysql->getArticles( $articleId );
                    if(!empty($article)){
                        echo "<h1>".$article[0]['title']."</h1>";
                        echo $article[0]['content'];
                    }
                    

                    // 评论列表
                    $replyArr = $mysql->getReplyByArticleId( $articleId );
                    // var_dump($article);
                    // var_dump($replyArr);
                ?>
            </div>
            
            <div class="article-reply">
                <form action="../api/push_article.php" method="post">
                    <input name="article_id" type="hidden" value="<?php echo $_GET['article_id'] ?>">
                    <input class="article-reply-text" name="content" type="text" placeholder="发布我的评论（此操作必须登录）">
                    <input class="article-reply-submit" type="submit" value="发布"></input>
                </form>
            </div>

            <div class="article-timeline">
                <?php

                    foreach ($replyArr as $key => $value) {
                        echo "<div class=\"timeline-item\">".$value['content']."</div>";
                    }
                
                ?>

                <!-- <div class="timeline-item">第一篇博文标题</div> -->
            </div>
        </div>
        </div>
    </center>
    

    
    <?php include_once("./footer.php")?>
</body>

<style>
h1{
    margin: 10vh;
}

.article {
    margin: auto;
    width: 80vw;
    max-width: 1200px;
}

.article-content {
    font-size: 30px;
}

.article-reply {
    margin-top: 5vh;
    line-height: 100px;
    height: 100px;
    width: 100%;
    /* background: #FFDAB9; */
}

.article-reply-text {
    outline: none;
    width: 50vw;
    height: 80px;
    text-align: center;
    font-size: 25px;
    border: 2px solid #ccc;
    background: transparent;
    transition: .5s;
}
.article-reply-text:focus{
    border-radius: 5rem;
    border-color: #00BFFF;
}

.article-reply-submit {
    outline: none;
    width: 20vw;
    height: 80px;
    text-align: center;
    font-size: 25px;
    border: 2px solid #ccc;
    background: transparent;
    border-radius: 5rem;
    cursor: pointer;
    border-color: #00BFFF;
}


.article-timeline {
    margin-top: 5vh;
    width: 100%;
}

.timeline-item {
    text-align: left;
    position: relative;
    text-decoration: none;
    display: block;
    margin-top: 10px;
    width: 100%;
    height: 100px;
    line-height: 100px;
    color: rgb(24, 82, 82);
    font-weight: 1000;
}

.timeline-item:hover {
    background: var(--hoverColor);
}

.timeline-item::before {
    content: '';
    display: inline-block;
    line-height: 100px;
    margin: 0 3rem;
    width: 1rem;
    height: 1rem;
    border-radius: .2rem;
    background: #1E90FF;
    transition: .2s;
}

.timeline-item:hover::before {
    background: #228B22;
    border-radius: 50%;
}

.timeline-item::after {
    position: absolute;
    text-align: center;
    color: #F8F8FF;
    font-size: 1.5rem;
    letter-spacing: .3rem;
    content: '点赞功能敬请期待！';
    overflow: hidden;
    line-height: 100px;
    width: 0vw;
    height: 100px;
    right: 0;
    border-radius: .2rem;
    background: linear-gradient(45deg, #60F3AB, #014289);
    transition: .2s;
    cursor: pointer;
}

.timeline-item:hover::after {
    width: 30vw;
}
</style>

</html>