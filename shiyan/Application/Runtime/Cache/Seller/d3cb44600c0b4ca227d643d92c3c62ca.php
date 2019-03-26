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
 

<link href="/Public/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
<script src="/Public/plugins/daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="/Public/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<div class="wrapper">
    <!-- <div class="breadcrumbs" id="breadcrumbs">
	<ol class="breadcrumb">
	<?php if(is_array($navigate_admin)): foreach($navigate_admin as $k=>$v): if($k == '后台首页'): ?><li><a href="<?php echo ($v); ?>"><i class="fa fa-home"></i>&nbsp;&nbsp;<?php echo ($k); ?></a></li>
	    <?php else: ?>    
	        <li><a href="<?php echo ($v); ?>"><?php echo ($k); ?></a></li><?php endif; endforeach; endif; ?>          
	</ol>
</div>
 -->
    <section class="content " style="padding-top: 0px;">
        <!-- Main content -->
        <div class="container-fluid" style="padding-right: 0px; padding-left: 0px; ">
            <div class="pull-right">
                <a href="javascript:history.go(-1)" data-toggle="tooltip" title="" class="btn btn-default" style="padding-top: 10px;" data-original-title="返回"><i class="fa fa-reply"></i>返回</a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">添加团购活动</h3>
                </div>
                <div class="panel-body ">   
                    <!--表单数据-->
                    <form method="post" id="handleposition" action="<?php echo U('Promotion/groupbuyHandle');?>">                    
                        <!--通用信息-->
                    <div class="tab-content col-md-10">                 	  
                        <div class="tab-pane active" id="tab_tongyong">                           
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <td class="col-sm-5">团购标题：</td>
                                    <td class="col-sm-7">
                                        <input type="text" class="form-control" name="title" id="title" value="<?php echo ($info["title"]); ?>" >
                                        <span id="err_attr_name" style="color:#F00; display:none;"></span>                                        
                                    </td>
                                    <!-- <td class="col-sm-4">请填写团购标题</td> -->
                                </tr>
                                <tr>
                                    <td class="col-sm-5">开始时间：</td>
                                    <td class="col-sm-7">
                               			<input type="text" class="form-control" id="start_time" name="start_time" value="<?php echo ($info["start_time"]); ?>">
                                    </td>
                                    <!-- <td class="col-sm-4">团购开始时间</td> -->
                                </tr>                                
                                <tr>
                                    <td class="col-sm-5">结束时间：</td>
                                    <td class="col-sm-7" >
                      					<input type="text" class="form-control" id="end_time" name="end_time" value="<?php echo ($info["end_time"]); ?>">   
                                    </td>
                                    <!-- <td class="col-sm-4">团购结束时间</td> -->
                                </tr>
                                  
                                <tr>
                                    <td class="col-sm-5">设置团购商品：</td>
                                    <td class="col-sm-7">
                                    	<!-- <div class="col-xs-9"> -->
                             			<input type="text" id="goods_name" name="goods_name" placeholder="请先点选择商品按钮" class="form-control" value="<?php echo ($info["goods_name"]); ?>">
                             			<!-- </div> -->
                             			<!-- <div class="col-xs-3"> -->
                             			<input type="hidden" id="goods_id" name="goods_id" value="<?php echo ($info["goods_id"]); ?>">
                             			<input class="btn btn-primary" type="button" onclick="selectGoods()" value="选择商品">
                             			<!-- </div> -->
                                    </td>
                                    <!-- <td class="col-sm-4">请选择加入团购的商品</td> -->
                                </tr>
                                <tr>
                                    <td class="col-sm-5">团购价格：</td>
                                    <td class="col-sm-7">
                                    	<!-- <div class="col-xs-4"> -->
	                      					<input type="text" class="form-control" id="price" name="price" value="<?php echo ($info["price"]); ?>"  onpaste="this.value=this.value.replace(/[^\d.]/g,'')" onkeyup="this.value=this.value.replace(/[^\d.]/g,'')"/>
	                      					<input type="hidden" id="goods_price" name="goods_price" value="<?php echo ($info["goods_price"]); ?>">
                      					<!-- </div> -->
                      					<span id="price_html"></span>
                                    </td>
                                    <!-- <td class="col-sm-4">商品团购价格</td> -->
                                </tr>
                                <tr>
                                    <td class="col-sm-5">参团数量：</td>
                                    <td class="col-sm-7">
                      					<input type="text" class="form-control" id="goods_num" name="goods_num" value="<?php echo ($info["goods_num"]); ?>"  onpaste="this.value=this.value.replace(/[^\d]/g,'')" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" />
                                    </td>
                                    <!-- <td class="col-sm-4">请填写自然数，参与团购的商品数量</td> -->
                                </tr> 
                                <tr>
                                    <td class="col-sm-5">虚拟人数：</td>
                                    <td class="col-sm-7">
                      					<input type="text" class="form-control" name="virtual_num" value="<?php echo ($info["virtual_num"]); ?>"  onpaste="this.value=this.value.replace(/[^\d]/g,'')" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"/>
                                    </td>
                                    <!-- <td class="col-sm-4">虚拟已购买参团人数</td> -->
                                </tr>
                                <tr>
                                    <td class="col-sm-5">团购介绍：</td>
                                    <td class="col-sm-7">
                                    	<textarea class="form-control" rows="4" placeholder="请输入团购介绍" name="intro"><?php echo ($info["intro"]); ?></textarea>
                                    </td>
                                    <!-- <td class="col-sm-4">团购描述介绍</td> -->
                                </tr>                                
                                </tbody> 
                                <tfoot>
                                	<tr>
                                	<td class="col-sm-5"><input class="btn btn-default" type="reset" value="重置">
                                		<input type="hidden" name="act" value="<?php echo ($act); ?>">
                                		<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
                                	</td>
                                	<!-- <td class="col-sm-4"></td> -->
                                	<td class="text-right class="col-sm-7""><input class="btn btn-primary" type="button" onclick="adsubmit()" value="保存"></td></tr>
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
	if($('#title').val() ==''){
		layer.msg('团购标题不能为空');return;
	}
	if($('#price').val() ==''){
		layer.msg('团购价格不能为空');return;
	}
	if($('#group_num').val() ==''){
		layer.msg('限购数量不能为空');return;
	}
	$('#handleposition').submit();
}

