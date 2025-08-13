CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT '#',
  `sort_order` int(11) DEFAULT 0,
  `active` tinyint(1) DEFAULT 1,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert sample banners
INSERT INTO `banners` (`title`, `image_path`, `link`, `sort_order`, `active`) VALUES
('Banner 1', 'img/banner/desk_header_SS_ef90395150.webp', '#', 1, 1),
('Banner 2', 'img/banner/desk_header_5_55a47745cb.webp', '#', 2, 1);
