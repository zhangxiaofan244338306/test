<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>订单物流</title>
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
        <div class="content"> 订单物流
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
                           <a href="javascript:void(0);"  data-id="0">订单列表</a>
                        </li>
                        <li >
                           <a href="javascript:void(0);"  data-id="1">我要发货</a>
                        </li>
                        <li >
                           <a href="javascript:void(0);"  data-id="2">物流选择</a>
                        </li>
                        <li >
                           <a href="javascript:void(0);"  data-id="3">商品评论</a>
                        </li>
                        <li >
                           <a href="javascript:void(0);"  data-id="4">商品咨询</a>
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
	                        	   	<h4>订单管理</h4>
	                                <ul class="tp-category">
	                                			<li>
	                                                <a href="<?php echo U('/Seller/Order/index');?>">
	                                                    <img src="/Application/Seller/View/Static/cuxiao/qianggouliebiao.png"/>
	                                                    <p>订单列表</p>
	                                                </a>
	                                            </li>
	                                    	    <li>
	                                                <a href="<?php echo U('/Seller/Order/add_order');?>">
	                                                    <img src="/Application/Seller/View/Static/cuxiao/tianjiaqianggou.png"/>
	                                                    <p>添加订单</p>
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
                                <h4>我要发货</h4>
                                    <ul class="tp-category">
                                                <li>
                                                    <a href="<?php echo U('/Seller/Plugin/index');?>">
                                                        <img src="/Application/Seller/View/Static/cuxiao/tuangouliebiao.png"/>
                                                        <p>发货单列表</p>
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
	                        	<h4>物流选择</h4>
	                                <ul class="tp-category">
	                                    	    <li>
	                                                <a href="<?php echo U('/Seller/Order/delivery_list');?>">
	                                                    <img src="/Application/Seller/View/Static/cuxiao/tuangouliebiao.png"/>
	                                                    <p>物流列表</p>
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
	                        	<h4>商品评论</h4>
	                                <ul class="tp-category">
	                                    	    <li>
	                                                <a href="<?php echo U('/Seller/Comment/index');?>">
	                                                    <img src="/Application/Seller/View/Static/cuxiao/cuxiaoliebiao.png"/>
	                                                    <p>评论列表</p>
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
	                        	   	<h4>商品咨询</h4>
	                                <ul class="tp-category">
	                                			<li>
	                                                <a href="<?php echo U('/Seller/Comment/ask_list');?>">
	                                                    <img src="/Application/Seller/View/Static/cuxiao/dingdanliebiao.png"/>
	                                                    <p>商品咨询列表</p>
	                                                </a>
	                                            </li>
	                                    	    
	                                    	</ul>
	                 </div>
                    <!--分类-e-->
                    </div>
                </div>
				<!-- 块一结束 -->
				<!-- 块2开始 -->
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