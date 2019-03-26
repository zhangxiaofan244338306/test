<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>店铺促销</title>
    <link rel="stylesheet" href="/Application/Seller/View/Static/mokuai/style.css">
    <link rel="stylesheet" type="text/css" href="/Application/Seller/View/Static/mokuai/iconfont.css"/>
    <script src="/Application/Seller/View/Static/mokuai/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/Application/Seller/View/Static/mokuai/style.js" type="text/javascript" charset="utf-8"></script>
    <script src="/Application/Seller/View/Static/mokuai/mobile-util.js" type="text/javascript" charset="utf-8"></script>
    <!-- <script src="./public/js/global.js"></script> -->
    <script src="/Application/Seller/View/Static/mokuai/layer.js"  type="text/javascript" ></script>
    <script src="/Application/Seller/View/Static/mokuai/swipeSlide.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body class="[body]">

    <div class="classreturn">
        <div class="content">
            <div class="ds-in-bl return">
                <a href="javascript:history.back(-1);"><img src="/Application/Seller/View/Static/mokuai/return.png" alt="返回"></a>
            </div>
           <!--  <div class="ds-in-bl search">
                <form action="" method="post">
                    <div class="sear-input">
                        <a href="/index.php/mobile/Goods/ajaxSearch.html">
                            <input type="text" value="" placeholder="请输入您所搜索的商品">
                        </a>
                    </div>
                </form>
            </div>
            <div class="ds-in-bl menu">
                <a href="javascript:void(0);"><img src="/Application/Seller/View/Static/mokuai/class1.png" alt="菜单"></a>
            </div> -->
        </div>
    </div>
    <div class="flool classlist">
        <div class="fl category1">
            <ul>
                        <li >
                           <a href="javascript:void(0);"  data-id="0">抢购管理</a>
                        </li>
                        <li >
                           <a href="javascript:void(0);"  data-id="1">团购管理</a>
                        </li>
                        <li >
                           <a href="javascript:void(0);"  data-id="2">商品促销</a>
                        </li>
                        <li >
                           <a href="javascript:void(0);"  data-id="3">订单促销</a>
                        </li>
                        <li >
                           <a href="javascript:void(0);"  data-id="4">优惠劵管理</a>
                        </li>                        
 
            </ul>
        </div>
        <!-- 上面是左边部分 -->
        <!-- 下面是右边部分 -->
        <div class="fr category2">
                <div class="branchList" >
                	<div class="branchList-cont">
                    <!--广告图-s-->
	                    <div class="tp-bann"  data-id="0">
	                        	                            <a href="javascript:void(0);"  >
	                                <img src="/Application/Seller/View/Static/cuxiao/toubuguanggao.jpg" title="" style="">
	                            </a>
	                    </div>
	                    <!--广告图-e-->
	                    <!--分类-s-->
	                    <div class="tp-class-list">
	                        	   	<h4>抢购管理</h4>
	                                <ul class="tp-category">
	                                			<li>
	                                                <a href="<?php echo U('/Seller/Promotion/rush_list');?>">
	                                                    <img src="/Application/Seller/View/Static/cuxiao/qianggouliebiao.png"/>
	                                                    <p>抢购列表</p>
	                                                </a>
	                                            </li>
	                                    	    <li>
	                                                <a href="<?php echo U('/Seller/Promotion/add_rush');?>">
	                                                    <img src="/Application/Seller/View/Static/cuxiao/tianjiaqianggou.png"/>
	                                                    <p>添加抢购活动</p>
	                                                </a>
	                                            </li>       
	                                </ul>
	                 </div>
                    <!--分类-e-->
                    </div>
                </div>

                <div class="branchList" >
                	<div class="branchList-cont">
                    <!--广告图-s-->
	                    <div class="tp-bann"  data-id="1">
	                        	                            <a href="javascript:void(0);"  >
	                                <img src="/Application/Seller/View/Static/cuxiao/toubuguanggao.jpg" title="" style="">
	                            </a>
	                    </div>
	                    <!--广告图-e-->
	                    <!--分类-s-->
	                    <div class="tp-class-list">
	                        	<h4>团购管理</h4>
	                                <ul class="tp-category">
	                                    	    <li>
	                                                <a href="<?php echo U('/Seller/Promotion/group_buy_list');?>">
	                                                    <img src="/Application/Seller/View/Static/cuxiao/tuangouliebiao.png"/>
	                                                    <p>团购列表</p>
	                                                </a>
	                                            </li>
	                                    	    <li>
	                                                <a href="<?php echo U('/Seller/Promotion/add_group_buy');?>">
	                                                    <img src="/Application/Seller/View/Static/cuxiao/tianjiatuangou.png"/>
	                                                    <p>添加团购</p>
	                                                </a>
	                                            </li>   	     
	                                </ul>           
	                    </div>
                    <!--分类-e-->
                    </div>
                </div>
                <div class="branchList" >
                	<div class="branchList-cont">
                    <!--广告图-s-->
	                    <div class="tp-bann"  data-id="2">
	                        	<a href="javascript:void(0);"  >
	                                <img src="/Application/Seller/View/Static/cuxiao/toubuguanggao.jpg" title="" style="">
	                            </a>
	                    </div>
	                    <!--广告图-e-->
	                    <!--分类-s-->
	                    <div class="tp-class-list">
	                        	<h4>商品促销</h4>
	                                <ul class="tp-category">
	                                    	    <li>
	                                                <a href="<?php echo U('/Seller/Promotion/prom_goods_list');?>">
	                                                    <img src="/Application/Seller/View/Static/cuxiao/cuxiaoliebiao.png"/>
	                                                    <p>促销列表</p>
	                                                </a>
	                                            </li>
							        			<li>
	                                                <a href="<?php echo U('/Seller/Promotion/add_prom_goods');?>">
	                                                    <img src="/Application/Seller/View/Static/cuxiao/tianjiacuxiao.png"/>
	                                                    <p>添加促销</p>
	                                                </a>
	                                            </li>
	                                </ul>          
	                    </div>
                    <!--分类-e-->
                    </div>
                </div>
			<!-- 自己写 -->
			<!-- 块一 -->
				 <div class="branchList" >
                	<div class="branchList-cont">
                    <!--广告图-s-->
	                    <div class="tp-bann"  data-id="0">
	                        	<a href="javascript:void(0);"  >
	                                <img src="/Application/Seller/View/Static/cuxiao/toubuguanggao.jpg" title="" style="">
	                            </a>
	                    </div>
	                    <!--广告图-e-->
	                    <!--分类-s-->
	                    <div class="tp-class-list">
	                    	<!-- style=" text-align:center;" -->
	                        	   	<h4>订单促销管理</h4>
	                                <ul class="tp-category">
	                                			<li>
	                                                <a href="<?php echo U('/Seller/Promotion/prom_order_list');?>">
	                                                    <img src="/Application/Seller/View/Static/cuxiao/dingdanliebiao.png"/>
	                                                    <p>订单促销列表</p>
	                                                </a>
	                                            </li>
	                                    	    <li>
	                                                <a href="<?php echo U('/Seller/Promotion/add_prom_order');?>">
	                                                    <img src="/Application/Seller/View/Static/cuxiao/tianjiadingdan.png"/>
	                                                    <p>订单添加活动</p>
	                                                </a>
	                                            </li>
	                                    	</ul>
	                 </div>
                    <!--分类-e-->
                    </div>
                </div>
				<!-- 块一结束 -->
				<!-- 块2开始 -->
				<div class="branchList" >
                	<div class="branchList-cont">
                    <!--广告图-s-->
	                    <div class="tp-bann"  data-id="2">
	                        	                            <a href="javascript:void(0);"  >
	                                <img src="/Application/Seller/View/Static/cuxiao/toubuguanggao.jpg" title="" style="">
	                            </a>
	                    </div>
	                    <!--广告图-e-->
	                    <!--分类-s-->
	                    <div class="tp-class-list">
	                        	<h4>优惠卷管理</h4>
	                                <ul class="tp-category">
	                                    	    <li>
	                                                <a href="<?php echo U('/Seller/Coupon/coupon_list');?>">
	                                                    <img src="/Application/Seller/View/Static/cuxiao/daijinjuan.png"/>
	                                                    <p>代金卷和优惠劵列表</p>
	                                                </a>
	                                            </li>
							        			<li>
	                                                <a href="<?php echo U('/Seller/Coupon/add_voucher');?>">
	                                                    <img src="/Application/Seller/View/Static/cuxiao/tianjiadaijinjuan.png"/>
	                                                    <p>添加优惠劵或代金卷</p>
	                                                </a>
	                                            </li>
	                                </ul>          
	                    </div>
                    <!--分类-e-->
                    </div>
                </div>
				<!-- 快2结束 -->

              <!-- 自己添加结束 -->
        </div>
    </div>
<!--底部导航-start-->
<!-- 测试抽取中间部分，屏蔽 -->
<script>
    $(function () {
        //点击切换2 3级分类
        var array=new Array();
        $('.category1 li').each(function(){
            array.push($(this).position().top-0);
        });
        $('.branchList').eq(0).show().siblings().hide();
        $('.category1 li').click(function() {
            var index = $(this).index() ;
            $('.category1').delay(200).animate({scrollTop:array[index]},300);
            $(this).addClass('cur').siblings().removeClass();
            $('.branchList').eq(index).show().siblings().hide();
            $('.category2').scrollTop(0);
        });
        $("html,body").css("overflow","hidden");
    });
</script>
	</body>
</html>