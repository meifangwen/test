<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:60:"D:\thinkphp\public/../application/admin\view\user\index.html";i:1559275823;s:43:"../application/admin/view/index/heater.html";i:1559286253;s:22:"./data/data_system.php";i:1559190116;s:43:"../application/admin/view/index/footer.html";i:1559286312;}*/ ?>
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

<?php
$arr['system']=Array
	(
	'id' => 1,
	'logo' => '20190530/f0d193b68e982cb7bc8857f14f06171c.png',
	'describe' => '涵盖溯源防伪、供应链支付结算等领域的底层公链，致力于通过质量溯源、破除供需信息壁垒、调控商品供给，打造高度互信的新型经济协作生态体系，是祛除零售业痛点的根源性解决方案.',
	'web_name' => '熵云链',
	'seo' => '熵云链',
	'web_close' => 1,
	'address' => '广东省广州市 黄埔区科学大道50号绿地中央广场A3栋1802室',
	'close_desc' => '紧急关闭',
	'record' => '粤ICP备19007922号',
	'wechat' => 11,
	'email' => 'shangyunlian@163.com',
	'qq' => 200000000,
	'zx_phone' => 13355225,
	'zx_landline' => 11111111,
	'wechat_public' => '20190530/15ec41c3e532d9b28dc2c74536e3b5be.jpg',
	'latitude' => '23.16408900',
	'longitude' => '113.43215200',
	'phone' => 2147483647,
	'qrcode' => '20190530/61ca461838cd6873d751f7d02a7815dc.jpg'
	)
?>

<title><?php echo $arr['system']["web_name"]; ?>后台管理系统</title>

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
                        <li><a href="<?php echo url('/home/index/index'); ?>" target="black">网站主页</a></li>
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
<form action="<?php echo url('/admin/user/del'); ?>" method="post">
<div class="mws-panel grid_7 " style="margin-top: 5%">
	<div class="mws-panel-header">
    	<span class="mws-i-24 i-table-1">管理员列表</span>
    </div>
    <div class="mws-panel-body">
    	<div class="mws-panel-toolbar top clearfix">
        	<ul>
                <li><span class="mws-ic-16 ic-add" onclick="NoSelAll()">全选</span></li>
                <li class="mws-ic-16 ic-accept" style="width:72px;background-color: #dddddd;height:35px;border:1px solid #ccc;"><input type="submit" name="deletesubmit" value="删除" onClick="return confirm('本操作不可恢复，确认删除？');" class="submit" style="line-height: 35px;padding-left: 20px;"></li>
            	<li><a href="<?php echo url('/admin/user/add'); ?>" class="mws-ic-16 ic-add">添加</a></li>
            </ul>
        </div>
        <table class="mws-table">
            <thead>
                <tr>
                    <th>选择</th>
                    <th>ID</th>
                    <th>用户名</th>
                    <th>管理员级别</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($usersData as $v): ?>
                <tr class="gradeX">                 
                    <td><?php if($v["id"]!=1 && $v["name"]!=session('name')): ?><input type="checkbox" name="ids[]" value="<?php echo $v['id']; ?>"><?php endif; ?></td>
                    <td><?php echo $v["id"]; ?></td>
                    <td><?php echo $v["name"]; ?></td> 
                    <td><?php if($v["id"]==1): ?>超级管理员<?php else: ?>普通管理员<?php endif; ?></td>                  
                    <td class="status"><?php echo $v["pass"]==0?"正常":"<span style='color: red;'>封号</span>"; ?></td>
                    <td class="center">
                    	<div class="mws-panel-toolbar top clearfix">
                             <?php if(session("id")==1 || $v["id"]==session("id")): ?>
                            <ul>
                                <li><a href="<?php echo url('/admin/user/upd',['id' => $v['id']]); ?>" class="mws-ic-16 ic-edit">编辑</a></li>
                             <?php if($v["id"]!=session("id")): ?>
                                <li class="titles"  onclick="titles(this);" id="<?php echo $v['id']; ?>">
                                    <?php echo $v["pass"]==0?"<a href='#' class='mws-ic-16 ic-cross' >封号</a>" : "<a href='#' class='mws-ic-16 ic-accept'>正常</a>"; ?>
                                </li>
                               <?php endif; ?>
                            </ul> 
                             <?php endif; ?>
                        </div>
                    </td>
                </tr>
               <?php endforeach; ?>
            </tbody>
        </table>
    </div>      
    <div class="mws-pagination clearfix" style="padding-top: 20px;">
        <?php echo $usersData->render(); ?>
    </div>
</div>
</form>
		<div id="mws-footer">
			
		</div>
	</div>
</div>
</body>
</html>

<script type="text/javascript">

    function titles(it){
        var id = $(it).attr('id');

        $.get("<?php echo url('/admin/user/titles'); ?>",{"id":id},function(e){
 
            if(e.code==1){
                //1表示封号成功
                $(it).parent().parent().parent().parent().find(".status").html("<span style='color: red;'>封号</span>");

                $(it).html("<a href='#' class='mws-ic-16 ic-accept'>解封</a>");
                layer.msg(e.msg);
            }else{
                //否则表示解封成功
                $(it).parent().parent().parent().parent().find(".status").html("正常");
                
                $(it).html("<a href='#' class='mws-ic-16 ic-cross'>封号</a>");
                layer.msg(e.msg);

            }
        },"json")
    }

    //反选
    function NoSelAll(){ 
        $("input[name='ids[]']").each(function(){$(this).prop("checked",!this.checked);});
    }
</script>