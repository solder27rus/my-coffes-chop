<?php
include('header.php');
//include('booking.php');
?>
<div class='all'>
<div class="main1">
    <div class="textinimg" style="background-image: url(img/Rectangle12.png);">
    <div class="main1contenall">
    <div class="main1contentb">
    <div class="main1h1">
    <h1 class="main1h1">Наслаждайся<br>
    Утренним кофе.</h1>
    Кофе заваривается путем обжаривания зеленых зерен<br>
    Над горячими углями в мангале.
    </div>
    <div>
    <a href="market.php"><button class="buttonimg">
    Попробуй!
    </button></a>
    </div>
    </div>
    <div id="gif">
    </div>
    </div>
    </div>
    </div>
    
    <div class="main1-all">
    
    
    
    <div class="main3">
    <div class="verticalimg">
    <div class="verticalimg1"><img src="img/Rectangle 4.png" class="main3img"></div>
    <div class="verticalimg1"><img src="img/Rectangle 5.png" class="main3img"></div>
    </div>
    <div><img class="imgmain3" src="img/Rectangle 14.png" class="main30img"></div>
    <div class="textmain3">
    <div>
    <div class="main3text"><div style="color:#C99E71; margin-right: 5px;">Наша история</div></div>
    <h1 class="main3text1">Создавай<br> историю с нами</h1>
    <div class="main3text">
    Кофе в России начал набирать популярность во времена правления Петра I,<br>
     а в середине XVIII века появились и первые кофейни — в Санкт-Петербурге.<br>
      В меню таких заведений, помимо кофе, как правило, входили пирожные, фрукты и варенья, лимонады.<br>
       В кофейнях было запрещено подавать горячие блюда и спиртные напитки,<br>
        а также нельзя было устанавливать бильярдные столы.
        <br>
    Одной из самых знаменитых кофеен XVIII–XIX веков было «Кафе Вольфа и Беранже» в Санкт-Петербурге,<br>
     открывшееся в 1780-х годах. Его главными изюминками стали изысканный и экзотический интерьер,<br>
      оформленный в китайском стиле, и читальня, где посетители всегда могли найти свежую прессу — российскую и зарубежную..</div>
    </div>
    </div>
    </div>
    
    <div class="main8">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2643.4261947028!2d135.1152735155528!3d48.505894079254524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5efaea20a4eba3b1%3A0x8dd14fea6b39d267!2z0JrQvtGE0LXQuNC9IC0g0LrQvtGE0LUg0Lgg0YfQsNC5INCyINCl0LDQsdCw0YDQvtCy0YHQutC1!5e0!3m2!1sru!2sru!4v1641695846481!5m2!1sru!2sru" width="650" height="570" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    
        <div id="booking" class="main8content">
        <h5 class="main5text1"><div style="color:#C99E71; margin-right: 5px;">Где мы?</div></h5>
        <h1 class="main5text2">Бронирование</h1>
        <form action="booking.php" method="post" name="booking">
        <input type="text" name="numberof" required="required" class="contentmain8" placeholder="Сколько людей">
        <input type="text" name="date" required="required" class="contentmain8" placeholder="Дата">
        <input type="text" name="time" required="required" class="contentmain8" placeholder="Время">
        <?php
        if($_COOKIE['inf'] !== null){
            echo
    
        '<input  class="buttonimg" onclick="addckpr" type="submit" name="btn_booking" value="Забронировать">'
    ;}else{
        echo
        '<divclass="contentmain8">Только после регистрации</div>';
    };
?>
</form>
    </div>
    </div>
        </div>
    </div>
    
    
    </div>
<?php
include('footer.php');
?>
</div>