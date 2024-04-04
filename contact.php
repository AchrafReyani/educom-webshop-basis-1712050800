<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/stylesheet.css">
    <title>Contact</title>
</head>
<header>    
    <h1>Achraf's Webshop</h1>
</header>

<body>

  <?php 
  //initiate variables
  $pronouns = $name = $email = $phonenumber = $street = $housenumber = $postalcode =
  $city = $communication = $message = "";



  $pronounError = $nameError = $emailError = $phonenumberError = $streetError = $housenumberError = $postalcodeError = $cityError = $communicationError = $messageError = $valid = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["pronouns"])) {
      $pronounError = "Pronouns are required";
    } else {
      $valid = true;
    }

    if (empty($_POST["name"])) {
      $nameError = "Name is required";
    } else {
      $valid = true;
    }
  }
  ?>

  <ul class='menu'>  
    <li><a href="index.html">Home</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="contact.php">Contact</a></li>
</ul>  


    <h2>Contact Me</h2>

  <section>

  <?php if (!$valid) {/* Show the form if $valid is false */ ?>

    <p>If you have any questions or comments, please feel free to contact me using the form below.</p>
<form action="contact.php" method="POST">
  
  <label for="pronouns">Pronouns:</label>
  <select name="pronouns" value="<?php echo $pronouns;?>">
    <option value="">Please select a pronoun</option>
    <option value="he/him">He/him</option>
    <option value="she/her">She/her</option>
    <option value="they/them">They/them</option>
    <option value="other">Other</option>
    <option value="prefer not to say">Prefer not to say</option>
  </select>
  
  <label for="name">Name:</label>
  <input type="text" name="name" value="<?php echo $name;?>">
  
  <br>
  <label for="email">Email:</label>
  <input type="email" name="email" value="<?php echo $email;?>">

  <label for="phone number">Phone number:</label>
  <input type="tel" name="phonenumber">
  <br>
  <label for="street">Street name:</label>
  <input type="text" name="street" value="<?php echo $street;?>">

  <label for="house number">House number (+ suffix if applicable):</label>
  <input type="text" name="housenumber" value="<?php echo $housenumber;?>">
  <br>
  <label for="postal code">Postal code:</label>
  <input type="text" name="postalcode" value="<?php echo $postalcode;?>">

  <label for="city">City:</label>
  <input type="text" name="city" value="<?php echo $city;?>">

  <p>Preferred Communication Method:</p>
  <label for="email-communication">Email</label>
  <input type="radio" name="communication" value="email">
  
  <label for="phone-communication">Phone</label>
  <input type="radio"  name="communication" value="phone">
  
  <label for="postal-communication">Postal Mail</label>
  <input type="radio"  name="communication" value="postal">
  
  <label for="message">Message:</label>
  <textarea name="message"></textarea>
  <br>
  <input type="submit" value="Send">

</form>


  <?php } else { /*show thank you message if $valid is true */ ?>

  <p>Thank you for your message! I will get back to you as soon as possible.</p>

  <?php } ?>


</section>

</body>
<footer>&copy; Copyright 2024 Achraf Reyani</footer>
</html>
