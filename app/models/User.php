<?php
    namespace app\models;
    use Flight;

    class User{
        private $db;

        public function __construct($db){
            $this->db = $db;
        }

        public function save($userData){
            $stmt = $this->db->prepare(
                "INSERT INTO takalo_users (
                username,
                email,
                password,
                mode
                ) VALUES (?, ?, ?, ?)"
            );

            $stmt->execute([
                $userData['username'],
                $userData['email'],
                $userData['password'],
                $userData['mode']
            ]);
        }

        public function findByEmail($email) {
            $stmt = $this->db->prepare("SELECT * FROM takalo_users WHERE email = ?");
            $stmt->execute([$email]);
            return $stmt->fetch();
        }

        public function updateUser($nouveauUser){
            $stmt = $this->db->prepare(
                "UPDATE takalo_users SET
                username = ?,
                email = ?,
                password = ?,
                mode = ?
                WHERE id = ?"
            );

            $stmt->execute([
                $nouveauUser['username'],
                $nouveauUser['email'],
                $nouveauUser['password'],
                $nouveauUser['mode'],
                $nouveauUser['id']
            ]);
        }

        public function deleteUser($id){
            $stmt = $this->db->prepare("DELETE FROM takalo_users WHERE id_user = ?");
            $stmt->execute([$id]);
        }

        public function findAll(){
            $stmt = $this->db->query("SELECT * FROM takalo_users");
            return $stmt->fetchAll();
        }
    }
?>