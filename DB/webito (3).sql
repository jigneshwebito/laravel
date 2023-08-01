-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 02:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webito`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`category`)),
  `sub_category` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`sub_category`)),
  `banner_image` varchar(255) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `tags` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`tags`)),
  `s_description` longtext NOT NULL,
  `description` longtext NOT NULL,
  `future_date` varchar(255) NOT NULL,
  `publication_status` varchar(255) NOT NULL,
  `active_status` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `isDeleted` int(14) NOT NULL DEFAULT 0,
  `isHide` int(14) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `category`, `sub_category`, `banner_image`, `video_url`, `tags`, `s_description`, `description`, `future_date`, `publication_status`, `active_status`, `date`, `isDeleted`, `isHide`, `updated_at`, `created_at`) VALUES
(20, '9 Realistic Ways to fund your tech project', '[\"2\"]', '[\"7\"]', '1645593148-.webp', 'f', '[\"1\",\"4\",\"3\"]', 'What is holding you back from your entrepreneurial dreams? Money or ideas?  Ever wanted to start an entrepreneurship adventure but got blocked by the lack of finances? Thinking business builds wings but technically speaking your pockets can not only hold you back but also demolish an entire innovative idea: Unfortunately, Money is the bloodline of any business.  \r\n\r\nWhen it comes to tech-based businesses such as mobile app development, websites, or systems,..etc, money is what you put first to even get a project onboarding of the development process and so entrepreneurs think: How do I fund my startup?\r\n\r\nThis blog presents the most efficient and realistic ways to potentially finance your idea:', '<h3><strong>Bootstrapping</strong></h3>\r\n\r\n<p>The word bootstrapping might not excite you the most but it is the very first alternative and the healthiest way you should think of. Bootstrapping refers to self-funding your tech business without requiring external methods at least at an initial operating level when you are just starting your business. Self-funding doesn&rsquo;t necessarily mean investing your personal money; it can include contributions of family and friends who won&rsquo;t require many formalities or compliances and wouldn&rsquo;t impose much-bothering interest rates.&nbsp;</p>\r\n\r\n<p>You shouldn&rsquo;t be scared to invest your own savings at the initial stages when you don&rsquo;t have enough success to drive other initiatives as the potential success of your first steps will help you get access to bigger options when investors consider you. Bootstrapping also spears you the responsibility to pay people who owe you money in case of failure.</p>\r\n\r\n<h3><strong>Crowdfunding&nbsp;</strong></h3>\r\n\r\n<p>If bootstrapping feels heavy on you, you can still achieve the same advantages by opting for crowdfunding. Crowdfunding has become a very popular option lately:&nbsp; It&rsquo;s like taking a loan, pre-order, contribution, or investments from more than one person at the same time. In crowdfunding, Anyone can contribute with money toward helping a business that they really believe in.</p>\r\n\r\n<p>There are multiple platforms online that do offer crowdfunding options and this how it works&nbsp;</p>\r\n\r\n<ol>\r\n	<li>&nbsp;The entrepreneur will post his business/idea on a crowdfunding platform.&nbsp;</li>\r\n	<li>Then detailly mention his goals in terms of numbers and time scope.</li>\r\n	<li>Averagely post estimation of how much funds are needed.</li>\r\n	<li>And then consumers can read about the business and invest freely the amounts they feel suitable&nbsp;</li>\r\n	<li>Those giving money will make online pledges with the promise of pre-buying the product or giving a donation. Anyone can contribute money toward helping a business that they really believe in.</li>\r\n</ol>\r\n\r\n<p>Opting for crowdfunding for a tech business is very recommended for the numerous advantages it holds such as:</p>\r\n\r\n<ul>\r\n	<li>Increases popularity of the product&nbsp;</li>\r\n	<li>Serves as a marketing channel&nbsp;</li>\r\n	<li>Enhances user trust in the project&nbsp;</li>\r\n	<li>Creates immediate demand for the product</li>\r\n	<li>Can attract venture-capital investment&nbsp;</li>\r\n</ul>\r\n\r\n<p>The only disadvantage I can see in crowdfunding is that it can take longer to gather funds as it presents a very competitive environment and there is a risk of overexposing your idea to &ldquo;project idea theft&rdquo;.</p>\r\n\r\n<p>With our 22 years of experience as&nbsp;<strong>an&nbsp;<a href=\"https://www.indianic.com/services/web/offshore-software-development\">offshore software development company</a>,&nbsp;</strong>we came across numerous fantastic digital solutions built with crowdfunding facilities. Some of the main platforms we heard our clients talk about are:&nbsp;&nbsp;<a href=\"https://www.indiegogo.com/\">Indiegogo</a>,&nbsp;<a href=\"http://www.rockethub.com/\">RocketHub</a>,&nbsp;<a href=\"https://dreamfunded.com/\">DreamFunded</a>, etc&hellip;</p>\r\n\r\n<h3><strong>Approach Angel Investors</strong></h3>\r\n\r\n<p>Angel investors are individuals with surplus cash and a keen interest to invest in upcoming startups or a group of people or a network actively analyzing proposals of entrepreneurs; some networks even offer mentorship and guidance alongside providing capital.</p>\r\n\r\n<p>Did you know that Google, yahoo, and Alibaba are the fruits of angel investments?? The whole world should be grateful!&nbsp;</p>\r\n\r\n<p>It is a practice that generally occurs in a company&rsquo;s early stages of growth but generally offers smaller amounts than other options.</p>\r\n\r\n<p>If you are looking to wing your costly digital project (such as&nbsp;<strong>on-demand apps</strong>&nbsp;or<strong>&nbsp;IoT</strong>-based franchises, etc&hellip;) you can approach angel investors like Indian Angel Network.</p>\r\n\r\n<h3><strong>Approach&nbsp; Business Incubators &amp; Accelerators</strong></h3>\r\n\r\n<p>Incubator and Accelerator programs do fund hundreds of startups every year and some of them do offer very interesting amounts that would not only help develop the digital solution but ensure its continuity and progressive maintenance. Dropbox and Airbnb are here easing our lives&nbsp; thanks to one of those programs:</p>\r\n\r\n<ul>\r\n	<li><strong>Incubator programs</strong>&nbsp;do parent the project and nurture its needs from space for activity, tools to training and network&nbsp;</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>Accelerator programs</strong>&nbsp;do help the business run smoother and take a giant step towards establishing their service/ product&nbsp;</li>\r\n</ul>\r\n\r\n<p>Both programs do offer the opportunity to establish great connections with experienced business owners, mentors, free investors, and fellow startups.&nbsp;</p>\r\n\r\n<h3><strong>Win a tech/ startup/ hackathon competition&nbsp;</strong></h3>\r\n\r\n<p>This one might be easier said than done! But taking the brave initiative of participating in a hackathon itself is highly beneficial for your business reputation and marketing to maximize its opportunities of fundraising, growth, and prosperity and also getting some media coverage. Winning the competition is a whole other level of proving to yourself that your idea is worth it and that profits are coming.</p>\r\n\r\n<p>To compete in such initiatives you need to have a proper idea, a clear business plan but above all a huge pitching ability to convince judges of the worth of your project. Personally, my team and I benefited from winning the &ldquo;best idea&rdquo; title at IndiaNIC infotech limited hackathon and it was one of the most fruitful experiences of our life.</p>\r\n\r\n<p>You need to make your project stand out in order to improve your success in these contests. You can either present your idea in person or pitch it through a business plan. It should be comprehensive enough to convince anyone that your idea is worth investing in.</p>\r\n\r\n<h3><strong>Government Programs</strong></h3>\r\n\r\n<p>Depending on where are you willing to start your business, many governments around the world do encourage tech ideas and do offer huge amounts of funds to help those ideas turn into businesses and contribute to the national economy.&nbsp;</p>\r\n\r\n<p>In most cases, the process is kinda long and you are required to conduct very deep market research, submit your business plan and wait for If you comply with the eligibility criteria, the Government grants as a funding option could be one of the best. You just need to make yourself aware of the various Government initiatives.&nbsp;</p>\r\n\r\n<h3><strong>Product pre-sales</strong></h3>\r\n\r\n<p>Very common around complex digital systems, such as Design systems and complex software, pre-sales is a highly effective way to raise the money needed for financing your business. For example, Apple and Samsung launch pre-order campaigns way before the official launch, and even the mid-development process</p>\r\n\r\n<h3><strong>Venture capital</strong></h3>\r\n\r\n<p>Venture capitals are funds meant to be invested in potential successful business ideas. Although They usually invest in ideas that are already beyond the planning phase and start generating ideas against equity and do look for an initial public offering (IPO) or an acquisition of the idea, VCs do guarantee the scalability and sustainability of the business. Fast-growth companies like Flipkart, Uber, etc benefited tens of millions of dollars that can be used to invest, network, and grow their company quickly.</p>\r\n\r\n<p>The disadvantage though is that VCs might be offering a lifetime opportunity but they do also look to cover up their investment quickly from 3 to 5 years so if you see your idea might need a longer period then that venture capital might not be suitable for you.</p>\r\n\r\n<h3><strong>Bank loans</strong></h3>\r\n\r\n<p>You might be thinking that a bank is the first destination that entrepreneurs look up to but you are WRONG. Bank loans should be your last option!</p>\r\n\r\n<p>Bank loans are a legitimate way to get money fast and stably to fund your idea. Banks to offer two types of loans for a business idea:</p>\r\n\r\n<ul>\r\n	<li><strong>Working capital loan</strong>: is a loan required to run a first complete cycle of revenue-generating operations whose limit is fixed with hypothecating stocks and debtors.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>Funding loan</strong>&nbsp;is a long process that involves full preparation of documents, plans, project report, etc&nbsp;</li>\r\n</ul>\r\n\r\n<p>The advantage of benefiting from periods of exoneration and long term repayment modality but that comes at very high-interest percentages</p>\r\n\r\n<p>Many entrepreneurs refuse to look for loans for many reasons including religious reasons as some religions ban the use of loans.</p>\r\n\r\n<p>&nbsp;When you have decided on taking a loan yet you are not eligible for a bank loan or you got rejected you can opt for microfinance providers with reasonable credit ratings&nbsp;</p>\r\n\r\n<h3><strong>What&rsquo;s next?</strong>&nbsp;</h3>\r\n\r\n<p>Unlock market opportunities and&nbsp;<a href=\"https://www.indianic.com/enquiry\"><strong>contact our experts</strong></a>&nbsp;for the best quotes, payment modalities, and project discovery!</p>', '2022-03-11', 'publish', '1', '2022-02-23', 0, 0, '2022-03-10 08:12:55', '2022-02-22 23:42:28'),
(21, '18-Apr-2017', '[\"1\",\"2\"]', '[\"8\",\"9\"]', '1645593314-.jpg', '24-Sep-1993', '[\"4\",\"1\",\"3\"]', 'Nemo est voluptatem', '<p>sfs</p>', '1983-09-04', 'publish', '1', '2022-02-23', 0, 0, '2022-03-12 07:07:14', '2022-02-22 23:45:14'),
(22, 'Leveraging Kubernetes for Container Management', '[\"1\",\"2\"]', '[\"10\",\"12\"]', '1645594007-.webp', 'sd', '[\"4\",\"1\",\"3\"]', 'Traditionally in order to deploy applications/software operations, teams used to procure hardware such as physical servers, networking components, storage drives and then set it up in the on-prem data centers. With the advent of the Cloud, the hurdle of procuring, setting up, and managing physical hardware for creating servers was gone as it enabled us to set up on-demand Infrastructure in the cloud as and when required', '<h3><strong>The Existing Problems in Production Environment</strong></h3>\r\n\r\n<p>Cloud Computing resulted in a paradigm shift in the Software industry and changed the way people build software. It enabled us to craft solutions and provided us with Enterprise-Grade, scalability, and reliability. However, there was one small problem that was in existence for a very long time, and it resulted in bottlenecks while performing deployments in production environments.&nbsp;</p>\r\n\r\n<p>It was the dependency of any software on its physical environment. Many times we have observed that a piece of software works fine in a developer&rsquo;s local environment but does not work or breaks in production environments. Thus dependency of software on the environments used to result in bottlenecks as it resulted in unstable builds in production environments.&nbsp;</p>\r\n\r\n<h3><strong>How does Docker solve this problem?</strong></h3>\r\n\r\n<p>Docker provides a runtime environment for deploying our applications in the form of containers. Basically, it is a pre-packaged lightweight virtualized environment, which comprises of only the bare minimum required components that are needed to make sure that the software can function properly. Since it only contains the required libraries it is very lightweight and thus it becomes easy to build, distribute and ship our application in the form of such containers.&nbsp;</p>\r\n\r\n<p>Docker helps us by providing a runtime environment for the orchestration and management of these containers. With Docker, we can Build, Distribute and Ship our software in an easy and efficient manner. It also helps us in automating the build and deployment process by offering out of the box integration with various CI/CD tools, secure ways of distributing builds in form of docker images, and also offers enterprise-grade scalability which makes it easy for us to handle a huge amount of traffic into our environment.&nbsp;</p>', '2022-02-19', 'publish', '1', '2022-02-23', 0, 0, '2022-02-23 23:04:07', '2022-02-22 23:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE `article_category` (
  `id` int(14) NOT NULL,
  `category` varchar(200) NOT NULL,
  `sub_category` int(14) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `active_status` varchar(200) NOT NULL,
  `isHide` int(20) NOT NULL DEFAULT 0,
  `isDeleted` int(60) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article_category`
