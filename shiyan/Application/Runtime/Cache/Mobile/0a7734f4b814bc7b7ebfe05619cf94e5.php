<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<html>
<head>
<meta name="Generator" content="plmshop" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>用户注册-<?php echo ($plmshop_config['shop_info_store_title']); ?></title>
<meta http-equiv="keywords" content="<?php echo ($plmshop_config['shop_info_store_keyword']); ?>" />
<meta name="description" content="<?php echo ($plmshop_config['shop_info_store_desc']); ?>" />

<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<link rel="stylesheet" type="text/css" href="/Application/Mobile/View/Static/css/public.css"/>
<link rel="stylesheet" type="text/css" href="/Application/Mobile/View/Static/css/login.css"/>  
<script type="text/javascript" src="/Application/Mobile/View/Static/js/jquery.js"></script>
<script type="text/javascript" src="/Application/Mobile/View/Static/js/layer.js" ></script>
<script src="/Public/js/global.js"></script>
<script src="/Public/js/mobile_common.js"></script>
</head>
<body>
<header id="header" class='header'>
	<div class="h-left"><a href="javascript:history.back(-1)" class="back"></a></div>
    <div class="h-mid">用户注册</div>
</header>
<div id="tbh5v0">
	<div class="log_reg_box">
		<ul class="tab" id="logRegTab">
			<li id="mob_log" class="curr" onClick="changeForm(this)">
				<span>
					<font>手机注册</font>
				</span>
			</li>
			<!--<li id="email_log" class="curr currr" onClick="changeForm(this)">
				<span>
					<font>邮箱注册</font>
				</span>
			</li>-->
		</ul>
		<div id="logRegTabCon">
			<div class="log_reg_item" id="phonearea">
				<form action="" id="mobileForm" name="mobileForm" method="post"  onsubmit="return check_submit()">
						<div class="field phone">
							<input type="text" id="username" name="username" placeholder="手机号" class="c-form-txt-normal" onBlur="checkMobilePhone(this.value);" />
							<div class="tips">
								<span id="mobile_phone_notice"></span>
							</div>
						</div>
						<div class="field pwd">
							<input type="password" id="password" name="password" placeholder="密码" class="c-form-txt-normal" onBlur="check_password(this.value);" />
							<div class="tips">
								<span id="password_notice"></span>
							</div>
						</div>
						<div class="field pwd">
							<input type="password" id="password2" name="password2" placeholder="确认密码" class="c-form-txt-normal" onBlur="check_confirm_password(this.value);" />
							<div class="tips">
								<span id="confirm_password_notice"></span>
							</div>
						</div>
						<!--<div class="yanzheng"  style=" margin-top:0px;">
                              <div class="codeTxt">
								<input type="text" id="mobile_code"  name="mobile_code" placeholder="手机验证码" />
                              </div>
                               <div class="codePhoto">
								<input id="zphone" type="button" rel="mobile" value="获取手机验证码 " onClick="sendcode(this)" class="zphone" style=" color:#FFF">
                               </div>
						</div>-->
						<input type="submit" id="btn_submit" name="Submit" class="btn_big1" value="注 册" />
			</form>
			</div>
			<div class="log_reg_item hide" id="emailarea">
				<form action="" method="post" id="emailForm" name="emailForm" onSubmit="return check_submit()">
					<div class="field email">
							<div class="st">
								<input type="email" name="username" placeholder="邮箱地址" value="" class="c-form-txt-normal" id="username" onBlur="checkEmail2(this.value);" />
							</div>
							<div class="tips">
								<span id="email_notice"></span>
							</div>
						</div>
						<div class="field pwd">
							<div>
								<input type="password" name="password" id="password" onBlur="check_password(this.value);" value="" placeholder="密码" class="c-form-txt-normal" />
							</div>
							<div class="tips">
								<span id="password_notice"> </span>
							</div>
						</div>
						<div class="field pwd">
							<div>
								<input type="password" name="password2" id="password2" onBlur="check_confirm_password(this.value);" value="" placeholder="确认密码" class="c-form-txt-normal">
							</div>
							<div class="tips">
								<span id="confirm_password_notice"> </span>
							</div>
						</div>
						<div class="yanzheng" style=" margin-top:0px;">
                              <div class="codeTxt">
								<input type="text" id="email_code" name="email_code"  placeholder="邮箱验证码"/></div>
                                   <div class="codePhoto">
									<input id="zemail" type="button" rel="email" value="获取邮箱验证码 " class="zphone" onClick="sendcode(this)" style=" color:#FFF">
                                  </div>
						</div>													
						<input type="checkbox" style="display: none" name="agreement" value="1" checked="checked" required />
						<input type="submit" id="btn_submit" name="Submit" class="btn_big1" value="注 册" />
				</form>
			</div>
		</div>
	</div>			
