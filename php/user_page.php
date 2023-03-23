<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:user_page.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>


   
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/user_page.css">

</head>
<body>
   
<!--
   <div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>Register for Booking your A</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

-->

<h1>Your registrered !</h1>
    <p>Thank you for scheduling your appointment with Dr. [Doctor Name] at [Clinic Name]. Your appointment is confirmed for [Date] at [Time]. Please note that you will need to fast for 8 hours prior to your appointment time if you have chosen to take a blood test. You may drink water and take any regular medications as prescribed. If you have any questions or concerns, please do not hesitate to contact us at [Clinic Phone Number]. We look forward to serving you.

    </p>
    
    <section id="schedule">
  <div class="container">
    <h2>Doctors Schedule</h2>
    <table>
      <thead>
        <tr>
          <th>Doctor</th>
          <th>Specialty</th>
          <th>Monday</th>
          <th>Tuesday</th>
          <th>Wednesday</th>
          <th>Thursday</th>
          <th>Friday</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Dr. Niruta Bhattarai</td>
          <td>Cardiology</td>
          <td>9:00 AM - 12:00 PM</td>
          <td>1:00 PM - 5:00 PM</td>
          <td>9:00 AM - 12:00 PM</td>
          <td>1:00 PM - 5:00 PM</td>
          <td>Off</td>
        </tr>
        <tr>
          <td>Dr. Pranav Adhikari</td>
          <td>Dermatology</td>
          <td>1:00 PM - 5:00 PM</td>
          <td>9:00 AM - 12:00 PM</td>
          <td>Off</td>
          <td>1:00 PM - 5:00 PM</td>
          <td>9:00 AM - 12:00 PM</td>
        </tr>
        <tr>
          <td>Dr. Ram Shah</td>
          <td>Neurology</td>
          <td>9:00 AM - 12:00 PM</td>
          <td>Off</td>
          <td>1:00 PM - 5:00 PM</td>
          <td>9:00 AM - 12:00 PM</td>
          <td>1:00 PM - 5:00 PM</td>
        </tr>
        <tr>
          <td>Dr. Sarah Subedi</td>
          <td>Orthopedics</td>
          <td>Off</td>
          <td>1:00 PM - 5:00 PM</td>
          <td>9:00 AM - 12:00 PM</td>
          <td>1:00 PM - 5:00 PM</td>
          <td>9:00 AM - 12:00 PM</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>


<a href="logout.php" class="btn">logout</a>
</body>
</html>