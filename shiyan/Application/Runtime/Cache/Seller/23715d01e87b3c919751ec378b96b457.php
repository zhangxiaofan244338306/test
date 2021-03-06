<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>商品管理</title>
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
                           <a href="javascript:void(0);"  data-id="0">商品发布</a>
                        </li>
                        <li >
                           <a href="javascript:void(0);"  data-id="1">出售商品</a>
                        </li>
                        <li >
                           <a href="javascript:void(0);"  data-id="2">仓库商品</a>
                        </li>
                        <li >
                           <a href="javascript:void(0);"  data-id="3">商品规格</a>
                        </li>
                        <li >
                           <a href="javascript:void(0);"  data-id="4">品牌申请</a>
                        </li>                        
 
            </ul>
        </div>
        <!-- 上面是左边部分 -->
        <!-- 下面是右边部分 -->
        <div class="fr category2">
                <div class="branchList" >
                	<div class="branchList-cont">
                    <!--广告图-s-->
	                   <!--  <div class="tp-bann"  data-id="0">
	                        	                            <a href="javascript:void(0);"  >
	                                <img src="./public/upload/ad/2018/04-12/90455f9788541c6e5e46996ab4d4beed.jpg" title="" style="">
	                            </a>
	                    </div> -->
	                    <!--广告图-e-->
	                    <!--分类-s-->
	                    <div class="tp-class-list">
	                        	   	<h4>商品发布</a></h4>
	                                <ul class="tp-category">
	                                			<li>
	                                                <a href="<?php echo U('/Seller/Goods/addEditGoods');?>">
	                                                    <img src="/Application/Seller/View/Static/fanlie/shangpinxiangce.png"/>
	                                                    <p>通用信息</p>
	                                                </a>
	                                            </li>
	                                    	    <li>
	                                                <a href="/index.php/Mobile/Goods/goodsList/id/63.html">
	                                                    <img src="/Application/Seller/View/Static/fanlie/shangpinwuliu.png"/>
	                                                    <p>商品相册</p>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="/index.php/Mobile/Goods/goodsList/id/63.html">
	                                                    <img src="/Application/Seller/View/Static/fanlie/shangpinwuliu.png"/>
	                                                    <p>商品规格</p>
	                                                </a>
	                                            </li>
	                                    	    <li>
	                                                <a href="/index.php/Mobile/Goods/goodsList/id/63.html">
	                                                    <img src="/Application/Seller/View/Static/fanlie/shangpinwuliu.png"/>
	                                                    <p>商品属性</p>
	                                                </a>
	                                            </li>
	                                    	    <li>
	                                                <a href="/index.php/Mobile/Goods/goodsList/id/63.html">
	                                                    <img src="/Application/Seller/View/Static/fanlie/shangpinwuliu.png"/>
	                                                    <p>商品物流</p>
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
	                    <!-- <div class="tp-bann"  data-id="1">
	                        	                            <a href="javascript:void(0);"  >
	                                <img src="./public/upload/ad/2018/04-12/90455f9788541c6e5e46996ab4d4beed.jpg" title="" style="">
	                            </a>
	                    </div> -->
	                    <!--广告图-e-->
	                    <!--分类-s-->
	              

	                    <div class="tp-class-list">
	                        		<h4>出售商品</h4>
	                                <ul class="tp-category">
	                                    	    <li>
	                                                <a href="<?php echo U('Seller/Goods/goodsList',array('goods_state'=>1));?>">
	                                                    <img src="/Application/Seller/View/Static/fanlie/tianjiashangpin.png"/>
	                                                    <p>商品列表</p>
	                                                </a>
	                                            </li>
	                                    	    <li>
	                                                <a href="<?php echo U('/Seller/Goods/addEditGoods');?>">
	                                                    <img src="/Application/Seller/View/Static/fanlie/tianjiaguige.png"/>
	                                                    <p>添加商品</p>
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
	                                <img src="/Application/Seller/View/Static/fanlie/90455f9788541c6e5e46996ab4d4beed.jpg" title="" style="">
	                            </a>
	                    </div>
	                    <!--广告图-e-->
	                    <!--分类-s-->
	                    <div class="tp-class-list">
	                        	<h4>仓库中的商品</h4>
	                                <ul class="tp-category">
	                                    	    <li>
	                                                <a href="<?php echo U('Seller/Goods/goodsList?goods_state=0,2,3');?>">
	                                                    <img src="/Application/Seller/View/Static/fanlie/shangpinliebiao.png"/>
	                                                    <p>仓库中列表</p>
	                                                </a>
	                                            </li>
							        			<li>
	                                                <a href="<?php echo U('/Seller/Goods/addEditGoods');?>">
	                                                    <img src="/Application/Seller/View/Static/fanlie/shangpinguige.png"/>
	                                                    <p>添加新商品</p>
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
	                                <img src="/Application/Seller/View/Static/fanlie/90455f9788541c6e5e46996ab4d4beed.jpg" title="" style="">
	                            </a>
	                    </div>
	                    <!--广告图-e-->
	                    <!--分类-s-->
	                    <div class="tp-class-list">
	                        	   	<h4>商品规格</h4>
	                                <ul class="tp-category">
	                                			<li>
	                                                <a href="<?php echo U('/Seller/Goods/specList');?>">
	                                                    <img src="/Application/Seller/View/Static/fanlie/pinpaizhanshi.png"/>
	                                                    <p>规格列表</p>
	                                                </a>
	                                            </li>
	                                    	    <li>
	                                                <a href=" ">
	                                                	<!--这里添加规格，需要平台发布后才行的 -->
	                                                    <img src="/Application/Seller/View/Static/fanlie/pinpaitianjia.png"/>
	                                                    <p>订单添加规格</p>
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
	                   <!--  <div class="tp-bann"  data-id="2">
	                        	                            <a href="javascript:void(0);"  >
	                                <img src="./public/upload/ad/2018/04-12/90455f9788541c6e5e46996ab4d4beed.jpg" title="" style="">
	                            </a>
	                    </div> -->
	                    <!--广告图-e-->
	                    <!--分类-s-->
	                    <div class="tp-class-list">
	                        		<h4>品牌申请</h4>
	                                <ul class="tp-category">
	                                    	    <li>
	                                                <a href="<?php echo U('/Seller/Goods/brandList');?>">
	                                                    <img src="/Application/Seller/View/Static/fanlie/guigezhanshi.png"/>
	                                                    <p>品牌列表</p>
	                                                </a>
	                                            </li>
							        			<li>
	                                                <a href="<?php echo U('/Seller/Goods/addEditBrand');?>">
	                                                    <img src="/Application/Seller/View/Static/fanlie/tianjiaguige.png"/>
	                                                    <p>添加品牌</p>
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