       <?php?>
       <script>
       //Add new task on click event
       $(document).ready(function(){
	      
		    //This is for Dynamic tasks. first two html elements are static.so count starts from 2.	
		     var count=2;
		     
	      $("#add_id").click(function(name){

		     name=prompt("Task name");
		     if (name) {
       
			    $('.dashboard').append(
				   '<div class="each_task" id="task'+ count+'"><div class="div_name"><label>'+name+'</label></div> <div id="button_wrapper"><form class="task_form" id="form_start'+count
				   +'" action="process_task.php" method="post"><div class="ctrl_btn" id="start'+count+'"><input type="hidden" name="task_name" value="'
				   +name+'" /><input type="hidden" name="task_status" id="start_stat'+count+'" value="Start"/><input name="task_start" type="hidden" id="start_time'+count+'" value="" /><input class="task_start" type="submit" id="start_submit'+count
				   +'" value="Start" /></form></div><form class="task_form" id="form_end'+count+'" action="process_task.php" method="post"><div class="ctrl_btn" id="end'
				   +count+'"><input type="hidden" name="task_name" value="'+name+'" /><input type="hidden" name="task_status" id="end_stat'+count+'" value="End"/><input name="task_end" type="hidden" id="end_time'+count
				   +'" value="" /><input class="task_end" type="submit" id="end_submit'+count+'" value="End" /></div></form></div></div>').css('color', 'red');
				  
				  
			 }else{
			    return false;
		     }
		    
		 
	      
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
				      url: "process_task.php",
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
				    //console.log(formdata);
				   $.ajax({
				     type: "POST",
				     url: "process_task.php",
				     data:formdata
				     //success: function(){alert('success');}
				   });
				   
				   //TROUBLESHOOTING
				   console.log(startbtn_id);
		       
				 //enable start button upon clicking stop task
				  $(startbtn_id).removeAttr("disabled");
			    });
		   
		    count++;
	
	      });//End of Dynamic Add click event
				 
				 
	      //get static task start time on click event on task start button
	      $(".static_task_start").click(function(){
		     var $str=$(this).attr("id");
		     //TROUBLESHOOTING
		     console.log($str);
		     
		       var $index = $str.replace('start_submit', '');
		       //TROUBLESHOOTING
		     console.log($index);
		     
		     var divName = "#start_time" + $index;
		     var form_start="#form_start"+$index;
		     
		     //generate current time	
		     var currentTime = new Date();
		     var db_frd_time=currentTime.getTime();	
				 
		     $(divName).val(db_frd_time);
		     console.log($(divName).val());
			
		      //prevent default form submission, which takes html to other page and run ajax to submit the data to php script for processing 
		      event.preventDefault();
			    var formdata = $(form_start).serialize();
			    console.log(formdata);
			    $.ajax({
				type: "POST",
				url: "process_task.php",
				data: formdata
				//success: function(){alert('success');}
			    });
			     
		      //disable start button so cant get started unless task stop button pressed
		      //console.log(this);
		      $(this).attr("disabled","disabled");
	     });//end of Static start click event
			
				       
	      //get task end time on click event on tast end button
	      $(".static_task_end").click(function(){
		     var $str=$(this).attr("id");
		     console.log($str);
		     
		     var $index = $str.replace('end_submit', '');
		       //TROUBLESHOOTING
		     console.log($index);
		     
		     
		     var divName = "#end_time" + $index;
		     var form_end="#form_end"+$index;
		     var startbtn_id="#start_submit"+$index;
		     
		     //TROUBLESHOOTING
		       console.log(startbtn_id);
		       
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
				 url: "process_task.php",
				 data:formdata
				 //success: function(){alert('success');}
			    });
			     
		     //enable start button upon clicking stop task
		     $(startbtn_id).removeAttr("disabled");
	      });//end of Static end click event
	       
				 
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
				 
       });//End of DOM ready function
       
       </script>
       
       <?php?>
			