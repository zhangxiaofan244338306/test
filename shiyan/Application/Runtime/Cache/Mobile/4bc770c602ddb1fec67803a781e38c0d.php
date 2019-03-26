<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<html>
<head>
    <meta name="Generator" content="TPSHOP"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>TPshop旗舰店-店铺街</title>
    <meta name="Keywords" content=""/>
    <meta name="Description" content=""/>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <link rel="stylesheet" type="text/css" href="/Application/Mobile/View/Static/css/ecsmart.css"/>
    <link rel="stylesheet" href="/Application/Mobile/View/Static/css/stores.css">
    <link rel="stylesheet" href="/Application/Mobile/View/Static/css/public.css">
    <script type="text/javascript" src="/Application/Mobile/View/Static/js/jquery.js"></script>
    <style>
        @media screen {
            * {
                -webkit-tap-highlight-color: transparent;
                overflow: hidden
            }
            .goods_nav {
                width: 30%;
                float: right;
                right: 5px;
                overflow: hidden;
                position: fixed;
                margin-top: -20px;
                z-index: 9999999
            }
        }
    </style>
</head>
<body style=" background:#F5F5F5">
<span class="sanjiao"></span>
<header>
    <div class="tab_nav">
        <div class="header">
            <div class="h-left"><a class="sb-back" href="javascript:history.back(-1)" title="返回"></a></div>
            <div class="h-mid">店铺街</div>
            <div class="h-right">
                <aside class="top_bar">
                    <div onClick="show_menu();$('#close_btn').addClass('hid');" id="show_more"><a
                            href="javascript:;"></a></div>
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

<div class="Packages">
    <div class="all"><a class="sele" target="_self" href="stores.php" style="color:#FFF"><span>全部</span></a></div>
    <div class="page_guide_slider">
        <div class="page_guide_balloon" style=" display:none">
            <div class="page_guide_bar">
                <div class="page_guide_progress">
                    <div></div>
                </div>
            </div>
        </div>
        <div class="page_guide_container" onMouseDown="pageGuideMousedown(this,event)"
             onMouseMove="pageGuideMousemove(this,event)" onMouseUp="pageGuideMouseup(this,event)"
             onMouseOut="pageGuideMouseout(this,event)" ontouchstart="pageGuideTouchstart(this,event)"
             ontouchmove="pageGuideTouchmove(this,event)" ontouchend="pageGuideTouchend(this,event)">

            <div class="page_guide_items" style=" position:relative">

                <div class="page_guide_item">
                    <div class="page_guide_item_text"><a class="" target="_self"
                                                         href="<?php echo U('Mobile/User/street');?>">精选</a></div>
                </div>
                <?php if(is_array($store_class)): $i = 0; $__LIST__ = $store_class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sc): $mod = ($i % 2 );++$i;?><div class="page_guide_item">
                        <div class="page_guide_item_text"><a class="" target="_self"
                                                             href="<?php echo U('Mobile/User/street',array('sc_id'=>$sc['sc_id']));?>"><?php echo ($sc['sc_name']); ?></a></div>
                    </div>
                    <div id="street_cat<?php echo ($sc['sc_id']); ?>"></div><?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
        </div>

    </div>
