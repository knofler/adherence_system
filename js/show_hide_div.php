<?php
?>
<script>
$(document).ready(function(){
	     
	 $(".header_loginDiv").hide()
	 $('#mates_div').hide();
	 //$("#checkin_div").hide();
	 $("#wknd_photos_div").hide();
	 
	 //Hide profile submenu div on page load
	  $(".profile_submenu").hide();
	  
	 
	 //click on profile to show sub menu tabs
	 $(".profile_menuDiv").click(function(e){
	 $(".profile_submenu").show(400,function(){
	    $(".profile_menuDiv").click(function(e){
	       $(".profile_submenu").hide()});
		     e.preventDefault();
	    });
   e.preventDefault();
	 });
	  //click on login to show sub menu tabs
	 $("#login_click").click(function(e){
	 $(".header_loginDiv").show(400,function(){
	    $("#login_click").click(function(e){
	       $(".header_loginDiv").hide()});
		     e.preventDefault();
	    });
   e.preventDefault();
	 });
   
	 //Hide .slidingDiv class and .slidingEditDiv class div  #show_group and #show_template on page load
	$(".slidingDiv").hide();
<<<<<<< HEAD
	$(".slidingEditDiv").hide();
	$("#show_group").hide();
	$("#show_user").hide();
	$("#show_task_group").hide();
	$("#show_task_user").hide();
        $(".show_template").hide();
	$(".show_task").hide();
	$(".show_group").hide();
=======
	//$(".slidingEditDiv").hide();
	$("#show_group").hide();
	$("#show_user").hide();
>>>>>>> 50b4e7f493f57b91503bf185cda7170d6792ff3c
	
	 
	//Show upload image,display album,create album and Edit Album click button div on page load
	 $(".show_hide_upload").show();
	 $(".show_hide_exp").show();
	 $(".show_hide_edit").show();
	 $(".show_hide_image").show();
	 $(".create_task_click").show();
	 $(".create_template_click").show();
	 $(".create_group_click").show();
	 $(".assign_task_click").show();
	 $(".assign_template_click").show();
	 $(".assign_group_click").show();
<<<<<<< HEAD
	 $(".view_task_click").show();
	 $(".view_template_click").show();
	 $(".view_group_click").show();
	 $(".edit_task_click").show();
	 $(".edit_template_click").show();
	 $(".edit_group_click").show();
	  $(".member_task_click").show();
	 $(".member_template_click").show();
	 $(".member_group_click").show();
=======
>>>>>>> 50b4e7f493f57b91503bf185cda7170d6792ff3c
	 
	 //Hide display image div on page load
	$(".imageDiv").hide();
	  
   
      //UPLOAD IMAGE-grab class of sliding div and combined its ID with variable and call slideToggle function on that element to get the sliding effect   
      $(".show_hide_upload").click(function(){
       var $str = $(this).attr("id");
       console.log($str);
       var $index = $str.replace('show_hide', '');
	 console.log($index);
       var divName = "#upload" + $index;
	console.log(divName);
       $(divName).slideToggle();
   
   });
      
	 //Weekend expense-grab class of sliding div and combined its ID with variable and call slideToggle function on that element to get the sliding effect   
      $(".show_hide_exp").click(function(){
       var $str = $(this).attr("id");
       console.log($str);
       var $index = $str.replace('show_hide', '');
	 console.log($index);
       var divName = "#expense" + $index;
	console.log(divName);
       $(divName).slideToggle();
   
   });
   
      //Edit Album-grab class of sliding div and combined its ID with variable and call slideToggle function on that element to get the sliding effect   
      $(".show_hide_edit").click(function(){
       var $str = $(this).attr("id");
       console.log($str);
       var $index = $str.replace('show_hide', '');
	 console.log($index);
       var divName = "#editslide" + $index;
	console.log(divName);
       $(divName).slideToggle();
   
   });
<<<<<<< HEAD
      
      
//Edit template-grab class of sliding div and combined its ID with variable and call slideToggle function on that element to get the sliding effect   
      $(".edtdel_button").click(function(){
       var $str = $(this).attr("id");
       console.log($str);
       var $index = $str.replace('edit_click', '');
	 console.log($index);
       var divName = "#editslide" + $index;
	console.log(divName);
       $(divName).slideToggle();
   
   });
      
//Edit task-grab class of sliding div and combined its ID with variable and call slideToggle function on that element to get the sliding effect   
      $(".edtdel_button").click(function(){
       var $str = $(this).attr("id");
       console.log($str);
       var $index = $str.replace('edit_click', '');
	 console.log($index);
       var divName = "#edittask" + $index;
	console.log(divName);
       $(divName).slideToggle();
   
   });
      
 //Edit group-grab class of sliding div and combined its ID with variable and call slideToggle function on that element to get the sliding effect   
      $(".edtdel_button").click(function(){
       var $str = $(this).attr("id");
       console.log($str);
       var $index = $str.replace('edit_click', '');
	 console.log($index);
       var divName = "#grouptask" + $index;
	console.log(divName);
       $(divName).slideToggle();
   
   });     
      

     //on radio button change slide up and down option will appear.
=======
       //click to show create task tab. this time .create_album_show will diplay div.   
     
>>>>>>> 50b4e7f493f57b91503bf185cda7170d6792ff3c
      $("#radio_group").change(function(){
       $("#show_group").slideToggle();
        $("#show_user").slideUp();
   });
      
       $("#radio_user").change(function(){
       $("#show_user").slideToggle();
         $("#show_group").slideUp();
   });
<<<<<<< HEAD
       
            //on radio button change slide up and down option will appear.
      $("#radio_task_group").change(function(){
       $("#show_task_group").slideToggle();
        $("#show_task_user").slideUp();
   });
      
       $("#radio_task_user").change(function(){
       $("#show_task_user").slideToggle();
         $("#show_task_group").slideUp();
   });
       
       //TABS
          $("#tabs").tabs();
       
    //CREATE
      //click to show create task tab. this time .create_album_show will diplay div.   
      $("#create_task_click").click(function(){
       //$('#create_task_show').slideToggle();
              $('#assign_task_show').hide();
	    $(".member_task").animate({width:'toggle'},10);
	    $('#create_task_show').animate({width:'toggle'},350);
      });
      
       //click to show create template tab. this time .create_album_show will diplay div.   
      $("#create_template_click").click(function(){
       //$('#create_template_show').slideToggle();
            $('#assign_template_show').hide();
	    $("#modify_template_show").hide();
	    $(".member_template").animate({width:'toggle'},10);
	    $('#create_template_show').animate({width:'toggle'},350);
   });
      
       //click to show create template tab. this time .create_album_show will diplay div.   
      $("#create_group_click").click(function(){
	    $('#assign_group_show').hide();
	    $(".member_group").animate({width:'toggle'},10);
	    $('#create_group_show').animate({width:'toggle'},350);
   });
     
     //ASSIGN 
       //click to show assign task tab. this time .assign_album_show will diplay div.   
       $("#assign_task_click").click(function(){
	 $('#create_task_show').hide();
       $(".member_task").animate({width:'toggle'},10);
       $('#assign_task_show').animate({width:'toggle'},350);
       });
      
       //click to show assign template tab. this time .assign_album_show will diplay div.   
      $("#assign_template_click").click(function(){
	 $('#create_template_show').hide();
	 $('#modify_template_show').hide();
	  $(".member_template").animate({width:'toggle'},10);
	  $('#assign_template_show').animate({width:'toggle'},350);
	
   });
      
        //MODIFY
       //click to show assign task tab. this time .assign_album_show will diplay div.   
       $("#modify_template_click").click(function(){
	 $('#create_template_show').hide();
	 $('#assign_template_show').hide();
       $(".member_template").animate({width:'toggle'},10);
          $("#modify_template_show").animate({width:'toggle'},350);
       });

      
      
       //click to show assign template tab. this time .assign_album_show will diplay div.   
      $("#assign_group_click").click(function(){
	   $('#create_group_show').hide();
      $(".member_group").animate({width:'toggle'},10);
       $('#assign_group_show').animate({width:'toggle'},350);
   });
      
     //VIEW 
        //click to show view task tab. this time .view_album_show will diplay div.   
      $(".view_task_click").click(function(){
       $('#view_task_show').slideToggle();
   });
      
       //click to show view template tab. this time .view_album_show will diplay div.   
      $(".view_template_click").click(function(){
       $('#view_template_show').slideToggle();
   });
      
       //click to show view template tab. this time .view_album_show will diplay div.   
      $(".view_group_click").click(function(){
       $('#view_group_show').slideToggle();
   });
      
    //EDIT
      //click to show edit task tab. this time .edit_album_show will diplay div.   
      $(".edit_task_click").click(function(){
       $('#edit_task_show').slideToggle();
   });
      
       //click to show edit template tab. this time .edit_album_show will diplay div.   
      $(".edit_template_click").click(function(){
       $('#edit_template_show').slideToggle();
   });
      
       //click to show edit template tab. this time .edit_album_show will diplay div.   
      $(".edit_group_click").click(function(){
       $('#edit_group_show').slideToggle();
   });
   
      
          //Grab each_template id of click_template class DIV and on click event toggle show_template class div 
      $(".click_template").click(function(){
       var $str = $(this).attr("id");
       console.log($str);
       //var $index = $str.replace('click_template', '');
	 //console.log($index);
       var divName = "#template_displayDiv" + $str;
	console.log(divName);
       $(divName).slideToggle();   
   });
      
	 //Grab each_task id of click_task class DIV and on click event toggle show_task class div 
      $(".click_task").click(function(){
       var $str = $(this).attr("id");
       console.log($str);
       //var $index = $str.replace('click_template', '');
	 //console.log($index);
       var divName = "#task_displayDiv" + $str;
	console.log(divName);
       $(divName).slideToggle();   
   });
      
      	 //Grab each_task id of click_task class DIV and on click event toggle show_task class div 
      $(".click_group").click(function(){
       var $str = $(this).attr("id");
       console.log($str);
       //var $index = $str.replace('click_template', '');
	 //console.log($index);
       var divName = "#group_displayDiv" + $str;
	console.log(divName);
       $(divName).slideToggle();   
   });
      
      
      
      
=======

      //click to show create task tab. this time .create_album_show will diplay div.   
      $(".create_task_click").click(function(){
       $('#create_task_show').slideToggle();
   });
      
       //click to show create template tab. this time .create_album_show will diplay div.   
      $(".create_template_click").click(function(){
       $('#create_template_show').slideToggle();
   });
      
       //click to show create template tab. this time .create_album_show will diplay div.   
      $(".create_group_click").click(function(){
       $('#create_group_show').slideToggle();
   });
      
       //click to show assign task tab. this time .assign_album_show will diplay div.   
      $(".assign_task_click").click(function(){
       $('#assign_task_show').slideToggle();
   });
      
       //click to show assign template tab. this time .assign_album_show will diplay div.   
      $(".assign_template_click").click(function(){
       $('#assign_template_show').slideToggle();
   });
      
       //click to show assign template tab. this time .assign_album_show will diplay div.   
      $(".assign_group_click").click(function(){
       $('#assign_group_show').slideToggle();
   });
      
      
>>>>>>> 50b4e7f493f57b91503bf185cda7170d6792ff3c
      //DISPLAY IMAGE-grab class of sliding div and combined its ID with variable and call slideToggle function on that element to get the sliding effect   
      $(".show_hide_image").click(function(){
       var $str = $(this).attr("id");
       console.log($str);
       var $index = $str.replace('show_hide_image', '');
	 console.log($index);
       var divName = "#imageDiv" + $index;
	console.log(divName);
       $(divName).slideToggle();   
   });
      
      //var select_id=document.getElementById("select_id");
   console.log($("#select_id option:selected").text());
   console.log($("#select_id").val());
   var weekend_id=$("#select_id").val();
      });
	 
	 
   var click=document.getElementById("profile_menuDiv");
   var show=document.getElementById("profile_submenu");
   click.addEventListener("click",function(e){
       show.show();
       e.preventDefault; 
   });
   
   </script>
   <?php
   
   ?>
   