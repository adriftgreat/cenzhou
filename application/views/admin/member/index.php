<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-header page-header-z">
        <h3 class="pull-left">会员管理</h3>
        <h3 class="pull-right btn btn-primary" id="dis_add_seller" type="button" style="display: none;">添加会员</h3>
        <div class="clearfix"></div>
      </div>
    </div>
    <!-- /.col-lg-12 -->
    
    <div class="panel-body">
      <div class="dataTable_wrapper">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
          <thead>
            <tr>
              <th>会员编号</th>
              <th>名字</th>
              <th>手机号</th>
              <th>邮箱</th>
              <th>注册时间</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($member_list as $k => $member){?>
            <tr class="odd grade<?php $member['member_id']?>">
              <td><?php echo $member['member_id']?></td>
              <td><?php echo $member['name']?></td>
              <td><?php echo $member['phone']?></td>
              <td><?php echo $member['email']?></td>
              <td><?php echo $member['create_time']?></td>
              <td class="center"></td>
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
<div class="modal fade" id="add_template" tabindex="-1" role="dialog" aria-labelledby="add_template">
    <div class="modal-dialog" role="document">
        <div class="modal-content"></div>
    </div>
</div>
<!-- /#page-wrapper -->