$(document).ready(function(){

    
  load_data();


function load_data(query)
{
 var link = $(".active [class='page-scroll']").attr('href')

 if(link=="#destinations" || link=="#blogs"){
  $(".navbar-area").css("background-color","Lightgray");
 }else{
  $(".navbar-area").css("background-color","");
 }
 
  $.ajax({
    url:"query/destinations.php",
    method:"post",
    data:{query:query,data:link},
    success:function(data)
    {
      $('#display3').html(data);
    }
  });
}

function mySuccess() {
  Swal.fire({
    position: "center",
    icon: "success",
    title: "Success",
    text: "Check your email for more details.",
    showConfirmButton: false,
    timer: 2000,
  });
}

  $('#contactModal').on("hidden.bs.modal",function(){
    $('#contactform')[0].reset();
  });

  $('#contactform').on("submit", function(e){
      e.preventDefault();
      var data = $(this).serialize();
  $.ajax({
      type: 'POST',
      url: 'query/setElement.php',
      data: data,
      success: function () {
          console.log(data);
          $("#contactModal").modal("hide");
          mySuccess();
      }
      , error : e  => console.log(e)

  });
});

$("#allDest").click(function(e){
  window.location.href= "./destination.php";
})

$("#myNav").on("hidden.bs.modal", function (e) {
  $("#ifrmYT").attr(
    "src",
    $("#ifrmYT").attr("src")
  );
});

$(document).on('click','#destAdd',function(e){
  e.preventDefault();
  var dest = $(this).attr("value");
  console.log(dest);

  $.ajax({
    url: 'query/setElement.php',
          method:"post",
          dataType: 'json',
    data: {viewDest: dest},
    success: function (dest) {
              // $('#destContent').html(dest); 
              console.log(JSON.stringify(dest));
      localStorage.setItem("row",JSON.stringify(dest));
              var inclu = JSON.parse(dest["destInclu"]);
            
            	getInclusions(inclu);
              $('#myNavLabel').html(dest["destName"]);
              $('#ifrmYT').attr('src',dest["destTrailer"]);
              $("#destPrice").html("Price: "+dest["destPrice"]);
              $("#destDesc").html(dest["destDesc"]);
              $("#bookNow").attr('value', dest["destID"]);
             
    },error: function(xhr , status , error) {
      $('body').html("<h1>"+xhr['status']+" "+error+"</h1>");
    }
  });
});

$(document).on('click','#bookNow', function(e){
  e.preventDefault();
  var book = $(this).attr("value");
  var row = jQuery.parseJSON(localStorage.getItem("row"));
  console.log(row.destPrice);
  $("#destid").val(row.destID);
  $("#bookLabel").html(row.destName);
  $("#bookForm [name='price']").val(row.destPrice);
  
});

$("#bookForm [name='nums']").keyup(function(){
  var row = jQuery.parseJSON(localStorage.getItem("row"));
  var price = row.destPrice;
  var num = $(this).val();
  
  $("#bookForm [name='price']").val(price*num);
});

$('#bookForm').on('submit',function(e){
  e.preventDefault();
  clearTimeout(timerId);
  var otp = $('#otp').val();
  $.ajax({
    url:"query/setElement.php",
    method:"post",
    data:{verifyotp:otp},
    success:function(data1)
    {
      if(data1 == true){
        var data = $(this).serialize();
        $.ajax({
          url: 'query/setElement.php?booknew=true',
          method: "post",
          data: data,
          success: function(data){
            console.log(data);
            $('#bookModal').modal('hide'); 
            mySuccess();
          }
        });
      }else{
        alert("OTP code is incorrect.")
      }
    }
    });
})

function getInclusions(inclu){
    
  console.log(inclu);
  // console.log($('#inclusions1').val());
  if(inclu[0] == "O1"){
    $("#destInclu").html("Roundtrip Airfare via Philippines Airline");
  }else if(inclu[0] == "O2"){
    $("#destInclu").html("One-way Trip Airfare via Philippines Airline");
  }
  
  if(inclu[1] == "O3"){
    $("#destInclu1").html("1 night accomodation");
  }else if(inclu[1] == "O4"){
    $("#destInclu1").html("2 nights accomodation");
  }

  if(inclu[2] == "O5"){
    $("#destInclu2").html("Daily Breakfast, Dinner");
  }else if(inclu[2] == "O6"){
    $("#destInclu2").html("Daily Breakfast,Lunch,Dinner");
  }
  
  if(inclu[3] == "O7"){
    $("#destInclu3").html("Tour guide and transportation");
  }else if(inclu[3] == "O8"){
    $("#destInclu3").html("First day hotel pickup and guide");
  }
}

$("#email").keyup(function(){
  var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
if (testEmail.test($(this).val())){
  $("#otp").prop('disabled', false);
  $(this).removeClass("errorClass");
}else{
  $("#otp").prop('disabled', true);
}
});

$("#otp").keyup(function(){
  var otp = $(this).val();
  $("#otp").addClass("errorClass");

  $.ajax({
    url:"query/setElement.php",
    method:"post",
    data:{verifyotp:otp},
    success:function(data)
    {
      if(data == true){
        $("#otp").removeClass("errorClass");
        return true;
      }else{
        return false;
      }
    }
  });
});

var timerId;

$(document).on('click','#sendotp', function(e){
  e.preventDefault();
  var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
  if(!testEmail.test($("#email").val())){
    $("#email").addClass("errorClass");
  }else{
    email =  $("#email").val();
    $.ajax({
      url: 'query/otp.php',
      method: "post",
      data: {email:email},
      success: function(data){
        console.log(data);
        timerId = setInterval(countdown, 1000);
      }
    });
  }
})
var timeLeft = 60;
    
$('#bookModal').on("hidden.bs.modal",function(){
  $('#bookForm')[0].reset();
  $.ajax({
    url: 'query/setElement.php',
    method: "post",
    data: {close:'true'},
    success: function(data){
      console.log(data);
    }
  });
});

function countdown() {

  if (timeLeft == -1) {
    clearTimeout(timerId);
    $('#sendotp').html('Resend verification: <a id="sendotp" href>here</a>');
  } else {
    $('#sendotp').removeAttr('href');
    $('#sendotp').html('Resend verification: ' + timeLeft);
    timeLeft--;
  }
}
});
