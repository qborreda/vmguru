<?php

if(isset($_POST['email'])) {

  $br = "\r\n";

  $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
  $company = filter_input(INPUT_POST, "company", FILTER_SANITIZE_STRING);
  $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
  $interest = filter_input(INPUT_POST, "interest", FILTER_SANITIZE_STRING);

  $referer = $_SERVER["HTTP_REFERER"];

  $to = "hello@vmguru.ru";
  $subject = "Contact from Trainings page";
  $message = "A user has sent this data:". $br.$br;

  $message .= "Имя, Фамилия: " . $name . $br;
  $message .= "Компания: " . $company . $br;
  $message .= "Телефон: " . $phone . $br;
  $message .= "Email: " . $email . $br;

  $message .= $br;
  $message .= "The user is interested in: " . $br;
  $message .= $interest . $br;
  $message .= "at " . $referer . $br;

  $header .= "MIME-Version: 1.0" . $br;
  $header .= "From: VMGuru form service <hello@vmguru.ru>" . $br;
  $header .= "Content-Type: text/plain; charset=utf-8" . $br;

  if(mail($to, $subject, $message, $header, "-fhello@vmguru.ru")) {
    header("Location: " . $_SERVER['HTTP_REFERER'],TRUE,301);
  } else {
    header("Location: " . $_SERVER['HTTP_REFERER'],TRUE,301);
  }
}

?>
