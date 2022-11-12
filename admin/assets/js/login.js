$(document).ready(function(){
    $('#cnf_pass').keyup(function(){
        var pass = $('#regpass').val();
		var cnf = $(this).val();
		
        if(pass == cnf){
            $(this).removeClass("errorClass");
            $("#regpass").removeClass("errorClass");
            $(".errormsg").html("");
        }else{
            $(this).addClass("errorClass");
            $("#regpass").addClass("errorClass");
            $(".errormsg").html("Password doesn't match.");
        }
	});

    $('#regpass').keyup(function(){
        var pass = $('#cnf_pass').val();
		var cnf = $(this).val();
		
        if(pass == cnf){
            $(this).removeClass("errorClass");
            $("#cnf_pass").removeClass("errorClass");
            $(".errormsg").html("");
        }else{
            $(this).addClass("errorClass");
            $("#cnf_pass").addClass("errorClass");
            $(".errormsg").html("Password doesn't match.");
        }
	});

    $('#loginform').on("submit", function(e){
        e.preventDefault();
        var data = $(this).serialize();
        console.log(data);
        $.ajax({
            type: 'POST',
            url: 'database/login.php',
            data: data,
            success: function (data) {
                if(data){
                    alertify.confirm('<i class=\"las la-exclamation-triangle\"></i> Login',data, function(){ }, function(){}).set({transition:'zoom'}).show();
                }else{
                    window.location.href = "login.php";
                }
                
            },
            error: function(xhr , status , error) {
                $('body').html("<h1>"+xhr['status']+" "+error+"</h1>");
                console.log(xhr,status,error);
            }
        });
    });
    $(document).on('click','#btn_reg', function(e){
        $('#registerAdmin').modal('show');
    });

    $('#regform').on("submit", function(e){
        e.preventDefault();
        var data = $(this).serialize();
        console.log(data);
        $.ajax({
            type: 'POST',
            url: 'database/register.php',
            data: data,
            success: function (data) {
                if(data=="success"){
                    $('#registerAdmin').modal('hide');
                    alertify.confirm('<i class=\"las la-exclamation-triangle\"></i> Login','Registration Successful.', function(){ }, function(){}).set({transition:'zoom'}).show();
                }
                else{
                    alertify.confirm('<i class=\"las la-exclamation-triangle\"></i> Login',data, function(){ }, function(){}).set({transition:'zoom'}).show();
                }
            },
            error: function(xhr , status , error) {
                $('body').html("<h1>"+xhr['status']+" "+error+"</h1>");
                console.log(xhr,status,error);
            }
        });
    });
});