<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:58:"D:\thinkphp\public/../application/admin\view\team\upd.html";i:1559189204;s:43:"../application/admin/view/index/heater.html";i:1559274525;s:43:"../application/admin/view/index/footer.html";i:1558417309;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php echo config('static_admin'); ?>/css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo config('static_admin'); ?>/css/text.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo config('static_admin'); ?>/css/fonts/ptsans/stylesheet.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo config('static_admin'); ?>/css/fluid.css" media="screen" />

<link rel="stylesheet" type="text/css" href="<?php echo config('static_admin'); ?>/css/mws.style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo config('static_admin'); ?>/css/icons/icons.css" media="screen" />

<!-- Demo and Plugin Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php echo config('static_admin'); ?>/css/demo.css" media="screen" />

<link rel="stylesheet" type="text/css" href="<?php echo config('static_admin'); ?>/plugins/colorpicker/colorpicker.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo config('static_admin'); ?>/plugins/jimgareaselect/css/imgareaselect-default.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo config('static_admin'); ?>/plugins/fullcalendar/fullcalendar.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo config('static_admin'); ?>/plugins/fullcalendar/fullcalendar.print.css" media="print" />
<link rel="stylesheet" type="text/css" href="<?php echo config('static_admin'); ?>/plugins/tipsy/tipsy.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo config('static_admin'); ?>/plugins/sourcerer/Sourcerer-1.2.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo config('static_admin'); ?>/plugins/jgrowl/jquery.jgrowl.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo config('static_admin'); ?>/plugins/spinner/spinner.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo config('static_admin'); ?>/css/jui/jquery.ui.css" media="screen" />
<link rel="stylesheet" href="<?php echo config('static_admin'); ?>/plugins/layui-v2.4.5/layui/css/layui.css" media="all">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo config('static_admin'); ?>/css/mws.theme.css" media="screen" />

<!-- JavaScript Plugins -->

<script type="text/javascript" src="<?php echo config('static_admin'); ?>/js/jquery-1.7.1.min.js"></script>

<script type="text/javascript" src="<?php echo config('static_admin'); ?>/plugins/jimgareaselect/jquery.imgareaselect.min.js"></script>
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/plugins/layer/layer.js"></script>
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/plugins/jquery.dualListBox-1.3.min.js"></script>
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/plugins/jgrowl/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/plugins/jquery.filestyle.js"></script>
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/plugins/fullcalendar/fullcalendar.min.js"></script>
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/plugins/jquery.dataTables.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/plugins/flot/excanvas.min.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/plugins/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/plugins/flot/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/plugins/flot/jquery.flot.stack.min.js"></script>
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/plugins/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/plugins/colorpicker/colorpicker.js"></script>
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/plugins/tipsy/jquery.tipsy.js"></script>
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/plugins/sourcerer/Sourcerer-1.2.js"></script>
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/plugins/jquery.placeholder.js"></script>
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/plugins/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/plugins/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/plugins/spinner/ui.spinner.js"></script>
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/js/jquery-ui.js"></script>

<script type="text/javascript" src="<?php echo config('static_admin'); ?>/js/mws.js"></script>
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/js/demo.js"></script>
<script type="text/javascript" src="<?php echo config('static_admin'); ?>/js/themer.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/index/plugins/ueditor/ueditor.config.js?v=2"></script>
<script type="text/javascript" charset="utf-8" src="/static/index/plugins/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/static/index/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>

<link href="<?php echo config('static_admin'); ?>/css/video.css" rel="stylesheet">

<!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
<script src="<?php echo config('static_admin'); ?>/js/video.js"></script>
<script src="<?php echo config('static_admin'); ?>/js/video1.js"></script>

<link href="<?php echo config('static_admin'); ?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo config('static_admin'); ?>/css/page.css" rel="stylesheet" type="text/css" />

<title>后台管理系统</title>

<link rel="icon" href="test.ico"/>
<!-- 网站标题图标 -->
</head>

