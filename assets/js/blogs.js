$(document).ready(function(){
    
    load_blogs();

    function load_blogs(query){
        var link = $(".active [class='page-scroll']").attr('href')

		if(link=="#blog" || link=="#destinations" ){
		$(".navbar-area").css("background-color","Lightgray");
		}else{
		$(".navbar-area").css("background-color","");
		}
		
		$.ajax({
			url:"query/blogs.php",
			method:"post",
			data:{query:query,data:link},
			success:function(data)
			{
			$('#display4').html(data);
			}
		});
    }

	$("#allBlogs").click(function(e){
		window.location.href= "./blogs.php";
	  })

    $(document).on('click','#approved',function(){
		var id = $(this).attr("value");
		var name = $(this).attr("data-value");
		alertify.confirm('<i class="las la-check-circle"></i> Approve','Approve '+ name +' ?', function(){ 
		$.ajax({
			type: 'GET',
			url: 'database/blogs/approved.php?id='+id,
			success: function () { 
				load_blogs();
			},
			error: function(xhr , status , error) {
				$('body').html("<h1>"+xhr['status']+" "+error+"</h1>");
			}
		});
	}
     , function(){}).set({transition:'zoom'}).show(); ;
		
	});

    $(document).on('click','#reject',function(){
		var id = $(this).attr("value");
		var name = $(this).attr("data-value");
		alertify.confirm('<i class="las la-times-circle"></i> Reject','Reject '+ name +' ?', function(){ 
		$.ajax({
			type: 'GET',
			url: 'database/blogs/deleteRecord.php?id='+id,
			success: function () { 
				load_blogs();
			},
			error: function(xhr , status , error) {
				$('body').html("<h1>"+xhr['status']+" "+error+"</h1>");
			}
		});
	}
     , function(){}).set({transition:'zoom'}).show(); ;
		
	});

    $(document).on('click','#delete',function(){
		var id = $(this).attr("value");
		var name = $(this).attr("data-value");
		alertify.confirm('<i class="las la-trash-alt"></i> Delete','Confirm Delete '+ name +' ?', function(){ 
		$.ajax({
			type: 'GET',
			url: 'database/blogs/deleteRecord.php?id='+id,
			success: function () { 
				load_blogs();
			},
			error: function(xhr , status , error) {
				$('body').html("<h1>"+xhr['status']+" "+error+"</h1>");
			}
		});
	}
     , function(){}).set({transition:'zoom'}).show(); ;
		
	});

    $('#search_blogs').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_blogs(search);
		}
		else
		{
			load_blogs();			
		}
	});

    function getDestination(){
        $.ajax({
			type: 'POST',
			url: 'database/blogs/getDestination.php',
			success: function (data) {
				// console.log(data);
                $('#blogdestination').html(data); 
			},
			error: function(xhr , status , error) {
				$('body').html("<h1>"+xhr['status']+" "+error+"</h1>");
			}
		});
    }
    
    $("#editBlogsModal").on("hidden.bs.modal", function () {
         $('#tinyform')[0].reset();  
   });

	$(document).on('click','#addblogs',function(e){
        getDestination();
    });

		$('#tinyform').on("submit", function(e){
			e.preventDefault();
			var data = $(this).serialize();
		$.ajax({
			type: 'POST',
			url: 'database/blogs/addRecord.php',
			data: data,
            cache: false,
			success: function () {
				console.log(data);
                $('#editBlogsModal').modal('hide'); 
				load_blogs();
			},
			error: function(xhr , status , error) {
				$('body').html("<h1>"+xhr['status']+" "+error+"</h1>");
			}
		});
	});
	

    $(document).on('click','#pendingblogs', function(){
        var pend = $(this);
        var appr = $('#approvedblogs');

        appr.removeClass("btn-primary");
        appr.addClass("btn-outline-primary");
        pend.removeClass("btn-outline-primary");
        pend.addClass("btn-primary");
        appr.val("");
        pend.val("active");
        load_blogs();
    });

    $(document).on('click','#approvedblogs', function(){
        var pend = $('#pendingblogs');
        var appr = $(this);

        pend.removeClass("btn-primary");
        pend.addClass("btn-outline-primary");
        appr.removeClass("btn-outline-primary");
        appr.addClass("btn-primary");
        pend.val("");
        appr.val("active");
        load_blogs();
    });

});