<?php

//output buffering
ob_start();

//session_check
session_start();

//connect database
mysql_connect('localhost','root','testfbe') or die("Could not connect to host");
mysql_select_db('adherence') or die("Could not connect to database");


//include Album related functionsf

include 'func/user.func.php';
include 'func/create.func.php';
include 'func/assign.func.php';
include 'func/get.func.php';
<<<<<<< HEAD
include 'func/manage.func.php';
include 'func/edit.func.php';
=======
>>>>>>> 50b4e7f493f57b91503bf185cda7170d6792ff3c

?>