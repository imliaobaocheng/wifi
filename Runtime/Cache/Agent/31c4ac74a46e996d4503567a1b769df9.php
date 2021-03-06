<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo C('sitename');?>--代理商平台</title>
<meta name="keywords" content="<?php echo C('keyword');?>"/>
<meta name="description" content="<?php echo C('content');?>"/>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/matrix-media.css" />
<link href="<?php echo ($Theme['P']['root']); ?>/matrix/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="<?php echo ($Theme['P']['root']); ?>/font/googlefont.css" rel="stylesheet" />
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/jquery.min.js"></script> 
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/uniform.css" />
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/select2.css" />
</head>
<body>
 <link href="<?php echo ($Theme['P']['root']); ?>/css/qq/css/contact.css" rel="stylesheet" type="text/css" />

<!--Header-part-->
<div id="header">
  <h1><a href="#"></a></h1>
</div>
<!--close-Header-part--> 
<!--top-Header-menu-->

<div id="user-nav" class="navbar navbar-inverse">

  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>登录帐号:(<?php echo (session('account')); ?>)</a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo U('index/pwd');?>"><i class="icon-user"></i> 修改密码</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo U('index/index/alogout');?>"><i class="icon-key"></i>退出</a></li>
      </ul>
    </li>
	
  <li class=""><a title="" href="<?php echo U('index/index/alogout');?>"><i class="icon icon-share-alt"></i> <span class="text">退出</span></a></li>
    </ul>
     
</div>

<!--close-top-Header-menu-->

<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="<?php if(($nav['a'] == 'index')): ?>active"<?php endif; ?>"><a href="<?php echo U('Index/index');?>"><i class="icon icon-home"></i> <span>首页</span></a> </li>
    <li class="<?php if(($nav['a'] == 'account')): ?>active"<?php endif; ?>"><a href="<?php echo U('Index/account');?>"><i class="icon icon-group"></i> <span>账户管理</span></a> </li>
    <li class="submenu <?php if(($nav['a'] == 'shop')): ?>active"<?php endif; ?>"><a href="#" id="shop"><i class="icon icon-user"></i> <span>商户管理</span></a>
   	  <ul> 
        <li><a href="<?php echo U('Index/shoplist');?>">商户列表</a></li>
        <li><a href="<?php echo U('Index/shopadd');?>">添加商户</a></li>
      </ul>
    </li>
    <li class="submenu <?php if(($nav['a'] == 'adman')): ?>active"<?php endif; ?>"><a href="#" id="adman"><i class="icon icon-cloud"></i> <span>广告管理</span></a>
      <ul>
        <li><a href="<?php echo U('Admanage/shopad');?>">广告列表</a></li>
        <li><a href="<?php echo U('Admanage/adrpt');?>">广告统计</a></li>
      </ul>
    </li>
    <li class="submenu <?php if(($nav['a'] == 'pushadv')): ?>active"<?php endif; ?>"><a href="#" id="pushadv"><i class="icon icon-th-large"></i> <span>广告推送管理</span></a>
      <ul>
        <li><a href="<?php echo U('pushadv/set');?>">推送设置</a></li>
        <li><a href="<?php echo U('pushadv/index');?>">广告列表</a></li>
        <li><a href="<?php echo U('pushadv/add');?>">投放广告</a></li>
        <li><a href="<?php echo U('pushadv/rpt');?>">投放统计</a></li>
      </ul>
    </li>
    <li class="<?php if(($nav['a'] == 'report')): ?>active"<?php endif; ?>"><a href="<?php echo U('Index/report');?>"><i class="icon icon-envelope-alt"></i> <span>资金报表</span></a> </li>
  </ul>
