<!DOCTYPE html>
<html>
<head>
<!--
	<title>Patient Registration Form</title>
	<script>
		function validateForm() {
			var name = document.forms["patientForm"]["name"].value;
			var email = document.forms["patientForm"]["email"].value;
			var phone = document.forms["patientForm"]["phone"].value;
			var dob = document.forms["patientForm"]["dob"].value;
			var address = document.forms["patientForm"]["address"].value;
			var blood_group = document.forms["patientForm"]["blood_group"].value;

			// Check if all required fields are filled
			if (name == "" || email == "" || phone == "" || dob == "" || address == "" || blood_group == "") {
				alert("All required fields must be filled out");
				return false;
			}

			// Check if phone number contains only numbers
			if (!/^[0-9]+$/.test(phone)) {
				alert("Phone number must contain only numbers");
				return false;
			}

			// Check if blood group is valid
			if (!/^A|B|AB|O[+-]$/.test(blood_group)) {
				alert("Blood group must be a valid type (A, B, AB, or O) followed by a valid Rh factor (+ or -)");
				return false;
			}
		}
	</script> -->
</head>
<body>
	<h2>Patient Registration Form</h2>
	<!--
	<form name="patientForm" method="post" action="" onsubmit="return validateForm()">
		<label for="name">Name:</label>
		<input type="text" name="name" required><br><br>
		
		<label for="email">Email:</label>
		<input type="email" name="email" required><br><br>
		
		<label for="phone">Phone:</label>
		<input type="text" name="phone" required><br><br>
		
		<label for="dob">Date of Birth:</label>
		<input type="date" name="dob" required><br><br>
		
		<label for="gender">Gender:</label>
		<input type="radio" name="gender" value="male" checked>Male
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="other">Other<br><br>
		
		<label for="address">Address:</label>
		<textarea name="address" rows="5" cols="30" required></textarea><br><br>
		
		<label for="blood_group">Blood Group:</label>
		<input type="text" name="blood_group" required><br><br>
		
		<label for="medical_history">Medical History:</label>
		<textarea name="medical_history" rows="5" cols="30"></textarea><br><br>
		
		<input type="submit" name="submit" value="Submit">
	</form> -->
	
	<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $blood_group = $_POST['blood_group'];

    // Store data in database
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO patients (name, email, phone, dob, address, blood_group) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $phone, $dob, $address, $blood_group);

    // Execute statement
    if ($stmt->execute() === TRUE) {
        echo "Data stored successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>

</body>
</html>

