<?php
include "dbconnect.php";

$get_tovar = mysqli_query($mysqli," SELECT * FROM katalog");


while($arr_tovar = mysqli_fetch_assoc($get_tovar)){
    echo
    '<div class="main6table"><img src="img/'.$arr_tovar['name'].'.png">'.$arr_tovar['name'].'
    <div style="color:#C99E71; margin-right: 5px;">'.$arr_tovar['price'].'$
       <br><button onclick="addck('.$arr_tovar['id'].')" id="'.$arr_tovar['id'].'" class="buttonbuy">X</button></div></div>';
};
?>