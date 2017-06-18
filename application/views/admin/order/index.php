<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-header page-header-z">
        <h3 class="pull-left">订单管理</h3>
        <div class="clearfix"></div>
      </div>
    </div>
    <!-- /.col-lg-12 -->
    
    <div class="panel-body">
      <div class="dataTable_wrapper">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
          <thead>
            <tr>
              <th>订单编号</th>
              <th>订单金额</th>
              <th>会员id</th>
              <th>联系人</th>
              <th>联系电话</th>
              <th>联系邮箱</th>
              <th>配送信息</th>
              <th>订单状态</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($order_list as $k => $order){?>
            <tr class="odd gradeX">
              <td><?php echo $order['order_no']?></td>
              <td><?php echo $order['money']?>（运费 <?php echo $order['freight']?>）</td>
              <td><?php echo $order['member_id'] == 0 ? '游客' : $order['member_id']?></td>
              <td><?php echo $order['member_name']?></td>
              <td><?php echo $order['member_phone']?></td>
              <td><?php echo $order['member_email']?></td>
              <td><?php echo $order['delivery_sta'] == 1 ? '自取' : '送货上门'?></td>
                <td><?php echo $order['order_status']?></td>
              <td><button type="button" class="btn btn-info btn-sm dis_order_detail" order_id="<?php echo $order['id']?>">详细信息</button></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
      <!-- /.table-responsive -->
      
      <div>
        <ul class="pagination">
          <?php
            foreach($page_info as $page)
            {
                if(is_array($page))
                {
                    echo '<li><a href="?page_current='.$page['k'].'">'.$page['v'].'</a></li>';
                }
                else
                {
                    echo '<li><a href="?page_current='.$page.'">'.$page.'</a></li>';
                }
            }
            ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bs-example-modal-lg" id="order_template" tabindex="-1" role="dialog" aria-labelledby="order_template">
    <div class="modal-dialog modal-lg" role="document" style="min-width: 900px;">
        <div class="modal-content"></div>
    </div>
</div>
<!-- /#page-wrapper -->