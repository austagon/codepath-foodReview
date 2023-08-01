-- Database: `publications`
--
CREATE DATABASE IF NOT EXISTS `FoodReviewApp`;
USE `FoodReviewApp`;

-- --------------------------------------------------------

--
-- Restaruant Table
--

CREATE TABLE restaurants (
    restaurant_id INT AUTO_INCREMENT PRIMARY KEY,
    restaurant_name VARCHAR(100) NOT NULL,
    photo_link VARCHAR(255),
    rating DECIMAL(3, 1) DEFAULT 0.0,
    description TEXT
);


--
-- Dumping data for table restaurants
--

INSERT INTO restaurants (restaurant_name, photo_link, rating, description)
VALUES
    ('Delicious Bites', 'https://example.com/delicious-bites.jpg', 4.5, 'Enjoy a diverse menu of flavorful dishes.'),
    ('Sunny Side Cafe', 'https://example.com/sunny-side-cafe.jpg', 3.8, 'A cozy cafe offering hearty breakfasts and aromatic coffee.'),
    ('Spice Fusion', 'https://example.com/spice-fusion.jpg', 4.2, 'Indulge in the vibrant flavors of Indian and Thai cuisine.')
;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `username`, `role`) VALUES
(1, 'bsmith', 'admin'),
(2, 'pjones', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `forename` varchar(128) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `location` varchar(128) NOT NULL,
  `age` tinyint NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`forename`, `surname`, `username`, `password`, `location`, `age`) VALUES
('Bill', 'Smith', 'bsmith', '$2y$10$1JZ.JEFMwbQV4IQBRBA4xOEttL8ZNbZX4Ujfp95HcwbnrgCz/KA4S', 'Salt Lake City', 26),
('Pauline', 'Jones', 'pjones', '$2y$10$ZTQddN7PweZRx13/vX/ti.EG2NlgdeQkDODJsBpQuFakTBwF5RLV2', 'Provo', 24);
COMMIT;