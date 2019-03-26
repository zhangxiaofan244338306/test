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
 

<div class="wrapper">
    <!-- <div class="breadcrumbs" id="breadcrumbs">
	<ol class="breadcrumb">
	<?php if(is_array($navigate_admin)): foreach($navigate_admin as $k=>$v): if($k == '后台首页'): ?><li><a href="<?php echo ($v); ?>"><i class="fa fa-home"></i>&nbsp;&nbsp;<?php echo ($k); ?></a></li>
	    <?php else: ?>    
	        <li><a href="<?php echo ($v); ?>"><?php echo ($k); ?></a></li><?php endif; endforeach; endif; ?>          
	</ol>
</div>
 -->
    <section class="content " style="padding: 0px;">
        <!-- Main content -->
        <div class="container-fluid" style="padding: 0px;">
            <div class="pull-right">
                <a href="javascript:history.go(-1)" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="返回管理员列表"><i class="fa fa-reply"></i></a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-list"></i> 编辑管理员</h3>
                </div>
                <div class="panel-body ">   
                    <!--表单数据-->
                    <form method="post" id="adminHandle" action="<?php echo U('Seller/Admin/adminHandle');?>">                    
                        <!--通用信息-->
                    <div class="tab-content col-md-10">                 	  
                        <div class="tab-pane active" id="tab_tongyong">                           
                            <table class="table table-bordered">
                                <tbody>
                                <?php if(empty($info)): ?><tr>
                                    <td class="col-sm-2">前台用户名：</td>
                                    <td class="col-sm-8">
                                        <input type="text" class="form-control" name="user_name" value="<?php echo ($info["user_name"]); ?>" > 
                                        <p class="text-warning">请先在前台注册会员账号，这里为前台会员名称</p>                        
                                    </td>
                                </tr>   
                                <tr>
                                    <td>用户密码：</td>
                                    <td>
                               			<input type="password" class="form-control" name="password" value="<?php echo ($info["password"]); ?>" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>登陆账号：</td>
                                    <td><?php if($info[seller_id] > 0): echo ($info["seller_name"]); ?>
                                    	<?php else: ?><input type="text" class="form-control" name="seller_name"><?php endif; ?>
                                    	<p class="text-warning">此账号为商家管理后台登录账号</p>   
                                    </td>
                                </tr>
                                <tr>
                                    <td>是否激活：</td>
                                    <td>
                               			<input type="radio" name="enabled" value="0" <?php if($info[enabled] == 0): ?>checked<?php endif; ?>> 启用
                               			<input type="radio" name="enabled" value="1" <?php if($info[enabled] == 1): ?>checked<?php endif; ?>> 停用
                                    </td>
                                </tr>
                                <tr>
                                    <td>所属角色：</td>
                                    <td>
                             			<select name="group_id">
	                               			<?php if(is_array($role)): $i = 0; $__LIST__ = $role;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><option value="<?php echo ($item["group_id"]); ?>" <?php if($item[group_id] == $info[group_id]): ?>selected="selected"<?php endif; ?> ><?php echo ($item["group_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>                  
                         				</select>    
                                    </td>
                                </tr> 
                                <?php else: ?>
                                <tr>
                                    <td>原密码：</td>
                                    <td>
                               			<input type="password" class="form-control" name="password">
                               			<p class="text-warning">若忘记原密码请去前台会员中心通过邮箱或手机验证找回密码</p>  
                                    </td>
                                </tr>
                                <tr>
                                    <td>新密码：</td>
                                    <td>
                               			<input type="password" class="form-control" name="password2">
                                    </td>
                                </tr><?php endif; ?>                         
                                </tbody> 
                                <tfoot>
                                	<tr>
                                	<td>
                                		<input type="hidden" name="seller_id" value="<?php echo ($info["seller_id"]); ?>">
                                	</td>
                                	<td class="text-right"><input class="btn btn-primary" type="button" onclick="adsubmit()" value="保存"></td></tr>
                                </tfoot>                               
                                </table>
                        </div>                           
                    </div>              
			    	</form><!--表单数据-->
                </div>
            </div>
        </div>
    </section>
</div>
<script>
function adsubmit(){
	if($('input[name=user_name]').val() == ''){
		layer.msg('用户名不能为空！', {icon: 2,time: 1000});   //alert('少年，用户名不能为空！');
		return false;
	}
	if($('input[name=email]').val() == ''){
		layer.msg('邮箱不能为空！', {icon: 2,time: 1000});//alert('少年，邮箱不能为空！');
		return false;
	}
	if($('input[name=password]').val() == ''){
		layer.msg('原密码不能为空！', {icon: 2,time: 1000});//alert('少年，密码不能为空！');
		return false;
	}
	
	if($('input[name=password2]').val() == ''){
		layer.msg('新密码不能为空！', {icon: 2,time: 1000});//alert('少年，密码不能为空！');
		return false;
	}
	$('#adminHandle').submit();
}
</script>
</body>
</html>