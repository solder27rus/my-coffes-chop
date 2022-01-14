
<?php

for($m = 0; $m=$arr_tovar['price']; $m++);
/*
        Проверяем была ли отправлена форма, то есть была ли нажата кнопка 
*/ 
    $rand = mt_rand(1000, 9999);// Генерируем случайное число.
    if(isset($_POST["btn_zakaz"]) && !empty($_POST["btn_zakaz"])){
    
        echo
        'Заказ оформлен, приятного дня.';
    }elseif(!isset($_POST["btn_zakaz"]) && empty($_POST["btn_zakaz"])){

        echo
        '<input readonly type="text" name="cod_zakaz" required="required" class="contentmain8" value="Код заказа: '.$rand.'">        
        <input readonly type="text" name="date_zakaz" required="required" class="contentmain8" value="Дата: '.date (" d/m/Y").'">
        <input readonly type="text" name="sum_zakaz"  class="contentmain8" placeholder="Сумма:">';
        include "korzina_tovar.php";
    }
?>