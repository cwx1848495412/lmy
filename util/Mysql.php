<?php

class Mysql
{
    public $servername = 'localhost';
    public $username = 'root';
    public $password = 'wobenwudi';
    public $dbname = 'lmy';
    public $conn;

    public function __construct()
    {
        // 创建连接
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // 检测连接
        if ($this->conn->connect_error) {
            throw new Exception('连接失败: ' . $this->conn->connect_error);
        }

        // echo '连接成功';
    }

    // 查询文章列表

    public function getArticles($id = 0)
    {

        $sql = 'select * from article ';

        if (!empty($id)) {
            $sql = $sql . 'where id = ' . $id;
        }

        $result = $this->conn->query($sql);

        $returnData = [];
        if ($result->num_rows < 0) {
            return $returnData;
        }

        // 输出数据
        while ($row = $result->fetch_assoc()) {
            $returnData[] = [
                'id' => $row['id'],
                'title' => $row['title'],
                'content' => $row['content']
            ];
        }
        return $returnData;
    }

    // 根据文章id获取对应评论信息

    public function getReplyByArticleId($articleId = 0)
    {
        if (empty($articleId)) {
            throw new Exception('文章ID 不能为空');
        }

        $sql = 'select * from reply where article_id = ' . $articleId . " order by id DESC;";

        $result = $this->conn->query($sql);

        $returnData = [];
        if ($result->num_rows < 0) {
            return $returnData;
        }

        // 输出数据
        while ($row = $result->fetch_assoc()) {
            $returnData[] = [
                'id' => $row['id'],
                'uid' => $row['uid'],
                'article_id' => $row['article_id'],
                'content' => $row['content']
            ];
        }
        return $returnData;
    }

    // 获取用户信息

    public function getUserInfo($username)
    {

        if (empty($username)) {
            throw new Exception('参数 不能为空');
        }

        $sql = "select * from user where username = '" . $username . "'";

        $result = $this->conn->query($sql);

        $returnData = [];
        if ($result->num_rows < 0) {
            return $returnData;
        }

        // 输出数据
        while ($row = $result->fetch_assoc()) {
            $returnData = [
                'id' => $row['id'],
                'username' => $row['username'],
                'password' => $row['password'],
            ];
        }
        return $returnData;
    }

    // 添加一名用户
    public function insertUser($username, $password)
    {
        $sql = "INSERT INTO user (username, password)
        VALUES ('" . $username . "', '" . $password . "')";

        if ($this->conn->query($sql) === TRUE) {
            return $this->conn->insert_id;
        } else {
            return 0;
        }
    }

    // 添加一条评论
    public function insertReply($uid, $article_id, $content)
    {
        $sql = "INSERT INTO reply (uid, article_id, content)
        VALUES ('" . $uid . "', '" . $article_id . "', '" . $content . "')";

        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}


try {
    // echo '<pre/>';

    // $mysql = new Mysql();

    // $articleArr = $mysql->getArticles();
    // var_dump( $articleArr );

    // $article = $mysql->getArticles( 2 );
    // var_dump( $article );

    // $replyArr = $mysql->getReplyByArticleId( 1 );
    // var_dump( $replyArr );

    // $replyRes = $mysql->insertReply( 1, 1, '好一个绝世文章' );
    // var_dump( $replyRes );

    // $id = $mysql->insertUser( "rabbit", '556482' );
    // var_dump( $id );

} catch (\Exception $e) {
    echo  $e->getMessage();
}
