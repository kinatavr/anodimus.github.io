<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Отправить цитату</title>
        <link rel="stylesheet" href="public/css/style.css">
        
    </head>
    <body>
        <div id="header" ><!--шапка-->
	<a class="center_header" href="/">Anodimus</a>
	</div>
        
        <div id="Menu_mail">
            <form action="post.php" method= "POST"> 
 
                <label for="NFN">Имя.Фамилия</label> <input id="NFN" type= "text" name= "Name_FN" maxlength="100" required>
                <label for="ssilka">Ссылка на соц.сеть</label> <input id="ssilka" type= "text" name= "Ssil" maxlength="300"  required>
                <hr>
                <label for="MAIL">E-mail:</label> <input id="MAIL" type= "text" name= "email" maxlength="100"  required><a>(Для ответа модератора)</a>
                <br>
                <label for="CB">Цитата</label><br><textarea id ="CB" type="text" rows= "10" cols= "45" name= "message" maxlength="1000" required></textarea> 
                
                <input type= "submit" class="New_Sub" value= "Отправить"> <br>
                
            </form>
            <a style="font-size: 14px;">Каждая цитата проходит модерацию и вам ответят добавили вашу цитату или нет</a>
        </div>
        
        
        <div id="Podval">
        <a>Курение и алкоголь вредит вашему здоровью. </a>
        </div>
    </body>
</html>



