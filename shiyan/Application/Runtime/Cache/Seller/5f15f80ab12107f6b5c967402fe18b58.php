<?php if (!defined('THINK_PATH')) exit();?>
                    <form method="post" enctype="multipart/form-data" target="_blank" id="form-order">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:sort('order_id');">发货单流水号</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:sort('order_sn');">订单编号</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:sort('add_time');">下单时间</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:sort('consignee');">收货人</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="">发货时间</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="#">发货状态</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:sort('action_user');">操作人</a>
                                    </td>
                                    <td class="text-center">操作</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($orderList)): $i = 0; $__LIST__ = $orderList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
                                        <td class="text-center">                    <input type="checkbox" name="selected[]" value="6">
                                            <input type="hidden" name="shipping_code[]" value="flat.flat"></td>
                                        <td class="text-center"><?php echo ($list["delivery_sn"]); ?></td>
                                        <td class="text-center"><?php echo ($list["order_sn"]); ?></td>
                                        <td class="text-center"><?php echo (date('Y-m-d H:i',$list["shipping_time"])); ?></td>
                                        <td class="text-center"><?php echo ($list["consignee"]); ?></td>
                                        <td class="text-center"><?php echo (date('Y-m-d H:i',$list["add_time"])); if($list['pay_code'] == 'cod'): ?><span style="color: red">(货到付款)</span><?php endif; ?></td>
                                        <td class="text-center"><?php echo ($shipping_status[$list[shipping_status]]); ?></td>

                                        <td class="text-center"><?php echo ($list["action_user"]); ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo U('Admin/order/delivery_info',array('id'=>$list['delivery_id']));?>" data-toggle="tooltip" title="" class="btn btn-info" data-original-title="查看详情"><i class="fa fa-eye"></i></a>
                                            <a href="<?php echo U('Admin/order/delivery_del',array('id'=>$list['delivery_id']));?>" id="button-delete6" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="删除"><i class="fa fa-trash-o"></i></a></td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-sm-6 text-left"></div>
                        <div class="col-sm-6 text-right"><?php echo ($page); ?></div>
                    </div>
<script>
    $(".pagination  a").click(function(){
        var page = $(this).data('p');
        ajax_get_table('search-form2',page);
    });
</script>