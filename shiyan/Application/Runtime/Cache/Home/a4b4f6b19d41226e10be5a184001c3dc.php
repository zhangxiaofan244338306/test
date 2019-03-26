<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="zh-cn" http-equiv="content-language">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="Cache-control" content="public" max-age="no-cache">
<link rel="canonical" href="http://beauty.tp-shop.cn">
<title>频道页面-<?php echo ($plmshop_config['shop_info_store_title']); ?></title>
<meta http-equiv="keywords" content="<?php echo ($plmshop_config['shop_info_store_keyword']); ?>" />
<meta name="description" content="<?php echo ($plmshop_config['shop_info_store_desc']); ?>" />
<link href="/Application/Home/View/Static/css/beauty.min.css" rel="stylesheet" type="text/css">
<link href="/Application/Home/View/Static/css/beautycare.css" rel="stylesheet" type="text/css">
<link href="/Application/Home/View/Static/css/channel.css" rel="stylesheet" type="text/css">
</head>
<body>
<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
<script src="/Public/js/global.js"></script>
<script src="/Public/js/layer/layer.js"></script> 
<link rel="stylesheet" type="text/css" href="/Application/Home/View/Static/css/common.min.css">
<link rel="stylesheet" type="text/css" href="/Application/Home/View/Static/css/main.min.css">
<style>.fn-clear .words{ line-height:1.5}.m-top-nav a{color:#000;}</style>
<div class="fn-cms-top">
<?php $pid =1;$ad_position = M("ad_position")->cache(true,PLM_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1548046800 and end_time > 1548046800 ")->order("orderby desc")->cache(true,PLM_CACHE_TIME)->limit("1")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 1- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $key=>$v): $v[position] = $ad_position[$v[pid]]; if($_GET[edit_ad] && $v[not_adv] == 0 ) { $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]"; $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name]; $v[target] = 0; } ?><div fnp="m-top-banner" style="background:<?php echo ($v["bgcolor"]); ?>;" class="m-top-banner rel editable" moduleId="2010053" style="position:relative;min-height:35px;">
	 <div class="bar container">
	 	<a class="img-small" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?> href="<?php echo ($v["ad_link"]); ?>"> <img class="img100" src="<?php echo ($v[ad_code]); ?>"  title="<?php echo ($v[title]); ?>" style="<?php echo ($v[style]); ?>"/></a>   
	 </div>
	 <i data-role="close" class="icon icon-close"></i>
