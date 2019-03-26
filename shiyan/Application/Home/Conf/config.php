<?php
return array( 
	'TMPL_PARSE_STRING'  =>array(
		//                '__PUBLIC__' => '/Common', // 更改默认的/Public 替换规则
					'__STATIC__'     => '/Application/Home/View/Static', // 增加新的image  css js  访问路径  后面给 php 改了\
					// 这个路径到时候改，太容易让别人猜出来路径了
			   ),
	// 'HTML_CACHE_RULES'  =>     array(  // 定义静态缓存规则
 //         // 定义格式1 数组方式
 //         //'静态地址'    =>     array('静态规则', '有效期', '附加规则'), 
 //        'index:index'=>array('{:module}_{:controller}_{:action}',PLM_CACHE_TIME),  // 首页静态缓存 3秒钟       
 //        //'index:goodsList'=>array('{:module}_{:controller}_{:action}',300),  // 列表页静态缓存 3秒钟 无参数 post 提交的很难缓存
 //        //'Goods:goodsList'=>array('{:module}_{:controller}_{:action}_{id}',TPSHOP_CACHE_TIME),  // 列表页静态缓存 3秒钟
 //        //ajax 请求的商品列表内容在 ajaxGoodsList 函数中  S($keys,$html,300); 缓存
 //        'Goods:goodsInfo'=>array('{:module}_{:controller}_{:action}_{id}',PLM_CACHE_TIME),  // 商品详情页静态缓存 3秒钟                
 //        'Goods:ajaxComment'=>array('{:module}_{:controller}_{:action}_{goods_id}_{commentType}_{p}',PLM_CACHE_TIME),  // 商品评论页静态缓存 3秒钟        
 //        'Goods:ajax_consult'=>array('{:module}_{:controller}_{:action}_{goods_id}_{consult_type}_{p}',PLM_CACHE_TIME),  // 商品咨询页静态缓存 3秒钟                
 //        // 商品详情的规格价格缓存在 ajaxGoodsPrice 函数里面 S($keys,$price,300);// 缓存数据300秒  
 //    	'channel:index'=>array('{:module}_{:controller}_{:action}_{id}',PLM_CACHE_TIME),  // 列表页静态缓存 3秒钟
 //    ), 
);