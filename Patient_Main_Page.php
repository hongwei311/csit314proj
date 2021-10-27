<?php
?>
<!DOCTYPE html>
<html>
<head>
<style>
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.CurrentPrescription {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.CurrentPrescription:hover {
  background-color: #4CAF50;
  color: white;
}

.PastPrescription {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.PastPrescription:hover {
    background-color: #4CAF50;
  color: white;
}

.SearchPrescription {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.SearchPrescription:hover {
    background-color: #4CAF50;
  color: white;
}
.Logout {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.Logout:hover {
  background-color: #008CBA;
  color: white;
}

</style>
</head>
<body>

<h1>Welcome Patient XXX</h1>

<p><a href="CurrentPrescription.html"><button class="button CurrentPrescription">CurrentPrescription</button></p></a></p>

<p><a href="PastPrescription.html"><button class="button PastPrescription">PastPrescription</button></a></p>

<p><a href="SearchPrescription.html"><button class="button SearchPrescription">SearchPrescription</button></a></p>

<p><a href="LOGOUT.html"><button class="button Logout">Logout</button></a></p>

</body>
</html>
