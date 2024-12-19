<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier Produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <h4 class="text-center">Modifier Produit</h4>
            <form action="?controller=produit&action=updateEedit" method="POST" class="container">
                <input type="hidden" name="id" value="<?= htmlspecialchars($produit['id']); ?>">

                <div class="mb-3">
                    <label for="libelle" class="form-label">Libellé</label>
                    <input type="text" autofocus name="libelle" value="<?= htmlspecialchars($produit['libelle']); ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="quantite" class="form-label">Quantité</label>
                    <input type="number" min="1" name="quantite" value="<?= htmlspecialchars($produit['quantite']); ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="prix_unitaire" class="form-label">Prix Unitaire</label>
                    <input type="number" min="100" name="prix_unitaire" value="<?= htmlspecialchars($produit['prix_unitaire']); ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="idcategorie" class="form-label">ID Catégorie</label>
                    <select id="idcategorie" name="idcategorie" class="form-control" required>
                        <option value="">Sélectionnez une catégorie</option>
                        <?php foreach ($categories as $cat) : ?>
                            <option value="<?= htmlspecialchars($cat['id']); ?>" <?= $cat['id'] == $produit['idcategorie'] ? 'selected' : ''; ?>>
                                <?= htmlspecialchars($cat['id']) . ' - ' . htmlspecialchars($cat['libelle']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
