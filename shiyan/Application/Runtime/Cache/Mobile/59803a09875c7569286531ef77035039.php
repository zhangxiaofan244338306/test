<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<html>
	<head>
		<meta name="Generator" content="universal v1.1" />
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>首页-<?php echo ($plmshop_config['shop_info_store_title']); ?></title>
		<meta http-equiv="keywords" content="<?php echo ($plmshop_config['shop_info_store_keyword']); ?>" />
		<meta name="description" content="<?php echo ($plmshop_config['shop_info_store_desc']); ?>" />
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<link rel="stylesheet" type="text/css" href="/Application/Mobile/View/Static/css/public.css" />
		<link rel="stylesheet" type="text/css" href="/Application/Mobile/View/Static/css/index.css" />
		<link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css" />
		<script type="text/javascript" src="/Application/Mobile/View/Static/js/jquery.js"></script>
		<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.4.3&key=9f831272996d8fb9c2765393725e3f96"></script>
		<script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
		<script type="text/javascript" src="/Application/Mobile/View/Static/js/jquery.json.js"></script>
		<script type="text/javascript" src="/Application/Mobile/View/Static/js/touchslider.dev.js"></script>
		<script type="text/javascript" src="/Application/Mobile/View/Static/js/layer.js"></script>
		<script src="/Public/js/global.js"></script>
		<script src="/Public/js/mobile_common.js"></script>

	</head>
	<body>
		<div id="page" class="showpage">
			<div>
				<header id="header">
					<a href="<?php echo U('Goods/categoryList');?>" class="top_bt"></a><a href="<?php echo U('Cart/cart');?>" class='user_btn'></a>
					<span href="javascript:void(0)" class="logo">派乐咪</span>
				</header>

				<div id="scrollimg" class="scrollimg">
					<div class="bd">
						<ul>
							<?php $pid =2;$ad_position = M("ad_position")->cache(true,PLM_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1553562000 and end_time > 1553562000 ")->order("orderby desc")->cache(true,PLM_CACHE_TIME)->limit("5")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 5- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $key=>$v): $v[position] = $ad_position[$v[pid]]; if($_GET[edit_ad] && $v[not_adv] == 0 ) { $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]"; $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name]; $v[target] = 0; } ?><li><a href="<?php echo ($v["ad_link"]); ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?> ><img src="<?php echo ($v[ad_code]); ?>"
										 title="<?php echo ($v[title]); ?>" width="100%" style="<?php echo ($v[style]); ?>" /></a></li><?php endforeach; ?>
						</ul>
					</div>
					<div class="hd">
						<ul></ul>
					</div>
				</div>

				<style>
					.dress{
    display: flex;
    background:#fff;
  }
  .dress1{
    width: 80px;
    height: 30px;
    text-align: center;
    line-height: 30px;
    display: block;
    background:#fff;
    color: #888;
    margin-top: 20px;
    padding-left: 5px;
    font-size: 14px;
  }
.index_search{

}
</style>
				<div id='container' style="display: hidden;position:absolute;z-index: -2;"></div>
				<div class="dress">
					<!-- <p class="dress1" id='info'>选择地址</p> -->
					<div id="fake-search" class="index_search">
						<div id="dingweibtn" onclick="getGeolocation()" style=" position: absolute;margin-top: 20px;font-size: 14px;"><img
							 style="width: 34px;height: 34px;" src="/Application/Mobile/View/Static/images/geolocation.150X150.png">定位中 </div>
						<div style="position: relative;margin-left: 99px; width: 66%;" class="index_search_mid">
							<span><img src="/Application/Mobile/View/Static/images/xin/icosousuo.png"></span>
							<input type="text" id="search_text" class="search_text" value="请输入您所搜索的商品" />
						</div>
					</div>
				</div>
				<script type="text/javascript">

					/***************************************
					由于Chrome、IOS10等已不再支持非安全域的浏览器定位请求，为保证定位成功率和精度，请尽快升级您的站点到HTTPS。
					***************************************/
					var map, geolocation;
					map = new AMap.Map('container');
					map.plugin('AMap.Geolocation', function() {
						geolocation = new AMap.Geolocation({
							enableHighAccuracy: true, //是否使用高精度定位，默认:true
							timeout: 10000, //超过10秒后停止定位，默认：无穷大
							maximumAge: 0, //定位结果缓存0毫秒，默认：0
							convert: true, //自动偏移坐标，偏移后的坐标为高德坐标，默认：true
							showButton: true, //显示定位按钮，默认：true
							buttonPosition: 'LB', //定位按钮停靠位置，默认：'LB'，左下角
							buttonOffset: new AMap.Pixel(10, 20), //定位按钮与设置的停靠位置的偏移量，默认：Pixel(10, 20)
							showMarker: true, //定位成功后在定位到的位置显示点标记，默认：true
							showCircle: true, //定位成功后用圆圈表示定位精度范围，默认：true
							panToLocation: true, //定位成功后将定位到的位置作为地图中心点，默认：true
							zoomToAccuracy: true //定位成功后调整地图视野范围使定位位置及精度范围视野内可见，默认：false
						});
						map.addControl(geolocation);
						geolocation.getCurrentPosition();
						AMap.event.addListener(geolocation, 'complete', onComplete); //返回定位信息
						AMap.event.addListener(geolocation, 'error', onError); //返回定位出错信息
					});
					console.log("zheli")
					//解析定位结果
					function onComplete(data) {
						console.log(data);

						document.getElementById('dingweibtn').innerHTML = data.addressComponent.street + data.addressComponent.streetNumber;
					}

					function getSomeOfMyVal() {
						return myplace + "+" + mycity;
					}

					//解析定位错误信息
					function onError(data) {

					}

					function getGeolocation() {
						geolocation.getCurrentPosition();
						document.getElementById('dingweibtn').innerHTML =
							'<img style = "width: 34px;height: 34px;" src="/Application/Mobile/View/Static/images/geolocation.150X150.png">定位中';
					}
					// 		map.on('complete', function() {
					//         document.getElementById('tip').innerHTML = "地图图块加载完毕！当前地图中心点为：" + map.getCenter();
					//     });
				</script>
				<!-- <script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.12&key=8539db3b4ee7afd950356704d0e3a958&plugin=AMap.CitySearch"></script>
