-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 09:32 AM
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
-- Database: `fugitive_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_cases`
--

CREATE TABLE `all_cases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(11) DEFAULT NULL,
  `clause` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_cases`
--

INSERT INTO `all_cases` (`id`, `p_id`, `c_id`, `nid`, `name`, `contact`, `clause`, `title`, `area`, `created_at`, `updated_at`) VALUES
(1, 10001, 101, 12345678, 'AB Khan', 1716666160, '150', 'black smoke from the vehicle', 'Farmgate', '2024-04-26 12:06:03', '2024-04-28 01:02:16'),
(2, 10001, 102, 420188000, 'Rani', NULL, '157', 'In case of obstruction of road or public place', 'Farmgate', '2024-04-26 12:06:42', '2024-04-26 12:06:42'),
(3, 10002, 201, 123987456, 'Ms Mina', NULL, '158', 'If you use someone else\'s car without permission', 'Bosila', '2024-04-27 09:00:09', '2024-04-27 09:00:09'),
(4, 10002, 202, 12345678, 'AB Khan', NULL, '139', 'using Hydrolic horn', 'Bosila', '2024-04-27 09:03:05', '2024-04-27 09:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area_no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `area_no`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Farmgate', '2024-02-21 10:43:37', '2024-02-21 10:43:37'),
(5, 2, 'Uttora', '2024-02-21 10:45:30', '2024-02-21 10:45:30'),
(6, 3, 'Bosila', '2024-02-21 10:49:48', '2024-02-21 10:49:48');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_no` int(11) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `article_no`, `author_name`, `title`, `body`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kazi Hadiujjaman', 'Traffic Jam of Bangladesh and solution of this problem', 'Bangladesh is a most densely populated country in the world. The Traffic jam is the main and common problem in the country, especially Dhaka and Chittagong district. Dhaka is mega city and Dhaka is the capital of Bangladesh. More than twelve million people live in Dhaka and the population of Dhaka is increasing rapidly. So, many problems created by its huge population. Every day about seven hundred thousand rickshaws ply in road of Dhaka and the huge number of rickshaws is creating a Traffic jam in the city. Almost all the street is getting jammed by buses, CNG and rickshaws.\r\n\r\nTraffic jam has become a regular feature of Dhaka city. Traffic jam obstructed increasing our trade and commerce. If we out from home for office or school, we may face jam and only twenty minute way may take two hours because of the jam. So that we need more time to reach our destination and we lose our valuable time. The students also face problems to attend their class times. For Traffic jam we cannot complete our task write time so our trade and commerce affected. We cannot provide goods and material with in due time. We have to spend half of the day on the road if we want to go somewhere in the city. It also polluted our environment because many vehicles gathering together are created sound and air pollution.\r\n\r\nReasons behind\r\nMany reasons are for causing frequent jams in the Dhaka city. Illegal parking is one of the main reasons for Traffic jam. Many trucks, Cars and other vehicles are parked inside and on the road. The reason is faulty traffic signaling systems, narrow road spaces and overtaking tendency of drivers. Bus drivers are mostly responsible for a Traffic jam and they do not care about the traffic rules and signals.\r\n\r\n\r\nThe drivers and person\'s irresponsibility and lack of knowledge is also causing jams. The rickshaw pullers are mostly responsible for Traffic jam in the Dhaka city. There are about seven hundred thousand rickshaws are playing on the road of Dhaka city. So the huge rickshaw makes jam and it is one of the most uses vehicle in the city. The narrow roads are also causes Traffic jam because huge vehicle are playing in the road.\r\n\r\nCan we reduce Traffic jam?\r\nIf some steps follow then we may reduce somehow, but we cannot solve it permanently. The steps:\r\n\r\n• If we really want to solve this problem, then decentralization is a must of everything.Our Industrialization should be based on upozila it should not depend on metropolitan cities. And our garments may be shifted from Dhaka city. It will reduce increase population in the city.\r\n\r\n• Make a good public transport system that people get it easily and it will reduce Traffic jam.\r\n\r\n• If possible create a rickshaw and by cycle street beside the main street of the city and withdraw rickshaw from the main roads of Dhaka city then it may reduce Traffic jam.\r\n\r\n• Establish a good traffic system and create lane for different vehicles and strictly maintain it.\r\n\r\n• Main roads should be one way and all parking must bend in all roads.\r\n\r\n• People should use zebra cross and foot over bridge while crossing roads and should respect the law.\r\n\r\n• Increase parking facilities for vehicles.\r\n\r\n• Invalid vehicles must be prohibits in the road.\r\n\r\n• Everyone should follow the Traffic rules.\r\n\r\nSo everybody should care about Traffic rules that will helpful to prevent jamming. If we solve Traffic jam we get facilities of all sectors of our city life like trade and commerce and personal life also. We can reach our destination within short time and we will work more in every day.', 'article-images/1712555166.jpg', '2024-04-07 23:46:06', '2024-04-07 23:46:06'),
(2, 2, 'IDL Services Inc', 'How to drive in Bangladesh?', 'Driving in Bangladesh can be an exhilarating experience, offering you the chance to explore this beautiful country at your own pace. However, before you hit the road, it\'s essential to familiarize yourself with the local rules, regulations, and driving requirements such as the International Permit. In this article, we\'ll guide you through the road information, fines, fuel, speed limits, the International Driver\'s license, and useful emergency numbers, ensuring your journey is smooth and enjoyable.\r\n\r\nRoad Information:\r\nBangladesh\'s road network is diverse, ranging from modern highways to narrow rural roads. Traffic congestion is common in urban areas, especially during rush hours, so plan your travels accordingly. Be cautious of pedestrians, cyclists, and livestock on rural roads, and watch out for potholes or uneven surfaces.\r\n\r\nTraffic Fines:\r\nObeying traffic rules is crucial in Bangladesh. Common traffic offenses, such as overspeeding, running red lights, and using mobile phones while driving, can lead to hefty fines. Always follow the traffic rules to avoid unnecessary penalties.\r\n\r\nFuel:\r\nPetrol stations are widely available across cities and towns. Look for the signs \"Petrol\" for gasoline and \"Diesel\" for diesel fuel. Payments are usually made in cash, so ensure you have enough local currency with you.\r\n\r\nSpeed Limits:\r\nSpeed limits vary based on the area. In urban zones, the speed limit is usually 40-50 km/h (25-31 mph), while on highways, it may be around 80 km/h (50 mph). Always pay attention to signages indicating the speed limit.\r\n\r\nDriving License Requirements:\r\nForeign nationals can use an International Driving Permit (IDP) along with their valid driver\'s license from their home country to drive in Bangladesh. Make sure to keep these documents handy while driving.\r\n\r\nRoad Safety Tips:\r\na. Wear seatbelts at all times, and ensure all passengers do the same.\r\nb. Avoid driving at night, especially in rural areas with inadequate lighting.\r\nc. Use headlights during the daytime to enhance visibility.\r\nd. Drive defensively and expect unexpected maneuvers from other road users.\r\ne. Keep your vehicle\'s doors locked and windows rolled up in crowded areas to prevent theft.', 'article-images/1712582364.webp', '2024-04-08 07:19:24', '2024-04-08 07:19:24'),
(3, 3, 'GUANGZHE CHEN', 'Bangladesh paves the way to road safety', 'Road traffic deaths and injuries in Bangladesh have been a silent epidemic. Road traffic crashes are not only family tragedies, they hinder economic growth and sustainable development. Road crashes kill more than 4,000 Bangladeshis every year and countless more are seriously injured or disabled . Beyond those who are killed or disabled in road crashes, the stories of surviving family members reeling under acute economic shock is even more tragic. For the economic prosperity of the country and particularly the physical well-being of the youth, I see addressing road safety as an imperative development agenda.  \r\n\r\nDuring my visit to Bangladesh a few weeks ago, I was able to experience first-hand the high risk of traffic crashes on the congested, mixed-use streets of Dhaka. Even at very slow speeds, with a safe car and driver, we had two minor accidents where another vehicle  hit our car. This reminded me of the recent grassroots movement that had surged across the country demanding better government ownership of the issue of road safety and  stricter enforcement of traffic violations . It is very heartening to see the committed actions taken by the government to reform its legislative framework and to establish an independent ministerial committee to oversee the management of road safety. The new legislation is aimed at improving enforcement of traffic violations as well as driver licensing and vehicle registration systems. In meetings with senior Government officials, I noted their commitment to make Bangladesh’s roads safer. Civil society organizations have also played a key role in focusing attention on road safety, by  sensitizing the public, providing community training, and raising media awareness about the cause.   As Bangladesh recovers from the COVID pandemic, and economic activity increases, improving road safety is of paramount importance to the country’s development.   \r\n\r\nAt the same time it is equally important to recognize that road safety is not a transport issue alone. The issue requires a holistic approach and committed action from trauma care and emergency services, traffic police and enforcement, road engineering and most importantly the collaborative participation of non-governmental stakeholders. Bangladesh has many of the systems and partnerships already in place and with stronger political ownership, I am positive that crash deaths and injuries will be reduced in coming years.  \r\n\r\nThis month, the World Bank approved US$358 million in financing for a project to support Bangladesh with civil works, road safety goods, and technical advisory services to improve road safety management and outcomes in the country. The project will improve coordination between relevant ministries including Road Transport and Bridges, Health, and Home Affairs,  and will strengthen the existing institutional framework led by the National Road Safety Council. To reduce deaths from road traffic crashes by 30 percent on two high-risk national highways, the project will pilot comprehensive road safety measures such as improved engineering designs, IT management systems, pedestrian facilities, speed enforcement, and emergency care. Road-safety related governance and data management systems, including the roll-out of a national crash database system with gender-disaggregated data, which will enable evidence-based actions on road safety. \r\n\r\nThis project, which is the first stand alone World Bank-supported project on road safety in South Asia, demonstrates Bangladesh’s commitment to making safe roads a development priority. As a long-standing development partner of Bangladesh, the World Bank will engage closely with the ministry, civil society, NGOs, and the people of Bangladesh to make roads safer for Bangladeshis all over the country and to achieve the road safety targets set out in the Sustainable Development Goals that call for halving global road deaths and universal access to safe transport in cities by 2030. Ultimately, we hope that Bangladesh’s experience will be a model for improving road safety in a systemic way in other countries.', 'article-images/1712583227.jpg', '2024-04-08 07:21:35', '2024-04-08 07:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `case_files`
--

CREATE TABLE `case_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(11) DEFAULT NULL,
  `clause` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_files`
--

INSERT INTO `case_files` (`id`, `p_id`, `c_id`, `nid`, `name`, `contact`, `clause`, `title`, `area`, `created_at`, `updated_at`) VALUES
(1, 10001, 101, 12345678, 'AB Khan', 1716666160, '150', 'black smoke from the vehicle', 'Farmgate', '2024-04-26 12:06:03', '2024-04-28 01:02:16'),
(3, 10002, 201, 123987456, 'Ms Mina', NULL, '158', 'If you use someone else\'s car without permission', 'Bosila', '2024-04-27 09:00:09', '2024-04-27 09:00:09'),
(4, 10002, 202, 12345678, 'AB Khan', NULL, '139', 'using Hydrolic horn', 'Bosila', '2024-04-27 09:03:06', '2024-04-27 09:03:06');

-- --------------------------------------------------------

--
-- Table structure for table `citizens`
--

CREATE TABLE `citizens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `citizens`
--

