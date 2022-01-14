<?php
include('header.php')
?>


<div class="main1-all">
    <h1>Ваши заказ</h1>
<div class="tovar-oplata">
    <div class="opisanie">
        <div class="summa">
                <form action="" method="post" name="zakaz">
        <?php
        include "buykorzina.php"
        ?>
        <div class="buttonzakaz">
        <input  class="buttonpr" type="submit" name="btn_zakaz" value="Заказать">
            </div>
            <div class="buttonzakaz">
        <input  class="buttonpr" type="submit" name="btn_zakaz_new" value="Изменить">
            </div>
    </form>
     </div>
    </div>
</div>
<div class="main9">
    <h1 class="main3text"><div style="color:#C99E71; margin-right: 5px;">Новости</div></h1>
<h1>Последние новости</h1>
<div class="main9text">
    <div class="main9img">
        <img src="img/Bg8.png">
        <div class="main9text1">
            <div class="main9text2">
                <div class="main9text3"><div style="color:#C99E71; margin-right: 5px;">By:</div><div> rasaline</div></div>
                <div style="color:#C99E71; margin-right: 5px;">23.01.2021</div>
            </div>
            <div style="font-family:Righteous;">Ideal cocktails From Barmen....</div>
            <div class="main9read">Read More <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.99994 12L18.9999 12" stroke="#C99E71" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 5L19 12L12 19" stroke="#C99E71" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg></div>
    </div>
    </div>
    <div class="main9img">
            <img src="img/Bg9.png"">
            <div class="main9text1">
                <div class="main9text2">
                    <div class="main9text3"><div style="color:#C99E71; margin-right: 5px;">Тема:</div><div> В разработке</div></div>
                    <div style="color:#C99E71; margin-right: 5px;">23.01.2021</div>
                </div>
                <div style="font-family:Righteous;">В разработке....</div>
                <a class="main9read" href="index.php">Подробнее <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.99994 12L18.9999 12" stroke="#C99E71" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 5L19 12L12 19" stroke="#C99E71" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></a>
        </div>
        </div>
        <div class="main9img">
            <img src="img/Bg10.png">
            <div class="main9text1">
                <div class="main9text2">
                    <div class="main9text3"><div style="color:#C99E71; margin-right: 5px;">Тема:</div><div> В разработке</div></div>
                    <div style="color:#C99E71; margin-right: 5px;">23.01.2021</div>
                </div>
                <div style="font-family:Righteous;">В разработке....</div>
                <a class="main9read">Подробнее <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.99994 12L18.9999 12" stroke="#C99E71" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 5L19 12L12 19" stroke="#C99E71" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></a>
        </div>
        </div>
    </div>


</div>

    </div>
</div>
</div>
<?php
include('footer.php')
?>