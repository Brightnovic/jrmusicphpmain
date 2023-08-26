-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 05:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jr`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `song_id` varchar(100) NOT NULL,
  `artist` varchar(100) DEFAULT NULL,
  `song_name` varchar(150) NOT NULL,
  `song` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `song_photo` text DEFAULT NULL,
  `genre` varchar(50) NOT NULL,
  `lyrics` text DEFAULT NULL,
  `label` varchar(100) DEFAULT NULL,
  `album` varchar(100) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `downloaded` int(11) NOT NULL DEFAULT 0,
  `upload_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`song_id`, `artist`, `song_name`, `song`, `content`, `song_photo`, `genre`, `lyrics`, `label`, `album`, `release_date`, `downloaded`, `upload_date`) VALUES
('aud_6498fbdfc3f35', 'Omah Lay', 'I', '{\"name\":\"168774755102 Omah Lay - i (NetNaija.com).mp3\",\"type\":[\"audio\",\"mpeg\"]}', NULL, '{\"name\":\"1687747551Screenshot 2023-06-11 114859.png\",\"type\":[\"image\",\"png\"]}', 'African', 'g', NULL, 'Boy Alone', NULL, 0, '2023-06-26 03:45:51'),
('aud_6498ff2a7be54', 'Omah Lay', 'soso', '{\"name\":\"Omah Lay - soso.mp3\",\"type\":[\"audio\",\"mpeg\"]}', NULL, '{\"name\":\"1687748394Screenshot 2023-06-11 114824.png\",\"type\":[\"image\",\"png\"]}', 'African', 'w', NULL, 'Boy Alone', NULL, 0, '2023-06-26 03:59:54'),
('aud_6499007ad71fc', 'patoranking', 'abobi', '{\"name\":\"Patoranking - Abobi (NetNaija.com).mp3\",\"type\":[\"audio\",\"mpeg\"]}', NULL, '{\"name\":\"1687748730Screenshot 2023-06-11 114859.png\",\"type\":[\"image\",\"png\"]}', 'African', 'jshdwhs dwedfgoiyeuwdf edfuihweud syduif heudifuih au r', NULL, '', NULL, 0, '2023-06-26 04:05:30'),
('aud_6499007aef611', 'patoranking', 'liar', '{\"name\":\"YCee_-_Liar.mp3\",\"type\":[\"audio\",\"mpeg\"]}', NULL, '{\"name\":\"1687748730Screenshot 2023-06-11 114859.png\",\"type\":[\"image\",\"png\"]}', 'African', 'jshdwhs dwedfgoiyeuwdf edfuihweud syduif heudifuih au r', NULL, '', NULL, 0, '2023-06-26 04:05:30'),
('aud_6499029773694', 'Omah Lay', 'temptations', '{\"name\":\"06 Omah Lay - temptations (NetNaija.com).mp3\",\"type\":[\"audio\",\"mpeg\"]}', NULL, '{\"name\":\"1687749271Screenshot 2023-06-11 114824.png\",\"type\":[\"image\",\"png\"]}', 'African', 's', NULL, '', NULL, 0, '2023-06-26 04:14:31'),
('aud_6499029786ce8', 'Omah Lay', 'safe haven', '{\"name\":\"09 Omah Lay - safe haven (NetNaija.com).mp3\",\"type\":[\"audio\",\"mpeg\"]}', NULL, '{\"name\":\"1687749271Screenshot 2023-06-11 114824.png\",\"type\":[\"image\",\"png\"]}', 'African', 'o', NULL, '', NULL, 0, '2023-06-26 04:14:31'),
('aud_64998f61b9656', 'asa', 'all i ever wanted', '{\"name\":\"09 Asa - All I Ever Wanted (feat. Amaarae) (NetNaija.com)(1).mp3\",\"type\":[\"audio\",\"mpeg\"]}', NULL, '{\"name\":\"1687785313IMG_0245 (1).PNG\",\"type\":[\"image\",\"png\"]}', 'African', 'i', NULL, '', NULL, 0, '2023-06-26 14:15:13'),
('aud_64998f61ca88d', 'asa', 'idg', '{\"name\":\"03 Asa - IDG (feat. Wizkid) (NetNaija.com).mp3\",\"type\":[\"audio\",\"mpeg\"]}', NULL, '{\"name\":\"1687785313IMG_0245 (1).PNG\",\"type\":[\"image\",\"png\"]}', 'African', 'd', NULL, '', NULL, 0, '2023-06-26 14:15:13'),
('aud_649b1f08b299f', 'burna boy', '20-10-20', '{\"name\":\"Burna-Boy-20-10-20.mp3\",\"type\":[\"audio\",\"mpeg\"]}', NULL, '{\"name\":\"1687887624Sexy-Halsey-Pictures-2019.webp\",\"type\":[\"image\",\"webp\"]}', 'African', '', NULL, '', NULL, 0, '2023-06-27 18:40:24'),
('news_649c4c0384483', NULL, 'News Title', NULL, 'News Content', '{\"name\":\"HALSEY-BIKINI-PHOTOS-DRINK.webp\",\"type\":[\"image\",\"webp\"]}', 'news', NULL, NULL, NULL, NULL, 0, '2023-06-28 16:04:35'),
('vid_649c1ed8263b5', 'burna boy', 'Sittin On Top Of The World (feat. 21 Savage)', '{\"name\":\"Burna Boy - Sittin On Top Of The World (feat. 21 Savage) .mp4\",\"type\":[\"video\",\"mp4\"]}', NULL, NULL, 'music', NULL, NULL, NULL, NULL, 0, '2023-06-28 12:51:52'),
('vid_649c20b033169', 'asake', 'Basquiat', '{\"name\":\"Asake - Basquiat .mp4\",\"type\":[\"video\",\"mp4\"]}', NULL, NULL, 'music', NULL, NULL, NULL, NULL, 0, '2023-06-28 12:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `date_reg` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `date_reg`) VALUES
('admin001', 'ndububright@gmail.com', '575039', '2023-06-28 16:43:55'),
('admin002', 'admin@gmail.com', 'adminuser', '2023-06-28 16:45:59'),
('admin003', 'winnyleo18@gmail.com', 'winnyleo', '2023-06-28 16:47:57'),
('admin004', 'founder@gmail.com', 'founderadmin', '2023-06-28 16:49:40');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `song_id` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `video` text NOT NULL,
  `genre` varchar(50) NOT NULL,
  `upload_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`song_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
