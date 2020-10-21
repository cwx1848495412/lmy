<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册</title>
</head>
<body>

<?php include_once("./header.php")?>

<div class="register">
    <center>
        <h1 class="register-title">
            <font size="" color="darkcyan">用户注册</font>
            <b>USER REGISTER</b>
            <a href="./login.php">
                <font size="3" color="#32CD32">
                    已有帐号？去登录...
                </font>
            </a>
        </h1>

        <form action="../api/register.php"  method="post" onsubmit="return submitFun()">
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
                    <td>确认密码</td>
                    <td><input type="password" name="repasswd" id="" value="" /></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="" id="" value="注册" /></td>
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

.register {
    margin: auto;
    width: 800vw;
    max-width:1200px;
}

.register-title {
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