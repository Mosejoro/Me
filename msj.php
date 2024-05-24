<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Collect form data
  $name = $_POST["Username"];
  $email = $_POST["Email"];
  $message = $_POST["Message"];

  // Basic validation (optional)
  if (empty($name) || empty($email) || empty($message)) {
    echo "Please fill all required fields 🙏🙏.";
  } else {

    // Process the form data (send an email)
    $to = "rseun4125@gmail.com"; // Replace with your actual email address
    $subject = "Form Submission from Your Website";
    $body = "Name: $name\nEmail: $email\nMessage: $message";  // Include relevant data in body

    // Check for mail sending error and provide basic feedback
    if (mail($to, $subject, $body)) {
      echo "Thank you for your message! We will be in touch shortly.";
    } else {
      echo "There was an error sending your message. Please try again later. (Error: " . error_get_last() . ")";
    }
  }
}

?>
