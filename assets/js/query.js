$(document).ready(function(){

    
  load_data();


function load_data(query)
{
 var link = $(".active [class='page-scroll']").attr('href')

 if(link=="#destinations"){
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
  $(document).on("click","#cntactbtn", function(e){
  e.preventDefault();
  var data = $(this).serialize();
$.ajax({
  type: 'POST',
  url: 'query/setElement.php',
  data: data,
  success: function () {
      console.log(data);
      $('#exampleModalCenter').modal('show'); 
  }
  , error : e  => console.log(e)

});
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
          $('#exampleModalCenter').modal('show'); 
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
              $('#myNavLabel').html(dest["destName"]);
              $('#ifrmYT').attr('src',dest["destTrailer"]);
              $("#destInclu").html(dest["destInclu"]);
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

  $("#bookLabel").html(row.destName);
  $("#bookForm [name='price']").val(row.destPrice);
 
});

$("#bookForm [name='nums']").keyup(function(){
  var row = jQuery.parseJSON(localStorage.getItem("row"));
  var price = row.destPrice;
  var num = $(this).val();
  
  $("#bookForm [name='price']").val(price*num);
});


});