--

INSERT INTO `article_category` (`id`, `category`, `sub_category`, `banner_image`, `active_status`, `isHide`, `isDeleted`, `updated_at`, `created_at`) VALUES
(1, 'Blog', NULL, '1645600556-sddsfdf.webp', 'active', 0, 0, '2022-02-24 01:37:50', '2022-02-22 23:37:55'),
(2, 'Automation', NULL, '1645600556-sddsfdf.webp', 'in-active', 0, 0, '2022-02-24 01:38:14', '2022-02-22 23:38:57'),
(3, 'Enterprises', NULL, '1645600556-sddsfdf.webp', 'active', 0, 0, '2022-02-22 23:39:14', '2022-02-22 23:39:14'),
(4, 'Mobile Apps', NULL, '1645600556-sddsfdf.webp', 'active', 0, 0, '2022-02-22 23:39:26', '2022-02-22 23:39:26'),
(5, 'Software Develpoers', NULL, '1645600556-sddsfdf.webp', 'active', 0, 0, '2022-02-24 01:38:04', '2022-02-22 23:39:42'),
(6, 'UI/UX', NULL, '1645600556-sddsfdf.webp', 'in-active', 0, 0, '2022-02-24 01:37:56', '2022-02-22 23:39:55'),
(7, 'sub1', 1, '1645600556-sddsfdf.webp', 'in-active', 1, 0, '2022-02-24 01:35:19', '2022-02-23 01:45:43'),
(8, 'sub2', 2, '1645849803-rbg.webp', 'in-active', 0, 0, '2022-02-25 23:00:04', '2022-02-25 23:00:04'),
(9, 'sub3', 3, '1645850429-asdadsadsa.jpg', 'active', 0, 0, '2022-02-25 23:10:29', '2022-02-25 23:10:29'),
(10, 'sub4', 4, '1645850489-chelsi vachani.jpg', 'active', 0, 0, '2022-02-25 23:11:29', '2022-02-25 23:11:29'),
(11, 'sub5', 5, '1645852693-rbg.webp', 'active', 0, 0, '2022-02-25 23:48:13', '2022-02-25 23:48:13'),
(12, 'sub6', 6, '1645852734-dasdadasdasd.webp', 'active', 0, 0, '2022-02-25 23:48:54', '2022-02-25 23:48:54'),
(13, 'sub7', 1, '1645852871-chelsi vachani.jpg', 'active', 0, 0, '2022-02-25 23:51:11', '2022-02-25 23:51:11'),
(14, 'sub8', 2, '1645864417-chelsi vachani.webp', 'active', 0, 0, '2022-02-26 03:03:37', '2022-02-26 03:03:37'),
(15, 'sub9', 2, '1645864439-asfad.webp', 'active', 0, 0, '2022-02-26 03:03:59', '2022-02-26 03:03:59'),
(16, 'sub10', 3, '1645864485-Hector Carpenter.webp', 'in-active', 0, 0, '2022-02-26 03:04:45', '2022-02-26 03:04:45'),
(17, 'sub11', 3, '1645878374-fdsdsdfsf.png', 'active', 0, 0, '2022-02-26 06:56:14', '2022-02-26 06:56:14'),
(18, 'sub12', 3, '1645878456-sdfsdfsdfsdfsdfsdfsdfsdf.jpg', 'active', 0, 0, '2022-02-26 06:57:36', '2022-02-26 06:57:36'),
(19, 'sub13', 4, '1645878486-chelsi vachani.webp', 'active', 0, 0, '2022-02-26 06:58:06', '2022-02-26 06:58:06'),
(20, 'sub14', 5, '1645878529-lensi.jpg', 'active', 0, 0, '2022-02-26 06:58:49', '2022-02-26 06:58:49'),
(21, 'sub15', 6, '1645878547-lensi.webp', 'active', 0, 0, '2022-02-26 06:59:07', '2022-02-26 06:59:07'),
(29, 'sub16', 1, '1646303273-sub16.jpg', 'active', 0, 0, '2022-03-03 04:57:53', '2022-03-03 04:57:53'),
(30, 'Sports', NULL, '1646303316-Sports.jpg', 'active', 0, 0, '2022-03-03 04:58:36', '2022-03-03 04:58:36'),
(31, 'sub17', 4, NULL, 'active', 0, 0, '2022-03-07 03:26:54', '2022-03-07 03:26:54'),
(32, 'Entertainment', NULL, NULL, 'active', 0, 0, '2022-03-07 03:27:39', '2022-03-07 03:27:39'),
(33, 'sub18', 32, '1647087414-sub18.jpg', 'active', 0, 0, '2022-03-12 06:46:54', '2022-03-12 06:46:54');