</div>
<!--sidebar-menu-->
<!--main-container-part-->
<div id="content">
  <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb">
            <a href="<?php echo U('index/index');?>" title="返回首页" class="tip-bottom"><i class="icon-home"></i>首页</a>
            <a href="#" class="current">添加商户信息</a>
        </div>
        <h1>添加商户信息</h1>
    </div>
    <!--End-breadcrumbs-->
    <div class="container-fluid" >
        <hr>
        <div class="row-fluid">
            <div class="span8">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon">
                            <i class="icon-align-justify"></i>
                        </span>
                        <h5>添加商户信息</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form name="" class="form-horizontal">
                            <div class="control-group">
                                <div class="alert span9" style="display: none;margin: 10px 0 10px 150px;">
                                    <span id="alertmsg"></span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">登录帐号:</label>
                                <div class="controls">
                                    <input type="text" class="span11" data-toggle="tooltip" data-trigger="focus" title="4-20个字母，数字组成" data-placement="right" name="user" id="user"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">登录密码:</label>
                                <div class="controls">
                                    <input type="password" class="span11" data-toggle="tooltip" data-trigger="focus" title="4-20个字母，数字组成" data-placement="right" name="password" id="password"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">商户名称:</label>
                                <div class="controls">
                                    <input type="text" class="span11" data-toggle="tooltip" data-trigger="focus" title="商户名称不能超过20个字" data-placement="right" name="shopname" id="shopname" value="<?php echo ($shop["shopname"]); ?>"/>
                                </div>
                            </div>    
                            <div class="control-group">
                                <label class="control-label">联系人:</label>
                                <div class="controls">
                                    <input class="span11" type="text" name="linker" id="linker" value="<?php echo ($shop["linker"]); ?>" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">手机号码:</label>
                                <div class="controls">
                                    <input class="span11" type="text" name="phone" id="phone" value="<?php echo ($shop["phone"]); ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">消费水平:</label>
                                <div class="controls">
                                    <?php if(is_array($enumdata["shoplevel"])): $i = 0; $__LIST__ = $enumdata["shoplevel"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><label class="checkbox" style="float:left; line-height:23px;">
                                            <input type="checkbox" value="<?php echo ($vo["key"]); ?>" name="shoplevel" <?php if(strpos($shop['shoplevel'],"#".$vo['key']."#")>-1){echo "checked";} ?>/><?php echo ($vo["txt"]); ?>
                                        </label><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">行业类别:</label>
                                <div class="controls">
                                    <?php if(is_array($enumdata["trades"])): $i = 0; $__LIST__ = $enumdata["trades"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><label class="checkbox" style="float:left; line-height:23px;">
                                            <input type="checkbox" value="<?php echo ($vo["key"]); ?>" name="trade" <?php if(strpos($shop['trade'],"#".$vo['key']."#")>-1){echo "checked";} ?>/><?php echo ($vo["txt"]); ?>
                                        </label><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">所属区域:</label>
                                <div class="controls">
                                    <select name="province" id="province" >
                                        <option value="北京市">北京市</option><option value="天津市">天津市</option><option value="河北省">河北省</option><option value="山西省">山西省</option><option value="内蒙古自治区">内蒙古自治区</option><option value="辽宁省">辽宁省</option><option value="吉林省">吉林省</option><option value="黑龙江省">黑龙江省</option><option value="上海市">上海市</option><option value="江苏省">江苏省</option><option value="浙江省">浙江省</option><option value="安徽省">安徽省</option><option value="福建省">福建省</option><option value="江西省">江西省</option><option value="山东省">山东省</option><option value="河南省">河南省</option><option value="湖北省">湖北省</option><option value="湖南省">湖南省</option><option value="广东省">广东省</option><option value="广西壮族自治区">广西壮族自治区</option><option value="海南省">海南省</option><option value="重庆市">重庆市</option><option value="四川省">四川省</option><option value="贵州省">贵州省</option><option value="云南省">云南省</option><option value="西藏自治区">西藏自治区</option><option value="陕西省">陕西省</option><option value="甘肃省">甘肃省</option><option value="青海省">青海省</option><option value="宁夏回族自治区">宁夏回族自治区</option><option value="新疆维吾尔自治区">新疆维吾尔自治区</option><option value="香港特别行政区">香港特别行政区</option><option value="澳门特别行政区">澳门特别行政区</option><option value="台湾省">台湾省</option><option value="其它">其它</option>
                                    </select>　　
                                    <select name="city" id="city" ><option value="市辖区">市辖区</option><option value="市辖县">市辖县</option></select>　　
                                    <select name="area" id="area" >
                                        <option value="东城区">东城区</option><option value="西城区">西城区</option><option value="崇文区">崇文区</option><option value="宣武区">宣武区</option><option value="朝阳区">朝阳区</option><option value="丰台区">丰台区</option><option value="石景山区">石景山区</option><option value="海淀区">海淀区</option><option value="门头沟区">门头沟区</option><option value="房山区">房山区</option><option value="通州区">通州区</option><option value="顺义区">顺义区</option><option value="昌平区">昌平区</option><option value="大兴区">大兴区</option><option value="怀柔区">怀柔区</option><option value="平谷区">平谷区</option>
                                    </select>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">地址:</label>
                                    <div class="controls">
                                        <input class="span11" type="text"  data-toggle="tooltip" data-trigger="focus" title="输入地址信息" data-placement="right" name="address" id="address" value="<?php echo ($shop["address"]); ?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <input type="button"   class="btn btn-success" id="btn_save" value="确认提交" style="margin:20px;">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="span4 column pull-right">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal  hide fade" id="myModal">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3>提示信息</h3>
    </div>
    <div class="modal-body">
        <p>内容</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn"  data-dismiss="modal">关闭</a>
    </div>
</div>
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/jquery.ui.custom.js"></script> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/bootstrap.min.js"></script> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/matrix.js"></script> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/jquery.uniform.js"></script> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/select2.min.js"></script> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/common.js"></script> 
           <script src="<?php echo ($Theme['P']['js']); ?>/region_select.js"></script>
            <script type="text/javascript">
                new PCAS('province', 'city', 'area', '', '', '');

                $(function () {
                	$('#shop').trigger('click');
                    // add uniform plugin styles to html elements
                    $("input:checkbox, input:radio").uniform();

                    $('#btn_save').bind('click',function(){
                        var user=$('#user').val();
                        var psd=$('#password').val();
                        var s=$('#shopname').val();
                        var link=$('#linker').val();
                        var phone=$('#phone').val();
                        var pro=$('#province').val();
                        var city=$('#city').val();
                        var area=$('#area').val();
                        var ad=$('#address').val();
                        var sid=$('#sid').val();
                        var shoplevel="";
                        $("input[name='shoplevel']").each(function(){
                            if($(this).parent().hasClass('checked')){
                                shoplevel+="#"+$(this).val()+"#";
                            }
                        });
                        var trade="";
                        $("input[name='trade']").each(function(){
                            if($(this).parent().hasClass('checked')){
                                trade+="#"+$(this).val()+"#";
                            }
                        });
                        if (user == "") {
                            AlertTips("登录帐号不能为空",1500);
                            return false;
                        }
                        if (psd == "") {
                            AlertTips("密码不能为空",1500);
                            return false;
                        }

                        if (s == "") {
                            AlertTips("商户名称不能为空",1500);
                            return false;
                        }
                        if (link == "") {
                              
                            AlertTips("联系人不能为空",1500);
                            return false;
                        }
                        if(!isaccount(user)){
                                
                            AlertTips("登录帐号由4-20位数字或字母组成",1500);
                            return false;
                        }
                        if(!isPhone(phone)){
            
                            AlertTips("请输入11位手机号码",1500);
                            return false;
                        }
                        $.ajax({
                            url: '<?php echo U('openshop');?>',
                            type: "post",
                            data:{
                                'account':user,
                                'password':psd,
                                'shopname':s,
                                'linker':link,
                                'phone':phone,
                                'province':pro,
                                'city':city,
                                'area':area,
                                'address':ad,
                                'shoplevel':shoplevel,
                                'trade':trade,
                                'id':sid,
                                '__hash__':$('input[name="__hash__"]').val()
                                },
                            dataType:'json',
                            error:function(){
                                AlertTips("服务器忙，请稍候再试",1500);
                            },
                            success:function(data){
                                if(data.error==0){
                                    location.href=data.url;
                                }else{
                                    AlertTips(data.msg,200000);
                                }
                            }
                        });
                    });
                });
</script>
</body>
</html>