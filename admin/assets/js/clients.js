$(document).ready(function(){
    
    load_clients();

    function load_clients(query){
        $.ajax({
			url:"database/clients/search.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#viewClients tbody').html(data);
                $('#mytable').paging({limit:20});
			}
		});
    }

    $('#search_clients').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_clients(search);
		}
		else
		{
			load_clients();			
		}
	});

    $(document).on('click','#delete',function(){
		var id = $(this).attr("value");
		var name = $(this).attr("data-value");
		alertify.confirm('<i class="las la-trash-alt"></i> Delete','Confirm Deleting '+ name +' ?', function(){ 
		$.ajax({
			type: 'GET',
			url: 'database/clients/deleteRecord.php?id='+id,
			success: function () { 
				load_data();
			},
			error: function(xhr , status , error) {
				$('body').html("<h1>"+xhr['status']+" "+error+"</h1>");
			}
		});
	}
     , function(){}).set({transition:'zoom'}).show(); ;
		
	});

});