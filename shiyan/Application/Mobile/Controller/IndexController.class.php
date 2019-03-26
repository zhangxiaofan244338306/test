<?php

namespace Mobile\Controller;

use Mobile\Model\StoreModel;

class IndexController extends MobileBaseController {

    public function index(){                
        /*
            //获取微信配置
            $wechat_list = M('wx_user')->select();
            $wechat_config = $wechat_list[0];
            $this->weixin_config = $wechat_config;        
            // 微信Jssdk 操作类 用分享朋友圈 JS            
            $jssdk = new \Mobile\Logic\Jssdk($this->weixin_config['appid'], $this->weixin_config['appsecret']);
            $signPackage = $jssdk->GetSignPackage();              
            print_r($signPackage);
        */
        $hot_goods = M('goods')->where("is_hot=1 and is_on_sale=1")->order('goods_id DESC')->limit(20)->cache(true,PLMSHOP_CACHE_TIME)->select();//首页热卖商品
        $thems = M('goods_category')->where('level=1')->order('sort_order')->limit(9)->cache(true,PLMSHOP_CACHE_TIME)->select();
        
 //        // 调用父类方法,
 //        $base=parent::public_assign();
 //        // dump($fu['result']['plmshop_config']);
 //        // 实验证明，可以在方法中调用另外的方法
 //        // 这样的做的目的就是不用再请求父类的接口了
 //        // 调用父类方法结束
 // //        //接口测试
 //        $mod = $_POST['controller'];
 // //        // dump($mod);
 //        $act = $_POST['action'];
 // // //        dump($act);

 // // // //        // 这里是前端发送过来的,已经对控制器和方法还有plmsh123加密的
 //        $urltoken = $_POST['token'];
 //        // dump("urltoken是".$urltoken);
 //        $token = md5($mod.$act."plmsh123");
 //        // dump("token是".$token);
 //        if($urltoken == $token){
 //             $json = array(
 //                'status'=>1,
 //                'msg'=>'获取成功',
                
 //                'result'=>array(
 //                    'thems'=>$thems,
 //                    'hot_goods'=>$hot_goods,
 //                    'favourite_goods'=>$favourite_goods,
 //                    // 继承base过来的数据
 //                    'goods_category_tree'=>$base['result']['goods_category_tree'],
 //                    'brand_list'=>$base['result']['brand_list'],
 //                    // $brand_list,
 //                    'plmshop_config'=>$base['result']['plmshop_config'],
 //                    // $plmshop_config,
 //                ),
 //            );
 //            $this->ajaxReturn($json);
 //        }else{
 //            $json = array('status'=>-1,'msg'=>'获取失败','result'=>'接口错误');
 //            $this->ajaxReturn($json);
 //            // exit(json_encode($json));
 //            // 这两种都可以
 //            // return json_encode($json);
 //            // 下面这种不行，返回去的html页面
 //        }
 // //        接口测试结束
        // 后端渲染
        
        $this->assign('thems',$thems);
        $this->assign('hot_goods',$hot_goods);
        $favourite_goods = M('goods')->where("is_recommend=1 and is_on_sale=1")->order('goods_id DESC')->limit(20)->cache(true,PLMSHOP_CACHE_TIME)->select();//首页推荐商品
        $this->assign('favourite_goods',$favourite_goods);
        $this->display();
    }

    /**
     * 分类列表显示
     */
    public function categoryList(){
        $this->display();
    }
    public function recruit(){
        $this->display();
    }
    /**
     * 模板列表
     */
    public function mobanlist(){
        $arr = glob("D:/wamp/www/wan_plmsh/mobile--html/*.html");
        foreach($arr as $key => $val)
        {
            $html = end(explode('/', $val));
            echo "<a href='http://www.php.com/wan_plmsh/mobile--html/{$html}' target='_blank'>{$html}</a> <br/>";            
        }        
    }
    public function train(){
        $this->display();
    }
    /**
     * 商品列表页
     */
    public function goodsList(){
        $goodsLogic = new \Home\Logic\GoodsLogic(); // 前台商品操作逻辑类
        $id = I('get.id',0); // 当前分类id
        $lists = getCatGrandson($id);
        $this->assign('lists',$lists);
        $this->display();
    }
    
    public function ajaxGetMore(){
        $p = I('p',1);
        $favourite_goods = M('goods')->where("is_recommend=1 and is_on_sale=1  and goods_state = 1 ")->order('sort DESC')->page($p,10)->cache(true,PLMSHOP_CACHE_TIME)->select();//首页推荐商品
        $this->assign('favourite_goods',$favourite_goods);
        $this->display();
    }

    /**
     * 店铺街
     * @author dyr
     * @time 2016/08/15
     */
    public function street()
    {
        $store_class = M('store_class')->where('')->select();
        $this->assign('store_class', $store_class);//店铺分类
        $this->display();
    }

    /**
     * ajax 获取店铺街
     */
    public function ajaxStreetList()
    {
        $p = I('p',1);
        $sc_id = I('get.sc_id','');
        $store_list = D('store')->getStreetList($sc_id,$p,10);
        foreach($store_list as $key=>$value){
            $store_list[$key]['goods_array'] = D('store')->getStoreGoods($value['store_id'],4);
        }
        $this->assign('store_list',$store_list);
        $this->display();
    }

    /**
     * 品牌街
     * @author dyr
     * @time 2016/08/15
     */
    public function brand()
    {
        $brand_model = M('brand');
        $brand_where['status'] = 0;
        $brand_class = $brand_model->field('cat_name')->group('cat_name')->order(array('sort'=>'desc','id'=>'asc'))->where($brand_where)->select();
        $brand_list = $brand_model->field('id,name,logo,url')->order(array('sort'=>'desc','id'=>'asc'))->where($brand_where)->select();
        $brand_count = count($brand_list);
        for ($i = 0; $i < $brand_count; $i++) {
            if (($i + 1) % 4 == 0) {
                $brand_list[$i]['brandLink'] = 'brandRightLink';
            } else {
                $brand_list[$i]['brandLink'] = 'brandLink';
            }
        }
        $this->assign('brand_list', $brand_list);//品牌列表
        $this->assign('brand_class', $brand_class);//品牌分类
        $this->display();
    }
}