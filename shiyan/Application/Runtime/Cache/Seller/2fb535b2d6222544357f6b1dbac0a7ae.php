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
    <section class="content" style="padding:0px">
        <!-- Main content -->
        <div class="container-fluid" style="padding:0px">
            <div class="pull-right">
                <a href="javascript:history.go(-1)" data-toggle="tooltip" title="" class="btn btn-default" style="padding-top: 10px;" data-original-title="返回"><i class="fa fa-reply"></i>返回</a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-list"></i> 添加物流</h3>
                </div>
                <div class="panel-body" style="padding:0px">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_tongyong" data-toggle="tab">添加物流</a></li>
                    </ul>
                    <!--表单数据-->
                    <form method="post" id="addEditshipping" enctype="multipart/form-data" >                    
                        <!--通用信息-->
                    <div class="tab-content">                 	  
                        <div class="tab-pane active" id="tab_tongyong">
                           
                            <table class="table table-bordered">
                                <tbody>                                                     
                                <tr>
                                    <td>物流编码:</td>
                                    <td>
                                        <input type="text" value="<?php echo ($shipping["code"]); ?>" id="code" name="code" class="form-control" style="width:250px;display:inherit"/>
                                        <a href="http://www.ickd.cn/api/list.html" target="_blank">参考查询编码</a>                                        
                                        一般为物流公司拼音组成,不得含有英文以外的字符
                                        <span id="err_code" style="color:#F00; display:none;">物流编码不能为空!!</span>                                        
                                    </td>
                                </tr> 
   
                                <tr>
                                    <td>物流公司名字:</td>
                                    <td>
                                        <input type="text" value="<?php echo ($shipping["name"]); ?>" id="name" name="name" class="form-control" style="width:250px; display:inherit"/>
                                        <span id="err_name" style="color:#F00; display:none;">名称不得为空</span>
                                    </td>
                                </tr> 
                                <tr>
                                    <td>简短描述:</td>
                                    <td>
                                        <input type="text" value="<?php echo ($shipping["desc"]); ?>" id="desc"  name="desc" class="form-control" style="width:250px;"/>
                                    </td>
                                </tr>    
                                <tr>
                                    <td>
                                    物流图片图标:
                                    <font color="#FF0000">必传</font>
                                    </td>
                                    <td>
                                        <input type="file" class="button" value="上传图片" accept="image/*" name="shipping_img[]" style="display:inherit"/>
                                    </td>
                                </tr>                                                             
                                
                                </tbody>
                                </table>
                        </div>                           
                    </div>              
                    <div class="pull-right">
                        <input type="hidden" name="id" value="<?php echo ($shipping["id"]); ?>">
                        <button class="btn btn-primary" title="" data-toggle="tooltip" type="button" onclick="checkSubmit()" data-original-title="保存">保存</button>
                    </div>
			    </form><!--表单数据-->
                </div>
            </div>
        </div>    <!-- /.content -->
    </section>
</div>
<script>
// 判断输入框是否为空

$("input[type='text']").focus(function(){
	  $('span[id^="err_"]').hide();
});

function checkSubmit(){
 
	var code = $.trim($("#code").val());
	var name = $.trim($("#name").val());

    (code.length == 0) && $('#err_code').show();
    (name.length == 0) && $('#err_name').show();
		
	if($('span[id^="err_"]:visible').length > 0)
		 return false;
    $('#addEditshipping').submit();		 
}
 
</script>

</body>
</html>