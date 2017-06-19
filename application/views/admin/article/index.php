<?php $this->load->view('/element/header');?>
<style>
    td{
        line-height: 34px !important;
    }
</style>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-header page-header-z">
        <h3 class="pull-left">内容管理</h3>
        <h3 class="pull-right"><input type="button" class="btn btn-info article_edit" art_id="0" value="添加"/></h3>
        <div class="clearfix"></div>
      </div>
    </div>
    <!-- /.col-lg-12 -->
    
    <div class="panel-body">
      <div class="dataTable_wrapper">
          <table class="table">
              <thead>
              <tr>
                  <th>ID</th>
                  <th>标题</th>
                  <th>添加时间</th>
                  <th>修改时间</th>
                  <th>操作</th>
              </tr>
              </thead>
              <tbody>
              <?php foreach($list as $key => $value){?>
              <tr>
                  <th scope="row"><?php echo $value['id']?></th>
                  <td><a href="#"><?php echo $value['title']?></a></td>
                  <td><?php echo $value['add_time']?></td>
                  <td><?php echo $value['edit_time']?></td>
                  <td><a art_id="<?php echo $value['id']?>" class="btn btn-primary btn-sm article_edit">修改</a> <a class="btn btn-danger btn-sm">删除</a></td>
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
<div class="modal fade bs-example-modal-lg" id="edit_template" tabindex="-1" role="dialog" aria-labelledby="edit_template">
    <div class="modal-dialog modal-lg" role="document" style="min-width: 900px;">
        <div class="modal-content"></div>
    </div>
</div>
<!-- /#page-wrapper -->
<?php $this->load->view('/element/footer');?>