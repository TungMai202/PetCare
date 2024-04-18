-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 06:03 PM
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
-- Database: `petcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'you-phone', 'linhhuynh.dev', 'Tesst');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtile` varchar(200) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `subtile`, `type`, `description`, `image`) VALUES
(1, 'Tắm rửa toàn thân', 'Lầu 2', 1, 'Loại bỏ hoặc giảm thiểu mùi hôi không mong muốn từ lông và da của thú cưng, mang lại cảm giác tươi mát và thoải mái cho cả bạn và thú cưng của mình.', './assets/image/service/service1.jpg'),
(2, 'Vệ sinh tuyến mồ hôi\r\n', 'Lầu 2', 5, 'Chăm sóc và làm sạch tuyến mồ hôi của thú cưng, nhằm giữ cho người bạn lắm lông của chúng ta luôn trong tình trạng sạch sẽ và thoải mái.\r\n\r\n', './assets/image/service/service2.jpg'),
(3, 'Cắt, tỉa lông\r\n', 'Lầu 3', 2, 'Chăm sóc và tạo kiểu lông cho thú cưng, nhằm giữ cho họ có vẻ ngoài sạch sẽ, gọn gàng và hợp thời trang. Chúng tôi cũng có thể cắt, tỉa theo yêu cầu của bạn.', './assets/image/service/service3.jpg'),
(4, 'Cắt, mài móng\r\n', 'Lầu 3\r\n\r\n', 3, 'Sử dụng các công cụ cắt móng chuyên dụng, phần móng dư thừa sẽ bị loại bỏ một cách cẩn thận. Đảm bảo không cắt quá sâu, tránh cắt vào mạch máu bên trong móng, gây ra chảy máu và đau đớn cho thú cưng.\r\n\r\n', './assets/image/service/service4.jpg'),
(5, 'Massage thư giãn\r\n', 'Lầu 4\r\n\r\n', 4, 'Chăm sóc đặc biệt nhằm mang lại sự thoải mái và thư giãn cho thú cưng của bạn. Massage có thể giúp giảm căng thẳng, tăng cường tuần hoàn máu, và tạo ra một trạng thái thư giãn cho thú cưng của bạn.\r\n\r\n', './assets/image/service/service5.jpg'),
(6, 'Dịch vụ lưu trú\r\n', 'Lầu 4\r\n\r\n', 6, 'Cung cấp nơi ở và chăm sóc cho thú cưng trong khi chủ nhân của họ không thể chăm sóc trực tiếp. Đây là một giải pháp hữu ích cho những người đi du lịch, công tác mà không thể mang thú cưng theo.\r\n\r\n', './assets/image/service/service6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `id_product`, `fullname`, `phone`, `email`, `type`, `status`) VALUES
(1, 3, 'Linh', '134234234', 'linhhuynh.dev@gmail.com', 1, 0),
(2, 3, 'Test', '123123123', 'linhhuynh.dev', 3, 0),
(4, 2, 'Linh', '123123123123', 'linhhuynh.dev@gmail.com', 2, 0),
(5, 6, 'Test', '123123123123', 'linhhuynh.dev', 6, 0),
(6, 5, 'Linh', '123123123123', 'linhhuynh.dev@gmail.com', 4, 0),
(7, 2, 'Linh', '123123123123', 'linhhuynh.dev@gmail.com', 2, 0),
(8, 2, 'q', '12341231231', 'linhhuynh.dev@gmail.com', 5, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
