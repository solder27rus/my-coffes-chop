<?php
include('header.php');include "dbconnect.php";
?>

    <div class="main1-all">
        <div class="profil">
            <div class="avatar">
                <div class="avatar_inf">
                <img class="profilimg" src="img/Rectangle 30.png">
                <div class="c">
    <form action="" method="post" name="form_register">
<?php

$cinf = $_COOKIE["inf"];

$get_tovar = mysqli_query($mysqli," SELECT * FROM users WHERE email IN ('$cinf')" );

if($arr_inf = mysqli_fetch_assoc($get_tovar)){

    echo
    '<input type="text" name="first_name"  class="contentmain8"value="имя: '.$arr_inf['first_name'].' " readonly>
    <input type="text" name="last_name" class="contentmain8" value="фамилия: '.$arr_inf['last_name'].' " readonly>
    <input type="email" name="email"  class="contentmain8"value="почта: '.$arr_inf['email'].' " readonly><br>';
};
?>
    <a id="link_logout" class="buttonimg" onclick="'dellinf'" href="/logout.php">Выход</a>
    </form>
                </div>
</div>
            <!-- <div class="zakaz">
                <div class="br">

                    <h1 class="main5text2">Бронирование</h1>
                    <?php
// $cprinf = $_COOKIE["prinf"];

// $get_tovar = mysqli_query($mysqli," SELECT * FROM booking WHERE id IN ('$cprinf')" );

// while($arr_booking = mysqli_fetch_assoc($get_tovar)){

//     echo
//     '<input type="text" name="first_name"  class="contentmain8"value="'.$arr_booking['numberof'].' " readonly>
//     <input type="text" name="last_name" class="contentmain8" value="'.$arr_booking['date'].' " readonly>
//     <input type="email" name="email"  class="contentmain8"value="'.$arr_booking['time'].' " readonly><br>';
// };
?>
                </div>
            </div> -->
            </div>
        </div>
        
    </div>


</div>
<?php
include('footer.php')
?>