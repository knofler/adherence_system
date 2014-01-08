<?php
include 'init.php';

$task_name=$_POST['task_name'];
$task_status=$_POST['task_status'];
$task_start=$_POST['task_start'];
$task_end=$_POST['task_end'];

if (isset($task_start)){
    
    taskManage($task_status,$task_name,$task_start);
}else{
     taskManage($task_status,$task_name,$task_end);
}


//echo $task_name,' ',$task_start, ' ',$task_end;


?>