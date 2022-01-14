<?php
include "dbconnect.php";
$get_tovar = mysqli_query($mysqli," SELECT * FROM user");


while($arr_tovar = mysqli_fetch_assoc($get_tovar)){
    echo
    '<div class="c">
    <form action="register.php" method="post" name="form_register">
    <input type="text" name="first_name"  class="contentmain8"value="имя:'.$first_name['first_name'].' " readonly>
    <input type="text" name="last_name" class="contentmain8" value="фамилию:'.$last_name['last_name'].' " readonly>
    <input type="email" name="email"  class="contentmain8"value="почту:'.$email['email'].' " readonly><br>
    <button id="link_logout" class="buttonimg" href="/logout.php">Выход</button>
    </div>';
};
?>