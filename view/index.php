<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="../swiper/css/swiper.min.css">
    <title>首页</title>
</head>

<body>
    <?php 
        include_once("./header.php");
        require("../util/mysql.php");
    ?>
    <div class="main">

        <!-- <img class="main-image" src="../resource/mn.jpg" alt=""> -->
        <div class="container">
            <div class="timeline">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image: url(../swiper/images/01.jpg);" data-year="2014">
                            <div class="swiper-slide-content"><span class="timeline-year">2014</span>
                                <h4 class="timeline-title">Our nice super title</h4>
                                <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url(../swiper/images/02.jpg);" data-year="2015">
                            <div class="swiper-slide-content"><span class="timeline-year">2015</span>
                                <h4 class="timeline-title">Our nice super title</h4>
                                <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url(../swiper/images/03.jpg);" data-year="2016">
                            <div class="swiper-slide-content">
                                <span class="timeline-year">2016</span>
                                <h4 class="timeline-title">Our nice super title</h4>
                                <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url(../swiper/images/04.jpg);" data-year="2017">
                            <div class="swiper-slide-content"><span class="timeline-year">2017</span>
                                <h4 class="timeline-title">Our nice super title</h4>
                                <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url(../swiper/images/05.jpg);" data-year="2018">
                            <div class="swiper-slide-content"><span class="timeline-year">2018</span>
                                <h4 class="timeline-title">Our nice super title</h4>
                                <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url(../swiper/images/06.jpg);" data-year="2019">
                            <div class="swiper-slide-content"><span class="timeline-year">2019</span>
                                <h4 class="timeline-title">Our nice super title</h4>
                                <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
       
        <div class="main-desc">
            <center><h3 class="main-title">六国论  《苏洵》</h3></center>
            <p>
                六国破灭，非兵不利 ，战不善，弊在赂秦。赂秦而力亏，破灭之道也。或曰：六国互丧，率赂秦耶？
                曰：不赂者以赂者丧，盖失强援，不能独完。故曰：弊在赂秦也。
            </p>
            <p>
                秦以攻取之外，小则获邑，大则得城。较秦之所得，与战胜而得者，其实百倍；诸侯之所亡，与战败而亡者，其实亦百倍。
                则秦之所大欲，诸侯之所大患，固不在战矣。
                思厥先祖父，暴霜露，斩荆棘，以有尺寸之地。子孙视之不甚惜，举以予人，如弃草芥。
                今日割五城，明日割十城，然后得一夕安寝。起视四境，而秦兵又至矣。
                然则诸侯之地有限，暴秦之欲无厌，奉之弥繁，侵之愈急。故不战而强弱胜负已判矣。
                至于颠覆，理固宜然。古人云：“以地事秦，犹抱薪救火，薪不尽，火不灭。”此言得之。
            </p>
            <p>
                齐人未尝赂秦，终继五国迁灭，何哉？与嬴而不助五国也。
                五国既丧，齐亦不免矣。燕赵之君，始有远略，能守其土，义不赂秦。
                是故燕虽小国而后亡，斯用兵之效也。至丹以荆卿为计，始速祸焉。
                赵尝五战于秦，二败而三胜。后秦击赵者再，李牧连却之。洎牧以谗诛，邯郸为郡，惜其用武而不终也。
                且燕赵处秦革灭殆尽之际，可谓智力孤危，战败而亡，诚不得已。
                向使三国各爱其地，齐人勿附于秦，刺客不行，良将犹在，则胜负之数，存亡之理，当与秦相较，或未易量。
                呜呼！以赂秦之地，封天下之谋臣，以事秦之心，礼天下之奇才，并力西向，则吾恐秦人食之不得下咽也。
                悲夫！有如此之势，而为秦人积威之所劫，日削月割，以趋于亡。为国者无使为积威之所劫哉！
            </p>
            <p>
                夫六国与秦皆诸侯，其势弱于秦，而犹有可以不赂而胜之之势。
                苟以天下之大，下而从六国破亡之故事，是又在六国下矣。
            </p>
        </div>

        <div class="main-timeline">
            <?php 
                $mysql = new Mysql();
                
                $articleArr = $mysql->getArticles();
                foreach ($articleArr as $key => $value) {
                    // echo $value['title'];
                    echo '<a class="timeline-item" href="./article.php?article_id='.$value['id'].'">第' . intval($key + 1)  . '篇博文标题 -- '.$value['title'].'</a>';
                }
            ?>
            
            <!-- <a class="timeline-item" href="./article.php">第一篇博文标题</a> -->
        </div>

    </div>
    
    <?php include_once("./footer.php")?>
