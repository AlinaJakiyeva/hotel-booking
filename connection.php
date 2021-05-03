<?php
class Connection{
var $host ="localhost";
	var $user="root";
	var $password="";
	var $name = "phpmyadmin";
	var $table="users";
	public $con;
	public $error;
	public function __construct()
	{
		$this->con = mysqli_connect($this->host, $this->user, $this->password, $this->name );
		if(!$this->con)
		{
			echo 'Database Connection Error' . mysqli_connect_error($this->con);
		}
	}
	
	public function inserting($table_name, $data)
	{
		$string = "INSERT INTO ".$table_name." (";
		$string .= implode(",", array_keys($data)) . ') VALUES (';
		$string .= "'" . implode("','", array_values($data)) . "')";
		if(mysqli_query($this->con, $string))
		{
			return true;
		}
		else
		{
			echo mysqli_error($this->con);
		}
	}
}
?>