<!--
<div class="footer" >
	      <div class="links"  id="TP_MEMBERZONE"> 
	      		<?php if($user_id > 0): ?><a href="<?php echo U('User/index');?>"><span><?php echo ($user["nickname"]); ?></span></a><a href="<?php echo U('User/logout');?>"><span>退出</span></a>
	      		<?php else: ?>
	      		<a href="<?php echo U('User/login');?>"><span>登录</span></a><a href="<?php echo U('User/reg');?>"><span>注册</span></a><?php endif; ?>
	      		<a href="#"><span>反馈</span></a><a href="javascript:window.scrollTo(0,0);"><span>回顶部</span></a>
		  </div>
	      <ul class="linkss" >
		      <li>
		        <a href="#">
		        <i class="footerimg_1"></i>
		        <span>客户端</span></a></li>
		      <li>
		      <a href="javascript:;"><i class="footerimg_2"></i><span class="gl">触屏版</span></a></li>
		      <li><a href="<?php echo U('Home/Index/index');?>" class="goDesktop"><i class="footerimg_3"></i><span>电脑版</span></a></li>
	      </ul>
	  	 <p class="mf_o4">备案号:<?php echo ($tpshop_config['shop_info_record_no']); ?><br/>&copy; 2019 派乐咪版权所有，并保留所有权利。</p>
</div>
-->			
</div>
<script type="text/javascript">

setCurrentForm($("#mobileForm"));
var flag = false;

function changeForm(obj){
	$(obj).removeClass('currr');
	$(obj).siblings().addClass('currr');
	if($(obj).attr('id')=='mob_log'){
		$('#phonearea').show();
		setCurrentForm($("#mobileForm"))
		$('#emailarea').hide();
	}else{
		$('#phonearea').hide();
		setCurrentForm($("#emailForm"))
		$('#emailarea').show();
	}
}

function setCurrentForm(formObj) {
	currentForm = $(formObj);
}

function checkEmail2(email){
	if(email == ''){
		$('#email_notice').css('color','red');
		$('#email_notice').html('* 邮件地址不能为空');
		flag = false;
	}else if(checkEmail(email)){
		$('#email_notice').css('color','green');
		$('#email_notice').html('* 可以注册');
		flag = true;
	}else{
		$('#email_notice').css('color','red');
		$('#email_notice').html('* 邮件地址不正确');
		flag = false;
	}
}


function checkMobilePhone(mobile){
	if(mobile == ''){
		$('#mobile_phone_notice').css('color','red');
		$('#mobile_phone_notice').html('* 手机号码不能为空');
		flag = false;
	}else if(checkMobile(mobile)){
			$.ajax({
				type : "GET",
				url:"/index.php?m=Home&c=Api&a=issetMobile",//+tab,
//			url:"<?php echo U('Mobile/User/comment',array('status'=>$_GET['status']),'');?>/is_ajax/1/p/"+page,//+tab,
				data :{mobile:mobile},// 你的formid 搜索表单 序列化提交
				success: function(data)
				{
					if(data == '0')
					{
						$('#mobile_phone_notice').css('color','green');
						$('#mobile_phone_notice').html('* 可以注册');
						flag = true;
					}else{
						$('#mobile_phone_notice').css('color','red');
						$('#mobile_phone_notice').html('* 手机号已存在');
						flag = false;
					}
				}
			});
	}else{
		$('#mobile_phone_notice').css('color','red');
		$('#mobile_phone_notice').html('* 手机号码格式不正确');
		flag = false;
	}
}


function check_password(password) {
	if (password.indexOf(" ") != -1) {
		$(currentForm).find('#password_notice').css('color','red').html("登录密码不能包含空格");
		flag = false;
	} else if (password.length < 6) {
		$(currentForm).find('#password_notice').css('color','red').html('- 登录密码不能少于 6 个字符。');
		flag = false;
	} else {
		$(currentForm).find('#password_notice').css('color','green').html('可以注册');
		flag = true;
	}
}

function check_confirm_password(confirm_password) {
	var password = $(currentForm).find('#password').val();
	if (password.indexOf(" ") != -1) {
		$(currentForm).find('#confirm_password_notice').css('color','red').html("确认密码不能包含空格");
		flag = false;
		return false;
	}
	if (confirm_password.length < 6) {
		$(currentForm).find('#confirm_password_notice').css('color','red').html('- 登录密码不能少于 6 个字符。');
		flag = false;
		return false;
	}
	if (confirm_password != password) {
		$(currentForm).find('#confirm_password_notice').css('color','red').html('两次密码不一致');
		flag = false;
	} else {
		$(currentForm).find('#confirm_password_notice').css('color','green').html('可以注册');
		flag = true;
	}
}


function check_submit()
{ 
	var username = $.trim($(currentForm).find('#username').val());
	var password = $(currentForm).find('#password').val();
	var password2= $(currentForm).find('#password2').val();		
	if(username.length >0 && password.length > 0 && password2.length > 0 && flag)	
	{
		return true;
	} else{
		//return false;
		return true;	
	}
		 
}

function sendcode(o){
	if(flag){
		$.ajax({
			url:'/index.php?m=Mobile&c=User&a=send_validate_code&t='+Math.random(),
			type:'post',
			dataType:'json',
			data:{type:$(o).attr('rel'),send:$.trim($(currentForm).find('#username').val())},
			success:function(res){
				if(res.status==1){
					countdown(o);
				}else{
					//layer.open({content:res.msg,time:2});
					countdown(o);
				}
			}
		})
	}
}

var wait = 150;
function countdown(obj, msg) {
	obj = $(obj);
	if (wait == 0) {
		obj.removeAttr("disabled");
		obj.val(msg);
		wait = 150;
	} else {
		if (msg == undefined || msg == null) {
			msg = obj.val();
		}
		obj.attr("disabled", "disabled");
		obj.val(wait + "秒后重新获取");
		wait--;
		setTimeout(function() {
			countdown(obj, msg)
		}, 1000)
	}
}
</script>
</body>
</html>