<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<html>
<head>
<meta name="Generator" content="派乐咪 v1.1" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="format-detection" content="telephone=no" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="applicable-device" content="mobile">
<title><?php echo ($plmshop_config['shop_info_store_title']); ?></title>
<meta http-equiv="keywords" content="<?php echo ($plmshop_config['shop_info_store_keyword']); ?>" />
<meta name="description" content="<?php echo ($plmshop_config['shop_info_store_desc']); ?>" />
<meta name="Keywords" content="派乐咪触屏版  派乐咪 手机版" />
<meta name="Description" content="派乐咪触屏版   派乐咪商城 "/>
<link rel="stylesheet" href="/Application/Mobile/View/Static/css/public.css">
<link rel="stylesheet" href="/Application/Mobile/View/Static/css/user.css">
<script type="text/javascript" src="/Application/Mobile/View/Static/js/jquery.js"></script>
<script src="/Public/js/global.js"></script>
<script src="/Public/js/mobile_common.js"></script>
<script type="text/javascript" src="/Application/Mobile/View/Static/js/modernizr.js"></script>
<script type="text/javascript" src="/Application/Mobile/View/Static/js/layer.js" ></script>
</head>

<style>
body{font-size:x-small}
.offercard_page{width:5.9rem;height:2.44rem;background:url(/Application/Mobile/View/Static/images/offercard.png?1438789002) no-repeat;background-size:5.9rem 12.6rem;margin:0 auto; margin-top:10px; margin-bottom:10px}
.offercard_type1{background-position:0 -2.54rem}
.offercard_page .icon_doller{font-size:.48rem;font-style:normal;color:#FFF;opacity:0.7;float:left;margin:.5rem 0 0 .3rem}
.offercard_page .offercard_price{font-family:Impact;font-size:1.64rem;float:left;color:#FFF;opacity:0.7;margin:.6rem 0 0 .15rem;width:2.3rem;text-align:center;letter-spacing:-.1rem}
.offercard_page .offercard_price em{font-style:normal;font-size:1.4rem}
.offercard_page .offercard_typename{float:left;margin:1.5rem 0 0 .04rem;color:#fff;opacity:0.7}
.offercard_page .offercard_classfy{font-size:.24rem;color:#FFF;opacity:0.7;float:left;margin:.25rem 0 0 .1rem;width:2.5rem}
.offercard_page .offercard_type{font-size:.24rem;color:#FFF;opacity:0.7;float:left;margin:.1rem 0 0 .1rem;width:2.5rem}
.offercard_page .offercard_use{float:left;background:#72c039;height:.56rem;width:2.2rem;border-radius:.28rem;line-height:.56rem;text-align:center;color:#d5ffb7;margin:.25rem 0 0 .1rem}
.offercard_page .offercard_limit{width:80%;float:left;margin:0 0 0 1.08rem;color:#61ac2b}
.offercard_type2{background-position:0 -5.08rem}
.offercard_type2 .offercard_use{color:#c0ddff;background:#5ba0f1}
.offercard_type2 .offercard_limit{color:#3984dc}
.offercard_type3{background-position:0 -7.62rem}
.offercard_type3 .offercard_use{color:#ffa4aa;background:#e03c47}
.offercard_type3 .offercard_limit{color:#dd343f}
.offercard_type4{background-position:0 -10.16rem}
.offercard_type4 .offercard_use{color:#ffd6ae;background:#f2a456}
.offercard_type4 .offercard_limit{color:#e09041}
.offercard_over{background-position:0 0}
.offercard_over .offercard_use{color:#e9e9e9;background:#ccc}
.offercard_over .offercard_limit{color:#c4c4c4}
</style>
<script type="text/javascript">
	function remReSize(){var w = $(window).width();try{w = $(parent.window).width();}catch(ex){};if(w>640){w = 640;};$('html').css('font-size',100/640*w+'px');$('#js_style_for_pc').remove();$('body').append('<style id="js_style_for_pc">.m_header{margin-left: -'+w/2+'px;}.m_menu{margin-left: -'+w/2+'px;}</style>');};remReSize();$(window).resize(remReSize);$(document).ready(function() {remReSize();});for(var i=0;i<3;i++){setTimeout(remReSize, 100*i);};</script>
<body>
<header>
  <div class="tab_nav">
    <div class="header">
      <div class="h-left"><a class="sb-back" href="javascript:history.back(-1)" title="返回"></a></div>
      <div class="h-mid">我的优惠券</div>
      <div class="h-right">
        <aside class="top_bar">
          <div onClick="show_menu();$('#close_btn').addClass('hid');" id="show_more"><a href="javascript:;"></a> </div>
        </aside>
      </div>
    </div>
  </div>
</header>
<script type="text/javascript" src="/Application/Mobile/View/Static/js/mobile.js" ></script>
<div class="goods_nav hid" id="menu">
      <div class="Triangle">
        <h2></h2>
      </div>
      <ul>
        <li><a href="<?php echo U('Index/index');?>"><span class="menu1"></span><i>首页</i></a></li>
        <li><a href="<?php echo U('Goods/categoryList');?>"><span class="menu2"></span><i>分类</i></a></li>
        <li><a href="<?php echo U('Cart/cart');?>"><span class="menu3"></span><i>购物车</i></a></li>
        <li style=" border:0;"><a href="<?php echo U('User/index');?>"><span class="menu4"></span><i>我的</i></a></li>
   </ul>
 </div> 
<div class="order">
	<div class="Evaluation">
	      <ul>
	      	<li><a href="<?php echo U('User/coupon',array('type'=>0));?>" class="tab_head <?php if($_GET[type] == 0): ?>on<?php endif; ?>" id="goods_ka1">未使用</a></li>
	        <li><a href="<?php echo U('User/coupon',array('type'=>1));?>" class="tab_head <?php if($_GET[type] == 1): ?>on<?php endif; ?>" id="goods_ka2">已使用</a></li>
	        <li><a href="<?php echo U('User/coupon',array('type'=>2));?>" class="tab_head <?php if($_GET[type] == 2): ?>on<?php endif; ?>" id="goods_ka3">已过期</a></li>
	      </ul>
	</div>
	
	<div class="Emain" id="user_goods_ka_1" style="display:block">
		<?php if(is_array($coupon_list)): $i = 0; $__LIST__ = $coupon_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$coupon): $mod = ($i % 2 );++$i;?><div class="offercard_page offercard_type<?php if($_GET['type'] == 0): ?>1<?php endif; if($_GET['type'] == 1): ?>2<?php endif; if($_GET['type'] == 2): ?>0<?php endif; ?>">
				<span class="offercard_price">&yen;<em><?php echo (intval($coupon["money"])); ?></em></span>
				<span class="offercard_typename">券</span>
				<span class="offercard_classfy">消费满</span>
				<span class="offercard_type"><?php echo ($coupon["condition"]); ?>使用</span>
				<a class="offercard_use" href="javascript:void();">&yen;<?php echo ($coupon["money"]); ?></a>
				<span class="offercard_limit">使用期<?php echo (date('Y-m-d',$coupon["use_end_time"])); ?></span>
				<i class="clear"></i>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div> 	 
<?php if(!empty($coupon_list)): ?><div id="getmore" style="font-size:.24rem;text-align: center;color:#888;padding:.25rem .24rem .4rem; clear:both">
  		<a href="javascript:void(0)" onClick="ajax_sourch_submit()">点击加载更多</a>
    </div><?php endif; ?>	
</div>
<script>
var  page = 1;
 /*** ajax 提交表单 查询订单列表结果*/  
 function ajax_sourch_submit()
 {	 	 	 
        page += 1;
		$.ajax({
			type : "GET",
			url:"<?php echo U('Mobile/User/coupon',array('type'=>$_GET['type']),'');?>/is_ajax/1/p/"+page,//+tab,
//			data : $('#filter_form').serialize(),// 你的formid 搜索表单 序列化提交
			success: function(data)
			{
				if($.trim(data) == '')
					$('#getmore').hide();
				else
				    $("#user_goods_ka_1").append(data);
			}
		}); 
 } 
</script>
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
</body>
</html>