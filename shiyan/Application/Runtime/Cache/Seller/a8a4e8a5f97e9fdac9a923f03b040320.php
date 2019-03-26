<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>商家管理后台</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
 	<link href="/Public/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 --
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/Public/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
    	folder instead of downloading all of them to reduce the load. -->
    <link href="/Public/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="/Public/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />   
    <!-- jQuery 2.1.4 -->
    <script src="/Public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="/Public/js/global.js"></script>
    <script src="/Public/js/myFormValidate.js"></script>    
    <script src="/Public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/Public/js/layer/layer-min.js"></script><!-- 弹窗js 参考文档 http://layer.layui.com/-->
    <script src="/Public/js/myAjax.js"></script>
    <script type="text/javascript">
    function delfunc(obj){
    	layer.confirm('确认删除？', {
    		  btn: ['确定','取消'] //按钮
    		}, function(){
    		    // 确定
   				$.ajax({
   					type : 'post',
   					url : $(obj).attr('data-url'),
   					data : {act:'del',del_id:$(obj).attr('data-id')},
   					dataType : 'json',
   					success : function(data){
   						if(data==1){
   							layer.msg('操作成功', {icon: 1});
   							$(obj).parent().parent().remove();
   						}else{
   							layer.msg(data, {icon: 2,time: 2000});
   						}
   						layer.closeAll();
   					}
   				})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);
    }
    
    function selectAll(name,obj){
    	$('input[name*='+name+']').prop('checked', $(obj).checked);
    }    
	
    function get_help(obj){
        layer.open({
            type: 2,
            title: '帮助手册',
            shadeClose: true,
            shade: 0.3,
            area: ['70%', '80%'],
            content: $(obj).attr('data-url'), 
        });
    }	
    </script>        
  </head>
  <body style="background-color:#ecf0f5;">
 


<div class="wrapper">
    <!-- <div class="breadcrumbs" id="breadcrumbs">
	<ol class="breadcrumb">
	<?php if(is_array($navigate_admin)): foreach($navigate_admin as $k=>$v): if($k == '后台首页'): ?><li><a href="<?php echo ($v); ?>"><i class="fa fa-home"></i>&nbsp;&nbsp;<?php echo ($k); ?></a></li>
	    <?php else: ?>    
	        <li><a href="<?php echo ($v); ?>"><?php echo ($k); ?></a></li><?php endif; endforeach; endif; ?>          
	</ol>
</div>
 -->
	<section class="content" style="padding-top: 0px;">
       <div class="row">
       		<div class="col-xs-12">
	       		<div class="box">
	           	<div class="box-header" style="padding: 0px;">
	               <nav class="navbar navbar-default">
	               		<!-- 添加返回按钮	      -->
	               		<div class="pull-right">
                <a href="javascript:history.go(-1)" data-toggle="tooltip" title="" class="btn btn-default" style="padding-top: 13px;" data-original-title="返回"><i class="fa fa-reply"></i>返回</a>
            </div>		
            			<!-- 添加返回结束 -->
				        <div class="collapse navbar-collapse">
				          <form class="navbar-form form-inline" action="<?php echo U('Promotion/flash_sale');?>" method="post">
                          <!--
				            <div class="form-group">
				              	<input type="text" name="keywords" class="form-control" placeholder="搜索">
				            </div>
				            <button type="submit" class="btn btn-default">提交</button>
                           --> 
				            <div class="form-group pull-right">
					            <a href="<?php echo U('Promotion/flash_sale_info');?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>添加活动</a>
				            </div>		          
				          </form>		
				      	</div>
	    			</nav>                
	             </div>	    
	             <!-- /.box-header -->
	             <div class="box-body">	             
	           		<div class="row">
<!-- 	            	<div class="col-sm-12">
		              <table id="list-table" class="table table-bordered table-striped dataTable">
		                 <thead>
		                   <tr role="row">
			                   <th class="sorting" tabindex="0">活动名称</th>
			                   <th class="sorting" tabindex="0">抢购总量</th>
			                   <th class="sorting" tabindex="0">抢购价格</th>
			                   <th class="sorting" tabindex="0">活动商品</th>
			                   <th class="sorting" tabindex="0">开始时间</th>
			                   <th class="sorting" tabindex="0">结束时间</th>
			                   <th class="sorting" tabindex="0">抢购状态</th>
			                   <th class="sorting" tabindex="0">已购买</th>
			                   <th class="sorting" tabindex="0">操作</th>
		                   </tr>
		                 </thead>
						<tbody>
						  <?php if(is_array($prom_list)): foreach($prom_list as $k=>$vo): ?><tr role="row" align="center">
		                     <td><?php echo ($vo["title"]); ?></td>
		                     <td><?php echo ($vo["goods_num"]); ?></td>
		                     <td><?php echo ($vo["price"]); ?></td>
		                     <td><?php echo ($vo["goods_name"]); ?></td>
		                     <td><?php echo (date('Y-m-d H:i',$vo["start_time"])); ?></td>
							 <td><?php echo (date('Y-m-d H:i',$vo["end_time"])); ?></td>
							 <td><?php echo ($state[$vo[status]]); ?></td>
							 <td><?php echo ($vo["buy_num"]); ?></td>
							 <td>
		                      <a class="btn btn-primary" href="<?php echo U('Promotion/flash_sale_info',array('id'=>$vo['id']));?>"><i class="fa fa-pencil"></i></a>
		                      <a class="btn btn-danger" href="javascript:void(0)" data-url="<?php echo U('Promotion/flash_sale_del');?>" data-id="<?php echo ($vo["id"]); ?>" onclick="delfunc(this)"><i class="fa fa-trash-o"></i></a>
							</td>
		                   </tr><?php endforeach; endif; ?>
		                   </tbody>
		               </table>
	               </div> -->
	               <!-- 上面试原来的表格，下面是新添加的表格 -->
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">
								<table class="table">
									<tbody>
										<tr>
											<td>
												活动id
											</td>
											<td>
												5
											</td>
											<td>
												6
											</td>
										</tr>
										<tr class="success">
											<td>
												活动名称
											</td>
											<td>
												开业庆祝
											</td>
											<td>
												国庆节庆祝
											</td>
										</tr>
										<tr class="error">
											<td>
												抢购总量
											</td>
											<td>
												20
											</td>
											<td>
												20
											</td>
										</tr>
										<tr class="warning">
											<td>
												抢购价格
											</td>
											<td>
												50元
											</td>
											<td>
												20元
											</td>
										</tr>
										<tr class="info">
											<td>
												活动商品
											</td>
											<td>
												美国进口狗粮
											</td>
											<td>
												日本进口狗粮
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
	               <!-- 新添加表格结束 -->
	          </div>
              <div class="row">
              	    <div class="col-sm-6 text-left"></div>
                    <div class="col-sm-6 text-right"><?php echo ($page); ?></div>	
                    	<!--  这里最多显示两页-->
              </div>
	          </div><!-- /.box-body -->
	        </div><!-- /.box -->
       	</div>
       </div>
   </section>
</div>
</body>
</html>