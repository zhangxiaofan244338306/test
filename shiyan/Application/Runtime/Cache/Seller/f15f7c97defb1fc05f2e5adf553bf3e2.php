<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Content-Language" content="zh-CN">
		<meta content="all" name="robots">
		<meta name="description" content="">
		<meta content="" name="keywords">
		<title>地图</title>
		<link rel="stylesheet" type="text/css" href="/Application/Seller/View/Static/gaode/map.css">
		<script src="/Application/Seller/View/Static/gaode/jquerynew.js" type="text/javascript" language="javascript"></script>
		<script src="http://webapi.amap.com/maps?v=1.3&key=ef6e7a80ec4171d7f28b877841c3aa1e"></script>
		<script type="text/javascript" src="/Application/Seller/View/Static/artdialog/artDialog.js?skin=blue" ></script>
		<script type="text/javascript" src="/Application/Seller/View/Static/artdialog/plugins/iframeTools.js" ></script>
	</head>
	<body style="background:none;width:770px;height:550px;">
		<div class="searchkuang">
			<input type="hidden" name="cityCode" id="cityCode" value="">
			<input type="hidden" name="cityname" id="cityname" value="上海市">
			<div> <input type="text" id="searchvalue" name="searchvalue" value="录入搜索地址" placeholder="录入搜索地址" style="float:left;width:200px;line-height:25px;height:25px;"><a
				 href="javascript:void(0);" class="mapBtns" onclick="dosearchcity();">提交搜索</a> </div>
			<div class="showsearch" style="background-color:#fff;">
				<ul id="backdatali">
				</ul>

			</div>
		</div>
		<div id="SearchAddmap">
		</div>
		<script type="text/javascript">
			var getlng,getLat;
