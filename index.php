<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form mail</title>
  </head>
  <body>
<?php
  if (!empty($_POST["send"])) {
    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $userMessage = $_POST["userMessage"];
    $toEmail = "patriziofoscol@gmail.com";

    $mailHeaders = "Name: " . $userName .
    "\r\n Email: " . $userEmail .
    "\r\n Message: " . $userMessage . "\r\n";

    if (mail($toEmail, $userName, $mailHeaders)) {
      $message = "Your Information is Received Successfully."
}
}
 ?>
    <div class="">
      <div class="">
        <label>Name <em>*</em></label>
        <input type="text" name="userName" required>
      </div>

      <div class="">
        <label> <em>Email</em> <em>*</em></label>
        <input type="email" name="userEmail" required>
      </div>

      <div class="">
        <label>Message <em>*</em></label>
        <input type="text" name="userMessage" required>
      </div>

      <div class="">
        <input type="submit" name="send" value="Submit">
        <?php if (!empty($message)) {?>
      </div>
      <div class="">
        <strong><?php echo $message; ?></strong>
      </div>
    <?php } ?>
    </div>
  </body>
</html>
