<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING'  =>array(
		//                '__PUBLIC__' => '/Common', // 更改默认的/Public 替换规则
					'__STATIC__'     => '/Application/Seller/View/Static', // 增加新的image  css js  访问路径  后面给 php 改了\
					// 这个路径到时候改，太容易让别人猜出来路径了
					
			   ),
	// 不加跳转页面，不好看
	 'TMPL_ACTION_ERROR' => 'Public:dispatch_jump',
    //默认成功跳转对应的模板文件
    'TMPL_ACTION_SUCCESS' => 'Public:dispatch_jump',
);