<?php
/**
基础类
 */ 
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
    public $session_id;
    public $cateTrre = array();
    /*
     * 初始化操作
     */
    public function _initialize() {  
    	$this->session_id = session_id(); // 当前的 session_id
        define('SESSION_ID',$this->session_id); //将当前的session_id保存为常量，供其它方法调用
        // 判断当前用户是否手机                
        if(isMobile())
            cookie('is_mobile','1',3600); 
        else 
            cookie('is_mobile','0',3600);
                  
        $this->public_assign(); 
    }
    /**
     * 保存公告变量到 smarty中 比如 导航 
     */
    public function public_assign()
    {
        
       $plmshop_config = array();
       $plm_config = M('config')->select(); 
       // $plm_config = M('config')->cache(true,PLM_CACHE_TIME)->select();
       // dump($plm_config);       
       foreach($plm_config as $k => $v)
       {
       	  if($v['name'] == 'hot_keywords'){
       	  	 $plmshop_config['hot_keywords'] = explode('|', $v['value']);
       	  }       	  
          $plmshop_config[$v['inc_type'].'_'.$v['name']] = $v['value'];
       }                        
       $goods_category_tree = get_goods_category_tree();
       $this->cateTrre = $goods_category_tree; 
       $this->assign('goods_category_tree', $goods_category_tree);  
                          // 这里多了个h
       $brand_list = M('brand')->field('id,cat_id1,logo,is_hot')->where("cat_id1>0")->select();
       // ->cache(true,PLM_CACHE_TIME) 开发时候不用他              
       $this->assign('brand_list', $brand_list);
       $this->assign('plmshop_config', $plmshop_config);          
    }  

}