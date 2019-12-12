<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"D:\zm\PHPTutorial\WWW\WWW\001\public/../application/home\view\trend\index.html";i:1564392399;s:70:"D:\zm\PHPTutorial\WWW\WWW\001\application\home\view\public\header.html";i:1564393274;s:70:"D:\zm\PHPTutorial\WWW\WWW\001\application\home\view\public\footer.html";i:1564392399;}*/ ?>
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
    <link rel="stylesheet" href="/static/home/css/national.css">
    <title>国安溯源</title>
</head>

<body>
<!--加载公共头部-->
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
<!-- 从农田到餐桌 -->
<div class="cropland clearfix">
    <div class="cropland-r fr" style="background: url(<?php echo VIDEO.$data[1]['src']?>) no-repeat;
        background-size: contain;"></div>
    <div class="cropland-l fr">
        <h3><?php echo $data[1]['title']; ?></h3>
        <?php echo $data[1]['content']; ?>
    </div>
</div>
<!-- 四个溯源 -->
<div class="four-trace clearfix">
    <div class="one fl" style="background: url(<?php echo VIDEO.$data[2]['src']?>) no-repeat;
        background-size: cover;">
        <h3><?php echo $data[2]['title']; ?></h3>
        <?php echo $data[2]['content']; ?>
    </div>
    <div class="one fl" style="background: url(<?php echo VIDEO.$data[3]['src']?>) no-repeat;
        background-size: cover;">
        <h3><?php echo $data[3]['title']; ?></h3>
        <?php echo $data[3]['content']; ?>
    </div>
    <div class="one fl" style="background: url(<?php echo VIDEO.$data[4]['src']?>) no-repeat;
        background-size: cover;">
        <h3><?php echo $data[4]['title']; ?></h3>
        <?php echo $data[4]['content']; ?>
    </div>
    <div class="one fl" style="background: url(<?php echo VIDEO.$data[5]['src']?>) no-repeat;
        background-size: cover;">
        <h3><?php echo $data[5]['title']; ?></h3>
        <?php echo $data[5]['content']; ?>
    </div>
</div>
<!-- 团队 -->
<div class="team clearfix" style="background: url('/static/home/images/mwQ@2x.png') no-repeat;
    background-size:cover;">
    <div class="ots fl">
        <h2>01</h2>
        <h3>技术团队</h3>
        <p>原支付宝开发团队，拥有全亚洲最先进的溯源技术</p>
    </div>
    <div class="ots fl">
        <h2>02</h2>
        <h3>服务保障</h3>
        <p>云滇律师事务所作为法律顾问</p>
    </div>
    <div class="ots fl">
        <h2>03</h2>
        <h3>团队协作</h3>
        <p>高度团结的队伍，互相扶持的市场</p>
    </div>

</div>
<!-- 信息 -->
<div class="msg-l w">
    <div class="msg-t clearfix">
        <div class="msg-t-l fl">
            <img src="<?php echo VIDEO.$data[6]['src']?>" alt="">
        </div>
        <div class="msg-t-r fl">
            <h3><?php echo $data[6]['title']; ?></h3>
            <?php echo $data[6]['content']; ?>
        </div>
    </div>
    <div class="msg-b clearfix">
        <div class="msg-b-l fl">
            <h3><?php echo $data[7]['title']; ?></h3>
            <?php echo $data[7]['content']; ?>
        </div>
        <div class="msg-b-r fl">
            <img src="<?php echo VIDEO.$data[7]['src']?>" alt="">
        </div>

    </div>
</div>
<!-- 食品溯源意义 -->
<div class="meaning" style="background: url(<?php echo VIDEO.$data[8]['src']?>) no-repeat;background-size: cover;">
    <div class="line-box">
        <div class="line-title">
            <h3><?php echo $data[8]['title']; ?></h3>
            <div class="line"></div>
        </div>
        <div class="line-content clearfix">
            <div class="line-content-l fl">
                <h3><?php echo $data[9]['title']; ?></h3>
                <div class="line"></div>
                <?php echo $data[9]['content']; ?>
            </div>
            <div class="line-content-l fl">
                <h3><?php echo $data[10]['title']; ?></h3>
                <div class="line"></div>
                <?php echo $data[10]['content']; ?>
            </div>
            <div class="line-content-l fl">
                <h3><?php echo $data[11]['title']; ?></h3>
                <div class="line"></div>
                <?php echo $data[11]['content']; ?>
            </div>
        </div>
    </div>
</div>

<!-- 溯源模式 -->
<div class="pattern">
    <div class="pattern-t w">
        <div class="pattern-t-title">
            <h2>溯源模式</h2>
            <div class="line"></div>
        </div>
        <div class="pattern-b-content clearfix">
            <div class="pattern-t-content-line-box fl">
                <div class="pattern-t-content-line-l">
                    <h3><?php echo $data[12]['title']; ?></h3>
                    <div class="line"></div>
                    <?php echo $data[12]['content']; ?>
                </div>
            </div>
            <div class="pattern-t-content-line-r fl">
                <img src="<?php echo VIDEO.$data[12]['src']?>" alt="">
            </div>
        </div>
        <div class="pattern-b-content clearfix">
            <div class="pattern-t-content-line-box fr">
                <div class="pattern-t-content-line-l">
                    <h3><?php echo $data[13]['title']; ?></h3>
                    <div class="line"></div>
                    <?php echo $data[13]['content']; ?>
                </div>
            </div>
            <div class="pattern-t-content-line-r fr">
                <img src="<?php echo VIDEO.$data[13]['src']?>" alt="">
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
<script src="/static/home/js/swiper.js"></script>
<script src="/static/home/js/jquery-1.12.2.js"></script>
<script src="/static/home/js/national.js"></script>