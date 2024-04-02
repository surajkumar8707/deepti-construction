-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2024 at 08:56 PM
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
-- Database: `deepti`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$12$PRAWnx3fIbsL6.8SYbtmLO393CdnzEN5Mzc3WIxI79lCfu.XWh1we', NULL, '2024-04-01 13:10:58', '2024-04-01 13:10:58');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `interest` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `site_location` varchar(255) DEFAULT NULL,
  `site_area` varchar(255) DEFAULT NULL,
  `residential_building` varchar(255) DEFAULT NULL,
  `bedrooms` varchar(255) DEFAULT NULL,
  `materials` varchar(255) DEFAULT NULL,
  `planning_execution` varchar(255) DEFAULT NULL,
  `call_back` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manage_front_end_content_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `manage_front_end_content_id`, `question`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'What is construction technology?', 'Construction technology refers to the methods, tools, materials, and processes used in the construction of buildings, infrastructure, and other structures.', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(2, 1, 'What are the different types of construction technology?', 'Construction technology encompasses a wide range of techniques including traditional methods, modern methods such as prefabrication, and emerging technologies like Building Information Modeling (BIM) and 3D printing.', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(3, 1, 'What is Building Information Modeling (BIM)?', 'BIM is a digital representation of a building\'s physical and functional characteristics. It allows architects, engineers, and construction professionals to collaborate and simulate the construction process before it actually begins.', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(4, 1, 'What is off-site construction?', 'Off-site construction involves the fabrication and assembly of building components in a factory or workshop before they are transported to the construction site for installation.', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(5, 1, 'What is sustainable construction?', 'Sustainable construction focuses on reducing the environmental impact of buildings by using energy-efficient materials, renewable energy sources, and environmentally friendly construction methods.', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(6, 1, 'What are the advantages of using drones in construction?', 'Drones can capture aerial images and survey construction sites more quickly and accurately than traditional methods, allowing for better project planning and monitoring.', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(7, 2, 'What is construction technology?', 'Construction technology refers to the methods, tools, materials, and processes used in the construction of buildings, infrastructure, and other structures.', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(8, 2, 'How does Building Integrated Photovoltaics (BIPV) benefit construction projects?', 'BIPV systems integrate solar panels into building materials such as roofs and facades, providing renewable energy generation while also serving as functional building elements.', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(9, 2, 'What are some examples of digital fabrication technologies in construction?', 'Digital fabrication technologies include computer numerical control (CNC) machining, laser cutting, and 3D printing, which enable the precise fabrication of building components from digital designs.', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(10, 2, 'How does seismic retrofitting improve the resilience of buildings?', 'Seismic retrofitting strengthens existing buildings to better withstand earthquakes and other seismic events, reducing the risk of structural damage and collapse.', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(11, 2, 'What are the main benefits of using prefabricated bathroom pods in construction?', 'Prefabricated bathroom pods can reduce construction time and costs by streamlining the installation of plumbing fixtures and finishes, while also improving quality control and site safety.', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(12, 2, 'What role does passive solar design play in energy-efficient buildings?', 'Passive solar design utilizes building orientation, window placement, and thermal mass to capture and store solar heat, reducing the need for mechanical heating and cooling systems.', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(13, 3, 'What is construction technology?', 'Construction technology refers to the methods, tools, materials, and processes used in the construction of buildings, infrastructure, and other structures.', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(14, 3, 'How does construction management software improve project efficiency?', 'Construction management software automates project scheduling, budgeting, and communication, enabling construction teams to collaborate more effectively and deliver projects on time and within budget.', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(15, 3, 'What are the main challenges in implementing green infrastructure projects?', 'Challenges include limited funding and resources, as well as regulatory barriers and public resistance to new development projects that incorporate green infrastructure elements.', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(16, 3, 'How does augmented reality (AR) assist in construction quality control?', 'AR technology overlays digital models onto physical construction elements, allowing inspectors to compare as-built conditions with design specifications and identify deviations or defects.', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(17, 3, 'What are the benefits of using high-performance insulation in buildings?', 'High-performance insulation materials such as spray foam and aerogel reduce heat transfer and air infiltration, improving energy efficiency and occupant comfort.', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(18, 3, 'What role does geothermal energy play in sustainable building design?', 'Geothermal energy systems utilize the stable temperature of the earth to heat and cool buildings, reducing reliance on fossil fuels and lowering energy costs over the long term.', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(19, 4, 'What is construction technology?', 'Construction technology refers to the methods, tools, materials, and processes used in the construction of buildings, infrastructure, and other structures.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(20, 4, 'How does energy modeling software help architects and engineers design energy-efficient buildings?', 'CLT is a sustainable building material that offers high strength-to-weight ratio, fire resistance, and design flexibility, making it suitable for a wide range of construction applications.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(21, 4, 'How does Life Cycle Cost Analysis (LCCA) inform decision-making in construction projects?', 'LCCA evaluates the total cost of owning and operating a building over its entire lifecycle, including initial construction costs, maintenance expenses, and energy consumption, helping stakeholders make informed decisions about design and materials.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(22, 4, 'What role does acoustical engineering play in building design?', 'Acoustical engineering ensures that buildings are designed to minimize noise transmission and provide optimal acoustics for different types of spaces, such as concert halls, offices, and classrooms.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(23, 4, 'How does the use of low-impact development (LID) techniques benefit stormwater management in construction projects?', 'LID techniques such as permeable pavement and green roofs reduce stormwater runoff and pollutant loading, improving water quality and reducing the risk of flooding and erosion.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(24, 4, 'What are the main challenges in designing and constructing zero-energy buildings?', 'Challenges include balancing energy efficiency measures with cost-effectiveness, as well as addressing technical and regulatory barriers related to renewable energy generation and grid integration.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(25, 5, 'What is construction technology?', 'Construction technology refers to the methods, tools, materials, and processes used in the construction of buildings, infrastructure, and other structures.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(26, 5, 'How does prefabrication support the adoption of modular construction methods?', 'Prefabrication allows for the efficient fabrication of building modules in controlled factory conditions, enabling faster assembly and installation on-site as part of modular construction projects.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(27, 5, 'What is Building Information Modeling (BIM)?', 'BIM is a digital representation of a building\'s physical and functional characteristics. It allows architects, engineers, and construction professionals to collaborate and simulate the construction process before it actually begins.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(28, 5, 'What is off-site construction?', 'Off-site construction involves the fabrication and assembly of building components in a factory or workshop before they are transported to the construction site for installation.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(29, 5, 'What is sustainable construction?', 'Sustainable construction focuses on reducing the environmental impact of buildings by using energy-efficient materials, renewable energy sources, and environmentally friendly construction methods.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(30, 5, 'What are the advantages of using drones in construction?', 'Drones can capture aerial images and survey construction sites more quickly and accurately than traditional methods, allowing for better project planning and monitoring.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(31, 6, 'What role does robotics play in construction?', 'Robotics can automate repetitive tasks such as bricklaying and welding, increasing efficiency and safety on construction sites.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(32, 6, 'How does Augmented Reality (AR) benefit construction projects?', 'AR overlays digital information onto the real-world environment, allowing construction professionals to visualize building designs on-site and identify potential conflicts or errors before they occur.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(33, 6, 'What is modular construction?', 'Modular construction involves the fabrication of building modules in a factory or workshop before they are transported to the construction site and assembled into a larger structure.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(34, 6, 'How does blockchain technology benefit construction projects?', 'Blockchain technology can improve transparency and traceability in construction projects by securely recording transactions and contracts, reducing the risk of disputes and fraud.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(35, 6, 'What are some examples of smart building technologies?', 'Smart building technologies include automated lighting and climate control systems, as well as sensors that monitor occupancy and adjust building operations accordingly.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(36, 6, 'What role does artificial intelligence (AI) play in construction?', 'AI can analyze large amounts of data to optimize construction schedules, predict maintenance needs, and identify potential safety hazards on construction sites.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(37, 6, 'What are the advantages of using drones in construction?', 'Drones can capture aerial images and survey construction sites more quickly and accurately than traditional methods, allowing for better project planning and monitoring.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(38, 7, 'How does passive design contribute to energy-efficient buildings?', 'Passive design techniques such as proper insulation and orientation can minimize the need for mechanical heating and cooling systems, reducing energy consumption and costs.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(39, 7, 'What is the importance of lifecycle assessment in construction?', 'Lifecycle assessment evaluates the environmental impact of a building from construction through demolition, helping to identify opportunities for reducing resource consumption and waste.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(40, 7, 'How does thermal imaging technology benefit construction projects?', 'Thermal imaging cameras can detect heat loss and moisture intrusion in buildings, helping to identify energy inefficiencies and potential structural problems.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(41, 7, 'What are the advantages of using recycled materials in construction?', 'Using recycled materials reduces the need for virgin resources, conserves energy, and minimizes waste going to landfills.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(42, 7, 'How does weather monitoring technology impact construction scheduling?', 'Weather monitoring technology provides real-time data on temperature, humidity, and precipitation, allowing construction teams to plan work activities more effectively and minimize weather-related delays.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(43, 7, 'What are some examples of sustainable roofing materials?', 'Sustainable roofing materials include recycled metal, clay tiles, and green roofs that are planted with vegetation to absorb rainwater and provide insulation.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(44, 8, 'What is the role of geospatial technology in construction?', 'Geospatial technology such as Geographic Information Systems (GIS) and Global Positioning System (GPS) helps construction professionals analyze site conditions, plan infrastructure projects, and monitor construction progress.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(45, 8, 'How does advanced materials science impact construction?', 'Advanced materials such as carbon fiber-reinforced polymers and self-healing concrete offer enhanced durability, strength, and sustainability compared to traditional construction materials.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(46, 8, 'What are the main challenges in adopting renewable energy technologies in construction?', 'Challenges include the high upfront costs of renewable energy systems, as well as regulatory barriers and technical constraints in integrating them into existing infrastructure.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(47, 8, 'How does daylighting design contribute to sustainable buildings?', 'Daylighting design maximizes natural light in buildings, reducing the need for artificial lighting and improving occupant comfort and productivity.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(48, 8, 'What is lean construction?', 'Lean construction emphasizes the elimination of waste and continuous improvement in construction processes, with a focus on delivering value to customers and stakeholders.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(49, 8, 'How does Building Integrated Photovoltaics (BIPV) benefit construction projects?', 'BIPV systems integrate solar panels into building materials such as roofs and facades, providing renewable energy generation while also serving as functional building elements.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(50, 9, 'What is construction technology?', 'Construction technology refers to the methods, tools, materials, and processes used in the construction of buildings, infrastructure, and other structures.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(51, 9, 'What are some examples of digital fabrication technologies in construction?', 'Digital fabrication technologies include computer numerical control (CNC) machining, laser cutting, and 3D printing, which enable the precise fabrication of building components from digital designs.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(52, 9, 'How does seismic retrofitting improve the resilience of buildings?', 'Seismic retrofitting strengthens existing buildings to better withstand earthquakes and other seismic events, reducing the risk of structural damage and collapse.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(53, 9, 'What are the main benefits of using prefabricated bathroom pods in construction?', 'Prefabricated bathroom pods can reduce construction time and costs by streamlining the installation of plumbing fixtures and finishes, while also improving quality control and site safety.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(54, 9, 'What role does passive solar design play in energy-efficient buildings?', 'Passive solar design utilizes building orientation, window placement, and thermal mass to capture and store solar heat, reducing the need for mechanical heating and cooling systems.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(55, 9, 'How does construction management software improve project efficiency?', 'Construction management software automates project scheduling, budgeting, and communication, enabling construction teams to collaborate more effectively and deliver projects on time and within budget.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(56, 9, 'What are the main challenges in implementing green infrastructure projects?', 'Challenges include limited funding and resources, as well as regulatory barriers and public resistance to new development projects that incorporate green infrastructure elements.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(57, 10, 'How does augmented reality (AR) assist in construction quality control?', 'AR technology overlays digital models onto physical construction elements, allowing inspectors to compare as-built conditions with design specifications and identify deviations or defects.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(58, 10, 'What are the benefits of using high-performance insulation in buildings?', 'High-performance insulation materials such as spray foam and aerogel reduce heat transfer and air infiltration, improving energy efficiency and occupant comfort.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(59, 10, 'What role does geothermal energy play in sustainable building design?', 'Geothermal energy systems utilize the stable temperature of the earth to heat and cool buildings, reducing reliance on fossil fuels and lowering energy costs over the long term.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(60, 10, 'How does the Internet of Things (IoT) enable smart building automation?', 'IoT devices such as smart thermostats and lighting controls can be integrated into building systems to optimize energy usage, improve comfort, and enhance occupant safety and security.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(61, 10, 'What are some examples of biophilic design principles in architecture?', 'Biophilic design principles incorporate elements of nature such as natural light, vegetation, and water features into built environments to enhance human health and well-being.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(62, 10, 'How does energy modeling software help architects and engineers design energy-efficient buildings?', 'Energy modeling software simulates the thermal performance of buildings under different conditions, allowing designers to optimize building envelope and HVAC systems for maximum energy efficiency.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(63, 11, 'What is construction technology?', 'Construction technology refers to the methods, tools, materials, and processes used in the construction of buildings, infrastructure, and other structures.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(64, 11, 'What are the different types of construction technology?', 'Construction technology encompasses a wide range of techniques including traditional methods, modern methods such as prefabrication, and emerging technologies like Building Information Modeling (BIM) and 3D printing.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(65, 11, 'What is Building Information Modeling (BIM)?', 'BIM is a digital representation of a building\'s physical and functional characteristics. It allows architects, engineers, and construction professionals to collaborate and simulate the construction process before it actually begins.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(66, 11, 'What is off-site construction?', 'Off-site construction involves the fabrication and assembly of building components in a factory or workshop before they are transported to the construction site for installation.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(67, 11, 'What is sustainable construction?', 'Sustainable construction focuses on reducing the environmental impact of buildings by using energy-efficient materials, renewable energy sources, and environmentally friendly construction methods.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(68, 11, 'What are the advantages of using drones in construction?', 'Drones can capture aerial images and survey construction sites more quickly and accurately than traditional methods, allowing for better project planning and monitoring.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(69, 12, 'What are the main benefits of using cross-laminated timber (CLT) in construction?', 'CLT is a sustainable building material that offers high strength-to-weight ratio, fire resistance, and design flexibility, making it suitable for a wide range of construction applications.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(70, 12, 'How does Life Cycle Cost Analysis (LCCA) inform decision-making in construction projects?', 'LCCA evaluates the total cost of owning and operating a building over its entire lifecycle, including initial construction costs, maintenance expenses, and energy consumption, helping stakeholders make informed decisions about design and materials.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(71, 12, 'What role does acoustical engineering play in building design?', 'Acoustical engineering ensures that buildings are designed to minimize noise transmission and provide optimal acoustics for different types of spaces, such as concert halls, offices, and classrooms.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(72, 12, 'How does the use of low-impact development (LID) techniques benefit stormwater management in construction projects?', 'LID techniques such as permeable pavement and green roofs reduce stormwater runoff and pollutant loading, improving water quality and reducing the risk of flooding and erosion.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(73, 12, 'What are the main challenges in designing and constructing zero-energy buildings?', 'Challenges include balancing energy efficiency measures with cost-effectiveness, as well as addressing technical and regulatory barriers related to renewable energy generation and grid integration.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(74, 12, 'How does prefabrication support the adoption of modular construction methods?', 'Prefabrication allows for the efficient fabrication of building modules in controlled factory conditions, enabling faster assembly and installation on-site as part of modular construction projects.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(75, 13, 'What role does life cycle assessment (LCA) play in sustainable building design?', 'LCA evaluates the environmental impacts of building materials and construction processes over their entire lifecycle, helping designers minimize resource consumption, waste generation, and greenhouse gas emissions.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(76, 13, 'How does biomimicry inspire innovative solutions in construction?', 'Biomimicry involves emulating nature\'s patterns and strategies to solve human design challenges, leading to the development of more sustainable and resilient building materials and systems.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(77, 13, 'What are some examples of smart sensors used in building automation systems?', 'Smart sensors can monitor indoor air quality, occupancy levels, and energy usage, providing data-driven insights to optimize building operations and enhance occupant comfort and productivity.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(78, 13, 'How does dynamic shading technology improve energy efficiency in buildings?', 'Dynamic shading systems adjust the amount of sunlight entering a building throughout the day, reducing the need for artificial lighting and cooling and heating loads, thereby improving energy efficiency and comfort.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(79, 13, 'What role does computational design play in architectural innovation?', 'Computational design uses algorithms and parametric modeling techniques to generate complex geometries and optimize building performance, enabling architects to explore innovative design solutions that were previously unattainable.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(80, 13, 'How does regenerative design principles influence sustainable building design?', 'Regenerative design principles seek to create buildings and landscapes that contribute positively to the environment, ecosystem services, and human well-being, going beyond sustainability to restore and regenerate natural systems.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(81, 14, 'What is construction technology?', 'Construction technology refers to the methods, tools, materials, and processes used in the construction of buildings, infrastructure, and other structures.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(82, 14, 'What are the different types of construction technology?', 'Construction technology encompasses a wide range of techniques including traditional methods, modern methods such as prefabrication, and emerging technologies like Building Information Modeling (BIM) and 3D printing.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(83, 14, 'What role does life cycle assessment (LCA) play in sustainable building design?', 'LCA evaluates the environmental impacts of building materials and construction processes over their entire lifecycle, helping designers minimize resource consumption, waste generation, and greenhouse gas emissions.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(84, 14, 'How does biomimicry inspire innovative solutions in construction?', 'Biomimicry involves emulating nature\'s patterns and strategies to solve human design challenges, leading to the development of more sustainable and resilient building materials and systems.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(85, 14, 'What are some examples of smart sensors used in building automation systems?', 'Smart sensors can monitor indoor air quality, occupancy levels, and energy usage, providing data-driven insights to optimize building operations and enhance occupant comfort and productivity.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(86, 14, 'How does dynamic shading technology improve energy efficiency in buildings?', 'Dynamic shading systems adjust the amount of sunlight entering a building throughout the day, reducing the need for artificial lighting and cooling and heating loads, thereby improving energy efficiency and comfort.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(87, 14, 'What role does computational design play in architectural innovation?', 'Computational design uses algorithms and parametric modeling techniques to generate complex geometries and optimize building performance, enabling architects to explore innovative design solutions that were previously unattainable.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(88, 15, 'What is construction technology?', 'Construction technology refers to the methods, tools, materials, and processes used in the construction of buildings, infrastructure, and other structures.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(89, 15, 'What are the different types of construction technology?', 'Construction technology encompasses a wide range of techniques including traditional methods, modern methods such as prefabrication, and emerging technologies like Building Information Modeling (BIM) and 3D printing.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(90, 15, 'What is Building Information Modeling (BIM)?', 'BIM is a digital representation of a building\'s physical and functional characteristics. It allows architects, engineers, and construction professionals to collaborate and simulate the construction process before it actually begins.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(91, 15, 'What is off-site construction?', 'Off-site construction involves the fabrication and assembly of building components in a factory or workshop before they are transported to the construction site for installation.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(92, 15, 'What is sustainable construction?', 'Sustainable construction focuses on reducing the environmental impact of buildings by using energy-efficient materials, renewable energy sources, and environmentally friendly construction methods.', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(93, 15, 'What are the advantages of using drones in construction?', 'Drones can capture aerial images and survey construction sites more quickly and accurately than traditional methods, allowing for better project planning and monitoring.', '2024-04-01 13:11:01', '2024-04-01 13:11:01');

-- --------------------------------------------------------

--
-- Table structure for table `frontend_images`
--

CREATE TABLE `frontend_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manage_front_end_content_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontend_images`
--

INSERT INTO `frontend_images` (`id`, `manage_front_end_content_id`, `title`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(1, 1, 'Residences', 'We build residences with ideas based on providing greenery & space designed with top architects in hosur keeping your privacy in mind', 'public/gallery_img/residential-architects.jpg', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(2, 1, 'Villas', 'Get your luxury villas planned by the best architects in hosur who are hand picked for their insightful designs.', 'public/gallery_img/villa-architects.jpg', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(3, 1, 'Apartments', 'Locate your exclusive apartments sketched precisely with family-centric facilities to give the right sense of contentment.', 'public/gallery_img/appartment.webp', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(4, 1, 'Bunglow', 'Find your bungalow built to the highest standards with a perfect combination of modern architecture and features to provide comfort living.', 'public/gallery_img/bungalow-house-design.jpg', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(5, 1, 'Duplex House', 'We have the best team of architects in hosur who deliver your extended lifespaces loaded with amenities, making your duplex house stand apart due to its distinct features.', 'public/gallery_img/row-house-architecture-design.jpg', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(6, 1, 'Row House', 'Enjoy living in the expansive space artfully designed to make an exclusive row house that you would be proud to own.', 'public/gallery_img/row_house.jpg', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(7, 2, 'Residences', 'We build residences with ideas based on providing greenery & space designed with top architects in hosur keeping your privacy in mind', 'public/gallery_img/residential-architects.jpg', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(8, 2, 'Villas', 'Get your luxury villas planned by the best architects in hosur who are hand picked for their insightful designs.', 'public/gallery_img/villa-architects.jpg', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(9, 2, 'Apartments', 'Locate your exclusive apartments sketched precisely with family-centric facilities to give the right sense of contentment.', 'public/gallery_img/appartment.webp', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(10, 2, 'Bunglow', 'Find your bungalow built to the highest standards with a perfect combination of modern architecture and features to provide comfort living.', 'public/gallery_img/bungalow-house-design.jpg', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(11, 2, 'Duplex House', 'We have the best team of architects in hosur who deliver your extended lifespaces loaded with amenities, making your duplex house stand apart due to its distinct features.', 'public/gallery_img/row-house-architecture-design.jpg', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(12, 2, 'Row House', 'Enjoy living in the expansive space artfully designed to make an exclusive row house that you would be proud to own.', 'public/gallery_img/row_house.jpg', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(13, 3, 'Residences', 'We build residences with ideas based on providing greenery & space designed with top architects in hosur keeping your privacy in mind', 'public/gallery_img/residential-architects.jpg', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(14, 3, 'Villas', 'Get your luxury villas planned by the best architects in hosur who are hand picked for their insightful designs.', 'public/gallery_img/villa-architects.jpg', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(15, 3, 'Apartments', 'Locate your exclusive apartments sketched precisely with family-centric facilities to give the right sense of contentment.', 'public/gallery_img/appartment.webp', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(16, 3, 'Bunglow', 'Find your bungalow built to the highest standards with a perfect combination of modern architecture and features to provide comfort living.', 'public/gallery_img/bungalow-house-design.jpg', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(17, 3, 'Duplex House', 'We have the best team of architects in hosur who deliver your extended lifespaces loaded with amenities, making your duplex house stand apart due to its distinct features.', 'public/gallery_img/row-house-architecture-design.jpg', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(18, 3, 'Row House', 'Enjoy living in the expansive space artfully designed to make an exclusive row house that you would be proud to own.', 'public/gallery_img/row_house.jpg', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(19, 4, 'Residences', 'We build residences with ideas based on providing greenery & space designed with top architects in hosur keeping your privacy in mind', 'public/gallery_img/residential-architects.jpg', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(20, 4, 'Villas', 'Get your luxury villas planned by the best architects in hosur who are hand picked for their insightful designs.', 'public/gallery_img/villa-architects.jpg', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(21, 4, 'Apartments', 'Locate your exclusive apartments sketched precisely with family-centric facilities to give the right sense of contentment.', 'public/gallery_img/appartment.webp', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(22, 4, 'Bunglow', 'Find your bungalow built to the highest standards with a perfect combination of modern architecture and features to provide comfort living.', 'public/gallery_img/bungalow-house-design.jpg', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(23, 4, 'Duplex House', 'We have the best team of architects in hosur who deliver your extended lifespaces loaded with amenities, making your duplex house stand apart due to its distinct features.', 'public/gallery_img/row-house-architecture-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(24, 4, 'Row House', 'Enjoy living in the expansive space artfully designed to make an exclusive row house that you would be proud to own.', 'public/gallery_img/row_house.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(25, 5, 'Residences', 'We build residences with ideas based on providing greenery & space designed with top architects in hosur keeping your privacy in mind', 'public/gallery_img/residential-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(26, 5, 'Villas', 'Get your luxury villas planned by the best architects in hosur who are hand picked for their insightful designs.', 'public/gallery_img/villa-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(27, 5, 'Apartments', 'Locate your exclusive apartments sketched precisely with family-centric facilities to give the right sense of contentment.', 'public/gallery_img/appartment.webp', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(28, 5, 'Bunglow', 'Find your bungalow built to the highest standards with a perfect combination of modern architecture and features to provide comfort living.', 'public/gallery_img/bungalow-house-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(29, 5, 'Duplex House', 'We have the best team of architects in hosur who deliver your extended lifespaces loaded with amenities, making your duplex house stand apart due to its distinct features.', 'public/gallery_img/row-house-architecture-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(30, 5, 'Row House', 'Enjoy living in the expansive space artfully designed to make an exclusive row house that you would be proud to own.', 'public/gallery_img/row_house.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(31, 6, 'Residences', 'We build residences with ideas based on providing greenery & space designed with top architects in hosur keeping your privacy in mind', 'public/gallery_img/residential-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(32, 6, 'Villas', 'Get your luxury villas planned by the best architects in hosur who are hand picked for their insightful designs.', 'public/gallery_img/villa-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(33, 6, 'Apartments', 'Locate your exclusive apartments sketched precisely with family-centric facilities to give the right sense of contentment.', 'public/gallery_img/appartment.webp', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(34, 6, 'Bunglow', 'Find your bungalow built to the highest standards with a perfect combination of modern architecture and features to provide comfort living.', 'public/gallery_img/bungalow-house-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(35, 6, 'Duplex House', 'We have the best team of architects in hosur who deliver your extended lifespaces loaded with amenities, making your duplex house stand apart due to its distinct features.', 'public/gallery_img/row-house-architecture-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(36, 6, 'Row House', 'Enjoy living in the expansive space artfully designed to make an exclusive row house that you would be proud to own.', 'public/gallery_img/row_house.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(37, 7, 'Residences', 'We build residences with ideas based on providing greenery & space designed with top architects in hosur keeping your privacy in mind', 'public/gallery_img/residential-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(38, 7, 'Villas', 'Get your luxury villas planned by the best architects in hosur who are hand picked for their insightful designs.', 'public/gallery_img/villa-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(39, 7, 'Apartments', 'Locate your exclusive apartments sketched precisely with family-centric facilities to give the right sense of contentment.', 'public/gallery_img/appartment.webp', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(40, 7, 'Bunglow', 'Find your bungalow built to the highest standards with a perfect combination of modern architecture and features to provide comfort living.', 'public/gallery_img/bungalow-house-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(41, 7, 'Duplex House', 'We have the best team of architects in hosur who deliver your extended lifespaces loaded with amenities, making your duplex house stand apart due to its distinct features.', 'public/gallery_img/row-house-architecture-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(42, 7, 'Row House', 'Enjoy living in the expansive space artfully designed to make an exclusive row house that you would be proud to own.', 'public/gallery_img/row_house.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(43, 8, 'Residences', 'We build residences with ideas based on providing greenery & space designed with top architects in hosur keeping your privacy in mind', 'public/gallery_img/residential-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(44, 8, 'Villas', 'Get your luxury villas planned by the best architects in hosur who are hand picked for their insightful designs.', 'public/gallery_img/villa-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(45, 8, 'Apartments', 'Locate your exclusive apartments sketched precisely with family-centric facilities to give the right sense of contentment.', 'public/gallery_img/appartment.webp', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(46, 8, 'Bunglow', 'Find your bungalow built to the highest standards with a perfect combination of modern architecture and features to provide comfort living.', 'public/gallery_img/bungalow-house-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(47, 8, 'Duplex House', 'We have the best team of architects in hosur who deliver your extended lifespaces loaded with amenities, making your duplex house stand apart due to its distinct features.', 'public/gallery_img/row-house-architecture-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(48, 8, 'Row House', 'Enjoy living in the expansive space artfully designed to make an exclusive row house that you would be proud to own.', 'public/gallery_img/row_house.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(49, 9, 'Residences', 'We build residences with ideas based on providing greenery & space designed with top architects in hosur keeping your privacy in mind', 'public/gallery_img/residential-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(50, 9, 'Villas', 'Get your luxury villas planned by the best architects in hosur who are hand picked for their insightful designs.', 'public/gallery_img/villa-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(51, 9, 'Apartments', 'Locate your exclusive apartments sketched precisely with family-centric facilities to give the right sense of contentment.', 'public/gallery_img/appartment.webp', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(52, 9, 'Bunglow', 'Find your bungalow built to the highest standards with a perfect combination of modern architecture and features to provide comfort living.', 'public/gallery_img/bungalow-house-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(53, 9, 'Duplex House', 'We have the best team of architects in hosur who deliver your extended lifespaces loaded with amenities, making your duplex house stand apart due to its distinct features.', 'public/gallery_img/row-house-architecture-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(54, 9, 'Row House', 'Enjoy living in the expansive space artfully designed to make an exclusive row house that you would be proud to own.', 'public/gallery_img/row_house.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(55, 10, 'Residences', 'We build residences with ideas based on providing greenery & space designed with top architects in hosur keeping your privacy in mind', 'public/gallery_img/residential-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(56, 10, 'Villas', 'Get your luxury villas planned by the best architects in hosur who are hand picked for their insightful designs.', 'public/gallery_img/villa-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(57, 10, 'Apartments', 'Locate your exclusive apartments sketched precisely with family-centric facilities to give the right sense of contentment.', 'public/gallery_img/appartment.webp', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(58, 10, 'Bunglow', 'Find your bungalow built to the highest standards with a perfect combination of modern architecture and features to provide comfort living.', 'public/gallery_img/bungalow-house-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(59, 10, 'Duplex House', 'We have the best team of architects in hosur who deliver your extended lifespaces loaded with amenities, making your duplex house stand apart due to its distinct features.', 'public/gallery_img/row-house-architecture-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(60, 10, 'Row House', 'Enjoy living in the expansive space artfully designed to make an exclusive row house that you would be proud to own.', 'public/gallery_img/row_house.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(61, 11, 'Residences', 'We build residences with ideas based on providing greenery & space designed with top architects in hosur keeping your privacy in mind', 'public/gallery_img/residential-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(62, 11, 'Villas', 'Get your luxury villas planned by the best architects in hosur who are hand picked for their insightful designs.', 'public/gallery_img/villa-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(63, 11, 'Apartments', 'Locate your exclusive apartments sketched precisely with family-centric facilities to give the right sense of contentment.', 'public/gallery_img/appartment.webp', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(64, 11, 'Bunglow', 'Find your bungalow built to the highest standards with a perfect combination of modern architecture and features to provide comfort living.', 'public/gallery_img/bungalow-house-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(65, 11, 'Duplex House', 'We have the best team of architects in hosur who deliver your extended lifespaces loaded with amenities, making your duplex house stand apart due to its distinct features.', 'public/gallery_img/row-house-architecture-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(66, 11, 'Row House', 'Enjoy living in the expansive space artfully designed to make an exclusive row house that you would be proud to own.', 'public/gallery_img/row_house.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(67, 12, 'Residences', 'We build residences with ideas based on providing greenery & space designed with top architects in hosur keeping your privacy in mind', 'public/gallery_img/residential-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(68, 12, 'Villas', 'Get your luxury villas planned by the best architects in hosur who are hand picked for their insightful designs.', 'public/gallery_img/villa-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(69, 12, 'Apartments', 'Locate your exclusive apartments sketched precisely with family-centric facilities to give the right sense of contentment.', 'public/gallery_img/appartment.webp', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(70, 12, 'Bunglow', 'Find your bungalow built to the highest standards with a perfect combination of modern architecture and features to provide comfort living.', 'public/gallery_img/bungalow-house-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(71, 12, 'Duplex House', 'We have the best team of architects in hosur who deliver your extended lifespaces loaded with amenities, making your duplex house stand apart due to its distinct features.', 'public/gallery_img/row-house-architecture-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(72, 12, 'Row House', 'Enjoy living in the expansive space artfully designed to make an exclusive row house that you would be proud to own.', 'public/gallery_img/row_house.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(73, 13, 'Residences', 'We build residences with ideas based on providing greenery & space designed with top architects in hosur keeping your privacy in mind', 'public/gallery_img/residential-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(74, 13, 'Villas', 'Get your luxury villas planned by the best architects in hosur who are hand picked for their insightful designs.', 'public/gallery_img/villa-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(75, 13, 'Apartments', 'Locate your exclusive apartments sketched precisely with family-centric facilities to give the right sense of contentment.', 'public/gallery_img/appartment.webp', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(76, 13, 'Bunglow', 'Find your bungalow built to the highest standards with a perfect combination of modern architecture and features to provide comfort living.', 'public/gallery_img/bungalow-house-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(77, 13, 'Duplex House', 'We have the best team of architects in hosur who deliver your extended lifespaces loaded with amenities, making your duplex house stand apart due to its distinct features.', 'public/gallery_img/row-house-architecture-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(78, 13, 'Row House', 'Enjoy living in the expansive space artfully designed to make an exclusive row house that you would be proud to own.', 'public/gallery_img/row_house.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(79, 14, 'Residences', 'We build residences with ideas based on providing greenery & space designed with top architects in hosur keeping your privacy in mind', 'public/gallery_img/residential-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(80, 14, 'Villas', 'Get your luxury villas planned by the best architects in hosur who are hand picked for their insightful designs.', 'public/gallery_img/villa-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(81, 14, 'Apartments', 'Locate your exclusive apartments sketched precisely with family-centric facilities to give the right sense of contentment.', 'public/gallery_img/appartment.webp', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(82, 14, 'Bunglow', 'Find your bungalow built to the highest standards with a perfect combination of modern architecture and features to provide comfort living.', 'public/gallery_img/bungalow-house-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(83, 14, 'Duplex House', 'We have the best team of architects in hosur who deliver your extended lifespaces loaded with amenities, making your duplex house stand apart due to its distinct features.', 'public/gallery_img/row-house-architecture-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(84, 14, 'Row House', 'Enjoy living in the expansive space artfully designed to make an exclusive row house that you would be proud to own.', 'public/gallery_img/row_house.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(85, 15, 'Residences', 'We build residences with ideas based on providing greenery & space designed with top architects in hosur keeping your privacy in mind', 'public/gallery_img/residential-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(86, 15, 'Villas', 'Get your luxury villas planned by the best architects in hosur who are hand picked for their insightful designs.', 'public/gallery_img/villa-architects.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(87, 15, 'Apartments', 'Locate your exclusive apartments sketched precisely with family-centric facilities to give the right sense of contentment.', 'public/gallery_img/appartment.webp', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(88, 15, 'Bunglow', 'Find your bungalow built to the highest standards with a perfect combination of modern architecture and features to provide comfort living.', 'public/gallery_img/bungalow-house-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(89, 15, 'Duplex House', 'We have the best team of architects in hosur who deliver your extended lifespaces loaded with amenities, making your duplex house stand apart due to its distinct features.', 'public/gallery_img/row-house-architecture-design.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(90, 15, 'Row House', 'Enjoy living in the expansive space artfully designed to make an exclusive row house that you would be proud to own.', 'public/gallery_img/row_house.jpg', '2024-04-01 13:11:01', '2024-04-01 13:11:01');

-- --------------------------------------------------------

--
-- Table structure for table `manage_front_end_contents`
--

CREATE TABLE `manage_front_end_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_heading` varchar(255) DEFAULT NULL,
  `sub_heading` varchar(255) DEFAULT NULL,
  `page_type` enum('architects_in_lucknow','architects_in_gorakpur','architects_in_allahabaad','building_construction_contractors_lucknow','building_construction_contractors_gorakpur','building_construction_contractors_allahabaad','interior_designers_in_lucknow','interior_designers_in_gorakpur','interior_designers_in_allahabaad','house_construction_company_in_lucknow','house_construction_company_in_gorakpur','house_construction_company_in_allahabaad','renovation_contractors_in_lucknow','house_renovation_contractors_gorakpur','house_renovation_contractors_allahabaad') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manage_front_end_contents`
--

INSERT INTO `manage_front_end_contents` (`id`, `main_heading`, `sub_heading`, `page_type`, `created_at`, `updated_at`) VALUES
(1, 'Types of Residential Buildings Designed by Top Architects in Lucknow', 'A Good Architectural Company That Breathes Life Into Structures With Simplicity', 'architects_in_lucknow', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(2, 'A Wide Array of Residential Buildings That We Innovate & Design', 'Great Things Happen When We Connect & Share Your Interest To Implement Them', 'architects_in_gorakpur', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(3, 'Envision Your Dream With Top Home Architects in Allahabaad', 'Build Your Homes With Architectural Elegance You Desired', 'architects_in_allahabaad', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(4, 'Hire Civil Contractors In Lucknow To Build Different Types Of Residences', 'Essential Construction Services With Unwavering Quality', 'building_construction_contractors_lucknow', '2024-04-01 13:11:00', '2024-04-01 13:11:00'),
(5, 'The Residential Building Types We Construct', 'All Your Construction Needs Under One Roof', 'building_construction_contractors_gorakpur', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(6, 'Expertise On a Broad Range of Residential Buildings', 'Trusted Building Contractor You Can Rely On', 'building_construction_contractors_allahabaad', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(7, 'A Reputed Interior Designing Firm in Lucknow To Make Your Space Beautiful', 'Craft Your Lovely Home With Professional Execution', 'interior_designers_in_lucknow', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(8, 'A Creative Interior Designers In Gorakpur To Make Your Space Beautiful', 'Bringing Life to Your Inner World', 'interior_designers_in_gorakpur', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(9, 'Beautify Your Space With Innovative Interior Designing Firm In Allahabaad', 'Transform Your Spaces With Aesthetics Like Never Before', 'interior_designers_in_allahabaad', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(10, 'Offering a Wide Variety of Residential Building Services', 'We are Listed Among the Top Construction Companies in Lucknow', 'house_construction_company_in_lucknow', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(11, 'The Range of Construction Services We Provide', 'One Stop Destination For All Your Construction Needs', 'house_construction_company_in_gorakpur', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(12, 'Explore Our Wide Range of Construction Services', 'Less Time, Good Quality and Best Service', 'house_construction_company_in_allahabaad', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(13, 'An End-to-End Solution To Renovate Your Old House in Lucknow', 'We have a highly dedicated and professional team to rebuild your dreams', 'renovation_contractors_in_lucknow', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(14, 'Renovate Homes Hassle-free in Gorakpur', 'Judicious Home Makeover Architects Coordinate Providing Priced-up Enhancements', 'house_renovation_contractors_gorakpur', '2024-04-01 13:11:01', '2024-04-01 13:11:01'),
(15, 'Streamline Renovations With Creative Home Renovators in Allahabaad', 'Remodel Your Home Spaces With Efficiency', 'house_renovation_contractors_allahabaad', '2024-04-01 13:11:01', '2024-04-01 13:11:01');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_11_100709_create_admins_table', 1),
(6, '2024_01_19_153915_create_social_media_links_table', 1),
(7, '2024_01_19_180655_create_settings_table', 1),
(8, '2024_01_22_080938_create_manage_front_end_contents_table', 1),
(9, '2024_01_25_195948_create_frontend_images_table', 1),
(10, '2024_01_25_200003_create_faqs_table', 1),
(11, '2024_02_04_054833_create_contact_us_table', 1),
(12, '2024_02_04_061029_create_quotes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `interest` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `site_location` varchar(255) DEFAULT NULL,
  `site_area` varchar(255) DEFAULT NULL,
  `residential_building` varchar(255) DEFAULT NULL,
  `bedrooms` varchar(255) DEFAULT NULL,
  `materials` varchar(255) DEFAULT NULL,
  `planning_execution` varchar(255) DEFAULT NULL,
  `call_back` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `header_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `app_name`, `email`, `whatsapp`, `contact`, `header_image`, `created_at`, `updated_at`) VALUES
(1, 'Construction Technology', 'const.technology62@gmail.com', '+91 9324394183', '+91 9324394183', 'assets/images/header-logo.png', '2024-04-01 13:11:00', '2024-04-01 13:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `social_media_links`
--

CREATE TABLE `social_media_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `youTube` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media_links`
--

INSERT INTO `social_media_links` (`id`, `youTube`, `instagram`, `facebook`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'https://www.youtube.com/', 'https://www.instagram.com/', 'https://www.facebook.com/', 'https://www.linkedin.com/', '2024-04-01 13:11:00', '2024-04-01 13:11:00');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Taylor Otwell', 'taylor@gmail.com', NULL, '$2y$12$xdfBxff13v3zqGU8K3LEseAZ323OpBnyuCcpCP1qqPxzaorYd1T4q', NULL, '2024-04-01 13:10:59', '2024-04-01 13:10:59'),
(2, 'Matt Stauffer', 'matt@gmail.com', NULL, '$2y$12$OWkSHpOjnGzmmuOUF5F4Nuf8hQDP1ryHStOlLLFiMdsqjHEeUD9e6', NULL, '2024-04-01 13:11:00', '2024-04-01 13:11:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontend_images`
--
ALTER TABLE `frontend_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_front_end_contents`
--
ALTER TABLE `manage_front_end_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media_links`
--
ALTER TABLE `social_media_links`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `frontend_images`
--
ALTER TABLE `frontend_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `manage_front_end_contents`
--
ALTER TABLE `manage_front_end_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_media_links`
--
ALTER TABLE `social_media_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
