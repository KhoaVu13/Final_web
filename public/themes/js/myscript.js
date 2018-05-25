$(document).ready(function()
{
	$(".Update").bind('input',function()
		{
			var rowid=$(this).attr('id');
			var qty=$(this).parent().parent().find(".qty").val();
			var token = $("input[name='_token']").val();
			$.ajax({
				url: 'cap_nhat_san_pham/'+rowid+'/'+qty,
				type: 'GET',
				cache:false,
				data:{"_token":token,"id":rowid,"qty":qty},
				success:function(data)
				{	
					if(data == "ok")
					{
						window.location="gio_hang";
					}
				}
			});
		});
	
})