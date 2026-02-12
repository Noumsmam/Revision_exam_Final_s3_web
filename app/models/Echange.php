<?php
    namespace app\models;
    use Flight;

    class Echange {
        private $db;

        public function __construct($db){
            $this->db = $db;
        }

        public function save($echangeData){
            $stmt = $this->db->prepare(
                "INSERT INTO takalo_echange (
                id_objet1, id_objet2, id_user1, id_user2, date_echange
                ) VALUES (?, ?, ?, ?, ?)"
            );

            $stmt->execute([
                $echangeData['id_objet1'],
                $echangeData['id_objet2'],
                $echangeData['id_user1'],
                $echangeData['id_user2'],
                $echangeData['date_echange']
            ]);
        }

        public function findById($id) {
            $stmt = $this->db->prepare("SELECT * FROM takalo_echange WHERE id_echange = ?");
            $stmt->execute([$id]);
            return $stmt->fetch();
        }

        public function updateEchange($nouvelEchange){
             $stmt = $this->db->prepare(
                "UPDATE takalo_echange SET
                id_objet1 = ?, id_objet2 = ?, id_user1 = ?, id_user2 = ?, date_echange = ?
                WHERE id_echange = ?"
            );

            $stmt->execute([
                $nouvelEchange['id_objet1'],
                $nouvelEchange['id_objet2'],
                $nouvelEchange['id_user1'],
                $nouvelEchange['id_user2'],
                $nouvelEchange['date_echange'],
                $nouvelEchange['id_echange']
            ]);
        }

        public function deleteEchange($id){
            $stmt = $this->db->prepare("DELETE FROM takalo_echange WHERE id_echange = ?");
            $stmt->execute([$id]);
        }

        public function findAll(){
            $stmt = $this->db->query("SELECT * FROM takalo_echange");
            return $stmt->fetchAll();
        }

        public function findByUser($id_user) {
            $stmt = $this->db->prepare("SELECT * FROM takalo_echange WHERE id_user1 = ? OR id_user2 = ?");
            $stmt->execute([$id_user, $id_user]);
            return $stmt->fetchAll();
        }
    }
?>