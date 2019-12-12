<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"D:\thinkphp\public/../application/home\view\trend\index.html";i:1559199090;}*/ ?>
<!DOCTYPE html>
<html lang="zh" class="jz_screen_pc">
<head>
<title>熵云链</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-Control" content="no-transform">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="format-detection" content="telephone=no,email=no,address=no">
<meta name="renderer" content="webkit">
<meta property="og:url" content="http://www.zsepoch.com">
<meta name="description" itemprop="description" content="熵云链"/>
<meta itemprop="name" content="熵云链"/><meta name="keywords" content="熵云链"/>
<link href="<?php echo config('static_admin'); ?>/css/video.css" rel="stylesheet">

<!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
<script src="<?php echo config('static_admin'); ?>/js/video.js"></script>
<script src="<?php echo config('static_admin'); ?>/js/video1.js"></script>
<script type="text/javascript">
    (function() { 
        var fs = document.createElement("script"); 
        fs.src = "<?php echo config('static_home'); ?>/fe.faisys.com/jssdk_1_0/js/hawkEye.min.js?v=201905161925";
        window.FAI_HAWK_EYE = {}; window.FAI_HAWK_EYE.jssdk_report_url = "/report.fkw.com/js/report"; 
        window.FAI_HAWK_EYE.jssdk_appid = 3019; 
        window.FAI_HAWK_EYE.fai_aid = 16934065; 
        window.FAI_HAWK_EYE.fai_bs_aid = 16934065;
        window.FAI_HAWK_EYE.fai_bs_id = 5; 
        window.FAI_HAWK_EYE.fai_bs_wid = 500; 
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(fs, s);
    })();
</script>
<meta content="always" name="referrer">

<script type="text/javascript" src="<?php echo config('static_home'); ?>/fe.faisys.com/browserChecked_1_0/js/browserCheck.min.js?v=201812191155"></script>
<script type="text/javascript"> 
    var notSupportList = [];
        dogSrc = 1;
        version = 9;

    if(!BrowserChecked({reverse:true,notSupportList:[{name:"ie",version:version}]}).isSupport){
        var xhr = new XMLHttpRequest();            
        xhr.open('GET', '/ajax/log_h.jsp?cmd=dog&dogId=200696&dogSrc=' + dogSrc, true);
        xhr.onreadystatechange = function() {
          // xhr.readyState == 4说明请求已完成   
        };
        xhr.send();
        window.location.href = "lvBrowser.jsp?url="+encodeURIComponent(location.href)+"&v="+version;
    }
</script>

<style type="text/css">
    .jz_toolbar .wx_qr_code{
        background-image:url("");
    }
    .jz_toolbar .wx_qr_logo{
        background-image:url("/jzas.faisys.com/image/v2/jz_logo.jpg");
    }
</style>
<link type="text/css" href="<?php echo config('static_home'); ?>/g-2.ss.faisys.com/css/rcss/fontsIcon.min.css?v=201905221254" rel="stylesheet" />
<link type="text/css" href="<?php echo config('static_home'); ?>/g-2.ss.faisys.com/css/rcss/base.min.css?v=201905221254" rel="stylesheet" />
<link type="text/css" href="<?php echo config('static_home'); ?>/g-2.ss.faisys.com/css/rcss/common/video-js.min.css?v=201905221254" rel="stylesheet" />
<link type="text/css" href="<?php echo config('static_home'); ?>/g-2.ss.faisys.com/css/rcss/video.min.css?v=201905221254" rel="stylesheet" />
<link type="text/css" href="<?php echo config('static_home'); ?>/g-2.ss.faisys.com/css/rcss/slidePanel.min.css?v=201905221254" rel="stylesheet" />
<link type="text/css" href="<?php echo config('static_home'); ?>/g-2.ss.faisys.com/css/site/poshytipAndmCustomScrollbar.min.css?v=201905221254" rel="stylesheet" />
<link type="text/css" href="<?php echo config('static_home'); ?>/g-2.ss.faisys.com/css/rcss/materialFactory.min.css?v=201905221254" rel="stylesheet" />
<link type='text/css' href='//g-2.ss.faisys.com/css/rcss/moduleAnimation.min.css?v=201905221254' rel='stylesheet' />
<link type="text/css" href="<?php echo config('static_home'); ?>/jzresponsivecusstyle.jsp?colId=2&extId=0" rel="stylesheet" />


