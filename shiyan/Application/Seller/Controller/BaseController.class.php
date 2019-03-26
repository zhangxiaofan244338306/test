<?php

/**

 */

namespace Seller\Controller;
use Think\Controller;
// use Admin\Logic\UpgradeLogic;
// 升级包文件的逻辑，现在看看升级包逻辑是干啥的，不然就取消他
class BaseController extends Controller {

    /**
     * 析构函数
     */
    function __construct() 
    {
        parent::__construct();

        // 取消升级包开始
        // $upgradeLogic = new UpgradeLogic();
        // 在本类中调用另外一个类
        // 升级包有何用，应该取消
        // $upgradeMsg = $upgradeLogic->checkVersion(); //升级包消息 
               //然后调用这个类的方法 
        // $this->assign('upgradeMsg',$upgradeMsg);    
        // 上面的升级包取消完毕
        
        //用户中心面包屑导航
        $navigate_admin = navigate_admin();
        $this->assign('navigate_admin',$navigate_admin);
        // tpversion();     
           // 直接调用配置文件里面的函数，这个函数内容被我清理了
   }    
    
    /*
     * 初始化操作
     */
    public function _initialize() 
    {
        $this->assign('action',ACTION_NAME);
        // action_name能获取当前操作的方法的常量
        //过滤不需要登陆的行为
        if(in_array(ACTION_NAME,array('login','logout','vertify')) || in_array(CONTROLLER_NAME,array('Ueditor','Uploadify'))){
        	// 如果在数组中存在如下的方法和控制器，就不用登陆
        	//return;
        }else{
        	if(session('seller_id') > 0 ){
                define('STORE_ID',session('store_id')); //将当前的session_id保存为常量，供其它方法调用
        		$this->check_priv();//检查管理员菜单操作权限
        		// 本类中调用本类中其他方法，那么他是怎么检查权限的呢
        	}else{
        		$this->error('请先登陆',U('Admin/login'),1);
        	}
        }
        $this->public_assign();
    }
    
    /**
     * 保存公告变量到 smarty中 比如 导航 
     */
    public function public_assign()
    {
       $tpshop_config = array();
       $tp_config = M('config')->select();       
       foreach($tp_config as $k => $v)
       {
          $tpshop_config[$v['inc_type'].'_'.$v['name']] = $v['value'];
       }
       $this->assign('tpshop_config', $tpshop_config);       
    }
    
    public function check_priv()
    {	
    	$seller = session('seller');
    	// 首先获取session数组，如果数组中的值是0
    	if($seller['is_admin'] == 0){
    		$ctl = CONTROLLER_NAME;
    		$act = ACTION_NAME;
    		$act_list = $seller['act_limits'];
    		// 这个是限制列表
    		//无需验证的操作
    		$uneed_check = array('login','logout','vertifyHandle','vertify','imageUp','upload','login_task');
    		if($ctl == 'Index' || $act_list == 'all'){
    			//后台首页控制器无需验证,超级管理员无需验证
    			return true;
    		}elseif(strpos('ajax',$act) || in_array($act,$uneed_check)){
    			//所有ajax请求不需要验证权限
    			return true;
    		}else{
    			$role_right = explode(',', $act_list);
    			//检查是否拥有此操作权限
    			if(!in_array($ctl.'@'.$act, $role_right)){
    				$this->error('您没有操作权限,请联店铺超级管理员分配权限',U('Index/welcome'));
    			}
    		}
    	}
    	return true;
    }
    
}