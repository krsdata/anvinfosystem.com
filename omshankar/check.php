<?php
define('DbHost', 'localhost');
define('DbUser', 'anvinfos_omshank');
define('DbPass', 'omshankar@123');
define('DbName', 'anvinfos_omshankar');
mysql_connect(DbHost, DbUser, DbPass) or die('Could not connect: ' . mysql_error());
mysql_select_db(DbName) or die('Could not connect: ' . mysql_error());
	$i=1;
	 $sql="select * from `records` where `date1`='".date('d-m-Y')."' order by date";
	$sqlquery=mysql_query($sql);
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
		$to = "infodeveloper10@gmail.com";
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
	
   ?>