</div>
<?php if(is_array($store_list)): $i = 0; $__LIST__ = $store_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$store): $mod = ($i % 2 );++$i;?><section class="rzs_info">
    <dl>
        <dt><a href="supplier.php?suppId=5" class="flow-datu" title="<?php echo ($store['store_name']); ?>"
               style="background-image:url(<?php echo ($store['store_logo']); ?>)"> </a></dt>
        <dd><strong><a href="supplier.php?suppId=5"> 店铺：<?php echo ($store['store_name']); ?></a></strong>

            <p>所在地：<?php echo ($store['province_name']); ?>,<?php echo ($store['city_name']); ?>,<?php echo ($store['district_name']); ?></p>
        </dd>
    </dl>
    <ul>
        <li><span>宝贝描述</span><strong>:<?php echo ($store['store_desccredit']); ?></span></strong>
            <em><?php $_RANGE_VAR_=explode(',',"0,1.99");if($store["store_desccredit"]>= $_RANGE_VAR_[0] && $store["store_desccredit"]<= $_RANGE_VAR_[1]):?>低<?php endif; ?>
                <?php $_RANGE_VAR_=explode(',',"2,3.99");if($store["store_desccredit"]>= $_RANGE_VAR_[0] && $store["store_desccredit"]<= $_RANGE_VAR_[1]):?>中<?php endif; ?>
                <?php $_RANGE_VAR_=explode(',',"4,5");if($store["store_desccredit"]>= $_RANGE_VAR_[0] && $store["store_desccredit"]<= $_RANGE_VAR_[1]):?>高<?php endif; ?>
            </em>
        </li>
        <li><span>卖家服务</span><strong>:<?php echo ($store['store_servicecredit']); ?></strong>
            <em><?php $_RANGE_VAR_=explode(',',"0,1.99");if($store["store_desccredit"]>= $_RANGE_VAR_[0] && $store["store_desccredit"]<= $_RANGE_VAR_[1]):?>低<?php endif; ?>
                <?php $_RANGE_VAR_=explode(',',"2,3.99");if($store["store_desccredit"]>= $_RANGE_VAR_[0] && $store["store_desccredit"]<= $_RANGE_VAR_[1]):?>中<?php endif; ?>
                <?php $_RANGE_VAR_=explode(',',"4,5");if($store["store_desccredit"]>= $_RANGE_VAR_[0] && $store["store_desccredit"]<= $_RANGE_VAR_[1]):?>高<?php endif; ?></em>
        </li>
        <li><span>物流服务</span><strong>:<?php echo ($store['store_deliverycredit']); ?></strong>
            <em><?php $_RANGE_VAR_=explode(',',"0,1.99");if($store["store_desccredit"]>= $_RANGE_VAR_[0] && $store["store_desccredit"]<= $_RANGE_VAR_[1]):?>低<?php endif; ?>
                <?php $_RANGE_VAR_=explode(',',"2,3.99");if($store["store_desccredit"]>= $_RANGE_VAR_[0] && $store["store_desccredit"]<= $_RANGE_VAR_[1]):?>中<?php endif; ?>
                <?php $_RANGE_VAR_=explode(',',"4,5");if($store["store_desccredit"]>= $_RANGE_VAR_[0] && $store["store_desccredit"]<= $_RANGE_VAR_[1]):?>高<?php endif; ?></em>
        </li>
    </ul>
    <div class="index_taocan">
        <h2>共<?php echo ($store['goods_array']['goods_count']); ?>件宝贝</h2>
        <?php if(is_array($store['goods_array']['goods_list'])): $i = 0; $__LIST__ = $store['goods_array']['goods_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Mobile/Goods/goodsInfo',array('id'=>$goods['goods_id']));?>">
            <dl>
                <dt><img src="<?php echo (goods_thum_images($goods['goods_id'],137,137)); ?>" class="B_eee"><em>￥<?php echo ($goods['shop_price']); ?></em>
                </dt>
                <dd><?php echo ($goods['goods_name']); ?></dd>
            </dl>
        </a><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="s_dianpu">
        <span><a href="tel:<?php echo ($store['store_phone']); ?>" style=" margin-left:7%"><em class="bg1"></em>联系客服</a></span>
        <span><a href="<?php echo U('Mobile/Store/index',array('store_id'=>$store['store_id']));?>" style=" margin-left:3%"><em class="bg2"></em>进入店铺</a></span>
    </div>
</section><?php endforeach; endif; else: echo "" ;endif; ?>