</div><?php endforeach; ?>
<div class="m-top-bar editable" moduleId="1539923" style="position:relative;min-height:25px;">
  <div class="container">
    <ul class="fl">
      <li class="fl J_login_status dn nologin">
      	<a class="menu-item fl J_do_login J_chgurl" href="<?php echo U('Home/user/login');?>">
        <span>Hi，请登录</span> </a><a class="menu-item fl ht" href="<?php echo U('Home/user/reg');?>">免费注册</a>
      </li>
      <li class="fl J_login_status dn islogin"><a href="<?php echo U('Home/user/index');?>" class="userinfo" title="" target="_self"></a>
      	<a href="<?php echo U('Home/user/logout');?>" style="margin:0 10px;" title="退出" target="_self">退出</a></li>
      <li class="fl sep"></li>
      <!-- 
      <li class="fl select-city dropdown">
        <span class="menu-item">
        <span>送货至：</span>
        <a title="" alt="" href="" class="J_cur_place"></a><i class="dd"></i></span>
      </li>-->
    </ul>
    <ul class="fr bar-right">
      <li class="fl dropdown my-feiniu"><a class="menu-item" target="_blank" href="<?php echo U('Home/Newjoin/index');?>">
        <span>商家入驻</span><i class="dd"></i></a>
        <ul class="sub-panel">
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('/seller/Admin/login');?>">商家登录</a></li>
        </ul>
      </li>
      <li class="fl dropdown my-feiniu"><a class="menu-item" target="_blank" href="<?php echo U('Home/user/index');?>">
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
      <li class="fl"><a class="menu-item" href="<?php echo U('Home/Article/detail',array('article_id'=>17));?>" target="_blank">
        <span>帮助中心</span></a></li>
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
</div>
<div class="m-top-sidebar m-sdb-sale J-sdb " moduleId="2026855" style="z-index:401;" fnp="m-top-sidebar">
  <div class="t-pic"><a href="" target="_blank" class="img-small"><img class="img100" src="/Application/Home/View/Static/images/csmrrvbluacaoflbaacb1akwoks248.jpg"></a><a href="" target="_blank" class="img-big"><img class="img100" src="/Application/Home/View/Static/images/csmrsfbluaoaejs7aacni7xvdgs548.jpg"></a></div>
  <div class="t-main"><a href="" class="bg-floor"></a>
    <div class="tb-tabs">
      <div class="tb-tabs-up">
      	<a href="<?php echo U('Home/Cart/cart');?>" class="i-cart" data-role="ico-cart"><i></i>
        <span class="text">购物车</span><span id ="miniCartRightQty" class="num">0</span></a>
        <a href="<?php echo U('/Home/User/order_list');?>" target="_blank" class="i-ico i-ico-order" data-role="ico-btn">
        <span>我的订单</span><i class="demo-icon">&#xe807;</i></a>
        <a href="<?php echo U('/Home/User/coupon');?>" target="_blank" class="i-ico i-ico-coupon" data-role="ico-btn">
        <span>我的优惠券</span><i class="demo-icon">&#xe80f;</i></a>
        <a href="<?php echo U('/Home/User/goods_collect');?>" target="_blank" class="i-ico i-ico-fav" data-role="ico-btn">
        <span>我的收藏</span><i class="demo-icon">&#xe808;</i></a>
        <a href="<?php echo U('/Home/User/comment');?>" target="_blank" class="i-ico i-ico-foot" data-role="ico-btn">
        <span>我的评论</span><i class="demo-icon">&#xe805;</i></a>
      </div>
      <div class="tb-tabs-down">
        <div class="rel" style="display: none;" id="cms_share">
          <div data-tag="share_1" class="bdsharebuttonbox"><a data-cmd="more" class="bds_more" href=""></a></div>
          <a class="i-ico i-ico-share" href="">
          <span>分享</span>
          <i></i></a></div>
        <a href="" target="_blank" class="i-ico i-ico-ur" data-role="ico-btn">
        <span>意见反馈</span>
        <i></i></a><a href="" class="i-ico i-ico-gotop" data-role="ico-gotop"><em></em>
        <span>返回顶部</span>
        <i></i></a></div>
      <div class="my-cart-shim"></div>
    </div>
    <div class="my-cart">
      <div class="mn-c-top" ><a href="">我的购物车</a><i data-role="cart-close-btn"></i></div>
      <div class="sub-panel u-fn-cart u-mn-cart">
        <div id="miniCartRight"></div>
        <div class="empty-c fn-hide">
          <span class="ma"><i class="c-i oh"></i>购物车中没有商品哟！</span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="m-top-search editable" moduleId="1539927" style="position:relative;min-height:35px;">
  <div class="container">
    <div class="logo fl">
    	<a href="/" target="_blank" class="item fl">
    	<img height="60" width="160" src="<?php echo ($plmshop_config['shop_info_store_logo']); ?>"></a>
    	<!-- <a href="" target="_blank" class="item fl"><img height="60" width="140" src="/Application/Home/View/Static/images/csmrrvbluvoamtx8aaeoswlm7gg007.gif"></a>--
    	<a href="http://beauty.tp-shop.cn" target="_blank" class="item fl">
    		<img height="60" width="140" src="http://img14.fn-mart.com/group1/M00/DC/08/CsnBP1Y691GAZQRtAAAGc8GxEf8284.png">
    	</a>-->
    </div>
    <div fnp="m-top-search-form" class="m-top-search-form fl">
       <form name="sourch_form" id="sourch_form" method="post" action="<?php echo U("/Home/Goods/search");?>">
        <div data-role="form-inner" class="s-form"><i class="s-ico"></i>
          <input type="text" data-role="input-search" autocomplete="off" class="fl s-input" name="q" id="q" value="<?php echo I('q'); ?>" placeholder="搜索关键字"/>
          <a data-role="btn" href="javascript:void(0);" class="s-btn fl" onclick="if($.trim($('#q').val()) != '') $('#sourch_form').submit();">搜索</a>
        </div>
        <div class="s-hotword">           
        	<?php if(is_array($universal_config["hot_keywords"])): foreach($universal_config["hot_keywords"] as $k=>$wd): ?><a href="<?php echo U('Home/Goods/search',array('q'=>$wd));?>" <?php if($wd == I('q')): ?>class="ht"<?php endif; ?>><?php echo ($wd); ?></a><?php endforeach; endif; ?>
        </div>
        <ul data-role="tip-list" class="s-tip-list">
        </ul>
      </form>
    </div>
    <div class="my-cart fr" id="hd-my-cart">
      <p class="c-n fl">我的购物车</p>
      <p class="c-num fl quantity">(<span class="count cart_quantity" id="cart_quantity"></span>) <i class="i-c oh"></i></p>
      <div id="show_minicart" class="sub-panel u-fn-cart u-mn-cart">
        <div id="minicart" class="minicartContent">
          <div class="empty-c fn-hide">
            <span class="ma"><i class="c-i oh"></i>购物车中没有商品哟！</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div fnp="m-top-search-fixed" class="m-top-search-fixed"><i class="s-bg"></i>
  <div class="fix-bar">
    <div class="container">
      <div class="u-g-logo fl"><a target="_blank" class="fl logo" href=""><img height="40" width="100" src="/Application/Home/View/Static/images/logo3.png"></a></div>
      <div fnp="m-top-search-form" class="m-top-search-form fl">
        <form data-role="form" action="http://search.tp-shop.cn">
          <div data-role="form-inner" class="s-form"><i class="s-ico"></i>
            <input type="text" data-role="input-search" autocomplete="off" class="fl s-input" name="q">
            <input type="hidden" data-role="input-c" name="cpseq" disabled="disabled">
            <a data-role="btn" href="" class="s-btn fl">搜索</a></div>
          <ul data-role="tip-list" class="s-tip-list">
          </ul>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="m-top-nav editable" moduleId="1539926" style="position:relative;min-height:35px;">
  <div class="main-container new-year">
    <div class="main-title-wrap">
    	<a href="javascript:" target="_blank" class="main-title">
      		<span class="ico"><i class="il il-lt"></i><i class="il il-lc"></i><i class="il il-lb"></i>
      		<i class="il il-rt"></i><i class="il il-rc"></i><i class="il il-rb"></i></span>
      		商城商品分类
      	</a>
      <div class="main-slider" style ="display:none;position: absolute;top: 40px;">
          <div fnp="nav-list" class="nav-list eidtModule" moduleId="nav">
            <ul class="nav-list-warpper">
              <?php
 $md5_key = md5("select * from `__PREFIX__goods_category` where is_show = 1 and `level` = 1  limit 15"); $result_name = $sql_result_v = S("sql_".$md5_key); if(empty($sql_result_v)) { $Model = new \Think\Model(); $result_name = $sql_result_v = $Model->query("select * from `__PREFIX__goods_category` where is_show = 1 and `level` = 1  limit 15"); S("sql_".$md5_key,$sql_result_v,0); } foreach($sql_result_v as $k=>$v): ?><li data-role="nav-item" class="nav-item" index="<?php echo ($v["id"]); ?>">
	                <span class="nav-menu-item"><i class="iconfont icon"></i>
	                <span class="title"><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v[id]));?>" target="_blank"><?php echo ($v["name"]); ?></a></span>
	                </span>
	              </li><?php endforeach; ?>
            </ul>
           <?php if(is_array($goods_category_tree)): foreach($goods_category_tree as $k=>$vo): ?><div data-role="menu-sub" class="menu-sub" index ="<?php echo ($k); ?>" style="height:440px">
		        <div class="sub-columns">
		        	<?php if(is_array($vo["tmenu"])): foreach($vo["tmenu"] as $k2=>$v2): if($k2%3 == 0): ?><div class="fn-clear column-item">
		                  <div class="tlt">
		                    <span class="name"><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v2[id]));?>" target="_blank"><?php echo ($v2["name"]); ?></a></span>
		                  </div>
		                  <div class="words">
		                  	<?php if(is_array($v2["sub_menu"])): foreach($v2["sub_menu"] as $key=>$v3): ?><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v3[id]));?>" <?php if($v3[is_hot] == 1): ?>class="lh"<?php endif; ?> target="_blank"><?php echo ($v3["name"]); ?></a><?php endforeach; endif; ?>
		                  </div>
		                </div><?php endif; endforeach; endif; ?>
	            </div>
	            
	            <div class="sub-columns">
		        	<?php if(is_array($vo["tmenu"])): foreach($vo["tmenu"] as $k2=>$v2): if($k2%3 == 1): ?><div class="fn-clear column-item">
		                  <div class="tlt">
		                    <span class="name"><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v2[id]));?>" target="_blank"><?php echo ($v2["name"]); ?></a></span>
		                  </div>
		                 <div class="words">
		                  	<?php if(is_array($v2["sub_menu"])): foreach($v2["sub_menu"] as $key=>$v3): ?><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v3[id]));?>" <?php if($v3[is_hot] == 1): ?>class="lh"<?php endif; ?> target="_blank"><?php echo ($v3["name"]); ?></a><?php endforeach; endif; ?>
		                  </div>
		                </div><?php endif; endforeach; endif; ?>
	            </div>
		        <div class="sub-columns">
		        	<?php if(is_array($vo["tmenu"])): foreach($vo["tmenu"] as $k2=>$v2): if($k2%3 == 2): ?><div class="fn-clear column-item">
		                  <div class="tlt">
		                    <span class="name"><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v2[id]));?>" target="_blank"><?php echo ($v2["name"]); ?></a></span>
		                  </div>
		                  <div class="words">
		                  	<?php if(is_array($v2["sub_menu"])): foreach($v2["sub_menu"] as $key=>$v3): ?><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v3[id]));?>" <?php if($v3[is_hot] == 1): ?>class="lh"<?php endif; ?> target="_blank"><?php echo ($v3["name"]); ?></a><?php endforeach; endif; ?>
		                  </div>
		                </div><?php endif; endforeach; endif; ?>
	            </div>
	            <div class="right-wrap">
                <ul class="li-item">
                  <?php if(is_array($vo["brand"])): $i = 0; $__LIST__ = $vo["brand"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$br): $mod = ($i % 2 );++$i;?><li class="item" <?php if(($mod) == "1"): ?>even<?php endif; ?>>
	                  	<a href="<?php echo U('Goods/goodsList',array('brand_id'=>$br[id]));?>" target="_blank">
	                  	<img class="nav-prod" src="/Application/Home/View/Static/images/loading.gif" alt="" data-images="<?php echo ($br["logo"]); ?>"></a>
	                  </li><?php endforeach; endif; else: echo "" ;endif; ?>
               	  <li class="item"><a href="" target="_blank"><img class="nav-prod" src="/Application/Home/View/Static/images/loading.gif" alt="" data-images=""></a></li>
                  <!-- 此处保留 -->
                  <li class="item even"><a href="" target="_blank"><img class="nav-prod" src="/Application/Home/View/Static/images/loading.gif" alt="" data-images=" "></a></li>
                </ul>
                <?php $pid =80+$k;$ad_position = M("ad_position")->cache(true,PLM_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1548046800 and end_time > 1548046800 ")->order("orderby desc")->cache(true,PLM_CACHE_TIME)->limit("1")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 1- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $key=>$vv): $vv[position] = $ad_position[$vv[pid]]; if($_GET[edit_ad] && $vv[not_adv] == 0 ) { $vv[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $vv[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$vv[ad_id]"; $vv[title] = $ad_position[$vv[pid]][position_name]."===".$vv[ad_name]; $vv[target] = 0; } ?><a href="<?php echo ($vv["ad_link"]); ?>" target="_blank">
	          	   	  <img title="<?php echo ($vv[title]); ?>" style="<?php echo ($vv[style]); ?>" data-images="<?php echo ($vv[ad_code]); ?>" class="right-img nav-prod" src="/Application/Home/View/Static/images/loading.gif">
	          	   </a><?php endforeach; ?> 
                </div>
	        </div><?php endforeach; endif; ?>
       </div>
      </div>
    </div>
    <ul class="main-nav">
      <li class="nav-item"><a class="menu-item <?php if( CONTROLLER_NAME == 'Index' ): ?>menu-item-active"<?php endif; ?> target="_blank" href="/" style="overflow: visible;">首页 </a></li>
      <?php
 $md5_key = md5("SELECT * FROM `__PREFIX__navigation` where is_show = 1 ORDER BY `sort` DESC"); $result_name = $sql_result_v = S("sql_".$md5_key); if(empty($sql_result_v)) { $Model = new \Think\Model(); $result_name = $sql_result_v = $Model->query("SELECT * FROM `__PREFIX__navigation` where is_show = 1 ORDER BY `sort` DESC"); S("sql_".$md5_key,$sql_result_v,0); } foreach($sql_result_v as $k=>$v): ?><li class="nav-item"><a  style="overflow: visible;"   href="<?php echo ($v[url]); ?>" 
       		<?php  if($_SERVER['REQUEST_URI']==str_replace('&amp;','&',$v[url])){ echo "class='menu-item menu-item-active'";} else{ echo "class='menu-item'"; } ?>> <?php echo ($v[name]); ?> </a></li><?php endforeach; ?>
      <li class="nav-item"><a class="menu-item " href="javascript:void();" style="overflow: visible;">官方网站<i class="e-hot"></i></a></li>
    </ul>  
   </div>
