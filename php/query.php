<?php
  // Connect to MySQL
  $servername = "localhost";
  $username = "username";
  $password = "password";
  $dbname = "Query";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Get form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Insert data into MySQL
  $sql = "INSERT INTO qryTable (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

  if ($conn->query($sql) === TRUE) {
    echo "Query submitted successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close MySQL connection
  $conn->close();
?>
