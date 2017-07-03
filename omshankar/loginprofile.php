<?php
include ('include/header.php'); 
include ('include/sidebar.php'); 
$data=$db->GetUserDeatils1();
$q=mysql_fetch_array($data);

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile Settings
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile Settings</li>
      </ol>
	    
		
		<?php if(isset($_REQUEST['msg']) && $_REQUEST['msg']=='suc') { ?>
		<br />
		<p class="alert alert-success">Success! Profile has been updated successfully.</p>
		<?php } ?>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
		<div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Password Settings</h3>
            </div>
           
			<p class="alert alert-success" id="passsuc" style="display:none;">Success! Password has been changed successfully.</p>
			<p class="alert alert-danger" id="passerror" style="display:none;"></p>
			
            <form class="form-horizontal" id="newpassform" method="post" onsubmit="return chnagepassword();">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Old Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="old" id="old" placeholder="Old Password">
					<input type="hidden"  id="oldpass" value="<?php echo $q['password']; ?>">
					<p id="olderror" style="display:none;color:red;">Error! Old password does not exits.</p>
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">New Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="new" id="new" placeholder="New Password">
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Confirm Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="cnew" id="cnew" placeholder="Confirm Password">
					<p id="cnewerror" style="display:none;color:red;">Error! Confirm Password does not match.</p>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content --> 
</div>
<?php
include ('include/footer.php'); 
?>