-- --------------------------------------------------------

--
-- Table structure for table `article_tag`
--

CREATE TABLE `article_tag` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `active_status` varchar(200) NOT NULL,
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `isHide` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article_tag`
--

INSERT INTO `article_tag` (`id`, `name`, `active_status`, `isDeleted`, `isHide`, `updated_at`, `created_at`) VALUES
(1, 'tag1', '1', 0, 0, '2022-03-12 07:24:37', '2022-02-19 03:35:57'),
(2, 'tag2', '1', 0, 0, '2022-03-12 06:42:30', '2022-02-19 03:36:39'),
(3, 'tag3', '1', 0, 0, '2022-03-12 06:42:46', '2022-02-19 06:44:59'),
(4, 'tag4', '1', 0, 0, '2022-03-12 06:42:37', '2022-02-19 06:45:08'),
(5, 'tag5', '1', 0, 0, '2022-03-12 06:42:40', '2022-02-22 03:53:30'),
(6, 'tag6', '1', 0, 0, '2022-03-12 06:44:39', '2022-03-12 06:43:19'),
(7, 'tag7', '1', 0, 0, '2022-03-12 07:24:09', '2022-03-12 07:14:17'),
(8, 'tag8', '1', 0, 0, '2022-03-12 07:17:20', '2022-03-12 07:17:20'),
(9, 'tag9', '1', 0, 0, '2022-03-12 07:17:45', '2022-03-12 07:17:45'),
(10, 'tag10', '1', 0, 0, '2022-03-12 07:18:24', '2022-03-12 07:18:24'),
(11, 'tag11', '1', 0, 0, '2022-03-12 07:23:28', '2022-03-12 07:23:28'),
(12, 'tag12', '1', 0, 0, '2022-03-12 07:23:40', '2022-03-12 07:23:40'),
(13, 'tag13', '1', 0, 0, '2022-03-12 07:24:12', '2022-03-12 07:23:56'),
(14, 'tag14', 'in-active', 1, 0, '2022-03-12 07:24:57', '2022-03-12 07:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(14) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `subject`, `comment`, `date`, `updated_at`, `created_at`) VALUES
(1, 'chelsi vachani', 'quwovujizy@mailinator.com', 'egfefg', NULL, '2022-02-22 05:40:39', '2022-02-22 00:01:46', '2022-02-22 00:01:46'),
(2, 'chelsi vachani', 'diludexac@mailinator.com', 'egfefg', 'sdff', '2022-02-22 05:40:39', '2022-02-22 00:07:49', '2022-02-22 00:07:49'),
(3, 'asd', 'quwovujizy@mailinator.com', 'asdasdasd', 'sdff', '2022-02-22 05:40:54', '2022-02-22 00:10:54', '2022-02-22 00:10:54'),
(6, 'shivani savaliya', 'hyhawil@mailinator.com', 'asdasdasdasdasdasd', 'asdasdasdasdasdasdasdasdasdasdasd', '2022-02-22 06:17:27', '2022-02-22 00:47:27', '2022-02-22 00:47:27'),
(7, 'shivani savaliya', 'satyambhimani@gmail.com', 'emial', 'asdasdasdasdasdasdasdasdasdasdasd', '2022-02-22 07:04:16', '2022-02-22 01:34:16', '2022-02-22 01:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(60) DEFAULT NULL,
  `service` varchar(60) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`username`, `email`, `phone`, `service`, `message`, `updated_at`, `created_at`) VALUES
('nevil', 'practicemail007@gmail.com', NULL, 'testing contact form', 'my first msg', '2021-05-19 08:42:07', '2021-05-19 08:42:07'),
('jainish', 'satyam@gmail.com', NULL, 'try', 'second msg', '2021-05-19 08:45:13', '2021-05-19 08:45:13'),
('brijesh', 'practicemail007@gmail.com', NULL, 'testing contact form', 'send msg', '2021-05-19 08:47:45', '2021-05-19 08:47:45'),
('satyam', 'bhimaninevil72@gmail.com', NULL, 'testing database', 'project', '2021-05-19 22:15:41', '2021-05-19 22:15:41'),
('parth', 'satyam@gmail.com', NULL, 'testing contact form', 'msg send', '2021-05-19 22:42:23', '2021-05-19 22:42:23'),
('parth', 'pkpatel7656@gmail.com', NULL, 'hello', 'dhfvbjvbuaevbjhadcbjavbevkljdcnklevbuiew', '2021-05-19 22:48:36', '2021-05-19 22:48:36'),
('parth', 'pkpatel7656@gmail.com', NULL, 'hello', 'dhfvbjvbuaevbjhadcbjavbevkljdcnklevbuiew', '2021-05-19 22:51:48', '2021-05-19 22:51:48'),
('jainish', 'pkpatel7656@gmail.com', NULL, 'parth mail', 'hello this is success mail', '2021-05-19 22:55:24', '2021-05-19 22:55:24'),
('jainish', 'pkpatel7656@gmail.com', NULL, 'parth mail', 'hello this is success mail', '2021-05-19 22:56:06', '2021-05-19 22:56:06'),
('jainish', 'pkpatel7656@gmail.com', NULL, 'parth mail', 'hello this is success mail', '2021-05-19 22:57:24', '2021-05-19 22:57:24'),
('jainish', 'pkpatel7656@gmail.com', NULL, 'parth mail', 'hello this is success mail', '2021-05-19 22:57:47', '2021-05-19 22:57:47'),
('preet', 'preet@gmail.com', NULL, 'preets msg', 'mail send', '2021-05-19 23:00:10', '2021-05-19 23:00:10'),
('preet', 'preet@gmail.com', NULL, 'preets msg', 'mail send', '2021-05-19 23:01:52', '2021-05-19 23:01:52'),
('preet', 'preet@gmail.com', NULL, 'preets msg', 'mail send', '2021-05-19 23:03:31', '2021-05-19 23:03:31'),
('preet', 'preet@gmail.com', NULL, 'preets msg', 'mail send', '2021-05-19 23:04:22', '2021-05-19 23:04:22'),
('preet', 'preet@gmail.com', NULL, 'preets msg', 'mail send', '2021-05-19 23:05:37', '2021-05-19 23:05:37'),
('preet', 'preet@gmail.com', NULL, 'preets msg', 'mail send', '2021-05-19 23:05:49', '2021-05-19 23:05:49'),
('preet', 'preet@gmail.com', NULL, 'preets msg', 'mail send', '2021-05-19 23:06:26', '2021-05-19 23:06:26'),
('preet', 'preet@gmail.com', NULL, 'preets msg', 'mail send', '2021-05-19 23:07:42', '2021-05-19 23:07:42'),
('preet', 'preet@gmail.com', NULL, 'preets msg', 'mail send', '2021-05-19 23:08:01', '2021-05-19 23:08:01'),
('preet', 'preet@gmail.com', NULL, 'preets msg', 'mail send', '2021-05-19 23:08:16', '2021-05-19 23:08:16'),
('jainish', 'pkpatel7656@gmail.com', NULL, 'mnd fvdvdvjkfv', 'j,sdbcjavbajvbjvjab', '2021-05-19 23:17:19', '2021-05-19 23:17:19'),
('satyam', 'jainishbhimani@gmail.com', NULL, 'testing contact form', 'hgchjchhcjy', '2021-05-19 23:19:46', '2021-05-19 23:19:46'),
('zeel', 'zeel@gmail.com', NULL, 'test', 'my mail s3end', '2021-05-19 23:22:03', '2021-05-19 23:22:03'),
('jainish', 'pkpatel7656@gmail.com', NULL, 'testing contact form', 'hello', '2021-05-19 23:29:19', '2021-05-19 23:29:19'),
('jainish', 'pkpatel7656@gmail.com', NULL, 'testing contact form', 'hello', '2021-05-19 23:33:30', '2021-05-19 23:33:30'),
('jainish', 'pkpatel7656@gmail.com', NULL, 'testing contact form', 'hello', '2021-05-19 23:35:14', '2021-05-19 23:35:14'),
('jainish', 'pkpatel7656@gmail.com', NULL, 'testing contact form', 'hello', '2021-05-19 23:37:52', '2021-05-19 23:37:52'),
('jainish', 'pkpatel7656@gmail.com', NULL, 'testing contact form', 'hello', '2021-05-19 23:38:39', '2021-05-19 23:38:39'),
('jainish', 'pkpatel7656@gmail.com', NULL, 'testing contact form', 'hello', '2021-05-19 23:39:05', '2021-05-19 23:39:05'),
('jainish', 'brijeshgoyani99@gmail.com', NULL, 'testing contact form', 'hello', '2021-05-19 23:42:14', '2021-05-19 23:42:14'),
('naitik', 'satyambhimani44@gmail.com', NULL, 'satyam test msg', 'trying text area', '2021-05-20 01:45:07', '2021-05-20 01:45:07'),
('frref', 'satyambhimani44@gmail.com', '8154833102', NULL, 'eerfr', '2021-05-20 02:13:34', '2021-05-20 02:13:34'),
('frref', 'satyambhimani44@gmail.com', '8154833102', NULL, 'eerfr', '2021-05-20 02:14:27', '2021-05-20 02:14:27'),
('frref', 'satyambhimani44@gmail.com', '8154833102', NULL, 'eerfr', '2021-05-20 02:15:07', '2021-05-20 02:15:07'),
('frref', 'satyambhimani44@gmail.com', '8154833102', NULL, 'eerfr', '2021-05-20 02:15:36', '2021-05-20 02:15:36'),
('csfvtvrtvg', 'satyambhimani44@gmail.com', '0909090909', NULL, 'ruhfuri fhrf ef cchwec ecgsy', '2021-05-20 02:16:29', '2021-05-20 02:16:29'),
('csfvtvrtvg', 'satyambhimani44@gmail.com', '0909090909', NULL, 'ruhfuri fhrf ef cchwec ecgsy', '2021-05-20 02:20:29', '2021-05-20 02:20:29'),
('jainish', 'bhimaninevil72@gmail.com', NULL, 'try', 'sassa', '2021-05-20 04:30:44', '2021-05-20 04:30:44'),
('satyam', 'practicemail007@gmail.com', NULL, 'testing database', 'asaasf', '2021-05-20 04:32:44', '2021-05-20 04:32:44'),
('preet', 'r.yadav9969@gmail.com', NULL, NULL, 'adsdecxx', '2021-05-20 04:41:02', '2021-05-20 04:41:02'),
('briijesh', 'brijeshgoyani99@gmail.com', NULL, NULL, 'this is temp msg...', '2021-05-20 04:44:15', '2021-05-20 04:44:15'),
('briijesh', 'brijeshgoyani99@gmail.com', NULL, NULL, 'this is temp msg...', '2021-05-20 04:45:14', '2021-05-20 04:45:14'),
('briijesh', 'brijeshgoyani99@gmail.com', NULL, NULL, 'this is temp msg...', '2021-05-20 04:46:07', '2021-05-20 04:46:07'),
('briijesh', 'brijeshgoyani99@gmail.com', NULL, NULL, 'this is temp msg...', '2021-05-20 04:49:39', '2021-05-20 04:49:39'),
('briijesh', 'brijeshgoyani99@gmail.com', NULL, NULL, 'this is temp msg...', '2021-05-20 04:55:27', '2021-05-20 04:55:27'),
('briijesh', 'brijeshgoyani99@gmail.com', NULL, NULL, 'this is temp msg...', '2021-05-20 04:55:52', '2021-05-20 04:55:52'),
('briijesh', 'brijeshgoyani99@gmail.com', NULL, NULL, 'this is temp msg...', '2021-05-20 04:56:20', '2021-05-20 04:56:20'),
('briijesh', 'brijeshgoyani99@gmail.com', NULL, NULL, 'this is temp msg...', '2021-05-20 04:56:42', '2021-05-20 04:56:42'),
('33231222', 'satyam@gmail.com', NULL, NULL, 'afsdgdh', '2021-05-20 04:58:05', '2021-05-20 04:58:05'),
('33231222', 'satyam@gmail.com', NULL, NULL, 'afsdgdh', '2021-05-20 04:58:40', '2021-05-20 04:58:40'),
('33231222', 'satyam@gmail.com', NULL, NULL, 'afsdgdh', '2021-05-20 05:02:41', '2021-05-20 05:02:41'),
('33231222', 'satyam@gmail.com', NULL, NULL, 'afsdgdh', '2021-05-20 05:02:54', '2021-05-20 05:02:54'),
('satyam', 'bhimaninevil72@gmail.com', NULL, NULL, 'dadsddsfdff', '2021-05-20 05:04:05', '2021-05-20 05:04:05'),
('33231222', 'satyam@gmail.com', NULL, NULL, 'afsdgdh', '2021-05-20 05:12:10', '2021-05-20 05:12:10'),
('satyam', 'bhimaninevil72@gmail.com', NULL, NULL, 'dadsddsfdff', '2021-05-20 05:12:22', '2021-05-20 05:12:22'),
('33231222', 'practicemail007@gmail.com', NULL, NULL, 'ascfvgnh', '2021-05-20 05:13:14', '2021-05-20 05:13:14'),
('brijesh goyani', 'brijeshgoyani99@gmail.com', NULL, NULL, 'my temp mail', '2021-05-20 05:16:16', '2021-05-20 05:16:16'),
('brijesh goyani', 'brijeshgoyani99@gmail.com', NULL, NULL, 'my temp mail', '2021-05-20 05:17:20', '2021-05-20 05:17:20'),
('manav', 'brijeshgoyani9@gmail.com', NULL, NULL, 'my first mail', '2021-05-20 05:20:48', '2021-05-20 05:20:48'),
('hiren', 'ramanihiren77@gmail.com', NULL, NULL, 'HIREN IS A NOOB FLUTTER DEVELOPER :)', '2021-05-20 08:25:14', '2021-05-20 08:25:14'),
('pk123', 'webitoinfotech@gmail.com', NULL, NULL, 'zaaxaXc', '2021-05-27 23:51:19', '2021-05-27 23:51:19'),
('testbhai', 'satyambhimani44@gmail.com', NULL, NULL, 'send me a mail on both the email address', '2021-05-31 06:14:55', '2021-05-31 06:14:55'),
('suleman', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-01 03:19:49', '2021-06-01 03:19:49'),
('Satu Supari', 'satyambhimani44@gmail.com', NULL, NULL, 'I am looking for a developing team who can creat a mobile game', '2021-06-04 05:06:36', '2021-06-04 05:06:36'),
('Satu Supari', 'satyambhimani44@gmail.com', NULL, NULL, 'Look at my signature', '2021-06-04 05:41:38', '2021-06-04 05:41:38'),
('NOOB', 'ramanihiren77@gmail.com', NULL, NULL, 'Hi', '2021-06-04 06:06:10', '2021-06-04 06:06:10'),
('suleman', 'jainishbhimani@gmail.com', NULL, NULL, 'Did you receive the mail', '2021-06-07 07:32:33', '2021-06-07 07:32:33'),
('suleman', 'jainishbhimani@gmail.com', NULL, NULL, 'did you receive the mail', '2021-06-07 07:37:41', '2021-06-07 07:37:41'),
('Satu Supari', 'jainishbhimani@gmail.com', NULL, NULL, 'Did you receive the mail', '2021-06-08 00:15:17', '2021-06-08 00:15:17'),
('suleman', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-10 05:31:02', '2021-06-10 05:31:02'),
('Satu Supari', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-10 05:36:32', '2021-06-10 05:36:32'),
('Satu Supari', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-10 05:48:06', '2021-06-10 05:48:06'),
('sulemanben', 'satyambhimani44@gmail.com', NULL, NULL, 'msg', '2021-06-10 05:57:09', '2021-06-10 05:57:09'),
('Dr strange', 'satyambhimani44@gmail.com', NULL, NULL, 'Brijesh', '2021-06-10 06:20:52', '2021-06-10 06:20:52'),
('NOOB', 'satyambhimani44@gmail.com', NULL, NULL, 'check my mail', '2021-06-10 06:24:02', '2021-06-10 06:24:02'),
('Satu Supari', 'satyambhimani44@gmail.com', NULL, NULL, 'help me with my service', '2021-06-10 06:26:08', '2021-06-10 06:26:08'),
('brijesh', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-10 06:37:45', '2021-06-10 06:37:45'),
('brijesh', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-10 06:38:29', '2021-06-10 06:38:29'),
('Dr strange', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-10 06:39:55', '2021-06-10 06:39:55'),
('Dr strange', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-10 06:42:06', '2021-06-10 06:42:06'),
('Satu Supari', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-10 06:51:23', '2021-06-10 06:51:23'),
('Satu Supari', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-10 06:53:54', '2021-06-10 06:53:54'),
('Satu Supari', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-10 06:54:10', '2021-06-10 06:54:10'),
('Satu Supari', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-10 06:54:16', '2021-06-10 06:54:16'),
('Satu Supari', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-10 06:57:00', '2021-06-10 06:57:00'),
('Satu Supari', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-10 06:57:16', '2021-06-10 06:57:16'),
('Satu Supari', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-10 06:59:43', '2021-06-10 06:59:43'),
('Satu Supari', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-10 07:03:21', '2021-06-10 07:03:21'),
('Satu Supari', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-10 07:14:25', '2021-06-10 07:14:25'),
('Satu Supari', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-10 07:14:50', '2021-06-10 07:14:50'),
('Satu Supari', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-10 07:17:22', '2021-06-10 07:17:22'),
('NOOB', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-10 07:24:25', '2021-06-10 07:24:25'),
('NOOB', 'satyambhimani44@gmail.com', NULL, NULL, 'hi', '2021-06-10 07:27:34', '2021-06-10 07:27:34'),
('suleman', 'satyambhimani44@gmail.com', NULL, NULL, 'hey', '2021-06-10 07:30:09', '2021-06-10 07:30:09'),
('suleman', 'satyambhimani44@gmail.com', NULL, NULL, 'hey', '2021-06-10 07:32:23', '2021-06-10 07:32:23'),
('Satu Supari', 'satyambhimani44@gmail.com', NULL, NULL, 'htyyy', '2021-06-10 07:33:22', '2021-06-10 07:33:22'),
('Satu Supari', 'satyambhimani44@gmail.com', NULL, NULL, 'hyyyy', '2021-06-10 07:41:20', '2021-06-10 07:41:20'),
('suleman', 'satyambhimani44@gmail.com', NULL, NULL, 'heyyy', '2021-06-10 07:44:22', '2021-06-10 07:44:22'),
('suleman', 'satyambhimani44@gmail.com', NULL, NULL, 'heyyy', '2021-06-10 07:48:32', '2021-06-10 07:48:32'),
('Satu Supari', 'satyambhimani44@gmail.com', NULL, NULL, 'hq', '2021-06-10 07:51:14', '2021-06-10 07:51:14'),
('Satu Supari', 'satyambhimani44@gmail.com', NULL, NULL, 'hq', '2021-06-10 07:51:28', '2021-06-10 07:51:28'),
('suleman', 'satyambhimani44@gmail.com', NULL, NULL, 'oyyyy', '2021-06-10 08:07:16', '2021-06-10 08:07:16'),
('suleman', 'satyambhimani44@gmail.com', NULL, NULL, 'heyyyy', '2021-06-10 08:12:47', '2021-06-10 08:12:47'),
('NOOB', 'satyambhimani44@gmail.com', NULL, NULL, 'dvfvd', '2021-06-10 08:14:05', '2021-06-10 08:14:05'),
('NOOB', 'satyambhimani44@gmail.com', NULL, NULL, 'heyyy', '2021-06-10 08:16:13', '2021-06-10 08:16:13'),
('divyaraj', 'dgchudasama18@gmail.com', NULL, NULL, 'hi', '2021-06-10 23:35:34', '2021-06-10 23:35:34'),
('divyaraj', 'dgchudasama18@gmail.com', NULL, NULL, 'hi', '2021-06-10 23:41:56', '2021-06-10 23:41:56'),
('divyaraj', 'dgchudasama18@gmail.com', NULL, NULL, 'hi', '2021-06-10 23:42:14', '2021-06-10 23:42:14'),
('Satu Supari', 'jainishbhimani@gmail.com', NULL, NULL, 'h1', '2021-06-11 00:03:42', '2021-06-11 00:03:42'),
('THANOS', 'dgchudasama18@gmail.com', NULL, NULL, 'hjbhkjl;', '2021-06-11 00:04:55', '2021-06-11 00:04:55'),
('satyam', 'jainishbhimani@gmail.com', NULL, NULL, 'dfvdvsa', '2021-06-11 00:06:29', '2021-06-11 00:06:29'),
('satyam', 'jainishbhimani@gmail.com', NULL, NULL, 'dfvdvsa', '2021-06-11 00:06:55', '2021-06-11 00:06:55'),
('satyam', 'jainishbhimani@gmail.com', NULL, NULL, 'dfvdvsa', '2021-06-11 00:07:17', '2021-06-11 00:07:17'),
('satyam', 'jainishbhimani@gmail.com', NULL, NULL, 'dfvdvsa', '2021-06-11 00:07:36', '2021-06-11 00:07:36'),
('satyam', 'jainishbhimani@gmail.com', NULL, NULL, 'dfvdvsa', '2021-06-11 00:08:10', '2021-06-11 00:08:10'),
('satyam', 'jainishbhimani@gmail.com', NULL, NULL, 'dfvdvsa', '2021-06-11 00:10:56', '2021-06-11 00:10:56'),
('satyam', 'jainishbhimani@gmail.com', NULL, NULL, 'dfvdvsa', '2021-06-11 00:11:12', '2021-06-11 00:11:12'),
('satyam', 'jainishbhimani@gmail.com', NULL, NULL, 'dfvdvsa', '2021-06-11 00:22:37', '2021-06-11 00:22:37'),
('brijesh', 'jainishbhimani@gmail.com', NULL, NULL, 'h1', '2021-06-11 00:24:50', '2021-06-11 00:24:50'),
('brijesh', 'jainishbhimani@gmail.com', NULL, NULL, 'h1', '2021-06-11 00:25:55', '2021-06-11 00:25:55'),
('brijesh', 'jainishbhimani@gmail.com', NULL, NULL, 'h1', '2021-06-11 00:26:54', '2021-06-11 00:26:54'),
('brijesh', 'jainishbhimani@gmail.com', NULL, NULL, 'h1', '2021-06-11 00:27:50', '2021-06-11 00:27:50'),
('can you see me', 'jainishbhimani@gmail.com', '9819522966', NULL, 'Did you recive my mail with all the detail\'s', '2021-06-11 02:01:31', '2021-06-11 02:01:31'),
('can you see me', 'jainishbhimani@gmail.com', '9819522966', NULL, 'Did you recive my mail with all the detail\'s', '2021-06-11 02:03:36', '2021-06-11 02:03:36'),
('can you see me', 'jainishbhimani@gmail.com', '9819522966', NULL, 'Did you recive my mail with all the detail\'s', '2021-06-11 02:04:37', '2021-06-11 02:04:37'),
('can you see me', 'jainishbhimani@gmail.com', '9819522966', NULL, 'Did you recive my mail with all the detail\'s', '2021-06-11 02:05:31', '2021-06-11 02:05:31'),
('jainish', 'jainishbhimani@gmail.com', '98989898', NULL, 'ho', '2021-06-11 02:54:36', '2021-06-11 02:54:36'),
('jainish', 'jainishbhimani@gmail.com', '98989898', NULL, 'ho', '2021-06-11 02:57:06', '2021-06-11 02:57:06'),
('jainish', 'jainishbhimani@gmail.com', '98989898', NULL, 'ho', '2021-06-11 02:58:35', '2021-06-11 02:58:35'),
('jainish', 'jainishbhimani@gmail.com', '98989898', NULL, 'ho', '2021-06-11 02:59:47', '2021-06-11 02:59:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_05_19_055102_create_contacts_table', 1),
(7, '2021_05_20_153433_create_sessions_table', 1),
(8, '2021_05_21_085917_create_testimonials_table', 2),
(9, '2021_05_22_063904_create_testimonials_table', 3),
(10, '2021_05_22_100825_add_image_to_testimonials_table', 4),
(11, '2021_05_22_121712_remove_image_path_colum_from_testimonials', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6WB3fU2qi3Ytc6qgK69NoaFR2Hvr7mzcLvcFwWuO', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieTJQalpxOWp1Y2dVZzhGOEI3bGZnc0lTZENFOG5JeUlMNlV3ZFFTUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6OTg3NiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1647085283),
('OZ1FgaETmFmMKPAx3mBaRNqkn8sGiVvVrNeXA74D', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicHhOelRxa2tzVEdKUG5MR1ZGam1OU2JmQzdtTXN1YmZHTVBodjh3aiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6OTg3NiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1647085283),
('pGLvTG7IkS7oJOqPi0VYLT1xxipyVfv97ytkYvPi', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiVDhqaXl5RnV4Z2hyV1M1YzZnR0FraFNPMENqZkcySHlWNWJ2dDh4RiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6OTg3NS9hcnRpY2xlc19jYXRlZ29yeSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRWUkVQRXJySmd4REZXMTNyOThCLzgucUNiRkVDTm04anJ3L3pZdkFhNFg2MlBYaHlrZlJqMiI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkVlJFUEVyckpneERGVzEzcjk4Qi84LnFDYkZFQ05tOGpydy96WXZBYTRYNjJQWGh5a2ZSajIiO30=', 1647089714);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT 0,
  `isHide` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `images_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `description`, `isDeleted`, `isHide`, `created_at`, `updated_at`, `images_path`) VALUES
