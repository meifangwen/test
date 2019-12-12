<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"D:\zm\PHPTutorial\WWW\WWW\001\public/../application/home\view\about\index.html";i:1564392399;s:70:"D:\zm\PHPTutorial\WWW\WWW\001\application\home\view\public\header.html";i:1564393274;s:70:"D:\zm\PHPTutorial\WWW\WWW\001\application\home\view\public\footer.html";i:1564392399;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/home/css/base.css">
    <link rel="stylesheet" href="/static/home/css/swiper.css">
    <link rel="stylesheet" href="/static/home/css/about.css">
    <title>关于我们</title>
</head>

<body>
<!-- 头部 -->
<!-- 头部 -->
<div class="header">
    <div class="header-page w">
        <a href="/" class="header-logo fl">
            <i class="fl"></i>
            <span class="fl">国安较真(广东)科技有限公司</span>
        </a>
        <ul class="header-nav fr">
            <li><a href="/" <?php if($current == Index): ?>class="active"<?php endif; ?>>首页</a></li>
            <li><a href="<?php echo url('home/trend/index'); ?>" <?php if($current == Trend): ?>class="active"<?php endif; ?>>国安溯源</a></li>
            <!--<li><a href="<?php echo url('home/about/index'); ?>" <?php if($current=='About' || $current=='News'){echo "class='active'";}  ?> >关于我们</a></li>-->
            <li><a href="<?php echo url('home/about/index'); ?>" <?php if($current == About): ?>class="active"<?php endif; ?> >关于我们</a></li>
            <li><a href="<?php echo url('home/news/index'); ?>" <?php if($current == News): ?>class="active"<?php endif; ?>>新闻资讯</a></li>
            <li>
                <!--<a href="#"><img src="/static/home/images/tu2@2x.png" alt=""></a>-->
            </li>
        </ul>
    </div>
</div>
<!-- banner -->
<div class="swiper-container banner">
    <div class="swiper-wrapper">
        <?php foreach ($banner as $key => $value) {?>
        <div class="swiper-slide"><img src="<?php echo UPLOADS.$value['src']?>" alt=""></div>
        <?php }?>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-pagination"></div>
</div>
<!--加载滑动js-->
<script src="/static/home/js/swiper.js"></script>
<!-- 关于我们 -->
<div class="about">
    <div class="about-me w">
        <div class="about-msg">
            <h3>关于我们</h3>
            <p>
                国安较真（广东）科技有限公司是一家以互联网区块链技术应用为核心，通过自主研发的亚洲领先的
                溯源技术和海量数据支撑的认证体系，为企业和用户搭建资金流、信息流和实物流有效融合的，线上
                销售和线下服务为一体的分享型新零售综合性电商平台。
            </p>
            <a href="#">
                LEARN MORE
            </a>
        </div>

    </div>
</div>
<!-- 企业文化 -->
<div class="culture w clearfix">
    <div class="culture-l fl">
        <img src="/static/home/images/1@32x.png" alt="">
    </div>
    <div class="culture-r fl">
        <h3>企业文化</h3>
        <div class="culture-r-page">
            <p>
                诚信、成就，
            </p>
            <p>
                专业、专注，
            </p>
            <p>
                自信、自强，
            </p>
            <p>
                共享、共盈，
            </p>
        </div>
    </div>
</div>
<!-- 企业愿景 -->
<div class="circulate" style="background: url('/static/home/images/1@222x.png') no-repeat;background-size: contain;">
    <div class="circulate-content w">
        <h3>企业愿景</h3>
        <p>
            致力于发展成为一家受人尊敬的、具有创造力和创新精神的科
            技型企业构建全球化、标准化的溯源公共服务体系，打造行业
            内最具价值和影响力的品牌！
        </p>
        <a href="#">
            MORE
        </a>
    </div>
</div>
<!-- 企业使命 -->
<div class="mission w clearfix">
    <div class="mission-l fl">
        <div class="mission-l-b">
            <img src="/static/home/images/xx33@2x.png" alt="">
        </div>
    </div>
    <div class="mission-r fl">
        <h3>企业使命</h3>
        <p>食品溯源及公司最新活动集锦，尽在于此</p>
        <div class="line"></div>
        <p>
            为国家分忧，为企业解困
        </p>
        <p>
            为消费者造福，为经营者谋利
        </p>
        <a href="#">
            MORE
        </a>
    </div>

