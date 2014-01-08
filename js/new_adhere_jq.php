       <?php?>
       <script>
       //Add new task on click event
       $(document).ready(function(){

			    //get task start time on click event on tast start button
			    $(".task_start").click(function(){
			    var $str=$(this).attr("id");
			    //TROUBLESHOOTING
			    console.log($str);
			    
			     var $index = $str.replace('start_submit', '');
			    //TROUBLESHOOTING
			    console.log($index);
		     
			    var divName = "#start_time" + $index;
			    var form_start="#form_start" +$index;
			    
			     //TROUBLESHOOTING
			    console.log(form_start);
								    
			    //generate current time	
			    var currentTime = new Date();
			    var db_frd_time=currentTime.getTime();	
								  
			    $(divName).val(db_frd_time);
			    console.log($(divName).val());
											      
			    //prevent default form submission, which takes html to other page and run ajax to submit the data to php script for processing 
			    event.preventDefault();
				  var formdata = $(form_start).serialize() ;
				  console.log(formdata);
				  
				  $.ajax({
				      type: "POST",
				      url: "process_forms.php",
				      data: formdata
				      //success: function(){alert('success');}
				   });
			     
				   //disable start button so cant get started unless task stop button pressed
			          $(this).attr("disabled","disabled");
			    });
					
					      
			    //get task end time on click event on task end button
			    $(".task_end").click(function(){
			    var $str=$(this).attr("id");
			    //TROUBLESHOOTING
			    console.log($str);
			    
			     var $index = $str.replace('end_submit', '');
			    //TROUBLESHOOTING
			    console.log($index);
			    
			    var divName = "#end_time" + $index;
			    var form_end="#form_end"+ $index;
			    var startbtn_id="#start_submit"+ $index;
								  
			    //generate current time	
			    var currentTime = new Date();
			    var db_frd_time=currentTime.getTime();
							     
			    $(divName).val(db_frd_time);
			    console.log($(divName).val());
							     
				   //prevent default form submission, which takes html to other page and run ajax to submit the data to php script for processing 
				   event.preventDefault();
				   var formdata = $(form_end).serialize();
				    console.log(formdata);
				   $.ajax({
				     type: "POST",
				     url: "process_forms.php",
				     data:formdata
				     //success: function(){alert('success');}
				   });
				   
				   //TROUBLESHOOTING
				   console.log(startbtn_id);
		       
				 //enable start button upon clicking stop task
				  $(startbtn_id).removeAttr("disabled");
			    });
	
	      });//End of Dynamic Add click event
				 
				 
	       
				 
	      //Messege div slide up and down
	      function sendContactForm(){
		     $("#messageSent").slideDown("slow");
		     setTimeout('$("#messageSent").slideUp();$(".task_form").slideUp("slow")', 2000);
	      }
	      
	      //prevnt submiting form		  
	      $('.task_form').submit(function () {
		     sendContactForm();
		     return false;
	      });//end of prevent form submiting
       </script>
       <?php?>
			