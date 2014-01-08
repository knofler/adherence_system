<?php

<<<<<<< HEAD
 //run query to find if current user is the creator of the supplied weekend id
      function template_check($template_id){
      $template_id=(int)$template_id;
      $query=mysql_query("SELECT COUNT(`template_id`) FROM `task_template` WHERE `template_id`=$template_id ");
      return (mysql_result($query,0)==1)?true:false;
  };

=======
>>>>>>> 50b4e7f493f57b91503bf185cda7170d6792ff3c
//retrieve task list from task table
function get_task(){
    $data=array();
    $query=mysql_query("SELECT * from `task`");
    while($query_row=mysql_fetch_assoc($query)){
     $data[]=array(
                      'task_id'=>$query_row['task_id'],
                      'task_name'=>$query_row['task_name'],
                       'task_desc'=>$query_row['task_desc'],
                      'task_create_time'=>$query_row['task_create_time'],
                      'task_creator'=>$query_row['task_creator']
                      );
    }
    return $data;
}

<<<<<<< HEAD
//pass user id and get the user name
function get_name($user_id){
$full_name=array();
    $query=mysql_query("SELECT `fname`,`lname` from `users` where `user_id`=$user_id");
    while($result_row=mysql_fetch_assoc($query)){
        $full_name[]=array(
          
          'fname'=>$result_row['fname'],
          'lname'=>$result_row['lname']
        );   
    }//end of while
        
    return $full_name;
}

//pass group id and get the user name
function get_group_name($group_id){
$group_name=array();
    $query=mysql_query("SELECT `group_name`,`group_desc` from `user_group` where `group_id`=$group_id");
    while($result_row=mysql_fetch_assoc($query)){
        $group_name[]=array(
          
          'group_name'=>$result_row['group_name'],
          'group_desc'=>$result_row['group_desc']
        );   
    }//end of while
        
    return $group_name;
}

//pass template id and get the template name
function get_template_name($template_id){
$template=array();
    $query=mysql_query("SELECT * from `task_template` where `template_id`=$template_id");
    while($result_row=mysql_fetch_assoc($query)){
        $template[]=array(
          'template_id'=>$result_row['template_id'],
          'template_name'=>$result_row['template_name'],
          'template_desc'=>$result_row['template_desc'],
          'template_create_time'=>$result_row['template_create_time'],
          'template_creator'=>$result_row['template_creator']
        );   
    }//end of while
        
    return $template;
}


//get template data from template table to use as data for  various form calculation and display results, similar function as gettemplate(), could be used interchangebly 
    function get_template_data($template_id){
      $template_id=(int)$template_id;
      $args=func_get_args();
      unset($args[0]);
      $fields='`'.implode('`, `',$args).'`';
      $query=mysql_query("SELECT $fields FROM `task_template` WHERE `template_id`='$template_id'");
      $query_result=mysql_fetch_assoc($query);
      foreach ($args as $field){
          $args[$field]=$query_result[$field];
      }
      return $args;
  }



//pass task id and get the task name
function get_task_name($task_id){
    $data=array();
    $query=mysql_query("SELECT * from `task` where `task_id`=$task_id");
    while($query_row=mysql_fetch_assoc($query)){
     $data[]=array(
                      'task_id'=>$query_row['task_id'],
                      'task_name'=>$query_row['task_name'],
                       'task_desc'=>$query_row['task_desc'],
                      'task_create_time'=>$query_row['task_create_time'],
                      'task_creator'=>$query_row['task_creator']
                      );
    }
    return $data;
}


//retrieve user task allocation list
function get_your_task($user_id){
    //find user task membership list
    $data=array();
    
     $task_list=mysql_query("SELECT `task_id`,`template_id` from `task_member_list` where `user_id`=$user_id");
     while($task_row=mysql_fetch_assoc($task_list)){
    
     $each_task=$task_row['task_id'];
     
    $query=mysql_query("SELECT * from `task` where `task_id`=$each_task");
    
        while($query_row=mysql_fetch_assoc($query)){
         $data[]=array(
                          'task_id'=>$query_row['task_id'],
                          'task_name'=>$query_row['task_name'],
                           'task_desc'=>$query_row['task_desc'],
                          'task_create_time'=>$query_row['task_create_time'],
                          'task_creator'=>$query_row['task_creator']
                          );//end of task array
        }//end of internal while
    }//end of outer while
    return $data;
}

