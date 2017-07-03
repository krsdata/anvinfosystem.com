<?php
include ('include/header.php'); 
include ('include/sidebar.php'); 
?>
<script src="js/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$('.alert1').fadeOut(5000);
});
</script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Search By Borrower</h1>
	  <form method="post" action="SearchByBrower?action=ByBrower" >
	  Enter Borrower Name: <input required  placeholder="Enter Borrower Name" type="text"  name="bname"  />
	  <button type="submit" class="btn btn-primary">Get Record</button>
	  </form>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Date</li>
      </ol>
    </section>

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
		<p class="alert alert-success alert1">Success! Record has been Deleted successfully.</p>
		<?php } ?>
		<?php if(isset($_REQUEST['msg']) && $_REQUEST['msg']=='editsuc') { ?>
		<br />
		<p class="alert alert-success alert1">Success! Record has been Updated successfully.</p>
		<?php } ?>
		<?php if(isset($_REQUEST['msg']) && $_REQUEST['msg']=='addsuc') { ?>
		<br />
		<p class="alert alert-success">Success! Country has been Added successfully.</p>
		<?php } ?>
          <!-- small box -->
          <table  class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S.No</th>
                  		  <th>Borrower Name</th>
				  <th>Lender Name</th>
				  
				  <th>Date</th>
				  <th>Due Date</th>
				  <th>Interest</th>
				  <th>Amount</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php
				if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'ByBrower') {
				 $sql="select * from `records` where `bname` like '%".$_REQUEST['bname']."%'";
				$data=$db->query($sql);
				//$data=$db->GetRecordByDate();
				$i=1;
				while($row=mysql_fetch_array($data))
				{
					
				?> 
                <tr id="<?php echo $row['id']; ?>">
                  <td><?php echo $i; ?></td>
                  
				  <td><?php echo $row['bname']; ?></td>
				  <td><?php echo $row['lname']; ?></td>
				  <td><?php echo $row['date']; ?>
				  </td> 
				  <td><?php echo $row['due_date']; ?></td>
				  <td><?php echo $row['interest']; ?></td>
				  <td><?php echo $row['amount']; ?></td>
				  <td>
				  <a href="EditRecord?id=<?php echo $row['id']; ?>"  class="btn btn-warning btn-xs" title="Edit Record"><i class="fa fa-edit"></i></a>
				  <a href="process/process.php?action=DeleteRecord&id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this Record?');" class="btn btn-danger btn-xs" title="Delete Record"><i class="fa fa-trash"></i></a>
				  <a href="Renew?id=<?php echo $row['id']; ?>"  class="btn btn-success btn-xs" title="Edit Record">Renew</a>
				  </td>
				  
                </tr>
				<?php 
				$i++;
				} } ?>
                </tbody>
              </table>
			  
        </div>
       </div>
	   </div>
      </div>
      <!-- /.row -->
      
    </section>
    <!-- /.content -->
  </div>
   
<?php
include ('include/footer.php'); 
?>