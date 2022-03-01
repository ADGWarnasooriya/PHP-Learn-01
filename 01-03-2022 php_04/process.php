<?php

if($_GET["e"]=="admin@gmail.com" & $_GET["p"]=="855"){
    header("Location:home.php");
}else{
    echo "Invalid email or password";
}
