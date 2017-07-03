<?php
include ('include/header.php'); 
include ('include/sidebar.php'); 
?>
<script>
$(document).ready(function(){
	$('.alert1').fadeOut(5000);
});
</script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Renew Records
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Renew</li>
      </ol>
    </section>
<?php $data=$db->GetRecordBYid($_REQUEST['id']);
	$row=mysql_fetch_array($data);
 ?>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	  <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              
            </div>
        <div class="box-body">
		<?php if(isset($_REQUEST['msg']) && $_REQUEST['msg']=='Renew') { ?>
		<br />
		<p class="alert alert-success alert1">Success! Record has been Renewd successfully.</p>
		<?php } ?>
		<?php if(isset($_REQUEST['msg']) && $_REQUEST['msg']=='ensuc') { ?>
		<br />
		<p class="alert alert-success">Success! Country has been Enabled successfully.</p>
		<?php } ?>
		<?php if(isset($_REQUEST['msg']) && $_REQUEST['msg']=='delsuc') { ?>
		<br />
		<p class="alert alert-success">Success! Country has been Deleted successfully.</p>
		<?php } ?>
		<?php if(isset($_REQUEST['msg']) && $_REQUEST['msg']=='editsuc') { ?>
		<br />
		<p class="alert alert-success">Success! Record has been Updated successfully.</p>
		<?php } ?>
		<?php if(isset($_REQUEST['msg']) && $_REQUEST['msg']=='suc') { ?>
		<br />
		<p class="alert alert-success alert1">Success! Record has been Added successfully.</p>
		<?php } ?>
			<!-- form -->
				 <form class="form-horizontal" method="post" action="process/process.php?action=RnewRecord&id=<?php echo $row['id']; ?>">
				  <div class="form-group">
					<label class="control-label col-sm-2" for="email">Lender Name</label>
					<div class="col-sm-10">
					  <input type="text" required readonly value="<?php echo $row['lname']; ?>" class="form-control" name="lname" placeholder="Lender Name">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Borrower Name</label>
					<div class="col-sm-10">
					  <input type="text" name="bname" readonly value="<?php echo $row['bname']; ?>" required class="form-control" placeholder="Borrower Name">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-2" for="pwd"> Due Date</label>
					<div class="col-sm-10">
					  <input type="text" id="datepick" readonly value="<?php echo $row['due_date']; ?>" data-date-format="dd-mm-yyyy"  name="date" required class="form-control" placeholder="Date">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Month</label>
					<div class="col-sm-10">
					  <select required onchange="return DueDate($(this).val());" name="month">
						<option value='' >Select A Month</option>
						<?php 
							for($i=0;$i<=12;$i++)
							{ ?>
							<option <?php if($row['month']==$i){echo "selected=selected"; } ?> ><?php echo $i; ?></option>	
						<?php	}
						?>
					  </select> 
					  <input type="text" value="<?php echo $row['due_date']; ?>" readonly  id="due"  name="due_date" class="" required />
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Interest</label>
					<div class="col-sm-10">
					  <input type="text"  name="interest" readonly value="<?php echo $row['interest']; ?>" required class="form-control" placeholder="Interest">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-2"  for="pwd">Amount</label>
					<div class="col-sm-10">
					  <input type="text"  name="amount" readonly value="<?php echo $row['amount']; ?>" required class="form-control" placeholder="Amount">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-primary">Renew</button>
					</div>
				  </div>
				</form>
			<!-- end form -->
          
        </div>
       </div>
	   </div>
      </div>
      <!-- /.row -->
      
    </section>
    <!-- /.content -->
  </div>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepick155" ).datepicker();
  } );
   </script>
<?php
include ('include/footer.php'); 
?>