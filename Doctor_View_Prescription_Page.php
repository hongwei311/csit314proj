<?php
include_once("PrescriptionController.php");
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>View Prescription</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>

<body>

  <h1>Welcome, <?php echo $_SESSION['username'] ?> </h1>
  <p><a href="Doctor_Main_Page.php"><button class="button">Main Page</button></p></a></p>
  <h2>View Prescription</h2>
  <label>Select Prescription Type</label>&ensp;
  <form method="POST">
    <button type="submit" name="new" value="Not Collected">Not Collected</button>
    <button type="submit" name="past" value="Collected">Collected</button>
  </form>

  <?php

  if (isset($_POST['past'])) {
  ?>
    <table class="table table-bordered table-striped" style="text-align:left;" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th width="5%">PrescriptionId</th>
          <th width="10%">PrescriptionDetails</th>
          <th width="5%">PrescriptionStatus</th>
          <th width="5%">DoctorId</th>
          <th width="5%">PatientId</th>
          <th width="5%">PharmacistId</th>
        </tr>
      </thead>
      <tbody>
      <?php
      $PrescriptionControl = new PrescriptionControl();
      $prescriptiondetails = $PrescriptionControl->viewPrescription($_POST['past']);

      echo $prescriptiondetails['PrescriptionId'];
      
      for($i = 0; $i < count($userinformation); $i++) {
        echo "<tr>";
        echo "<td>" . $row['PrescriptionId'] . "</td>";
        echo "<td>" . $row['PrescriptionDetails'] . "</td>";
        echo "<td>" . $row['PrescriptionStatus'] . "</td>";
        echo "<td>" . $row['DoctorId'] . "</td>";
        echo "<td>" . $row['PatientId'] . "</td>";
        echo "<td>" . $row['PharmacistId'] . "</td>";
        echo "</tr>";
      }
    }
      ?>
      </tbody>
    </table>
    <?php

    if (isset($_POST['new'])) {
    ?>
      <table class="table table-bordered table-striped" style="text-align:left;" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="5%">PrescriptionId</th>
            <th width="10%">PrescriptionDetails</th>
            <th width="5%">PrescriptionStatus</th>
            <th width="5%">DoctorId</th>
            <th width="5%">PatientId</th>
            <th width="5%">PharmacistId</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $PrescriptionControl = new PrescriptionControl();
        $prescriptiondetails = $PrescriptionControl->viewPrescription($_POST['new']);
        // Attempt select query execution
        $conn = mysqli_connect("localhost", "root", "", "csit314");
        $sql = "SELECT * FROM prescription" . " where PrescriptionStatus ='"  . 'Not Collected' . "'";
        if ($result = $conn->query($sql)) {
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
              echo "<tr>";
              echo "<td>" . $row['PrescriptionId'] . "</td>";
              echo "<td>" . $row['PrescriptionDetails'] . "</td>";
              echo "<td>" . $row['PrescriptionStatus'] . "</td>";
              echo "<td>" . $row['DoctorId'] . "</td>";
              echo "<td>" . $row['PatientId'] . "</td>";
              echo "<td>" . $row['PharmacistId'] . "</td>";
              echo "</tr>";
            }
            // Free result set
            $result->free();
          } else {
            echo "<label class='question-text'>No records were found.</label>";
          }
        }
      }

        ?>
        </tbody>
      </table>
</body>

</html>