<?php

//Manage task end/start time in adherenece transaction table
function taskStart($task_id){ 
    mysql_query("INSERT into `adhere_transaction` values('','".$_SESSION['user_id']."','$task_id',UNIX_TIMESTAMP(),'')");
}

function taskEnd($task_id){
    $user_id=$_SESSION['user_id'];
    mysql_query("UPDATE `adhere_transaction` SET `end_time`=UNIX_TIMESTAMP() where `task_id`='$task_id' AND `user_id`='$user_id'");
}

?>