<style id="themeControl">
    .jz_theme_font_color{color:#4c4c4c;}
    .jz_theme_bg_color{background-color:#4c4c4c;}
    .jz_theme_border_color{border-color:#4c4c4c;}
    .jz_theme_focus_border_color:focus{border-color:#4c4c4c;}
    .jz_theme_hover_font_color:hover{color:#4c4c4c;}
    .jz_hover.jz_theme_bg_hover_color:hover{background-color:#4c4c4c;}
    .jz_hover.jz_theme_font_hover_color:hover{color:#4c4c4c;}
    .jz_hover.jz_theme_border_hover_color:hover{border-color:#4c4c4c;}
    .jz_focus.jz_theme_focus_border_color:focus{border-color:#4c4c4c;}
</style>

<script>
    // 访客态链接跳转   
    document.addEventListener("click", function(event){
        for(var i in event.path){
            var node = event.path[i];
            if(node.nodeName === "A"){
                // 点击A标签
                var href = node.getAttribute("href");
                if(!href) return;
                if(
                    ( window.innerWidth <= 768 || window.self != window.top ) &&
                   !( href.indexOf('http:') > -1 || href.indexOf('https:') > -1 )
                ){
                    // 手机或者内嵌iframe点击链接时取消新页面打开（站内链接）
                    event.preventDefault();
                    location.href = href;
                }
            }
        }
    }, false);
    document.addEventListener('touchmove',function(event){event.preventDefault(); },false);
</script>

    
</head>
<body>
    <script type="text/javascript" src="<?php echo config('static_home'); ?>/g-1.ss.faisys.com/js/jzUtils.min.js?v=201904171451"></script>
    <script>
        Fai = {};
        Fai.top = window;
        Root = {};
        JZ = {};
        _global = {};
        Comm = {};
        _temporary = {};    //临时数据
        _props = {};
    </script>

    <div id="jzWebContainer" class="jz_web_container jz_col_2" >
        <div id="gridHeader" class="jz_web_header g_header g_header__static">
            <div class="header_content g_header_content J_headerContent g_header_content_fixed_bg_def">
                <div class='jz_web_row_line jz_web_row_line_pc1'>
                    <div id='row3' class='jz_web_row jz_web_row3 jz_section_row'>
                        <div class='jz_web_row__content'>
                            <div class='jz_web_col jz_web_col0 jz_col_6' _index=0>
                                <div class='web_col_content'>
                                    <div class='jz_website_title_wrap'>
                                        <div id='jz_website_title' class='jz_website_title type_1'>
                                            <div class='logo_wrap'>
                                                <a href='/index.jsp'  >
                                                    <img class='logo_img' src="/upload/<?php echo $content['logo']; ?>" ></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='jz_web_col jz_web_col1 jz_col_4 jz_col_sys_section' _index=1 style="width: 39%;">
                                    <div class='web_col_content'>
                                        <div class='jz_nav_wrap jz_nav_layout1 visit_mode'>
                                        <div class='jz_nav_menu'>
                                            <div class='menu_body'>
                                                <div class='nav_menu_item menu_item_top'>
                                                    <div class='item_rect'></div>
                                                </div>
                                                <div class='nav_menu_item menu_item_center'>
                                                    <div class='item_rect'></div>
                                                </div>
                                                <div class='nav_menu_item menu_item_bottom'>
                                                    <div class='item_rect'></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id='jz_nav' class='jz_nav'>
                                            <div class='jz_nav_content '>
                                                <i class='nav_icon_prev nav_icon_direction'></i>
                                                <i class='nav_icon_next nav_icon_direction'></i>
                                                <ul class='jz_nav_list'>
                                                    <li class='jz_nav_item  jz_hover jz_theme_border_hover_color jz_theme_font_hover_color nav_item2  jz_nav_item_selected jz_theme_border_color jz_theme_font_color ' _colid='2'>
                                                        <div class='nav_item_text_wrap'><a class='nav_item_text ' title='' href='/index.jsp' target='_self'>首 &nbsp;页</a> </div>
                                                    </li>
                                                    <li class='nav_item_septal'></li>
                                                    <li class='jz_nav_item  jz_hover jz_theme_border_hover_color jz_theme_font_hover_color nav_item103  ' _colid='103'>
                                                        <div class='nav_item_text_wrap'>
                                                            <a class='nav_item_text ' title='' href='<?php echo url("/home/messages/index"); ?>' target='_self'>留言板</a>
                                                        </div>
                                                    </li>
                                                    <li class='jz_nav_item  jz_hover jz_theme_border_hover_color jz_theme_font_hover_color nav_item103  ' _colid='103'>
                                                        <div class='nav_item_text_wrap'>
                                                            <a class='nav_item_text ' title='' href='<?php echo url("/home/trend/index"); ?>' target='_self'>溯源趋势</a>
                                                        </div>
                                                    </li>
                                                    <li class='jz_nav_item  jz_hover jz_theme_border_hover_color jz_theme_font_hover_color nav_item103  ' _colid='103'>
                                                        <div class='nav_item_text_wrap'>
                                                            <a class='nav_item_text ' title='' href='<?php echo url("/home/plan/index"); ?>' target='_self'>溯源方案</a>
                                                        </div>
                                                    </li>
                                                    <li class='nav_item_septal'></li>
                                                    <li class='jz_nav_item  jz_hover jz_theme_border_hover_color jz_theme_font_hover_color nav_item104  ' _colid='104'>
                                                        <div class='nav_item_text_wrap'>
                                                            <a class='nav_item_text ' title='' href='/download/chinese.pdf' target='_self'>白皮书下载</a>  
                                                        </div>
                                                    </li>
                                                    <li class='jz_nav_item  jz_hover jz_theme_border_hover_color jz_theme_font_hover_color nav_item104  ' _colid='104'>
                                                        <div class='nav_item_text_wrap'>
                                                            <a class='nav_item_text ' title='' href='<?php echo url("/home/relation/index"); ?>' target='_self'>联系我们</a>  
                                                        </div>
                                                    </li>
                                                    <li class='nav_item_septal'></li>
                                                    <li class='jz_nav_item  jz_hover jz_theme_border_hover_color jz_theme_font_hover_color nav_item106  nav_child_item ' _colid='106'>
                                                        <div class='nav_item_text_wrap'>
                                                            <i class='icon_nav_item faisco-icons-S000106'></i>
                                                            <a class='nav_item_text  nav_child_item_text' title='' href='http://uuhdx.com/h-col-116.html' target='_self'>关 &nbsp;于</a>
                                                            <ul class='sub_nav_list' _parentid='106'>
                                                                <div class='sub_nav_wrap'></div>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class='mobi_nav_blocker'></div>
                                    </div>
                                </div>
                            </div>
                            <div style="line-height: 65px;">
                                <a href="<?php echo url('/home_en/index/index'); ?>" style="font-size: 14px;color: red;">英文</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="g_header_placeholder J_headerPlaceholder"></div>
        </div>

        <div class="jz_web_banner">
            <div id='jz_banner' class='jz_banner jz_hide_flv'>
                <div class='banner_pic'>
                    <div class='pic_switch_btn_area banner_short_line_wrap jz_pc_short_line  jz_mobi_same_pc_banner'><a index='0' class='pic_short_line_btn pic_short_line_0 pic_short_line_btn_activity'>
                        <div class='pic_short_line'></div></a>
                        <a index='1' class='pic_short_line_btn pic_short_line_1'><div class='pic_short_line'></div></a>
                        <a class='pic_arrow_btn pic_arrow_btn_prev'></a>
                        <a class='pic_arrow_btn pic_arrow_btn_next'></a></div>
                        <div class='banner_pic_group jz_pc_banner_group  jz_mobi_same_pc_banner'>
                            <div class='banner_pic_item_wrap banner_pic_0'>
                                <div class='banner_pic_item'>
                                    <div class='banner_module_zone'><object>
                                        <div class='jz_web_row_line jz_web_row_line_pc1'>
                                            <div id='row284' class='jz_web_row jz_web_row1 jz_web_row_mobi1 jz_section_row'>
                                                <div class='jz_web_row__content'>
                                                    <div class='jz_web_col jz_web_col0' _index=0>
                                                        <div class='web_col_content web_col_content_empty'> 
                                                            <img src="<?php echo config('static_home'); ?>/img/1.png">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </object>
                                </div>
                            </div>
                        </div>
                        <div class='banner_pic_item_wrap banner_pic_1'>
                            <div class='banner_pic_item'>
                                <div class='banner_module_zone'>
                                    <object>
                                        <div class='jz_web_row_line jz_web_row_line_pc1'>
                                            <div id='row283' class='jz_web_row jz_web_row1 jz_web_row_mobi1 jz_section_row'>
                                                <div class='jz_web_row__content'>
                                                <div class='jz_web_col jz_web_col0' _index=0>
                                                    <div class='web_col_content web_col_content_empty'><img src="<?php echo config('static_home'); ?>/img/2.png"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </object>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jz_web_content">

            <div class="jz_web_row_line jz_web_row_line_pc1">
                <div id="row239" class="jz_web_row jz_web_row2 jz_module_row">
                    <div class="jz_web_row__content">
                        <div class="jz_web_col jz_web_col0 jz_col_6" _index="0">
                            <div class="web_col_content">
                                <div id="module403" class="form jz_module  jz_module_style_6">
                                    <div class="module_wrap">
                                        <div class="module_content ">
                                            <div class="module_text_content">
                                                <div class="fkeditor-wrap">
                                                    <div class="fk-editor"><?php echo $trendData2[0]['title']; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="module404" class="form jz_module  jz_module_style_6">
                                    <div class="module_wrap">
                                        <div class="module_content ">
                                            <div class="module_text_content">
                                                <div class="fkeditor-wrap">
                                                    <div class="fk-editor">
                                                        <div style="font-size: 14px; line-height: 48px;">
                                                            <span style="font-size: 16px; text-align: justify;">
                                                                <font color="#4e4d4d">
                                                                    <span style="font-size: 14px;"><?php echo $trendData2[0]['content']; ?></span>
                                                                    <font style="font-size: 14px;">。</font>
                                                                </font>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jz_web_col jz_web_col1 jz_col_6" _index="1">
                            <div class="web_col_content">
                                <div id="module406" class="form jz_module  jz_module_style_20">
                                    <div class="module_wrap">
                                        <div class="module_content ">
                                            <div class="flv_content">
                                                <div class="online_flv online_flv_406">
                                                    <div class="direct_play_flv">
                                                        <video id='my-video' class='video-js' controls="controls" controls="controls" preload='auto' width="200px" height='250px'  data-setup='{}'>
                                                            <source src="/video/<?php echo $trendData2[0]['src']; ?>" type='video/mp4'>
                                                            <source src="<?php echo config('static_home'); ?>/img/open.png" type="video/ogg">
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        <div class="jz_web_row_line jz_web_row_line_pc1">
            <div id="row107" class="jz_web_row jz_web_row1 jz_module_row">
                <div class="jz_web_row__content">
                    <div class="jz_web_col jz_web_col0" _index="0">
                        <div class="web_col_content">
                            <div id="module338" class="form jz_module  jz_module_style_17">
                                <div class="module_wrap">
                                    <div class="module_content">
                                        <div leninrow="2" projectid="338" class="module_content_detail module_news_list_content module_news_list_style1">
                                            <div class="news_list_wrap">
                                                <?php foreach($newsData as $v): ?>
                                                <div data-id="2" class="news_list_item_line jz_hover jz_theme_font_hover_color news_list_item_line_num news_list_item_line_num2 news_list_item_line_pic">
                                                    <a href="nd.jsp?id=2&amp;formMid=338" target="_blank" class="news_list_item_link"></a> 
                                                    <div class="news_list_item_inner">
                                                        <div class="news_list_img_box">
                                                            <div class="news_list_img" data-was-processed="true" style='background-image: url("/news/<?php echo $v['img']; ?>");'></div>
                                                        </div>
                                                        <div class="news_list_item_content">
                                                            <div class="news_list_item_header">
                                                                <h4 class="news_list_item_title jz_theme_font_hover_color jz_hover"><?php echo $v['title']; ?></h4> 
                                                                <span class="news_list_item_date"><?php echo date("Y-m-d H:i",$v['time']); ?></span>
                                                            </div> 
                                                            <div class="news_list_item_summery"><?php echo $v['content']; ?></div>
                                                            <div class="news_list_item_ext_line">
                                                                <div class="news_list_item_arrow_link">
                                                                    <div class="news_list_item_arrow"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jz_web_row_line jz_web_row_line_pc1">
           <div id="row245" class="jz_web_row jz_web_row1 jz_web_row_mobi1 jz_module_row">
            <div class="jz_web_row__content">
             <div class="jz_web_col jz_web_col0" _index="0">
              <div class="web_col_content">
               <div id="module432" class="form jz_module  jz_module_style_6">
                <div class="module_wrap">
                 <div class="module_content ">
                  <div class="module_text_content">
                   <div class="fkeditor-wrap">
                    <div class="fk-editor">
                     <div style="text-align: center; line-height: 35px;">
                      最新资讯dsa
                     </div>
                     <div style="text-align: center; font-size: 14px; line-height: 35px;">
                      <font color="#999999">食品溯源及公司最新活动集锦，尽在于此</font>
                     </div>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
               <div id="module433" class="form jz_module  jz_module_style_17">
                <div class="module_wrap">
                 <div class="module_content ">
                  <div leninrow="4" data-server-rendered="true" projectid="433" class="module_content_detail module_news_list_content module_news_list_style0">
                   <div class="news_list_wrap">
                    <div data-id="2" class="news_list_item_line jz_hover jz_theme_font_hover_color">
                     <a href="h-nd-2.html?formMid=433" target="_blank" class="news_list_item_link"></a> 
                     <div class="news_list_item_inner">
                      <!----> 
                      <div class="news_list_item_content">
                       <div class="news_list_item_header">
                        <h4 class="news_list_item_title jz_theme_font_hover_color jz_hover">苏州：五位小伙尿检呈阳性却否认吸毒 原来是鱿鱼包饼里加了罂粟粉</h4> 
                        <span class="news_list_item_date">2019-01-05</span>
                       </div> 
                       <div class="news_list_item_summery">
                        去年年底，苏州市公安局相城分局在清查工作期间，发现一起简单的吸毒案件，嫌疑人尿检呈阳性，但公安民警并未轻易下结论，而是借助司法鉴定，排除了吸毒的可能性。通过进一步深挖真相，最终成功破获一起非法销售……
                       </div> 
                       <!---->
                      </div>
                     </div>
                    </div> 
                    <div class="news_list_parting_line jz_parting_line"></div>
                    <div data-id="4" class="news_list_item_line jz_hover jz_theme_font_hover_color">
                     <a href="h-nd-4.html?formMid=433" target="_blank" class="news_list_item_link"></a> 
                     <div class="news_list_item_inner">
                      <!----> 
                      <div class="news_list_item_content">
                       <div class="news_list_item_header">
                        <h4 class="news_list_item_title jz_theme_font_hover_color jz_hover">浙江台州椒江：保健食品虚假夸大宣传罚款20万元</h4> 
                        <span class="news_list_item_date">2019-01-04</span>
                       </div> 
                       <div class="news_list_item_summery">
                        能降血压、改善心脏功能、治疗慢性肝炎、治疗潜在癌症……小小一瓶胶囊，拥有诸多疗效，这种产品你信吗？
                       </div> 
                       <!---->
                      </div>
                     </div>
                    </div> 
                    <div class="news_list_parting_line jz_parting_line"></div>
                    <div data-id="3" class="news_list_item_line jz_hover jz_theme_font_hover_color">
                     <a href="h-nd-3.html?formMid=433" target="_blank" class="news_list_item_link"></a> 
                     <div class="news_list_item_inner">
                      <!----> 
                      <div class="news_list_item_content">
                       <div class="news_list_item_header">
                        <h4 class="news_list_item_title jz_theme_font_hover_color jz_hover">2018年12个食品安全热点的真相，你都了解吗？</h4> 
                        <span class="news_list_item_date">2019-01-04</span>
                       </div> 
                       <div class="news_list_item_summery">
                        “非洲猪瘟蔓延，猪肉还能吃吗？”“益生菌成了‘无益菌’？”“咖啡是否致癌”“三文鱼标准之争”……
                       </div> 
                       <!---->
                      </div>
                     </div>
                    </div> 
                    <div class="news_list_parting_line jz_parting_line"></div>
                    <div data-id="1" class="news_list_item_line jz_hover jz_theme_font_hover_color">
                     <a href="h-nd-1.html?formMid=433" target="_blank" class="news_list_item_link"></a> 
                     <div class="news_list_item_inner">
                      <!----> 
                      <div class="news_list_item_content">
                       <div class="news_list_item_header">
                        <h4 class="news_list_item_title jz_theme_font_hover_color jz_hover">《中国食品安全发展报告2018》发布 总体稳定，逐步向好，但风险隐患仍较突出</h4> 
                        <span class="news_list_item_date">2019-01-02</span>
                       </div> 
                       <div class="news_list_item_summery">
                        “全国主要食用农产品与食品市场供应继续保持‘总体稳定’的基本态势，质量安全水平继续呈现‘逐步向好’的基本格局，有效保障了人民群众的饮食安全。”这是近日在京发布的《中国食品安全发展报告（2018）》……
                       </div> 
                       <!---->
                      </div>
                     </div>
                    </div> 
                    <!----> 
                    <!---->
                   </div> 
                   <!---->
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
        </div>

    <div id="gridFooter" class="jz_web_footer g_footer">
        <div class='jz_web_row_line jz_web_row_line_pc1'><div id='row109' class='jz_web_row jz_web_row3 jz_module_row'><div class='jz_web_row__content'><div class='jz_web_col jz_web_col0' _index=0><div class='web_col_content'><div id='module338' class='form jz_module  jz_module_style_6'><div class='module_wrap'><div class='module_content '><div class='module_text_content'><div class='fkeditor-wrap'><div class='fk-editor'><div style="text-align: center; font-size: 14px;"><font color="#666666">Address/地址：广东省广州市黄埔区科学大道</font></div><div style="text-align: center; font-size: 14px;"><font color="#666666">                           50号</font><span style="color: rgb(102, 102, 102);">绿地中央广场A3栋1802室</span></div></div></div></div></div></div></div></div></div><div class='jz_web_col jz_web_col1' _index=1><div class='web_col_content'><div id='module339' class='form jz_module  jz_module_style_6'><div class='module_wrap'><div class='module_content '><div class='module_text_content'><div class='fkeditor-wrap'><div class='fk-editor'><div style="text-align: center; font-size: 14px;"><font color="#666666">Tel/联系电话：020-3160 2931</font></div></div></div></div></div></div></div></div></div><div class='jz_web_col jz_web_col2' _index=2><div class='web_col_content'><div id='module340' class='form jz_module  jz_module_style_6'><div class='module_wrap'><div class='module_content '><div class='module_text_content'><div class='fkeditor-wrap'><div class='fk-editor'><div style="text-align: center; font-size: 14px;"><font color="#666666">Mail/邮箱：buyer1yswclc@126.com</font></div><div style="text-align: center; font-size: 14px;"><font color="#666666">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;buyer2yswclc@126.com</font></div></div></div></div></div></div></div></div></div></div></div></div><div class='jz_web_row_line jz_web_row_line_pc1'><div id='row4' class='jz_web_row jz_web_row1 jz_web_row_mobi1 jz_section_row'><div class='jz_web_row__content'><div class='jz_web_col jz_web_col0' _index=0><div class='web_col_content'><div class='s_footer'><p class='s_footer_copyright'>©国安较真（广东）科技有限公司  粤ICP备19007922号</p><p></p></div></div></div></div></div></div>
    </div>

    <div id="jzBackTopCompon"></div> 
</div>

<script src="<?php echo config('static_home'); ?>/g-1.ss.faisys.com/js/rjs/comm/polyfill.min.js?v=201905221254"></script>
<script type="text/javascript" src="<?php echo config('static_home'); ?>/g-1.ss.faisys.com/js/rjs/comm/jquery.min.js?v=201905221254"></script>
<script type="text/javascript" src="<?php echo config('static_home'); ?>/g-1.ss.faisys.com/js/rjs/comm/jquery_ui.min.js?v=201905221254"></script>
<script type="text/javascript" src="<?php echo config('static_home'); ?>/g-1.ss.faisys.com/js/rjs/comm/jquery.mobile.min.js?v=201905221254"></script>
<script src="<?php echo config('static_home'); ?>/g-1.ss.faisys.com/js/rjs/comm/jquery-mousewheel.min.js?v=201905221254"></script>
<script type='text/javascript' src="<?php echo config('static_home'); ?>//g-1.ss.faisys.com/js/rjs/comm/vue.min.js?v=201812051539"></script>
<script src="<?php echo config('static_home'); ?>/g-1.ss.faisys.com/js/rjs/comm/vuex.min.js?v=201905221254"></script>
<script type="text/javascript" src="<?php echo config('static_home'); ?>/g-1.ss.faisys.com/js/rjs/comm/fai.min.js?v=201905221254"></script>
<script type="text/javascript" src="<?php echo config('static_home'); ?>/g-1.ss.faisys.com/js/rjs/r_site.min.js?v=201905221254"></script>
<script type="text/javascript" src="<?php echo config('static_home'); ?>/g-1.ss.faisys.com/js/locale/2052.min.js?v=201905221254"></script>
<script type="text/javascript" src="<?php echo config('static_home'); ?>/g-1.ss.faisys.com/js/comm/SWFUpload2v/jquery.uploadifyNew.min.js?v=201905081359"></script>
<script src="<?php echo config('static_home'); ?>/g-1.ss.faisys.com/js/rjs/comm.min.js?v=201905221254"></script>
<script src="<?php echo config('static_home'); ?>/g-1.ss.faisys.com/js/city2.min.js?v=201905081359"></script>
<script src="<?php echo config('static_home'); ?>/g-1.ss.faisys.com/js/rjs/r_plugins.min.js?v=201905221254"></script>
<script src="<?php echo config('static_home'); ?>/g-1.ss.faisys.com/js/rjs/moduleAnimation.min.js?v=201905221254"></script>
<script id= "onlineMapApi" type="text/javascript" charset="utf-8" src="https://api.map.baidu.com/api?v=2.0&ak=BPPrdn0rN6iz2l1o97PohYt2Q7aOT9lW"></script>
<script type="text/javascript" src="<?php echo config('static_home'); ?>/g-1.ss.faisys.com/js/rjs/r_module.min.js?v=201905221254"></script>
<script src="<?php echo config('static_home'); ?>/g-1.ss.faisys.com/js/rjs/comm/video.min.js?v=201905221254"></script>

<script>    
    var _Global = {};
    _Global.isFreeVer = false;
    _Global.visitorAdData = {};
    var _jzProUrl = '';

        _jzProUrl = 'jz.fkw.com';

    var _resRoot = '//g-0.ss.faisys.com';
    var _manageMode = false;
    if (window._manageMode) {
        //by jser 2018-9-11
        Fai.top._bigAdOptions = {
            "sevenCelebration" : false,
            "sevenKnowMoreUrl" : "http://jz.fkw.com/alliance.html",
            "sevenQQUrl": "http://i.fkw.com/count/agentCount.jsp?s=1",
            "dailyImgUrl": "http://i.fkw.com/jump.jsp?t=40&purchaseFrom=jzFirstPurchasePop#appId=shop&tab=0?fromPageId=3",
            _timer: null,
            delayClickLog: function(){
                clearTimeout(Fai.top._bigAdOptions._timer);
                Fai.top._bigAdOptions._timer = setTimeout(function(){
                    Site.logDog(200623, 8);
                }, 50);
            },
            onShow: function(){
                Site.logDog(200623, 7);
            },
            "onConfirm": function(){
                Fai.top._bigAdOptions.delayClickLog();
            },
            onPanelClick: function(){
                Fai.top._bigAdOptions.delayClickLog();
            }
        }
    }
    if (false) {
        $(function() {
            if (Fai.top.$(".drawLottery").length == 0) {
                Site.popBigAdWindow();  // 弹出免费版引导付费广告             
                 }
        });
    }

    Site.loadCss("/g-2.ss.faisys.com/css/datepicker.min.css?v=201905221254");

    var link = $('#adminHref').attr('href');
    var protocol = window.location.protocol
    var url = window.location.href;
    var path = url.substr(protocol.length);
    var newLink = link + "&_preUrl=" + Fai.encodeUrl(path) + "&mall=false&_preSiteId=" + Fai.top._siteId;
    $('#adminHref').attr('href', newLink);

</script>     
<div class="jz_clear" ></div>
</body>
</html>
