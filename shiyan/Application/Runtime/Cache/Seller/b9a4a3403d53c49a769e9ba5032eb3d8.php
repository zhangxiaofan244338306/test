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
<script src="/Public/js/echart/echarts.min.js" type="text/javascript"></script>
<script src="/Public/js/echart/macarons.js"></script>
<script src="/Public/js/echart/china.js"></script>
<script src="/Public/dist/js/app.js" type="text/javascript"></script>
<div class="wrapper">
	
	<section style="  padding: 0px;" class="content">
		<div class="row">
			<div class="col-xs-12">
			<div class="pull-right">
			                    <a href="javascript:history.go(-1)" data-toggle="tooltip" title="" class="btn btn-default" style="padding-top: 10px;" data-original-title="返回"><i class="fa fa-reply"></i>返回</a>
			                    </div>
								<div class="panel-heading">
			                <h3 class="panel-title">成本利潤走勢</h3>
			            </div>
						</div>
						</div>
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
											<input type="text" style="min-width: 182px;" class="form-control pull-right" name="timegap" value="<?php echo ($timegap); ?>"
											 id="start_time">
										</div>
									</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-5"><input class="btn btn-block btn-info margin" type="submit" value="确定"></div>
						</div>
						</form>
					</div>
					<div id="ajax_return">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
                                    <td class="text-center">团购标题</td>
                                    <td class="text-center">团购价</td>
                                    <td class="text-center">开始时间</td>
                                    <td class="text-center">结束时间</td>
                                    <td class="text-center">已参团</td>
                                    <td class="text-center">参团库存</td>
                                    <td class="text-center">折扣</td>
									<td class="text-center">状态</td>
                                    <td class="text-center">操作</td>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- <volist name="lists" id="list"> -->
                                                                </tbody>
                            </table>
                        </div>
                    </div>
					
					  	<div class="col-sm-12">
					        <table id="list-table" class="table table-bordered table-striped dataTable">
					           <thead>
					             <tr role="row" align="center">
					                 <th align="center">团购标题</th>
					                 <th class="sorting" tabindex="0">团购价</th>
					                 <th class="sorting" tabindex="0">开始时间</th>
					                 <th class="sorting" tabindex="0">结束时间</th>
					                 <th class="sorting" tabindex="0">已参团</th>
					                 <th class="sorting" tabindex="0">参团库存</th>
					                 <th class="sorting" tabindex="0">折扣</th>
					                 <th class="sorting" tabindex="0">状态</th>
					                 <th>推荐</th>
					                 <th class="sorting" tabindex="0">操作</th>
					             </tr>
					           </thead>
											<tbody>
											  <?php if(is_array($list)): foreach($list as $k=>$vo): ?><tr role="row" align="center">
					               <td align="center"><?php echo (getSubstr($vo["title"],0,30)); ?></td>
					               <td><?php echo ($vo["price"]); ?></td>
					               <td><?php echo ($vo["start_time"]); ?></td>
					               <td><?php echo ($vo["end_time"]); ?></td>
					               <td><?php echo ($vo["buy_num"]); ?></td>
												 <td><?php echo ($vo["goods_num"]); ?></td>
												 <td><?php echo ($vo["rebate"]); ?></td>
												 <td><?php echo ($state[$vo[status]]); ?></td>
												 <th><img width="20" height="20" src="/Public/images/<?php if($vo[recommend] == 1): ?>yes.png<?php else: ?>cancel.png<?php endif; ?>" onclick="changeTableVal('group_buy','id','<?php echo ($vo["id"]); ?>','recommend',this)"/></th>
												 <td>
												 	<?php if($vo['status'] == 0): ?><a href="javascript:;" class="btn btn-success" onclick="changeStatus(1,'<?php echo ($vo["id"]); ?>','group_buy')">通过</a>
					                		<a href="javascript:;" class="btn btn-warning" onclick="changeStatus(2,'<?php echo ($vo["id"]); ?>','group_buy')">拒绝</a><?php endif; ?>
					                	<?php if($vo['status'] == 1): ?><a class="btn btn-warning" href="javascript:;" onclick="changeStatus(3,'<?php echo ($vo["id"]); ?>','group_buy')">取消</a><?php endif; ?>
					                  <a class="btn btn-danger" href="javascript:void(0)" data-url="<?php echo U('Promotion/groupbuyHandle');?>" data-id="<?php echo ($vo["id"]); ?>" onclick="delfunc(this)"><i class="fa fa-trash-o"></i></a>
												</td>
					             </tr><?php endforeach; endif; ?>
					             </tbody>
					           <tfoot>
					           
					           </tfoot>
					         </table>
					     </div>
					</div>
							<!-- <div class="box box-primary">
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
							</div> -->
	</section>
</div>
<script type="text/javascript">
	var res = {
		$result
	};
	var myChart = echarts.init(document.getElementById('statistics'), 'macarons');
	option = {
		tooltip: {
			trigger: 'axis'
		},
		toolbox: {
			show: true,
			feature: {
				mark: {
					show: true
				},
				dataView: {
					show: true,
					readOnly: false
				},
				magicType: {
					show: true,
					type: ['line', 'bar']
				},
				restore: {
					show: true
				},
				saveAsImage: {
					show: true
				}
			}
		},
		calculable: true,
		legend: {
			data: ['商品总额', '优惠金额', '商品成本', '物流费用']

		},
		xAxis: [{
			type: 'category',
			data: res.time
		}],
		yAxis: [{
				type: 'value',
				name: '商品总额',
				axisLabel: {
					formatter: '{value} ￥'
				}
			},
			{
				type: 'value',
				name: '商品成本',
				axisLabel: {
					formatter: '{value} ￥'
				}
			}
		],
		series: [{
				name: '商品总额',
				type: 'bar',
				data: res.goods_arr
			},
			{
				name: '优惠金额',
				type: 'bar',
				data: res.coupon_arr
			},
			{
				name: '商品成本',
				type: 'bar',
				data: res.cost_arr
			},
			{
				name: '物流费用',
				type: 'line',
				yAxisIndex: 1,
				data: res.shipping_arr
			}
		]
	};

	myChart.setOption(option);

	$(document).ready(function() {
		$('#start_time').daterangepicker({
			format: "YYYY-MM-DD",
			singleDatePicker: false,
			showDropdowns: true,
			minDate: '2016-01-01',
			maxDate: '2030-01-01',
			startDate: '2016-01-01',
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
			locale: {
				applyLabel: '确定',
				cancelLabel: '取消',
				fromLabel: '起始时间',
				toLabel: '结束时间',
				customRangeLabel: '自定义',
				daysOfWeek: ['日', '一', '二', '三', '四', '五', '六'],
				monthNames: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
				firstDay: 1
			}
		});

	});
</script>
</body>
</html>