</div>
<div>
  <div class="J_side_nav_trigger"></div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$('.main-title').hover(function(){
	 	$('.main-slider').show();
	}, function(){
	 	$('.main-slider').hide();
	});
	
	$('.nav-list-warpper').hover(function(){
	 	$('.main-slider').show();
	}, function(){
	 	$('.main-slider').hide();
	});
	     
	get_cart_num();
	var uname= getCookie('uname');
	if(uname == ''){
		$('.islogin').remove();
		$('.nologin').show();
	}else{
		$('.nologin').remove();
		$('.islogin').show();
		$('.userinfo').html(decodeURIComponent(uname));
	}
});


function get_cart_num(){
  var cart_cn = getCookie('cn');
  if(cart_cn == ''){
	$.ajax({
		type : "GET",
		url:"/index.php?m=Home&c=Cart&a=header_cart_list",//+tab,
		success: function(data){								 
			cart_cn = getCookie('cn');						
		}
	});	
  }
  $('#cart_quantity').html(cart_cn);
  $('#miniCartRightQty').html(cart_cn);
}
</script>
<div class="clearfix tp_page" id="wrapper">
  <div class="g-sld tracker_market" id="bgcolor" style="background: rgb(159, 197, 232);">
    <div class="g-pst ma m-sld-clh fixed"> 
      <!-- 左侧导航 begin -->
      <div class="m_wg_area m-sld-lst fl" data-local="leftmenu" data-max="1"> 
        <!-- menu nav -->
        <div class="J_wd_pendant">           
          <!-- 二级begin --> 
          <!-- lst -->
          <div class="m-lst g-bk">
          <h1 style="line-height:20px;font-size:14px;color:#3c3c3c;padding:10px 0 10px 15px;background-color:#ffdadf;overflow:hidden;white-space: nowrap;">
          		<?php echo ($parent_name); ?>
          </h1>
            <ul>
              <?php if(is_array($channel_cate)): foreach($channel_cate as $k=>$cat): ?><li class="">
	                <dl class="g-ln" <?php if(($k+1) == count($channel_cate)): ?>style="border: none;"<?php endif; ?>>
	                  <dt><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$cat[id]));?>" class="" target="_blank"><?php echo ($cat["name"]); ?></a></dt>
	                  <dd>
	                  	  <?php if(is_array($cat["hot_sub"])): foreach($cat["hot_sub"] as $key=>$vv): ?><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$vv[id]));?>" class="z-select" target="_blank"><?php echo ($vv["name"]); ?></a><?php endforeach; endif; ?>
		               </dd>
	                </dl><i>&gt;</i>
	              </li><?php endforeach; endif; ?>
            </ul>
          </div>
          <!-- 二级end -->

          <!-- 三级begin -->
          <div class="m-dtl">
          	<?php if(is_array($channel_cate)): foreach($channel_cate as $k=>$vo): ?><div class="g-snv" style="margin-top:<?php echo ($k*32+40); ?>px;display:none;">
              <div class="g-szt fixed"> 
               <?php if(is_array($vo["sub_menu"])): foreach($vo["sub_menu"] as $k2=>$v2): ?><span><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v2[id]));?>" class="" target="_blank"><?php echo ($v2["name"]); ?></a></span><?php endforeach; endif; ?>
			 </div>
              <div class="g-brd fixed">
                <p>
                	 <?php if(is_array($vo["brand"])): foreach($vo["brand"] as $key=>$v3): ?><a href="<?php echo U('Home/Goods/goodList',array('brand_id'=>$v3[id]));?>" target="_blank"> 
	                	<img src="<?php echo ($v3["logo"]); ?>" width="70" height="30" alt="" title="<?php echo ($v3[name]); ?>"></a><?php endforeach; endif; ?>
    			</p>
              </div>
            </div><?php endforeach; endif; ?>
          </div>
          <!-- 三级 end --> 
        </div>
      </div>
      <!-- 左侧导航 end --> 
      
      <!-- 右侧的轮播产品展示 -->
      <div class="m_wg_area m-mum-slide oh fl" data-local="toproll" data-max="1">
        <div class="J_animateSlider J_wd_pendant" data-arrow="1" data-position="2" data-animate="1" data-auto="1" data-slider="1">
          <div class="u-ms-lst slide fl oh" id="slideMain">
            <ul class="slider-main">
              <?php $pid ='50'.$_GET[id].'1';$ad_position = M("ad_position")->cache(true,PLM_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1548046800 and end_time > 1548046800 ")->order("orderby desc")->cache(true,PLM_CACHE_TIME)->limit("6")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 6- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $k=>$v): $v[position] = $ad_position[$v[pid]]; if($_GET[edit_ad] && $v[not_adv] == 0 ) { $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]"; $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name]; $v[target] = 0; } ?><li data-bgcolor="<?php echo ($v["bgcolor"]); ?>" class="<?php if($k == 0): ?>z-select<?php endif; ?>" style="position: absolute; z-index: 0; opacity: 0;"> 
              	<a href="<?php echo ($v["ad_link"]); ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?>><img src="<?php echo ((isset($v[ad_code]) && ($v[ad_code] !== ""))?($v[ad_code]):'/Application/Home/View/Static/images/5795a88a4d911.jpg'); ?>" alt=""  title="<?php echo ($v[title]); ?>" style="<?php echo ($v[style]); ?>"></a> </li><?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
      <!-- 右侧的轮播产品展示 end --> 
      <!-- 轮播右侧小广告 -->
      <div class="m_wg_area" data-local="topright" data-max="1"> </div>
      <!-- 轮播右侧小广告 end --> 
    </div>
  </div>
  <div class="J_side_nav_trigger"></div>
  <div class="module editable F_dynamic" moduleid="1551308" parentmoduleid="1551308">
    <div class="layout container mt30">
      <div class="layout-hd">
        <div class="layout-title fl">达人推荐</div>
      </div>
      <div class="recommend-goods">
      
       <?php $pid ='50'.$_GET[id].'2';$ad_position = M("ad_position")->cache(true,PLM_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1548046800 and end_time > 1548046800 ")->order("orderby desc")->cache(true,PLM_CACHE_TIME)->limit("1")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 1- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $k=>$v): $v[position] = $ad_position[$v[pid]]; if($_GET[edit_ad] && $v[not_adv] == 0 ) { $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]"; $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name]; $v[target] = 0; } ?><div class="item "> 
         <a href="<?php echo ($v["ad_link"]); ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?>> <img src="<?php echo ($v[ad_code]); ?>" title="<?php echo ($v[title]); ?>" style="<?php echo ($v[style]); ?> class="img100">
          <div class="word">
            <p class="up"><?php echo ($v[ad_name]); ?></p>
            <p class="down"></p>
          </div>
          </a> 
        </div><?php endforeach; ?>
       <?php $pid ='50'.$_GET[id].'3';$ad_position = M("ad_position")->cache(true,PLM_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1548046800 and end_time > 1548046800 ")->order("orderby desc")->cache(true,PLM_CACHE_TIME)->limit("1")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 1- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $k=>$v): $v[position] = $ad_position[$v[pid]]; if($_GET[edit_ad] && $v[not_adv] == 0 ) { $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]"; $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name]; $v[target] = 0; } ?><div class="item "> 
         <a href="<?php echo ($v["ad_link"]); ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?>> <img src="<?php echo ($v[ad_code]); ?>" title="<?php echo ($v[title]); ?>" style="<?php echo ($v[style]); ?> class="img100">
          <div class="word">
            <p class="up"><?php echo ($v[ad_name]); ?></p>
            <p class="down"></p>
          </div>
          </a> 
        </div><?php endforeach; ?>
       <?php $pid ='50'.$_GET[id].'4';$ad_position = M("ad_position")->cache(true,PLM_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1548046800 and end_time > 1548046800 ")->order("orderby desc")->cache(true,PLM_CACHE_TIME)->limit("1")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 1- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $k=>$v): $v[position] = $ad_position[$v[pid]]; if($_GET[edit_ad] && $v[not_adv] == 0 ) { $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]"; $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name]; $v[target] = 0; } ?><div class="item "> 
         <a href="<?php echo ($v["ad_link"]); ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?>> <img src="<?php echo ($v[ad_code]); ?>" title="<?php echo ($v[title]); ?>" style="<?php echo ($v[style]); ?> class="img100">
          <div class="word">
            <p class="up"><?php echo ($v[ad_name]); ?></p>
            <p class="down"></p>
          </div>
          </a> 
        </div><?php endforeach; ?>
       <?php $pid ='50'.$_GET[id].'5';$ad_position = M("ad_position")->cache(true,PLM_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1548046800 and end_time > 1548046800 ")->order("orderby desc")->cache(true,PLM_CACHE_TIME)->limit("1")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 1- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $k=>$v): $v[position] = $ad_position[$v[pid]]; if($_GET[edit_ad] && $v[not_adv] == 0 ) { $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]"; $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name]; $v[target] = 0; } ?><div class="item last"> 
         <a href="<?php echo ($v["ad_link"]); ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?>> <img src="<?php echo ($v[ad_code]); ?>" title="<?php echo ($v[title]); ?>" style="<?php echo ($v[style]); ?> class="img100">
          <div class="word">
            <p class="up"><?php echo ($v[ad_name]); ?></p>
            <p class="down"></p>
          </div>
          </a> 
        </div><?php endforeach; ?>                     
        
      </div>
    </div>
  </div>
  <!-- 1~6F-s -->
  <?php if(is_array($channel_cate)): foreach($channel_cate as $k=>$vo): if($k < 3): ?><div class="module F_dynamic" parentmoduleid="<?php echo ($k); ?>">
    <div class="layout beauty-floor beauty-floor-01 container mt30" data-floor="1">
      <div class="layout-hd editable" moduleid="">
        <div class="layout-title fl" floorname="面部护肤" icon=""><?php echo ($vo["name"]); ?></div>
        <div class="cates-list">
	        <?php if(is_array($vo["sub_menu"])): foreach($vo["sub_menu"] as $k=>$v2): if($k > 5): ?><a class="cates"<?php if($v2[is_hot] == 1): ?>style="color: #da3a4c;"<?php endif; ?> ><?php echo ($v2["name"]); ?></a><?php endif; endforeach; endif; ?>
	    </div>
      </div>
      <div class="floor floor-switch">
        <div class="floor-left step-slide editable ui-switchable" moduleid="1557937_left" fnp="switch-slide" data-widget-cid="widget-f060b19407b91859ce5e6716883a8148">
          <div class="step"> <a> <img class="img100" 
            src="" 
            data-images=""
            ></a>
            <div class="nav" style="top:68px">
              <ul data-role="nav" class="nav-list ui-switchable-nav">
              	<?php if(is_array($vo["sub_menu"])): foreach($vo["sub_menu"] as $k=>$v3): if($k < 6): ?><li class="ui-switchable-trigger <?php if($k == 0): ?>ui-switchable-active<?php endif; ?>">
              				<span><?php echo ($v3["name"]); ?></span><em></em><i></i>
              			</li><?php endif; endforeach; endif; ?>
              </ul>
            </div>
          </div>
          <div class="slide">
            <div class="slide-wrap ui-switchable-content" data-role="content">
              <?php if(is_array($vo["sub_menu"])): foreach($vo["sub_menu"] as $k=>$vv): if($k < 7): ?><div class="slide-item" <?php if($k > 0): ?>style="display: none;"<?php endif; ?> >
	                <ul class="slide-left">
	                <?php if(is_array($vv["sub_goods"])): foreach($vv["sub_goods"] as $k2=>$vg): ?><li class="good good-big">
	                    <div class="info"> 
	                    	<span class="num">NO.<?php echo ($k2+1); ?></span> 
	                    	<a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$vg[goods_id]));?>" class="title" target="_blank"><?php echo ($vg["goods_name"]); ?></a> 
	                    	<span class="price">￥<font id="" class=""><?php echo ($vg["shop_price"]); ?></font></span> 
	                    </div>
	                    <a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$vg[goods_id]));?>" target="_blank"> 
	                    	<img class="good-big-img img100" src="<?php echo (goods_thum_images($vg["goods_id"],400,400)); ?>" data-images="<?php echo (goods_thum_images($vg["goods_id"],400,400)); ?>" alt=""> 
	                    </a> 
	                  </li><?php endforeach; endif; ?>
	                </ul>
	              </div><?php endif; endforeach; endif; ?>
            </div>
          </div>
        </div>
        <div class="floor-right editable" moduleid="">
          <div class="item item-h2"> 
             <?php $pid ='51'.$_GET[id].$k;$ad_position = M("ad_position")->cache(true,PLM_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1548046800 and end_time > 1548046800 ")->order("orderby desc")->cache(true,PLM_CACHE_TIME)->limit("1")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 1- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $key=>$vv): $vv[position] = $ad_position[$vv[pid]]; if($_GET[edit_ad] && $vv[not_adv] == 0 ) { $vv[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $vv[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$vv[ad_id]"; $vv[title] = $ad_position[$vv[pid]][position_name]."===".$vv[ad_name]; $vv[target] = 0; } ?><a href="<?php echo ($vv["ad_link"]); ?>" class="img-box" <?php if($vv['target'] == 1): ?>target="_blank"<?php endif; ?>>
          	   	  <img title="<?php echo ($vv[title]); ?>" style="<?php echo ($vv[style]); ?>" src="<?php echo ($vv[ad_code]); ?>" class="img100 img-effect" >
          	   </a><?php endforeach; ?>
          </div>
        </div>
      </div>
      
    
      <div class="brand-slide editable ui-switchable" moduleid="1557937_bottom" fnp="brand-slide" data-widget-cid="widget-626a691d3389b7c9fc8bb8496ad82b83">
        <ul class="slide ui-switchable-content" data-role="content" style="position: relative; width: 35791197px; left: 0px;">
        <?php
 $md5_key = md5("select * from `__PREFIX__goods` where cat_id2 = $vo[id] and is_on_sale = 1 order by goods_id limit 4"); $result_name = $sql_result_v5 = S("sql_".$md5_key); if(empty($sql_result_v5)) { $Model = new \Think\Model(); $result_name = $sql_result_v5 = $Model->query("select * from `__PREFIX__goods` where cat_id2 = $vo[id] and is_on_sale = 1 order by goods_id limit 4"); S("sql_".$md5_key,$sql_result_v5,0); } foreach($sql_result_v5 as $k5=>$v5): ?><li class="item ui-switchable-clone" style="float: left;"> <a href="javascript:;"> <img class="img img100" src="<?php echo (goods_thum_images($v5["goods_id"],150,150)); ?>"/> </a>
            <div class="intro"> <a class="title" href="javascript:;"><?php echo (getSubstr($v5["goods_name"],0,18)); ?></a> <span class="price">￥<font id="201504CM170003044_1557937" class="">89</font></span> </div>
          </li><?php endforeach; ?>          
        </ul>
        <a href="javascript:;" class="ctrl ctrl-prev ui-switchable-prev-btn" data-role="prev"></a> <a href="javascript:;" class="ctrl ctrl-next ui-switchable-next-btn" data-role="next"></a> </div>
    </div>
  </div><?php endif; endforeach; endif; ?>
  <!-- 1~6F-e --> 
