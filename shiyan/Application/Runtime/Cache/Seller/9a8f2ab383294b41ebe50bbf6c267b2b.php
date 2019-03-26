<?php if (!defined('THINK_PATH')) exit();?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>账号管理</title>
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
                           <a href="javascript:void(0);"  data-id="0">账号列表</a>
                        </li>
                        <li >
                           <a href="javascript:void(0);"  data-id="1">账号组</a>
                        </li>
                        <li >
                           <a href="javascript:void(0);"  data-id="2">账号日志</a>
                        </li>                               
            </ul>
        </div>
        <!-- 上面是左边部分 -->
        <!-- 下面是右边部分 -->
        <div class="fr category2">
                <div class="branchList" >
                	<div class="branchList-cont">
	                    <div class="tp-bann"  data-id="0">
	                        	                            <a href="javascript:void(0);"  >
	                                <img src="/Application/Seller/View/Static/cuxiao/toubuguanggao.jpg" title="" style="">
	                            </a>
	                    </div>
	                    <div class="tp-class-list">
	                        	   	<h4>账号列表</h4>
	                                <ul class="tp-category">
	                                			<li>
	                                                <a href="<?php echo U('/Seller/Admin/index');?>">
	                                                    <img src="/Application/Seller/View/Static/cuxiao/qianggouliebiao.png"/>
	                                                    <p>账号列表</p>
	                                                </a>
	                                            </li>
	                                    	    <li>
	                                                <a href="<?php echo U('/Seller/Admin/admin_info');?>">
	                                                    <img src="/Application/Seller/View/Static/cuxiao/tianjiaqianggou.png"/>
	                                                    <p>添加管理员</p>
	                                                </a>
	                                            </li>        
	                                </ul>
	                 </div>
                    </div>
                </div>

                <div class="branchList" >
                	<div class="branchList-cont">
	                    <div class="tp-bann"  data-id="1">
	                        	                            <a href="javascript:void(0);"  >
	                                <img src="/Application/Seller/View/Static/cuxiao/toubuguanggao.jpg" title="" style="">
	                            </a>
	                    </div>
	                    <div class="tp-class-list">
	                        	<h4>账号组</h4>
	                                <ul class="tp-category">
	                                    	    <li>
	                                                <a href="<?php echo U('/Seller/Admin/role');?>">
	                                                    <img src="/Application/Seller/View/Static/cuxiao/tuangouliebiao.png"/>
	                                                    <p>组列表</p>
	                                                </a>
	                                            </li>
	                                    	    <li>
	                                                <a href="<?php echo U('/Seller/Admin/role_info');?>">
	                                                    <img src="/Application/Seller/View/Static/cuxiao/tianjiatuangou.png"/>
	                                                    <p>添加角色</p>
	                                                </a>
	                                            </li>   
	                                </ul>           
	                    </div>
                    </div>
                </div>
                <div class="branchList" >
                	<div class="branchList-cont">
	                    <div class="tp-bann"  data-id="2">
	                        	<a href="javascript:void(0);"  >
	                                <img src="/Application/Seller/View/Static/cuxiao/toubuguanggao.jpg" title="" style="">
	                            </a>
	                    </div>
	                    <div class="tp-class-list">
	                        	<h4>日志列表</h4>
	                                <ul class="tp-category">
	                                    	    <li>
	                                                <a href="<?php echo U('/Seller/Admin/log');?>">
	                                                    <img src="/Application/Seller/View/Static/cuxiao/cuxiaoliebiao.png"/>
	                                                    <p>日志列表</p>
	                                                </a>
	                                            </li>
	                                </ul>          
	                    </div>
                    </div>
                </div>
        </div>
    </div>
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