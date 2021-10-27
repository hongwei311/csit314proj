<?php
    include("LoginController.php");
      session_start();
      $_SESSION = array();
      session_destroy();
?>
<html>


<body>
    <form id="LoginPageForm" method="POST" action="LoginController.php">
        <label>Username</label>&ensp;<input type="text" name="username" placeholder="Username"> <br>
        <label>Password</label>&ensp;<input type="password" name="password" placeholder="Password"> <br>
        <label>User Type</label>&ensp;<select name = "usertype" id="usertype">
            <option value = "Admin" >Admin</option>
            <option value = "Doctor" >Doctor</option>
            <option value = "Patient" >Patient</option>
            <option value = "Pharmacist" >Pharmacist</option>
        </select> <br>
        <button type="submit" name="submit" value="Login">Login</button>
    </form> 
</body>

</html>