$(document).ready(function() {
	$('#start_time').daterangepicker({
		format:"YYYY-MM-DD HH:mm:ss",
		singleDatePicker: true,
		showDropdowns: true,
		minDate:'<?php echo ($min_date); ?>',
		maxDate:'2030-01-01',
		startDate:'<?php echo ($min_date); ?>',
		timePicker : true, //是否显示小时和分钟  
                timePickerIncrement:1,//time选择递增数
		timePicker12Hour : false, //是否使用12小时制来显示时间 		
                
	    locale : {
            applyLabel : '确定',
            cancelLabel : '取消',
            fromLabel : '起始时间',
            toLabel : '结束时间',
            customRangeLabel : '自定义',
            daysOfWeek : [ '日', '一', '二', '三', '四', '五', '六' ],
            monthNames : [ '一月', '二月', '三月', '四月', '五月', '六月','七月', '八月', '九月', '十月', '十一月', '十二月' ],
            firstDay : 1
        }
	});
	
	$('#end_time').daterangepicker({
		format:"YYYY-MM-DD HH:mm:ss",
		singleDatePicker: true,
		showDropdowns: true,
		minDate:'<?php echo ($min_date); ?>',
		maxDate:'2030-01-01',
		startDate:'<?php echo ($min_date); ?>',
		timePicker : true, //是否显示小时和分钟  
                timePickerIncrement:1,//time选择递增数
		timePicker12Hour : false, //是否使用12小时制来显示时间 		
                
	    locale : {
            applyLabel : '确定',
            cancelLabel : '取消',
            fromLabel : '起始时间',
            toLabel : '结束时间',
            customRangeLabel : '自定义',
            daysOfWeek : [ '日', '一', '二', '三', '四', '五', '六' ],
            monthNames : [ '一月', '二月', '三月', '四月', '五月', '六月','七月', '八月', '九月', '十月', '十一月', '十二月' ],
            firstDay : 1
        }
	});

});

function selectGoods(){
    var url = "<?php echo U('Promotion/search_goods',array('tpl'=>'select_goods'));?>";
    layer.open({
        type: 2,
        title: '选择商品',
        shadeClose: true,
        shade: 0.2,
        area: ['75%', '75%'],
        content: url, 
    });
}

function call_back(goods_id,goods_name,store_count){
	$('#goods_id').val(goods_id);
	$('#goods_name').val(goods_name);
	$('#group_num').val(store_count);
	layer.closeAll('iframe');
}
</script>
</body>
</html>