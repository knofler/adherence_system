<<<<<<< HEAD
	<?php
	    
	//assign task--Supervisor can only do that.
	function assign_task($task_id,$userGroup){
	    foreach($userGroup as $each_entry){
	      //TROUBLESHOOTING
	      echo 'I am outside any control block ',$each_entry,'<br/>';
	      //find if $each_entry is a group_id or a user_id
	      $query=mysql_query("Select COUNT(`group_id`) from `user_group` where `group_id`='$each_entry'");
		 if(mysql_result($query,0)<1){
		       //This condition false means $userGroup is individual users not group , so insert user id to`template_member_list` table  
			     //add each task for each user to `task_member_list`
			     mysql_query("INSERT into `task_member_list` values($task_id,$each_entry,'')");
		 }else{
		       //echo $each_entry;
		    //This condition ture means $userGroup is group , so find each group member and insert user id  and group id to`template_member_list` table
		    //echo 'Now I am inside else, That means I am a group ',$each_entry,'<br/>';
		    $query2=mysql_query("SELECT `user_id` from `group_member_list` where `group_id`='$each_entry'");    
		    while($user_row=mysql_fetch_assoc($query2)){
		       //echo 'This is user:-' ,$user_row['user_id'],' for group ', $each_entry,'<br/>';
		       //this is each user extracted from group here.
		       $each_user=$user_row['user_id'];
		       //add each task for each user to `task_member_list`
		       mysql_query("INSERT into `task_member_list` values($task_id,$each_user,'')");
		    }//end of group while
		 }//end of else
	   }//end of foreach
	    header('location:admin_panel.php');
	}
		
	//assign Template--Supervisor can only do that.
	function assign_template($template_id,$userGroup){
	   //echo '<pre>',print_r($userGroup),'</pre>';
	   foreach($userGroup as $each_entry){
	      //TROUBLESHOOTING
	      //echo 'I am outside any control block ',$each_entry,'<br/>';
	      //find if $each_entry is a group_id or a user_id
	      $query=mysql_query("Select COUNT(`group_id`) from `user_group` where `group_id`='$each_entry'");
		 if(mysql_result($query,0)<1){
		    //This condition false means $userGroup is individual users not group , so insert user id to`template_member_list` table
		    mysql_query("INSERT into `template_member_list` values($template_id,'',$each_entry)");    
		    //So each user id becomes member of the following template, now tasks belong to the template needs to get added to user allocated task list.
		    //find task id list for the $template_id given to this function
		    $task_list_query=mysql_query("SELECT `task_id` from `template_task_list` where `template_id`=$template_id");
		    //add each task to users for the template user member off.
		    while($task_list_row=mysql_fetch_assoc($task_list_query)){
		       //this is each individual task
		       $each_task=$task_list_row['task_id'];   
			  //add each task for each user to `task_member_list`
			  mysql_query("INSERT into `task_member_list` values($each_task,$each_entry,$template_id)");
		    }//end of while 
		 }else{
		       //echo $each_entry;
		    //This condition ture means $userGroup is group , so find each group member and insert user id  and group id to`template_member_list` table
		    //echo 'Now I am inside else, That means I am a group ',$each_entry,'<br/>';
		    $query2=mysql_query("SELECT `user_id` from `group_member_list` where `group_id`='$each_entry'");    
		    while($user_row=mysql_fetch_assoc($query2)){
		       //echo 'This is user:-' ,$user_row['user_id'],' for group ', $each_entry,'<br/>';
		       //this is each user extracted from group here.
		       $each_user=$user_row['user_id'];
		       //each user with the group id inserted to `template member list` here
			 mysql_query("INSERT into `template_member_list` values('$template_id','$each_entry','$each_user')");
			  //find task id list for the $template_id given to this function
			   $task_list_query=mysql_query("SELECT `task_id` from `template_task_list` where `template_id`=$template_id");
			   //add each task to users for the template user member off.
			   while($task_list_row=mysql_fetch_assoc($task_list_query)){
			      //this is each individual task
			      $each_task=$task_list_row['task_id'];   
				 //add each task for each user to `task_member_list`
				 mysql_query("INSERT into `task_member_list` values($each_task,$each_user,$template_id)");
			   }//end of task while 
		    }//end of group while
		 }//end of else
	   }//end of foreach
	   header('location:admin_panel.php');
	}//end of function
	    
	    
	//assign Group--Supervisor can only do that.
	function assign_group($group_id,$user_list){   
	   //INSERT to `group_member_list` table
	   foreach($user_list as $user_id){
	       $query=mysql_query("SELECT COUNT(`user_id`) FROM `group_member_list` WHERE `user_id`='$user_id' AND `group_id`='$group_id'");
	       if (mysql_result($query,0)>=1){
		    echo "user already member of this group";
		    header('location:admin_panel.php');
	       }//end of external if
	       else{
		//First check if this group is member of any template
		$query2=mysql_query("SELECT COUNT(`group_id`) FROM `template_member_list` WHERE `group_id`='$group_id'");
		 //this condition true means the group is already member of templates, so find the group members and add them to each template member list and
		 //relevant task member list
		    if (mysql_result($query2,0)>=1){
			//add $user_id to relevant group first
			mysql_query("INSERT into `group_member_list` values($group_id,$user_id)");
			//find all template id this group is member of and add user id to relevant template id
			$template_list=mysql_query("SELECT `template_id` FROM `template_member_list` WHERE `group_id`='$group_id'");
			//add each user to the template member list table.
			while($template_list_row=mysql_fetch_assoc($template_list)){
			    //this is each individual template
			    $each_template=$template_list_row['template_id'];   
			    //add each template for each user to `template_member_list`
			    mysql_query("INSERT into `template_member_list` values($each_template,$group_id,$user_id)");
			    //then search each template_id in template_task_list and find corresponding tasks for each template and add users to those tasks
			    $task_list_query=mysql_query("SELECT `task_id` from `template_task_list` where `template_id`='$each_template'");
			    //add each task to users, who are the member of the following templates.
				while($task_list_row=mysql_fetch_assoc($task_list_query)){
				//this is each individual task
				$each_task=$task_list_row['task_id'];   
				//add each task for each user to `task_member_list`
				mysql_query("INSERT into `task_member_list` values($each_task,$user_id,$each_template)");
				}//end of template_task_list while
			}//end of template member list while
			header('location:admin_panel.php');
		    }//end of if
		    //this (if) condition false,means group is not a member of any template, so just add users to the group, and future template assignment will add all the
		    //users from this group to the template
		    else{
		    //User doesn't exist in this group so add the user to the group.
		    mysql_query("INSERT into `group_member_list` values($group_id,$user_id)");
		    //Now add the new added user to template and task member list if this group belongs to any template
		    header('location:admin_panel.php');
		    }//end of internal else
		}//end of external else
	    }//end of foreach
	}//end of function
		  
