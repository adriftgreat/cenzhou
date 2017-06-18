<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header page-header-z">
                <h3 class="pull-left">商品管理</h3>
                <h3 class="pull-right"><input type="button" class="btn btn-info product_edit" pro_id="0" value="添加"/></h3>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- /.col-lg-12 -->

        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>编号</th>
                        <th>图片</th>
                        <th>名称</th>
                        <th>价格 / 销售价格</th>
                        <th>分类</th>
                        <th>添加时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($product_list as $k => $product){?>
                        <tr class="odd grade<?php echo $product['id']?>">
                            <td><?php echo $product['id']?></td>
                            <td><?php if($product['thumb']){?><img style="max-width: 100px;" src="/<?php echo $product['thumb']?>"/><?php }?></td>
                            <td><?php echo $product['title']?></td>
                            <td><?php echo $product['price']?> / <?php echo $product['sales_price']?></td>
                            <td><?php echo $sort_list[$product['sort_id']]['title'];?></td>
                            <td><?php echo $product['create_time']?></td>
                            <td><button type="button" class="btn btn-info btn-sm product_edit" pro_id="<?php echo $product['id']?>">编辑</button>   <button type="button" class="btn btn-danger btn-sm product_delete" pro_title="<?php echo $product['title'];?>" pro_id="<?php echo $product['id']?>">删除</button></td>
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
<div class="modal fade bs-example-modal-lg" id="product_template" tabindex="-1" role="dialog" aria-labelledby="product_template">
    <div class="modal-dialog modal-lg" role="document" style="min-width: 900px;">
        <div class="modal-content"></div>
    </div>
</div>
<!-- /#page-wrapper -->