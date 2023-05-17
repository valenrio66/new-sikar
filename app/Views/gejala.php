<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/bootstrap.min.css'); ?>">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
    <title><?= $title; ?></title>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Gejala</th>
                    <th scope="col">Nama Gejala</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1; foreach ($getGejala as $gejala) { ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $gejala['kode_gejala']; ?></td>
                    <td><?= $gejala['nama_gejala']; ?></td>
                </tr>
            <?php $no++;
            } ?>
            </tbody>
        </table>
    </div>
</body>
</html>