// 			function addPointed() {
// 				console.log(pointeds);
// 				pointeds.val("getlng + ',' + getLat");
// 			};
			var savemapurl =
				'http://waimai.plmsh.com/index.php?ctrl=area&action=savemapshoplocation&lat=@lat@&lng=@lng@&random=@random@&datatype=json';
			var curlnglat = "121.470766" + "," + "31.232449";
			// 这里的经度和纬度应该是初始值把
			//初始化地图对象，加载地图
			//初始化加载地图时，若center及level属性缺省，地图默认显示用户当前城市范围
			var map = new AMap.Map('SearchAddmap', {
				resizeEnable: true,
				zoom: 17
			});
			AMap.plugin(['AMap.ToolBar', 'AMap.Scale', 'AMap.OverView'],
				function() {
					map.addControl(new AMap.ToolBar());
					map.addControl(new AMap.Scale());
					map.addControl(new AMap.OverView({
						isOpen: false
					}));
				});
			//为地图注册click事件获取鼠标点击出的经纬度坐标
			//哦，这里才是它的关键地方，通过鼠标点击获得鼠标上的经度和纬度
			var clickEventListener = map.on('click', function(e) {



				 getlng = e.lnglat.lng;
				 getLat = e.lnglat.lat;

				curlnglat = getlng + ',' + getLat;

				console.log(getlng + ',' + getLat);

				
				addMarker(getlng, getLat);
			});
			var array = curlnglat.split(",");
			var nums = [];
			for (var i = 0; i < array.length; i++) {
				nums.push(array[i]);
			}
			var curgetlng = nums[0];
			var curgetlat = nums[1];
			addMarker(curgetlng, curgetlat);
			// 实例化点标记
			function addMarker(getlng, getLat) {

				map.clearMap();
				map.setZoomAndCenter([getlng, getLat]);
				marker = new AMap.Marker({
					icon: "http://waimai.plmsh.com/upload/map/shop.png",
					offset: new AMap.Pixel(-5, -19),
					position: [getlng, getLat]
				});
				marker.setMap(map);
				AMap.event.addListener(marker, 'click', function() {
					infoWindow.open(map, marker.getPosition());
				});
				$.getScript('http://restapi.amap.com/v3/geocode/regeo?output=json&location=' + getlng + ',' + getLat +
					'&key=06d1b0b1416b144c3e4e83182f2a8262&radius=1000&extensions=all&callback=renderReverse');

			}



			//在输入框中 输入地址 在相似城市区域内查找 内容
			function dosearchcity() {
				//searchvalue" value="录入搜索地址" placeholder="录入搜索地址"
				$('.showsearch').show();
				var searchvalue = $('#searchvalue').val();
				var cityname = $('#cityname').val();
				if ($('#searchvalue').val() == $('#searchvalue').attr('placeholder')) {
					$('#backdatali').html('<li>请录入查询条件</li>');
					return false;
				}
				if (searchvalue == '') {
					$('#backdatali').html('<li>请录入查询条件</li>');
					return false;
				}

				$.getScript('http://restapi.amap.com/v3/place/text?&keywords=' + searchvalue + '&output=json&city=' + cityname +
					'&page=1&key=06d1b0b1416b144c3e4e83182f2a8262&extensions=all&callback=showaddresslist');

			}

			function renderReverse(datas) {
				console.log(datas);
				if (datas.status == 1 && datas.info == 'OK') {
					/*	if( datas.regeocode.pois.length > 0 ){
				var formatted_address = datas.regeocode.pois[0].name;
				var getlnglat = datas.regeocode.pois[0].location;
 			}else{
				var formatted_address = datas.regeocode.formatted_address;
				var getlnglat = datas.regeocode.pois[0].location;
			}
			 */

					var formatted_address = datas.regeocode.formatted_address;
				}
				var contentc = '<p class="infoAddress"  style="     min-width: 250px;" >' + formatted_address +
					'</p><a href="javascript:void(0);" style=" font-size: 12px; text-decoration: none;float: right;" class="mapBtns" onclick="mapsetlink(\'' +
					curlnglat + '\',\'' + formatted_address + '\');">提交保存地址</a>';

				var info = [];
				info.push(contentc);
				infoWindow = new AMap.InfoWindow({
					content: info.join("<br/>"), //使用默认信息窗体框样式，显示信息内容\
					offset: new AMap.Pixel(2, -25) //
				});
				//infoWindow.open(map, [getlnglat]);
				infoWindow.open(map, marker.getPosition());
			}
			//关闭信息窗体
			function closeInfoWindow() {
				map.clearInfoWindow();
			}

			function showaddresslist(datas) {

				if (datas.status == 1 && datas.info == 'OK') {
					var resultobj = datas.pois;
					$('#backdatali').html('');
					$.each(resultobj, function(i, val) {
						$('#backdatali').append('<li address="' + val.name + '"   lnglat="' + val.location + '" >' + val.name + '</li>');
					});
				} else {
					$('#backdatali').html('<li>未查找到相关数组，请更换关键词搜索...</li>');
				}
			}

			$('.showsearch li').live("click", function() {
				$('.showsearch').toggle();
				var clicklnglat = $(this).attr('lnglat');
				curlnglat = clicklnglat;
				var array = clicklnglat.split(",");
				var nums = [];
				for (var i = 0; i < array.length; i++) {
					nums.push(array[i]);
				}
				var getlng = nums[0];
				var getlat = nums[1];
				$(this).addClass('on').siblings().removeClass('on');
				if ($(this).attr('address') != undefined) {
					addMarker(getlng, getlat);
				}
			});
			$('#searchvalue').live("click", function() {
				if ($(this).val() == $(this).attr('placeholder')) {
					$(this).val('');
				}
			});
			$("#searchvalue").focus(function() {
				$('.showsearch').toggle();
			});

			function mapsetlink(mylnglat, mymapname) {
				artDialog.opener.diliverDataToParent(getlng,getLat); 
				var lnglatarr = mylnglat.split(',');
				var lng = lnglatarr[0];
				var lat = lnglatarr[1];
				// savemapurl = 是把地址提交保存到这里的
				// http://waimai.plmsh.com/index.php?ctrl=area&action=savemapshoplocation&lat=@lat@&lng=@lng@&random=@random@&datatype=json
				// 这里就把它保存到表里面的
				$.ajax({
					type: 'get',
					asybc: false,
					data: {},
					url: savemapurl.replace('@lat@', lat).replace('@lng@', lng),
					dataType: 'json',
					success: function(content) {
						if (content.error == false) {
							parent.setmap(mylnglat, mymapname);
							alert('保存成功');
							parent.closemydilog();

						} else {
							if (content.error == true) {
								alert(content.msg); //alert(content.msg);
							} else {
								alert(content);
							}
						}
					},
					error: function(content) {
						alert('数据获取失败');
					}

				})
			}
			//检索  附近  坐标
		</script>
		<style>
			<style>.searchkuang {
				position: absolute;
				left: 50px;
				z-index: 2000;
				top: 20px;
				;
				width: 290px;
			}

			.showsearch {
				clear: both;
				width: 280px;
				background-color: #fff
			}

			.showsearch li {
				padding: 3px 3px 3px 3px;
				border-bottom: 2px solid gray;
			}

			.showsearch li.on {
				font-weight: bold;
				border-bottom: 2px solid #f60;
			}
		</style>
		</style>
	</body>
</html>