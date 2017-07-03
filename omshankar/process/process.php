<?php
include('../include/functions.php');
$db = new functions();
if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'Dologin') {
  
        $username  = mysql_real_escape_string($_POST['username']);
        $password  = $_POST['password'];
        $sqlquery  = $db->CheckLogin($username, $password); 
        $countuser = mysql_num_rows($sqlquery);
        $ro        = mysql_fetch_array($sqlquery);
        
        if ($countuser > 0) { 
                $_SESSION['adminuserid']               = $ro['id'];
                $_SESSION['adminuserName']             = $ro['name'];
				$_SESSION['email']             		   = $ro['email'];
				$_SESSION['type']             		   = $ro['type'];
                echo "1";
            
            }
         else { 
           
            
            echo "0";
        }
    
    
} 

else if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'Changepassword') {
	$sql="UPDATE admin SET `password`='".$_REQUEST['pass']."' where `id`= '".$_SESSION['adminuserid']."'";
	$sqlquery=$db->query($sql);
	echo "1";
}
else if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'AddRecord') {
	 $sql="insert into `records` set `lname`='".$_REQUEST['lname']."', `bname`='".$_REQUEST['bname']."', `date`='".$_REQUEST['date']."', `due_date`='".$_REQUEST['due_date']."', `month`='".$_REQUEST['month']."', `interest`='".$_REQUEST['interest']."', `amount`='".$_REQUEST['amount']."', `date1`='".date('d-m-Y')."'";
	$sqlquery=$db->query($sql);
	/*$to = "vinaybhalika@icloud.com,infodeveloper10@gmail.com,vaibhavdeveloper2014@gmail.com";
				$from = "info@anvinfosystem.com";
				$headers ="From: $from\n";
				$headers .= "MIME-Version: 1.0\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1 \n";
				$subject ="New Record!";
				$msg = '<body style="margin:0px;">
						<table style="padding:0;width:100%!important;background:#f1f1f1;margin:0; padding:30px 0px;" cellspacing="0" cellpadding="8" border="0">
						  <tbody>
							<tr>
							  <td valign="top"><table style="border-radius:4px;border:1px #FFE1CC solid; background:#fff" cellspacing="0" cellpadding="0" border="0" align="center">
								  <tbody>
									<tr>
									  <td colspan="3" height="6"></td>
									</tr>
									 
									<tr>
									  <td><table style="line-height:25px" cellspacing="0" cellpadding="0" border="0" align="center">
										  <tbody>
											<tr>
											  <td colspan="3" height="30"></td>
											</tr>
											<tr>
											  <td width="36"></td>
											  <td style="color:#444444;border-collapse:collapse;font-size:11pt;font-family:proxima_nova,Open Sans,Lucida Grande,Segoe UI,Arial,Verdana,Lucida Sans Unicode,Tahoma,Sans Serif;max-width:454px" width="454" valign="top" align="left">Welcome<br>
											  <p class="text-center">New Record has been added..</p> 
												<br>
												<p><b>Lender Name:- </b>'.$_REQUEST['lname'].'</p>
												<p><b>Borrower Name:- </b>'.$_REQUEST['bname'].'</p>
												<p><b>Date:- </b>'.$_REQUEST['date'].'</p>
												<p><b>Due Date:- </b>'.$_REQUEST['due_date'].'</p>
												<p><b>Interest:- </b>'.$_REQUEST['interest'].'</p>
												<p><b>Amount:- </b>'.$_REQUEST['amount'].'</p>
											  <td width="36"></td>
											</tr>
											<tr>
											  <td colspan="3" height="36"></td>
											</tr>
										  </tbody>
										</table></td>
									</tr>
								  </tbody>
								</table>
								<table cellspacing="0" cellpadding="0" border="0" align="center">
								  <tbody>
									<tr> 
									  <td height="10"></td>
									</tr>
									<tr>
									  <td style="padding:0;border-collapse:collapse"><table cellspacing="0" cellpadding="0" border="0" align="center">
										  <tbody>
											<tr style="color:#a8b9c6;font-size:11px;font-family:proxima_nova,Open Sans,Lucida Grande,Segoe UI,Arial,Verdana,Lucida Sans Unicode,Tahoma,Sans Serif">
											  <td width="400" align="left"></td>
											  <td width="128" align="right">&copy; 2017 Omshanker</td>
											</tr>
										  </tbody>
										</table></td>
									</tr>
								  </tbody>
								</table></td>
							</tr>
						  </tbody>
						</table>
						</body>';
			mail($to,$subject,$msg,$headers); */
			echo "<script>window.location = '../AddRecord?msg=suc'</script>";
}
else if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'DeleteRecord') {
	$sql="delete from `records` where `id`='".$_REQUEST['id']."'";
	$sqlquery=$db->query($sql);
	echo "<script>window.location = '../BorrowList?msg=delsuc'</script>";
	
	
}
else if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'EditRecord') {
	  $sql="update `records` set `lname`='".$_REQUEST['lname']."', `bname`='".$_REQUEST['bname']."', `interest`='".$_REQUEST['interest']."', `amount`='".$_REQUEST['amount']."' where `id`='".$_REQUEST['id']."'";
	$sqlquery=$db->query($sql);
	echo "<script>window.location = '../EditRecord?id=".$_REQUEST['id']."&msg=editsuc'</script>";
	
}
else if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'RnewRecord') {
	  $sql="update `records` set `lname`='".$_REQUEST['lname']."', `bname`='".$_REQUEST['bname']."', `interest`='".$_REQUEST['interest']."', `date`='".$_REQUEST['date']."', `due_date`='".$_REQUEST['due_date']."', `month`='".$_REQUEST['month']."', `amount`='".$_REQUEST['amount']."' where `id`='".$_REQUEST['id']."'";
	$sqlquery=$db->query($sql);
	echo "<script>window.location = '../Renew?id=".$_REQUEST['id']."&msg=Renew'</script>";
	
}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'ByDate') {
	$sql="select * from `records` where date BETWEEN '".$_REQUEST['from']."' AND '".$_REQUEST['to']."'";
	$sqlquery=$db->query($sql);
	echo "<script>window.location = '../searchBydate'</script>";
}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'CronSet') {
	$date=date('d-m-Y');
	$sql="select * from `records` where `due_date`='".date('d-m-Y', strtotime($date .' -2 day'))."'";
	$sqlquery=$db->query($sql);
	if(mysql_num_rows($sqlquery)>0)
	{
	while($row=mysql_fetch_array($sqlquery))
	{
		$to = "infodeveloper10@gmail.com,vaibhavdeveloper2014@gmail.com,vinaybhalika@icloud.com";
				$from = "info@anvinfosystem.com";
				$headers ="From: $from\n";
				$headers .= "MIME-Version: 1.0\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1 \n";
				$subject ="Record Expire!";
				$msg = '<body style="margin:0px;">
						<table style="padding:0;width:100%!important;background:#f1f1f1;margin:0; padding:30px 0px;" cellspacing="0" cellpadding="8" border="0">
						  <tbody>
							<tr>
							  <td valign="top"><table style="border-radius:4px;border:1px #FFE1CC solid; background:#fff" cellspacing="0" cellpadding="0" border="0" align="center">
								  <tbody>
									<tr>
									  <td colspan="3" height="6"></td>
									</tr>
									 
									<tr>
									  <td><table style="line-height:25px" cellspacing="0" cellpadding="0" border="0" align="center">
										  <tbody>
											<tr>
											  <td colspan="3" height="30"></td>
											</tr>
											<tr>
											  <td width="36"></td>
											  <td style="color:#444444;border-collapse:collapse;font-size:11pt;font-family:proxima_nova,Open Sans,Lucida Grande,Segoe UI,Arial,Verdana,Lucida Sans Unicode,Tahoma,Sans Serif;max-width:454px" width="454" valign="top" align="left">Welcome<br>
											  <p class="text-center">Your Record Has been Expire After Two days Please Renew It.</p> 
												<br>
												<p><b>Lender Name:- </b>'.$row['lname'].'</p>
												<p><b>Borrower Name:- </b>'.$row['bname'].'</p>
												<p><b>Date:- </b>'.$row['date'].'</p>
												<p><b>Due Date:- </b>'.$row['due_date'].'</p>
												<p><b>Interest:- </b>'.$row['interest'].'</p>
												<p><b>Amount:- </b>'.$row['amount'].'</p>
											  <td width="36"></td>
											</tr>
											<tr>
											  <td colspan="3" height="36"></td>
											</tr>
										  </tbody>
										</table></td>
									</tr>
								  </tbody>
								</table>
								<table cellspacing="0" cellpadding="0" border="0" align="center">
								  <tbody>
									<tr> 
									  <td height="10"></td>
									</tr>
									<tr>
									  <td style="padding:0;border-collapse:collapse"><table cellspacing="0" cellpadding="0" border="0" align="center">
										  <tbody>
											<tr style="color:#a8b9c6;font-size:11px;font-family:proxima_nova,Open Sans,Lucida Grande,Segoe UI,Arial,Verdana,Lucida Sans Unicode,Tahoma,Sans Serif">
											  <td width="400" align="left"></td>
											  <td width="128" align="right">&copy; 2017 Omshanker</td>
											</tr>
										  </tbody>
										</table></td>
									</tr>
								  </tbody>
								</table></td>
							</tr>
						  </tbody>
						</table>
						</body>';
			mail($to,$subject,$msg,$headers);
	}
	}
}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'CronSet1') {
	$i=1;
	 $sql="select * from `records` where `date1`='".date('d-m-Y')."' order by date";
	$sqlquery=$db->query($sql);
	if(mysql_num_rows($sqlquery)>0)
	{
		$html='';
		while($row=mysql_fetch_array($sqlquery))
		{
		   $html .= "<tr><td>".$i."</td><td>".$row['lname']."</td>
		   <td>".$row['bname']."</td>
		   <td>".$row['date']."</td>
		   <td>".$row['due_date']."</td>
		   <td>".$row['interest']."</td>
		   <td>".$row['amount']."</td>
		   </tr>";
		   $i++;
		}
		$to = "infodeveloper10@gmail.com,vaibhavdeveloper2014@gmail.com,vinaybhalika@icloud.com";
				$from = "info@anvinfosystem.com";
				$headers ="From: $from\n";
				$headers .= "MIME-Version: 1.0\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1 \n";
				$subject ="Today Records!";
				$msg = '<body style="margin:0px;">
				<h1>Welcome</h1>
				<h1>Today Records List</h1>
						<table style="padding:0;width:100%!important;background:#f1f1f1;margin:0; padding:30px 0px;" cellspacing="0" cellpadding="8" border="0">
						  <tbody>
							<tr>
							  <td valign="top"><table style="border-radius:4px;border:1px #FFE1CC solid; background:#fff" cellspacing="10" cellpadding="5" border="0" align="center">
								  <tbody>
									<tr>
									  <td colspan="3" height="6"></td>
									</tr>
									 
									<tr>
									  <td><table style="line-height:25px" cellspacing="10" cellpadding="5" border="0" align="center">         
									  <tr>
											  
											       
											  </td>
											  </tr>                                    
										 	 <tbody>
											<tr>
											<th>S. NO</th>
											 <th>Lender Name</th>
											 <th>Borrower Name</th>
											 <th>Date</th>
											 <th>Due Date</th>
											 <th>Interest</th>
											 <th>Amount</th>
								      			</tr>'.$html.'<tr>
											  <td colspan="3" height="36"></td>
											</tr>
										  </tbody>
										</table></td>
									</tr>
								  </tbody>
								</table>
								<table cellspacing="0" cellpadding="0" border="0" align="center">
								  <tbody>
									<tr> 
									  <td height="10"></td>
									</tr>
									<tr>
									  <td style="padding:0;border-collapse:collapse"><table cellspacing="0" cellpadding="0" border="0" align="center">
										  <tbody>
											<tr style="color:#a8b9c6;font-size:11px;font-family:proxima_nova,Open Sans,Lucida Grande,Segoe UI,Arial,Verdana,Lucida Sans Unicode,Tahoma,Sans Serif">
											  <td width="400" align="left"></td>
											  <td width="128" align="right">&copy; 2017 Omshanker</td>
											</tr>
										  </tbody>
										</table></td>
									</tr>
								  </tbody>
								</table></td>
							</tr>
						  </tbody>
						</table>
						</body>';
			mail($to,$subject,$msg,$headers);
	}
}
?>













