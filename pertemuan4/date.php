<?php

    // function built-in
    // Data/ time
    // . time()
    // . date()
    // . mktime()
    // . strtotime()
    // strlen()
    // strcmp()
    // explode()
    // htmlspecialchars()

    // utility
    // var_dump()
    // isset() mengecek apakah sebuah variabel sudah pernah dibuat apa belum
    // empty() apakah variabel ini kosong?
    // die()
    // sleep()

    // date
    echo date("l, d-M-Y")."<br>";
    echo date("r"). "<br>";

    //time
    // UNIX Timestamp / EPOCH Time
    // detik yang sudah berlalu sejak 1 januari 1970
    echo time()."<br>";

    echo date("l", time() + 172800) . "<br>";
    echo date("D-M-Y", time() - 60*60*24*100). "<br>";

    // mktime
    // membuat detik sendiri
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    
    echo date("l, d-M-Y", mktime(0,0,0,7,16,2000)) . "<br>";


    // strtotime
    echo date("l, d-M-Y", strtotime("16 jul 2000"));


?>