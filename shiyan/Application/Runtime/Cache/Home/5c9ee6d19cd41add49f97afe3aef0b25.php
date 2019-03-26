<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>登录-<?php echo ($plmshop_config['shop_info_store_title']); ?></title>
<meta http-equiv="keywords" content="<?php echo ($plmshop_config['shop_info_store_keyword']); ?>" />
<meta name="description" content="<?php echo ($plmshop_config['shop_info_store_desc']); ?>" />
<link rel="stylesheet" type="text/css" href="/Application/Home/View/Static/css/login.css">
<link rel="stylesheet" type="text/css" href="/Application/Home/View/Static/css/common.min.css">
<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
</head>
<body>
<div class="header area"> <a href="/index.php" class="logo_s" title="首页" style="margin: 10px 0;height: 59px; "><img style="margin-top: 10px;" src="<?php echo ($plmshop_config['shop_info_store_logo']); ?>"/></a> </div>
<div class="m-login" style="background-color: #e9e9e9;" id="divMLogin">
  <div class="login-wrap">
    <div class="banner"> <a href="#" id="aBanner"><img src="/Application/Home/View/Static/images/yongxin800_454.jpg" width="620" height="410"/></a> </div>
    <div class="login-form">
      <div class="title oh">
        <h1 class="fl">登录</h1>
        <div class="regist-link fr"> <a href="<?php echo U('Home/User/reg');?>">免费注册</a> </div>
      </div>
      <div class="u-msg-wrap">
        <div class="msg msg-warn" style="display:none;"> <i></i>
          <span>公共场所不建议自动登录，以防帐号丢失</span>
        </div>
        <div class="msg msg-err" style="display:none;"> <i></i>
          <span class="J-errorMsg"></span>
        </div>
      </div>
      <form id="login-form" method="post">
        <div class="u-input mb20">
          <label class="u-label u-name"></label>
          <input type="text" class="u-txt J-input-txt" value="" placeholder="手机号/邮箱" name="username" id="username" autocomplete="off">
        </div>
        <div class="u-input mb15">
          <label class="u-label u-pwd"></label>
          <input type="password" class="u-txt J-input-txt" placeholder="密码"  name="password" id="password" autocomplete="off">
        </div>
        <div class="u-input mb15">
			<input type="text" placeholder="不区分大小写" name="verify_code" id="verify_code" class="u-txt J-input-txt" style="width:100px; padding:10px;"/>
            <img    onclick="verify(this);" width="140" height="42" src="/index.php/Home/User/verify.html" id="verify_code_img" class="po-ab to0">
            <a><img onclick="verify(this);" src="/Application/Home/View/Static/images/chg_image.png" class="ma-le-142 po-ab to18"></a>
        </div>        
        <div class="u-safe">
          <span class="auto">
          <label>
          	<input type="hidden" name="referurl" id="referurl" value="<?php echo ($referurl); ?>">
            <input type="checkbox" class="u-ckb J-auto-rmb"  name="remember">自动登录</label>
          </span>
          <span class="forget"><a href="<?php echo U('Home/User/forget_pwd');?>">忘记密码？</a></span>
        </div>         
        <div class="u-btn mb20 mt20"> <a href="javascript:void(0);" onClick="checkSubmit();" class="J-login-submit" name="sbtbutton">登&nbsp;&nbsp;&nbsp;&nbsp;录</a> </div>
      </form>
      <dl class="account">
        <dt class="mr20">使用合作网站帐号登录:</dt>
        <dd><a href="<?php echo U('LoginApi/login',array('oauth'=>'qq'));?>" class="qq" title="QQ"></a></dd>
        <dd><a href="<?php echo U('LoginApi/login',array('oauth'=>'weixin'));?>"><img src="/Application/Home/View/Static/images/weixin.jpg" width="30" height="30" /></a></dd>
        <dd><a href="<?php echo U('LoginApi/login',array('oauth'=>'alipay'));?>" class="qq pay" title="QQ"> <img src="/Application/Home/View/Static/images/alipay.png" width="30" height="30" /> </a></dd>
      </dl>
    </div>
  </div>
</div>
 
 <script>
	function checkSubmit()
	{
		$('.msg-err').hide();
		$('.J-errorMsg').empty();
		var username = $.trim($('#username').val());
		var password = $.trim($('#password').val());
		var referurl = $('#referurl').val();
		var verify_code = $.trim($('#verify_code').val());
		if(username == ''){
			showErrorMsg('用户名不能为空!');
			return false;
		}
		if(!checkMobile(username) && !checkEmail(username)){
			showErrorMsg('账号格式不匹配!');
			return false;
		}
		if(password == ''){
			showErrorMsg('密码不能为空!');
			return false;
		}
		if(verify_code == ''){
			showErrorMsg('验证码不能为空!');
			return false;
		}
		//$('#login-form').submit();
		$.ajax({
			type : 'post',
			url : '/index.php?m=Home&c=User&a=do_login&t='+Math.random(),
			data : {username:username,password:password,referurl:referurl,verify_code:verify_code},	
			dataType : 'json',
			success : function(res){
				if(res.status == 1){
					window.location.href = res.url;
				}else{
					showErrorMsg(res.msg);
					verify();
				}
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
				showErrorMsg('网络失败，请刷新页面后重试');
			}
		})
		
	}
	
    function checkMobile(tel) {
        var reg = /(^1[3|4|5|7|8][0-9]{9}$)/;
        if (reg.test(tel)) {
            return true;
        }else{
            return false;
        };
    }
    
    function checkEmail(str){
        var reg = /^([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
        if(reg.test(str)){
            return true;
        }else{
            return false;
        }
    }
    
    function showErrorMsg(msg){
    	$('.msg-err').show();
    	$('.J-errorMsg').html(msg);
    }
    
    function verify(){
        $('#verify_code_img').attr('src','/index.php?m=Home&c=User&a=verify&r='+Math.random());
     }
</script>
</body>
</html>