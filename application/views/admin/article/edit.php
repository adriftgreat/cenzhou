<script type="text/javascript" src="/public/ue_edit/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/public/ue_edit/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue_editor = UE.getEditor('content');
    ue_editor.addListener('ready',function(){
        ue_editor.setContent('<?php echo $article['content']?>', true);
    } );
</script>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="exampleModalLabel">内容<?php echo empty($article) ? '添加' : '编辑';?></h4>
</div>
<div class="modal-body">
    <form>
        <input type="hidden" name="art_id" value="<?php echo intval($article['id']);?>"/>
        <div class="form-group">
            <label for="exampleInputEmail1">标题</label>
            <input type="text" id="title" class="form-control" placeholder="标题" value="<?php echo $article['title'];?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">排序</label>
            <input type="text" id="sort" class="form-control" placeholder="排序，数值越高越靠前，默认 0" value="<?php echo $article['sort'];?>">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">详细内容</label>
            <div id="content"></div>
        </div>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
    <input type="hidden" id="art_id" value="<?php echo $article['id'];?>"/>
    <button type="button" class="btn btn-primary" id="article_save"><?php echo $pro_id > 0 ? '保存' : '添加';?></button>
</div>