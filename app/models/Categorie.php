<?php
    namespace app\models;
    use Flight;

    class Categorie {
        private $db;

        public function __construct($db){
            $this->db = $db;
        }

        public function save($categorieData){
            $stmt = $this->db->prepare(
                "INSERT INTO takalo_categorie (
                nom_categorie
                ) VALUES (?)"
            );

            $stmt->execute([
                $categorieData['nom_categorie']
            ]);
        }

        public function findById($id) {
            $stmt = $this->db->prepare("SELECT * FROM takalo_categorie WHERE id_categorie = ?");
            $stmt->execute([$id]);
            return $stmt->fetch();
        }

        public function updateCategorie($nouvelleCategorie){
             $stmt = $this->db->prepare(
                "UPDATE takalo_categorie SET
                nom_categorie = ?
                WHERE id_categorie = ?"
            );

            $stmt->execute([
                $nouvelleCategorie['nom_categorie'],
                $nouvelleCategorie['id_categorie']
            ]);
        }

        public function deleteCategorie($id){
            $stmt = $this->db->prepare("DELETE FROM takalo_categorie WHERE id_categorie = ?");
            $stmt->execute([$id]);
        }

        public function findAll(){
            $stmt = $this->db->query("SELECT * FROM takalo_categorie");
            return $stmt->fetchAll();
        }
    }
?>