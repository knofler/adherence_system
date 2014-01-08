<?php

//check get var set
if(!isset($_GET['template_id']) || empty($_GET['template_id']) || template_check($_GET['template_id']) === false){
    
    header('Location:admin_panel.php');
    exit();
}

 $template_id= $_GET['template_id'];
 //print_r($template_id);
 $template_data = get_template_data($template_id,$template_name,$template_desc);
 
 
 if(isset($_POST['template_name'],$_POST['template_description'])){
    
    $template_name=$_POST['template_name'];
    $template_desc=$_POST['template_description'];
  
    $errors=array();
    
    if(empty($template_name) || empty($template_desc)){
        
        $errors[]="Template name and description required";
    }else{
        
        if(strlen($template_name)>55 || strlen($template_desc)>255){
            
            $errors[]="One or more fields contains too many charecters"; 
        }
    }
    
    if (!empty($errors)){
        
        foreach ($errors as $error){
            
            echo $error ,'<br />';
        }
    }else{
        //echo "Hello I am here";
        edit_template($template_id,$template_name,$template_desc);
        header('Location:admin_panel.php');
        exit();
    }
 }
 ?>