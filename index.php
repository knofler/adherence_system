<!--This is the header template that inludes HTML head,CSS files and Starting of the body element including Header DIV-->
<?php

include "init.php" ;
include "/template/header.php" ;

?>


<!--This is left DIV,which is kept blank for design purpose-->
<div class="mainDiv" id="left"></div>

<!--This is Main Container DIV,which contains main HTML structures for this page.-->
<div class="mainDiv" id="container" >
   
<<<<<<< HEAD
          <?php
        
          if (!logged_in()){
              include 'dashboard.php';;
            }else
        include 'display_task.php';
        ?>
=======
        <?php include 'dashboard.php';?>
>>>>>>> 50b4e7f493f57b91503bf185cda7170d6792ff3c
 
</div><!--End of container DIV-->


<div class="mainDiv" id="right"></div>

<!--This is the footer template that inludes JavaScripts and Ending of All HTML elements including Footer DIV-->
<?php include "/template/footer.php" ; ?>
