<?php

    // if statement = if some condition is true, do something
    //                if condition is flase, don't do it


$age = 15;

if ($age >= 18){
    echo"You may enter this site";
}
elseif($age == 0){
    echo "You were just born";
}
elseif($age >= 100){
    echo "You are too old to enter into our site";
}
else{
    echo "You must be 18+ to enter";
}


?>  
