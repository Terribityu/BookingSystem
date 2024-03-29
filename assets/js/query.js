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

$('#search_destination').keyup(function(){
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
      var formdata = $(this).serialize();
  $.ajax({
      type: 'POST',
      url: 'query/setElement.php',
      data: formdata,
      success: function (data) {
          console.log(data);
          $("#contactModal").modal("hide");
          mySuccess();
          sendemail(formdata);
      }
      , error : e  => console.log(e)

  });
});

function sendemail(info){
  console.log(info);
  $.ajax({
    type: 'POST',
    url: 'query/email.php',
    data: info,
    success: function (data) {
        console.log(data);
    }
    , error : e  => console.log(e)
});
}

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
  var formdata = $(this).serialize();
  var otp = $('#otp').val();
  $.ajax({
    url:"query/setElement.php?verifyotp="+otp,
    method:"GET",
    success:function(data1)
    {
      if(data1 == true){
        $('#bookModal').modal('hide'); 
        mySuccess();
        sendemail(formdata)
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
    $("#allinclu").html("<li><span id='destInclu'>Roundtrip Airfare via Philippines Airline</span></li>");
  }else if(inclu[0] == "O2"){
    $("#allinclu").html("<li><span id='destInclu'>One-way Trip Airfare via Philippines Airline</span></li>");
  }
  
  if(inclu[1] == "O3"){
    $("#allinclu").append("<li><span id='destInclu'>2 days 1 night accomodation</span></li>");
  }else if(inclu[1] == "O4"){
    $("#allinclu").append("<li><span id='destInclu'>3 days 2 nights accomodation</span></li>");
  }else if(inclu[1] == "O9"){
    $("#allinclu").append("<li><span id='destInclu'>4 days 3 nights accomodation</span></li>");
  }

  if(inclu[2] == "O5"){
    $("#allinclu").append("<li><span id='destInclu'>Daily Breakfast, Dinner</span></li>");
  }else if(inclu[2] == "O6"){
    $("#allinclu").append("<li><span id='destInclu'>Daily Breakfast,Lunch,Dinner</span></li>");
  }
  
  if(inclu[3] == "O7"){
    $("#allinclu").append("<li><span id='destInclu'>Tour guide and transportation</span></li>");
  }else if(inclu[3] == "O8"){
    $("#allinclu").append("<li><span id='destInclu'>First day hotel pickup and guide</span></li>");
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
    url:"query/setElement.php?verifyotp="+otp,
    method:"GET",
    success:function(data)
    {
      if(data == true){
        $("#otp").removeClass("errorClass");
        $("#email").attr("readonly","");
        return true;
      }else{
        $("#email").removeAttr("readonly");
        return false;
      }
    }
  });
});

var timerId;

$(document).on('click','.sendotp', function(e){
  e.preventDefault();
  var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
  if(!testEmail.test($("#email").val())){
    $("#email").addClass("errorClass");
  }else{
    email =  $("#email").val();
    $("#sendotp").removeClass("sendotp");
    timerId = setInterval(countdown, 1000);
    $.ajax({
      url: 'query/otp.php',
      method: "post",
      data: {email:email},
      success: function(data){
        console.log(data);
      }
    });
  }
})
var timeLeft = 60;
    
$(document).on('click','.resendotp', function(e){
  e.preventDefault();
  var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
  if(!testEmail.test($("#email").val())){
    $("#email").addClass("errorClass");
  }else{
    email =  $("#email").val();
    timeLeft = 60;
    clearTimeout(timerId);
    timerId = setInterval(countdown, 1000);
    $.ajax({
      url: 'query/otp.php',
      method: "post",
      data: {email:email},
      success: function(data){
        console.log(data);
      }
    });
  }
})

$('#bookModal').on("hidden.bs.modal",function(){
  $('#bookForm')[0].reset();
  $.ajax({
    url: 'query/setElement.php',
    method: "post",
    data: {close:'true'},
    success: function(data){
      clearTimeout(timerId);
      timeLeft = 60;
      $('#sendotp').html('Send OTP verication Code.');
      $('#sendotp').attr('href',"");
      $("#email").removeAttr("readonly");
      $('#sendotp').addClass('sendotp');
      console.log(data);
    }
  });
});

function countdown() {

  if (timeLeft == -1) {
    clearTimeout(timerId);
    $('#sendotp').html('Resend verification: <a id="resendotp" class="resendotp" href>here</a>');
  } else {
    $('#sendotp').removeAttr('href');
    $('#sendotp').html('Resend verification: ' + timeLeft);
    timeLeft--;
  }
}
});
