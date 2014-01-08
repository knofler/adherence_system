<?php

 //Process assign functions and forms
           
<<<<<<< HEAD
            //Grab assign template inputs
          $userGroup=array();
          
=======
           ////Grab assign task inputs 
           // $task_name=$_POST['task_name'];
           // $task_desc=$_POST['task_desc'];
           //
           
            //Grab assign template inputs
               $userGroup=array();
>>>>>>> 50b4e7f493f57b91503bf185cda7170d6792ff3c
           if(isset($_POST['group_assign'])){
                foreach($_POST['group_assign'] as $each_group){
                  $userGroup[]=$each_group;
               }
<<<<<<< HEAD
               
           }//end of if
           
           
           elseif(isset($_POST['user_template'])){
               foreach($_POST['user_template'] as $each_template_user){
                
                     $userGroup[]=$each_template_user;
               }  
          }//end of template elseif
          
          elseif(isset($_POST['user_task'])){
               foreach($_POST['user_task'] as $each_task_user){
                     $userGroup[]=$each_task_user;
               }
          }//end of task endif
           
          $task_id=$_POST['task_id']; 
          $template_id=$_POST['template_id'];
  
            
          //Grab assign group inputs
          $user_assign=array();
          foreach($_POST['user_assign'] as $each_user){
              $user_assign[]=$each_user;
          }
          $group_id=$_POST['group_id'];
            
            
          //Run assign functions for data injection to relavent tables
          //if (isset($task_name) && isset($task_desc)){
          //    assign_task($task_name,$task_desc); 
          //}
            
          if(isset($task_id)){
               
                assign_task($task_id,$userGroup); 
          }
          
          if (isset($template_id)){
              assign_template($template_id,$userGroup); 
          }
          
          if (isset($group_id)){
              assign_group($group_id,$user_assign); 
          }
=======
           }elseif(isset($_POST['user_template'])){
            foreach($_POST['user_template'] as $each_template_user){
                  $userGroup[]=$each_template_user;
               }
           }
           
        $template_id=$_POST['template_id'];
  
            
            //Grab assign group inputs
            $user_assign=array();
            foreach($_POST['user_assign'] as $each_user){
                $user_assign[]=$each_user;
            }
            $group_id=$_POST['group_id'];
            
            
            //Run assign functions for data injection to relavent tables
            //if (isset($task_name) && isset($task_desc)){
            //    assign_task($task_name,$task_desc); 
            //}
            
            if (isset($template_id)){
                assign_template($template_id,$userGroup); 
            }
            
            if (isset($group_id)){
                assign_group($group_id,$user_assign); 
            }
>>>>>>> 50b4e7f493f57b91503bf185cda7170d6792ff3c

?>