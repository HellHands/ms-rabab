<?php 
		
	
class Functions{

	private $result;
	public $db_username = 'pallu';
	public $db_password = 'mahesh';
	public $db_database = 'consoltest';
	public $db_host = 'localhost';	
	public $conn;	
	
	function __construct(){	
		$this->conn = new mysqli($this->db_host, $this->db_username, $this->db_password, $this->db_database);	
		if ($this->conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 	
	}

	public function show_404()
	{
		header('location: 404.php');
	}

	public function get_user($username = NULL, $password = NULL)
	{		
		$pass = md5($password);	
		
		echo $sql = 'SELECT * FROM android_users WHERE username = "'.$username.'" AND password = "'.$pass.'"';
		echo $result = $this->conn->query($sql);

		if ($result->num_rows > 0) {
		     
		     $response["user"] = array();

		     while($row = $result->fetch_assoc()) {
		        
		        $user             = array();
				$user["id"]       = $row["id"];
				$user["username"] = $row["username"];
				$user['fname']    = $row['fname'];
				$user['lname']    = $row['lname'];

				array_push($response["user"], $user);
			        		     
		     }
		     $response["success"] = 1;
		     echo json_encode($response);

		} else {
		    $response["success"] = 0;
		    $response["message"] = "No user found!";
		 	    
		    echo json_encode($response);
		}
//box-shadow: 0 10px 9px rgba(0,0,0,.1);
				
	}

	public function say_hello($username = NULL)
	{
		$response["output"] = "Hello " .$username;
		echo json_encode($response);
	}
}

?>