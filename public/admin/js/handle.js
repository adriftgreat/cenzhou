$(function(){
	$('.article_edit').click(function(){
		var art_id	=	$(this).attr('art_id');
		$('#edit_template').modal({
			backdrop:true,
			keyboard:false,
			remote :'/article/edit?art_id='+art_id
		})
	});

	$('.column_edit').click(function(){
		var column_id	=	$(this).attr('');
		$('#edit_template').modal({
			backdrop:true,
			keyboard:false,
			remote:'/home/edit?c_id='+column_id
		})
	});

	$("#edit_template").on("shown.bs.modal", function() {
		$(window).resize();
	});

	$("#edit_template").on("hidden.bs.modal", function() {
		$(this).removeData("bs.modal");
	});

	$('.product_delete').click(function(){

		if(confirm('你确定要删除 '+$(this).attr('pro_title')+' ?'))
		{
			var pro_id	=	parseInt($(this).attr('pro_id'));

			$.post(
				'/action/admin/products.php?action=del',
				{id:pro_id},
				function(result)
				{
					if(result.state)
					{
						$('.grade'+pro_id).fadeOut(300,function(){$('.grade'+pro_id).remove();});
					}
					else
					{
						alert(result.msg);
					}
				},
				'json'
			)
		}
	});
	
	$('#edit_template').on('click','#column_save',function()
	{
		var pro_id	=	parseInt($('#pro_id').val()),
			title	=	$('#title').val(),
			price	=	$('#price').val(),
			s_price	=	$('#s_price').val(),
			sort_id	=	$('#sort_id option:selected').val(),
			img_ids	=	$('#img_ids').val();

		$.post(
			'/action/admin/products.php?action=save',
			{
				pro_id:pro_id,
				title:title,
				price:price,
				s_price:s_price,
				sort_id:sort_id,
				img_ids:img_ids
			},
			function(result)
			{
				if(!result.state)
				{
					alert(result.msg);
				}
				else
				{
					alert(pro_id > 0 ? '编辑成功' : '添加成功');
					window.location.reload();
				}
			},
			'json'
		);

	});


    $('#edit_template').on('click','#article_save',function()
    {
        var art_id	=	parseInt($('#art_id').val()),
            title	=	$('#title').val(),
            sort	=	$('#sort').val(),
            content	=	ue_editor.getContent();

        $.post(
            '/article/save',
            {
                art_id:art_id,
                title:title,
				sort:sort,
                content:content
            },
            function(result)
            {
                if(!result.state)
                {
                    alert(result.msg);
                }
                else
                {
                    alert(art_id > 0 ? '编辑成功' : '添加成功');
                    window.location.reload();
                }
            },
            'json'
        );

    });
})