=======
    <?php
    
    //assign task--Supervisor can only do that.
    function assign_task($name,$desc){
	//INSERT to `task` table
	mysql_query("INSERT into `task` values('','$name','$desc',UNIX_TIMESTAMP(),'".$_SESSION['user_id']."')");
	header('location:admin_panel.php');
    }
	
    //assign Template--Supervisor can only do that.
    function assign_template($template_id,$userGroup){
       $group_user=array();
     foreach($userGroup as $each_entry){
	$query=mysql_query("Select COUNT(`group_id`) from `user_group` where `group_id`='$each_entry'");
	    if(mysql_result($query,0)<1){
		 //This condition false means $userGroup is individual users not group , so insert user id to`template_member_list` table
		    mysql_query("INSERT into `template_member_list` values($template_id,'',$each_entry)");
	    }else{
		//This condition ture means $userGroup is group , so find each group memeber and insert user id  and group id to`template_member_list` table
		    $query=mysql_query("SELECT `user_id` from `group_member_list` where `group_id`='$each_entry'");
		while($user_row=mysql_fetch_assoc($query)){
		    $group_user[]=array(
			'user_id'=>$user_row['user_id']
		    );//end of array
		}//end of while
	    mysql_query("INSERT into `template_member_list` values('$template_id','$each_entry',$group_user)");
	    }//end of else
		
	}//end of foreach
	header('location:admin_panel.php');
    }//end of function
    
    
    //assign Group--Supervisor can only do that.
    function assign_group($group_id,$user_list){
	   
	////INSERT to `group_member_list` table
	foreach($user_list as $user_id){
	    $query=mysql_query("SELECT COUNT(`user_id`) FROM `group_member_list` WHERE `user_id`='$user_id' AND `group_id`='$group_id'");
	
	    if (mysql_result($query,0)>=1){
	       echo "user already member of this group";
		 header('location:admin_panel.php');
	    }else{  
		mysql_query("INSERT into `group_member_list` values($group_id,$user_id)");
		header('location:admin_panel.php');
	    }
	}
	
    }   
	  
>>>>>>> 50b4e7f493f57b91503bf185cda7170d6792ff3c
    ?>