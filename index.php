<?php
  if(isset($_POST['submit'])){
      $firstname=$_POST['firstname'];
      $lastname=$_POST['lastname'];
      $email ="mpatel@josephfarms.com";
      $to='mpatel@josephfarms.com';
      $subject="Cheese Order";
      $body = '<html>
                <body>
                  <h2>Feedback- example.com</h2>
                  <hr>
                  <p>First Name<br>'.$firstname'</p>
                  <p>Last Name<br>'.$lastname'</p>
                </body>
              </html>';

  //headers
  $headers = "From: ".$firstname." <".$email">/r/n";
  $headers .= "Reply-To: ".email."\r\n";
  $headers .= "MINE-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf=8";
//send
$send = mail($to, $subject, $body, $headers);
if ($send) {
  echo '<br>';
  echo 'Thanks for contacting me. I will be with you shortly.';
} else {
    echo 'error';
}
}
?>

<!doctype html>
<html>
  <head>
    <title>Simple Contact Form with PHP</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <form action="" method="post">
      <input type="text" name="firstname" placeholder="Fist Name"><br>
      <input type="text" name="lastname" placeholder="Last Name"><br>
      <button type="submit">Submit</button>
    </form>
  </body>
</html>
