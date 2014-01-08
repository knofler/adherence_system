<?php

//create task--Supervisor can only do that.
function create_task($name,$desc){
    //INSERT to `task` table
    mysql_query("INSERT into `task` values('','$name','$desc',UNIX_TIMESTAMP(),'".$_SESSION['user_id']."')");
    header('location:admin_panel.php');
}
    
//create Template--Supervisor can only do that.
function create_template($name,$desc,$task_list){
   
    //INSERT to `task_template` table
    mysql_query("INSERT into `task_template` values('','$name','$desc',UNIX_TIMESTAMP(),'".$_SESSION['user_id']."')");
    
    $template_id=mysql_insert_id();
    
    ////INSERT to `template_task_list` table
    foreach($task_list as $task_id){
	
	 mysql_query("INSERT into `template_task_list` values($template_id,$task_id)");
    }
    header('location:admin_panel.php');
}

//create Group--Supervisor can only do that.
function create_group($name,$desc,$user_list){
   
    //INSERT to `task_template` table
    mysql_query("INSERT into `user_group` values('','$name','$desc',UNIX_TIMESTAMP(),'".$_SESSION['user_id']."')");
    
    $group_id=mysql_insert_id();
    
    ////INSERT to `group_member_list` table
    foreach($user_list as $user_id){
	
	 mysql_query("INSERT into `group_member_list` values($group_id,$user_id)");
    }
    header('location:admin_panel.php');
}   
      
?>