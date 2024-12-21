-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 11:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'photo1.jpg', 'A peaceful beach glows under a vibrant sunset. A horse stands quietly by the shore, embodying calm. The sky shifts colors as the world seems to pause, timeless and serene.', '#069f78'),
(2, 1, 'photo2.jpg', 'It’s just me, the beach, and the gentle waves. I feel at peace here. The warmth of the sun on my skin and the sound of the waves help me clear my mind. The beach is where I escape. It brings me a sense of calm that I can’t find anywhere else. It’s my place to unwind.', '#069f78'),
(3, 1, 'photo3.jpg', 'A moment I will always cherish is my boyfriend’s silhouette sitting against Taal Lake’s golden sunset. The sky glows with shades of yellow, mirrored perfectly on the water, a blend of love and nature in harmony.', '#069f78'),
(4, 2, 'music1.jpg', 'Being part of Mozart’s Guild is more than making music together. We share a bond that goes beyond rehearsals and performances. We laugh, we support each other, and we make lasting memories. We’re a family. The connection we have is special. I’m grateful for every moment spent with them.', '#FF85A5'),
(5, 2, 'music2.jpg', 'Singing and dancing are more than just activities for me. They are how I express feelings I can’t always put into words. When I sing, I share my emotions through each note. When I dance, I connect with the rhythm. It’s not about performing—it’s about feeling the music and sharing it with others.', '#FF85A5'),
(6, 2, 'music3.jpg', 'Sarah Geronimo has always been an inspiration to me. Her strength and music motivate me to keep chasing my dreams. Every song reminds me why I started this journey. Her passion and dedication push me to believe in myself and keep going no matter the challenges.\r\n', '#FF85A5'),
(7, 3, 'travel1.jpg', 'The beaches of Batangas are magical. The clear waters and soft sand make it the perfect place to relax. Watching the sunsets here takes my breath away. It’s my go-to destination for unwinding and enjoying nature. The peaceful atmosphere makes me feel at home.', '#B06500'),
(8, 3, 'travel2.jpeg', 'Liliw is my escape from the busy world. The cool weather and calm vibe create the perfect atmosphere for peace. Whether I’m exploring or just sitting back to relax, Liliw offers a sense of tranquility that I can’t find anywhere else. It’s where I go to clear my mind.', '#B06500'),
(9, 3, 'travel3.JPG', 'Baguio holds a special place in my heart. The cool mountain air and scenic beauty make it unforgettable. The view from the mountains reminds me of how beautiful the Philippines is. Baguio is a place I always return to. It’s a reminder that there’s so much more to explore in our country.', '#B06500'),
(10, 4, 'love1.jpg', 'A joyful celebration of our achievements with college friends, filled with laughter, stories, and strong bonds. It wasn\'t just a celebration, but a reminder of our journey together and the friendship we\'ve built.', '#FF6347'),
(11, 4, 'love2.jpeg', 'A simple family dinner turned into a beautiful evening. The food was delicious, but the best part was the conversation. Sharing stories and laughing together made this dinner special. It’s the kind of moment that reminds me of the importance of family. These simple times are what truly matter.', '#FF6347'),
(12, 4, 'love3.jpeg', 'Spending time with my boyfriend is always special. Whether we’re out on an adventure or just enjoying each other’s company at home, I always cherish these moments. It’s the little things that make our time together meaningful. I’ll always treasure these moments in my heart.', '#FF6347');

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Photography', 'Capturing moments with my camera.\r\n', 'This island is my space to freeze time through photography. Every picture holds a memory, capturing landscapes or moments with loved ones, appreciating the beauty around me. Each snapshot tells a part of my story.', '#069f78', 'photo.jpg', 'Active'),
(2, 'Music', 'Where music and my voice come alive.', 'This island is where I truly come alive. Singing and dancing are my ways of expressing myself. When I perform, it feels like I’m speaking to the world without saying a word. Music is my heart, and I share it through every note and every move.\r\n', '#FF85A5', 'music.jpg', 'Active'),
(3, 'Travel', 'Exploring new places, one step at a time.', 'This island holds the memories of all the places I’ve visited. Each destination offers something unique and special. Whether it’s the excitement of discovering a new place or the peace of nature, every journey helps me grow.', '#B06500', 'travel.jpeg', 'Active'),
(4, 'Love', 'Cherishing moments of love and connection.\r\n', 'This island is all about the special moments with my loved ones. It’s the laughter, celebrations, and quiet times that make me appreciate how lucky I am to have such a loving family. Every moment together is a memory I hold.\r\n', '#FF6347', 'love.jpg', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
