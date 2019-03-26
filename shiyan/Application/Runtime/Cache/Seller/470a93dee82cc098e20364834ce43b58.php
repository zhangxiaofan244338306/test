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
    <div class="breadcrumbs" id="breadcrumbs">
	<ol class="breadcrumb">
	<?php if(is_array($navigate_admin)): foreach($navigate_admin as $k=>$v): if($k == '后台首页'): ?><li><a href="<?php echo ($v); ?>"><i class="fa fa-home"></i>&nbsp;&nbsp;<?php echo ($k); ?></a></li>
	    <?php else: ?>    
	        <li><a href="<?php echo ($v); ?>"><?php echo ($k); ?></a></li><?php endif; endforeach; endif; ?>          
	</ol>
</div>

		<section class="content">
		  <div class="row">
		  	<div class="col-md-12">
		  		<div class="box box-info">
		  			<div class="box-header with-border">
		  				<div class="row">
		  					<div class="col-md-10">
		  						<form action="" method="post">
		  							<div class="col-xs-5">
		  								<div class="input-group margin">
		  									<div class="input-group-addon">
		  										选择时间 <i class="fa fa-calendar"></i>
		  									</div>
		  										<input type="text" style="min-width: 182px;" class="form-control pull-right" name="timegap" value="<?php echo ($timegap); ?>" id="start_time">
		  								</div>
		  							</div>
		  						</form>
		  					</div>
		  				</div>
		  				<div class="row">
		  					<div class="col-xs-5"><input class="btn btn-block btn-info margin" type="submit" value="确定"></div>
		  				</div>
		  				</form>
		  </div>
          <div class="row">
            <!-- <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">成本利润走势</h3>
                  <div class="box-tools"></div>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    	<div id="statistics" style="height: 400px;"></div>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="col-sm-12">
            <div class="panel panel-default">
            	<div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-list"></i> 财务每天概览</h3>
                </div>
                <div class="panel-body">
	            	<table id="list-table" class="table table-bordered table-striped">
			               <thead>
			                   <tr>
			                   	   <th>时间</th>
				                   <th>订单商品总额</th>
				                   <th>订单优惠总额</th>
				                   <th>成本总额</th>			                   
				                   <th>物流总额</th>
			                  	   <th>查看</th>
			                   </tr>
			                </thead>
							<tbody>
	                         <?php if(is_array($list)): foreach($list as $k=>$vo): ?><tr role="row" align="center">
	                          	 <td><?php echo ($vo["day"]); ?></td>
	                          	 <td><?php echo ($vo["goods_amount"]); ?></td>
	                          	 <td><?php echo ($vo["coupon_amount"]); ?></td>
	                             <td><?php echo ($vo["cost_amount"]); ?></td>
			                     <td><?php echo ($vo["shipping_amount"]); ?></td>		                     
			                     <td><a href="<?php echo U('Report/saleList',array('begin'=>$vo['day'],'end'=>$vo['end']));?>">订单列表</a></td>
			                   </tr><?php endforeach; endif; ?>
			                </tbody>
			        </table>
		        </div>
		      </div>
            </div>
          </div>
        </section>
</div>
<script src="/Public/js/echart/echarts.min.js" type="text/javascript"></script>
<script src="/Public/js/echart/macarons.js"></script>
<script src="/Public/js/echart/china.js"></script>
<script src="/Public/dist/js/app.js" type="text/javascript"></script>
<script type="text/javascript">
var res = <?php echo ($result); ?>;
var myChart = echarts.init(document.getElementById('statistics'),'macarons');
option = {
	    tooltip : {
	        trigger: 'axis'
	    },
	    toolbox: {
	        show : true,
	        feature : {
	            mark : {show: true},
	            dataView : {show: true, readOnly: false},
	            magicType: {show: true, type: ['line', 'bar']},
	            restore : {show: true},
	            saveAsImage : {show: true}
	        }
	    },
	    calculable : true,
	    legend: {
	        data:['商品总额','优惠金额','商品成本','物流费用']
	    },
	    xAxis : [
	        {
	            type : 'category',
	            data : res.time
	        }
	    ],
	    yAxis : [
	        {
	            type : 'value',
	            name : '商品总额',
	            axisLabel : {
	                formatter: '{value} ￥'
	            }
	        },
	        {
	            type : 'value',
	            name : '商品成本',
	            axisLabel : {
	                formatter: '{value} ￥'
	            }
	        }
	    ],
	    series : [
	        {
	            name:'商品总额',
	            type:'bar',
	            data:res.goods_arr
	        },
	        {
	            name:'优惠金额',
	            type:'bar',
	            data:res.coupon_arr
	        },
	        {
	            name:'商品成本',
	            type:'bar',
	            data:res.cost_arr
	        },
	        {
	            name:'物流费用',
	            type:'line',
	            yAxisIndex: 1,
	            data:res.shipping_arr
	        }
	    ]
	};
	
	myChart.setOption(option);
	
	$(document).ready(function() {
		$('#start_time').daterangepicker({
			format:"YYYY-MM-DD",
			singleDatePicker: false,
			showDropdowns: true,
			minDate:'2016-01-01',
			maxDate:'2030-01-01',
			startDate:'2016-01-01',
	        showWeekNumbers: true,
	        timePicker: false,
	        timePickerIncrement: 1,
	        timePicker12Hour: true,
	        ranges: {
	           '今天': [moment(), moment()],
	           '昨天': [moment().subtract('days', 1), moment().subtract('days', 1)],
	           '最近7天': [moment().subtract('days', 6), moment()],
	           '最近30天': [moment().subtract('days', 29), moment()],
	           '上一个月': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
	        },
	        opens: 'right',
	        buttonClasses: ['btn btn-default'],
	        applyClass: 'btn-small btn-primary',
	        cancelClass: 'btn-small',
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
</script>
</body>
</html>