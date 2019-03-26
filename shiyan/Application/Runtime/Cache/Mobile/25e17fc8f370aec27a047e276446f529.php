<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<html>
<head>
<meta name="Generator" content=" " />
<meta charset="UTF-8">
<meta name="Keywords" content="<?php echo ($store["seo_keywords"]); ?>" />
<meta name="Description" content="<?php echo ($store["seo_description"]); ?>" />
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<title> <?php echo ($store["store_name"]); ?> </title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link rel="alternate" type="application/rss+xml" title="<?php echo ($store["store_name"]); ?>" href="" />
<link rel="stylesheet" type="text/css" href="/Application/Mobile/View/Static/css/dianpu.css">
<link rel="stylesheet" type="text/css" href="/Application/Mobile/View/Static/css/public.css"/>
<script src="/Public/js/global.js"></script>
<script type="text/javascript" src="/Application/Mobile/View/Static/js/layer.js" ></script>
<script type="text/javascript" src="/Application/Mobile/View/Static/js/jquery.js"></script>
<script type="text/javascript" src="/Application/Mobile/View/Static/js/TouchSlide.1.1.js"></script>
</head>
<body style=" background:#F5F5F5">
<header>
      <div class="tab_nav">
        <div class="header">
          <div class="h-left"><a class="sb-back" href="javascript:history.back(-1)" title="返回"></a></div>
          <div class="h-mid">
          <form id="searchForm" name="searchForm" method="get" action="<?php echo U('Store/goods_list');?>">
	 	  <input type='hidden' name='store_id' value='<?php echo ($store["store_id"]); ?>'>
          <input type="text" name="keywords" id="keyword" class="dianp_search" placeholder="搜索本店商品">
          <input type="submit" class="icon_search" id="btsearch" value="" />
        </form>
          </div>
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
<div class="dianpu_main">
	<dl>
	<p><a href="javascript:;" id="favoriteStore" data-id="<?php echo ($store['store_id']); ?>" style=" color:#FFF">收藏</a></p>
	<dt><img src="<?php echo ((isset($store['store_logo']) && ($store['store_logo'] !== ""))?($store['store_logo']):'/Application/Mobile/View/Static/images/v-shop/logo.png'); ?>" alt="<?php echo ($store["store_name"]); ?>"></dt>
	<dd><span><?php echo ($store["store_name"]); ?></span>
	</dd>
	</dl>
	<ul>
	<li class="bian"><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id]));?>"><span>全部宝贝</span><strong><?php echo ($total_goods); ?></strong></a></li>
	<li class="bian"><a href="#"><span>商家描述</span><strong><?php echo ($store["store_desccredit"]); ?></strong></a></li>
	<li class="bian"><span>服务态度</span><strong><?php echo ($store["store_servicecredit"]); ?></strong></li>
	<li><span>物流速度</span><strong><?php echo ($store["store_deliverycredit"]); ?></strong></li>
	</ul>
</div>

<div id="scrollimg" class="scrollimg">
	<div class="bd">
		<ul>
		<?php if(is_array($store["mb_slide"])): foreach($store["mb_slide"] as $key=>$vimg): if(!empty($vimg)): ?><li><a href="<?php echo ($store[mb_slide_url][$key]); ?>"><img src="<?php echo ($vimg); ?>" width="100%" /></a></li><?php endif; endforeach; endif; ?>
     	</ul>
	</div>
	<div class="hd">
		<ul></ul>
	</div>
</div>
<script type="text/javascript">
	TouchSlide({ 
		slideCell:"#scrollimg",
		titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
		mainCell:".bd ul", 
		effect:"leftLoop", 
		autoPage:true,//自动分页
		autoPlay:true //自动播放
	});