=======
>>>>>>> 50b4e7f493f57b91503bf185cda7170d6792ff3c
//retrieve task list from task table
function get_user(){
    $data=array();
    $query=mysql_query("SELECT * from `users`");
    while($query_row=mysql_fetch_assoc($query)){
     $data[]=array(
                      'user_id'=>$query_row['user_id'],
                      'first_name'=>$query_row['fname'],
                      'last_name'=>$query_row['lname'],
                      'email'=>$query_row['email'],
                      'house'=>$query_row['house'],
                      'suburb'=>$query_row['suburb'],
                      'post_code'=>$query_row['post_code'],
                      'state'=>$query_row['state'],
                      'phone'=>$query_row['phone'],
                      'acc_create_time'=>$query_row['account_create_time']
                      );
    }
    return $data;
}

//retrieve group list from user_group table
function get_group(){
    $data=array();
    $query=mysql_query("SELECT * from `user_group`");
    while($query_row=mysql_fetch_assoc($query)){
     $data[]=array(
                      'group_id'=>$query_row['group_id'],
                      'group_name'=>$query_row['group_name'],
                       'group_desc'=>$query_row['group_desc'],
                      'group_create_time'=>$query_row['group_create_time'],
                      'group_creator'=>$query_row['group_creator']
                      );
    }
    return $data;
}


<<<<<<< HEAD
//retrieve template list from task_template table
=======
//retrieve template list from user_template table
>>>>>>> 50b4e7f493f57b91503bf185cda7170d6792ff3c
function get_template(){
    $data=array();
    $query=mysql_query("SELECT * from `task_template`");
    while($query_row=mysql_fetch_assoc($query)){
     $data[]=array(
                      'template_id'=>$query_row['template_id'],
                      'template_name'=>$query_row['template_name'],
                       'template_desc'=>$query_row['template_desc'],
                      'template_create_time'=>$query_row['template_create_time'],
                      'template_creator'=>$query_row['template_creator']
                      );
    }
    return $data;
}

<<<<<<< HEAD
//retrieve template member list from task_template table
function get_template_member($template_id){
  $data=array();
    $query=mysql_query("SELECT `group_id`,`user_id` from `template_member_list` where `template_id`=$template_id");
    while($query_row=mysql_fetch_assoc($query)){
     $data[]=array(
                      'group_id'=>$query_row['group_id'],
                      'user_id'=>$query_row['user_id']
                      );
    }
    return $data; 
}

//retrieve template member list from task_template table
function get_template_task($template_id){
  $data=array();
    $query=mysql_query("SELECT `task_id` from `template_task_list` where `template_id`=$template_id");
    while($query_row=mysql_fetch_assoc($query)){
     $data[]=array(
                      'task_id'=>$query_row['task_id']
                      );
    }
    return $data; 
}

//retrieve task member list from task_member_list table
function get_task_member($task_id){
  $data=array();
    $query=mysql_query("SELECT `user_id`,`template_id` from `task_member_list` where `task_id`=$task_id");
    while($query_row=mysql_fetch_assoc($query)){
     $data[]=array(
                     
                      'user_id'=>$query_row['user_id'],
                       'template_id'=>$query_row['template_id']
                      );
    }
    return $data; 
}


//retrieve task member list from task_member_list table
function get_group_member($group_id){
  $data=array();
    $query=mysql_query("SELECT `group_id`,`user_id` from `group_member_list` where `group_id`=$group_id");
    while($query_row=mysql_fetch_assoc($query)){
     $data[]=array(
                
                     'group_id'=>$query_row['group_id'],
                      'user_id'=>$query_row['user_id']
                      );
    }
    return $data; 
}
=======


////Create task divs
//function taskManage($status,$task_name,$task_time){
//    
//    mysql_query("INSERT into `status` values('','$status','$task_name')");
//    
//    $status_id=mysql_insert_id();
//    
//    mysql_query("INSERT into `adhere_transaction` values('','".$_SESSION['user_id']."','$status_id','$task_time')");
//}

>>>>>>> 50b4e7f493f57b91503bf185cda7170d6792ff3c

?>