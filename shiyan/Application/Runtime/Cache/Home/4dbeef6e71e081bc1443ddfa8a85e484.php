<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0" />
<meta name="viewport" content="width=device-width">
<title>我要入驻-初始协议</title>
<!-- <link href="/Application/Home/View/Static/css/qt_style.css" rel="stylesheet" type="text/css" /> -->
<link href="/Application/Home/View/Static/css/common.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Application/Home/View/Static/js/jquery-1.11.0.min.js"></script>
<style>
	body{
			font-size: 13px;
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100%;
			box-sizing:border-box;
		}
		li{
			list-style: none;
		}
		a{
			text-decoration:none;
		}
		em{
			font-style: none;
		}
	
		/* //按钮 */
		.gome-btn{
			width:100%;
			margin:10px auto;
			text-align:center;
			text-decoration:none;
			margin-bottom: 20px;
		margin-top: 20px;
		position: relative;
		top: 20px;
		}
		.gome-btn-red{
			height:30px;
			background:#cc0000;
			display:inline-block;
			color:#fff;
			text-align:center;
			font:bold 14px/30px '新宋体';
			padding:0 18px 0 18px;
		}
		.gome-btn-red:hover{
			background:#dd0000;
			text-decoration:none;
			color:#fff;
		}
		.gome-btn-redpop{
			height:24px;
			background:#cc0000;
			display:inline-block;
			color:#fff;
			text-align:center;
			font:normal 12px/24px '新宋体';
			padding:0 18px 0 18px;
		}
		.gome-btn-redpop:hover{
			background:#dd0000;
			text-decoration:none;
			color:#fff;
		}
		.gome-btn-gray{
			height:28px;
			background:#e6e6e6;
			border:1px solid #ddd;
			display:inline-block;
			color:#5e5e5e;
			text-align:center;
			font:bold 14px/28px '新宋体';
			padding:0 18px 0 18px;
			
		}
		.gome-btn-gray:hover{
			border:1px solid #ccc;
			text-decoration:none;
			color:#5e5e5e;
		}
		.gome-btn-white{
			height:26px;
			background:#fff;
			border:1px solid #ddd;
			display:inline-block;
			color:#5e5e5e;
			text-align:center;
			font:normal 12px/26px '新宋体';
			padding:0 18px 0 18px;
		}
		.gome-btn-white:hover{
			border:1px solid #ccc;
			text-decoration:none;
			color:#5e5e5e;
		}
		.gome-btn-whitepop{
			height:26px;
			background:#fff;
			border:1px solid #ddd;
			display:inline-block;
			color:#333333;
			text-align:center;
			font:normal 12px/26px '新宋体';
			padding:0 18px 0 18px;
		}
		.gome-btn-whitepop:hover{
			border:1px solid #ccc;
			text-decoration:none;
		}
		/* 流程图 */
		.liucheng{
			display: flex;
			width: 100%;
			justify-content: center;
			box-sizing:border-box;
		}
		.lb_1{
			width: 30%;
		}
		.liucheng{
			width: 100%;
			color: gray;
			display: flex;
			justify-content: space-around;
			justify-content: center;
			padding-left: 10%; 
			padding-top: 20px; 
		}
		.liucheng li{
		   width: 100%;
		   display: flex;
		   /* flex-direction:column; */
		   
		}
		.liucheng li em{
		   /* padding-top: 5px;
		   font-style: normal;
		   width: 10px;
		   padding-left: 8px; */
		}
		.liucheng li b{
		   width: 39%;
		   height: 30px;
		   border-radius: 50%;
		   text-align: center;
		   line-height: 30px;
		   background: #a5a5a5;
		   color: white;
		}
		.liucheng li span{
		   display: block;
		   height: 8px;
		   /* width: 100%; */
		   background: #a5a5a5;
		   margin-top: 10px;
		   flex: 1;
		}
		.liucheng_1{
		   width: 100%;
		   color: #a5a5a5;
		   display: flex;
           justify-content: center;
           /* justify-content: space-between; */
		   
		   /* margin-left: -3%; */
		   /* padding-left: -5%; */
		   position: relative;
		   left: 0%;
		   margin-bottom: 10px;
		}
		.liucheng_1 li{
		   font-style: normal;
		   /* width: 10px; */
		   padding-left: -3%;
		   padding-right: 4%;
		
		}
		.il1,.il2{
		   margin-top:5px; 
			   width: 0; 
			   height: 0; 
			   border-top: 8px solid transparent; 
			   border-left: 10px solid #cc0000; 
			   border-bottom: 8px solid transparent;     
		}
		.il{
		   margin-top:5px; 
			   width: 0; 
			   height: 0; 
			   border-top: 8px solid transparent; 
			   border-left: 10px solid #a5a5a5; 
			   border-bottom: 8px solid transparent;     
		}
		.wraning{
		   color: #cc0000;
		}
		.warning{
		   border:1px solid #cc0000;
		}
		.warning-text1{
		   float:left;
		   background:url(../images/warning-icon1.gif) no-repeat left center;
		   color:#ea5504;
		   padding:0 0 0 20px;
		   line-height:26px;
		   height:26px;
		   margin: 0 0 0 5px;
		}
		.warning-text2{
		   float:left;
		   background:url(../images/warning-icon2.gif) no-repeat left center;
		   color:#cc0000;
		   padding:0 0 0 20px;
		   line-height:26px;
		   height:26px;
		   margin: 0 0 0 5px;
		}
		.settled-agreement{
    width: 100%;
    height: 100%;
}
.agreement-con{
    height: 500px;;
    font-size: 15px;
   overflow: hidden;
   overflow: auto;
}
.agreement-con span{
    height: 30px;
    line-height: 30px;
}
.agreement-title{
	background:#f3f3f3;
	height:40px;
	font:bold 14px/40px '新宋体';
	padding:0 0 0 20px;
}
.agreement-title span{
	float:left;
}
.agreement-title a{
	float:right;
	color:#0066cc;
	font-weight:normal;
}
.agreel{
	position: relative;
	top: 20px;
	height: 50px;
	margin-left: 7%;
}
</style>
</head>
<body>
<!-- <div class="m-top-bar editable" moduleid="1539923" style="position:relative;min-height:25px;">
  <div class="container">
    <ul class="fl">
      <?php if($user[user_id] > 0): ?><li class="fl J_login_status"><a href="<?php echo U('Home/user/index');?>" alt="" title="" target="_self"><?php echo ($user['nickname']); ?></a>
      	<a  href="<?php echo U('Home/user/logout');?>" style="margin:0 10px;" title="退出" target="_self">退出</a></li>
      </li>
      <?php else: ?>
      	<li class="fl J_login_status"><a class="menu-item fl J_do_login J_chgurl" href="<?php echo U('Home/user/login');?>">
        <span>Hi，请登录</span> </a><a class="menu-item fl ht" href="<?php echo U('Home/user/reg');?>">免费注册</a><?php endif; ?>
      <li class="fl sep"></li>
      <li class="fl select-city dropdown">
        <span class="menu-item">
        <span>送货至：</span>
        <a title="" alt="" href="" class="J_cur_place"></a><i class="dd"></i></span>
      </li>
    </ul>
    <ul class="fr bar-right">
      <li class="fl dropdown my-feiniu"><a class="menu-item" target="_blank" href="">
        <span>我的商城</span><i class="dd"></i></a>
        <ul class="sub-panel">
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('/Home/User/order_list');?>">我的订单</a></li>
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('/Home/User/account');?>">我的积分</a></li>
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('/Home/User/coupon');?>">我的优惠券</a></li>
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('/Home/User/goods_collect');?>">我的收藏夹</a></li>
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('/Home/User/comment');?>">我的评论</a></li>
        </ul>
      </li> 
      <li class="fl sep"></li>
      <li class="fl dropdown mobile-feiniu"><a class="menu-item" href=""><i class="fl ico"></i>
        <span class="fl">手机访问</span>
        <i class="dd"></i></a>
        <div class="sub-panel m-lst">
          <p>手机扫一扫</p>
          <dl>
            <dt class="fl mr10"><a target="_blank" href=""><img height="80" width="80" src="/Application/Home/View/Static/images/qrcode_vmall_app01.png"></a></dt>
          </dl>
        </div>
      </li>
      <li class="fl sep"></li>
      <li class="fl"><a class="menu-item" href="" target="_blank">
        <span>帮助中心</span>
        </a></li>
      <li class="fl sep"></li>
      <li class="fl about-us"><a class="txt fl" style="line-height:unset;" href="">关注我们：</a></li>
      <li class="fl dropdown weixin"><a href="" class="fl ico"></a>
        <div class="sub-panel wx-box">
          <span class="arrow-b">◆</span>
          <span class="arrow-a">◆</span>
          <p class="n"> 扫描二维码 <br>	关注官方微信 </p>
          <img src="/Application/Home/View/Static/images/qrcode_vmall_app01.png"></div>
      </li>
    </ul>
  </div>
