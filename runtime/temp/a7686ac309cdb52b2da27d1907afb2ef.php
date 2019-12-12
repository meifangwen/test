<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"D:\zm\PHPTutorial\WWW\WWW\001\thinkphp\tpl\nologin_jump.tpl";i:1564471057;}*/ ?>
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

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo config('static_admin'); ?>/css/mws.theme.css" media="screen" />

<!-- JavaScript Plugins -->

<script type="text/javascript" src="<?php echo config('static_admin'); ?>/js/jquery-1.7.1.min.js"></script>

<script type="text/javascript" src="<?php echo config('static_admin'); ?>/plugins/jimgareaselect/jquery.imgareaselect.min.js"></script>
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

<script type="text/javascript">
    $(document).ready(function() {
        $("div#mws-login .mws-login-back").mouseover(function(event) {
            $(this).find("a").animate({'left':0})
        }).mouseout(function(event) {
            $(this).find("a").animate({'left':70})
        });
    });
</script>

<title>后台系统登录</title>
</head>

<body>

                <div class="mws-panel grid_2" style="margin-top: 8%;margin-left: 34%;">
                    <div class="mws-panel-header">
                        <span class="mws-i-24 i-info-about">提示</span>
                    </div>
                    <div class="mws-panel-body">
                        <div class="mws-panel-content">
                            <div id="mws-pie-2" style="width:100%; height:50px; ">
                                <?php switch ($code) {case 1:?>
                                    <p class="success"><?php echo(strip_tags($msg));?></p>
                                    <?php break;case 0:?>
                                    <p class="error"><?php echo(strip_tags($msg));?></p>
                                    <?php break;} ?>
                            </div>
                            <b id="wait" style="display: none;"><?php echo($wait);?></b>
                            <a id="href" href="<?php echo($url);?>" ><div id="wait" style="  margin: auto;width: 40px;text-align: center;" class="mws-button green"> 确定</div></a>

                        </div>
                    </div>
                </div>  
    <script type="text/javascript">
        (function(){
            var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };
            }, 1000);
        })();
    </script>

</body>
</html>
