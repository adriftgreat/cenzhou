<link rel="stylesheet" type="text/css" href="/public/uploader/css/webuploader.css" />
<link rel="stylesheet" type="text/css" href="/public/uploader/style.css?<?php echo time();?>" />
<script type="text/javascript" async="async">
    var first_p_id  =   <?php echo intval($column['p_id']);?>;
</script>

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="exampleModalLabel"><?php echo $column['p_id'] > 0 ? '编辑' : '添加';?>产品</h4>
</div>
<div class="modal-body">
    <form class="form-horizontal" role="form">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">名称：</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder="栏目名称" value="<?php echo $column['title'];?>" />
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">所属分类：</label>
            <div class="col-sm-10" id="column_select">
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">排序：</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="sort" placeholder="排序，数值越高越靠前，默认 0" value="<?php echo $column['sort'];?>" />
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">图片：</label>
            <div class="col-sm-10 clearfix">
                <button type="button" class="btn btn-danger" id="edit_img">添加图片</button>
                <input type="hidden" id="img_ids" />
                <div>
                    <div class="pull-left">
                        <img src="<?php echo $pro_info['thumb'] == '' ? '' : $this->img_server.$pro_info['thumb']?>"/>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="upload-wrapper">
                    <div id="container">
                        <!--头部，相册选择和格式选择-->

                        <div id="uploader">
                            <div class="queueList">
                                <div id="dndArea" class="placeholder">
                                    <div id="filePicker"></div>
                                    <p>请选择图片</p>
                                </div>
                            </div>
                            <div class="statusBar" style="display:none;">
                                <div class="upload-progress">
                                    <span class="text"></span>
                                    <span class="percentage"></span>
                                </div><div class="info"></div>
                                <div class="btns">
                                    <div id="filePicker2"></div><div class="uploadBtn">开始上传</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <input type="hidden" id="column_id" value="<?php echo $pro_id;s?>"/>
    <button type="button" class="btn btn-primary" id="column_save"><?php echo $pro_id > 0 ? '保存' : '添加';?></button>
</div>

<script type="text/javascript" async="async" src="/public/uploader/webuploader.min.js"></script>
<script type="text/javascript" async="async" src="/public/uploader/upload.js?<?php echo time();?>"></script>
<script type="text/javascript" async="async" src="/public/admin/js/column.js?<?php echo time();?>"></script>
<script type="text/javascript" async="async">
    $(function(){
        $('#edit_img').click(function()
        {
            $('#upload-wrapper').fadeIn(function(){$(window).resize();});
        });
    })
</script>