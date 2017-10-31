<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Сообщение отправлено</title>
        <link rel="stylesheet" href="public/css/style.css">
    </head>
    <body style="text-align: center; font-family:'Play'; font-size: 20px; ">
        <div id="header" ><!--шапка-->
	<a class="center_header" href="/">Anodimus</a>
	</div>
        
        
        
        
        
        
        <div id="Podval">
        <a>Курение и алкоголь вредит вашему здоровью. </a>
        </div>
    </body>
</html>


<?php 
// ----------------------------конфигурация-------------------------- // 
 
$adminemail="infysijhns@gmail.ru";  // e-mail админа 
 
$date=date("d.m.y"); // число.месяц.год 
 
$time=date("H:i"); // часы:минуты:секунды 
 
$backurl="http://php.loc/index.php";  // На какую страничку переходит после отправки письма 
 
//---------------------------------------------------------------------- // 
 
  
 
// Принимаем данные с формы 
 
$name=$_POST['Name_FN']; 

$ssila=$_POST['Ssil'];

$email=$_POST['email']; 
 
$msg=$_POST['message']; 
 
  
 
// Проверяем валидность e-mail 
 
if (!preg_match("|^([a-z0-9_\.\-]{1,100})@([a-z0-9\.\-]{1,100})\.([a-z]{2,4})|is", 
strtolower($email))) 
 
 { 
 
  echo 
"<center>Вернитесь <a 
href='javascript:history.back(1)'><B>назад</B></a>. Вы 
указали неверные данные!";
 
  } 
 
 else 
 
 { 
 
 
$msg=" 
 
 
<p>Имя.ф: $name</p> 

<p>Ссылка: $ssila</p>
 
<p>E-mail: $email</p> 

<a>Цитата : $msg</a>
 
 
"; 
 
  
 
 // Отправляем письмо админу  
 
mail("$adminemail", "$date $time Сообщение 
от $name", "$msg"); 
 
  
 
// Сохраняем в базу данных 
 
$f = fopen("message.txt", "a+"); 
 
fwrite($f," \n $date $time Сообщение от $name"); 
 
fwrite($f,"\n $msg "); 
 
fwrite($f,"\n ---------------"); 
 
fclose($f); 
 
  
 
// Выводим сообщение пользователю 
 
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000); 
//--></script> 
 
<p>Сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";  
exit; 
 
 } 
 
?>
