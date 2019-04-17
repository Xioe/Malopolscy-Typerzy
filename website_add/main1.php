<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <title>Formularz kontaktowy</title>
  </head>


  <body>
    <?php

$name = $_POST["name"];
$email = $_POST["email"];
$title = $_POST["title"];
$message = $_POST["message"];



$to      = 'Wortix80@gmail.com';
$subject = $title;
$message = 'Imie:'.$name."\n".'Email:'.$email."\n".'Wiadomość:'.$message;

 echo $message;

$headers = 'From:' . $email . "\r\n" .
    'Reply-To: mateusz@burnagiel.pl' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$sukces = mail($to, $subject, $message, $headers);

   if ($sukces){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=potwierdzenie.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
   
?>
  </body>
</html>