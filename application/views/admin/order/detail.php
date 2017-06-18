<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="exampleModalLabel">订单详情</h4>
</div>
<style>
    .order-detail-table td{
        line-height: 30px;
        width: 23%;
    }
    .first-tr td{
        border-top: none !important;
    }
    .order-title{
        width: 10% !important;
        min-width: 90px;
    }
</style>
<div class="modal-body">
    <table class="table table-hover order-detail-table">
        <tr class="first-tr">
            <td class="order-title text-right">订单编号：</td>
            <td class="text-left"><?php echo $order_no;?></td>
            <td class="order-title text-right">订单金额：</td>
            <td class="text-left"><?php echo $money;?>（运费：<?php echo $freight;?>）</td>
            <td class="order-title text-right">订单状态：</td>
            <td class="text-left"><?php echo $order_status;?></td>
        </tr>
        <tr>
            <td class="order-title text-right">联系名称：</td>
            <td class="text-left"><?php echo $member_name;?></td>
            <td class="order-title text-right">联系电话：</td>
            <td class="text-left"><?php echo $member_phone;?></td>
            <td class="order-title text-right">联系邮箱：</td>
            <td class="text-left"><?php echo $member_email;?></td>
        </tr>
        <?php if($delivery_sta == 2){?>
        <tr>
            <td class="order-title text-right">送货地址：</td>
            <td class="text-left" colspan="5"><?php echo $area.'    '.$street.'     '.$address;?></td>
        </tr>
        <?php
        }
        else
        {
        ?>
        <tr>
            <td class="order-title text-right">配送方式：</td>
            <td class="text-left">自取</td>
            <td class="order-title text-right">取货时间：</td>
            <td class="text-left"><?php echo $update_time;?></td>
            <td class="order-title text-right"></td>
            <td class="text-left"></td>
        </tr>
        <?php
        }
        ?>
        <tr></tr>
    </table>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
</div>