(16, 'Jainish Bhimani', '\"This guy\'s are just AMAZING! His team did what I said and did their best in order to provide the excellent product. There were even some parts I have not told but he did by himself and fixed it. Who wants quality product and on time product, can chose this guy without any hesitate!!! Thanks againn !\"', 0, 1, '2021-05-23 23:07:17', '2022-03-11 01:02:53', '1621831037-Jainish Bhimani.jpg'),
(17, 'Parth Gabani', '\"Webito Infotech developed an android version of an existing iOS app of mine. Developing the original iOS version was a complicated process, and took longer to complete than any of us anticipated. But throughout the process everyone at Webito Infotech worked diligently to make sure that the app was working smoothly. \"', 0, 0, '2021-05-23 23:09:00', '2022-02-19 04:10:02', '1621831140-Parth Gabani.jpg'),
(19, 'Jenil Tejani', '\"I must tell Webito\'s team is superb. I was very happy with the development, communication and budget. He is always available for communication and reliable resource to get your mobile application development done. I have given him my iOS application development work also. Now we are working together on further updates on both application. ”', 0, 1, '2021-05-23 23:11:36', '2022-02-19 04:09:04', '1621831296-Jenil Tejani.jpg'),
(20, 'Nevil', '\"Hi, Webito Infotech is professional company, They delivered the project on time & same budget. They are very cooperative and do what exactly what I request. Also they are patients because I change many times the design and they do all things. They also understand and let me pay the minimum milestone I’m very happy to choose Webito \"', 0, 0, '2021-05-23 23:13:03', '2021-05-23 23:13:03', '1621831383-Nevil.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'Satyam', 'satyam@gmail.com', NULL, '$2y$10$VREPErrJgxDFW13r98B/8.qCbFECNm8jrw/zYvAa4X62PXhykfRj2', NULL, NULL, NULL, NULL, NULL, '2022-02-18 23:14:59', '2022-02-18 23:14:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`(768)),
  ADD KEY `tag` (`tags`(768));

--
-- Indexes for table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_tag`
--
ALTER TABLE `article_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `article_tag`
--
ALTER TABLE `article_tag`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
