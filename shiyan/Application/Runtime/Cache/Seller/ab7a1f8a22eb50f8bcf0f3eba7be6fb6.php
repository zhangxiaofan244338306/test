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
    <!-- <script src="/Public/plugins/jQuery/jQuery-2.1.4.min.js"></script> -->
	<script src="/Public/js/jquery-1.10.2.min.js"></script>
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
 

<!-- 这个页面是按照优惠劵列表修改的 -->
<div class="wrapper">
	<!-- <div class="breadcrumbs" id="breadcrumbs">
	<ol class="breadcrumb">
	<?php if(is_array($navigate_admin)): foreach($navigate_admin as $k=>$v): if($k == '后台首页'): ?><li><a href="<?php echo ($v); ?>"><i class="fa fa-home"></i>&nbsp;&nbsp;<?php echo ($k); ?></a></li>
	    <?php else: ?>    
	        <li><a href="<?php echo ($v); ?>"><?php echo ($k); ?></a></li><?php endif; endforeach; endif; ?>          
	</ol>
</div>
 -->
	<section class="content" style="padding: 0px;">
		<div class="row" style="padding: 0px;">
			<div class="col-xs-12">
				<div class="panel panel-default">
					<!-- 添加返回按钮       -->
					<div class="pull-right">
						<a href="javascript:history.go(-1)" data-toggle="tooltip" title="" class="btn btn-default" style="padding-top: 10px;"
						 data-original-title="返回"><i class="fa fa-reply"></i>返回</a>
					</div>
					<!-- 添加返回结束 -->
					<div class="panel-heading">
						<h3 class="panel-title">账号管理</h3>
					</div>
					<div class="panel-body" style="padding-bottom: 0px">
						<!-- <nav class="navbar navbar-default">
							<div class="collapse navbar-collapse">
								<form class="navbar-form form-inline" action="<?php echo U('Admin/index');?>" method="post">
									<div class="form-group">
										<input type="text" name="keywords" class="form-control" placeholder="搜索">
									</div>
									<button type="submit" class="btn btn-default">提交</button> -->
									<div class="form-group pull-right">
									    <a href="<?php echo U('Admin/admin_info');?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>添加管理员</a>
									</div>	
								</form>
					</div>
					<div id="ajax_return">
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
										<td class="text-center">ID</td>
										<td class="text-center">账号名</td>
										<td class="text-center">所属角色</td>
										<td class="text-center">加入时间</td>
										<!-- <td class="text-center">发放总量</td> -->
										<td class="text-center">状态</td>
										<!-- <td class="text-center">已使用</td>
                                    <td class="text-center">使用截止日期</td> -->
										<td class="text-center">操作</td>
									</tr>
								</thead>
								<tbody>
									<!-- <volist name="lists" id="list"> -->
									<?php if(is_array($list)): foreach($list as $k=>$vo): ?><tr>
											<td class="text-center">
												<input type="checkbox" name="selected[]" value="6">
											</td>
											<td class="text-center"><?php echo ($vo["seller_id"]); ?></td>
											<td class="text-center"><?php echo ($vo["seller_name"]); ?></td>
											<td class="text-center"><?php echo ($vo["role"]); ?></td>
											<td class="text-center"><?php echo ($vo["add_time"]); ?></td>
											<td class="text-center"><?php echo ($vo["enabled"]); ?></td>
											<!-- <td class="text-center"><?php echo ($list["send_num"]); ?></td>
                                        <td class="text-center"><?php echo ($list["use_num"]); ?></td>
                                        <td class="text-center"><?php echo (date('Y-m-d',$list["use_end_time"])); ?></td> -->
											<td class="text-center">
												<a class="btn btn-primary" href="<?php echo U('Admin/admin_info',array('seller_id'=>$vo['seller_id']));?>"><i class="fa fa-pencil"></i></a>
												<?php if($vo['admin_id'] > 1): ?><a class="btn btn-danger" href="javascript:void(0)" data-url="<?php echo U('Admin/adminHandle');?>" data-id="<?php echo ($vo["admin_id"]); ?>" onclick="delfun(this)"><i
													 class="fa fa-trash-o"></i></a><?php endif; ?>
											</td>
										</tr><?php endforeach; endif; ?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 text-left"></div>
						<div class="col-sm-6 text-right"><?php echo ($page); ?></div>
					</div>
				</div>
			</div>
		</div>
</div> <!-- /.row -->
</section>
<!-- /.content -->
</div>

</body>
</html>