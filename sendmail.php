 <?php
    // The message
    $name = $_POST["name"];
    $email_address = $_POST["email"];
    $message = $_POST["message"];
    $full_message = $name + '\n\r' + $email_address + '\n\r' + $message;
    $subject = 'Someone just emailed you from your own site';
    // Send
    mail('simen.vanherpt@gmail.com', $subject, $full_message);
    header("Location:index.html")
  ?>