</script>
  
   <div class="product_value">
  		<h2>店长推荐</h2>
  		<ul>
    	      <?php if(is_array($recomend_goods)): foreach($recomend_goods as $key=>$vo): ?><li> 
	        <a href="<?php echo U('Goods/goodsInfo',array('id'=>$vo[goods_id]));?>"> <span> 
	        <img src="<?php echo (goods_thum_images($vo["goods_id"],200,200)); ?>" srcset="<?php echo (goods_thum_images($vo["goods_id"],200,200)); ?>" srcd="<?php echo (goods_thum_images($vo["goods_id"],200,200)); ?>" loaded="no"> </span> 
	        <span class="p_info"><?php echo (getSubstr($vo["goods_name"],0,16)); ?></span> 
	        <span class="price"> ￥<?php echo ($vo["shop_price"]); ?>元  </span> </a> 
	        </li><?php endforeach; endif; ?>
    	</ul>
  </div>

    <div class="product_value">
		<h2>热卖单品 精挑细选</h2>
	      <ul>
	      <?php if(is_array($hot_goods)): foreach($hot_goods as $key=>$vo): ?><li> 
	        <a href="<?php echo U('Goods/goodsInfo',array('id'=>$vo[goods_id]));?>"> <span> 
	        <img src="<?php echo (goods_thum_images($vo["goods_id"],200,200)); ?>" srcset="<?php echo (goods_thum_images($vo["goods_id"],200,200)); ?>" srcd="<?php echo (goods_thum_images($vo["goods_id"],200,200)); ?>" loaded="no"> </span> 
	        <span class="p_info"><?php echo (getSubstr($vo["goods_name"],0,16)); ?></span> 
	        <span class="price"> ￥<?php echo ($vo["shop_price"]); ?>元  </span> </a> 
	        </li><?php endforeach; endif; ?>
		  </ul>
     </div>
    <div class="product_value">
      <h2>新品上市 尝鲜价</h2>
      <ul>
	      <?php if(is_array($new_goods)): foreach($new_goods as $key=>$vo): ?><li> 
	        <a href="<?php echo U('Goods/goodsInfo',array('id'=>$vo[goods_id]));?>"> <span> 
	        <img src="<?php echo (goods_thum_images($vo["goods_id"],200,200)); ?>" srcset="<?php echo (goods_thum_images($vo["goods_id"],200,200)); ?>" srcd="<?php echo (goods_thum_images($vo["goods_id"],200,200)); ?>" loaded="no"> </span> 
	        <span class="p_info"><?php echo (getSubstr($vo["goods_name"],0,16)); ?></span> 
	        <span class="price"> ￥<?php echo ($vo["shop_price"]); ?>元  </span> </a> 
	        </li><?php endforeach; endif; ?>
      </ul>
    </div>
 
<div style=" height:40px;"></div>
<div class="bottm_nav">
	 <ul>
	 <li class="bian"><a href="<?php echo U('Store/store_goods_class',array('store_id'=>$store[store_id]));?>">店铺分类</a></li>
	 <li class="bian"><a href="<?php echo U('Store/about',array('store_id'=>$store[store_id]));?>">店铺简介</a></li>
	 <li><a href="tel:075586140485">联系卖家</a></li>
	 </ul>
</div>
<script>
function goTop(){
	$('html,body').animate({'scrollTop':0},600);
}

//收藏店铺
$('#favoriteStore').click(function () {
  if (getCookie('user_id') == '') {
	  if(confirm('请先登录')){
		  window.location.href = "<?php echo U('Mobile/User/login');?>"; 
	  }                     	
  } else {
    $.ajax({
      type: 'post',
      dataType: 'json',
      data: {store_id: $(this).attr('data-id')},
      url: "<?php echo U('Home/Store/collect_store');?>",
      success: function (res) {
        if (res.status == 1) {
          layer.open({content:'成功添加至收藏夹',time:2});
        } else {
          layer.open({content:res.msg,time:2});
        }
      }
    });
  }
});
</script>
<a href="javascript:goTop();" class="gotop"><img src="/Application/Mobile/View/Static/images/topup.png"></a> 
</body>
</html>