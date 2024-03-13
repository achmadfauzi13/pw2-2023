<?php
$m_fruits = [
    ["id" => 1,"name" => "Alpukat", "color" => "Hijau", "stock" => 120, "price" => 35000, "description" => "Buah alpukat adalah yang kaya akan manfaatnya, buah alpukat termasuk jenis buah yang banyak digemari
                                                                                                        karena perpaduan rasa dan nutrisi tidak hanya memiliki kandungan lemak yang baik bagi tubuh, alpukat 
                                                                                                        juga memiliki kandungan vitamin lainnya yang bermanfaat, seperti Vitamin E, Vitamin K, Vitamin B5, Vitamin B6."],
    ["id" => 2, "name" => "Semangka", "color" => "Hijau gairs hitam", "stock" => 125, "price" => 15000, "description" => "Buah Semangka adalah salah satu buah favorit massyarakat karena bentuk buahnya yang unik akan garis hitam diluarnya,
                                                                                                        Buah semangka ini juga mempunyai kandungan air yang hampir 92%, Sehingga sangat menyegarkan untuk dikonsumsi,
                                                                                                        Buah ini juga mempunyai kandungan vitamin dan nutrisi seperti vitamin A, vitamin C, vitamin B6 dan lainnya "],
    ["id" => 3,"name" => "Kurma", "color" => "Coklat", "stock" => 100, "price" =>100000, "description" => "buah kurma mempunyai tekstur dan rasa yang lembut dan manis, kulit luaran kurma yang sedikit mengkerut dan beberapa buah kurma
                                                                                                        memiliki biji dan ada sebagian yang hampir tidak keliatan bijinya, buah kurma juga mempunyai nutrisi yang banyak termasuk serat, vitamin A,vitamin B, vitamin K, dan
                                                                                                        mineral seperti kalium,magnesium,Dan tembaga, serta gula yang alami"],
    ["id" => 4,"name" => "jeruk", "color" => "Oren", "stock" => 165, "price" => 19000, "description" => "buah jeruk mempunyai daging yang mengandung banyak air dan buah jeruk juga mempunyai banyak manfaat bagi kesehatan tubuh seperti
                                                                                                        meningkatkan fungsi otak, jeruk mengandung Vitamin C, Kallium, Folat, dan Antioksidan, dan Membantu menjaga tekanan darah"],
    ["id" => 5,"name" => "Melon", "color" => "Hijau", "stock" => 250, "price" => 10000, "description" => "Buah melon memiliki bentuk bulat dan kulitnya berwarna hijau atau kuning tergantung pada jenisnya, daging buahnya berwarna oren atau putih
                                                                                                        ,dan memiliki tekstur yang lembut serta rasa yang manis dan segar. buah melon mengandung banyak air, sehingga sangat menyegarkan ketika dimakan dalam keadaan dingin
                                                                                                        buah ini juga bisa dijadikan hidangan penutup dan di jadi kan jus melon.selain rasanya yang enak, melon juga kaya akan Nutrisi seperti Vitamin C, Vitamin A dan Kalium"]
];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Array Table Buah</title>
    </head>
<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
            <th class="text-center bg-info">NO</th>
            <th class="text-center bg-info">Nama</th>
            <th class="text-center bg-info">Warna</th>
            <th class="text-center bg-info">Stok</th>
            <th class="text-center bg-info">Harga</th>
            <th class="text-center bg-warning">Deskripsi</th>
            </tr>
        </thead>

        <tbody class="text-center">
        <?php
            foreach ($m_fruits as $fruit) {
                echo '<tr>';
                echo '<td>'.$fruit["id"].'</td>';
                echo '<td>'.$fruit["name"].'</td>';
                echo '<td>'.$fruit["color"].'</td>';
                echo '<td>'.$fruit["stock"].'</td>';
                echo '<td>'.$fruit["price"].'</td>';
                echo '<td>'.$fruit["description"].'</td>';
                echo '</tr>';
            }
        ?>
        </tbody>
    </table>
    </div>
</body>
</html>