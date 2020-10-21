<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录</title>
</head>
<body>

<?php include_once("./header.php")?>

<div class="login">
    <center>
        <h1 class="login-title">
            <font size="" color="darkcyan">用户登录</font>
            <b>USER LOGIN</b>
            <a href="./register.php">
                <font size="3" color="#32CD32">
                    没有帐号？去注册...
                </font>
            </a>
        </h1>
    
        <form action="../api/login.php"  method="post" onsubmit="return submitFun()">
            <table cellspacing="30" >
                <tr>
                    <td>用户名</td>
                    <td><input type="" name="username" id="" value="" /></td>
                </tr>
                <tr>
                    <td>密码</td>
                    <td><input type="password" name="passwd" id="" value="" /></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="" id="" value="登录" /></td>
                </tr>
            </table>
        </form>
    </center>
</div>


<?php include_once("./footer.php")?>

</body>

<style type="text/css">
td:first-child {
    text-align: right;
}

tr{
    height: 10vh;
}

input {
    outline: none;
    width: 50vw;
    height: 10vh;
    text-align: center;
    font-size: 25px;
    border: 2px solid #ccc;
    transition: .5s;
}

input:focus{
    border-radius: 5rem;
    border-color: #5F9EA0;
}

.login {
    margin: auto;
    width: 800vw;
    max-width:1200px;
}

.login-title {
    margin-top: 5vh;
}

</style>

<script>
    function submitFun(){
        var username = document.getElementsByName("username")[0].value;
        var passwd = document.getElementsByName("passwd")[0].value;
        var repasswd = document.getElementsByName("repasswd")[0].value;
        
        if(username == null || username == ""){
            alert("用户名不能为空");
            return false;
        }
        
        if(passwd == null || passwd == ""){
            alert("密码不能为空");
            return false;
        }
        
        if(repasswd == null || repasswd == ""){
            alert("重复密码不能为空");
            return false;
        }
        
        if(passwd != repasswd){
            alert("密码与重复密码不一致");
            return false;
        }
        
        return true;
    }
</script>

</html>