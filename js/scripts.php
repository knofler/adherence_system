      <?php
      ?>
	 <!--jQuery Source-->
	 
	 <!--First two sources for Auto Complete jQuery-->
	 <script type="text/javascript" src="./js/jquery-ui-1.8.2.custom.min.js"></script>
	      
	 <!--jQuery sources from Google-->
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	 <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
      
	 <!--jQuery Source for Select2.js for buttons and select plugins-->
	 <script src="./jQuery/select2-3.4.5/select2.js"></script>
	 
	  <!--Select2_execution.php includes all select2 execution jquery code for  for buttons and select plugins-->
	 <?php include 'select2_execution.php' ;?>
      
       
          <!--adhere control jquery code for  for buttons and select plugins-->
<<<<<<< HEAD
          <?php include 'new_adhere_jq.php' ;?>
=======
	 <?php include 'adhere_jq.php' ;?>
>>>>>>> 50b4e7f493f57b91503bf185cda7170d6792ff3c
       
	 <!--Show Hide divs-->
	 <?php include 'show_hide_div.php' ;?>
	 
	 <!--Custom script to check password strength in registration form-->
	 <script src="js/custom_form_check.js"></script>
	 
	  <!--dialog js script to warn before album delete-->
	 <script src="js/dialog.js"></script>
	 
	 
	<!--running javascript to hijack calculator form and make an ajax call to calculate the expenses-->
	 <script src="js/ajax-script.js"></script>
	 
	  
	 <!--[if lt IE 9]>
<<<<<<< HEAD
	 <!--<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>-->
=======
	 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
>>>>>>> 50b4e7f493f57b91503bf185cda7170d6792ff3c
		    
	 
	 <!--Source of Java scripts for this project-->
	 <script src="js/func.script.js"></script>
	 <!--<script src="js/geolocation_files.js"></script>-->

	 <script>
            //warn data lost on refresh
            //window.onbeforeunload = function() {
            //        return "Data will be lost if you leave the page, are you sure?";
            //    };
            //
            ////disable f5 to refresh page
            //function disable_f5(e)
            //    {
            //      if ((e.which || e.keyCode) == 116)
            //      {
            //          e.preventDefault();
            //      }
            //    }
            //    
            //    $(document).ready(function(){
            //        $(document).bind("keydown", disable_f5);    
            //    });
         </script>
      
      <?php
      ?>