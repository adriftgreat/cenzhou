function setColumnHtml(pid, dis)
{
	var arr	=	base_column[pid];

	if(arr == undefined)
	{
		return false;
	}

	var first_html	=	'';
	var first_val	=	0;

	if(pid == 0)
	{
		if(dis == 0)
		{
			first_html	=	'   无   ';
		}
		else
		{
			first_val	=	dis;
			first_html	=	arr[dis].title;
		}

	}
	else
	{
		first_html	=	arr[0].title;
	}

	var num	=	arr.length;

	var html=	'<div class="btn-group"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-val="'+first_val+'" aria-haspopup="true" aria-expanded="false">';
		html	+=	first_html+'<span class="caret"></span></button><ul class="dropdown-menu">';

	if(pid == 0)
	{
		html	+=	'<li><a href="#" data-val="0">   无   </a></li>';
	}

	for(var i = 0; i< num; i++)
	{
		html	+=	'<li><a href="#" data-val="'+arr[i]['id']+'">'+arr[i]['title']+'</a></li>';
	}

	html	+=	'</ul></div>';

	return html;
}

$(function()
{
	if(first_p_id > 0)
	{
		var first_d_id	=	first_p_id;
		var column_arr	=	new Array();
		var i = 0;

		while(first_p_id > 0)
		{
			$.each(base_column, function(k, value)
			{
				var s=0;
				for(var y = 0; y < value.length; y++)
				{
					if(first_p_id == value[y].id)
					{
						s = 1;
						first_p_id	=	value[y].p_id;
						first_d_id	=	y;
						break;
					}
				}
			});

			column_arr[i]	=	new Array(first_p_id, first_d_id);
			i++;
		}

		for(var i = column_arr.length-1; i >= 0; i--)
		{
			$('#column_select').append(setColumnHtml(column_arr[i][0], column_arr[i][1]));
		}
	}
	else
	{
		$('#column_select').html(setColumnHtml(0, 0));
	}


	$('#column_select').on('click','a',function()
	{
		var p_id_val=	parseInt($(this).attr('data-val'));
		var set_obj	=	$(this).parents('.dropdown-menu').prev();
		set_obj.attr('data-val', p_id_val);
		set_obj.html($(this).html()+'<span class="caret"></span>');

		var column_html	=	setColumnHtml(p_id_val, 0);
		$(this).parents('.btn-group').nextAll().remove();

		if(column_html)
		{
			if(p_id_val == 0)
			{
				$('#column_select').html(column_html);
			}
			else
			{
				$('#column_select').append(column_html);
			}
		}
	});
})