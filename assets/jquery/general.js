
$(document).ready(function() {
    
    $('.selection')
  .dropdown({
    onChange: function(value) {
      
    }
  })
;
 
});



$(document).ready(function() {
    
$('.test.modal')
  .modal('attach events', '.add.button', 'show')
;
 
});

$(document).ready(function () {
  $('.group').hide();
  $('#option1').show();
  $('#selectMe').change(function () {
    $('.group').hide();
    $('#'+$(this).val()).show();
  })
});


$(document).ready(function() {
    

$('.ui.form')
  .form({
   
  })
;
 
});
    
$( document ).ready(function () {
      // set an on click on the button
      $("#button").click(function () {
        // get the time if clicked via an ajax get queury
        // see the code in the controller time.php
        $.get("time", function (time) {
          // update the textarea with the time
          $("#text").html("Time on the server is:" + time);
        });
      });
    });
 

function viewdata(){
       $.ajax({
	   type: "GET",
	   url: "getcomp"
      }).done(function( data ) {
	  $('#viewdata').html(data);
      });
    }
 

$(document).ready(function(){
	    $("#addpc").submit(function(){
		    var formdata=$("#addpc").serialize();
		  
		   $.ajax({ url:"addcomp",
		            type:"POST",
                            data: formdata,
		   }).done(function( formdata ) {
                        $('#info').html(formdata);
                        viewdata();
                      });
		   
		  return false;
		}); 
	 
	 });
