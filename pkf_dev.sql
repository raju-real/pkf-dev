-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 30, 2024 at 05:36 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkf_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Development', NULL, '2024-10-25 14:11:38', '2024-10-25 14:11:38', NULL),
(2, 'Design', NULL, '2024-10-25 14:11:45', '2024-10-25 14:11:45', NULL),
(3, 'Marketing', NULL, '2024-10-25 14:11:53', '2024-10-25 14:11:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'in-active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `department_id`, `title`, `slug`, `location`, `description`, `file`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'How can HR leaders write high-quality job descriptions', 'how-can-hr-leaders-write-high-quality-job-descriptions', 'Dhaka, Bangladesh', '<p>hese five tips can help HR professionals build job descriptions that attract suitable candidates:</p>\r\n\r\n<ul>\r\n	<li><strong>Include essential information in separate sections.</strong>&nbsp; A company overview, job summary, and an explanation of required responsibilities, skills, and qualifications help candidates determine if the position is appropriate for them. Specify the job&rsquo;s benefits and&nbsp;<a href=\"https://www.hibob.com/hr-glossary/company-perks/\">perks</a>&nbsp;as well&mdash;it can tip the scales for curious candidates.</li>\r\n	<li><strong>Make sure your descriptions are well-written.</strong>&nbsp;The quality of the job description reflects directly on the company ethos. An engaging, comprehensive, and concise job description demonstrates professionalism and trustworthiness.</li>\r\n	<li><strong>Make it concise.</strong>&nbsp; Ensure that the description is short&mdash;around 300 words&mdash;and to the point, as candidates will probably skip over a long-winded job description.</li>\r\n	<li><strong>Keep your target audience in mind.</strong>&nbsp;Remember that the job description is intended for a living, breathing, thinking person. Use conversational, engaging language that aligns with the company brand. Depict the job accurately by including the expected duties and necessary soft skills, and perhaps explain what a day on the job entails.&nbsp;</li>\r\n	<li><strong>Update your job descriptions regularly.</strong>&nbsp;Periodically review job descriptions to ensure they accurately reflect the role. If a position changes to include more responsibilities, update it. Proper job descriptions are essential for&nbsp;<a href=\"https://www.hibob.com/hr-glossary/hr-processes/\">HR processes</a>&nbsp;to function smoothly.</li>\r\n</ul>', 'assets/files/images/jobs/laravel array validation.pdf-1729943365-.pdf', 'in-active', '2024-10-26 05:49:25', '2024-10-26 05:51:43', NULL),
(2, 1, 'Job descriptions vs. job responsibilities', 'job-descriptions-vs-job-responsibilities', 'Dhaka Mirpur, Bangladesh', '<p>Job descriptions and job responsibilities are both vital to the recruitment process.</p>\r\n\r\n<p>A job description is an employer document that describes an open role at the company. It&rsquo;s often included in job ads to give prospective candidates a clear idea of a role&rsquo;s scope and what skills and experience are required to succeed in it. It also typically includes a summary of the position, job title, and information about the&nbsp;<a href=\"https://www.hibob.com/hr-glossary/company-culture/\">company culture</a>&nbsp;and benefits.</p>\r\n\r\n<p>On the other hand, job responsibilities are what a company outlines as the specific tasks and duties people in each role are accountable for. These can change over time as a role evolves with the company and changes in business needs.</p>\r\n\r\n<p>Recommended For Further Reading</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.hibob.com/blog/interview-feedback-examples/\">Interview feedback examples</a></li>\r\n	<li><a href=\"https://www.hibob.com/hr-glossary/applicant-tracking-system/\">What is an applicant tracking system (ATS)?</a></li>\r\n	<li><a href=\"https://www.hibob.com/hr-glossary/recruitment-management-system/\">What is a recruitment management system?</a></li>\r\n	<li><a href=\"https://www.hibob.com/hr-tools/hr-job-descriptions-and-recruitment-checklist/\">Recruit the best HR professionals: HR job description templates</a></li>\r\n	<li><a href=\"https://www.hibob.com/hr-tools/human-resources-hr-resume-templates/\">Advance your HR career: Human resources resume templates</a></li>\r\n	<li><a href=\"https://www.hibob.com/hr-tools/job-description-template/\">Free job description template to streamline recruiting</a></li>\r\n</ul>', 'assets/files/images/jobs/laravel array validation.pdf-1729943473-.pdf', 'active', '2024-10-26 05:51:13', '2024-10-26 06:00:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_departments`
--

CREATE TABLE `job_departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_departments`
--

INSERT INTO `job_departments` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Software Development', 'Software Development', '2024-10-26 05:25:04', '2024-10-26 05:25:04', NULL),
(2, 'Marketing', 'Marketing', '2024-10-26 05:25:18', '2024-10-26 05:25:18', NULL),
(3, 'Database Administrator', 'Database Administrator', '2024-10-26 05:25:32', '2024-10-26 05:26:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2024_08_26_164326_create_sliders_table', 1),
(5, '2024_08_26_173314_create_news_categories_table', 1),
(6, '2024_08_26_173442_create_news_table', 1),
(7, '2024_08_30_153415_create_people_directories_table', 1),
(8, '2024_08_30_170724_create_departments_table', 1),
(9, '2024_08_30_182909_create_services_table', 1),
(10, '2024_08_30_184425_create_service_categories_table', 1),
(11, '2024_08_30_184442_create_service_subcategories_table', 1),
(12, '2024_09_06_042557_create_publication_categories_table', 1),
(13, '2024_09_06_042812_create_publications_table', 1),
(15, '2024_10_26_111622_create_job_departments_table', 2),
(18, '2024_10_26_111553_create_jobs_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category_id`, `title`, `slug`, `image`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'PKF tax AsPac Regional Meeting 2023', 'pkf-aspac-regional-meeting-2023', 'assets/files/images/news/-1725636976fashion_finder-620x600.jpg', '<p>This year&#39;s PKF AsPac Regional Meeting was held in Australia. Our Amy Hui joined the meeting and participated in a series of network&#39;s events and sessions, where she was updated on the network&#39;s multi-year strategy, annual performance, current competitive landscape and strategic responses.</p>', '2024-09-06 09:36:17', '2024-09-06 09:36:17', NULL),
(2, 2, 'Assurance leadership training', 'assurance-leadership-training', 'assets/files/images/news/-1725637002PsFiles-Free-A4-paper-presentation-mockup-psd.jpg', '<p>An assurance leadership training was held in Kuala Lumper of Malaysia. The emerging leaders of different PKF offices including Hong Kong, Malaysia, Thailand, Brunei, Vietnam, Philippines, Cambodia, Fiji and Myanmar joined the event. Our Amy Hui and Paddy Hung participated in the training and had a great time to learn and catch up with our PKF peers.</p>', '2024-09-06 09:36:42', '2024-09-06 09:36:42', NULL),
(3, 2, '香港會計界慶祝七十三周年國慶晚會', '', 'assets/files/images/news/-1725637029free-paper-mockup-psd-536x0-c-default.jpg', '<p>Our directors, David Leong and Amy Hui, attended the &#39;&#39;香港會計界慶祝七十三周年國慶晚會&#39;&#39; held at Hong Kong Marriott Hotel to celebrate the 73rd National Day.</p>', '2024-09-06 09:37:10', '2024-09-06 09:37:10', NULL),
(4, 2, 'PKF AsPac Regional Meeting 2023', 'pkf-aspac-regional-meeting-2023', 'assets/files/images/news/-1725637052eshopworld-thumb.jpg', '<p>This year&#39;s PKF AsPac Regional Meeting was held in Australia. Our Amy Hui joined the meeting and participated in a series of network&#39;s events and sessions, where she was updated on the network&#39;s multi-year strategy, annual performance, current competitive landscape and strategic responses.</p>', '2024-09-06 09:37:32', '2024-09-06 09:37:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Featured News', 'featured-news', 'Featured News', '2024-09-06 09:34:58', '2024-09-06 09:34:58', NULL),
(2, 'Recent News', 'recent-news', 'Recent News', '2024-09-06 09:35:11', '2024-09-06 09:35:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `people_directories`
--

CREATE TABLE `people_directories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people_directories`
--

INSERT INTO `people_directories` (`id`, `department_id`, `name`, `slug`, `designation`, `telephone`, `email`, `image`, `linkedin_link`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Dolores Runolfsson', 'dolores-runolfsson', 'Hello GEN', '474-825-7886', 'your.email+fakedata20602@gmail.com', 'assets/files/images/people/-1729887160chelsia-yip.png', 'Dicta assumenda architecto cupiditate minus.', '<p>Dicta assumenda architecto cupiditate minus.</p>', '2024-10-25 14:12:41', '2024-10-25 14:12:41', NULL),
(2, 3, 'Christopher Larson', 'christopher-larson', 'ACCOUNTS', '793-351-8859', 'your.email+fakedata29182@gmail.com', 'assets/files/images/people/-1729887180david-leong.png', 'Natus fuga animi.', '<p>Dicta assumenda architecto cupiditate minus.</p>', '2024-10-25 14:13:00', '2024-10-25 14:13:00', NULL),
(3, 2, 'Willy Hudson-Nolan', 'willy-hudson-nolan', 'GEN-Z', '473-206-4281', 'your.email+fakedata44023@gmail.com', 'assets/files/images/people/-1729887221shermaine-cheung.png', 'Commodi sed sunt minus.', '<p>Dicta assumenda architecto cupiditate minus.</p>\r\n\r\n<p>Topics</p>\r\n\r\n<ul>\r\n	<li>Generate Google App password for Gmail SMTP configuration.</li>\r\n	<li>Modify .env MAIL configuration.</li>\r\n	<li>Create Mail Class.</li>\r\n	<li>Create Mail Body view file.</li>\r\n	<li>Customize Mail Subject, From.</li>\r\n</ul>', '2024-10-25 14:13:41', '2024-10-25 14:13:41', NULL),
(4, 1, 'September Cameron', 'september-cameron', 'Ea incididunt ex dol', '+1 (819) 233-3643', 'fylemegub@mailinator.com', 'assets/files/images/people/-1729887239download (1).png', 'Et pariatur Vel est', '<p>Topics</p>\r\n\r\n<ul>\r\n	<li>Generate Google App password for Gmail SMTP configuration.</li>\r\n	<li>Modify .env MAIL configuration.</li>\r\n	<li>Create Mail Class.</li>\r\n	<li>Create Mail Body view file.</li>\r\n	<li>Customize Mail Subject, From.</li>\r\n</ul>', '2024-10-25 14:13:59', '2024-10-25 14:13:59', NULL),
(5, 1, 'Isaiah Rice', 'isaiah-rice', 'Repudiandae qui fugi', '+1 (841) 923-3407', 'xotyrikefu@mailinator.com', 'assets/files/images/people/-1729887265images (3).png', 'Ad pariatur Pariatu', '<p>Topics</p>\r\n\r\n<ul>\r\n	<li>Generate Google App password for Gmail SMTP configuration.</li>\r\n	<li>Modify .env MAIL configuration.</li>\r\n	<li>Create Mail Class.</li>\r\n	<li>Create Mail Body view file.</li>\r\n	<li>Customize Mail Subject, From.</li>\r\n</ul>', '2024-10-25 14:14:25', '2024-10-25 14:14:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `category_id`, `title`, `slug`, `image`, `file`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Hong Kong Transfer Pricing Deadlines for 2024', 'hong-kong-transfer-pricing-deadlines-for-2024 tax', 'assets/files/images/publications/-1725625153A4-Page-Paper-Mockup-3-Graphics-33603646-1 (1).jpg', 'assets/files/images/publications/2024-06-28-16-57-9aadbeebf40c0a6a7e17efd1070266a2.pdf-1725625153-.pdf', '<p>2024-08-16</p>\r\n\r\n<p>As the first half of 2024 comes to an end, it becomes imperative to shift our focus towards the impending deadlines for FY2023 transfer pricing documentation. In this edition, we will provide you with comprehensive insights into the upcoming filing requirements, equipping you with the necessary knowledge to ensure compliance and effectiveness throughout the years 2024 and 2025.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>This newsletter provides information on the following: -</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Deadlines for the Local File, Master File, Country-by-Country notification, and Country-by-Country Report</strong></li>\r\n	<li><strong>PKF Hong Kong&rsquo;s transfer pricing service options</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>For further enquiries, please feel free to contact your usual PKF tax executives, or reach out to our Tax Partner Henry Fung (<a href=\"mailto:henryfung@pkf-hk.com\">henryfung@pkf-hk.com</a>).</p>', '2024-09-06 06:19:13', '2024-09-06 06:19:13', NULL),
(2, 2, 'Patent Box Tax Initiative', 'patent-box-tax-initiative', 'assets/files/images/publications/-1725625193A4-Paper-PSD-Mockup-1500x1075.jpg', 'assets/files/images/publications/laravel array validation.pdf-1725625429-.pdf', '<p>2024-04-21</p>\r\n\r\n<p>On 28 March 2024, the Hong Kong Government published the Inland Revenue (Amendment) (Tax Concessions for Intellectual Property Income) Bill 2024 (&ldquo;the Bill&rdquo;) in the Gazette to implement the &quot;patent box&quot; regime. The Bill aims to strengthen Hong Kong&rsquo;s competitiveness as a regional intellectual property (&ldquo;IP&rdquo;) trading centre by encouraging businesses to engage in more research and development (&ldquo;R&amp;D&rdquo;) and IP trading activities. It offers a 5 per cent concessionary tax rate for eligible IP income derived from eligible IP assets, subject to certain conditions.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>For further enquiries, please feel free to contact your usual PKF tax advisors, or reach out to our Tax Partner, Henry Fung (<a href=\"mailto:henryfung@pkf-hk.com\">henryfung@pkf-hk.com</a>).&nbsp;</p>', '2024-09-06 06:19:53', '2024-09-06 06:23:49', NULL),
(3, 3, 'June 2024 Worldwide Tax Update', 'june-2024-worldwide-tax-update', 'assets/files/images/publications/-1725625223eshopworld-thumb.jpg', 'assets/files/images/publications/oop.pdf-1725625419-.pdf', '<p>2024-06-27</p>\r\n\r\n<p><strong>The second issue of our quarterly PKF Worldwide Tax Update for 2024 has just been released.</strong></p>\r\n\r\n<p>In this newsletter, our tax experts around the globe bring you updates on recent developments in international tax, covering topics such as transfer pricing, VAT and double tax treaties. As always, the newsletter includes commentary from PKF member firms and contact details for tax specialists in each featured territory. Don&rsquo;t forget that our flagship publication, the Worldwide Tax Guide 2024/25, will be published very soon. Watch this space for further details! Download your free copy of the June 2024 newsletter now.</p>', '2024-09-06 06:20:23', '2024-09-06 06:23:39', NULL),
(4, 1, 'Worldwide Tax Guide 2022/23', 'worldwide-tax-guide-202223', 'assets/files/images/publications/-1725625257free-paper-mockup-psd-536x0-c-default.jpg', 'assets/files/images/publications/sample.pdf-1725625410-.pdf', '<p>2022-07-28</p>\r\n\r\n<p>This user-friendly guide is essential reading for any business seeking to expand into a new jurisdiction. Commentary is set out on a country-by-country basis, and each chapter covers the major taxes applicable to businesses, how taxable income is determined (including key reliefs and incentives available), personal taxes and a summary of current treaty and non-treaty withholding tax rates.&nbsp;</p>\r\n\r\n<p>With insights from our expert in-country teams, this must-read report is a fantastic resource for our clients and member firms alike. In addition to outlining the current tax and regulatory environment of the world&rsquo;s most significant trading countries, the&nbsp;<em>WWTG</em>&nbsp;also provides contact details for PKF member firms in each of the relevant jurisdictions, so that further advice may be obtained.&nbsp;</p>\r\n\r\n<p>Stefaan De Ceulaer, PKF International&rsquo;s Head of Tax and Legal, commented, &ldquo;The&nbsp;<em>Worldwide Tax Guide</em>&nbsp;demonstrates what we can achieve as a global community when we concentrate our efforts. Over 210 individuals from our network are involved in providing &hellip; insights into their local markets and taxation landscape and I am incredibly grateful for their contributions every year.&rdquo;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>For further enquiries, please feel free to contact your usual PKF tax executives, or reach out to our Tax Partner Henry Fung (<a href=\"mailto:henryfung@pkf-hk.com\">henryfung@pkf-hk.com</a>).</p>', '2024-09-06 06:20:57', '2024-09-06 06:23:30', NULL),
(5, 1, 'Doing Business in Hong Kong 2022', 'doing-business-in-hong-kong-2022', 'assets/files/images/publications/-1725625283free-prime-flyer-mockup-psd-for-branding.jpg', 'assets/files/images/publications/Letter_of_commitment_msg.pdf-1725625402-.pdf', '<p>PKF Hong Kong is proud to present the latest edition of&nbsp;Doing Business in Hong Kong, a&nbsp;comprehensive guide designed to provide information on major issues that foreign investors should consider when investing in or through Hong Kong.</p>\r\n\r\n<p>PKF Hong Kong is proud to present the latest edition of&nbsp;Doing Business in Hong Kong, a&nbsp;comprehensive guide designed to provide information on major issues that foreign investors should consider when investing in or through Hong Kong.</p>\r\n\r\n<p>This publication provides an overview of the most important aspects of doing business in Hong Kong, including the follows:</p>\r\n\r\n<ul>\r\n	<li>Demographic and Environmental Overview</li>\r\n	<li>Forms of Business Organisations</li>\r\n	<li>Accounting</li>\r\n	<li>Taxation</li>\r\n	<li>Working in Hong Kong</li>\r\n	<li>Doing Business in the PRC through Hong Kong</li>\r\n</ul>\r\n\r\n<p>We look forward to cooperating with you and assisting your business to grow and achieve success in the future. For enquiries, you are welcomed to contact us anytime via&nbsp;enquiry@pkf-hk.com.</p>', '2024-09-06 06:21:23', '2024-09-06 06:23:22', NULL),
(6, 1, 'Worldwide Tax Guide 2023/2024', 'worldwide-tax-guide-20232024', 'assets/files/images/publications/-1725625313PsFiles-Free-A4-paper-presentation-mockup-psd.jpg', 'assets/files/images/publications/laravel array validation.pdf-1725625393-.pdf', '<p>This user-friendly guide is essential reading for any business seeking to expand into a new jurisdiction. Commentary is set out on a country-by-country basis, and each chapter covers the major taxes applicable to businesses, how taxable income is determined (including key reliefs and incentives available), personal taxes and a summary of current treaty and non-treaty withholding tax rates.&nbsp;</p>\r\n\r\n<p>With insights from our expert in-country teams, this must-read report is a fantastic resource for our clients and member firms alike. In addition to outlining the current tax and regulatory environment of the world&rsquo;s most significant trading countries, the&nbsp;<em>WWTG</em>&nbsp;also provides contact details for PKF member firms in each of the relevant jurisdictions, so that further advice may be obtained.&nbsp;</p>\r\n\r\n<p>Stefaan De Ceulaer, PKF International&rsquo;s Head of Tax and Legal, commented, &ldquo;The&nbsp;<em>Worldwide Tax Guide</em>&nbsp;demonstrates what we can achieve as a global community when we concentrate our efforts. Thank you to the 210 individuals from our global community who have been involved in providing insights into their local markets and taxation landscape. I am incredibly grateful for their contributions every year.&rdquo;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>For further enquiries, please feel free to contact your usual PKF tax executives, or reach out to our Tax Partner Henry Fung (<a href=\"mailto:henryfung@pkf-hk.com\">henryfung@pkf-hk.com</a>).</p>', '2024-09-06 06:21:53', '2024-09-06 06:23:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `publication_categories`
--

CREATE TABLE `publication_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publication_categories`
--

INSERT INTO `publication_categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Business Guides', 'business-guides', 'Business Guides', '2024-09-06 06:17:57', '2024-09-06 06:17:57', NULL),
(2, 'Hong Kong Tax Newsletters', 'hong-kong-tax-newsletters', 'Hong Kong Tax Newsletters', '2024-09-06 06:18:10', '2024-09-06 06:18:10', NULL),
(3, 'International Tax Newsletters', 'international-tax-newsletters', 'International Tax Newsletters', '2024-09-06 06:18:20', '2024-09-06 06:18:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcategory_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `category_id`, `subcategory_id`, `description`, `icon`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hong Kong Tax Services and Business Advisory', 'hong-kong-tax-services-and-business-advisory', '1', '1', '<h3>What Can We Help As A Hong Kong Tax&nbsp;Advisors</h3>\r\n\r\n<p>PKF Hong Kong&#39;s professional tax&nbsp;advisors&nbsp;provide comprehensive tax and business advisory services in respect of the Hong Kong tax regime. Our advice covers major taxes including profits tax, salaries tax, property tax, stamp duty, which are tailor-made for all corporate and individual clients throughout the entire business cycle.</p>\r\n\r\n<p>We defend our clients in Hong Kong tax audit and investigation instigated by the Hong Kong&#39;s tax authorities, resolve tax disputes and agree on the amount of tax undercharged plus penalty by compromised settlement with the tax authorities.</p>\r\n\r\n<p>PKF Hong Kong&#39;s&nbsp;tax&nbsp;advisors&nbsp;are well placed to conduct due diligence review on targeted enterprises based on management&rsquo;s instructions.</p>\r\n\r\n<p>For corporate restructuring, we shall discuss with our clients to devise appropriate holding and operating structures to meet with stated operating structures to achieve stated objectives. We shall advise and comment on the tax efficiency of the new structures and restructuring processes involved.</p>\r\n\r\n<p>After completion of the restructuring, we can assist our clients to comply with relevant financial and tax reporting requirements, and prepare supporting documents to apply for special preferential taxation treatments.</p>\r\n\r\n<h3>Our Hong Kong Tax Services Include:</h3>\r\n\r\n<ul>\r\n	<li><strong>Tax Compliance Services</strong>\r\n\r\n	<ul>\r\n		<li>Corporate and personal tax&nbsp;returns and computations</li>\r\n		<li>Lodgment of Hong Kong&nbsp;offshore claim/tax exemption</li>\r\n		<li>Advance ruling application</li>\r\n	</ul>\r\n	</li>\r\n	<li><strong>Tax Investigation and Queries Services</strong>\r\n	<ul>\r\n		<li>Handle inquiries from the tax authority, eg. IRD</li>\r\n		<li>Tax field audit and investigation support</li>\r\n	</ul>\r\n	</li>\r\n	<li>Hong Kong Tax due diligence reviews</li>\r\n	<li>Holding structure and operational advisory</li>\r\n	<li>Pre-Initial Public Offering tax provision reviews and advisory</li>\r\n	<li>IPO and group restructuring advisory services</li>\r\n	<li>Cross-border tax and business advisory</li>\r\n	<li>Transfer pricing health check and documentation</li>\r\n	<li>Employee&rsquo;s tax efficient remuneration packages advisory</li>\r\n	<li>Trust and estate advisory</li>\r\n	<li>Advice on Common Reporting Standard compliance, scoping and analysis</li>\r\n</ul>', 'assets/files/images/services/-1725628614chat.png', '2024-09-06 07:16:54', '2024-09-06 08:10:05', NULL),
(2, 'What happens if you are selected for an IRD tax field audit or investigation?', 'what-happens-if-you-are-selected-for-an-ird-tax-field-audit-or-investigation', '1', '1', '<p>&ldquo;If you have been notified by the IRD that you have been selected for a tax field audit or investigation, it&rsquo;s vital to act immediately and to get advice from a tax specialist like PKF Hong Kong. The IRD&rsquo;s enquiries are rarely straightforward and need to be handled with care &ndash; as failure to do so may result in heavy penalties or prosecution. Contact PKF Hong Kong now for a confidential and free initial consultation with one of our tax specialists.&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Experienced in representing business proprietors and companies in IRD tax field audits and investigations</h3>\r\n\r\n<p>During 2021/22, the Hong Kong Inland Revenue Department (&ldquo;IRD&rdquo;) completed 1,720 tax field audit and investigation cases (including tax avoidance cases), from which it successfully recovered back tax and penalties of around HK$2.9 billion.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Like many tax authorities around the world, tax field audits and investigations are generally considered key tools of the IRD in increasing its tax revenue.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>It is no secret that the IRD is always actively identifying and targeting areas where it believes that tax revenue is at risk &ndash; particularly for non-compliance issues and tax evasion.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Any tax return filed with the IRD could result in a tax field audit or investigation so it is vital to consider what you would do if you are selected. It is not just the costs involved, but also the time it takes to deal with the IRD&rsquo;s tax enquiries as well as the considerable stress and pressure you will have to experience throughout the whole tax field audit and investigation process that matter. Besides, even if your tax filings have been prepared in a proper manner and contain nothing that violates the tax laws, becoming a target of an IRD tax field audit or investigation may to some extent have a negative impact on the daily operations and public perceptions of your business.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>How PKF can help</h3>\r\n\r\n<p>At PKF Hong Kong, our&nbsp;tax specialists possess an excellent working knowledge of the IRD&rsquo;s practices as well as what an IRD field auditor or investigator can and cannot do. Our tax specialists have the expertise to work closely with you to identify key areas of a field audit or investigation, liaise with the IRD to clarify your position, avoid misunderstandings, explore different ways to mitigate potential tax penalties, draft replies to the IRD&rsquo;s enquiries and prepare settlement proposals, etc., with the primary aim of bringing the IRD&rsquo;s challenge to a successful and quick conclusion for our clients.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>PKF Hong Kong&#39;s tax specialists have considerable experience and boast an outstanding success rate in assisting our clients in facing an IRD tax field audit or investigation. We always aim to help our clients achieve satisfactory results at the most reasonable price in the shortest possible time.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>What we do</h3>\r\n\r\n<ul>\r\n	<li>Assess the tax consequences;</li>\r\n	<li>Draft responses to the IRD&rsquo;s enquiries;</li>\r\n	<li>Represent you attending meetings with the IRD;</li>\r\n	<li>Formulate tactics and negotiating with the IRD to mitigate penalties;</li>\r\n	<li>Make formal representations and/or complaints, if necessary; and</li>\r\n	<li>Ensure that the IRD officers do not obtain the information they are not entitled to;</li>\r\n</ul>\r\n\r\n<p>PKF Hong Kong also maintains close working relationships with other specialists such as auditors, tax barristers, forensic accountants, etc., who are sometimes needed when it comes to reaching a settlement proposal with the IRD. We can involve them in your case if necessary.</p>\r\n\r\n<h3>Get in touch</h3>\r\n\r\n<p>If you receive a letter from the IRD telling you that you and/your business have been selected for a tax field audit or investigation section, contact our team without delay and speck to one of our tax specialists.</p>\r\n\r\n<p>Please contact our team to request a no-obligation, free-of-charge discussion by phoning us during office hours on 2868 3682 and emailing us at<strong>&nbsp;<a href=\"mailto:enquiry@pkf-hk.com\">enquiry@pkf-hk.com</a></strong>.</p>\r\n\r\n<p>Any information given during the discussion or initial meeting will be treated in the strictest confidence.</p>', 'assets/files/images/services/-1725628648plug.png', '2024-09-06 07:17:28', '2024-09-06 08:10:01', NULL),
(3, 'PRC Tax Services', 'prc-tax-services', '1', '1', '<h3>How Can&nbsp;We&nbsp;Help You Setting Business in the PRC?&nbsp;</h3>\r\n\r\n<p>On the compliance side,&nbsp;PKF Hong Kong&#39;s professional tax advisors can assist your PRC enterprises to fulfill annual reporting requirements under PRC transfer pricing regulations including the compilation of contemporaneous transfer pricing reports.</p>\r\n\r\n<p>We defend our clients in tax audit and investigation instigated by the PRC tax authorities, resolve tax disputes and agree on the amount of tax undercharged plus penalty by compromised settlement with the PRC tax authorities.</p>\r\n\r\n<p>PKF Hong Kong&#39;s&nbsp;professional PRC tax advisors can&nbsp;help foreign investors set up a business presence in the PRC, including wholly foreign-owned enterprises (&ldquo;WFOE&rdquo;), joint ventures, representative offices, etc., and handle all business entity set-up matters including preparation and submission of set-up documents and the opening of corporate bank accounts with local banks.&nbsp;</p>\r\n\r\n<p>To manage transfer pricing risk in the PRC, we shall assess your intra-group pricing policy for related party transactions, perform benchmarking analysis and provide our recommendations under PRC transfer pricing regulations compilation of contemporaneous transfer pricing reports.</p>\r\n\r\n<h3>Our PRC Tax Services Include:</h3>\r\n\r\n<ul>\r\n	<li>Corporate Income Tax advisory and planning in the PRC</li>\r\n	<li>PRC tax compliance</li>\r\n	<li>VAT, Business Tax, Land VAT, Stamp Duty，Customs Duty advisory in the PRC</li>\r\n	<li>Transfer pricing advice and preparation of transfer pricing documentation</li>\r\n	<li>Group restructuring to mitigate PRC tax exposure and risk on repatriation of profits, capital gain tax, etc.</li>\r\n	<li>Advice on tax-efficient remuneration package for expatriates working in the PRC</li>\r\n	<li>Advice on structuring of investment in the PRC</li>\r\n	<li>Advice on the merit of, and assisting clients in setting up establishments, structuring of investment, ownership changes, etc.</li>\r\n	<li>Conducting tax due diligence in merger/acquisitions and IPO projects</li>\r\n	<li>Preparing health check reports</li>\r\n	<li>Dealing with PRC tax authorities in tax audit and investigation cases</li>\r\n	<li>Setting up of WFOE, joint ventures and representative offices in the PRC</li>\r\n</ul>', 'assets/files/images/services/-1725628676smartphone.png', '2024-09-06 07:17:57', '2024-09-06 08:09:55', NULL),
(4, 'Risk Advisory Services', 'risk-advisory-services', '2', '5', '<h3>Reduce Business Risks in Uncertain Conditions</h3>\r\n\r\n<p>Today, risk management is the common language for financial institutions, multinational conglomerates, and business enterprises alike. All must control and mitigate risk in an efficient and effective manner in the rapidly changing environment.</p>\r\n\r\n<p>In order to do so, companies must revitalize and reform their control framework &ndash; whether it is in Management, Operations, or Information Technology. The result is enhanced business performance and trust from your customers, shareholders and key stakeholders.</p>\r\n\r\n<p>PKF Hong Kong&rsquo;s risk advisory specialists can help you navigate the challenges and achieve your risk management goals. With our market experience, your company will adapt and thrive within its risk tolerance boundaries.</p>\r\n\r\n<p>We are committed to providing tailored solutions in the context of your business. Our dedicated professionals will identify business risks, highlight critical control themes, and propose timely solutions. Ultimately, we want to give you the tools to build a proactive and integrated approach to risk management.</p>\r\n\r\n<p>Explore further</p>\r\n\r\n<p>&nbsp;</p>', 'assets/files/images/services/-1725628714plug.png', '2024-09-06 07:18:34', '2024-09-06 08:09:49', NULL),
(5, 'Transaction Services in Financial Advisory', 'transaction-services-in-financial-advisory', '2', '6', '<p>Our dedicated specialists assist corporations throughout the deal process &ndash; whether it is in acquisitions, divestitures, strategic alliances or access to local and global capital markets.</p>\r\n\r\n<p>With our expertise and knowledge, you are guaranteed to maximize your return on the deal within the time and resource constraints.</p>\r\n\r\n<p>Explore further</p>\r\n\r\n<p>&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.pkf-hk.com/services/business-advisory/transaction-services/due-diligence/\">Due Diligence</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.pkf-hk.com/services/business-advisory/transaction-services/mergers-acquisitions/\">Mergers &amp; Acquisitions</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.pkf-hk.com/services/business-advisory/transaction-services/mergers-acquisitions/\">Valuations</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.pkf-hk.com/services/business-advisory/transaction-services/debt-financing/\">Debt Financing</a></p>\r\n\r\n<p>&nbsp; &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.pkf-hk.com/services/business-advisory/transaction-services/fundraising-ipo-and-capital-markets-support/\">Fundraising, IPO and capital markets support</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.pkf-hk.com/services/business-advisory/transaction-services/corporate-finance/\">Corporate Finance</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Forensic investigations</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Counter fraud services</p>', 'assets/files/images/services/-1725628746t-shirt.png', '2024-09-06 07:19:06', '2024-09-06 08:09:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Audit & Assurance', 'audit-assurance', 'Audit & Assurance', '2024-09-06 07:11:29', '2024-09-06 08:32:56', NULL),
(2, 'Business Advisory', 'business-advisory', 'Business Advisory', '2024-09-06 07:11:38', '2024-09-06 08:32:50', NULL),
(3, 'Corporate Services', 'corporate-services', 'Corporate Services', '2024-09-06 07:11:46', '2024-09-06 08:32:45', NULL),
(4, 'China Desk', 'china-desk', 'China Desk', '2024-09-06 07:11:54', '2024-09-06 08:32:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_subcategories`
--

CREATE TABLE `service_subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_subcategories`
--

INSERT INTO `service_subcategories` (`id`, `category_id`, `name`, `slug`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Tax', 'tax', 'Tax', '2024-09-06 07:12:07', '2024-09-06 08:35:21', NULL),
(2, 1, 'Hong Kong Tax', 'hong-kong-tax', 'Hong Kong Tax', '2024-09-06 07:12:16', '2024-09-06 08:35:16', NULL),
(3, 1, 'PRC Tax', 'prc-tax', 'PRC Tax', '2024-09-06 07:12:26', '2024-09-06 08:35:11', NULL),
(4, 1, 'International Tax', 'international-tax', 'International Tax', '2024-09-06 07:12:36', '2024-09-06 08:35:04', NULL),
(5, 2, 'Risk Advisory', 'risk-advisory', 'Risk Advisory', '2024-09-06 07:12:49', '2024-09-06 08:34:53', NULL),
(6, 2, 'Transaction Services', 'transaction-services', 'Transaction Services', '2024-09-06 07:12:58', '2024-09-06 08:34:48', NULL),
(7, 2, 'Management Consultancy', 'management-consultancy', 'Management Consultancy', '2024-09-06 07:13:07', '2024-09-06 08:34:42', NULL),
(8, 2, 'Hospitality Consulting Services', 'hospitality-consulting-services', 'Hospitality Consulting Services', '2024-09-06 07:13:16', '2024-09-06 08:34:36', NULL),
(9, 2, 'Digital Transformation Solutions', 'digital-transformation-solutions', 'Digital Transformation Solutions', '2024-09-06 07:13:25', '2024-09-06 08:34:31', NULL),
(10, 3, 'Bookkeeping and Accounting Services', 'bookkeeping-and-accounting-services', 'Bookkeeping and Accounting Services', '2024-09-06 07:13:39', '2024-09-06 08:34:24', NULL),
(11, 3, 'Corporate Secretarial Services', 'corporate-secretarial-services', 'Corporate Secretarial Services', '2024-09-06 07:13:48', '2024-09-06 08:34:19', NULL),
(12, 3, 'Payroll and HR Services', 'payroll-and-hr-services', 'Payroll and HR Services', '2024-09-06 07:13:58', '2024-09-06 08:34:14', NULL),
(13, 4, 'PRC Entity Formation and Corporate Services', 'prc-entity-formation-and-corporate-services', 'PRC Entity Formation and Corporate Services', '2024-09-06 07:14:10', '2024-09-06 08:34:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_text` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_no` int(11) NOT NULL DEFAULT '1',
  `bg_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `short_text`, `button_name`, `link`, `image`, `order_no`, `bg_color`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'title one', 'Click Here', 'Click Here', 'https://imageresizer.com/resize/download/66daba4894fac6302830823d', 'assets/files/images/sliders/-1725624637slider-1920x468.jpg', 1, '#2c50a5', '2024-09-06 06:10:37', '2024-10-22 09:10:14', NULL),
(2, 'Innovative business solutions in PKF', 'Innovative business solutions in PKF', 'Know More', 'https://imageresizer.com/resize/download/66daba4894fac6302830823d', 'assets/files/images/sliders/-1725625011slider-dodavky-1920x468-1920x468.jpg', 1, '#129b3b', '2024-09-06 06:16:51', '2024-10-22 09:09:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '1 => Active, 2 => In active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `image`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Mr. Admin', 'admin@gmail.com', '01695958587', NULL, NULL, '$2y$10$rLl70tP/cRMnwnrAF6TCQubdtMl7WVFH2fjgb6juj6i0todON56dS', 1, NULL, '2024-09-06 02:08:20', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_departments`
--
ALTER TABLE `job_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `people_directories`
--
ALTER TABLE `people_directories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publication_categories`
--
ALTER TABLE `publication_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_subcategories`
--
ALTER TABLE `service_subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_departments`
--
ALTER TABLE `job_departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `people_directories`
--
ALTER TABLE `people_directories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `publication_categories`
--
ALTER TABLE `publication_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_subcategories`
--
ALTER TABLE `service_subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
