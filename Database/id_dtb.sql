-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 07:35 AM
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
  `car_id` int(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `car_type` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `doors` int(11) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `availability` int(22) DEFAULT NULL,
  `information1` text DEFAULT NULL,
  `information2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars_tbl`
--

INSERT INTO `cars_tbl` (`car_id`, `image`, `name`, `car_type`, `price`, `doors`, `capacity`, `availability`, `information1`, `information2`) VALUES
(1, 'images/car_1.jpg', 'Mitsubishi Pajero', 'SUV', 4500.00, 5, 7, 8, 'A good family car for road trips and adventures. It has a user-friendly infotainment system, advanced safety systems, and ample cargo space. Some say its a comfortable driving experience, with plenty of space for belongings and excellent safety features for children.', 'The Mitsubishi Pajero is a robust and capable SUV known for its off-road prowess. It combines rugged durability with modern comfort features. With a rich history, the Pajero has been a popular choice for both on-road and off-road adventures.'),
(2, 'images/car_2.jpg', 'Nissan Moco', 'Hatchback', 2800.00, 5, 4, 0, 'The inside is made comfortable enough with the specs that made infotainment, safety and ease enhanced to new levels.', 'The Nissan Moco is a compact hatchback designed for urban commuting. It typically features a small footprint, fuel efficiency, and practicality, making it suitable for city driving.'),
(3, 'images/car_3.jpg', 'Honda Fitta', 'Hatchback', 3200.00, 5, 5, 8, 'Highs Phenomenally fuel conscious, magically spacious back seat, rides well for a small car. One of the roomiest and most comfortable cabins in the class.', 'The Honda Fitta, also known as the Honda Jazz in some markets, is a versatile and compact hatchback. It\'s recognized for its flexible interior space, fuel efficiency, and sporty design.'),
(4, 'images/car_4.jpg', 'Skoda Laura', 'Sedan', 3800.00, 4, 5, 2, 'Good driving response better mileage and good stability on highways. Road presence is really good. It gives 13-14kmpl in the city and 18kmpl on the highway.', 'The Skoda Laura, also known as the Skoda Octavia in some regions, is a well-regarded sedan that offers a blend of style, comfort, and performance. Skoda, a Czech automaker, is known for producing reliable and sophisticated vehicles.'),
(5, 'images/car_5.jpg', 'Mazda LaPuta', 'Hatchback', 2500.00, 5, 4, 1, 'A compact car that was produced by Mazda from 1999 to 2006. It falls into the category of Kei cars, which are small vehicles designed to comply with specific size and engine displacement regulations in Japan. Despite its somewhat peculiar name, the Laputa offers practicality and versatility in a compact package.', 'The Mazda Laputa is a small hatchback with a distinctive design. It\'s known for its compact size, making it suitable for city driving, and often features Mazda\'s characteristic focus on driving dynamics.'),
(6, 'images/car_6.jpg', 'Buick LaCrosse', 'Sedan', 5000.00, 4, 5, 3, 'The model boasts a very well finished interior and comfortable seats, alsong with a firm and composed ride. All of this plus responsive handling made the LaCrosse an impressive and competitive large sedan for the first time.', 'The Buick LaCrosse is a premium sedan that emphasizes luxury and comfort. It typically features a spacious interior, advanced technology, and a smooth ride, catering to those seeking a refined driving experience.'),
(7, 'images/cars2_1.jpg', 'Toyota Vios 1.5 Automatic', 'Sedan', 3000.00, 4, 5, 2, 'Its frugal range of engines offers great fuel economy for those who want a car that they can use in the city and take on long road trips out of town. Toyota has also given the Vios several new upgrades with its most recent facelift giving it access to LED headlights, foglights, and taillights, as well as a backup camera as standard for the G variant.', 'The Toyota Vios is a popular compact sedan known for its reliability and fuel efficiency. It\'s often chosen for its practicality, making it suitable for daily commuting and small families.'),
(8, 'images/cars2_2.jpg', 'Toyota Alphard 350X', 'Luxury MPV', 8000.00, 5, 7, 2, 'Five stars. Ten out of ten. Perfection. Those are the words we would use to describe the Alphard\'s comfort, if not for one little nitpick. Now, you can doze off in the back of this thing, no problem. Independent suspension all around makes for a highly comfortable ride.', 'The Toyota Alphard is a luxury MPV (Multi-Purpose Vehicle) designed for comfort and spaciousness. It often caters to families or executives seeking a high-end, feature-rich vehicle.'),
(9, 'images/cars2_3.jpg', 'Nissan Primastar Seaside by Dethleffs dCi 170', 'Van/Minibus', 6500.00, 6, 9, 3, 'Mid-size panel van that offers a spacious cabin, flexible seating, and a kitchenette. It has a 170 PS (168 hp) diesel engine and a seven-speed dual-clutch transmission.', 'The Nissan Primastar, often converted by companies like Dethleffs, is a versatile van designed for various commercial and leisure purposes. It offers ample cargo space and can be adapted for camper van conversions.'),
(10, 'images/cars2_4.jpg', 'Toyota Proace City 1.5 D-4D 100HP', 'Van', 4500.00, 5, 6, NULL, 'A van that comes in two diesel variants: 1.5-litre BlueHDi with 100hp and 1.5-litre BlueHDi with 130hp. Reviews say the 100hp engine has enough power for highway driving and quick getaways.', 'The Toyota Proace City is a compact van designed for commercial use. It provides practical cargo space and efficient performance, catering to businesses requiring a reliable work vehicle.'),
(11, 'images/cars2_5.jpg', 'Honda Civic Hatchback 2023', 'Hatchback', 4200.00, 5, 5, 2, 'Generally positive, with some reviewers praising its handling, performance, and safety. It offers admirable performance, a refined and roomy cabin, and plenty of connectivity and safety tech to please most users.', 'The Honda Civic Hatchback is a sporty and stylish compact car known for its dynamic design and agile handling. It often features advanced technology and safety features.'),
(12, 'images/cars2_6.jpg', 'Honda Civic V 3d 1.5 DXi', 'Hatchback', 3800.00, 3, 5, 3, 'Has a 1.5-liter turbocharged four-cylinder engine that produces 176 horsepower and 240 Nm of torque. Reviews also say the engine never feels stressed and always has power in reserve.', 'The Honda Civic V 3d is a compact hatchback version of the popular Civic model. It typically combines sporty design elements with fuel efficiency and modern amenities.'),
(13, 'images/cars3_1.jpg', 'Suzuki Swace 1.8 Hybrid', 'Wagon', 4500.00, 5, 5, 2, 'Its sleek design, spacious interior, and fuel-efficient hybrid system made our journey both comfortable and economical. The intuitive technology features and smooth driving performance further enhanced overall satisfaction with this eco-friendly vehicle.', 'The Suzuki Swace is a hybrid wagon designed for efficiency and practicality. It often features a spacious interior, fuel-efficient hybrid technology, and modern safety features.'),
(14, 'images/cars3_2.jpg', 'Nissan Serena 2.0', 'MPV', 5000.00, 5, 8, 0, 'Spacious and well-designed interior comfortably accommodated the family, and the smooth driving performance made the journey enjoyable. With its impressive fuel efficiency and user-friendly features, the Serena 2.0 proved to be a reliable and practical choice for the road trip.', 'The Nissan Serena is a versatile MPV designed for families. It\'s known for its spacious interior, sliding doors, and various seating configurations to accommodate different passenger and cargo needs.'),
(15, 'images/cars3_3.jpg', 'Toyota Innova (AN40) Kijang 2.7', 'MPV', 4800.00, 5, 7, 2, 'Its spacious interior comfortably accommodated our group, and the smooth ride, coupled with efficient fuel consumption, made the journey enjoyable and cost-effective. The vehicle\'s reliability and modern features enhanced the overall experience, making it a top recommendation for anyone seeking a reliable and comfortable journey.', 'The Toyota Innova is a popular MPV with a reputation for reliability and versatility. It\'s often chosen for its comfortable interior, multiple seating configurations, and robust performance.'),
(16, 'images/cars3_4.jpg', 'Toyota Hilux 2021 Single-Cab', 'Pickup', 5500.00, 2, 2, 1, 'Its durable construction, dependable performance, and roomy interior ensured a smooth and stress-free travel experience. Whether maneuvering through urban landscapes or conquering challenging terrains, the Hilux\'s adaptability and efficient fuel consumption made our rental period exceptionally pleasant and trouble-free.', 'The Toyota Innova is a popular MPV with a reputation for reliability and versatility. It\'s often chosen for its comfortable interior, multiple seating configurations, and robust performance.'),
(17, 'images/cars3_5.jpg', 'Suzuki Ertiga', 'MPV', 3500.00, 5, 7, 0, 'Delivering a seamless blend of comfort, spacious interiors, and fuel efficiency. Its versatile seating configuration and smooth handling were enjoyable. A reliable and practical choice for anyone seeking a hassle-free and economical experience.', 'The Suzuki Ertiga is a compact MPV designed for families. It typically offers a balance of affordability, fuel efficiency, and practicality, making it a popular choice in some markets.'),
(18, 'images/cars3_6.jpg', 'Nissan Livina', 'MPV', 3800.00, 5, 7, 6, 'Roomy interior, excellent fuel efficiency, and modern features, it provided a comfortable and cost-effective travel experience. The smooth handling further contributed the overall satisfaction.', 'The Nissan Livina is an MPV designed for families, known for its spacious interior and versatile seating arrangements. It often combines practical features with modern styling.'),
(19, 'images/cars4_1.jpg', 'GAC GN6', 'MPV', 4200.00, 4, 6, 4, 'Offering a perfect blend of comfort, style, and functionality. Its spacious interior, user-friendly features, and smooth driving performance made it an ideal journey companion, ensuring a hassle-free and enjoyable experience.', 'The GAC GN6 is a midsize MPV designed for comfort and convenience. It often features a stylish exterior, a well-appointed interior, and advanced technology.'),
(20, 'images/cars4_2.jpg', 'Mitsubishi Xpander Cross', 'MPV/SUV', 4000.00, 5, 7, NULL, 'Stylish design, spacious interior, and advanced features. Whether navigating urban streets or exploring off-the-beaten-path destinations, the Xpander Cross proved to be a versatile and reliable companion, making it the ideal choice for any adventure.', 'The Mitsubishi Xpander Cross is a crossover MPV that blends SUV styling with MPV functionality. It typically offers a higher ground clearance and a more rugged appearance compared to traditional MPVs.\r\n'),
(21, 'images/cars4_3.jpg', 'Foton Toano', 'Van', 5500.00, 5, 12, 3, 'Offers a roomy and thoughtfully designed interior that ensures comfort. Its adept handling made driving a delight, and the commendable fuel efficiency made it a practical and dependable choice for road trips.', 'The Foton Toano is a van designed for commercial use, known for its spacious cargo area. It\'s often chosen for businesses requiring a reliable and efficient transport solution.'),
(22, 'images/cars4_4.jpg', 'GAZ Gazelle Next 2023', 'Van', 4500.00, 5, 13, 2, 'Its robust design, spacious interior, and fuel efficiency make it a reliable and cost-effective option for every customer. The vehicle\'s durability and modern features have not only enhanced but also contributed to positive feedback from satisfied clients.', 'The GAZ Gazelle Next is a versatile van designed for various commercial applications. It\'s known for its durability and adaptability to different business needs.'),
(23, 'images/cars4_5.jpg', 'Nissan NV350 Urvan', 'Van', 4000.00, 5, 10, 6, 'The Nissan NV350 Urvan was an excellent rental choice, offering ample space, a smooth ride, and modern features. Highly recommended for a comfortable and hassle-free experience.', 'The Nissan NV350 Urvan is a popular van for commercial and passenger transport. It\'s recognized for its spacious interior and durability, catering to businesses and transport services.'),
(24, 'images/cars4_6.jpg', 'Maxus V80', 'Van', 4500.00, 5, 15, 0, 'The Maxus V80 was a fantastic choice. Drove smoothly, and had modern features that made trips enjoyable. Highly recommended for a reliable and comfortable experience.', 'The Maxus V80 is a van designed for various commercial purposes. It often features a robust design, ample cargo space, and is customizable for different business needs.'),
(25, 'images/cars5_1.jpg', 'BMW M850i xDrive Gran Coupé', 'Luxury Coupe', 10000.00, 4, 4, 2, 'The BMW M850i xDrive Gran Coupé is a luxury grand tourer known for its powerful performance, sophisticated design, and advanced technology. It caters to those seeking a high-performance luxury car.', 'The BMW M850i xDrive Gran Coupé is a fantastic choice offering a perfect mix of luxury and performance. With its stylish design, powerful engine, and advanced tech features, it provides a comfortable and thrilling driving experience. This car is not just transportation; it\'s a journey of luxury and excitement.\r\n'),
(26, 'images/cars5_2.jpg', 'BMW M3 Competition Touring', 'Sports Sedan', 9000.00, 5, 5, 3, 'The BMW M3 Competition Touring surpassed my expectations. Its powerful engine, luxurious interior, and advanced tech features made for a comfortable and thrilling drive, making it an excellent choice for those seeking both style and performance.', 'The BMW M3 Competition Touring is a high-performance sports sedan that combines M Series performance with the practicality of a touring model. It\'s designed for enthusiasts seeking both speed and versatility.'),
(27, 'images/cars5_3.jpg', 'BMW Z4 Roadster', 'Sports Car/Roadster', 8500.00, 2, 2, 1, 'Its exciting performance, stylish design, and convertible top provided a fantastic driving experience. With a premium interior and advanced technology, it\'s the ideal choice for those seeking a thrilling and stylish road trips.', 'The BMW Z4 Roadster is a two-seater convertible sports car known for its dynamic driving experience and stylish design. It caters to drivers who appreciate open-top motoring and sporty performance.'),
(28, 'images/cars5_4.jpg', 'Isuzu D-MAX', 'Pickup', 5500.00, 4, 5, 1, 'strong design and powerful performance made driving easy in both city and rough terrains. With spacious interiors, modern features, and great fuel efficiency, the D-MAX is a comfortable and reliable choice for any adventure.', 'The Isuzu D-MAX is a rugged pickup truck known for its durability and off-road capabilities. It\'s often chosen for both commercial use and recreational purposes.'),
(29, 'images/cars5_5.jpg', 'Suzuki Celerio', 'Hatchback', 2500.00, 5, 5, 2, 'Perfect for city driving, and the roomy interior was surprisingly comfortable. The great fuel efficiency also made it a cost-effective option for a smooth and enjoyable trip.', 'The Suzuki Celerio is a compact hatchback known for its fuel efficiency and practicality. It\'s often chosen for urban commuting and small families.'),
(30, 'images/cars5_6.jpg', 'Suzuki S-Presso', 'Mini SUV/Hatchback', 2800.00, 5, 5, 1, 'The Suzuki S-Presso proved to be an excellent choice. Its compact size made city maneuvering a breeze, while its fuel efficiency saved us money on our journey. The modern interior design and user-friendly features added to the overall enjoyable driving experience.\r\n\r\n\r\n', 'The Suzuki S-Presso is a small crossover hatchback known for its compact size and affordability. It\'s designed for urban driving and often features a distinctive and bold design.');

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
