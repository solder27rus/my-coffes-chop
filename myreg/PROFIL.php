<?php
include('header.php')
?>

    <div class="main1-all">
        <div class="profil">
            <div class="avatar">
                <div class="avatar_inf">
                <img class="profilimg" src="img/Rectangle 30.png">
                <div class="c">
    <form action="register.php" method="post" name="form_register">
    <input type="text" name="first_name"  class="contentmain8"value="имя:'.$first_name['first_name'].' " readonly>
    <input type="text" name="last_name" class="contentmain8" value="фамилию:'.$last_name['last_name'].' " readonly>
    <input type="email" name="email"  class="contentmain8"value="почту:'.$email['email'].' " readonly><br>
    <a id="link_logout" class="buttonimg" href="/logout.php">Выход</a>
    </form>
                </div>
</div>
            <div class="zakaz">
                zakaz or vremy zakaz
                <div class="br">
                    <h1 class="main5text2">Бронирование</h1>
                    <div class="avatarINF">4 Person</div>
                    <div class="avatarINF">12.25, 2020</div>
                    <div class="avatarINF">11:00 AM</div>
                </div>
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
<?php
include('footer.php')
?>