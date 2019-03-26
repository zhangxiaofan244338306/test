<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>商家中心</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search results) and in your feed.xml site description.
">
<link rel="stylesheet" href="/Application/Seller/View/Static/shouji/lib/weui.min.css">
<link rel="stylesheet" href="/Application/Seller/View/Static/shouji/css/jquery-weui.css">
<link rel="stylesheet" href="/Application/Seller/View/Static/shouji/css/style.css">
</head>
<body ontouchstart>
<!--主体-->
<div class='weui-content'>
  <div class="wy-center-top">
    <div class="weui-media-box weui-media-box_appmsg">
      <div class="weui-media-box__hd"><img class="weui-media-box__thumb radius" src="/Application/Seller/View/Static/shouji/upload/headimg.jpg" alt=""></div>
      <!-- /Application/Seller/View/Static/shouji/upload/<?php echo ($yonghu["headimgurl"]); ?> -->
      <div class="weui-media-box__bd">
        <h4 class="weui-media-box__title user-name">店铺名称:<?php echo ($store["store_name"]); ?></h4>
        <p class="user-grade">店铺等级：默认等级</p>
        <p class="user-integral">管理权限：<em class="num">管理员</em></p>
        <p class="user-integral">最后登录时间：<em class="num"><?php echo (date('Y-m-d H:i',$seller["last_login_time"])); ?></em></p>
        <!-- <p class="user-integral">待返还金额：<em class="num">100</em>元</p> -->
      </div>
    </div>
  </div>
    <div class="weui-panel weui-panel_access">
    <div class="weui-panel__hd">
      <a href="<?php echo U('/Seller/Admin/cleanCache');?>" class="weui-cell weui-cell_access center-alloder">
        <div class="weui-cell__bd wy-cell">
          <div class="weui-cell__hd"><img src="/Application/Seller/View/Static/shouji/images/7mokuai/qingchuhuancun.png" alt="" class="center-list-icon"></div>
          <div class="weui-cell__bd weui-cell_primary"><p class="center-list-txt">清除店铺缓存</p></div>
        </div>
      </a>   
    </div>
    <div class="weui-panel__bd">
      <div class="weui-flex">
        <div class="weui-flex__item">
          <a href="#" class="center-ordersModule">
            <div class="center-money"><em>2000</em></div>
            <!-- <?php echo ($yonghu["rankcredits"]); ?> 还是用模板取出的数据相加吧,运算用.语法行不通-->
            <div class="name">今日销售总额</div>
          </a>
        </div>
        <div class="weui-flex__item">
          <a href="#" class="center-ordersModule">
            <div class="center-money"><em><?php echo ($count["goods_sum"]); ?></em></div>
            <div class="name">商品数量</div>
          </a>
        </div>
        <div class="weui-flex__item">
          <a href="#" class="center-ordersModule">
            <div class="center-money"><em><?php echo ($count["article"]); ?></em></div>
            <div class="name">文章数量</div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- 上面的是welcome -->
  <!-- 这里是left -->
  <div class="weui-panel weui-panel_access">
    <div class="weui-panel__hd">
      <a href="#" class="weui-cell weui-cell_access center-alloder">
      </a>   
    </div>
    <div class="weui-panel__bd">
      <div class="weui-flex">
        <div class="weui-flex__item">
          <a href="<?php echo U('/Seller/Index/shangpin');?>" class="center-ordersModule">
            <div class="imgicon"><img src="/Application/Seller/View/Static/shouji/images/7mokuai/shangpin.png" /></div>
            <div class="name">商品管理</div>
          </a>
        </div>
        <div class="weui-flex__item">
          <a href="<?php echo U('/Seller/Index/dingdan');?>" class="center-ordersModule">
            <div class="imgicon"><img src="/Application/Seller/View/Static/shouji/images/7mokuai/dingdan.png" /></div>
            <div class="name">订单物流</div>
          </a>
        </div>
        <div class="weui-flex__item">
          <a href="<?php echo U('/Seller/Index/cuxiao');?>" class="center-ordersModule">
            <div class="imgicon"><img src="/Application/Seller/View/Static/shouji/images/7mokuai/cuxiao.png" /></div>
            <div class="name">促销管理</div>
          </a>
        </div>
        <div class="weui-flex__item">
          <a href="<?php echo U('/Seller/Index/dianpu');?>" class="center-ordersModule">
            <div class="imgicon"><img src="/Application/Seller/View/Static/shouji/images/7mokuai/dianpu.png" /></div>
            <div class="name">店铺管理</div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- 换行 -->
  <div class="weui-panel weui-panel_access">
    <div class="weui-panel__hd">
      <a href="#" class="weui-cell weui-cell_access center-alloder">
      </a>   
    </div>
    <div class="weui-panel__bd">
      <div class="weui-flex">
        <div class="weui-flex__item">
          <a href="<?php echo U('/Seller/Index/tongji');?>" class="center-ordersModule">
            <div class="imgicon"><img src="/Application/Seller/View/Static/shouji/images/7mokuai/tongji.png" /></div>
            <div class="name">统计报表</div>
          </a>
        </div>
        <div class="weui-flex__item">
          <a href="<?php echo U('/Seller/Index/zhanghao');?>" class="center-ordersModule">
            <div class="imgicon"><img src="/Application/Seller/View/Static/shouji/images/7mokuai/zhanghao.png" /></div>
            <div class="name">账号管理</div>
          </a>
        </div>
        <div class="weui-flex__item">
          <a href="<?php echo U('/Seller/Index/caiwu');?>" class="center-ordersModule">
            <div class="imgicon"><img src="/Application/Seller/View/Static/shouji/images/7mokuai/caiwu.png" /></div>
            <div class="name">财务管理</div>
          </a>
        </div>
        <div class="weui-flex__item">
          <a href="<?php echo U('/Seller/Index/shuma');?>" class="center-ordersModule">
            <div class="imgicon"><img src="/Application/Seller/View/Static/shouji/images/7mokuai/dingdan.png" /></div>
            <div class="name">输码验证</div>
            <!-- 虚拟订单，到店使用服务 -->
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--  -->
  

  
  
  <div class="weui-panel">
        <div class="weui-panel__bd">
          <div class="weui-media-box weui-media-box_small-appmsg">
            <div class="weui-cells">
              <a class="weui-cell weui-cell_access" href="/index.php/Seller/woyao/zhuyishixiang">
                <div class="weui-cell__hd"><img src="/Application/Seller/View/Static/shouji/images/7mokuai/dcldingdan.png" alt="" class="center-list-icon"></div>
                <div class="weui-cell__bd weui-cell_primary">
                  <p class="center-list-txt">待处理订单</p>
                </div>
                <span class="weui-cell__ft"></span>
              </a>
              <a class="weui-cell weui-cell_access" href="address_list.html">
                <div class="weui-cell__hd"><img src="/Application/Seller/View/Static/shouji/images/7mokuai/dclshangpin.png" alt="" class="center-list-icon"></div>
                <div class="weui-cell__bd weui-cell_primary">
                  <p class="center-list-txt">待处理商品</p>
                </div>
                <span class="weui-cell__ft"></span>
              </a>
              <a class="weui-cell weui-cell_access" href="card.html">
                <div class="weui-cell__hd"><img src="/Application/Seller/View/Static/shouji/images/7mokuai/dclpinlun.png" alt="" class="center-list-icon"></div>
                <div class="weui-cell__bd weui-cell_primary">
                  <p class="center-list-txt">待处理评论及其它</p>
                </div>
                <span class="weui-cell__ft"></span>
              </a>
              <!-- 修改密码，直接在用户版本修改就行了，这里就不要重复写这个功能了 -->
              <!-- <a class="weui-cell weui-cell_access" href="password.html">
                <div class="weui-cell__hd"><img src="/Application/Seller/View/Static/shouji/images/center-icon-dlmm.png" alt="" class="center-list-icon"></div>
                <div class="weui-cell__bd weui-cell_primary">
                  <p class="center-list-txt">密码修改</p>
                </div>
                <span class="weui-cell__ft"></span>
              </a> -->
              <a class="weui-cell weui-cell_access" href="tel:18628127905">
                <div class="weui-cell__hd"><img src="/Application/Seller/View/Static/shouji/images/7mokuai/kefu.png" alt="" class="center-list-icon"></div>
                <div class="weui-cell__bd weui-cell_primary">
                  <p class="center-list-txt">平台客服小妹电话</p>
                </div>
                <span class="weui-cell__ft"></span>
              </a>
              <a class="weui-cell weui-cell_access" href="<?php echo U('Admin/logout');?>">
                <div class="weui-cell__hd"><img src="/Application/Seller/View/Static/shouji/images/center-icon-out.png" alt="" class="center-list-icon"></div>
                <div class="weui-cell__bd weui-cell_primary">
                  <p class="center-list-txt">退出账号</p>
                </div>
                <span class="weui-cell__ft"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
  
  
  
</div>

<script src="/Application/Seller/View/Static/shouji/lib/jquery-2.1.4.js"></script> 
<script src="/Application/Seller/View/Static/shouji/lib/fastclick.js"></script> 
<script>
  $(function() {
    FastClick.attach(document.body);
  });
</script> 
<script src="/Application/Seller/View/Static/shouji/js/jquery-weui.js"></script>
</body>
</html>