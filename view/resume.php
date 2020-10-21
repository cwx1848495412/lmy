<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>LMY的个人简历</title>
</head>

<body>
    <?php include_once("./header.php")?>

    <div class="resume-main">
        <div class="left">
            <div class="show">
                <div class="resume">
                    <h1>个人信息</h1>
                    一句话介绍自己，向HR展示你的才华吧～
                </div>
            </div>

            <div class="triangle"></div>

            <div class="myself">
                自我评价
            </div>

            <ul>
                <li>
                    <b>职业背景</b>：3年市场经理工作经验，擅长沟通协调，具备很强的思维逻辑能力，世界 500强企业工作经验。
                </li>

                <li>
                    <b>核心素质</b>：内驱力强，拥有坚实的市场拓展能力，市场规划能力和市场宣传能力，主 导过60多场大型营销活动。具有管理30人市场拓展团队的经验，KA客户的沟通技 巧，整合外部资源的能力和经验。
                </li>

                <li>
                    <b>团队协调</b>：擅长人性化管理，跨部门协作，以身作则，管理风格上注重时间观念和成 果导向意识。
                </li>

                <li>
                    <b>性格品质</b>：有韧性、抗压性强；具有大局观、以身作则，擅长团队培养和有效沟通， 带领团队共同进步
                </li>
            </ul>


            <div class="myself">
                工作经历
            </div>

            <ul>
                <li>
                    <b>公司简介</b>：世界500强企业，是目前中国领先的互联网增值服务提供商之一
                </li>

                <li>
                    <b>市场拓展</b>：主导腾讯QQXX项目 在30个一线城市及地区的拓展开发项目；提高QQ用户的用户量及关注量。
                </li>

                <li>
                    <b>市场分析</b>：时刻关注市场资讯，从各类信息中抓取对XX项目有效的数据并分析，纵 观整体市场，依据规模将目标客户分为3个层级，然后深入分析，通过数据分析给市 场推广提出建设性意见。
                </li>

                <li>
                    <b>拓展宣传</b>：通过举办60场次大型线上线下推广活动，增加大型合作商户数，达到了 资源的共享。
                </li>
            </ul>
        </div>

        <div class="right">
            <img class="avator" src="../resource/avator.jpg">

            </img>

            <div class="myself">
                联系方式
            </div>

            <ul>
                <li>
                    <b>姓名</b>：LMY
                </li>

                <li>
                    <b>性别</b>：待定
                </li>

                <li>
                    <b>电话</b>：18888888888
                </li>

                <li>
                    <b>邮件</b>：m18888888888@163.com
                </li>

                <li>
                    <b>地址</b>：上海市
                </li>

                <li>
                    <b>生日</b>：1970年8月15日
                </li>
            </ul>

            <div class="myself">
                求职意向
            </div>

            <ul>
                <li>
                    <b>期望职业</b>：互联网行业
                </li>

                <li>
                    <b>期望职位</b>：PHP开发
                </li>
            </ul>

            <div class="myself">
                项目经验
            </div>

            <ul>
                <li>
                    <b>项目描述</b>：QQXX营销活动是基于线上线下一体营销活动，主要目的是提升QQXX产品影响力、提升用户支付体验。
                </li>

                <li>
                    <b>项目职责</b>：立项.统筹策划，对接线上大型合作商家商务洽谈，合作细节及线下现场活动巡视，对于突发情况立即处理，有条不紊、各自分工，确保现场的疑问及时解决和活动圆满结束
                </li>

                <li>
                    <b>项目业绩</b>：活动圆满结束，活动期间日均用户流量超10000+影响力非同凡响。
                </li>
            </ul>
        </div>
    </div>
    
    <?php include_once("./footer.php")?>
</body>
<style>
    /* * {
        margin: 0;
        padding: 0;
        user-select: none;
    }
    
    html {
        text-align: center;
        background-color: #6a6da9;
    } */
    
    ul {
        margin: 0;
        padding: 0;
        list-style: none;
        text-align: justify;
        margin: 2vh 0;
    }
    
    li {
        margin-top: 2vh;
        color: #228fbd;
    }
    
    .resume-main {
        text-align: center;
        background-color: #6a6da9;
        width: 60vw;
        max-width: 1200px;
        margin: auto;
        margin-top: 10vh;
        display: flex;
        justify-content: space-between;
        padding: 2vw;
        background-color: azure;
    }
    
    .left {
        /* margin-left: 2vw; */
        width: 30vw;
        height: 100%;
        background-color: azure;
    }
    /* 
边距重叠：一个盒子和其子孙的边距重叠。
根据规范，一个盒子如果没有上补白和上边框，
那么它的上边距应该和其文档流中的第一个孩子元素的上边距重叠。
overflow: hidden;可避免 */
    
    .show {
        overflow: hidden;
        height: 20vh;
        background-color: #f0e1da;
    }
    
    .resume {
        display: block;
        margin-top: 5vh;
    }
    
    .triangle {
        border-width: 7vh 15vw 0 15vw;
        border-style: solid;
        border-color: #f0e1da transparent transparent transparent;
        margin-bottom: 5vh;
    }
    
    .myself {
        margin-top: 5vh;
        height: 5vh;
        line-height: 5vh;
        background-color: #f0e1da;
    }
    
    .right {
        width: 20vw;
        height: 100%;
        /* background-color: #55ffff; */
    }
    
    .avator {
        margin: auto;
        width: 25vh;
        height: 25vh;
        background-color: aqua;
        border-radius: 50%;
    }
</style>

</html>