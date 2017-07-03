 <?php
date_default_timezone_set("Asia/Kolkata");
define('DbHost', 'localhost');
define('DbUser', 'anvinfos_omshank');
define('DbPass', 'omshankar@123');
define('DbName', 'anvinfos_omshankar');
class functions
{
    function __construct()
    {
        session_start();
        mysql_connect(DbHost, DbUser, DbPass) or die('Could not connect: ' . mysql_error());
        mysql_select_db(DbName) or die('Could not connect: ' . mysql_error());
    }
    function query($q)
    {
        $sqlquery = mysql_query($q);
        return $sqlquery;
    }
	function CheckLogin($email,$password)
	{
		$sql="SELECT * FROM `admin` where `username`='$email' and `password`='$password'";
		$sqlquery=$this->query($sql);
		return $sqlquery;
	}
	
	function GetUserDeatils1()
	{
		$sql="select * from `Admin` where `id`='".$_SESSION['adminuserid']."'";
		$sqlquery=$this->query($sql);
		return $sqlquery;
	}
	function GetRecordByDate()
	{
		$date=date('d-m-Y');
		$sql="select * from `records` where `due_date`='".date('d-m-Y')."' or `due_date`='".date('d-m-Y', strtotime($date .' +1 day'))."'";
		$sqlquery=$this->query($sql);
		return $sqlquery;
	}
	function GetRecordBYid($id)
	{
		$sql="select * from `records` where `id`='$id'";
		$sqlquery=$this->query($sql);
		return $sqlquery;
	}
}
    