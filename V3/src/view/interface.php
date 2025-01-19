<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interface</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
<div>
    <h4>Gestion des utilisateurs, catégories et produits</h4>
</div>
<div class="container mt-4">
    <a href="?controller=user" class="btn btn-secondary btn-lg">
        <i class="fas fa-users"></i> Utilisateurs
    </a>

    <a href="?controller=categorie" class="btn btn-success btn-lg ml-3">
        <i class="fas fa-tags"></i> Catégories
    </a>

    <a href="?controller=produit" class="btn btn-primary btn-lg">
        <i class="fas fa-box-open"></i> Produits
    </a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
