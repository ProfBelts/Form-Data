<!DOCTYPE html>
<html>
<head>
  <title>Success Page</title>
</head>
<body>
  <h1>Form Submitted Successfully</h1>

  <?php
  // Retrieve form data
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];

  // Display submitted data
  echo "<p>First Name: $firstName</p>";
  echo "<p>Last Name: $lastName</p>";
  echo "<p>Date of Birth: $dob</p>";
  echo "<p>Gender: $gender</p>";
  ?>

</body>
</html>
