<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div>
    <a href="index.php?controller=interface" class="btn btn-warning btn-sm">Acceuil</a>
</div>
<div class="container">
    <h2 class="text-center">Liste des Produits</h2>

    <a class="btn btn-primary" href="?controller=produit&&action=add">Ajout Produit</a>
    <table class="table table-bordered border-primary text-center mt-4">
        <tr class="bg-primary">
            <th>ID</th>
            <th>LIBELLE</th>
            <th>PRIX UNITAIRE</th>
            <th>QUANTITE</th>
            <th>CATEGORIE</th>
            <th colspan="2">ACTIONS</th>
        </tr>
        <?php foreach ($products as $p){ ?>
            <tr>
                <td><?= $p->getId() ?></td>
                <td><?= $p->getLibelle() ?></td>
                <td><?= $p->getPu() ?></td>
                <td><?= $p->getQt() ?></td>
                <td><?= $p->getCategorie()->getLibelle() ?></td>


                <td>
                    <a class="btn btn-primary btn-sm" href="?controller=produit&&action=edit&id=<?= $p->getId() ?>">Edit</a>
                    <a class="btn btn-danger btn-sm" href="?controller=produit&&action=delete&id=<?= $p->getId() ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>