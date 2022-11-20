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
			url: 'admin/database/blogs/getDestination.php',
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
			url: 'admin/database/blogs/addRecord.php',
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
	
	
	$(document).on('click','#blogInfo',function(e){
		e.preventDefault();
		var blog = $(this).attr("value");
		var dest = $(this).attr("data-value");
		$("#blogModal").modal("show");
		$.ajax({
		  url: 'query/setElement.php',
				method:"post",
				dataType: 'json',
		  data: {blog:blog, dest:dest},
		  success: function (blog) {
					// $('#destContent').html(dest); 
			localStorage.setItem("blog",JSON.stringify(blog));
					$('#blogLabel').html("Title: "+blog["blogTitle"]);
					$('#destImg').attr('src',"./assets/destinations/"+blog["destImg"]);
					$("#blogTitle").html("Title: "+blog["blogTitle"]);
					$("#blogAuthor").html("Author: "+blog["blogAuthor"]);
					$("#blogDate").html("Date: "+ blog["blogDate"]);
					$("#blogDesc").html(blog["blogDesc"]);
				   
		  },error: function(xhr , status , error) {
			$('body').html("<h1>"+xhr['status']+" "+error+"</h1>");
		  }
		});
	  });

});