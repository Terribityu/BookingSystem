$(document).ready(function(){

	load_statisctics();

	function load_statisctics(){
		$.ajax({
			url:"database/statistics.php",
			method:"post",
			dataType:"json",
			success:function(data)
			{
				console.log(data);
				$('#destinationcount').html(data['destination']);
				$('#clientcount').html(data['bookings']);
				$('#incometotal').html(data['total']);
				$('#ticketcount').html(data['ticket']);
				$('#blogstotal').html(data['blogs']);
			}
		});
	}

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
		 $("#inclusions11").removeAttr('disabled','');
		 $("#inclusions22").removeAttr('disabled','');
		 $("#inclusions33").removeAttr('disabled','');
		 $("#inclusions44").removeAttr('disabled','');
		 $("#inclusions55").removeAttr('disabled','');
		 $("#inclusions66").removeAttr('disabled','');
		 $("#inclusions77").removeAttr('disabled','');
		 $("#inclusions88").removeAttr('disabled','');
		 $("#inclusions99").removeAttr('disabled','');
		 $("#id").removeClass("is-valid")
		 $("#id").removeClass("is-invalid");
		 $('#editForm')[0].reset();  
   });

   $("#addDestinationModal").on("hidden.bs.modal", function () {
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
	 $("#inclusions9").removeAttr('disabled','');
	 $("#id").removeClass("is-valid")
	 $("#id").removeClass("is-invalid");  
	 $("#preview2").attr("src","./assets/img/upimg.png");
	 $("#preview2").css({ 'height': '', 'width': '' }); 
	 $('#addForm')[0].reset();  
});

		$('#addForm').on("submit", function(e){
			e.preventDefault();
			var data = $(this).serialize();
			$('#addDestinationModal').modal('hide'); 
		$.ajax({
			type: 'POST',
			url: 'database/destination/addRecord.php',
			data: new FormData(this),
			contentType: false,
            cache: false,
            processData:false,
			success: function (data) {
				console.log(data);
				load_data();
			},
			error: function(xhr , status , error) {
				$('body').html("<h1>"+xhr['status']+" "+error+"</h1>");
			}
		});
	});

	function getInclusions(inclu){
    
		console.log(inclu);
		console.log($('#inclusions1').val());
		if(inclu[0] == "O1"){
			$('#inclusions11').prop('checked',true);
			$('#inclusions22').attr("disabled", true);
		}else if(inclu[0] == "O2"){
			$('#inclusions22').prop('checked',true);
			$('#inclusions11').attr("disabled", true);
		}
		
		if(inclu[1] == "O3"){
			$('#inclusions33').prop('checked',true);
			$('#inclusions44').attr("disabled", true);
			$('#inclusions99').attr("disabled", true);
		}else if(inclu[1] == "O4"){
			$('#inclusions44').prop('checked',true);
			$('#inclusions33').attr("disabled", true);
			$('#inclusions99').attr("disabled", true);
		}else if(inclu[1] == "O9"){
			$('#inclusions99').prop('checked',true);
			$('#inclusions33').attr("disabled", true);
			$('#inclusions44').attr("disabled", true);
		}
	
		if(inclu[2] == "O5"){
			$('#inclusions55').prop('checked',true);
			$('#inclusions66').attr("disabled", true);
		}else if(inclu[2] == "O6"){
			$('#inclusions66').prop('checked',true);
			$('#inclusions55').attr("disabled", true);
		}
		
		if(inclu[3] == "O7"){
			$('#inclusions77').prop('checked',true);
			$('#inclusions88').attr("disabled", true);
		}else if(inclu[3] == "O8"){
			$('#inclusions88').prop('checked',true);
			$('#inclusions77').attr("disabled", true);
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
				$('#exampleModalCenterTitle').html("<h5><i id='icon' class='las la-user-edit'></i> Edit Destination</h5>");
				$('#editDestinationModal').modal('show');
			},
			error: function(xhr , status , error) {
				$('body').html("<h1>"+xhr['status']+" "+error+"</h1>");
			}
		});

	});
	
	$(document).on('click','#inclusions33', function(){
		console.log($('#inclusions33').is(':checked'));
		if($('#inclusions33').is(':checked') == 0 && $('#inclusions44').is(':checked') == 0 && $('#inclusions99').is(':checked') == 0){
			console.log("True");
		}
	})
	function checkInclu(){
		if($('#inclusions11').is(':checked') == false && $('#inclusions22').is(':checked') == false){
			$('#inclu01').prop('checked', true);
		}
		if($('#inclusions33').is(':checked') == false && $('#inclusions44').is(':checked') == false && $('#inclusions99').is(':checked') == false){
			$('#inclu02').prop('checked', true);
		}
		if($('#inclusions55').is(':checked') == false && $('#inclusions66').is(':checked') == false){
			$('#inclu03').prop('checked', true);
		}
		if($('#inclusions77').is(':checked') == false && $('#inclusions88').is(':checked') == false){
			$('#inclu04').prop('checked', true);
		}
	}

		$('#editForm').on("submit", function(e){
			e.preventDefault();
			checkInclu();
			var data = $(this).serialize();
			$('#editDestinationModal').modal('hide'); 
		$.ajax({
			type: 'POST',
			url: 'database/destination/updateRecord.php',
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			success: function () {
				
				load_data();
				// window.location.href = "./destinations.php";
			},
			error: function(xhr , status , error) {
				$('body').html("<h1>"+xhr['status']+" "+error+"</h1>");
				console.log(xhr,status,error);
			}
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
	
	$(document).on('click','#logout', function(e){
		e.preventDefault();
		alertify.confirm('<i class="las la-exclamation-triangle"></i> Logout','Are you sure you want to logout?', function(){ 
			window.location.href = "database/logout.php";
		}
		, function(){}).set({transition:'zoom'}).show(); ;

	})
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

	$("#image2").change(function() {
		const [file] = this.files;
        // var file = this.files[0];
        var fileType = file.type;
        var match = ['image/jpeg', 'image/png', 'image/jpg'];
        if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]))){
            alert('Sorry, JPG, JPEG, & PNG files are allowed to upload.');
            $("#image2").val('');
            return false;
        }
		if (file) {
			$("#preview2").css({ 'height': '250px', 'width': '400' }); 
			preview2.src = URL.createObjectURL(file);
		}
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
