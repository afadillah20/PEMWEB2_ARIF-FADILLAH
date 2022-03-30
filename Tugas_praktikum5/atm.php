<?php

    require_once 'class_account.php';

    $ac1 = new Account("01101",500000);
    $ac2 = new Account("01102",1000000);


    $ac1->cetak();
    $ac1->deposit(500000);
    echo '<br/>Nabung 500000<br/>';
    $ac1->cetak();
?>