<div class="footer">
    <div class="links" id="ECS_MEMBERZONE">
        <script type="text/javascript" src="/Application/Mobile/View/Static/js/utils.js"></script>
        <a href="<?php echo U('Mobile/User/login');?>"><span>登录</span></a><a href="<?php echo U('Mobile/User/reg');?>"><span>注册</span></a><a
            href="#"><span>反馈</span></a><a href="javascript:window.scrollTo(0,0);"><span>回顶部</span></a>
    </div>
    <ul class="linkss">
        <li>
            <a href="#">
                <i class="footerimg_1"></i>
                <span>客户端</span></a></li>
        <li>
            <a href="javascript:;"><i class="footerimg_2"></i><span class="gl">触屏版</span></a></li>
        <li><a href="#" class="goDesktop"><i class="footerimg_3"></i><span>电脑版</span></a></li>
    </ul>
    <p class="mf_o4">&copy; 2015-2016 深圳搜豹网络科技有限公司版权所有，并保留所有权利。</p>
</div>
<div style="height:50px; line-height:50px; clear:both;"></div>
<div style="height:50px; line-height:50px; clear:both;"></div>
<div class="v_nav">
	<div class="vf_nav">
		<ul>
			<li> <a href="<?php echo U('Index/index');?>">
			    <i class="vf_1"></i>
			    <span>首页</span></a></li>
			<li><a href="tel:<?php echo ($tpshop_config['shop_info_phone']); ?>">
			    <i class="vf_2"></i>
			    <span>客服</span></a></li>
			<li><a href="<?php echo U('Goods/categoryList');?>">
			    <i class="vf_3"></i>
			    <span>分类</span></a></li>
			<li>
			<a href="<?php echo U('Cart/cart');?>">
			   <em class="global-nav__nav-shop-cart-num" id="cart_quantity" style="right:9px;"></em>
			   <i class="vf_4"></i>
			   <span>购物车</span>
			   </a>
			</li>
			<li><a href="<?php echo U('User/index');?>">
			    <i class="vf_5"></i>
			    <span>我的</span></a>
			</li>
		</ul>
	</div>
</div> 
<script type="text/javascript">
$(document).ready(function(){
	  var cart_cn = getCookie('cn');
	  if(cart_cn == ''){
		$.ajax({
			type : "GET",
			url:"/index.php?m=Home&c=Cart&a=header_cart_list",//+tab,
			success: function(data){								 
				cart_cn = getCookie('cn');
				$('#cart_quantity').html(cart_cn);						
			}
		});	
	  }
	  $('#cart_quantity').html(cart_cn);
});
</script>
<!-- 微信浏览器 调用微信 分享js-->
<?php if($signPackage != null): ?><script type="text/javascript" src="/Application/Mobile/View/Static/js/jquery.js"></script>
<script src="/Public/js/global.js"></script>
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript">

<?php if(ACTION_NAME == 'goodsInfo'): ?>var ShareLink = "http://<?php echo ($_SERVER[HTTP_HOST]); ?>/index.php?m=Mobile&c=Goods&a=goodsInfo&id=<?php echo ($goods[goods_id]); ?>"; //默认分享链接
   var ShareImgUrl = "http://<?php echo ($_SERVER[HTTP_HOST]); echo (goods_thum_images($goods[goods_id],400,400)); ?>"; // 分享图标
<?php else: ?>
   var ShareLink = "http://<?php echo ($_SERVER[HTTP_HOST]); ?>/index.php?m=Mobile&c=Index&a=index"; //默认分享链接
   var ShareImgUrl = "http://<?php echo ($_SERVER[HTTP_HOST]); echo ($plmshop_config['shop_info_store_logo']); ?>"; // 分享图标<?php endif; ?>

var is_distribut = getCookie('is_distribut'); // 是否分销代理
var user_id = getCookie('user_id'); // 当前用户id
//alert(is_distribut+'=='+user_id);

// 如果已经登录了, 并且是分销商
if(parseInt(is_distribut) == 1 && parseInt(user_id) > 0)
{									
	ShareLink = ShareLink + "&first_leader="+user_id;									
}										


