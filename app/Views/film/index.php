<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Film</h1>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Nama Film</th>
            <th>Genre</th>
            <th>Durasion</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach ($data_film as $row) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?php echo $row['nama_film'] ?></td>
                <td><?php echo $row['id_genre'] ?></td>
                <td><?php echo $row['duration'] ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>