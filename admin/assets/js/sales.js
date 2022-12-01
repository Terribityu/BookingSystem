$(document).ready(function(){
    
    load_sales();

    function load_sales(query){
        $.ajax({
			url:"database/sales/search.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{   
				$('#viewSales tbody').html(data);
                $('#mytable').paging({limit:20});
			}
		});
    }

    $('#search_sales').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_sales(search);
		}
		else
		{
			load_sales();			
		}
	});

    $(document).on('click','#delete',function(){
		var id = $(this).attr("value");
		var name = $(this).attr("data-value");
		alertify.confirm('<i class="las la-trash-alt"></i> Delete','Confirm Deleting '+ name +' ?', function(){ 
		$.ajax({
			type: 'GET',
			url: 'database/sales/deleteRecord.php?id='+id,
			success: function () { 
				load_sales();
			},
			error: function(xhr , status , error) {
				$('body').html("<h1>"+xhr['status']+" "+error+"</h1>");
			}
		});
	}
     , function(){}).set({transition:'zoom'}).show(); ;
		
	});

});