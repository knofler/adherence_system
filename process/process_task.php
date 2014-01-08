<?php

 //Process task functions and forms

 //Grab task name and task start and end data
 
$task_id=$_POST['task_id'];
$task_start=$_POST['task_start'];
$task_end=$_POST['task_end'];

echo $task_id;

if (isset($task_start)){
    taskStart($task_id);
}elseif(isset($task_end)){
     taskEnd($task_id);
}

?>