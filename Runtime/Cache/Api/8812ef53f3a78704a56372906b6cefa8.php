<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/wap/css/t10/css/common.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/wap/css/t10/css/reset.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/wap/css/t10/css/home-14.css" media="all" />
<script type="text/javascript" src="<?php echo ($Theme['P']['js']); ?>/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo ($Theme['P']['js']); ?>/swipe.js"></script>
<script type="text/javascript" src="<?php echo ($Theme['P']['js']); ?>/zepto.js"></script>

<title><?php echo ($siteinfo["shopname"]); ?></title>

<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<!-- Mobile Devices Support @begin -->
<meta content="application/xhtml+xml;charset=UTF-8"
	http-equiv="Content-Type">
<meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
<meta content="no-cache" http-equiv="pragma">
<meta content="0" http-equiv="expires">
<meta content="telephone=no, address=no" name="format-detection">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes" />
<!-- apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<!-- Mobile Devices Support @end -->

</head>
<body onselectstart="return true;" ondragstart="return false;">
<div class="body" style="padding-bottom: 52px;">
<!--  幻灯片管理 -->
	<div style="-webkit-transform: translate3d(0, 0, 0);">
		<div id="banner_box" class="box_swipe">
			<ul>
				<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li>
						<a onclick="return false;"> 
							<img src="<?php echo ($so['ad_thumb']); ?>" alt="1" style="width: 100%;" />
						</a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<ol>
				<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i; if(($$i) == "1"): ?><li class="on"></li><?php else: ?><li></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ol>
		</div>
	</div>
<script>
	$(function(){
		new Swipe(document.getElementById('banner_box'), {
			speed:500,
			auto:3000,
			callback: function(){
				var lis = $(this.element).next("ol").children();
				lis.removeClass("on").eq(this.index).addClass("on");
			}
		});
	});
</script> 
	<!-- 用户分类管理 --> 
	<section>
		<ul class="list_font">
		<?php if(is_array($classinfo)): $i = 0; $__LIST__ = $classinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
				<a href="<?php echo showclass_common($vo,$wechaid);?>">
					<div><span class="icon-group"></span></div>
					<div>
						<p><?php echo ($vo['title']); ?></p>
					</div>
				</a>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>	
		</ul>
	</section> 
</div>
<footer>
<div class="weimob-copyright">©本页面由<?php echo C('shortname');?>智慧无线生成
</div>
<span class="weimob-support"></span>
</footer>
<div mark="stat_code" style="width: 0px; height: 0px; display: none;">
</div>
</body>
</html>