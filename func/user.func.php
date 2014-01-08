<?php

function logged_in(){
    
    return isset($_SESSION['user_id']);
}

function login_check($email,$password){
    
   $email=mysql_real_escape_string($email);
   $login_query=mysql_query("SELECT COUNT(`user_id`) as `count`,`user_id` FROM `users` WHERE `email`='$email' AND `password`='".md5($password)."'");
   return (mysql_result($login_query,0)==1)? mysql_result($login_query,0,'user_id'): false;
}

function user_data(){
    
    //take any data as argument and placed in to $args array
    $args=func_get_args();
    
    //use implode function to create SQL keyword for search
    $fields='`'.implode('`, `', $args).'`';
    
    $query=mysql_query("SELECT $fields FROM `users` WHERE `user_id`=" . $_SESSION['user_id']);
    
    $query_result=mysql_fetch_assoc($query);
    
    foreach ($args as $field){
        
        $args[$field] = $query_result[$field];
    }
    
 return $args;
}


 function user_register($fname,$lname,$email,$address,$suburb,$post_code,$state,$phone,$password){
    
    $fname=mysql_real_escape_string($fname);
   $lname= mysql_real_escape_string($lname);
   $email= mysql_real_escape_string($email);
   $address= mysql_real_escape_string($address );
   $suburb= mysql_real_escape_string($suburb);
   $post_code= mysql_real_escape_string($post_code);
   $state= mysql_real_escape_string($state);
   $phone= mysql_real_escape_string($phone);
   $password= mysql_real_escape_string(htmlentities($password));
   
   mysql_query("INSERT INTO `users` VALUES ('','$fname','$lname','$email','$address','$suburb','$post_code','$state','$phone',UNIX_TIMESTAMP(),'".md5($password)."')");
   return mysql_insert_id();
}






function user_exists($email){

   $email= mysql_real_escape_string($email);    
   $query=mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `email`='$email'");
   return (mysql_result($query,0)==1) ? true : false;
}
?>