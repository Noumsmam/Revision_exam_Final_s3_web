<?php
    namespace app\models;
    use Flight;

    class Histobjet {
        private $db;

        public function __construct($db){
            $this->db = $db;
        }

        public function save($histobjetData){
            $stmt = $this->db->prepare(
                "INSERT INTO takalo_histobjet (
                id_objet, id_user, date_ajout
                ) VALUES (?, ?, ?)"
            );

            $stmt->execute([
                $histobjetData['id_objet'],
                $histobjetData['id_user'],
                $histobjetData['date_ajout']
            ]);
        }

        public function findById($id) {
            $stmt = $this->db->prepare("SELECT * FROM takalo_histobjet WHERE id_histobjet = ?");
            $stmt->execute([$id]);
            return $stmt->fetch();
        }

        public function updateHistobjet($nouvelHistobjet){
             $stmt = $this->db->prepare(
                "UPDATE takalo_histobjet SET
                id_objet = ?, id_user = ?, date_ajout = ?
                WHERE id_histobjet = ?"
            );

            $stmt->execute([
                $nouvelHistobjet['id_objet'],
                $nouvelHistobjet['id_user'],
                $nouvelHistobjet['date_ajout'],
                $nouvelHistobjet['id_histobjet']
            ]);
        }

        public function deleteHistobjet($id){
            $stmt = $this->db->prepare("DELETE FROM takalo_histobjet WHERE id_histobjet = ?");
            $stmt->execute([$id]);
        }

        public function findAll(){
            $stmt = $this->db->query("SELECT * FROM takalo_histobjet");
            return $stmt->fetchAll();
        }

        public function findByObjet($id_objet) {
            $stmt = $this->db->prepare("SELECT * FROM takalo_histobjet WHERE id_objet = ?");
            $stmt->execute([$id_objet]);
            return $stmt->fetchAll();
        }

        public function findByUser($id_user) {
            $stmt = $this->db->prepare("SELECT * FROM takalo_histobjet WHERE id_user = ?");
            $stmt->execute([$id_user]);
            return $stmt->fetchAll();
        }
    }
?>