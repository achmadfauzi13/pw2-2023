<?php

    require_once  'class_lingkaran.php';

    echo 'Nilai PHI = ' . lingkaran::PHI;

    $lingkaran1 = new lingkaran(8);
    $lingkaran2 = new lingkaran(27);
    $keliling1 = new lingkaran(12);
    $keliling2 = new lingkaran(10);

    // luas
    echo '<br><br>';
    echo '<br> Luas Lingkaran1 adalah :'. $lingkaran1->getluas(). 'cm';
    echo '<br> Luas Lingkaran2 adalah :'. $lingkaran2->getluas(). 'cm';
    echo '<br>';
    // keliling
    echo '<br> keliling lingkaran1 adalah :'. $keliling1->getkeliling(). 'cm';
    echo '<br> keliling lingkaran1 adalah :'. $keliling2->getkeliling(). 'cm';
?> 