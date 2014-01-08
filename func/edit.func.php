<?php

   //function to edit template for each user
   function edit_template($template_id,$template_name,$template_desc){
      $template_id=(int)$template_id;
      $template_name=mysql_real_escape_string($template_name);
      $template_desc=mysql_real_escape_string($template_desc);
      mysql_query("UPDATE `task_template` SET `template_name`='$template_name', `template_desc`='$template_desc' WHERE `template_id`=$template_id ");
  }
  

?>