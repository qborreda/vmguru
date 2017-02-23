<?php

if(isset($_POST['email'])) {

  $br = "\r\n";

  $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
  $position = filter_input(INPUT_POST, "position", FILTER_SANITIZE_STRING);
  $company = filter_input(INPUT_POST, "company", FILTER_SANITIZE_STRING);
  $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

  isset($_POST['odezda']) ? $odezda = $_POST['odezda'] :  $odezda  = [];
  isset($_POST['shoes']) ? $shoes = $_POST['shoes'] :  $shoes = [];
  isset($_POST['accesories']) ? $accesories = $_POST['accesories'] :  $accesories = [];

  $mess_odezda = "";
  $mess_shoes = "";
  $mess_accesories = "";
  foreach ($odezda as $item){
    $mess_odezda .= $item . ", ";
  }

  foreach ($shoes as $item){
    $mess_shoes .= $item . ", ";
  }

  foreach ($accesories as $item){
    $mess_accesories .= $item . ", ";
  }

  $to = "hello@vmguru.ru";
  $subject = "Contact from Training Event";
  $message = "A user has sent this data:". $br.$br;

  $message .= "Имя, Фамилия: " . $name . $br;
  $message .= "Должность: " . $position . $br;
  $message .= "Компания: " . $company . $br;
  $message .= "Телефон: " . $phone . $br;
  $message .= "Email: " . $email . $br;

  $message .= $br;
  $message .= "And the user selected: " . $br; 

  $message .= "Одежда: " . $mess_odezda . $br;
  $message .= "Oбувь: " . $mess_shoes . $br;
  $message .= "Aксессуары: " . $mess_accesories . $br;

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
