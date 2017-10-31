        <div id="poisk">
            <a id='Citat_Block'></a>
        </div>
    
        <form action="/" method="post">
        <input type="submit" name="sub" class="New_Sub" value="Рандом цитата" >
        </form>
       
        <?php
    $ss = (rand(1,8));
    MyFun();
    function MyFun(){
    global $ss;
    if($ss == 1){
        echo "<script>document.getElementById('Citat_Block').innerHTML='Нас всегда окружают люди похожие на нас,<br> так что не мечтайте о принце<br> на белом Порше где-то на хате ,<br> куда ты пришла выпить .<br>Не повторяйте ошибок (Шурыгиной).<br><br><a target=_blank class=New_Su href=https://vk.com/id421522852>Антон.И</a>'</script>";
    }elseif($ss == 2){
        echo "<script>document.getElementById('Citat_Block').innerHTML='Хотите серьёзных отношений,<br>но ваш круг общения это не серьёзные люди,<br>тогда забейте на серьёзные отношения...<br><br><a  target=_blank class=New_Su href=https://vk.com/id421522852>Антон.И</a>'</script>";
    }elseif($ss == 3){
        echo "<script>document.getElementById('Citat_Block').innerHTML='Мудр не тот, кто доказал что либо,<br>а тот кто, зная истину, не стал спорить<br><br><a target=_blank class=New_Su href=https://vk.com/id421522852>Антон.И</a>'</script>";
    }elseif($ss == 4){
        echo "<script>document.getElementById('Citat_Block').innerHTML='Не бойтесь рисковать и остаться у разбитого корыта.<br>Бойтесь просидеть у своего корыта всю жизнь<br>и не сделать ничего, чтобы начать<br>жить лучше.<br><br><a target=_blank class=New_Su href=https://vk.com/id421522852>Антон.И</a>'</script>";
    }elseif($ss == 5){
        echo "<script>document.getElementById('Citat_Block').innerHTML='Лучше иметь ту, которую многие хотят,<br>чем хотеть ту, которую многие имеют.<br><br><a target=_blank class=New_Su href=https://www.instagram.com/buzova86/?hl=ru>Ольга.Б</a>'</script>";
    }elseif($ss == 6){
        echo "<script>document.getElementById('Citat_Block').innerHTML='Я потерял себя пытаясь угодить всем.<br> Теперь я теряю всех пытаясь найти себя <br><br> <a target=_blank class=New_Su href=https://vk.com/id421522852>Антон.И</a>'</script>";
    }elseif($ss == 7){
        echo "<script>document.getElementById('Citat_Block').innerHTML='Не забывайте выкидывать мусор.<br> Из ведра. Из головы. Из жизни.  <br><br>   <a target=_blank class=New_Su href=https://vk.com/id421522852>Антон.И</a>'</script>";
    }elseif($ss == 8){
            echo "<script>document.getElementById('Citat_Block').innerHTML=' Мы рождаемся за день. За день умираем.<br>И за день можем измениться.<br>И за день можем влюбиться.<br>Всего за один день может<br>произойти что угодно  <br><br>   <a target=_blank class=New_Su href=https://vk.com/id421522852>Антон.И</a>'</script>";
    }
    
    }
    //echo "<script>document.getElementById('Citat_Block').innerHTML=' Текст  <br><br>   <a target=_blank class=New_Su href=ссылка>ИМЯ</a>'</script>";
    ?>
      
    
    

    <div id="Podval">
        <a>Курение и алкоголь вредит вашему здоровью. </a>
    </div>
</body>
</html>