</body>
<style>
.main {
    margin: auto;
    width: 80vw;
    max-width: 1200px;
    overflow: hidden;
}

.main-image {
    width: 100%;
    margin-top: 5vh;
}

.main-desc {
    text-indent: 25px;
    margin-top: 5vh;
    letter-spacing: 2px;
    text-align: justify;
}

.main-timeline {
    margin-top: 5vh;
    width: 100%;
}

.timeline-item {
    position: relative;
    text-decoration: none;
    display: block;
    margin-top: 10px;
    width: 100%;
    height: 100px;
    line-height: 100px;
    cursor: pointer;
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
    background: #FF4500;
    border-radius: 50%;
}
</style>


<!-- Demo styles -->
<style>

    .container {
        margin-top: 5vh;
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #fff;
        flex-direction: column;
    }
    
    .timeline {
        width: 100%;
        background-color: #fff;
        box-shadow: 0 5px 25px 5px rgba(0, 0, 0, 0.2);
    }
    
    .timeline .swiper-container {
        height: 600px;
        width: 100%;
        position: relative;
    }
    
    .timeline .swiper-wrapper {
        transition: 2s cubic-bezier(0.68, -0.4, 0.27, 1.34) 0.2s;
    }
    
    .timeline .swiper-slide {
        position: relative;
        color: #fff;
        overflow: hidden;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }
    
    .timeline .swiper-slide::after {
        content: "";
        position: absolute;
        z-index: 1;
        right: -115%;
        bottom: -10%;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        box-shadow: -230px 0 150px 60vw rgba(0, 0, 0, 0.7);
        border-radius: 100%;
    }
    
    .timeline .swiper-slide-content {
        position: absolute;
        text-align: center;
        width: 80%;
        max-width: 310px;
        right: 50%;
        top: 13%;
        -webkit-transform: translate(50%, 0);
        transform: translate(50%, 0);
        font-size: 12px;
        z-index: 2;
    }
    
    .timeline .swiper-slide .timeline-year {
        display: block;
        font-style: italic;
        font-size: 42px;
        margin-bottom: 50px;
        -webkit-transform: translate3d(20px, 0, 0);
        transform: translate3d(20px, 0, 0);
        color: #d4a024;
        font-weight: 300;
        opacity: 0;
        transition: .2s ease .4s;
    }
    
    .timeline .swiper-slide .timeline-title {
        font-weight: 800;
        font-size: 34px;
        margin: 0 0 30px;
        opacity: 0;
        -webkit-transform: translate3d(20px, 0, 0);
        transform: translate3d(20px, 0, 0);
        transition: .2s ease .5s;
    }
    
    .timeline .swiper-slide .timeline-text {
        line-height: 1.5;
        opacity: 0;
        -webkit-transform: translate3d(20px, 0, 0);
        transform: translate3d(20px, 0, 0);
        transition: .2s ease .6s;
    }
    
    .timeline .swiper-slide-active .timeline-year {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        transition: .4s ease 1.6s;
    }
    
    .timeline .swiper-slide-active .timeline-title {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        transition: .4s ease 1.7s;
    }
    
    .timeline .swiper-slide-active .timeline-text {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        transition: .4s ease 1.8s;
    }
    
    .timeline .swiper-pagination {
        right: 15% !important;
        height: 100%;
        display: none;
        flex-direction: column;
        justify-content: center;
        font-style: italic;
        font-weight: 300;
        font-size: 18px;
        z-index: 1;
    }
    
    .timeline .swiper-pagination::before {
        content: "";
        position: absolute;
        left: -30px;
        top: 0;
        height: 100%;
        width: 1px;
        background-color: rgba(255, 255, 255, 0.2);
    }
    
    .timeline .swiper-pagination-bullet {
        width: auto;
        height: auto;
        text-align: center;
        opacity: 1;
        background: transparent;
        color: #d4a024;
        margin: 15px 0 !important;
        position: relative;
    }
    
    .timeline .swiper-pagination-bullet::before {
        content: "";
        position: absolute;
        top: 8px;
        left: -32.5px;
        width: 6px;
        height: 6px;
        border-radius: 100%;
        background-color: #d4a024;
        -webkit-transform: scale(0);
        transform: scale(0);
        transition: .2s;
    }
    
    .timeline .swiper-pagination-bullet-active {
        color: #d4a024;
    }
    
    .timeline .swiper-pagination-bullet-active::before {
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    
    .timeline .swiper-button-next,
    .timeline .swiper-button-prev {
        background-size: 20px 20px;
        top: 15%;
        width: 20px;
        height: 20px;
        margin-top: 0;
        z-index: 2;
        transition: .2s;
    }
    
    .timeline .swiper-button-prev {
        left: 8%;
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23d4a024'%2F%3E%3C%2Fsvg%3E");
    }
    
    .timeline .swiper-button-prev:hover {
        -webkit-transform: translateX(-3px);
        transform: translateX(-3px);
    }
    
    .timeline .swiper-button-next {
        right: 8%;
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23d4a024'%2F%3E%3C%2Fsvg%3E");
    }
    
    .timeline .swiper-button-next:hover {
        -webkit-transform: translateX(3px);
        transform: translateX(3px);
    }
    
    @media screen and (min-width: 768px) {
        .timeline .swiper-slide::after {
            right: -30%;
            bottom: -8%;
            width: 240px;
            height: 50%;
            box-shadow: -230px 0 150px 50vw rgba(0, 0, 0, 0.7);
        }
        .timeline .swiper-slide-content {
            right: 30%;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 310px;
            font-size: 11px;
            text-align: right;
        }
        .timeline .swiper-slide .timeline-year {
            margin-bottom: 0;
            font-size: 32px;
        }
        .timeline .swiper-slide .timeline-title {
            font-size: 46px;
            margin: 0;
        }
        .timeline .swiper-pagination {
            display: flex;
        }
        .timeline .swiper-button-prev {
            top: 15%;
            left: auto;
            right: 15%;
            -webkit-transform: rotate(90deg) translate(0, 10px);
            transform: rotate(90deg) translate(0, 10px);
        }
        .timeline .swiper-button-prev:hover {
            -webkit-transform: rotate(90deg) translate(-3px, 10px);
            transform: rotate(90deg) translate(-3px, 10px);
        }
        .timeline .swiper-button-next {
            top: auto;
            bottom: 15%;
            right: 15%;
            -webkit-transform: rotate(90deg) translate(0, 10px);
            transform: rotate(90deg) translate(0, 10px);
        }
        .timeline .swiper-button-next:hover {
            -webkit-transform: rotate(90deg) translate(3px, 10px);
            transform: rotate(90deg) translate(3px, 10px);
        }
    }
    
    @media screen and (min-width: 1024px) {
        .timeline .swiper-slide::after {
            right: -20%;
            bottom: -12%;
            width: 240px;
            height: 50%;
            box-shadow: -230px 0 150px 39vw rgba(0, 0, 0, 0.7);
        }
        .timeline .swiper-slide-content {
            right: 25%;
        }
    }
</style>



<!-- Swiper JS -->
<script src="../swiper/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var timelineSwiper = new Swiper('.timeline .swiper-container', {
        direction: 'vertical',
        loop: true,
        speed: 1200,
        mousewheelControl: true,
        pagination: '.swiper-pagination',
        paginationBulletRender: function(swiper, index, className) {
            var year = document.querySelectorAll('.swiper-slide')[index].getAttribute('data-year');
            return '<span class="' + className + '">' + year + '</span>';
        },
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        breakpoints: {
            768: {
                direction: 'horizontal',
            }
        }
    });
</script>
</html>