<?php


class User{
    private $UserId;
    private $Username;
    private $Password;
    private $UserProfile;

	 
	
	
	function setUserId($UserId){
        $this -> UserId = $UserId;
    }

    function getUserId(){
        return $this -> UserId;
    }
	
    function setUsername($Username){
        $this -> Username = $Username;
    }

    function getUsername(){
        return $this -> Username;
    }

    function setPassword($Password){
        $this -> Password = $Password;
    }

    function getPassword(){
        return $this -> Password;
    }

    function setUserProfile($UserProfile){
        $this -> UserProfile = $UserProfile;
    }

    function getUserProfile(){
        return $this -> UserProfile;
    }

    function validateLogin($Username, $Password)
    {
        $TableName = "useraccount";
        $conn = mysqli_connect("localhost","root","","csit314");
		
        $sql = "SELECT UserId, UserName, Password, UserProfile FROM useraccount WHERE UserName = ?";
        $qRes = @mysqli_query($conn, $sql);
		
        if($qRes === FALSE)
        {
            echo "<p>* Unable to login. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn) . "</p>";
			$validation = array("","","","");
            return $validation;
		}
        else
        {
			$Row = mysqli_fetch_assoc($qRes);
            $validation = array($Row["UserId"],$Row["UserName"],$Row["Password"],$Row["UserProfile"]);
            return $validation;
        }
    }

    function add($Username, $Password, $UserProfile)
    {       
        $TableName = "useraccount";
        $conn = mysqli_connect("localhost","root","","csit314");
        
        $sql = "INSERT INTO $TableName (UserName, Password, UserProfile)" .
        " VALUES ('$Username', '$Password', '$UserProfile')";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to add. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
        }
        else
        {
            return $validation = true;
        }

    }   
    
    function search($UserId)
    {
        $TableName = "useraccount";
        $conn = mysqli_connect("localhost","root","","csit314");
        
        $sql = "SELECT * FROM $TableName" . " where UserId ='" . $UserId . "'";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $userdetails = array("","","","");
        }
        else
        {
            $Row = mysqli_fetch_assoc($qRes);
            $userdetails = array($Row["UserId"],$Row["UserName"],$Row["Password"],$Row["UserProfile"]);
            return $userdetails;
        }
    }

    function update($UserId, $Username, $Password, $UserProfile)
    {
        $TableName = "useraccount";
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "UPDATE $TableName 
                SET UserName = '$Username', Password = '$Password', UserProfile = '$UserProfile' 
                WHERE UserId = $UserId";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $validation = false;
        }
        else
        {
            // printf("Affected rows (UPDATE): %d\n", $conn->affected_rows);
            return $validation = true;
        }
    }
	
	function view()
    {
        $TableName = "useraccount";
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "SELECT * FROM $TableName";
        $qRes = @mysqli_query($conn, $sql);
        if($qRes === FALSE)
        {
            echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
            return $userdetails = array("","","","");
        }
        else
        {
            $userdetails=array();
            while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
            {
                if(empty($userdetails))
                {
                    $userdetails=$Row;
                }
                else array_push($userdetails,$Row);
            }
            
            return $userdetails;
        }
	}
	
		function viewFullDoctorDetails()
		{
			
			$conn = mysqli_connect("localhost","root","","csit314");

			$sql = "SELECT * FROM fulldoctor";
			$qRes = mysqli_query($conn, $sql);
			
			if($qRes === FALSE)
			{
				echo "<p>* Unable to search. Error code " . mysqli_errno($conn). " : " . mysqli_error($conn);
				return $validation = false;
			}
			else
			{   
                $userdetails=array();
                while (($Row = mysqli_fetch_assoc($qRes)) != FALSE)
                {
                    if(empty($userdetails))
                    {
                        $userdetails=$Row;
                    }
                    else array_push($userdetails,$Row);
                }
            
            return $userdetails;
				
			}
			
		}
}
	
	
	

class Doctor extends User

{
	public function approveAcc($userid)
	{
		$newdb = new db();

		$newdb2 = $newdb->connect();

		$role = 2;
		$query = $newdb2->prepare("update role set roleType=? WHERE userID=?") ;
		$query->bind_param("ii",$role,$userid);
		
		if($query->execute())
		{
			echo "<script>alert('Account has been approved!') </script>";

			echo '<meta http-equiv="Refresh" content="2; url=adminapprove.php">';
				//exit();
		}
		else
		{

			echo 'failed';
		}
	}
	
	
}



?>
