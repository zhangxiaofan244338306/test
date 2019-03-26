<?php
namespace Home\Controller;
use Think\Controller;
use Home\Logic\StoreLogic;
class IndexController extends BaseController {
	// 主页继承了基础类的，当然能显示基础类的模板赋值了
    public function index(){
    	// 如果是手机跳转到 手机模块
        if(true == isMobile()){
            header("Location: ".U('Mobile/Index/index'));
        }
         $hot_goods = $hot_cate = $cateList = array();
        $sql = "select a.goods_name,a.goods_id,a.shop_price,a.market_price,a.cat_id1,b.parent_id_path,b.name from __PREFIX__goods as a left join ";
        $sql .= " __PREFIX__goods_category as b on a.cat_id1=b.id where a.is_hot=1 and a.is_on_sale=1 and a.goods_state = 1 order by a.sort";//二级分类下热卖商品       
        $index_hot_goods = M()->query($sql);//首页热卖商品
        if($index_hot_goods){
            foreach($index_hot_goods as $val){
                $cat_path = explode('_', $val['parent_id_path']);
                $hot_goods[$cat_path[1]][] = $val;
            }
        }

        $hot_category = M('goods_category')->where("is_hot=1 and level=3 and is_show=1")->select();//热门三级分类
        foreach ($hot_category as $v){
            $cat_path = explode('_', $v['parent_id_path']);
            $hot_cate[$cat_path[1]][] = $v;
        }
        
        foreach ($this->cateTrre as $k=>$v){
            if($v['is_hot']==1){
                $v['hot_goods'] = empty($hot_goods[$k]) ? '' : $hot_goods[$k];
                $v['hot_cate'] = empty($hot_cate[$k]) ? '' : $hot_cate[$k];
                $cateList[] = $v;
            }
        }
        $this->assign('cateList',$cateList);  
        // 商品分类表
       $this->display();
    }
     /**
     *  公告详情页
     */
    public function notice(){
        $this->display();
    }
    // 促销活动页面
    public function promoteList()
    {                          
        $model = M('');
        $db_prefix = C('DB_PREFIX');
        $goods_where['start_time']  = array('lt',time());
        $goods_where['end_time']  = array('gt',time());
        $goods_where['status']  = 1;
        $goods_where['is_end']  = 0;
        $goodsList = $model
            ->table($db_prefix . 'goods g')
            ->join('INNER JOIN ' . $db_prefix . 'flash_sale AS f ON g.goods_id = f.goods_id')
            ->where($goods_where)
            ->select();
        $brandList = M('brand')->getField("id,name,logo");
        $this->assign('brandList',$brandList);
        $this->assign('goodsList',$goodsList);
        $this->display();
    }
    /**
     * 店铺街
     */
    public function street()
    {
        $sc_id = I('get.sc_id');
        $store_class = M('store_class')->field('sc_id,sc_name')->where('')->select();
        $store_logic = new StoreLogic();
        // 引入这个商店逻辑类
        $store_list = $store_logic->getStoreList($sc_id,10);
        $this->assign('page', $store_list['show']);// 赋值分页输出
        $this->assign('store_list', $store_list['result']);
        $this->assign('store_class', $store_class);//店铺分类
        $this->display();
    }
}