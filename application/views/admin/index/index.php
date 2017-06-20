<?php $this->load->view('/element/header');?>
<style>
    td{
        line-height: 34px;
    }
</style>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header page-header-z">
                <h3 class="pull-left">导航管理</h3>
                <h3 class="pull-right"><input type="button" class="btn btn-info column_edit" col_id="0" value="添加"/></h3>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- /.col-lg-12 -->

        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>导航名称</th>
                            <th>导航banner图</th>
                            <th>添加时间</th>
                            <th>排序</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($list as $k => $column){?>
                        <tr class="odd grade<?php echo $column['id']?>">
                            <td><?php echo $column['title']?></td>
                            <td><?php if($product['thumb']){?><img style="max-width: 100px;" src="/<?php echo $product['thumb']?>"/><?php }?></td>
                            <td><?php echo $column['add_time']?></td>
                            <td><?php echo $column['sort']?></td>
                            <td><a class="text-warning">编辑</a><a class="text-danger">删除</a></td>
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