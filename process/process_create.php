<?php

 //Process create functions and forms
           
           //Grab create task inputs 
            $task_name=$_POST['task_name'];
            $task_desc=$_POST['task_desc'];
            
            //Grab create template inputs
            $task_items=array();
            foreach($_POST['task'] as $each_task){
                $task_items[]=$each_task;
            }
            $template_name=$_POST['template_name'];
            $template_desc=$_POST['template_desc'];
            
            //Grab create group inputs
            $user_create=array();
            foreach($_POST['user_create'] as $each_user){
                $user_create[]=$each_user;
            }
            $group_name=$_POST['group_name'];
            $group_desc=$_POST['group_desc'];
            
            
            //Run create functions for data injection to relavent tables
            if (isset($task_name) && isset($task_desc)){
                create_task($task_name,$task_desc); 
            }
            
            if (isset($template_name) && isset($template_desc)){
                create_template($template_name,$template_desc,$task_items); 
            }
            
            if (isset($group_name) && isset($group_desc)){
                create_group($group_name,$group_desc,$user_create); 
            }

?>