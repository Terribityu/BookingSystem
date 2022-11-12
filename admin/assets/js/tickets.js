$(document).ready(function(){
    
    load_tickets();

    function load_tickets(query){
        $.ajax({
			url:"database/tickets/search.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{   
				$('#viewTickets tbody').html(data);
                $('#mytable').paging({limit:20});
			}
		});
    }

    $('#search_tickets').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_tickets(search);
		}
		else
		{
			load_tickets();			
		}
	});

    $(document).on('click','#delete',function(){
		var id = $(this).attr("value");
		var name = $(this).attr("data-value");
		alertify.confirm('<i class="las la-trash-alt"></i> Delete','Confirm Deleting '+ name +' ?', function(){ 
		$.ajax({
			type: 'GET',
			url: 'database/tickets/deleteRecord.php?id='+id,
			success: function () { 
				load_tickets();
			},
			error: function(xhr , status , error) {
				$('body').html("<h1>"+xhr['status']+" "+error+"</h1>");
			}
		});
	}
     , function(){}).set({transition:'zoom'}).show(); ;
		
	});

});