<link rel="stylesheet" type="text/css" href="/public/uploader/css/webuploader.css" />
<link rel="stylesheet" type="text/css" href="/public/uploader/style.css?<?php echo time();?>" />

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="exampleModalLabel">会员编辑</h4>
</div>
<div class="modal-body">
    <form class="form-horizontal" role="form">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">姓名：</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="title" value="<?php echo $member['name'];?>" />
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">手机号码：</label>
            <div class="col-sm-10">
                <input type="float" class="form-control" id="phone" placeholder="price" value="<?php echo $member['phone'];?> />
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">电子邮箱：</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="email" placeholder="sales price" value="<?php echo $member['email'];?>" />
            </div>
        </div>
    </form>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <input type="hidden" id="m_id" value="<?php echo $member['member_id'];?>"/>
    <button type="button" class="btn btn-primary" id="product_save"><?php echo $pro_id > 0 ? 'Save changes' : 'Add Products';?></button>
</div>

<script type="text/javascript" async="async">
    $(function(){
        $('#product_save').click(function()
        {
            $.post(function(){
                '/admin/member?action=save',
                {name:$('#name').val(), phone:$('#phone').val(), email:$('#email').val()},
                function(result){
                    
                },
                'json'
            });
        });
    })
</script>