<body>

    <!-- Themer -->  
    <div id="mws-themer">
        <div id="mws-themer-hide"></div>
        <div id="mws-themer-content">
            <div class="mws-themer-section">
                <label for="mws-theme-presets">Presets</label> <select id="mws-theme-presets"></select>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
                <ul>
                    <li><span>Base Color</span> <div id="mws-base-cp" class="mws-cp-trigger"></div></li>
                    <li><span>Text Color</span> <div id="mws-text-cp" class="mws-cp-trigger"></div></li>
                    <li><span>Text Glow Color</span> <div id="mws-textglow-cp" class="mws-cp-trigger"></div></li>
                </ul>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
                <ul>
                    <li><span>Text Glow Opacity</span> <div id="mws-textglow-op"></div></li>
                </ul>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
                <button class="mws-button red small" id="mws-themer-getcss">Get CSS</button>
            </div>
        </div>
        <div id="mws-themer-css-dialog">
            <div class="mws-form">
                <div class="mws-form-row" style="padding:0;">
                    <div class="mws-form-item">
                        <textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Themer End -->
    

    <!-- Header Wrapper -->
    <div id="mws-header" class="clearfix">
    
        <!-- Logo Wrapper -->
        <div id="mws-logo-container">
            <div id="mws-logo-wrap" style="color:#efefef;font-size: 25px;">
                后台管理系统
            </div>
        </div>
        
        <!-- User Area Wrapper -->
        <div id="mws-user-tools" class="clearfix">
                 
            <!-- User Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
              
            </div>
            
            <!-- User Functions -->
            <div id="mws-user-info" class="mws-inset">
                <div id="mws-user-photo">
                    <img src="<?php echo config('static_admin'); ?>/images/guanliyuan.png" alt="User Photo" />
                </div>
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello,<?php echo session("name"); ?>
                    </div>
                    <ul>
                        <li><a href="<?php echo url('/admin/public/logout'); ?>">退出</a></li>
                        <li><a href="<?php echo url('/home/index/index'); ?>">网站主页</a></li>
                    </ul>
                </div>
            </div>
            <!-- End User Functions -->
            
        </div>
    </div>
    
    <!-- Main Wrapper -->
    <div id="mws-wrapper">
        <!-- Necessary markup, do not remove -->
        <div id="mws-sidebar-stitch"></div>
        <div id="mws-sidebar-bg"></div>
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li ><a href="<?php echo url('/admin/index/index'); ?>" class="mws-i-24 i-home">首页</a></li>
                    <li><a href="<?php echo url('/admin/user/index'); ?>" class="mws-i-24 mws-i-24 i-admin-user-2">系统管理员</a></li>
                    <li><a href="<?php echo url('/admin/news/index'); ?>" class="mws-i-24 i-single-document">文章管理</a></li>
                    <li><a href="<?php echo url('/admin/banner/index'); ?>" class="mws-i-24 i-image-2">幻灯片管理</a></li>
                    <li><a href="<?php echo url('/admin/system/index'); ?>" class="mws-i-24 i-tools">系统参数设置</a></li>
                    <li><a href="<?php echo url('/admin/team/index'); ?>" class="mws-i-24 i-group">团队管理</a></li>
                    <li><a href="<?php echo url('/admin/notice/index'); ?>" class="mws-i-24 i-megaphone">公司公告</a></li>
                    <li><a href="<?php echo url('/admin/messages/index'); ?>" class="mws-i-24 i-speech-bubble">留言板</a></li>
                    <li><a href="<?php echo url('/admin/trend/index'); ?>" class="mws-i-24 i-graph">溯源趋势</a></li>
                    <li><a href="<?php echo url('/admin/plan/index'); ?>" class="mws-i-24 i-documents-1">溯源方案</a></li>
                </ul>
            </div>
            <!-- End Navigation -->   
        </div>
<div class="mws-panel grid_7" style="margin-top: 5%;">
    <form class="mws-form" action="<?php echo url('/admin/team/upd'); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $teamData['id']; ?>" />
         <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span class="mws-i-24 i-pencil">编辑成员</span>
                </div>
                <div class="mws-panel-body">
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label>姓名</label>
                            <div class="mws-form-item small">
                                <input type="text" class="mws-textinput" name="name" value="<?php echo $teamData['name']; ?>" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label>职务</label>
                            <div class="mws-form-item small">
                                <input type="text" class="mws-textinput" name="position" value="<?php echo $teamData['position']; ?>" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label>头像</label>
                            <div class="mws-form-item medium">
                                <input type="file" class="mws-textinput" name="img" />
                            </div>
                        </div>
                        <div class="mws-form-row" style="height: 100px;width: 100%;">
                            <input type="hidden" name="img_path" value="<?php echo $teamData['img']; ?>" />
                            <div class="pic-box" style="background-image:url(/team/<?php echo $teamData['img']; ?>);background-repeat: no-repeat;height: 100px;background-size: 10%;margin-left: 200px;">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label>简介</label>
                            <div class="mws-form-item large">
                                <textarea name="content" style="width: 780px;"><?php echo $teamData['content']; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mws-button-row">
                        <input type="submit" value="Submit" class="mws-button green" />
                    </div>
                </div>      
            </div>
    </form>
</div>      


		<div id="mws-footer">
			Copyright &copy; 2014.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
		</div>
	</div>
</div>
</body>
</html>   
