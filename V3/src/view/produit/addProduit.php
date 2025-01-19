<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout Produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h4 class="text-center">Ajout Produit</h4>
            <form action="?controller=produit&action=save" method="POST">
                <div class="row mb-3">
                    <div class="col">
                        <input required type="text" name="libelle" autofocus placeholder="Libellé" class="form-control"><br>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <input required type="number" min="100" name="pu" placeholder="prix_unitaire" class="form-control"><br>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <input required type="number" min="1" name="qt" placeholder="quantité" class="form-control"><br>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <select required class="form-control" name="categorie_id">
                            <option value="">Sélectionnez une catégorie</option>
                            <?php foreach ($categories as $cat) : ?>
                                <option value="<?php echo htmlspecialchars($cat->getId()); ?>">
                                    <?php echo htmlspecialchars($cat->getId()) . ' - ' . htmlspecialchars($cat->getLibelle()); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <br>
                <div class="text-center">
                    <button class="mt-3 btn btn-success" type="submit">Ajouter</button>
                </div>

            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