INSERT INTO `citizens` (`id`, `nid`, `name`, `dob`, `image`, `created_at`, `updated_at`) VALUES
(1, 12345678, 'AB Khan', '1988-06-14', 'citizen-images/1708534915.png', '2024-02-21 11:01:55', '2024-02-21 11:01:55'),
(4, 450123123, 'Karim Rahman', '1976-06-08', '', '2024-02-28 01:15:37', '2024-02-28 01:15:37'),
(5, 111222333, 'Mr. Raju', '1991-04-03', '', '2024-02-28 11:52:19', '2024-04-18 23:18:32'),
(6, 123987456, 'Ms Mina', '2003-04-16', '', '2024-02-29 11:26:11', '2024-02-29 11:26:11'),
(7, 420188000, 'Rani', '1998-10-05', '', '2024-03-01 08:36:33', '2024-03-01 08:36:33');

-- --------------------------------------------------------

--
-- Table structure for table `dismisses`
--

CREATE TABLE `dismisses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dismisses`
--

INSERT INTO `dismisses` (`id`, `p_id`, `c_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 10001, 102, 'fine paid', '2024-04-26 12:08:49', '2024-04-26 12:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laws`
--

CREATE TABLE `laws` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `l_id` int(11) NOT NULL,
  `clause` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `fine` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laws`
--

INSERT INTO `laws` (`id`, `l_id`, `clause`, `title`, `fine`, `created_at`, `updated_at`) VALUES
(1, 1, '137', 'General fine', 200, '2024-02-25 05:34:58', '2024-02-25 05:34:58'),
(2, 2, '137*', '2nd Time General fine', 400, '2024-02-25 05:35:49', '2024-04-18 22:22:48'),
(3, 3, '139', 'using Hydrolic horn', 100, '2024-02-25 05:36:29', '2024-02-25 05:36:29'),
(5, 4, '140 (1)', 'Disobeying police orders, not cooperating', 500, '2024-04-08 22:37:08', '2024-04-08 22:37:08'),
(6, 5, '140', 'Disobeying the red light', 500, '2024-04-08 22:46:20', '2024-04-08 22:46:20'),
(7, 6, '140 (2)', 'Driving on the opposite side of one way road', 200, '2024-04-08 22:46:52', '2024-04-08 22:46:52'),
(8, 7, '142', 'For Reckless driving', 300, '2024-04-08 22:47:27', '2024-04-08 22:47:27'),
(9, 8, '142*', '2nd Time Reckless driving', 500, '2024-04-08 22:48:18', '2024-04-18 22:23:43'),
(10, 9, '148', 'Accidental fine', 500, '2024-04-08 22:49:06', '2024-04-08 22:49:06'),
(11, 10, '148*', '2nd Time  Accidental fine', 1000, '2024-04-08 22:50:09', '2024-04-18 22:25:03'),
(12, 11, '149', 'Riding a bike without safety', 300, '2024-04-08 22:55:08', '2024-04-08 22:55:08'),
(13, 12, '149*', 'Riding a bike without safety in case of bodily injury or property damage', 1000, '2024-04-08 22:55:59', '2024-04-18 22:25:14'),
(14, 13, '150', 'black smoke from the vehicle', 200, '2024-04-08 22:56:30', '2024-04-08 22:56:30'),
(15, 14, '151', 'External modification of vehicle and sale without approval', 2000, '2024-04-08 22:59:50', '2024-04-08 22:59:50'),
(16, 15, '152', 'If you drive without registration, fitness, or route permit', 1500, '2024-04-08 23:00:13', '2024-04-08 23:00:13'),
(17, 16, '152*', '2nd Time  If you drive without registration, fitness, or route permit', 2500, '2024-04-08 23:00:51', '2024-04-18 22:25:34'),
(18, 17, '154', 'If overloaded', 1000, '2024-04-08 23:01:25', '2024-04-08 23:01:25'),
(19, 18, '154*', '2nd Time If overloaded', 2000, '2024-04-08 23:03:00', '2024-04-18 22:25:46'),
(20, 19, '156', 'If you drive without permission', 750, '2024-04-08 23:03:28', '2024-04-08 23:03:28'),
(21, 20, '157', 'In case of obstruction of road or public place', 500, '2024-04-08 23:04:20', '2024-04-08 23:04:20'),
(22, 21, '158', 'If you use someone else\'s car without permission', 750, '2024-04-08 23:04:44', '2024-04-08 23:04:44'),
(23, 22, '000', 'If you use an illegal lane', 1000, '2024-04-08 23:05:07', '2024-04-08 23:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_20_104110_create_posts_table', 1),
(6, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(7, '2022_10_25_092552_create_sessions_table', 2),
(8, '2022_10_26_133431_create_roles_table', 3),
(9, '2022_10_26_133512_create_role_routes_table', 3),
(11, '2022_10_30_144110_create_user_role_table', 4),
(12, '2022_10_31_093248_create_categories_table', 5),
(13, '2022_10_31_093426_create_sub_categories_table', 5),
(14, '2024_02_20_144818_create_citizens_table', 5),
(15, '2024_02_21_140106_create_areas_table', 6),
(16, '2024_02_21_163758_create_areas_table', 7),
(17, '2024_02_21_165654_create_citizens_table', 8),
(18, '2024_02_21_174740_create_officers_table', 9),
(19, '2024_02_23_062130_create_users_table', 10),
(20, '2024_02_23_163034_create_laws_table', 11),
(21, '2024_02_25_113110_create_laws_table', 12),
(22, '2024_02_25_120459_create_case_files_table', 13),
(23, '2024_02_27_130239_create_users_table', 14),
(24, '2024_02_27_140429_create_case_files_table', 15),
(25, '2024_02_27_153118_create_dismisses_table', 16),
(26, '2024_02_28_045425_create_case_files_table', 16),
(27, '2024_03_04_174205_create_articles_table', 17),
(28, '2024_04_08_052459_create_articles_table', 18),
(29, '2024_04_08_053242_create_articles_table', 19),
(30, '2024_04_26_174143_create_all_cases_table', 20),
(31, '2024_04_26_180147_create_all_cases_table', 21),
(32, '2024_04_26_180252_create_case_files_table', 21),
(33, '2024_04_26_180329_create_dismisses_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `officers`
--

CREATE TABLE `officers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `posting` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`id`, `p_id`, `name`, `rank`, `posting`, `number`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 10001, 'James Brown', 'Sergeant', 'Farmgate', 1123456780, 'officer1@gmail.com', '$2y$10$/GezSl.H0.rR6aMA4KIjFuv28p8ORRA6HEdKjArLcJ8M0URN5C/7y', 'officer-images/1708620478.jpg', '2024-02-22 00:32:57', '2024-03-01 07:50:15'),
(3, 10002, 'Mr Smith', 'Sergeant', 'Bosila', 183742037, 'officer2@gmail.com', '$2y$10$HW5iaSuWJSOEZdDb9mexy.2mVlwqU73Fx44B8qtJ/tuAzZi9lFxSS', 'officer-images/1709308022.jpg', '2024-03-01 08:33:59', '2024-03-01 09:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cyirL6Gy6KAh0ss7EuyJKgRbkf6UVofSv19eFiWe', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOHowblN3ZEtJOTN0QXdxWVRkemRnb2hLN2NwUEpQUkFmY0lJV2lDUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHA6Ly9sb2NhbGhvc3QvbXlfbXNjX3Byb2plY3QvZnVnaXRpdmUtdHJhY2tlci9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1714286184),
('OowvmYfERCpMWaFSSJOW592SSfsdyLPvhyuxwmKS', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVjQ2YTh0OUk0TXpqWWtqSUtib1NuU3p0anNJWnFtWjNzb01HeXVjMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHA6Ly9sb2NhbGhvc3QvbXlfbXNjX3Byb2plY3QvZnVnaXRpdmUtdHJhY2tlci9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1714286184),
('ZvHcBugt4zigJn4Jv5L0TrXC6iZgzcEYWsaqjkaa', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMTFtNzNTamhTZ1BBR2VIQk5xd2xGUXBRNjZreEFXb3NaSjBhNUg0WiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHA6Ly9sb2NhbGhvc3QvbXlfbXNjX3Byb2plY3QvZnVnaXRpdmUtdHJhY2tlci9wdWJsaWMiO319', 1714289425);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `p_id`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Amanda Reahana Gomes', 'reahana233@gmail.com', NULL, '$2y$10$FsaVsKc2z5zRxNLbLv7XUOBSyuappPZvEZLRHf3idlSkfCPUP3RWW', 0, NULL, NULL, NULL, NULL, '2024-02-27 07:21:06', '2024-04-01 23:30:00'),
(2, 'James Brown', 'officer1@gmail.com', NULL, '$2y$10$CW6DwSRUcTOz4lJhu.5obeyfYr4kuLvIvWERX9HqmEEHMhXz88F36', 1, 10001, NULL, NULL, NULL, '2024-02-27 07:27:08', '2024-04-01 23:27:40'),
(3, 'Mr. Smith', 'officer2@gmail.com', NULL, '$2y$10$HzDXgSu53xgUZKTMDRQ41.gQtQ/c3s9seVk5/e2vViK1ovVH/YPhW', 1, 10002, NULL, NULL, NULL, '2024-03-01 09:02:52', '2024-03-01 09:02:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_cases`
--
ALTER TABLE `all_cases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `all_cases_c_id_unique` (`c_id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `areas_area_no_unique` (`area_no`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_article_no_unique` (`article_no`);

--
-- Indexes for table `case_files`
--
ALTER TABLE `case_files`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `case_files_c_id_unique` (`c_id`);

--
-- Indexes for table `citizens`
--
ALTER TABLE `citizens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `citizens_nid_unique` (`nid`);

--
-- Indexes for table `dismisses`
--
ALTER TABLE `dismisses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dismisses_c_id_unique` (`c_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `laws`
--
ALTER TABLE `laws`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `laws_l_id_unique` (`l_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officers`
--
ALTER TABLE `officers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `officers_p_id_unique` (`p_id`),
  ADD UNIQUE KEY `officers_email_unique` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_p_id_unique` (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_cases`
--
ALTER TABLE `all_cases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `case_files`
--
ALTER TABLE `case_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `citizens`
--
ALTER TABLE `citizens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dismisses`
--
ALTER TABLE `dismisses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laws`
--
ALTER TABLE `laws`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `officers`
--
ALTER TABLE `officers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
