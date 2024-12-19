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
    <a href="" class="btn btn-warning btn-sm">Acceuil</a>
</div>
<div class="container">
    <h2 class="text-center">Liste des Produits</h2>

    <a class="btn btn-primary" href="?controller=produit&&action=add">Ajout Produit</a>
    <table class="table table-bordered border-primary text-center mt-4">
        <tr class="bg-primary">
            <th>ID</th>
            <th>LIBELLE</th>
            <th>QUANTITE</th>
            <th>PRIX UNITAIRE</th>
            <th>ID CATEGORIE</th>
            <th colspan="2">ACTIONS</th>
        </tr>
        <?php while( $p = pg_fetch_assoc($produits)){ ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['libelle'] ?></td>
                <td><?= $p['quantite'] ?></td>
                <td><?= $p['prix_unitaire'] ?></td>
                <td><?= $p['idcategorie'] ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="?controller=produit&&action=edit&id=<?= $p['id'] ?>">Edit</a>
                    <a class="btn btn-danger btn-sm" href="?controller=produit&&action=delete&id=<?= $p['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>