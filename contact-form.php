<?php
  ini_set("display_errors", 0);

  require_once('functions/functions.php');
  require_once('model/Email.php');

  $mailer = new Email();

  $statusMsg = '';

  if (isset($_POST['sendMail'])) {
    if (

      $mailer->sendMail (
        $_POST['email'], 
        'ad@adlineup.com',
        $_POST['name'],
        $_POST['title'], 
        $_POST['message']
      )

    ) {

      $statusMsg = '<p class="text-danger">Message Sent. Thank You!</p>';

      $mailer->sendMail (
        'ad@adlineup.com',
        $_POST['email'],
        $_POST['name'],
        'A copy of your message', 
        $_POST['message']
      );

    }else{
      $statusMsg = '<p class="text-danger">Error! Message NOT sent.</p>';
    }
  }

?>
