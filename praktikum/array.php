<?php

    // Default
    // Associative Array
    // Multidimensional Array

    // $fruits = ["Mangga","Berry","Kiwi"];

    // foreach ($fruits as $fruit) {
    //     echo $fruit;
    //     echo '<br>';
    // }

    // $dinos = [
    //     "dinoName" => "Rex",
    //     "dinoAge" => 50
    // ];

    // foreach ($dinos as $dino){
    //     echo $dino;
    //     echo '<br>';
    // }

        $dinos = [
            [
                "dinoName" => "Rex",
                "dinoAge" => 500
            ],
            [
                "dinoName" => "Bracio",
                "dinoAge" => 800
            ],
            [
                "dinoName" => "Ptare",
                "dinoAge" => 250
            ]
        ];

        foreach($dinos as $dino){
            echo $dino ["dinoName"];
            echo $dino["dinoAge"];
            echo '<br>';
        }
?>
<?php

$buahs = [
    [
        "ID" => "1",
        "Name" => "Alpukat",
        "Warna" => "Hijau",
        "Stok" => "120",
        "harga" => "15",
        "Deskripsi" => "Buah alpukat adalah yang kaya akan manfaatnya, buah alpukat termasuk jenis buah yang banyak digemari
                        karena perpaduan rasa dan nutrisi tidak hanya memiliki kandungan lemak yang baik bagi tubuh, alpukat 
                        juga memiliki kandungan vitamin lainnya yang bermanfaat, seperti Vitamin E, Vitamin K, Vitamin B5, Vitamin B6."
    ],
    [
        "ID" => "2",
        "Name" => "Semangka",
        "Warna" => "Merah",
        "Stok" => "125",
        "harga" => "15",
        "Deskripsi" => "Buah Semangka adalah salah satu buah favorit massyarakat karena bentuk buahnya yang unik akan garis hitam diluarnya,
                        Buah semangka ini juga mempunyai kandungan air yang hampir 92%, Sehingga sangat menyegarkan untuk dikonsumsi,
                        Buah ini juga mempunyai kandungan vitamin dan nutrisi seperti vitamin A, vitamin C, vitamin B6 dan lainnya "
    ],
    [
        "ID" => "3",
        "Name" => "Kurma",
        "Warna" => "Coklat",
        "Stok" => "100kg",
        "harga" => "20",
        "Deskripsi" => "buah kurma mempunyai tekstur dan rasa yang lembut dan manis, kulit luaran kurma yang sedikit mengkerut dan beberapa buah kurma
                        memiliki biji dan ada sebagian yang hampir tidak keliatan bijinya, buah kurma juga mempunyai nutrisi yang banyak termasuk serat, vitamin A,vitamin B, vitamin K, dan
                        mineral seperti kalium,magnesium,Dan tembaga, serta gula yang alami"
    ],
    
]

?>