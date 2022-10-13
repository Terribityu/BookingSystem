$(document).ready(function(){

    load_data();

	function load_data(query)
	{
		$.ajax({
			url:"query/queries.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#display3').html(data);
			}
		});
	}

    $('#contactform').on("submit", function(e){
        e.preventDefault();
        var data = $(this).serialize();
    $.ajax({
        type: 'POST',
        url: 'query/queries.php',
        data: data,
        success: function () {
            console.log(data);
            $('#exampleModalCenter').modal('show'); 
        }
        , error : e  => console.log(e)

    });
});

  $(".destBtn").on('click', function(event){
    console.log(this.id);
});

$("#myNav").on("hidden.bs.modal", function (e) {
    $("#overlay-content iframe").attr(
      "src",
      $("#overlay-content iframe").attr("src")
    );
  });

});
