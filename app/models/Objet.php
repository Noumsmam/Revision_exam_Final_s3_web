<?php
    namespace app\models;
    use Flight;

    class Objet {
        private $db;

        public function __construct($db){
            $this->db = $db;
        }

        public function save($objetData){
            $stmt = $this->db->prepare(
                "INSERT INTO takalo_objets (
                titre, description, prix, images, etat, id_proprietaire, id_categorie
                ) VALUES (?, ?, ?, ?, ?, ?, ?)"
            );

            $stmt->execute([
                $objetData['titre'],
                $objetData['description'],
                $objetData['prix'],
                $objetData['images'],
                $objetData['etat'],
                $objetData['id_proprietaire'],
                $objetData['id_categorie']
            ]);
        }

        public function findById($id) {
            $stmt = $this->db->prepare("SELECT * FROM takalo_objets WHERE id_objet = ?");
            $stmt->execute([$id]);
            return $stmt->fetch();
        }

        public function updateObjet($nouvelObjet){
             $stmt = $this->db->prepare(
                "UPDATE takalo_objets SET
                titre = ?, description = ?, prix = ?, images = ?, etat = ?, id_proprietaire = ?, id_categorie = ?
                WHERE id_objet = ?"
            );

            $stmt->execute([
                $nouvelObjet['titre'],
                $nouvelObjet['description'],
                $nouvelObjet['prix'],
                $nouvelObjet['images'],
                $nouvelObjet['etat'],
                $nouvelObjet['id_proprietaire'],
                $nouvelObjet['id_categorie'],
                $nouvelObjet['id_objet']
            ]);
        }

        public function deleteObjet($id){
            $stmt = $this->db->prepare("DELETE FROM takalo_objets WHERE id_objet = ?");
            $stmt->execute([$id]);
        }

        public function findAll(){
            $stmt = $this->db->query("SELECT * FROM takalo_objets");
            return $stmt->fetchAll();
        }

        public function findByProprietaire($id_proprietaire) {
            $stmt = $this->db->prepare("SELECT * FROM takalo_objets WHERE id_proprietaire = ?");
            $stmt->execute([$id_proprietaire]);
            return $stmt->fetchAll();
        }

        public function findByCategorie($id_categorie) {
            $stmt = $this->db->prepare("SELECT * FROM takalo_objets WHERE id_categorie = ?");
            $stmt->execute([$id_categorie]);
            return $stmt->fetchAll();
        }
    }
?>