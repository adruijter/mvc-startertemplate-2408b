<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h3><?= $data['title']; ?></h3>
            <a href="<?= URLROOT; ?>/homepages/index">terug</a>
        </div>
        <div class="col-2"></div>
    </div>


    <div class="row mt-3">
        <div class="col-2"></div>
        <div class="col-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Merk</th>
                        <th scope="col">Model</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['smartphones'] as $smartphone) : ?>
                        <tr>
                            <td><?= $smartphone->Merk; ?></td>
                            <td><?= $smartphone->Model; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-2"></div>

</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>