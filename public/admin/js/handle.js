$(function(){
	$('.dis_order_detail').click(function(){
		var order_id	=	$(this).attr('order_id');
		$('#order_template').modal({
			backdrop:true,
			keyboard:false,
			remote :'/action/admin/order.php?action=detail&o_id='+order_id
		})
	});

	$('.product_edit').click(function(){
		var pro_id	=	$(this).attr('pro_id');
		$('#product_template').modal({
			backdrop:true,
			keyboard:false,
			remote:'/action/admin/products.php?action=edit&p_id='+pro_id
		})
	});

	$("#product_template").on("shown.bs.modal", function() {
		$(window).resize();
	});

	$("#order_template, #product_template").on("hidden.bs.modal", function() {
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
	
	$('#product_template').on('click','#product_save',function()
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
})