</div>  -->
<!-- <div class="gome-wrap bg">
	<div style="position: relative;top: -40px;left: 190px;">
    	<a href="/" target="_blank" class="item fl"><img height="60" width="160" src="<?php echo ($plmshop_config['shop_info_store_logo']); ?>"></a>
    </div>
	<div class="gome-layout-area">
        <ul class="gome-nav">
        	<li><a href="<?php echo U('Addapply/index');?>" target="_blank">招商首页</a></li>
        	<?php
 $md5_key = md5("select * from `__PREFIX__article_cat` where parent_id=2"); $result_name = $sql_result_v = S("sql_".$md5_key); if(empty($sql_result_v)) { $Model = new \Think\Model(); $result_name = $sql_result_v = $Model->query("select * from `__PREFIX__article_cat` where parent_id=2"); S("sql_".$md5_key,$sql_result_v,0); } foreach($sql_result_v as $k=>$v): ?><li><a href="<?php echo U('Addapply/question',array('cat_id'=>$v[cat_id]));?>" target="_blank"><?php echo ($v["cat_name"]); ?></a></li><?php endforeach; ?>
        </ul>
    </div>
</div> -->
	<form action="" id="queryForm" name="query" method="post">
    <div class="gome-layout-area pb50 clearfix">
        <ul class="liucheng">
            <li class=""><b style="  background: #cc0000;color: white">1</b><span class="bl_1" style="  background: #cc0000"></span>	
                <!-- <div class="il1" >
                    　　<span ></span>
                </div> -->
        </li>
            <li class=""><b style="color: white">2</b><span class="bl_2" style=""></span>
                
            </li>
            <li><b>3</b><span></span>
                
            </li>
            <li><b>4</b><span></span>
                </li>
            <li class=""><b>√</b></li>
        </ul>
        <ul class="liucheng_1">
            <li style="color:#cc0000">
                    入驻须知
            </li>
            <li>
                    公司信息
            </li>
            <li>
                    店铺信息
            </li>
            <li>
                    资质上传
            </li>
            <li>
                    等待审核
            </li>
        </ul>    
        <div class="settled-agreement">
        	<div class="agreement-title"><span>协议确认</span></div>
            <div class="agreement-con">
            	<div class="agreement-article">
				<p>
				  <span style="color:#333333;FONT-SIZE: 10pt"><span style="font-family:宋体;">用户使用</span></span><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">“</span><span style="color:#333333;FONT-SIZE: 10pt"><span style="font-family:宋体;">在线入驻商家系统</span></span><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">”</span><span style="font-family:宋体;"><span style="color:#333333;FONT-SIZE: 10pt">前请认真阅读并理解本协议内容，本协议内容中以加粗方式显著标识的条款，请用户着重阅读、慎重考虑。</span></span>
				</p>
				<p>
				  <strong><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">1.</span><span style="font-family:宋体;color:#333333;FONT-SIZE: 10pt">本协议的订立</span></strong>
				</p>
				<p>
				  <span style="color:#333333;FONT-SIZE: 10pt"><span style="font-family:宋体;">在本网站（</span></span><a href="http://www.plmsh.com/" target="_blank"><span style="font-family:'Arial','sans-serif';FONT-SIZE: 10pt"><span style="color:#0000ff;">http://www.plmsh.com/</span></span></a><span style="color:#333333;FONT-SIZE: 10pt"><span style="font-family:宋体;">）登记注册，且符合本网站商家入驻标准</span></span><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">(</span><span style="color:#333333;FONT-SIZE: 10pt"><span style="font-family:宋体;">详见链接：</span></span><a href="http://demo3.plmsh.com/Home/Addapply/" target="_blank"><span style="font-family:'Arial','sans-serif';FONT-SIZE: 10pt"><span style="color:#0000ff;">http://www.plmsh.com/join/</span></span></a><span style="color:#333333;FONT-SIZE: 10pt"><span style="font-family:宋体;">）的用户（以下简称</span></span><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">“</span><span style="color:#333333;FONT-SIZE: 10pt"><span style="font-family:宋体;">商家</span></span><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">”</span><span style="color:#333333;FONT-SIZE: 10pt"><span style="font-family:宋体;">），在同意本协议全部条款后，方有资格使用</span></span><strong><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">“</span><span style="font-family:宋体;color:#333333;FONT-SIZE: 10pt">派乐咪在线商家在线入驻系统</span><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">”</span></strong><span style="color:#333333;FONT-SIZE: 10pt"><span style="font-family:宋体;">（以下简称</span></span><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">“</span><span style="color:#333333;FONT-SIZE: 10pt"><span style="font-family:宋体;">入驻系统</span></span><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">”</span><span style="color:#333333;FONT-SIZE: 10pt"><span style="font-family:宋体;">）</span></span><span style="color:#333333;FONT-SIZE: 10pt"><span style="font-family:宋体;">申请入驻。</span><strong><span style="font-family:宋体;">一经商家点击</span></strong></span><strong><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">“</span><span style="font-family:宋体;color:#333333;FONT-SIZE: 10pt">同意以上协议，下一步</span><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">”</span><span style="font-family:宋体;color:#333333;FONT-SIZE: 10pt">按键，即意味着商家同意与本网站签订本协议并同意受本协议约束。</span></strong>
				</p>
				<p>
				  <strong><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">2.</span><span style="font-family:宋体;color:#333333;FONT-SIZE: 10pt">入驻系统使用说明</span></strong>
				</p>
				<p>
				  <span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">2.1&nbsp;</span><span style="font-family:宋体;"><span style="color:#333333;FONT-SIZE: 10pt">商家通过入驻系统提出入驻申请，并按照要求填写商家信息、提供商家资质资料后，由本网站审核并与有合作意向的商家联系协商合作相关事宜，经双方协商一致线下签订书面</span><span style="FONT-SIZE: 10pt">《店铺服务协议》</span><span style="color:#333333;FONT-SIZE: 10pt">（以下简称“协议”）且商家按照</span></span><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">“</span><span style="color:#333333;FONT-SIZE: 10pt"><span style="font-family:宋体;">协议</span></span><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">”</span><span style="color:#333333;FONT-SIZE: 10pt"><span style="font-family:宋体;">约定支付相应平台使用费及保证金等必要费用后，商家正式入驻本网站。本网站将为入驻商家开通商家后台系统（网址为</span></span><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">:&nbsp;</span><a href="http://demo3.plmsh.com/index.php/Seller/" target="_blank"><span style="font-family:'Arial','sans-serif';FONT-SIZE: 10pt"><span style="color:#0000ff;">
				  http://demo3.plmsh.com/Seller/</span></span></a><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">)</span><span style="font-family:宋体;"><span style="color:#333333;FONT-SIZE: 10pt">，商家可通过商家后台系统在本网站运营自己的入驻店铺。</span></span>
				</p>
				<p>
				  <strong><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">2.2</span></strong><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">&nbsp;</span><strong><span style="font-family:宋体;color:#333333;FONT-SIZE: 10pt">商家以及本网站通过入驻系统做出的申请、资料提交及确认等各类沟通，仅为双方合作的意向以及本网站对商家资格审核的必备程序，除遵守本协议各项约定外，对双方不产生法律约束力。双方间最终合作事宜及运营规则均以</span><span style="font-family:'Arial','sans-serif';FONT-SIZE: 10pt">“</span><span style="font-family:宋体;FONT-SIZE: 10pt">协议</span><span style="font-family:'Arial','sans-serif';FONT-SIZE: 10pt">”</span><span style="font-family:宋体;color:#333333;FONT-SIZE: 10pt">的约定及商家后台系统公示的各项规则为准。</span></strong>
				</p>
				<p>
				  <strong><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">3.</span><span style="font-family:宋体;color:#333333;FONT-SIZE: 10pt">商家权利义务</span></strong>
				</p>
				<p>
				  <span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">3.1&nbsp;</span><span style="font-family:宋体;"><span style="color:#333333;FONT-SIZE: 10pt">商家应查看本网站公示的入驻商家标准，并确保资质符合本网站公示的基本要求，商家知悉并理解本网站将结合自身业务发展情况对商家进行选择。</span></span>
				</p>
				<p>
				  <span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">3.2&nbsp;</span><span style="font-family:宋体;"><span style="color:#333333;FONT-SIZE: 10pt">商家应按照本网站要求诚信提供入驻申请所需资料并如实填写相关信息，商家应确保提供的申请资料及信息真实、准确、完整、合法有效，经本网站审核通过后，商家不得擅自修改替换相应资料及主要信息。如商家提供的申请资料及信息不合法、不真实、不准确的，商家需承担因此引起的相应责任及后果，并且本网站有权立即终止商家使用入驻系统的权利。</span></span>
				</p>
				<p>
				  <span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">3.3&nbsp;</span><span style="color:#333333;FONT-SIZE: 10pt"><span style="font-family:宋体;">商家使用入驻系统提交的所有内容应不含有木马等软件病毒、政治宣传、或其他任何形式的</span></span><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">“</span><span style="color:#333333;FONT-SIZE: 10pt"><span style="font-family:宋体;">垃圾信息</span></span><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">”</span><span style="font-family:宋体;"><span style="color:#333333;FONT-SIZE: 10pt">、违法信息，且商家应按本网站规则使用入驻系统，不得从事影响或可能影响本网站或入驻系统正常运营的行为，否则，本网站有权清除前述内容，并有权立即终止商家使用入驻系统的权利。</span></span>
				</p>
				<p>
				  <span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">3.4&nbsp;</span><strong><span style="font-family:宋体;color:#333333;FONT-SIZE: 10pt">商家应注意查看入驻系统公示的入驻申请结果，</span></strong><span style="color:#333333;FONT-SIZE: 10pt"><span style="font-family:宋体;">如审核通过的商家，则按照本网站工作人员的通知按要求办理入驻的相关手续；如审批未通过的商家，则可自本网站通过入驻系统将审批结果告知商家</span><strong><span style="font-family:宋体;">（需商家登陆入驻系统查看）</span></strong><span style="font-family:宋体;">之日起</span></span><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">15 </span><span style="font-family:宋体;"><span style="color:#333333;FONT-SIZE: 10pt">日内提出异议并提供相应资料，如审批仍未通过的，则商家同意提交的申请资料及信息本网站无需返还，由本网站自行处理。</span></span>
				</p>
				<p>
				  <span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">3.5&nbsp;</span><span style="font-family:宋体;"><span style="color:#333333;FONT-SIZE: 10pt">商家不得以任何形式擅自转让或授权他人使用自己在本网站的用户帐号使用入驻系统，否则由此产生的不利后果均由商家自行承担。</span></span>
				</p>
				<p>
				  <strong><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">4.</span><span style="font-family:宋体;color:#333333;FONT-SIZE: 10pt">本网站权利义务</span></strong>
				</p>
				<p>
				  <span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">4.1&nbsp;</span><span style="font-family:宋体;"><span style="color:#333333;FONT-SIZE: 10pt">本网站开发的入驻系统仅为商家申请入驻的平台，商家正式入驻后，将在商家后台系统中运营本网站的入驻店铺。</span></span>
				</p>
				<p>
				  <span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">4.2&nbsp;</span><strong><span style="font-family:宋体;color:#333333;FONT-SIZE: 10pt">本网站有权对商家提供的资料及信息进行审核，并有权结合自身业务情况对合作商家进行选择；本网站对商家提交资料及信息的审核均不代表本网站对审核内容的真实、合法、准确、完整性作出的确认，商家应对提供资料及信息承担相应的法律责任。</span></strong>
				</p>
				<p>
				  <span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">4.3&nbsp;</span><strong><span style="font-family:宋体;color:#333333;FONT-SIZE: 10pt">无论商家是否通过本网站的审核，本网站有权对商家提供的资料及信息予以留存并随时查阅，</span></strong><span style="font-family:宋体;"><span style="color:#333333;FONT-SIZE: 10pt">同时，本网站有义务对商家提供的资料予以保密，但国家行政机关、司法机关等国家机构调取资料的除外。</span></span>
				</p>
				<p>
				  <span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">4.4&nbsp;</span><strong><span style="font-family:宋体;color:#333333;FONT-SIZE: 10pt">本网站会尽力维护本系统信息的安全，但法律规定的不可抗力，以及因为黑客入侵、计算机病毒侵入发作等原因造成商家资料泄露、丢失、被盗用、被篡改的，本网站不承担任何责任。</span></strong>
				</p>
				<p>
				  <span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">4.5&nbsp;</span><span style="font-family:宋体;"><span style="color:#333333;FONT-SIZE: 10pt">本网站应在现有技术支持的基础上确保入驻系统的正常运营，尽量避免入驻系统服务的中断给商家带来的不便。</span></span>
				</p>
				<p>
				  <strong><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">5.</span><span style="font-family:宋体;color:#333333;FONT-SIZE: 10pt">知识产权</span></strong>
				</p>
				<p>
				  <span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">5.1&nbsp;</span><span style="color:#333333;FONT-SIZE: 10pt"><span style="font-family:宋体;">本网站开发的入驻系统及其包含的各类信息的知识产权归本网站所有者所有，受国家法律保护</span></span><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">,</span><span style="font-family:宋体;"><span style="color:#333333;FONT-SIZE: 10pt">本网站有权不时地对入驻系统的内容进行修改，并在入驻系统中公示，无须另行通知商家。</span></span>
				</p>
				<p>
				  <span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">5.2&nbsp;</span><span style="font-family:宋体;"><span style="color:#333333;FONT-SIZE: 10pt">在法律允许的最大限度范围内，本网站所有者对本协议及入驻系统涉及的内容拥有解释权。</span></span>
				</p>
				<p>
				  <span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">5.3&nbsp;</span><span style="font-family:宋体;"><span style="color:#333333;FONT-SIZE: 10pt">商家未经本网站所有者书面许可，不得擅自使用、非法全部或部分的复制、转载、抓取入驻系统中的信息，否则由此给本网站造成的损失，商家应予以全部赔偿。</span></span>
				</p>
				<p>
				  <strong><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">6.</span><span style="font-family:宋体;color:#333333;FONT-SIZE: 10pt">入驻系统服务的终止</span></strong>
				</p>
				<p>
				  <span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">6.1&nbsp;</span><span style="font-family:宋体;"><span style="color:#333333;FONT-SIZE: 10pt">商家自行终止入驻申请，或商家经本网站审批未通过的，则入驻系统服务自行终止。</span></span>
				</p>
				<p>
				  <span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">6.2&nbsp;</span><span style="font-family:宋体;"><span style="color:#333333;FONT-SIZE: 10pt">商家使用本网站或入驻系统时，如违反相关法律法规或者违反本协议规定的，本网站有权随时终止商家使用入驻系统。</span></span>
				</p>
				<p>
				  <strong><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">7.</span><span style="font-family:宋体;color:#333333;FONT-SIZE: 10pt">本协议的修改</span></strong>
				</p>
				<p>
				  <span style="font-family:宋体;"><span style="color:#333333;FONT-SIZE: 10pt">本协议可由本网站随时修订，并将修订后的协议公告于本网站及入驻系统，修订后的条款内容自公告时起生效，并成为本协议的一部分。</span></span>
				</p>
				<p>
				  <strong><span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">8.</span><span style="font-family:宋体;color:#333333;FONT-SIZE: 10pt">法律适用与争议解决</span></strong>
				</p>
				<p>
				  <span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">8.1&nbsp;</span><span style="font-family:宋体;"><span style="color:#333333;FONT-SIZE: 10pt">本协议适用中华人民共和国法律。</span></span>
				</p>
				<p>
				  <span style="font-family:'Arial','sans-serif';color:#333333;FONT-SIZE: 10pt">8.2&nbsp;</span><span style="font-family:宋体;"><span style="color:#333333;FONT-SIZE: 10pt">因本协议产生的任何争议，由双方协商解决，协商不成的，任何一方有权向有管辖权的中华人民共和国大陆地区法院提起诉讼。</span></span>
				</p>
				<p>
				  <span style="font-family:Calibri;font-size:16px;">&nbsp;</span>
				</p>
				<p>&nbsp;
				  
				</p>
                </div>
            </div>
        </div>
        <label class="agreel" for="1"><input type="checkbox" hidefocus="ture" name="check2" id="check2" class="inputcheck" />我已阅读并同意接受以上所有协议</label >
        <div class="gome-btn">
        	<a href="javascript:nextStep();" class="gome-btn-red">同意并继续</a>
        </div>
    </div>
</form>
 
<!-- 去掉脚步，唯一min22 -->
<!--footerEnd-->
	<script language="javascript">
		function nextStep() {
			// 对协议确认做判断
			var check2 = document.getElementById("check2");
			if (check2.checked == true) {
				document.getElementById('queryForm').submit();
			} else {
				alert("请同意以上协议");
			}
		}
	</script>
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					head.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					head.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
</html>