$(document).ready(function(){

	load_data();

	function load_data(query)
	{
		$.ajax({
			url:"database/destination/	search.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#viewRecords tbody').html(data);
                $('#mytable').paging({limit:10});
			}
		});
	}

	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});

	$('[data-tooltip="tooltip"]').tooltip();

	$("#editDestinationModal").on("hidden.bs.modal", function () {
     $("#user-availability-status").html("");
      $("#insert").removeAttr('disabled','');
	  $("#inclusions1").removeAttr('disabled','');
	  $("#inclusions2").removeAttr('disabled','');
	  $("#inclusions3").removeAttr('disabled','');
	  $("#inclusions4").removeAttr('disabled','');
	  $("#inclusions5").removeAttr('disabled','');
	  $("#inclusions6").removeAttr('disabled','');
	  $("#inclusions7").removeAttr('disabled','');
	  $("#inclusions8").removeAttr('disabled','');
      $("#id").removeClass("is-valid")
      $("#id").removeClass("is-invalid");
	  $('#editForm')[0].reset();  
});

	$('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#exampleModalCenterTitle').html("<i id='icon' class='las la-plus-circle'></i> Add Destination");
		   $('#editForm').trigger("reset");
           $('#editForm')[0].reset();  
		   $("#preview").attr("src","./assets/img/upimg.png");
		   $("#preview").css({ 'height': '', 'width': '' }); 

      });

		$(document).on('click','#add',function(e){
		$('#editForm').on("submit", function(e){
			e.preventDefault();
			var data = $(this).serialize();
		$.ajax({
			type: 'POST',
			url: 'database/destination/addRecord.php',
			data: new FormData(this),
			contentType: false,
            cache: false,
            processData:false,
			success: function (data) {
				console.log(data);
                $('#editDestinationModal').modal('hide'); 
				load_data();  
				window.location.href = "./destinations.php";
			},
			error: function(xhr , status , error) {
				$('body').html("<h1>"+xhr['status']+" "+error+"</h1>");
			}
		});
	});
	});

	function getInclusions(inclu){
    
		console.log(inclu);
		console.log($('#inclusions1').val());
		if(inclu[0] == "O1"){
			$('#inclusions1').prop('checked',true);
			$('#inclusions2').attr("disabled", true);
		}else if(inclu[0] == "O2"){
			$('#inclusions2').prop('checked',true);
			$('#inclusions1').attr("disabled", true);
		}
		
		if(inclu[1] == "O3"){
			$('#inclusions3').prop('checked',true);
			$('#inclusions4').attr("disabled", true);
		}else if(inclu[1] == "O4"){
			$('#inclusions4').prop('checked',true);
			$('#inclusions3').attr("disabled", true);
		}
	
		if(inclu[2] == "O5"){
			$('#inclusions5').prop('checked',true);
			$('#inclusions6').attr("disabled", true);
		}else if(inclu[2] == "O6"){
			$('#inclusions6').prop('checked',true);
			$('#inclusions5').attr("disabled", true);
		}
		
		if(inclu[3] == "O7"){
			$('#inclusions7').prop('checked',true);
			$('#inclusions8').attr("disabled", true);
		}else if(inclu[3] == "O8"){
			$('#inclusions8').prop('checked',true);
			$('#inclusions7').attr("disabled", true);
		}
	}

	$(document).on('click','#edit',function(){
		var id = $(this).attr("value");
		$.ajax({
			type: 'GET',
			url: 'database/destination/viewRecord.php?id='+id,
			dataType: 'json',
			success: function (data) {
				var inclu = JSON.parse(data["destInclu"]);
            
            	getInclusions(inclu);
				$("#editForm [name='id']").val(data["destID"]);
				$("#editForm [name='name']").val(data["destName"]);
				// $("#editForm [name='inclusion']").val(data["destInclu"]);
				$("#editForm [name='description']").val(data["destDesc"]);
				$("#editForm [name='price']").val(data["destPrice"]);
				$("#editForm [name='trailer']").val(data["destTrailer"]);
				$("#preview").css({ 'height': '250px', 'width': '400' }); 
				$("#preview").attr("src","../assets/destinations/"+data["destImg"]);
				$('#insert').val("Update"); 
				$('#exampleModalCenterTitle').html("<h5><i id='icon' class='las la-user-edit'></i> Edit Destination</h5>");
				$('#editDestinationModal').modal('show');
			},
			error: function(xhr , status , error) {
				$('body').html("<h1>"+xhr['status']+" "+error+"</h1>");
			}
		});
		$('#editForm').on("submit", function(e){
			e.preventDefault();
			var data = $(this).serialize();
		$.ajax({
			type: 'POST',
			url: 'database/destination/updateRecord.php',
			data: new FormData(this),
			contentType: false,
            cache: false,
            processData:false,
			success: function () {
				$('#editDestinationModal').modal('hide'); 
				load_data();
				// window.location.href = "./destinations.php";
			},
			error: function(xhr , status , error) {
				$('body').html("<h1>"+xhr['status']+" "+error+"</h1>");
				console.log(xhr,status,error);
			}
		});
	});

	});

		$(document).on('click','#delete',function(){
		var id = $(this).attr("value");
		var name = $(this).attr("data-value");
		alertify.confirm('<i class="las la-trash-alt"></i> Delete','Confirm Deleting '+ name +' ?', function(){ 
		$.ajax({
			type: 'GET',
			url: 'database/destination/deleteRecord.php?id='+id,
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
	

	$("#image").change(function() {
		const [file] = this.files;
        // var file = this.files[0];
        var fileType = file.type;
        var match = ['image/jpeg', 'image/png', 'image/jpg'];
        if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]))){
            alert('Sorry, JPG, JPEG, & PNG files are allowed to upload.');
            $("#image").val('');
            return false;
        }
		if (file) {
			$("#preview").css({ 'height': '250px', 'width': '400' }); 
			preview.src = URL.createObjectURL(file);
		}
    });

	$(document).on('click','#addblogs',function(e){
		$('#editForm').on("submit", function(e){
			e.preventDefault();
			var data = $(this).serialize();
		$.ajax({
			type: 'POST',
			url: 'database/destination/addRecord.php',
			data: data,
			success: function (data) {
				console.log(data);
                $('#editBlogsModal').modal('hide'); 
				load_blogs();
			},
			error: function(xhr , status , error) {
				$('body').html("<h1>"+xhr['status']+" "+error+"</h1>");
			}
		});
	});
	});
	
	$("input[type=checkbox]").click(function (e) {
		if ($(e.currentTarget).closest(".inclusions").length > 0) {
			toggleInputs($(e.currentTarget).closest(".inclusions")[0]);        
		}
	});

	function toggleInputs(questionElement) {
		if ($(questionElement).data('max-inclu') == undefined) {
			return true;
		} else {
			maxAnswers = parseInt($(questionElement).data('max-inclu'), 10); 
			if ($(questionElement).find(":checked").length >= maxAnswers) {
				$(questionElement).find(":not(:checked)").attr("disabled", true);
			} else {
				$(questionElement).find("input[type=checkbox]").attr("disabled", false);
			}
		}
	}
});
