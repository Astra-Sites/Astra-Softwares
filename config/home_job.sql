-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2025 at 12:42 PM
-- Server version: 8.0.39
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astrasoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_job`
--

CREATE TABLE `home_job` (
  `id` bigint NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `employment_type` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `company` varchar(255) NOT NULL,
  `responsibilities` longtext NOT NULL,
  `requirements` longtext NOT NULL,
  `benefits` longtext NOT NULL,
  `apply_link` varchar(500) NOT NULL,
  `all_jobs_link` varchar(500) NOT NULL,
  `intro` longtext NOT NULL DEFAULT (_utf8mb3'Coming soon...')
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `home_job`
--

INSERT INTO `home_job` (`id`, `job_title`, `location`, `employment_type`, `salary`, `company`, `responsibilities`, `requirements`, `benefits`, `apply_link`, `all_jobs_link`, `intro`) VALUES
(1, 'Backend Engineer', 'Hybrid', 'Full Time', '45', 'Astra Softwares', d and integrate APIs\r\nWrite clean and efficient server-side code\r\nOptimize application performance and database queries', 'Proven experience as a Backend Engineer or similar role\r\nStrong proficiency in server-side languages (e.g., Python, Node.js, Java, PHP, Go)\r\nExperience with RESTful APIs and web services\r\nProficient in database systems (e.g., MySQL, PostgreSQL, MongoDB)\r\nFamiliarity with version control tools like Git\r\nUnderstanding of security, authentication, and data protection\r\nExperience with cloud platforms (e.g., AWS, Azure, Google Cloud)\r\nKnowledge of containerization tools like Docker and Kubernetes\r\nAbility to write clean, maintainable, and well-documented code', 'Competitive salary\r\nFlexible working hours\r\nRemote work options or hybrid setup\r\nPaid time off (vacation, sick leave, holidays)\r\nPerformance bonuses and annual salary reviews\r\nProfessional development support (courses, certifications, conferences)', 'https://docs.google.com/forms/d/e/1FAIpQLScVDkNQ0cfkl-ukHioQznPs1y94fOs3zwcLAOC5tYzw5taCyw/viewform', 'https://docs.google.com/forms/d/e/1FAIpQLScVDkNQ0cfkl-ukHioQznPs1y94fOs3zwcLAOC5tYzw5taCyw/viewform', 'Are you passionate about building scalable, secure, and high-performance systems that power modern digital experiences? We\'re looking for a talented Backend Engineer to help us design and develop robust server-side logic, APIs, and infrastructure that support our growing suite of products. If you\'re driven by solving complex problems and collaborating with cross-functional teams to bring innovative features to life, we’d love to hear from you'),
(2, 'Quantum Computing Specialist', 'Hybrid', 'Full Time', '30', 'Astra Softwares', 'Resear'Design, develop and maintain scalable backend systems\r\nBuilch and develop quantum algorithms\r\nSimulate quantum circuits and test their performance\r\nCollaborate with classical computing teams to integrate hybrid quantum-classical solutions\r\nAnalyze quantum complexity and optimize algorithm efficiency\r\nContribute to the development and maintenance of quantum computing frameworks\r\nEvaluate and benchmark quantum hardware platforms\r\nPublish research findings and contribute to academic or industry papers\r\nStay current with advancements in quantum technologies', 'Strong foundation in quantum mechanics and quantum information theory\r\nExperience with quantum programming languages (e.g., Qiskit, Cirq, Braket, Ocean)\r\nFamiliarity with quantum hardware platforms (IBM Q, Rigetti, IonQ, etc.)\r\nProficiency in Python or other relevant programming languages\r\nExperience with classical simulation of quantum algorithms\r\nKnowledge of linear algebra, probability, and computational complexity\r\nAbility to communicate complex concepts to technical and non-technical audiences\r\nPublished papers or research experience in quantum computing (preferred)\r\nStrong analytical and problem-solving skills\r\nExperience with cloud-based quantum computing environments', 'Competitive salary and performance bonuses\r\nFlexible hours and remote work options\r\nResearch funding or lab access (where applicable)\r\nOpportunities to collaborate with top researchers and institutions\r\nAccess to cutting-edge quantum hardware and simulation tools\r\nProfessional development support (conferences, certifications)\r\nHealth and wellness programs\r\nCompany-sponsored events and innovation challenges\r\nIntellectual property incentives for novel algorithm development\r\nGlobal exposure through cross-functional teams', 'https://docs.google.com/forms/d/e/1FAIpQLScVDkNQ0cfkl-ukHioQznPs1y94fOs3zwcLAOC5tYzw5taCyw/viewform', 'https://docs.google.com/forms/d/e/1FAIpQLScVDkNQ0cfkl-ukHioQznPs1y94fOs3zwcLAOC5tYzw5taCyw/viewform', 'Are you fascinated by the potential of quantum technologies to revolutionize computation? We are looking for a highly skilled Quantum Computing Specialist to contribute to the design, simulation, and development of quantum algorithms and systems. In this role, you’ll collaborate with researchers, engineers, and data scientists to bridge the gap between theoretical models and real-world applications, helping us solve problems classical computers can’t handle efficiently.'),
(3, 'Account Manager', 'Nairobi, Kenya', 'Full Time', '45', 'Astra Softwares', 'Build and maintain strong client relationships\r\nServe as the main point of contact for assigned accounts\r\nUnderstand client needs and provide tailored solutions\r\nEnsure timely delivery of services and products\r\nCollaborate with internal teams to meet client expectations\r\nMonitor account performance and identify growth opportunities\r\nPrepare regular reports on account status and performance\r\nResolve client issues and handle complaints effectively\r\nConduct meetings and presentations to key stakeholders\r\nStay updated on industry trends and market developments\r\nNegotiate contracts and close agreements to maximize profits\r\nMaintain accurate records of client communications and transactions', 'Proven experience as an Account Manager, Customer Success Manager, or similar role in the tech industry\r\nSolid understanding of software solutions, SaaS platforms, or AI technologies\r\nStrong communication and interpersonal skills\r\nAbility to manage multiple client accounts and projects simultaneously\r\nExperience in client onboarding, upselling, and relationship management\r\nProblem-solving mindset with a proactive attitude\r\nFamiliarity with CRM tools (e.g., HubSpot, Salesforce, Zoho)\r\nBasic understanding of APIs, cloud platforms, and data privacy concepts\r\nAbility to translate complex technical concepts into simple client-facing language\r\nStrong organizational skills and attention to detail\r\nBachelor\'s degree in Business, Marketing, Computer Science, or related field\r\nPassion for technology and eagerness to stay updated with AI and software trends', 'Competitive salary with performance-based bonuses\r\nFlexible working hours and remote work options\r\nHealth insurance and wellness benefits\r\nOpportunities to work with cutting-edge AI and software technologies\r\nProfessional development support (courses, certifications, conferences)\r\nCollaborative and innovation-driven work culture\r\nPaid time off (vacation, sick leave, holidays)\r\nAccess to company tools, resources, and AI platforms\r\nClear career growth path and internal promotion opportunities\r\nCompany-sponsored team events and retreats\r\nEquity options or profit-sharing (if applicable)\r\nModern office environment with tech-friendly amenities', 'https://forms.gle/QLBdvB54NUk9cUiP7', 'https://forms.gle/QLBdvB54NUk9cUiP7', 'Are you passionate about cutting-edge technology and building strong client relationships? At our innovative software and AI company, we’re looking for a dynamic Account Manager to serve as the strategic link between our clients and our AI-driven solutions. You’ll play a critical role in managing key accounts, identifying growth opportunities, and ensuring clients receive exceptional value from our products and services. If you thrive at the intersection of technology and client success, we’d love to have you on board.'),
(4, 'Data Scientist', 'Hybrid', 'Full Time', '37', 'Astra Softwares', 'Collect, clean, and analyze large datasets from various sources\r\nBuild and deploy machine learning and deep learning models\r\nDesign data pipelines and workflows for scalable data processing\r\nCollaborate with software engineers and AI researchers to integrate models into production\r\nInterpret and communicate findings to stakeholders using visualizations and reports\r\nConduct experiments and perform A/B testing to evaluate model performance\r\nStay current with the latest data science trends, tools, and best practices\r\nOptimize model performance and ensure reliability in production environments\r\nDocument processes, workflows, and methodologies clearly', 'Proven experience as a Data Scientist or similar role\r\nProficiency in Python, R, or similar languages used in data analysis\r\nStrong knowledge of machine learning libraries (e.g., scikit-learn, TensorFlow, PyTorch)\r\nHands-on experience with data querying languages & platforms (e.g., SQL, Spark, Hadoop) \r\nSolid understanding of statistics, probability, and data modeling\r\nFamiliarity with cloud platforms (e.g., AWS, GCP, Azure)\r\nExperience with version control systems (e.g., Git)\r\nAbility to visualize data using tools like Tableau, Power BI, or Matplotlib\r\nStrong problem-solving skills and critical thinking\r\nBachelor’s or Master’s degree in Data Science, Computer Science, Statistics, Mathematics, or a related field', 'Competitive salary with performance bonuses\r\nFlexible working hours and remote options\r\nHealth insurance and wellness support\r\nOpportunities to work on real-world AI and data-driven projects\r\nContinuous learning support (courses, certifications, conferences)\r\nCollaborative and innovative team environment\r\nPaid time off and holidays\r\nModern office setup with advanced tools\r\nClear path for career advancement\r\nEquity options or profit-sharing (if applicable)', 'https://forms.gle/QLBdvB54NUk9cUiP7', 'https://forms.gle/QLBdvB54NUk9cUiP7', 'Are you driven by data and excited about building intelligent solutions that make a real impact? We’re looking for a Data Scientist to join our software and AI team. In this role, you\'ll analyze complex datasets, develop machine learning models, and help create data-driven products that power smarter decisions. If you thrive in a fast-paced, innovation-driven environment, this is your opportunity to shape the future with data.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_job`
--
ALTER TABLE `home_job`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_job`
--
ALTER TABLE `home_job`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


--
-- Table structure for table `blog`
--


CREATE TABLE `blog` (
  `id` bigint NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `blog_json` json NOT NULL
);




CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    user_pass varchar (255),
    reg_date datetime default now()
);



INSERT INTO users (first_name, last_name, email, user_pass)
VALUES 
('Ismael', 'Bett', 'kipkoech@astrasoft.tech', '@AstraBett2025'),
('David', 'Nanjila', 'nanjila@astrasoft.tech', '@AstraNanjila2025'),
('Samuel', 'Oduor', 'samuel@astrasoft.tech', '@AstraSamuel2025'),
('Elizabeth', 'Onyango', 'elizabeth@astrasoft.tech', '@AstraElizabeth2025'),
('Denis', 'Pius', 'denis@astrasoft.tech', '@AstraDenis2025');


--
-- Dumping data for table `blog`
--
