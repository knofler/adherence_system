<?php
include 'init.php';

<<<<<<< HEAD
if (!logged_in()){
    header('location:index.php');
    exit();
}
=======
//if (!logged_in()){
//    header('location:index.php');
//    exit();
//}
>>>>>>> 50b4e7f493f57b91503bf185cda7170d6792ff3c

include "/template/header.php" ;
?>
           
<!--This is left DIV,which is kept blank for design purpose-->
<div class="mainDiv" id="left"></div>
            
<!--This is Main Container DIV,which contains main HTML structures for this page.-->
<div class="mainDiv" id="container" >
   
<<<<<<< HEAD
   <div id="tabs">
  <ul>
    <li><a href="#fragment-1"><span>Template</span></a></li>
    <li><a href="#fragment-2"><span>Task</span></a></li>
    <li><a href="#fragment-3"><span>Group</span></a></li>
  </ul>
  <div id="fragment-1">
  <?php  include '/modules/template_tab.php' ;?>
    
  </div>
  <div id="fragment-2">
   <?php  include '/modules/task_tab.php' ;?>
  </div>
  <div id="fragment-3">
 <?php  include '/modules/group_tab.php' ;?>
  </div>
</div>
   
=======
 <?php  include '/modules/create_panel.php' ;?>
 <?php  include '/modules/assign_panel.php' ;?>   

>>>>>>> 50b4e7f493f57b91503bf185cda7170d6792ff3c
            
</div><!--End of container DIV-->

<div class="mainDiv" id="right"></div>
<<<<<<< HEAD
<div class="gap" id="bottom"></div>
=======
>>>>>>> 50b4e7f493f57b91503bf185cda7170d6792ff3c

<!--This is the footer template that inludes JavaScripts and Ending of All HTML elements including Footer DIV-->
<?php include "/template/footer.php" ; ?>

