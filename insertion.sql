
INSERT INTO takalo_users (username, email, password, mode) VALUES
('admin', 'admin@takalo.com', 'admin123', 'ADMIN'),
('user1', 'user1@example.com', 'pass1', 'USER'),
('user2', 'user2@example.com', 'pass2', 'USER'),
('user3', 'user3@example.com', 'pass3', 'USER');

INSERT INTO takalo_categorie (nom_categorie) VALUES
('Électronique'),
('Vêtements'),
('Livres'),
('Mobilier'),
('Véhicules');

INSERT INTO takalo_objets (titre, description, prix, images, etat, id_proprietaire, id_categorie) VALUES
('Ordinateur portable', 'Un ordinateur portable en bon etat', 500.00, '/ordi1.jpg/ordi2.jpg', 'F', 2, 1),
('T-shirt rouge', 'T-shirt rouge taille M', 10.00, '/tshirt.jpg', 'F', 3, 2),
('Livre de programmation', 'Guide complet de PHP', 25.00, '/livre_php.jpg', 'F', 4, 3),
('Table basse', 'Table basse en bois', 100.00, '/table.jpg', 'F', 2, 4),
('Vélo', 'Vélo de montagne', 200.00, '/velo.jpg', 'F', 3, 5);

INSERT INTO takalo_histobjet (id_objet, id_user, date_ajout) VALUES
(1, 2, '2023-01-15'),
(2, 3, '2023-01-16'),
(3, 4, '2023-01-17'),
(4, 2, '2023-01-18'),
(5, 3, '2023-01-19');
