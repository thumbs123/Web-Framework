<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>

<div class="container">
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover">
        
            <tr>
                <th>No</th>
                <th>Genre</th>

            </tr>
            <?php $i = 1; ?>
            <?php foreach($semuagenre as $genre): ?>
                <tr>
                <td><?= $i++; ?></td>
                <td><?= $genre ["nama_genre"] ?> </td>
                <td>
                <a href="#" class="btn btn-success">Update</a>
                <a href="#" class="btn btn-delete">Delete</a>
                </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
</div>
<?= $this->endSection() ?>