// 微信配置
wx.config({
    debug: false, 
    appId: "<?php echo ($signPackage['appId']); ?>", 
    timestamp: '<?php echo ($signPackage["timestamp"]); ?>', 
    nonceStr: '<?php echo ($signPackage["nonceStr"]); ?>', 
    signature: '<?php echo ($signPackage["signature"]); ?>',
    jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage','onMenuShareQQ','onMenuShareQZone','hideOptionMenu'] // 功能列表，我们要使用JS-SDK的什么功能
});

// config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后，config是一个客户端的异步操作，所以如果需要在 页面加载时就调用相关接口，则须把相关接口放在ready函数中调用来确保正确执行。对于用户触发时才调用的接口，则可以直接调用，不需要放在ready 函数中。
wx.ready(function(){
    // 获取"分享到朋友圈"按钮点击状态及自定义分享内容接口
    wx.onMenuShareTimeline({
        title: "<?php echo ($plmshop_config['shop_info_store_title']); ?>", // 分享标题
        link:ShareLink,
        imgUrl:ShareImgUrl // 分享图标
    });

    // 获取"分享给朋友"按钮点击状态及自定义分享内容接口
    wx.onMenuShareAppMessage({
        title: "<?php echo ($plmshop_config['shop_info_store_title']); ?>", // 分享标题
        desc: "<?php echo ($plmshop_config['shop_info_store_desc']); ?>", // 分享描述
        link:ShareLink,
        imgUrl:ShareImgUrl // 分享图标
    });
	// 分享到QQ
	wx.onMenuShareQQ({
        title: "<?php echo ($plmshop_config['shop_info_store_title']); ?>", // 分享标题
        desc: "<?php echo ($plmshop_config['shop_info_store_desc']); ?>", // 分享描述
        link:ShareLink,
        imgUrl:ShareImgUrl // 分享图标
	});	
	// 分享到QQ空间
	wx.onMenuShareQZone({
        title: "<?php echo ($plmshop_config['shop_info_store_title']); ?>", // 分享标题
        desc: "<?php echo ($plmshop_config['shop_info_store_desc']); ?>", // 分享描述
        link:ShareLink,
        imgUrl:ShareImgUrl // 分享图标
	});

   <?php if(CONTROLLER_NAME == 'User'): ?>wx.hideOptionMenu();  // 用户中心 隐藏微信菜单<?php endif; ?>
	
});
</script>


<!--微信关注提醒 start-->
<?php if($_SESSION['subscribe']== 0): ?><button class="guide" onclick="follow_wx()">关注公众号</button>
<style type="text/css">
.guide{width:20px;height:100px;text-align: center;border-radius: 8px ;font-size:12px;padding:8px 0;border:1px solid #adadab;color:#000000;background-color: #fff;position: fixed;right: 6px;bottom: 200px;}
#cover{display:none;position:absolute;left:0;top:0;z-index:18888;background-color:#000000;opacity:0.7;}
#guide{display:none;position:absolute;top:5px;z-index:19999;}
#guide img{width: 70%;height: auto;display: block;margin: 0 auto;margin-top: 10px;}
</style>
<script type="text/javascript" src="/Application/Mobile/View/Static/js/layer.js" ></script>
<script type="text/javascript">

  // 关注微信公众号二维码	 
function follow_wx()
{
	layer.open({
		type : 1,  
		title: '关注公众号',
		content: '<img src="<?php echo ($wechat_config['qr']); ?>" width="200">',
		style: ''
	});
}
 
</script><?php endif; ?>
<!--微信关注提醒  end--><?php endif; ?>
<!-- 微信浏览器 调用微信 分享js  end-->
<script>
    function goTop() {
        $('html,body').animate({'scrollTop': 0}, 600);
    }
</script>
<a href="javascript:goTop();" class="gotop"><img src="/Application/Mobile/View/Static/images/topup.png"></a>
<script type="text/javascript">
    reg_package();
</script>
<script src="/Application/Mobile/View/Static/js/slider.js" type="text/javascript"></script>
</body>
</html>