<script type="text/javascript">
    var map = new AMap.Map("container", {
        resizeEnable: true,
        center: [116.397428, 39.90923],
        zoom: 13
    });
    //获取用户所在城市信息
    function showCityInfo() {
        //实例化城市查询类
        var citysearch = new AMap.CitySearch();
        //自动获取用户IP，返回当前城市
        citysearch.getLocalCity(function(status, result) {
            if (status === 'complete' && result.info === 'OK') {
                if (result && result.city && result.bounds) {
                    var cityinfo = result.city;
                    var citybounds = result.bounds;

                    $('#info').click(function(){
                      document.getElementById('info').innerHTML = cityinfo;
                    })
                   
                    //地图显示当前城市
                    map.setBounds(citybounds);
                }
            } else {
                document.getElementById('info').innerHTML = result.info;
            }
        });
    }
    showCityInfo();
</script> -->
				<script type="text/javascript" src="/Application/Mobile/View/Static/js/TouchSlide.1.1.js"></script>
				<script type="text/javascript">
					TouchSlide({
						slideCell: "#scrollimg",
						titCell: ".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
						mainCell: ".bd ul",
						effect: "leftLoop",
						autoPage: true, //自动分页
						autoPlay: true //自动播放
					});
				</script>

				<div class="entry-list clearfix">
					<nav>
						<ul>
							<li>
								<a href="<?php echo U('Index/street');?>">
									<img alt="店铺街" src="/Application/Mobile/View/Static/images/wotuan/shangpu.png">
									<span>商铺街</span>
								</a>
							</li>
							<!--  <li>
        <a href="<?php echo U('Index/brand');?>">
          <img alt="品牌街" src="/Application/Mobile/View/Static/images/wotuan/meirong.png">
          <span>美容</span>
          美容下面添加洗澡
        </a>
      </li>  -->
							<li>
								<a href="<?php echo U('Activity/discount_list');?>">
									<!--此处必须要给店铺的地址 如-->
									<!-- http://plm.com/index.php/Mobile/Store/index/store_id/1.html -->
									<!-- 这里不是给店铺地址而是给商品分类id的地址-->
									<img alt="优惠活动" src="/Application/Mobile/View/Static/images/wotuan/yiyuan.png">
									<span>宠物医院</span>
								</a>
							</li>
							<!--  <li>
        <a href="<?php echo U('Activity/group_list');?>">
          <img alt="我的订单" src="/Application/Mobile/View/Static/images/wotuan/goucong.png" />
          <span>购宠</span>
        </a>
      </li> -->
							<li>
								<a href="<?php echo U('User/order_list');?>">
									<img alt="积分商城" src="/Application/Mobile/View/Static/images/wotuan/jiudian.png">
									<span>宠物酒店</span>
								</a>
							</li>
							<!--  <li>
        <a href="<?php echo U('Cart/cart');?>">
          <img alt="购物车" src="/Application/Mobile/View/Static/images/wotuan/jueyu.png" />
          <span>绝育</span>
        </a>
      </li>
      <li>
        <a href="<?php echo U('User/index');?>">
          <img alt="个人中心" src="/Application/Mobile/View/Static/images/wotuan/tijian.png" />
          <span>体检</span>
        </a>
      </li> -->
							<!-- 一下是新添加的 -->
							<li>
								<a href="<?php echo U('Index/street');?>">
									<img alt="宠物训练" src="/Application/Mobile/View/Static/images/wotuan/xunlian.png">
									<span>宠物训练</span>
								</a>
							</li>
							<li>
								<a href="<?php echo U('Index/street');?>">
									<img alt="名猫街" src="/Application/Mobile/View/Static/images/wotuan/mingmao.png">
									<span>名猫街</span>
								</a>
							</li>
							<li>
								<a href="<?php echo U('Index/street');?>">
									<img alt="名犬街" src="/Application/Mobile/View/Static/images/wotuan/mingquan.png">
									<span>名犬街</span>
								</a>
							</li>
							<!-- <li>
        <a href="<?php echo U('Index/street');?>">
          <img alt="店铺街" src="/Application/Mobile/View/Static/images/wotuan/shipin.png">
          <span>食品</span>
        </a>
      </li>
      <li>
        <a href="<?php echo U('Index/street');?>">
          <img alt="店铺街" src="/Application/Mobile/View/Static/images/wotuan/leyuan.png">
          <span>乐园</span>
        </a>
      </li>
      
      <li>
        <a href="<?php echo U('Index/street');?>">
          <img alt="店铺街" src="/Application/Mobile/View/Static/images/wotuan/anzhuang.png">
          <span>殡葬</span>
        </a>
      </li> -->
							<li>
								<a href="<?php echo U('Index/recruit');?>">
									<img alt=" " src="/Application/Mobile/View/Static/images/wotuan/zhaopin.png">
									<span>人才招聘</span>
								</a>
							</li>
							<li>
								<a href="<?php echo U('Index/train');?>">
									<img alt="宠物师学校" src="/Application/Mobile/View/Static/images/wotuan/xuexiao.png" />
									<span>美容学校</span>
								</a>
							</li>
							<li>
								<a href="<?php echo U('Index/street');?>">
									<img alt="店铺街" src="/Application/Mobile/View/Static/images/wotuan/tuoyun.png">
									<span>宠物托运</span>
								</a>
							</li>
							<!-- 新添加结束 -->
						</ul>
					</nav>
				</div>

				<div class="floor_images">
					<dl>
						<dt>
							<?php $pid =300;$ad_position = M("ad_position")->cache(true,PLM_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1553562000 and end_time > 1553562000 ")->order("orderby desc")->cache(true,PLM_CACHE_TIME)->limit("1")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 1- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $key=>$v): $v[position] = $ad_position[$v[pid]]; if($_GET[edit_ad] && $v[not_adv] == 0 ) { $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]"; $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name]; $v[target] = 0; } ?><a href="<?php echo ($v["ad_link"]); ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?> >
									<img src="<?php echo ($v[ad_code]); ?>" title="<?php echo ($v[title]); ?>" style="<?php echo ($v[style]); ?>" border="0">
								</a><?php endforeach; ?>
						</dt>
						<dd>
							<span class="Edge">
								<?php $pid =301;$ad_position = M("ad_position")->cache(true,PLM_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1553562000 and end_time > 1553562000 ")->order("orderby desc")->cache(true,PLM_CACHE_TIME)->limit("1")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 1- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $key=>$v): $v[position] = $ad_position[$v[pid]]; if($_GET[edit_ad] && $v[not_adv] == 0 ) { $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]"; $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name]; $v[target] = 0; } ?><a href="<?php echo ($v["ad_link"]); ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?> >
										<img src="<?php echo ($v[ad_code]); ?>" title="<?php echo ($v[title]); ?>" style="<?php echo ($v[style]); ?>" border="0">
									</a><?php endforeach; ?>
							</span>
							<span>
								<?php $pid =302;$ad_position = M("ad_position")->cache(true,PLM_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1553562000 and end_time > 1553562000 ")->order("orderby desc")->cache(true,PLM_CACHE_TIME)->limit("1")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 1- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $key=>$v): $v[position] = $ad_position[$v[pid]]; if($_GET[edit_ad] && $v[not_adv] == 0 ) { $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]"; $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name]; $v[target] = 0; } ?><a href="<?php echo ($v["ad_link"]); ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?> >
										<img src="<?php echo ($v[ad_code]); ?>" title="<?php echo ($v[title]); ?>" style="<?php echo ($v[style]); ?>" border="0">
									</a><?php endforeach; ?>
							</span>
						</dd>
					</dl>
					<ul>
						<li class="brom">
							<?php $pid =303;$ad_position = M("ad_position")->cache(true,PLM_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1553562000 and end_time > 1553562000 ")->order("orderby desc")->cache(true,PLM_CACHE_TIME)->limit("1")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 1- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $key=>$v): $v[position] = $ad_position[$v[pid]]; if($_GET[edit_ad] && $v[not_adv] == 0 ) { $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]"; $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name]; $v[target] = 0; } ?><a href="<?php echo ($v["ad_link"]); ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?> >
									<img src="<?php echo ($v[ad_code]); ?>" title="<?php echo ($v[title]); ?>" style="<?php echo ($v[style]); ?>" border="0">
								</a><?php endforeach; ?>
						</li>
						<li>
							<?php $pid =304;$ad_position = M("ad_position")->cache(true,PLM_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1553562000 and end_time > 1553562000 ")->order("orderby desc")->cache(true,PLM_CACHE_TIME)->limit("1")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 1- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $key=>$v): $v[position] = $ad_position[$v[pid]]; if($_GET[edit_ad] && $v[not_adv] == 0 ) { $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]"; $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name]; $v[target] = 0; } ?><a href="<?php echo ($v["ad_link"]); ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?> >
									<img src="<?php echo ($v[ad_code]); ?>" title="<?php echo ($v[title]); ?>" style="<?php echo ($v[style]); ?>" border="0">
								</a><?php endforeach; ?>
						</li>
					</ul>
				</div>
				<script>
					/* 
var Tday = new Array();
var daysms = 24 * 60 * 60 * 1000
var hoursms = 60 * 60 * 1000
var Secondms = 60 * 1000
var microsecond = 1000
var DifferHour = -1
var DifferMinute = -1
var DifferSecond = -1
function clock(key)
{
   var time = new Date()
   var hour = time.getHours()
   var minute = time.getMinutes()
   var second = time.getSeconds()
   var timevalue = ""+((hour > 12) ? hour-12:hour)
   timevalue +=((minute < 10) ? ":0":":")+minute
   timevalue +=((second < 10) ? ":0":":")+second
   timevalue +=((hour >12 ) ? " PM":" AM")
   var convertHour = DifferHour
   var convertMinute = DifferMinute
   var convertSecond = DifferSecond
   var Diffms = Tday[key].getTime() - time.getTime()
   DifferHour = Math.floor(Diffms / daysms)
   Diffms -= DifferHour * daysms
   DifferMinute = Math.floor(Diffms / hoursms)
   Diffms -= DifferMinute * hoursms
   DifferSecond = Math.floor(Diffms / Secondms)
   Diffms -= DifferSecond * Secondms
   var dSecs = Math.floor(Diffms / microsecond)
  
   if(convertHour != DifferHour) a=DifferHour+":";
   if(convertMinute != DifferMinute) b=DifferMinute+":";
   if(convertSecond != DifferSecond) c=DifferSecond+"分"
     d=dSecs
     if (DifferHour>0) {a=a}
     else {a=''}
   document.getElementById("jstimerBox"+key).innerHTML = a + b + c ; //显示倒计时信息
}
*/


					// 倒计时
					function GetRTime2() {
						//var text = GetRTime('2016/02/27 17:34:00');
						<
						universal sql =
							"select * from __PREFIX__goods as g inner join __PREFIX__flash_sale as f on g.goods_id = f.goods_id and g.is_on_sale = 1 and g.goods_state =1 limit 3"
						key = "k"
						item = 'v' >
							var text {
								$v[goods_id]
							} = GetRTime('<?php echo (date("Y/m/d H:i:s",$v["end_time"])); ?>');

						if (typeof(text {
								$v[goods_id]
							}) == "undefined")
							$("#surplus_text<?php echo ($v[goods_id]); ?>").text('活动已结束');
						else
							$("#surplus_text<?php echo ($v[goods_id]); ?>").text(text {
								$v[goods_id]
							});

						<
						/universal>
					}
					setInterval(GetRTime2, 1000);
				</script>
				<section class="index_floor_lou">
					<div class="floor_body">
						<h2>
							<em></em>促销商品
							<!--<div class="geng"><a href="<?php echo U('Goods/search',array('q'=>'促销'));?>">更多</a><span></span></div>-->
						</h2>
						<div id="scroll_promotion">
							<ul>
								<?php
 $md5_key = md5("select * from __PREFIX__goods as g inner join __PREFIX__flash_sale as f on g.goods_id = f.goods_id and g.is_on_sale = 1 and g.goods_state =1 limit 3"); $result_name = $sql_result_val = S("sql_".$md5_key); if(empty($sql_result_val)) { $Model = new \Think\Model(); $result_name = $sql_result_val = $Model->query("select * from __PREFIX__goods as g inner join __PREFIX__flash_sale as f on g.goods_id = f.goods_id and g.is_on_sale = 1 and g.goods_state =1 limit 3"); S("sql_".$md5_key,$sql_result_val,0); } foreach($sql_result_val as $key=>$val): ?><li>
										<a href="<?php echo U('Mobile/Goods/goodsInfo',array('id'=>$v[goods_id]));?>" title="<?php echo ($val["goods_name"]); ?>"></a>
										<div class="index_pro">
											<a href="<?php echo U('Mobile/Goods/goodsInfo',array('id'=>$val[goods_id]));?>" title="<?php echo ($val["goods_name"]); ?>">
												<div class="products_kuang">
													<div class="timerBox" id="surplus_text<?php echo ($val[goods_id]); ?>">0时 00分 00秒</div>
													<img src="<?php echo (goods_thum_images($val["goods_id"],400,400)); ?>" onerror="this.src='/Application/Mobile/View/Static/images/icon_product_null.png'">
													<!-- 这里暂时屏蔽，找到图片再开启 -->
												</div>
												<div class="goods_name"><?php echo ($val["goods_name"]); ?></div>
											</a>
											<!-- <div class="price">
                      <a href="javascript:AjaxAddCart(<?php echo ($val[goods_id]); ?>,1,0);" class="btns">
                      <img src="/Application/Mobile/View/Static/images/index_flow.png">
                      </a>
                    <span class="price_pro">￥<?php echo ($val["price"]); ?>元</span>
                  </div> -->
										</div>
									</li><?php endforeach; ?>
							</ul>
						</div>
					</div>
				</section>

				<div class="floor_images">
					<dl>
						<dt>
							<?php $pid =305;$ad_position = M("ad_position")->cache(true,PLM_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1553562000 and end_time > 1553562000 ")->order("orderby desc")->cache(true,PLM_CACHE_TIME)->limit("1")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 1- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $key=>$v): $v[position] = $ad_position[$v[pid]]; if($_GET[edit_ad] && $v[not_adv] == 0 ) { $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]"; $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name]; $v[target] = 0; } ?><a href="<?php echo ($v["ad_link"]); ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?> >
									<img src="<?php echo ($v[ad_code]); ?>" title="<?php echo ($v[title]); ?>" style="<?php echo ($v[style]); ?>" border="0">
								</a><?php endforeach; ?>
						</dt>
						<dd>
							<span class="Edge">
								<?php $pid =306;$ad_position = M("ad_position")->cache(true,PLM_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1553562000 and end_time > 1553562000 ")->order("orderby desc")->cache(true,PLM_CACHE_TIME)->limit("1")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 1- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $key=>$v): $v[position] = $ad_position[$v[pid]]; if($_GET[edit_ad] && $v[not_adv] == 0 ) { $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]"; $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name]; $v[target] = 0; } ?><a href="<?php echo ($v["ad_link"]); ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?> >
										<img src="<?php echo ($v[ad_code]); ?>" title="<?php echo ($v[title]); ?>" style="<?php echo ($v[style]); ?>" border="0">
									</a><?php endforeach; ?>
							</span>
							<span>
								<?php $pid =307;$ad_position = M("ad_position")->cache(true,PLM_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1553562000 and end_time > 1553562000 ")->order("orderby desc")->cache(true,PLM_CACHE_TIME)->limit("1")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 1- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $key=>$v): $v[position] = $ad_position[$v[pid]]; if($_GET[edit_ad] && $v[not_adv] == 0 ) { $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]"; $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name]; $v[target] = 0; } ?><a href="<?php echo ($v["ad_link"]); ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?> >
										<img src="<?php echo ($v[ad_code]); ?>" title="<?php echo ($v[title]); ?>" style="<?php echo ($v[style]); ?>" border="0">
									</a><?php endforeach; ?>
							</span>
						</dd>
					</dl>
					<strong>
						<?php $pid =308;$ad_position = M("ad_position")->cache(true,PLM_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1553562000 and end_time > 1553562000 ")->order("orderby desc")->cache(true,PLM_CACHE_TIME)->limit("1")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 1- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $key=>$v): $v[position] = $ad_position[$v[pid]]; if($_GET[edit_ad] && $v[not_adv] == 0 ) { $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]"; $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name]; $v[target] = 0; } ?><a href="<?php echo ($v["ad_link"]); ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?> >
								<img src="<?php echo ($v[ad_code]); ?>" title="<?php echo ($v[title]); ?>" style="<?php echo ($v[style]); ?>" border="0">
							</a><?php endforeach; ?>
					</strong>
				</div>

				<section class="index_floor">
					<div class="floor_body1">
						<h2><em></em>精品推荐
							<!--<div class="geng"> <a href="<?php echo U('Goods/search',array('q'=>'精品'));?>">更多</a> <span></span></div>-->
						</h2>
						<div id="scroll_best" class="scroll_hot">
							<div class="bd">
								<ul>
									<?php $fl = '1'; ?>
									<?php
 $md5_key = md5("select * from __PREFIX__goods where is_recommend=1 and is_on_sale = 1 and goods_state = 1 order by sort desc limit 9"); $result_name = $sql_result_v = S("sql_".$md5_key); if(empty($sql_result_v)) { $Model = new \Think\Model(); $result_name = $sql_result_v = $Model->query("select * from __PREFIX__goods where is_recommend=1 and is_on_sale = 1 and goods_state = 1 order by sort desc limit 9"); S("sql_".$md5_key,$sql_result_v,0); } foreach($sql_result_v as $k=>$v): ?><li>
											<!-- <a href="<?php echo U('Mobile/Goods/goodsInfo',array('id'=>$v[goods_id]));?>" title="<?php echo ($v["goods_name"]); ?>"> -->
											<!--上面是原版，下面是应老板要求修改的 -->
											<a href="<?php echo U('Mobile/Store/index',array('store_id'=>$v[store_id]));?>" title="<?php echo ($v["goods_name"]); ?>">
												<!-- 商品表中有店铺id 图片用商品的，跳转到店铺连接
                <a href="<?php echo U('Store/index',array('store_id'=>$store[store_id]));?>"> -->
												<!--上面是原版，下面是应老板要求修改的结束 -->
												<div class="index_pro">
													<div class="products_kuang">
														<img src="<?php echo (goods_thum_images($v["goods_id"],400,400)); ?>"></div>
													<div class="goods_name"><?php echo ($v["goods_name"]); ?></div>
													<!--  <div class="price">
                   <a href="javascript:AjaxAddCart(<?php echo ($v[goods_id]); ?>,1,0);" class="btns">
                      <img src="/Application/Mobile/View/Static/images/index_flow.png">
                   </a>
                   <span href="<?php echo U('Mobile/Goods/goodsInfo',array('id'=>$v[goods_id]));?>" class="price_pro">￥<?php echo ($v["shop_price"]); ?>元</span>
                </div> -->
												</div>
											</a>
										</li>
										<?php if(($fl++%3 == 0) && ($fl < 9)): ?></ul>
								<ul><?php endif; endforeach; ?>
								</ul>
							</div>
							<div class="hd">
								<ul></ul>
							</div>
						</div>
					</div>
				</section>
				<script type="text/javascript">
					TouchSlide({
						slideCell: "#scroll_best",
						titCell: ".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
						effect: "leftLoop",
						autoPage: true, //自动分页
						//switchLoad:"_src" //切换加载，真实图片路径为"_src" 
					});
				</script>
				<section class="index_floor">
					<div class="floor_body1">
						<h2>
							<em></em>
							新品上市
							<!--<div class="geng"><a href="<?php echo U('Goods/search',array('q'=>'新品'));?>" >更多</a> <span></span></div>-->
						</h2>
						<div id="scroll_new" class="scroll_hot">
							<div class="bd">
								<ul>
									<?php $fl = '1'; ?>
									<?php
 $md5_key = md5("select * from __PREFIX__goods where is_new=1 and is_on_sale = 1 and goods_state = 1 order by sort desc limit 9"); $result_name = $sql_result_v = S("sql_".$md5_key); if(empty($sql_result_v)) { $Model = new \Think\Model(); $result_name = $sql_result_v = $Model->query("select * from __PREFIX__goods where is_new=1 and is_on_sale = 1 and goods_state = 1 order by sort desc limit 9"); S("sql_".$md5_key,$sql_result_v,0); } foreach($sql_result_v as $k=>$v): ?><li>
											<a href="<?php echo U('Mobile/Goods/goodsInfo',array('id'=>$v[goods_id]));?>" title="<?php echo ($v["goods_name"]); ?>">
												<div class="index_pro">
													<div class="products_kuang">
														<img src="<?php echo (goods_thum_images($v["goods_id"],400,400)); ?>"></div>
													<div class="goods_name"><?php echo ($v["goods_name"]); ?></div>
													<!-- 下面应该显示价格的，应老板要求修改的 -->
													<!-- <div class="price">

                   <a href="javascript:AjaxAddCart(<?php echo ($v[goods_id]); ?>,1,0);" class="btns">
                      <img src="/Application/Mobile/View/Static/images/index_flow.png">
                   </a>
                   <span href="<?php echo U('Mobile/Goods/goodsInfo',array('id'=>$v[goods_id]));?>" class="price_pro">￥<?php echo ($v["shop_price"]); ?>元</span>
                </div> -->
													<!-- 下面应该显示价格的，应老板要求修改的结束，首页的所有价格都关闭 -->
												</div>
											</a>
										</li>
										<?php if(($fl++%3 == 0) && ($fl < 9)): ?></ul>
								<ul><?php endif; endforeach; ?>
								</ul>
							</div>
							<div class="hd">
								<ul></ul>
							</div>
						</div>
					</div>
				</section>
				<script type="text/javascript">
					TouchSlide({
						slideCell: "#scroll_new",
						titCell: ".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
						effect: "leftLoop",
						autoPage: true, //自动分页
						//switchLoad:"_src" //切换加载，真实图片路径为"_src" 
					});
				</script>
				<section class="index_floor">
					<div class="floor_body1">
						<h2><em></em>热销商品
							<!--<div class="geng"><a href="<?php echo U('Goods/search',array('q'=>'热销'));?>" >更多</a> <span></span></div>-->
						</h2>
						<div id="scroll_hot" class="scroll_hot">
							<div class="bd">
								<ul>
									<?php $fl = '1'; ?>
									<?php
 $md5_key = md5("select * from __PREFIX__goods where is_hot=1 and is_on_sale = 1 and goods_state = 1 order by sort desc limit 9"); $result_name = $sql_result_v = S("sql_".$md5_key); if(empty($sql_result_v)) { $Model = new \Think\Model(); $result_name = $sql_result_v = $Model->query("select * from __PREFIX__goods where is_hot=1 and is_on_sale = 1 and goods_state = 1 order by sort desc limit 9"); S("sql_".$md5_key,$sql_result_v,0); } foreach($sql_result_v as $k=>$v): ?><li>
											<a href="<?php echo U('Mobile/Goods/goodsInfo',array('id'=>$v[goods_id]));?>" title="<?php echo ($v["goods_name"]); ?>">
												<div class="index_pro">
													<div class="products_kuang">
														<img src="<?php echo (goods_thum_images($v["goods_id"],400,400)); ?>"></div>
													<div class="goods_name"><?php echo ($v["goods_name"]); ?></div>
													<!-- <div class="price">
                   <a href="javascript:AjaxAddCart(<?php echo ($v[goods_id]); ?>,1,0);" class="btns">
                      <img src="/Application/Mobile/View/Static/images/index_flow.png">
                   </a>
                   <span href="<?php echo U('Mobile/Goods/goodsInfo',array('id'=>$v[goods_id]));?>" class="price_pro">￥<?php echo ($v["shop_price"]); ?>元</span>
                </div> -->
												</div>
											</a>
										</li>
										<?php if(($fl++%3 == 0) && ($fl < 9)): ?></ul>
								<ul><?php endif; endforeach; ?>
								</ul>
							</div>
							<div class="hd">
								<ul></ul>
							</div>
						</div>
					</div>
				</section>
				<script type="text/javascript">
					TouchSlide({
						slideCell: "#scroll_hot",
						titCell: ".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
						effect: "leftLoop",
						autoPage: true, //自动分页
						//switchLoad:"_src" //切换加载，真实图片路径为"_src" 
					});
				</script>


				<section class="index_floor_lou">
					<div class="floor_body ">
						<h2>
							<em></em>
							<div class="geng"><a href="javascript:void(0);">更多</a> <span></span></div>
						</h2>
						<ul>
						</ul>
					</div>
				</section>

				<div id="index_banner" class="index_banner">
					<div class="bd">
						<ul>
							<?php $pid =309;$ad_position = M("ad_position")->cache(true,PLM_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1553562000 and end_time > 1553562000 ")->order("orderby desc")->cache(true,PLM_CACHE_TIME)->limit("2")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 2- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $key=>$v): $v[position] = $ad_position[$v[pid]]; if($_GET[edit_ad] && $v[not_adv] == 0 ) { $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]"; $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name]; $v[target] = 0; } ?><li>
									<a href="<?php echo ($v["ad_link"]); ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?> >
										<img src="<?php echo ($v[ad_code]); ?>" title="<?php echo ($v[title]); ?>" style="<?php echo ($v[style]); ?>" border="0">
									</a>
								</li><?php endforeach; ?>
						</ul>
					</div>
					<div class="hd">
						<ul>
						</ul>
					</div>
				</div>
				<script type="text/javascript">
					TouchSlide({
						slideCell: "#index_banner",
						titCell: ".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
						mainCell: ".bd ul",
						effect: "leftLoop",
						autoPage: true, //自动分页
						autoPlay: true //自动播放
					});
				</script>

				<script type="text/javascript">
					var url = "index.php?m=Mobile&c=Index&a=ajaxGetMore";
					$(function() {
						//$('#J_ItemList').more({'address': url});
						getGoodsList();
					});

					var page = 1;

					function getGoodsList() {
						$('.get_more').show();
						$.ajax({
							type: "get",
							url: "/index.php?m=Mobile&c=Index&a=ajaxGetMore&p=" + page,
							dataType: 'html',
							success: function(data) {
								if (data) {
									$("#J_ItemList>ul").append(data);
									page++;
									$('.get_more').hide();
								} else {
									$('.get_more').hide();
									$('#getmore').remove();
								}
							}
						});
					}
				</script>
				<div class="floor_body2">
					<h2>————&nbsp;猜你喜欢&nbsp;————</h2>
					<div id="J_ItemList">
						<ul class="product single_item info">
						</ul>
						<a href="javascript:;" class="get_more" style="text-align:center; display:block;">
							<img src='/Application/Mobile/View/Static/images/category/loader.gif' width="12" height="12"> </a>
					</div>
					<div id="getmore" style="font-size:.24rem;text-align: center;color:#888;padding:.25rem .24rem .4rem;">
						<a href="javascript:void(0)" onClick="getGoodsList()">点击加载更多</a>
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
				<script>
					function goTop(){
  $('html,body').animate({'scrollTop':0},600);
}
</script>
				<a href="javascript:goTop();" class="gotop"><img src="/Application/Mobile/View/Static/images/topup.png"></a>
			</div>


			<div id="search_hide" class="search_hide">
				<h2> <span class="close"><img src="/Application/Mobile/View/Static/images/close.png"></span>关键搜索</h2>
				<div id="mallSearch" class="search_mid">
					<div id="search_tips" style="display:none;"></div>
					<ul class="search-type">
						<li class="cur" num="0">宝贝</li>
						<li num="1">店铺</li>
					</ul>
					<div class="searchdotm">
						<form class="set_ip" name="sourch_form" id="sourch_form" method="post" action="<?php echo U('Goods/search');?>">
							<div class="mallSearch-input">
								<div id="s-combobox-135">
									<input class="s-combobox-input" name="q" id="q" placeholder="请输入关键词" type="text" value="<?php echo I('q'); ?>" />
								</div>
								<input type="button" value="" class="button" onclick="if($.trim($('#q').val()) != '') $('#sourch_form').submit();" />
							</div>
						</form>
					</div>
				</div>
				<!--
    <div class="search_body">
    <div class="search_box">
    <form action="search.php" method="post" id="searchForm" name="searchForm">
    <div>
    <select id='search_type' name="search_type" style="width:15%;">
      <option value='search'>宝贝</option>
      <option value='stores'>店铺</option>
    </select>
         <input class="text" type="search" name="keywords" id="keywordBox" autofocus>
         <button type="submit" value="搜 索" ></button>
    </div>
    </form>
      </div>
    </div>
       -->
				<section class="mix_recently_search">
					<h3>热门搜索</h3>
					<ul>
						<?php if(is_array($plmshop_config["hot_keywords"])): foreach($plmshop_config["hot_keywords"] as $k=>$wd): ?><li><a href="<?php echo U('Goods/search',array('q'=>$wd));?>" <?php if($k == 0): ?>class="ht"<?php endif; ?>><?php echo ($wd); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</section>
			</div>

		</div>
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

		<script type="text/javascript">
			$(function() {
				$('#search_text').click(function() {
					$(".showpage").children('div').hide();
					$("#search_hide").css('position', 'fixed').css('top', '0px').css('width', '100%').css('z-index', '999').show();
				})
				$('#get_search_box').click(function() {
					$(".showpage").children('div').hide();
					$("#search_hide").css('position', 'fixed').css('top', '0px').css('width', '100%').css('z-index', '999').show();
				})
				$("#search_hide .close").click(function() {
					$(".showpage").children('div').show();
					$("#search_hide").hide();
				})
			});
		</script>
		<script>
			$('.search-type li').click(function() {
				$(this).addClass('cur').siblings().removeClass('cur');
				$('#searchtype').val($(this).attr('num'));
			});
			$('#searchtype').val($(this).attr('0'));
		</script>
		<script src="/Public/js/jqueryUrlGet.js"></script>
		<!--获取get参数插件-->
		<script>
			set_first_leader(); //设置推荐人
		</script>
	</body>
</html>