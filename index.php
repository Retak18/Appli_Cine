<?php

require_once("./Models/Database.class.php");
require_once("./Models/Movies.class.php");

$model = new Movies;
$movies = [];

// $movies = $model->getAll();
// var_dump($movies);



$keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';
$valider = isset($_GET['valider']) ? $_GET['valider'] : null;
// $genre = isset($_GET['genre']) ? $_GET['genre'] : null;
$year = isset($_GET['year']) ? $_GET['year'] : null;
$display_date = isset($_GET['display_date']) ? trim($_GET['display_date']) : '';

try {
    //----Savoir si le bouton est validé à vide ou non-----
    if (!empty($valider) && !empty($keyword)) {
        $movies = $model->searchMovies($keyword);
    }
    elseif (!empty($keyword) && !empty($display_date)) {
        // Recherche combinée (mot-clé + date)
        $movies = $model->searchMoviesWithDate($keyword, $display_date);
    } elseif (!empty($year)) {
        $movies = $model->getByYear($year);
    } else {
        $movies = $model->getAll();
    }
} catch (PDOException $e) {
    echo "erreur lors de l'execution de la requete : " . $e->getMessage();
}


//         $query = $model->getDb()->prepare("SELECT * FROM film WHERE titre OR annee_prod  LIKE :keyword");
//         $query->execute([
//             "keyword" => "%$keyword%"
//         ]);
//         $movies = $query->fetchAll(PDO::FETCH_ASSOC);
//         var_dump($movies);
//     } catch (PDOException $e) {
//         echo "erreur lors de l'execution de la requete : " . $e->getMessage();
//     }
// } else {
//     $movies = $model->getAll();
// }


include_once("./Views/Home.php");





// $db = new Database();
// $db->executeSqlFile('./cinema.sql');
// include_once("./Views/Home.php");
