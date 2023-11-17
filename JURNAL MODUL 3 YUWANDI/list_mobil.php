<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)

            
            $query = mysqli_query($conn, "SELECT * FROM showroom_mobil");

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
            if (mysqli_num_rows($query) > 0) {
                while ($selects = mysqli_fetch_assoc($query)) {
            
            ?>
            <tr>
                <th scope="row"><?= $selects['id']?></th>
                <td><?= $selects['nama_mobil']?></td>
                <td><?= $selects['brand_mobil']?></td>
                <td><?= $selects['warna_mobil']?></td>
                <td><?= $selects['tipe_mobil']?></td>
                <td><?= $selects['harga_mobil']?></td>
                <div class="col-md-6 p-3">
                        <a class="btn btn-outline-primary" href="form_detail_mobil.php">Detail</a>
                </div>
            </tr>
            <?php
            //<!--  **********************  1  **************************     -->
            }
            //<!--  **********************  2  **************************     -->
            } else {    
             echo "Tidak ada data dalam tabel.";
            }
            ?>
            <!--  **********************  2  **************************     -->
        </div>
    </center>
</body>
</html>
