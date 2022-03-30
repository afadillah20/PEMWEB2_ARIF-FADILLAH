<?php

    require_once 'class_accountbank.php';

    $ab1 = new AccountBank("01104",15000000,"Arif");
    $ab2 = new AccountBank("01105",500000,"Henry");

    /*$ab1->cetak();
    echo '<hr/>';
    $ab2->cetak();
    echo '<hr/>';*/
    $ab1->transfer($ab2,5000000);
    /*echo '<br/>Biaya admin : '.AccountBank::$biaya_admin.'<br/>';
    $ab1->cetak();
    echo '<hr/>';
    $ab2->cetak();*/

    $ar_ab = [$ab1, $ab2];
    $_norek = $_POST['norek'];
    $_nama = $_POST['nama'];
    $_saldo = $_POST['saldo'];

    $ab3 = new AccountBank($_norek,$_saldo,$_nama);
    array_push($ar_ab,$ab3);

?>

<div class="container-fluid">
<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>No Rekening</th>
            <th>Nama</th>
            <th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor = 1;
            foreach($ar_ab as $obj){
        ?>    
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $obj->nomor ?></td>
                    <td><?= $obj->customer ?></td>
                    <td><?= $obj->getsaldo() ?></td>
                </tr>
            
        <?php 
                $nomor++;   
            }
        
        ?>
    </tbody>
</table>
</div>