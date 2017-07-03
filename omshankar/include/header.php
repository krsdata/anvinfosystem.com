<?php
include ('functions.php'); 
$db= new functions();
if($_SESSION['adminuserid']=='')
{
	echo "<script>window.location = 'index.php'</script>";
}
/*$data1=$db->getloginuserdetails();
$q=mysql_fetch_array($data1);
$_SESSION['adminuserName']  = $q['name'];
$_SESSION['mob_no']  = $q['mob_no'];*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Omshankar</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
	<script src="js/jquery.min.js"></script>
    <script src="js/custom.js"></script>  
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
    <header class="main-header">
      <a href="dashboard.php" class="logo">
        <span class="logo-mini"><img src="../img/logo.png" width="50"></span>      
		<span class="logo-lg"><img src="../img/logo.png" width="130"></span>    
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">        
		  <span class="sr-only">Toggle navigation</span>     
		</a>      
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            
            
            <!-- User Account: style can be found in dropdown.less -->          
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">                      
			    <span class="hidden-xs"><?php echo $_SESSION['adminuserName']; ?></span>           
			  </a>            
              <ul class="dropdown-menu">
                <!-- User image -->              
                <li class="user-header">             
                  <p><?php echo $_SESSION['adminuserName']; ?> </p> 
				  <p><?php echo $_SESSION['email']; ?></p>
				  
                </li>
                <li class="user-footer">
                  <div class="pull-left">                  
				  <a href="loginprofile" class="btn btn-default btn-flat">Profile</a>                
				  </div>
                  <div class="pull-right">                 
				  <a href="logout" class="btn btn-default btn-flat">Sign out</a></div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->          
            <li>            
			<a href="logout" title="Logout" ><i class="fa fa-sign-out"></i></a>          </li>
          </ul>
        </div>
      </nav>
    </header> 
    
    <aside class="main-sidebar">
    
    <section class="sidebar">
    
    <div class="user-panel">
      <div class="pull-left image">          
	  <img src="img/user.jpg" class="img-circle" alt="User Image">        
	  </div>
      <div class="pull-left info">
        <p><?php echo $_SESSION['adminuserName']; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>        
      </div>
    </div>