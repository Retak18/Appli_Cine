<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Assets/style.css">
</head>

<body>
    <div class="head">
        <h1> Bienvenue sur l'appli Takcine </h1>
        <h2> Liste des films </h2>
    </div>
    
        <form name="fo" method="get" action="index.php">
            <div class="search-group">
                <input type="text" name="keyword" value="<?php echo htmlspecialchars($keyword ?? ""); ?>" placeholder="Rechercher un film" />
                <input type="date" name="display_date" value="<?php echo htmlspecialchars($display_date ?? ""); ?>" placeholder="Date de sortie" />
                <input type="submit" name="valider" value="Rechercher" />
            </div>
        </form>
        <div id="resultats">
            <?php if (!empty($movies)) : ?>
                <div id="nbr"><?= count($movies) . " résultat(s) trouvé(s)" ?></div>
                <ol>
                    <?php foreach ($movies as $movie) : ?>
                        <li>
                            <strong><?= htmlspecialchars($movie["titre"]); ?></strong>
                            <p><?= htmlspecialchars($movie["resum"]); ?></p>
                            <small <?php display:"flex flex-col" ?>>
                               <div class="info"> <strong>Année de production : </strong> <?= htmlspecialchars($movie["annee_prod"]); ?></div>
                               <div class="info"> <strong> Durée : </strong><?= htmlspecialchars($movie["duree_min"]); ?> minutes</div>
                               <div class="info"> <strong>Date de sortie: </strong><?= htmlspecialchars_decode($movie["date_debut_affiche"]); ?></div>
                               <div class="info"> <strong>jusqu'au : </strong><?= htmlspecialchars_decode($movie["date_fin_affiche"]); ?></div>
                            </small>
                        </li>
                    <?php endforeach; ?>
                </ol>
            <?php else : ?>
                <p>Aucun résultat trouvé.</p>
            <?php endif; ?>
        </div>

</body>

</html>