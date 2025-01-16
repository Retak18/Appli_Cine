<?php

class Movies extends Database{

    public function getAll(){
        $request = $this->db->prepare("SELECT * FROM film LIMIT 20");
        $request->execute();
        
       return  $request->fetchAll(PDO::FETCH_ASSOC);
        
    }

    public function searchMovies($keyword){
        $request = $this->db->prepare("SELECT * FROM film
        WHERE titre LIKE :keyword
        OR annee_prod LIKE :keyword
        ORDER BY titre");
        $request->execute([
            "keyword" => "%$keyword%"
        ]);

        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    public function searchMoviesWithDate($keyword, $date){
        $request = $this->db->prepare("SELECT * FROM film
        WHERE (titre LIKE :keyword
        OR annee_prod LIKE :keyword)
        AND date_debut_affiche >= :date
        AND date_fin_affiche <= :date
        ORDER BY titre");
        $request->execute([
            "keyword" => "%$keyword%",
            "date" => $date
        ]);

        return $request->fetchAll(PDO::FETCH_ASSOC);
    }


    
    public function getByYear($year) {
        $request = $this->db->prepare("SELECT * FROM film WHERE annee_prod = :year");
        $request->execute([
            "year" => $year
        ]);
        return  $request->fetchAll(PDO::FETCH_ASSOC);
        
    }
    public function getByGenre($genre){
        $request = $this->db->prepare("SELECT * FROM film WHERE genre_id = :genre");
        $request->execute([
            "genre"=> $genre
        ]);

        return  $request->fetchAll(PDO::FETCH_ASSOC);

        
    }

    // public function getName($titre){
    //     $request = $this->db->prepare("SELECT * FROM film WHERE titre = :search");
    //     $request->execute([
    //         "search" => $titre
    //     ]);
    //     return $request->fetchAll(PDO::FETCH_ASSOC);
        
    // }

}
