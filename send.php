<?php
$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$question = $_POST['question'];

$name = htmlspecialchars($name);
$company = htmlspecialchars($company);
$email = htmlspecialchars($email);
$question = htmlspecialchars($question);

$name = urldecode($name);
$company = urldecode($company);
$email = urldecode($email);
$question = urldecode($question);

$name = trim($name);
$company = trim($company);
$email = trim($email);
$question = trim($question);
//echo $name;
//echo "<br>";
//echo $company;
//echo "<br>";
//echo $email;
//echo "<br>";
//echo $question;


if (mail("zeen@eventum-premo.ru", "Заявка с сайта Zeen", "ФИО:".$name."  Компания:".$company.".  E-mail: ".$email." Описание задачи:".$question ,"From:sorokin.developer@gmail.com\r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}

//name, company, email, question
?>

