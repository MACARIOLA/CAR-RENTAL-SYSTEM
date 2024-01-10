-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 03:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id_dtb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars_tbl`
--

CREATE TABLE `cars_tbl` (
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `doors` int(11) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `information` text DEFAULT NULL,
  `car_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars_tbl`
--

INSERT INTO `cars_tbl` (`image`, `name`, `price`, `doors`, `capacity`, `information`, `car_id`) VALUES
('images/car_1.jpg', 'Mitsubishi Pajero', 5000.00, 4, 12, 'A good family car for road trips and adventures. It has a user-friendly infotainment system, advanced safety systems, and ample cargo space. Some say its a comfortable driving experience, with plenty of space for belongings and excellent safety features for children.', 1),
('images/car_2.jpg', 'Nissan Moco', 3000.00, 4, 1, 'The inside is made comfortable enough with the specs that made infotainment, safety and ease enhanced to new levels.', 2),
('images/car_3.jpg', 'Honda Fitta', 2500.00, 4, 4, 'Highs Phenomenally fuel conscious, magically spacious back seat, rides well for a small car. One of the roomiest and most comfortable cabins in the class.', 3),
('images/car_4.jpg', 'Skoda Laura', 3500.00, 4, 4, 'Good driving response better mileage and good stability on highways. Road presence is really good. It gives 13-14kmpl in the city and 18kmpl on the highway.', 4),
('images/car_5.jpg', 'Mazda LaPuta', 4000.00, 4, 4, 'A compact car that was produced by Mazda from 1999 to 2006. It falls into the category of Kei cars, which are small vehicles designed to comply with specific size and engine displacement regulations in Japan. Despite its somewhat peculiar name, the Laputa offers practicality and versatility in a compact package.', 5),
('images/car_6.jpg', 'Buick LaCrosse', 3500.00, 4, 4, 'The model boasts a very well finished interior and comfortable seats, alsong with a firm and composed ride. All of this plus responsive handling made the LaCrosse an impressive and competitive large sedan for the first time.', 6),
('images/cars2_1.jpg', 'Toyota Vios 1.5 Automatic', 5000.00, 4, 5, 'Its frugal range of engines offers great fuel economy for those who want a car that they can use in the city and take on long road trips out of town. Toyota has also given the Vios several new upgrades with its most recent facelift giving it access to LED headlights, foglights, and taillights, as well as a backup camera as standard for the G variant.', 7),
('images/cars2_2.jpg', 'Toyota Alphard 350X', 3000.00, 5, 8, 'Five stars. Ten out of ten. Perfection. Those are the words we would use to describe the Alphard\'s comfort, if not for one little nitpick. Now, you can doze off in the back of this thing, no problem. Independent suspension all around makes for a highly comfortable ride.', 8),
('images/cars2_3.jpg', 'Nissan Primastar Seaside by Dethleffs dCi 170', 2500.00, 4, 6, 'Mid-size panel van that offers a spacious cabin, flexible seating, and a kitchenette. It has a 170 PS (168 hp) diesel engine and a seven-speed dual-clutch transmission.', 9),
('images/cars2_4.jpg', 'Toyota Proace City 1.5 D-4D 100HP', 3500.00, 3, 7, 'A van that comes in two diesel variants: 1.5-litre BlueHDi with 100hp and 1.5-litre BlueHDi with 130hp. Reviews say the 100hp engine has enough power for highway driving and quick getaways.', 10),
('images/cars2_5.jpg', 'Honda Civic Hatchback 2023', 4000.00, 5, 5, 'Generally positive, with some reviewers praising its handling, performance, and safety. It offers admirable performance, a refined and roomy cabin, and plenty of connectivity and safety tech to please most users.', 11),
('images/cars2_6.jpg', 'Honda Civic V 3d 1.5 DXi', 3500.00, 3, 5, 'Has a 1.5-liter turbocharged four-cylinder engine that produces 176 horsepower and 240 Nm of torque. Reviews also say the engine never feels stressed and always has power in reserve.', 12),
('images/cars3_1.jpg', 'Suzuki Swace 1.8 Hybrid', 5000.00, 5, 5, 'Its sleek design, spacious interior, and fuel-efficient hybrid system made our journey both comfortable and economical. The intuitive technology features and smooth driving performance further enhanced overall satisfaction with this eco-friendly vehicle.', 13),
('images/cars3_2.jpg', 'Nissan Serena 2.0', 3000.00, 5, 8, 'Spacious and well-designed interior comfortably accommodated the family, and the smooth driving performance made the journey enjoyable. With its impressive fuel efficiency and user-friendly features, the Serena 2.0 proved to be a reliable and practical choice for the road trip.', 14),
('images/cars3_3.jpg', 'Toyota Innova (AN40) Kijang 2.7', 2500.00, 5, 7, 'Its spacious interior comfortably accommodated our group, and the smooth ride, coupled with efficient fuel consumption, made the journey enjoyable and cost-effective. The vehicle\'s reliability and modern features enhanced the overall experience, making it a top recommendation for anyone seeking a reliable and comfortable journey.', 15),
('images/cars3_4.jpg', 'Toyota Hilux 2021 Single-Cab', 3500.00, 2, 2, 'Its durable construction, dependable performance, and roomy interior ensured a smooth and stress-free travel experience. Whether maneuvering through urban landscapes or conquering challenging terrains, the Hilux\'s adaptability and efficient fuel consumption made our rental period exceptionally pleasant and trouble-free.', 16),
('images/cars3_5.jpg', 'Suzuki Ertiga', 4000.00, 5, 7, 'Delivering a seamless blend of comfort, spacious interiors, and fuel efficiency. Its versatile seating configuration and smooth handling were enjoyable. A reliable and practical choice for anyone seeking a hassle-free and economical experience.', 17),
('images/cars3_6.jpg', 'Nissan Livina', 3500.00, 5, 7, 'Roomy interior, excellent fuel efficiency, and modern features, it provided a comfortable and cost-effective travel experience. The smooth handling further contributed the overall satisfaction.', 18),
('images/cars4_1.jpg', 'GAC GN6', 5000.00, 5, 7, 'Offering a perfect blend of comfort, style, and functionality. Its spacious interior, user-friendly features, and smooth driving performance made it an ideal journey companion, ensuring a hassle-free and enjoyable experience.', 19),
('images/cars4_2.jpg', 'Mitsubishi Xpander Cross', 3000.00, 5, 7, 'Stylish design, spacious interior, and advanced features. Whether navigating urban streets or exploring off-the-beaten-path destinations, the Xpander Cross proved to be a versatile and reliable companion, making it the ideal choice for any adventure.', 20),
('images/cars4_3.jpg', 'Foton Toano', 2500.00, 4, 15, 'Offers a roomy and thoughtfully designed interior that ensures comfort. Its adept handling made driving a delight, and the commendable fuel efficiency made it a practical and dependable choice for road trips.', 21),
('images/cars4_4.jpg', 'GAZ Gazelle Next 2023', 3500.00, 5, 22, 'Its robust design, spacious interior, and fuel efficiency make it a reliable and cost-effective option for every customer. The vehicle\'s durability and modern features have not only enhanced but also contributed to positive feedback from satisfied clients.', 22),
('images/cars4_5.jpg', 'Nissan NV350 Urvan', 4000.00, 5, 18, 'The Nissan NV350 Urvan was an excellent rental choice, offering ample space, a smooth ride, and modern features. Highly recommended for a comfortable and hassle-free experience.', 23),
('images/cars4_6.jpg', 'Maxus V80', 3500.00, 5, 18, 'The Maxus V80 was a fantastic choice. Drove smoothly, and had modern features that made trips enjoyable. Highly recommended for a reliable and comfortable experience.', 24),
('images/cars5_1.jpg', 'BMW M850i xDrive Gran Coupé', 5000.00, 4, 4, 'The BMW M850i xDrive Gran Coupé is a fantastic choice offering a perfect mix of luxury and performance. With its stylish design, powerful engine, and advanced tech features, it provides a comfortable and thrilling driving experience. This car is not just transportation; it\'s a journey of luxury and excitement.', 25),
('images/cars5_2.jpg', 'BMW M3 Competition Touring', 3000.00, 5, 5, 'The BMW M3 Competition Touring surpassed my expectations. Its powerful engine, luxurious interior, and advanced tech features made for a comfortable and thrilling drive, making it an excellent choice for those seeking both style and performance.', 26),
('images/cars5_3.jpg', 'BMW Z4 Roadster', 2500.00, 2, 2, 'Its exciting performance, stylish design, and convertible top provided a fantastic driving experience. With a premium interior and advanced technology, it\'s the ideal choice for those seeking a thrilling and stylish road trips.', 27),
('images/cars5_4.jpg', 'Isuzu D-MAX', 3500.00, 4, 5, 'strong design and powerful performance made driving easy in both city and rough terrains. With spacious interiors, modern features, and great fuel efficiency, the D-MAX is a comfortable and reliable choice for any adventure.', 28),
('images/cars5_5.jpg', 'Suzuki Celerio', 4000.00, 5, 5, 'Perfect for city driving, and the roomy interior was surprisingly comfortable. The great fuel efficiency also made it a cost-effective option for a smooth and enjoyable trip.', 29),
('images/cars5_6.jpg', 'Suzuki S-Presso', 3500.00, 5, 5, 'The Suzuki S-Presso proved to be an excellent choice. Its compact size made city maneuvering a breeze, while its fuel efficiency saved us money on our journey. The modern interior design and user-friendly features added to the overall enjoyable driving experience.\r\n\r\n\r\n', 30);

-- --------------------------------------------------------

--
-- Table structure for table `contactus_tbl`
--

CREATE TABLE `contactus_tbl` (
  `cntctus_id` int(11) NOT NULL,
  `first_name` char(50) DEFAULT NULL,
  `last_name` char(50) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `message_text` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus_tbl`
--

INSERT INTO `contactus_tbl` (`cntctus_id`, `first_name`, `last_name`, `email_address`, `message_text`) VALUES
(1, 'testfname', 'testlname', 'testemailadd@example.yes', 'this is some example message for the database');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars_tbl`
--
ALTER TABLE `cars_tbl`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `contactus_tbl`
--
ALTER TABLE `contactus_tbl`
  ADD PRIMARY KEY (`cntctus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars_tbl`
--
ALTER TABLE `cars_tbl`
  MODIFY `car_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `contactus_tbl`
--
ALTER TABLE `contactus_tbl`
  MODIFY `cntctus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
