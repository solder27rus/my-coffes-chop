<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/ccs.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/csspr.css">
    <link rel="stylesheet" type="text/css" href="css/csspor.css">
    <link rel="stylesheet" type="text/css" href="css/modulcss.css">
    <link rel="stylesheet" media="(max-width: 840px)"  href="mobulcss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="cookie_jquery.js"></script>
    <title>CoffeeShop</title>
</head>
<body>

<div class="body">

<header>
    <div class="header">

    <div id="logo">
<img src="img/Logo.svg">
</div>
<div class="lefthead">
Интернет кофейня || CoffeeShop
</div>
<div class="righthead">
<a class="headmargin" href="index.php">Главная</a>
<a class="headmargin"href="market.php">Магазин</a>
<?php
    //Проверяем авторизован ли пользователь
    if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
        // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
?>
<a  id="link_register" class="headmargin" href="form_register.php">Регистрация</a>
<a  id="link_auth" class="headmargin" href="form_auth.php">Авторизация</a>
<?php
    }else{
?>
<a class="headmargin"href="PROFIL.php">Профиль</a>
<?php
    }
?>

<a class="headmargin" href="korzina.php"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.5 2.5L3.75 7.5V25C3.75 25.663 4.01339 26.2989 4.48223 26.7678C4.95107 27.2366 5.58696 27.5 6.25 27.5H23.75C24.413 27.5 25.0489 27.2366 25.5178 26.7678C25.9866 26.2989 26.25 25.663 26.25 25V7.5L22.5 2.5H7.5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.75 7.5H26.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M20 12.5C20 13.8261 19.4732 15.0979 18.5355 16.0355C17.5979 16.9732 16.3261 17.5 15 17.5C13.6739 17.5 12.4021 16.9732 11.4645 16.0355C10.5268 15.0979 10 13.8261 10 12.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></a>
</div>
</div>

</div>
<script type="text/javascript">
    $(document).ready(function(){
        "use strict";

        //================ Проверка длины пароля ==================
        var password = $('input[name=password]');
         
        password.blur(function(){
            if(password.val() != ''){
 
                //Если длина введенного пароля меньше шести символов, то выводим сообщение об ошибке
                if(password.val().length < 6){
                    //Выводим сообщение об ошибке
                    $('#valid_password_message').text('Минимальная длина пароля 6 символов');
 
                    // Дезактивируем кнопку отправки
                    $('input[type=submit]').attr('disabled', true);
                     
                }else{
                    // Убираем сообщение об ошибке
                    $('#valid_password_message').text('');
 
                    //Активируем кнопку отправки
                    $('input[type=submit]').attr('disabled', false);
                }
            }else{
                $('#valid_password_message').text('Введите пароль');
            }
        });
    });
</script>
    </header>
