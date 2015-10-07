
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
  $('.assets').hide();
  $('#computer').show();
  $('#selasset').change(function () {
    $('.assets').hide();
    $('#'+$(this).val()).show();
  })
});

$(document).ready(function () {
  $('.group').hide();
  $('#option1').show();
  $('#selectMe').change(function () {
    $('.group').hide();
    $('#'+$(this).val()).show();
  })
});

$(document).ready(function () {
  $('.group1').hide();
  $('#selecttype').change(function () {
    $('.group1').hide();
    $('#'+$(this).val()).show();
  })
});

$(document).ready(function() {
    

$('.ui.form')
  .form({
   
  })
;
 
});
    

function viewdata(){
       $.ajax({
	   type: "GET",
	   url: "getcomp",
            async: true,
      }).done(function( data ) {
	  $('#viewdata').html(data);
      });
    }
 
function viewhardware(){
       $.ajax({
	   type: "GET",
	   url: "gethw",
            async: true,
      }).done(function( data ) {
	  $('#hardware').html(data);
      });
    }

function viewsoftware(){
       $.ajax({
	   type: "GET",
	   url: "getsw",
            async: true,
      }).done(function( data ) {
	  $('#software').html(data);
      });
    }
 
 $(document).ready(function(){
     $('#editpc').click(function(){
        $('#editdiv').modal('show');    
     });
});
$(document).ready(function(){
	    $("#editpc").submit(function(){
		    var formdata=$("#editpc").serialize();
		  
		   $.ajax({ url:"editpc",
		            type:"POST",
                            data: formdata,
                            async: true,
		   }).done(function( formdata ) {
                        $('#info').html(formdata);
                        viewdata();
                      });
		   
		  return false;
		}); 
	 
	 });

$(document).ready(function(){
	    $("#addpc").submit(function(){
		    var formdata=$("#addpc").serialize();
		  
		   $.ajax({ url:"addcomp",
		            type:"POST",
                            data: formdata,
                             async: true,
		   }).done(function( formdata ) {
                        $('#info').html(formdata);
                        viewdata();
                      });
		   
		  return false;
		}); 
	 
	 });

         
$(document).ready(function(){
	    $("#addhw").submit(function(){
		    var formdata=$("#addhw").serialize();
		  
		   $.ajax({ url:"addhardware",
		            type:"POST",
                            data: formdata,
                             async: true,
		   }).done(function( formdata ) {
                        $('#info').html(formdata);
                      });
		   
		  return false;
		}); 
	 
	 });

$(document).ready(function(){
	    $("#addsw").submit(function(){
		    var formdata=$("#addsw").serialize();
		  
		   $.ajax({ url:"addsoftware",
		            type:"POST",
                            data: formdata,
                             async: true,
		   }).done(function( formdata ) {
                        $('#info').html(formdata);
                      });
		   
		  return false;
		}); 
	 
	 });

$(document).ready(function(){
            $.ajax({           
                type: "GET",
                url: "popdropdown",                  //the script to call to get data          
                data:'',                        //you can insert url argumnets here to pass to api.php
                dataType: 'json',                //data format      
                success: function(data){    //on recieve of reply
                  $.each(data, function(index,item){
                        $("#pop_pcs").append("<div class='item' data-value=\""+item.comp_id+"\"><i class='desktop icon'/>PC-"+item.comp_num+"</option>");
                        $("#pop_pcs1").append("<div class='item' data-value=\""+item.comp_id+"\"><i class='desktop icon'/>PC-"+item.comp_num+"</option>");
                });
            }

            });
        });