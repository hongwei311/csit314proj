<?php 
	
	/* function listProduct($sql){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "productdb";
		$dbtable = "producttable";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) 
		{ die("Connection failed: " . $conn->connect_error); }
	
		$sql = "SELECT * FROM $dbtable";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
		  // output data of each row
		  while($row = $result->fetch_assoc())
		  {
			echo $row["productid"] . $row["category"] . $row["brand"] . $row["manufactureyear"] . $row["characteristics"] . $row["status"] . $row["cost"] . $row["overduecost"];
		  }
		}
		else 
		{ echo "0 results"; }

	} */
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	

?>