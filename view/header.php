<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>
<body>
    <div class="header">
        <div class="header-left">
            LMY 的博客
        </div>
        <div class="header-middle">
            <a class="header-remove-default" href="./index.php">
                <div class="header-middle-item"> 
                    首页
                </div>
            </a>

            <a class="header-remove-default" href="./resume.php">
                <div class="header-middle-item black"> 
                博主个人信息
                </div>
            </a> 
        </div>

        
        <!-- ./login.php   ../api/loginout.php -->
        <a class="header-remove-default" href="<?php echo  !isset($_SESSION['username']) ? './login.php'  : '../api/loginout.php';  ?>">
            <div class="header-right black">
                <?php echo !isset($_SESSION['username']) ? '登录' : $_SESSION['username'] . "-点击退出登录"; ?>
            </div>
        </a> 
        
    </div>
</body>
<style>
    *{
        --hoverColor: antiquewhite;
    }

    body {
        margin: 0px;
        padding: 0px;
    }

    .header-remove-default {
        text-decoration: none;
        color: black;
    }

    .header {
        display: flex;
        justify-content: space-around;
        text-align: center;
        width: 100%;
        height: 15vh;
        line-height: 15vh;
        box-shadow: 0px 3px 10px #888888;
    }

    .header-left {
        width: 20vw;
        height: 100%;
    }

    .header-middle {
        display: flex;
        width: 40vw;
        height: 100%;
        justify-content: space-around;
    }

    /* 父元素 40 */
    .header-middle-item {
        width: 15vw;
        height: 100%;
    }

    .header-middle-item:hover {
        background: var(--hoverColor);
        cursor: pointer;
    }

    .header-right {
        width: 20vw;
        height: 100%;
    }

    .header-right:hover {
        background: var(--hoverColor);
        cursor: pointer;
    }
</style>
</html>