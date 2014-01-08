<?php
include 'init.php';

if (logged_in()){
    header('location:index.php');
    exit();
}

include "/template/header.php" ;

?>
<!--This is left DIV,which is kept blank for design purpose-->
<div class="mainDiv" id="left"></div>

<!--This is Main Container DIV,which contains main HTML structures for this page.-->
<div class="mainDiv" id="container" >
    
  <!--//capture form input and pass into php function,in this case pass it to user_func  -->
  <?php
  
  if(isset($_POST['email'],$_POST['fname'],$_POST['pass1'])){
    
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
        $email=$_POST['email'];
        $address=$_POST['house'];
      $suburb=$_POST['suburb'];
      $post_code=$_POST['post_code'];
        $state=$_POST['state'];
      $phone=$_POST['phone'];
      $password=$_POST['pass1'];
     
     $errors=array();
     
     if (empty($fname) || empty($email) || empty($password)){
        
        $errors[]="All fields required";
     } else{
     
     if(user_exists($email)===true){
        
        $errors[]="Email address already exist,please try different account.";
     }
    } 
    if (!empty($errors)){
        
        foreach ($errors as $error){
            
            echo $error,'<br/>';
        }
     }else{
        
      $register= user_register($fname,$lname,$email,$address,$suburb,$post_code, $state,$phone,$password);   
     
     $_SESSION['user_id']=$register;
     echo $_SESSION['user_id'];
     header('location:index.php');
     exit();
     }
     
  }
  
?>    
    <div id="form">
        
    
<h3>Register Account</h3>

<article>
    
<form id="register" action="" method="post" autocomplete="off">
    <fieldset id="form_fieldset">
        <legend>Register</legend>
    
    <!--First Name-->
    <label for="fname">First name:</label>
    <input type="text" id="fame" name="fname" autofocus required /><br/>
    
    <!--Last Name-->
    <label for="fname">Last name:</label>
    <input type="text" id="fame" name="lname" autofocus required /><br/>
    
    <!--email-->
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required /><br/>
    
        <!--Address-->
    <label for="house">Address:</label>
    <input type="text" id="house" name="house" required /><br/>
    
          <!--Suburb-->
    <label for="suburb">Suburb:</label>
    <input type="text" id="suburb" name="suburb" required /><br/>
    
       <!--Post Code-->
    <label for="post_code">Post Code:</label>
    <input type="text" id="post_code" name="post_code" required /><br/>
    
          <!--State-->
    <label for="state">State:</label>
    <input type="text" id="state" name="state" required /><br/>
    
      <!--Phone-->
    <label for="phone">Phone:</label>
    <input type="phone" id="phone" name="phone" required /><br/>
    
    <!--password-->
    <label for="pass1">Password:</label>
    <input type="password" id="pass1" name="pass1" required nocache />
    <span id="strength"></span><br/>
    
    <!--Retype Password-->
    <label for="pass2">Retype:</label>
    <input type="password" id="pass2" name="pass2" required /><br/>
    <span id="match"></span><br/>
    
    <button id="submit_btn" type="submit">Register</button>
    
    
    </fieldset>
</form>

</article>
 
</div>
</div><!--End of container DIV-->


<!--This is Right DIV,which is kept blank for design purpose--> 
<div class="mainDiv" id="right"></div>

<!--This is the footer template that inludes JavaScripts and Ending of All HTML elements including Footer DIV-->
<?php include "/template/footer.php" ; ?>