</div>
<!-- 企业目标  -->
<div class="goal clearfix">
    <div class="goal-content fr">
        <h3>企业目标 </h3>
        <div class="line"></div>
        <p>
            3年内服务100万家中小型企业，帮助其增加25%的毛利率
        </p>
        <p>3年内服务1亿名消费者，帮助其节省40%的生活成本
        </p>
        <p> 3年内解决1/10以上国人的食品安全问题</p>
        <a href="#">MORE</a>
    </div>
</div>
<!-- 企业大事记 -->
<div class="bigGreat">
    <div class="bigGreat-t">
        <h2>企业大事记</h2>
        <div class="line"></div>
    </div>
    <div class="swiper-container bigGreat-s">
        <div class="swiper-wrapper">
            <?php foreach($events as $key => $value){?>
            <div class="swiper-slide swiper-s">
                <?php foreach($value as $k => $v){if($k<2){?>
                <div class="swiper-s-page">
                    <div class="page-radio">
                        <div class="page-radio-n"></div>
                    </div>
                    <div class="page-msg">
                        <h3><?php echo $v['date']?></h3>
                        <p><?php echo $v['event']?></p>
                        <div class="msg-san"></div>
                    </div>
                </div>
                <?php }else{?>
                <div class="swiper-s-page">
                    <div class="page-msg">
                        <h3><?php echo $v['date']?></h3>
                        <p><?php echo $v['event']?></p>
                        <div class="msg-san"></div>
                    </div>
                    <div class="page-radio">
                        <div class="page-radio-n"></div>
                    </div>
                </div>
                <?php }}?>
            </div>
            <?php }?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
<!-- 经营理念 -->
<div class="share-side">
    <div class="share-side-content w">
        <div class="share-side-content-title">
            <h3>经营理念</h3>
            <div class="line"></div>
        </div>
        <div class="share-side-content-page">
            <div class="share-side-content-page-l"
                 style="background: url('/static/home/images/1@2156x.png') no-repeat;background-size: contain;">
                <div class="share-side-content-page-l-box">

                </div>
            </div>
            <div class="share-side-content-page-r">
                <div class="line"></div>
                <p>
                    共享产生财富，分享创造价值
                </p>
                <p>
                    每位消费者，都可以成为经营者
                </p>
                <p>
                    让创业和赚钱像呼吸应用简单而自然
                </p>
                <p>
                    吃得安心 用得放心 赚得开心 活得舒心
                </p>
                <a href="#">MROE</a>
            </div>
        </div>
    </div>
</div>




<!-- 底部 -->
<!-- 底部 -->
<div class="footer">
    <div class="footer-content w clearfix">
        <div class="footer-l fl">
            <h3>联系我们</h3>
            <div class="msg">
                <p>
                    邮箱：3620180423@qq.com
                </p>
                <p>
                    新浪微博：https://weibo.com/u/7209273002
                </p>
                <p>
                    联系方式：020-31602931
                </p>
            </div>
        </div>
        <div class="footer-r fr clearfix">
            <div class="footer-r-kf fr">
                <div class="two">
                    <img src="/static/home/images/kfer@2x.png" alt="">
                </div>
                <div class="icon"></div>
                <p>官方客服微信</p>
            </div>
            <div class="footer-r-wx fr">
                <div class="two">
                    <img src="/static/home/images/wxgzh@22x.png" alt="">
                </div>
                <div class="icon"></div>
                <p>微信公众号</p>
            </div>

        </div>
    </div>
    <p class="footer-copy w">
        <span>&copy;国安较真（广东）科技有限公司</span>
        <i>粤ICP备19007922号</i>
    </p>
</div>
</body>

</html>
<script src="/static/home/js/jquery-1.12.2.js"></script>
<script src="/static/home/js/swiper.js"></script>
<script src="/static/home/js/about.js"></script>