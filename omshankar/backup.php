<?php
define('DbHost', 'localhost');
define('DbUser', 'anvinfos_omshank');
define('DbPass', 'omshankar@123');
define('DbName', 'anvinfos_omshankar');
mysql_connect(DbHost, DbUser, DbPass) or die('Could not connect: ' . mysql_error());
mysql_select_db(DbName) or die('Could not connect: ' . mysql_error());
header("Content-Type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=spreadsheet.xls");
$sel="select * from `records` order by date";
$result=mysql_query($sel);
$schema_insert_rows='';
for($i = 1; $i < mysql_num_fields($result)-1; $i++)
{
$schema_insert_rows.=mysql_field_name($result,$i) . "\t";
}
echo $schema_insert_rows."\n";
$schema_insert_rows1='';
while($row=mysql_fetch_array($result))
{
	
		$schema_insert_rows1.= $row['lname'] . "\t" . $row['bname'] . "\t" . $row['date'] . "\t" .$row['due_date'] .  "\t" .$row['interest']. "\t" .$row['amount']. "\t" ."\n";
	
}
echo $schema_insert_rows1;

?>