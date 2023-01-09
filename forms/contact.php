<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'sujata.chauhan0123@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;

  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();


  if((isset($_POST['call-name']))&&(isset($_POST['phone'])&&$_POST['phone']!="")){
    $to = 'sujata.chauhan0123@gmail.com';
    $subject = 'Callback';
    $message = '
          <html>
              <head>
                  <title>Call me back</title>
              </head>
              <body>
                  <p><b>Name:</b> '.$_POST['call-name'].'</p>
                  <p><b>Phonenum:</b> '.$_POST['phone'].'</p>
              </body>
          </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
  $headers .= "From: Site <info@mail.com>\r\n";
  mail($to, $subject, $message, $headers);

    echo json_encode(array('status' => 'success'));
  } else {
    echo json_encode(array('status' => 'error'));
  }
?>
