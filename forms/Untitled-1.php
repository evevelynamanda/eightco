<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
 
  */
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);
  echo "Registrasi berhasil. Selamat datang, " . htmlspecialchars($nama) . "!";
}
echo "<script>showAlert();</script>";
?>
