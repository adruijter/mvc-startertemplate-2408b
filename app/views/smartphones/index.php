<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">
        <div class="col-0"></div>
        <div class="col-12">
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-0"></div>
    </div>


    <div class="row mt-3">
        <div class="col-0"></div>
        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Merk</th>
                        <th scope="col">Model</th>
                        <th scope="col">Prijs(&euro;)</th>
                        <th scope="col">Geheugen(GB)</th>
                        <th scope="col">Besturingssysteem</th>
                        <th scope="col">Schermgrootte(inch)</th>
                        <th scope="col">Releasedatum</th>
                        <th scope="col">Gewicht(gr)</th>
                        <th scope="col">Simlockvrij</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['smartphones'] as $smartphone) : ?>
                        <tr>
                            <td><?= $smartphone->Merk; ?></td>
                            <td><?= $smartphone->Model; ?></td>
                            <td><?= $smartphone->Prijs; ?></td>
                            <td><?= $smartphone->Geheugen; ?></td>
                            <td><?= $smartphone->Besturingssysteem; ?></td>
                            <td><?= $smartphone->Schermgrootte; ?></td>
                            <td><?= $smartphone->Releasedatum; ?></td>
                            <td><?= $smartphone->Gewicht; ?></td>
                            <td><?= $smartphone->Simlockvrij; ?></td>
                            <td><a href="<?= URLROOT; ?>/smartphones/delete/<?= $smartphone->Id; ?>"><i class="bi bi-x-circle-fill text-danger"></a></i></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>/homepages/index">terug</a>
        </div>
        <div class="col-0"></div>

</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>