</div>
<div class="fn-cms-footer">
  <div class="m-footer-g">
    <div class="footer-map">
      <ul class="fn-clear">
        <li class="map"><i class="footer-icon z-icon"></i><strong class="tit">正品低价</strong><br/>
          <span class="desc">正品行货 品质保障</span>
        </li>
        <li class="line"></li>
        <li class="map"><i class="footer-icon q-icon"></i><strong class="tit">品类齐全</strong><br/>
          <span class="desc">品类齐全 选择丰富</span>
        </li>
        <li class="line"></li>
        <li class="map"><i class="footer-icon k-icon"></i><strong class="tit">快速配送</strong><br/>
          <span class="desc">多仓直发 极速配送</span>
        </li>
        <li class="line"></li>
        <li class="map"><i class="footer-icon t-icon"></i><strong class="tit">售后无忧</strong><br/>
          <span class="desc">7天无理由退货</span>
        </li>
      </ul>
    </div>
    <div class="server-list">
      <ul class="fn-clear">
	    <?php
 $md5_key = md5("select * from `__PREFIX__article_cat` where parent_id = 2"); $result_name = $sql_result_v = S("sql_".$md5_key); if(empty($sql_result_v)) { $Model = new \Think\Model(); $result_name = $sql_result_v = $Model->query("select * from `__PREFIX__article_cat` where parent_id = 2"); S("sql_".$md5_key,$sql_result_v,0); } foreach($sql_result_v as $k=>$v): ?><li><i class="list-icon icon<?php echo ($k+1); ?>"></i>
          <dl class="list-item">
            <dt><?php echo ($v[cat_name]); ?></dt>
            <?php
 $md5_key = md5("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1"); $result_name = $sql_result_v2 = S("sql_".$md5_key); if(empty($sql_result_v2)) { $Model = new \Think\Model(); $result_name = $sql_result_v2 = $Model->query("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1"); S("sql_".$md5_key,$sql_result_v2,0); } foreach($sql_result_v2 as $k2=>$v2): ?><dd><a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id]));?>"><?php echo ($v2[title]); ?></a></dd><?php endforeach; ?>
          </dl>
        </li><?php endforeach; ?>
        <li class="app-item">
          <p>微信商城</p>
          <img width="90" height="90" title="" alt="网客户端" src="/Application/Home/View/Static/images/qrcode_vmall_app01.png">
        </li>
      </ul>
    </div>
    <div class="site-info">
      <div class="foot-nav">
        <?php
 $md5_key = md5("select * from `__PREFIX__article` where cat_id = 5 and is_open=1"); $result_name = $sql_result_v = S("sql_".$md5_key); if(empty($sql_result_v)) { $Model = new \Think\Model(); $result_name = $sql_result_v = $Model->query("select * from `__PREFIX__article` where cat_id = 5 and is_open=1"); S("sql_".$md5_key,$sql_result_v,0); } foreach($sql_result_v as $k=>$v): ?><a href="<?php echo U('Home/Article/detail',array('article_id'=>$v[article_id]));?>" target="_blank">
          <?php echo ($v[title]); ?>
          </a>|<?php endforeach; ?>
	      <a href="<?php echo U('Newjoin/index');?>" target="_blank">商家入驻</a>|
	      <a href="<?php echo U('Article/detail',array('article_id'=>19));?>" target="_blank">招商标准</a>| 
	      <a href="" style="cursor:default;text-decoration:none;">客服热线 <?php echo ($plmshop_config['shop_info_phone']); ?></a>
	  </div>
      <div class="link">
        <p>
        Copyright © 2016-2020 <?php echo ($plmshop_config['shop_info_store_name']); ?>  版权所有 备案号:<?php echo ($plmshop_config['shop_info_record_no']); ?>
        </p>
      </div>
      <div class="inline-box logowall"><a href="" class="item shgs" target="_blank"></a><a href="" class="item shwl" target="_blank"></a><a href="" class="item cxwz" target="_blank"></a><a href="" class="item kxwz" target="_blank"></a><a href="" class="item hyyz" target="_blank"></a></div>
    </div>
  </div>
</div>
<script type="text/javascript" src="/Application/Home/View/Static/js/jquery.lazyload.js"></script>
<script type="text/javascript" src="/Application/Home/View/Static/js/common.js"></script>
 
<script type="text/javascript" src="/Application/Home/View/Static/js/channel.js"></script>
<script type="text/javascript">
$('.ui-switchable-nav').each(function(){
	var _this = this;
	$(_this).children().each(function(i,o){
		$(o).hover(function(){
			$(o).siblings().removeClass('ui-switchable-active');
			$(o).addClass('ui-switchable-active');
			$(_this).parent().parent().siblings().children().children().hide();
			$(_this).parent().parent().siblings().children().children().eq(i).show();
		});
	})
})

</script>
</body>
</html>