<?php

if(isset($_POST['email'])) {

  $br = "\r\n";

  $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
  $position = filter_input(INPUT_POST, "position", FILTER_SANITIZE_STRING);
  $company = filter_input(INPUT_POST, "company", FILTER_SANITIZE_STRING);
  $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
  $interest = filter_input(INPUT_POST, "interest", FILTER_SANITIZE_STRING);

  $referer = $_SERVER["HTTP_REFERER"];

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
  // $to = "qborreda@yahoo.com";
  $subject = "Contact from Training Event";
  $message = "A user has sent this data:". $br.$br;

  $message .= "Имя, Фамилия: " . $name . $br;
  $message .= "Должность: " . $position . $br;
  $message .= "Компания: " . $company . $br;
  $message .= "Телефон: " . $phone . $br;
  $message .= "Email: " . $email . $br;

  $message .= "The user is interested in: " . $br;
  $message .= $interest . $br;
  $message .= "at " . $referer . $br;

  $message .= $br;
  $message .= "And the user selected: " . $br;

  $message .= "Одежда: " . $mess_odezda . $br;
  $message .= "Oбувь: " . $mess_shoes . $br;
  $message .= "Aксессуары: " . $mess_accesories . $br;

  $header .= "MIME-Version: 1.0" . $br;
  $header .= "Content-Type: text/plain; charset=utf-8" . $br;
  $header .= "From: VMGuru form service <hello@vmguru.ru>" . $br;
  $header .= "Reply-To: hello@vmguru.ru". $br;
  $header .= "X-Mailer: PHP/" . phpversion();

  if(mail($to, $subject, $message, $header, "-fhello@vmguru.ru")) {
    header("Location: " . $_SERVER['HTTP_REFERER'],TRUE,301);
  } else {
    header("Location: " . $_SERVER['HTTP_REFERER'],TRUE,301);
  }

  // $firstmail = mail($to, $subject, $message, $header, "-fhello@vmguru.ru");
  // header("Location: " . $_SERVER['HTTP_REFERER'],TRUE,301);

  // Message to the sender
  // $to = $email;
  // $to = "qborreda@yahoo.com";
  // $subject = "Message to sender";
  //
  // $message = "Здравствуйте!" . $br.$br;
  // $message .= "Благодарим Вас!" . $br;
  // $message .= "Ваша заявка принята. Мы ответим Вам в ближайшее время." . $br.$br;
  //
  // $message .= "С уважением," . $br;
  // $message .= "Команда VM GURU" . $br.$br;
  //
  // $message .= "Phone: +7 (495) 741 17 84" . $br;
  // $message .= "<a href='http://www.vmguru.ru' target='_blank'>www.vmguru.ru</a>" . $br.$br;
  //
  // $message .= "Присоединяйтесь к нам в соц сетях:" . $br;
  // $message .= "<a href='http://www.facebook.com/VMGURU.Russia' target='_blank'>www.facebook.com/VMGURU.Russia</a>" . $br;
  // $message .= "<a href='http://www.instagram.com/anna_balandina_vmguru' target='_blank'>www.instagram.com/anna_balandina_vmguru</a>" . $br.$br;
  //
  // $header .= "MIME-Version: 1.0" . $br;
  // $header .= "Content-Type: text/plain; charset=utf-8" . $br;
  // $header .= "From: VMGuru <hello@vmguru.ru>" . $br;
  // $header .= "Reply-To: hello@vmguru.ru". $br;
  // $header .= "X-Mailer: PHP/" . phpversion();
  //
  // $secondmail = mail($to, $subject, $message, $header);
  //
  // if( $firstmail && $secondmail) {
  //   header("Location: " . $_SERVER['HTTP_REFERER'],TRUE,301);
  // } else {
  //   print_r($firstmail);
  //   print_r($secondmail);
  // }

}

?>
