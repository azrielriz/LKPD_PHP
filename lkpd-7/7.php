<?php

function bandingkanNama($nama1, $nama2) {
    $panjangNama1 = strlen($nama1);
    $panjangNama2 = strlen($nama2);
    
    echo "Nama pertama: $nama1\n";
    echo "Nama kedua: $nama2\n";
    
    if ($panjangNama1 > $panjangNama2) {
        $selisih = $panjangNama1 - $panjangNama2;
        echo "$nama1 memiliki karakter lebih banyak dibandingkan karakter milik $nama2\n";
        echo "Selisih karakter: $selisih\n";
    } elseif ($panjangNama2 > $panjangNama1) {
        $selisih = $panjangNama2 - $panjangNama1;
        echo "$nama2 memiliki karakter lebih banyak dibandingkan karakter milik $nama1\n";
        echo "Selisih karakter: $selisih\n";
    } else {
        echo "Kedua nama memiliki jumlah karakter yang sama.\n";
    }
}


bandingkanNama("Fema", "azriel");
?>
