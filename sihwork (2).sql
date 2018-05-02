-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2017 at 10:22 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sihwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Email ID` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendence_table`
--

CREATE TABLE `attendence_table` (
  `id` bigint(12) NOT NULL,
  `Meeting ID` varchar(255) NOT NULL,
  `School ID` varchar(255) NOT NULL,
  `Absent Member` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `pid` int(10) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pdetails` text NOT NULL,
  `rdate` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`pid`, `pname`, `pdetails`, `rdate`) VALUES
(8, 'How to use', '<p>Instructions with a detailed demo video would be uploaded soon. Thanks</p>', '2017-04-02 08:23:18'),
(9, 'Announcements', '<p><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&#39;The Right of Children to Free and Compulsory Education Act&#39; or &#39;</span><i style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">Right to Education Act</i><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;also known as RTE&#39;, is an&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Act_of_Parliament\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-size: 14px;\" title=\"Act of Parliament\">Act</a><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;of the&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Parliament_of_India\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-size: 14px;\" title=\"Parliament of India\">Parliament of India</a><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;enacted on 4 August 2009, which describes the modalities of the importance of free and compulsory education for children between 6 and 14 in India under Article 21A of the&nbsp;</span><a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Indian_Constitution\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-size: 14px;\" title=\"Indian Constitution\">Indian Constitution</a><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">.</span><sup class=\"reference\" id=\"cite_ref-1\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px; color: rgb(34, 34, 34); font-family: sans-serif;\"><a href=\"https://en.wikipedia.org/wiki/Right_of_Children_to_Free_and_Compulsory_Education_Act#cite_note-1\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\">[1]</a></sup><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">India became one of 135 countries to make&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Right_to_education\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-size: 14px;\" title=\"Right to education\">education a fundamental right</a><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;of every child when the act came into force on 1 April 2010.</span><sup class=\"reference\" id=\"cite_ref-2\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px; color: rgb(34, 34, 34); font-family: sans-serif;\"><a href=\"https://en.wikipedia.org/wiki/Right_of_Children_to_Free_and_Compulsory_Education_Act#cite_note-2\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\">[2]</a></sup><sup class=\"reference\" id=\"cite_ref-3\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px; color: rgb(34, 34, 34); font-family: sans-serif;\"><a href=\"https://en.wikipedia.org/wiki/Right_of_Children_to_Free_and_Compulsory_Education_Act#cite_note-3\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\">[3]</a></sup><sup class=\"reference\" id=\"cite_ref-4\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px; color: rgb(34, 34, 34); font-family: sans-serif;\"><a href=\"https://en.wikipedia.org/wiki/Right_of_Children_to_Free_and_Compulsory_Education_Act#cite_note-4\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none;\">[4]</a></sup><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">The title of the RTE Act incorporates the words &lsquo;free and compulsory&rsquo;. </span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&lsquo;Free education&rsquo; means that no child, other than a child who has been admitted by his or her parents to a school which is not supported by the appropriate Government, shall be liable to pay any kind of fee or charges or expenses which may prevent him or her from pursuing and completing elementary education. </span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&lsquo;Compulsory education&rsquo; casts an obligation on the appropriate Government and local authorities to provide and ensure admission, attendance and completion of elementary education by all children in the 6-14 age group. </span></p>\r\n\r\n<p><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">With this, India has moved forward to a rights based framework that casts a legal obligation on the Central and State Governments to implement this fundamental child right as enshrined in the Article 21A of the Constitution, in accordance with the provisions of the RTE Act.</span></p>', '2017-04-02 08:27:28'),
(7, 'Technical support', '<p style=\"word-wrap: break-word; color: rgb(34, 34, 34); font-family: sans-serif;\"><strong>Contacting RT&Eacute;&#39;s Main Switchboard</strong><br />\r\nTel: (01) 208 3111<br />\r\nFax: (01) 208 3080</p>\r\n\r\n<p style=\"word-wrap: break-word; color: rgb(34, 34, 34); font-family: sans-serif;\">If you know the extension number of the person you wish to contact please dial the prefix 208 followed by the extension number.</p>\r\n\r\n<p style=\"word-wrap: break-word; color: rgb(34, 34, 34); font-family: sans-serif;\"><strong>E-mailing RT&Eacute;&nbsp;</strong><br />\r\nIf you know the name of the person you wish to e-mail in RT&Eacute; you can e-mail using the following formula.&nbsp;<a href=\"http://www.rte.ie/about/en/information-and-feedback/contact-rte/2012/0220/290072-contact-information/#\" style=\"color: rgb(254, 0, 150); text-decoration: none;\">firstname.surname@rte.ie</a>&nbsp;eg.&nbsp;<a href=\"http://www.rte.ie/about/en/information-and-feedback/contact-rte/2012/0220/290072-contact-information/#\" style=\"color: rgb(254, 0, 150); text-decoration: none;\">joe.bloggs@rte.ie</a></p>\r\n\r\n<p style=\"word-wrap: break-word; color: rgb(34, 34, 34); font-family: sans-serif;\"><strong>General queries/Programme&nbsp;Information</strong><br />\r\nThe RT&Eacute; Information Office opens from 9.30am to 7pm each Monday to Friday and from 10am to 3pm each Saturday. The office is contactable by telephone on (01) 208 3434 or via e-mail to&nbsp;<a href=\"mailto:info@rte.ie\" style=\"color: rgb(254, 0, 150); text-decoration: none;\">info@rte.ie</a>. Public and Bank Holiday times may vary. You may also call outside of office hours and leave a voice message. Your call will be returned on the next working day. For more information,&nbsp;<a href=\"http://www.rte.ie/about/en/information-and-feedback/contact-rte/2012/0420/317888-rte-information-office/\" style=\"color: rgb(254, 0, 150); text-decoration: none;\">click here</a>.</p>\r\n\r\n<p style=\"word-wrap: break-word; color: rgb(34, 34, 34); font-family: sans-serif;\"><strong>Making a&nbsp;complaint to RT&Eacute;&nbsp;</strong><br />\r\nRT&Eacute; has a process for dealing with complaints. For more information,&nbsp;<a href=\"http://www.rte.ie/about/en/information-and-feedback/complaints/2012/0222/291660-complaints-procedure/\" style=\"color: rgb(254, 0, 150); text-decoration: none;\">c</a><a href=\"http://www.rte.ie/about/en/information-and-feedback/complaints/2012/0222/291660-complaints-procedure/\" style=\"color: rgb(254, 0, 150); text-decoration: none;\" target=\"_blank\">lick here</a>.</p>\r\n\r\n<p style=\"word-wrap: break-word; color: rgb(34, 34, 34); font-family: sans-serif;\"><strong>Reporting problems with Television or Radio Reception</strong><br />\r\nYou may report a reception fault by contacting RT&Eacute;&nbsp;TV/Radio Reception Queries. Callsave 1850 584 584 or email,&nbsp;<a href=\"mailto:rtenltech@rte.ie\" style=\"color: rgb(254, 0, 150); text-decoration: none;\">rtenltech@rte.ie</a></p>\r\n\r\n<p style=\"word-wrap: break-word; color: rgb(34, 34, 34); font-family: sans-serif;\"><strong>Reporting an issue relating to the RT&Eacute; Player</strong></p>\r\n\r\n<p style=\"word-wrap: break-word; color: rgb(34, 34, 34); font-family: sans-serif;\">Contact the RT&Eacute; Player Team by e-mailing&nbsp;<a href=\"mailto:playerfeedback@rte.ie\" style=\"color: rgb(254, 0, 150); text-decoration: none;\">playerfeedback@rte.ie</a></p>', '2017-04-02 08:22:19'),
(6, 'About Us', '<div style=\"box-sizing: border-box; outline: none; margin: 0px; padding: 0px; color: rgb(70, 70, 70); font-family: Lato; font-size: 12px;\"><span style=\"box-sizing: border-box; outline: none; font-size: 14px;\">The Right of Children to Free and Compulsory Education Act or Right to Education Act (RTE), is an Act of the Parliament of India enacted on 4 August 2009, which describes the modalities of the importance of free and compulsory education for children between 6 and 14 in India under Article 21a of the Indian Constitution. India became one of 135 countries to make education a fundamental right of every child when the Act came into force on 1 April 2010.</span></div>\r\n\r\n<div style=\"box-sizing: border-box; outline: none; margin: 0px; padding: 0px; color: rgb(70, 70, 70); font-family: Lato; font-size: 12px;\">&nbsp;</div>\r\n\r\n<div style=\"box-sizing: border-box; outline: none; margin: 0px; padding: 0px; color: rgb(70, 70, 70); font-family: Lato; font-size: 12px;\"><span style=\"box-sizing: border-box; outline: none; font-size: 14px;\">The Act makes education a fundamental right of every child between the ages of 6 and 14 and specifies minimum norms in elementary schools. It requires all private schools to reserve 25% of seats to children (to be reimbursed by the state as part of the public-private partnership plan). Kids are admitted in to private schools based on economic status or caste based reservations. It also prohibits all unrecognised schools from practice, and makes provisions for no donation or capitation fees and no interview of the child or parent for admission. The Act also provides that no child shall be held back, expelled, or required to pass a board examination until the completion of elementary education. There is also a provision for special training of school drop-outs to bring them up to par with students of the same age.</span></div>\r\n\r\n<div style=\"box-sizing: border-box; outline: none; margin: 0px; padding: 0px; color: rgb(70, 70, 70); font-family: Lato; font-size: 12px;\">&nbsp;</div>\r\n\r\n<div style=\"box-sizing: border-box; outline: none; margin: 0px; padding: 0px; color: rgb(70, 70, 70); font-family: Lato; font-size: 12px;\"><span style=\"box-sizing: border-box; outline: none; font-size: 14px;\">The RTE Act requires surveys that will monitor all neighbourhoods, identify children requiring education, and set up facilities for providing it. The World Bank education specialist for India, Sam Carlson, has observed: &quot;The RTE Act is the first legislation in the world that puts the responsibility of ensuring enrolment, attendance and completion on the Government. It is the parents&#39; responsibility to send the children to schools in the US and other countries.&quot;</span></div>\r\n\r\n<div style=\"box-sizing: border-box; outline: none; margin: 0px; padding: 0px; color: rgb(70, 70, 70); font-family: Lato; font-size: 12px;\">&nbsp;</div>', '2017-04-02 08:19:57'),
(10, 'Photo Gallery', '<p><img alt=\"\" height=\"1042\" src=\"http://localhost/sihcoding/rte/uploads/images/gall6.jpg\" width=\"1300\" /></p>', '2017-04-02 08:30:34'),
(11, 'Contacts', '<p style=\"word-wrap: break-word; color: rgb(34, 34, 34); font-family: sans-serif;\">Contact information for RT&Eacute;&#39;s Studios and Offices.</p>\r\n\r\n<p style=\"word-wrap: break-word; color: rgb(34, 34, 34); font-family: sans-serif;\"><strong>RT&Eacute; Studios &amp; Offices</strong></p>\r\n\r\n<p style=\"word-wrap: break-word; color: rgb(34, 34, 34); font-family: sans-serif;\">RT&Eacute;<br />\r\nDonnybrook<br />\r\nDublin 4<br />\r\nTele: (01) 2083111<br />\r\nFax: (01) 2083080</p>', '2017-04-02 08:31:55'),
(12, 'FAQs', '<p>1.&nbsp;<span style=\"color: rgb(70, 70, 70); font-family: Lato; font-size: 14px;\">This is a common perception since it is difficult to see beyond the centuries old custom and culture of failing and expelling children. That the learning level of a child who is punished by failure at any time in the elementary stage shall improve the next year has no educational or research backing. If at all, the social stigma of failure, particularly for a child coming from a poor home is more likely to ensure that the failed child shall drop off from the next year. It is a method to weed out children who are harshly judged for being &lsquo;weak&rsquo; or &lsquo;dull&rsquo;, which may have a lot to do with the learning environment of the school, the psychological and coping stress on the child, rather than any innate deficiency in the child. More often, failure and expulsion of the child hides the deficiencies of the learning environment of the class room.&nbsp;</span></p>\r\n\r\n<p>2.&nbsp;<span style=\"color: rgb(70, 70, 70); font-family: Lato; font-size: 14px;\">The curriculum must follow some basic principles which have been laid down in the Act, including be in line with Constitutional values and designed to develop a child&#39;s full potential.</span></p>\r\n\r\n<p><span style=\"color: rgb(70, 70, 70); font-family: Lato; font-size: 14px;\">3.&nbsp;The state governments shall have to specify academic authorities that will lay down curriculum and evaluation procedures at the state level. These could be SCERTs or other academic institutions of the state. The state curriculums must however be prepared according to certain common principles of content and process described in Section 29(2).</span></p>\r\n\r\n<p><span style=\"color: rgb(70, 70, 70); font-family: Lato; font-size: 14px;\">4.&nbsp;Yes, under Section 7(6a), the central government has to develop a framework of national curriculum with the help of academic authorities of state governments. This is significant since the present practice of the NCERT preparing the NCF was of an advisory nature; under the Act, it has become mandatory, and shall involve the state governments too.</span></p>\r\n\r\n<p>&nbsp;</p>', '2017-04-02 08:35:59'),
(13, 'Quality parameters', '<p>Quality education includes:<br />\r\n- Learners who are healthy, well-nourished and ready to participate and learn,<br />\r\nand supported in learning by their families and communities;<br />\r\n&nbsp;<br />\r\n- Environments that are healthy, safe, protective and gender-sensitive, and<br />\r\nprovide adequate resources and facilities;<br />\r\n<br />\r\n- Content that is reflected in relevant curricula and materials for the acquisition<br />\r\nof basic skills, especially in the areas of literacy, numeracy and skills for life,<br />\r\nand knowledge in such areas as gender, health, nutrition, HIV/AIDS<br />\r\nprevention and peace;<br />\r\n&nbsp;<br />\r\n- Processes through which trained teachers use child-centred teaching<br />\r\napproaches in well-managed classrooms and schools and skilful assessment<br />\r\nto facilitate learning and reduce disparities;<br />\r\n&nbsp;<br />\r\n- Outcomes that encompass knowledge, skills and attitudes, and are linked to<br />\r\nnational goals for education and positive participation in society</p>', '2017-04-02 08:39:18'),
(14, 'Photo Gallery 2', '<p><img alt=\"\" height=\"387\" src=\"http://localhost/sihcoding/rte/uploads/images/gall5.jpg\" width=\"620\" /></p>', '2017-04-02 08:44:35'),
(16, 'H_about us', '<pre class=\"tw-data-text tw-ta tw-text-small\" data-fulltext=\"\" data-placeholder=\"Translation\" dir=\"ltr\" id=\"tw-target-text\" style=\"unicode-bidi: isolate; border: none; padding: 0px 0.14em 0px 0px; position: relative; margin-top: 0px; margin-bottom: 0px; resize: none; font-family: inherit; overflow: hidden; width: 276px; color: rgb(33, 33, 33); height: 1080px; font-size: 16px !important; line-height: 24px !important;\">\r\n<span lang=\"hi\">à¤¬à¤šà¥à¤šà¥‹à¤‚ à¤•à¥‹ à¤¨à¤¿: à¤¶à¥à¤²à¥à¤• à¤”à¤° à¤…à¤¨à¤¿à¤µà¤¾à¤°à¥à¤¯ à¤¶à¤¿à¤•à¥à¤·à¤¾ à¤…à¤§à¤¿à¤¨à¤¿à¤¯à¤® à¤¯à¤¾ à¤¶à¤¿à¤•à¥à¤·à¤¾ à¤•à¤¾ à¤…à¤§à¤¿à¤•à¤¾à¤° à¤…à¤§à¤¿à¤¨à¤¿à¤¯à¤® (à¤†à¤°à¤Ÿà¥€à¤ˆ) à¤•à¤¾ à¤…à¤§à¤¿à¤•à¤¾à¤°, 4 à¤…à¤—à¤¸à¥à¤¤ 200 9 à¤•à¥‹ à¤²à¤¾à¤—à¥‚ à¤•à¤¿à¤¯à¤¾ à¤—à¤¯à¤¾ à¤­à¤¾à¤°à¤¤ à¤•à¥‡ à¤¸à¤‚à¤¸à¤¦ à¤•à¤¾ à¤à¤• à¤…à¤§à¤¿à¤¨à¤¿à¤¯à¤® à¤¹à¥ˆ, à¤œà¤¿à¤¸à¤®à¥‡à¤‚ à¤¬à¤šà¥à¤šà¥‹à¤‚ à¤•à¥‡ à¤²à¤¿à¤ à¤®à¥à¤«à¥à¤¤ à¤”à¤° à¤…à¤¨à¤¿à¤µà¤¾à¤°à¥à¤¯ à¤¶à¤¿à¤•à¥à¤·à¤¾ à¤•à¥‡ à¤®à¤¹à¤¤à¥à¤µ à¤•à¥€ à¤°à¥‚à¤ªà¤°à¥‡à¤–à¤¾à¤à¤ 6 à¤”à¤° 14 à¤­à¤¾à¤°à¤¤à¥€à¤¯ à¤¸à¤‚à¤µà¤¿à¤§à¤¾à¤¨ à¤•à¥‡ à¤…à¤¨à¥à¤šà¥à¤›à¥‡à¤¦ 21 à¤ à¤•à¥‡ à¤¤à¤¹à¤¤ à¤­à¤¾à¤°à¤¤ à¤®à¥‡à¤‚à¥¤ à¤œà¤¬ 1 à¤…à¤ªà¥à¤°à¥ˆà¤² 2010 à¤•à¥‹ à¤…à¤§à¤¿à¤¨à¤¿à¤¯à¤® à¤²à¤¾à¤—à¥‚ à¤¹à¥à¤† à¤¤à¥‹ à¤­à¤¾à¤°à¤¤, 135 à¤¦à¥‡à¤¶à¥‹à¤‚ à¤®à¥‡à¤‚ à¤¸à¥‡ à¤à¤• à¤¬à¤¨ à¤—à¤¯à¤¾, à¤¶à¤¿à¤•à¥à¤·à¤¾ à¤¹à¤° à¤¬à¤šà¥à¤šà¥‡ à¤•à¤¾ à¤®à¥Œà¤²à¤¿à¤• à¤…à¤§à¤¿à¤•à¤¾à¤° à¤¬à¤¨à¤¾ à¤¸à¤•à¥‡à¥¤\r\n&nbsp;\r\nà¤‡à¤¸ à¤…à¤§à¤¿à¤¨à¤¿à¤¯à¤® à¤¨à¥‡ à¤¶à¤¿à¤•à¥à¤·à¤¾ à¤•à¥‹ 6 à¤”à¤° 14 à¤•à¥€ à¤‰à¤®à¥à¤° à¤•à¥‡ à¤¬à¥€à¤š à¤¹à¤° à¤¬à¤šà¥à¤šà¥‡ à¤•à¥‡ à¤²à¤¿à¤ à¤®à¥Œà¤²à¤¿à¤• à¤…à¤§à¤¿à¤•à¤¾à¤° à¤¬à¤¨à¤¾à¤¯à¤¾ à¤¹à¥ˆ à¤”à¤° à¤ªà¥à¤°à¤¾à¤¥à¤®à¤¿à¤• à¤µà¤¿à¤¦à¥à¤¯à¤¾à¤²à¤¯à¥‹à¤‚ à¤®à¥‡à¤‚ à¤¨à¥à¤¯à¥‚à¤¨à¤¤à¤® à¤®à¤¾à¤¨à¤¦à¤‚à¤¡à¥‹à¤‚ à¤•à¥‹ à¤¨à¤¿à¤°à¥à¤¦à¤¿à¤·à¥à¤Ÿ à¤•à¤¿à¤¯à¤¾ à¤¹à¥ˆà¥¤ à¤‡à¤¸à¤•à¥‡ à¤²à¤¿à¤ à¤¸à¤­à¥€ à¤¨à¤¿à¤œà¥€ à¤¸à¥à¤•à¥‚à¤²à¥‹à¤‚ à¤•à¥‹ à¤¬à¤šà¥à¤šà¥‹à¤‚ à¤•à¥‡ à¤²à¤¿à¤ 25% à¤¸à¥€à¤Ÿà¥‹à¤‚ à¤•à¥‹ à¤†à¤°à¤•à¥à¤·à¤¿à¤¤ à¤•à¤°à¤¨à¤¾ à¤¹à¥‹à¤—à¤¾ (à¤¸à¤¾à¤°à¥à¤µà¤œà¤¨à¤¿à¤•-à¤¨à¤¿à¤œà¥€ à¤­à¤¾à¤—à¥€à¤¦à¤¾à¤°à¥€ à¤¯à¥‹à¤œà¤¨à¤¾ à¤•à¥‡ à¤­à¤¾à¤— à¤•à¥‡ à¤°à¥‚à¤ª à¤®à¥‡à¤‚ à¤°à¤¾à¤œà¥à¤¯ à¤¦à¥à¤µà¤¾à¤°à¤¾ à¤ªà¥à¤°à¤¤à¤¿à¤ªà¥‚à¤°à¥à¤¤à¤¿ à¤•à¥€ à¤œà¤¾à¤¨à¥€ à¤šà¤¾à¤¹à¤¿à¤)à¥¤ à¤¬à¤šà¥à¤šà¥‹à¤‚ à¤•à¥‹ à¤†à¤°à¥à¤¥à¤¿à¤• à¤¸à¥à¤¥à¤¿à¤¤à¤¿ à¤¯à¤¾ à¤œà¤¾à¤¤à¤¿ à¤†à¤§à¤¾à¤°à¤¿à¤¤ à¤†à¤°à¤•à¥à¤·à¤£ à¤•à¥‡ à¤†à¤§à¤¾à¤° à¤ªà¤° à¤¨à¤¿à¤œà¥€ à¤¸à¥à¤•à¥‚à¤²à¥‹à¤‚ à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€ à¤•à¤°à¤¾à¤¯à¤¾ à¤œà¤¾à¤¤à¤¾ à¤¹à¥ˆà¥¤ à¤¯à¤¹ à¤¸à¤­à¥€ à¤…à¤ªà¤°à¤¿à¤šà¤¿à¤¤ à¤¸à¥à¤•à¥‚à¤²à¥‹à¤‚ à¤•à¥‹ à¤…à¤­à¥à¤¯à¤¾à¤¸ à¤¸à¥‡ à¤°à¥‹à¤•à¤¤à¤¾ à¤¹à¥ˆ, à¤”à¤° à¤•à¥‹à¤ˆ à¤¦à¤¾à¤¨ à¤¯à¤¾ à¤•à¥ˆà¤ªà¤¿à¤Ÿà¥‡à¤¶à¤¨ à¤«à¥€à¤¸ à¤•à¥‡ à¤²à¤¿à¤ à¤ªà¥à¤°à¤¾à¤µà¤§à¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤•à¤°à¤¤à¤¾ à¤¹à¥ˆ à¤”à¤° à¤ªà¥à¤°à¤µà¥‡à¤¶ à¤•à¥‡ à¤²à¤¿à¤ à¤¬à¤šà¥à¤šà¥‡ à¤¯à¤¾ à¤®à¤¾à¤¤à¤¾-à¤ªà¤¿à¤¤à¤¾ à¤•à¥‡ à¤•à¥‹à¤ˆ à¤¸à¤¾à¤•à¥à¤·à¤¾à¤¤à¥à¤•à¤¾à¤° à¤¨à¤¹à¥€à¤‚ à¤•à¤°à¤¤à¤¾ à¤¹à¥ˆà¥¤ à¤…à¤§à¤¿à¤¨à¤¿à¤¯à¤® à¤®à¥‡à¤‚ à¤¯à¤¹ à¤­à¥€ à¤ªà¥à¤°à¤¾à¤µà¤§à¤¾à¤¨ à¤¹à¥ˆ à¤•à¤¿ à¤ªà¥à¤°à¤¾à¤¥à¤®à¤¿à¤• à¤¶à¤¿à¤•à¥à¤·à¤¾ à¤ªà¥‚à¤°à¥€ à¤¹à¥‹à¤¨à¥‡ à¤¤à¤• à¤•à¥‹à¤ˆ à¤­à¥€ à¤¬à¤šà¥à¤šà¤¾ à¤µà¤¾à¤ªà¤¸, à¤¨à¤¿à¤·à¥à¤•à¤¾à¤¸à¤¿à¤¤ à¤¯à¤¾ à¤¬à¥‹à¤°à¥à¤¡ à¤ªà¤°à¥€à¤•à¥à¤·à¤¾ à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£ à¤•à¤°à¤¨à¥‡ à¤•à¥‡ à¤²à¤¿à¤ à¤†à¤µà¤¶à¥à¤¯à¤• à¤¨à¤¹à¥€à¤‚ à¤¹à¥‹à¤—à¤¾à¥¤ à¤¸à¥à¤•à¥‚à¤² à¤›à¥‹à¤¡à¤¼à¤¨à¥‡ à¤µà¤¾à¤²à¥‹à¤‚ à¤•à¥‡ à¤µà¤¿à¤¶à¥‡à¤· à¤ªà¥à¤°à¤¶à¤¿à¤•à¥à¤·à¤£ à¤•à¥‡ à¤²à¤¿à¤ à¤à¤• à¤­à¥€ à¤ªà¥à¤°à¤¾à¤µà¤§à¤¾à¤¨ à¤¹à¥ˆ à¤œà¥‹ à¤‰à¤¨à¥à¤¹à¥‡à¤‚ à¤‰à¤¸à¥€ à¤‰à¤®à¥à¤° à¤•à¥‡ à¤›à¤¾à¤¤à¥à¤°à¥‹à¤‚ à¤•à¥‡ à¤¸à¤®à¤¾à¤¨ à¤¸à¤®à¤à¤¾ à¤œà¤¾à¤à¥¤\r\n&nbsp;\r\nà¤†à¤°à¤Ÿà¥€à¤ˆ à¤•à¤¾à¤¨à¥‚à¤¨ à¤•à¥‡ à¤…à¤¨à¥à¤¸à¤¾à¤° à¤¸à¤­à¥€ à¤ªà¤¡à¤¼à¥‹à¤¸à¤¿à¤¯à¥‹à¤‚ à¤•à¥€ à¤¨à¤¿à¤—à¤°à¤¾à¤¨à¥€, â€‹â€‹à¤¶à¤¿à¤•à¥à¤·à¤¾ à¤•à¥€ à¤†à¤µà¤¶à¥à¤¯à¤•à¤¤à¤¾ à¤µà¤¾à¤²à¥‡ à¤¬à¤šà¥à¤šà¥‹à¤‚ à¤•à¥€ à¤ªà¤¹à¤šà¤¾à¤¨ à¤•à¤°à¤¨à¥‡ à¤”à¤° à¤‡à¤¸à¥‡ à¤‰à¤ªà¤²à¤¬à¥à¤§ à¤•à¤°à¤¾à¤¨à¥‡ à¤•à¥‡ à¤²à¤¿à¤ à¤¸à¥à¤µà¤¿à¤§à¤¾à¤à¤‚ à¤¸à¥à¤¥à¤¾à¤ªà¤¿à¤¤ à¤•à¤°à¤¨à¥‡ à¤•à¥‡ à¤²à¤¿à¤ à¤¸à¤°à¥à¤µà¥‡à¤•à¥à¤·à¤£ à¤•à¤¿à¤ à¤œà¤¾à¤¨à¥‡ à¤šà¤¾à¤¹à¤¿à¤à¥¤ à¤­à¤¾à¤°à¤¤ à¤•à¥‡ à¤²à¤¿à¤ à¤µà¤¿à¤¶à¥à¤µ à¤¬à¥ˆà¤‚à¤• à¤¶à¤¿à¤•à¥à¤·à¤¾ à¤µà¤¿à¤¶à¥‡à¤·à¤œà¥à¤ž à¤¸à¥ˆà¤® à¤•à¤¾à¤°à¥à¤²à¤¸à¤¨ à¤¨à¥‡ à¤•à¤¹à¤¾ à¤¹à¥ˆ: &quot;à¤†à¤°à¤Ÿà¥€à¤ˆ à¤•à¤¾à¤¨à¥‚à¤¨ à¤¦à¥à¤¨à¤¿à¤¯à¤¾ à¤®à¥‡à¤‚ à¤ªà¤¹à¤²à¤¾ à¤•à¤¾à¤¨à¥‚à¤¨ à¤¹à¥ˆ à¤œà¥‹ à¤¸à¤°à¤•à¤¾à¤° à¤ªà¤° à¤¨à¤¾à¤®à¤¾à¤‚à¤•à¤¨, à¤‰à¤ªà¤¸à¥à¤¥à¤¿à¤¤à¤¿ à¤”à¤° à¤ªà¥‚à¤°à¤¾ à¤•à¤°à¤¨à¥‡ à¤•à¥€ à¤œà¤¿à¤®à¥à¤®à¥‡à¤¦à¤¾à¤°à¥€ à¤°à¤–à¤¤à¤¾ à¤¹à¥ˆà¥¤ à¤¯à¤¹ à¤¬à¤šà¥à¤šà¥‹à¤‚ à¤•à¥‹ à¤­à¥‡à¤œà¤¨à¥‡ à¤•à¥‡ à¤²à¤¿à¤ à¤®à¤¾à¤¤à¤¾-à¤ªà¤¿à¤¤à¤¾ à¤•à¥€ à¤œà¤¿à¤®à¥à¤®à¥‡à¤¦à¤¾à¤°à¥€ à¤¹à¥ˆ à¤…à¤®à¥‡à¤°à¤¿à¤•à¤¾ à¤”à¤° à¤…à¤¨à¥à¤¯ à¤¦à¥‡à¤¶à¥‹à¤‚ à¤®à¥‡à¤‚ à¤¸à¥à¤•à¥‚à¤²à¥‹à¤‚ à¤•à¥‡ à¤²à¤¿à¤à¥¤ &quot;</span></pre>', '2017-04-02 10:42:23'),
(17, 'H_technical support', '<pre class=\"tw-data-text tw-ta tw-text-small\" data-fulltext=\"\" data-placeholder=\"Translation\" dir=\"ltr\" id=\"tw-target-text\" style=\"unicode-bidi: isolate; border: none; padding: 0px 0.14em 0px 0px; position: relative; margin-top: 0px; margin-bottom: 0px; resize: none; font-family: inherit; overflow: hidden; width: 276px; color: rgb(33, 33, 33); height: 1128px; font-size: 16px !important; line-height: 24px !important;\">\r\n<span lang=\"hi\">à¤†à¤°à¤Ÿà¥€à¤ˆ à¤•à¥‡ à¤®à¥à¤–à¥à¤¯ à¤¸à¥à¤µà¤¿à¤šà¤¬à¥‹à¤°à¥à¤¡ à¤¸à¥‡ à¤¸à¤‚à¤ªà¤°à¥à¤• à¤•à¤°à¤¨à¤¾\r\nà¤Ÿà¥‡à¤²à¥€à¤«à¥‹à¤¨: (01) 208 3111\r\nà¤«à¥ˆà¤•à¥à¤¸: (01) 208 3080\r\n\r\nà¤¯à¤¦à¤¿ à¤†à¤ª à¤‰à¤¸ à¤µà¥à¤¯à¤•à¥à¤¤à¤¿ à¤•à¥€ à¤µà¤¿à¤¸à¥à¤¤à¤¾à¤° à¤¸à¤‚à¤–à¥à¤¯à¤¾ à¤•à¥‹ à¤œà¤¾à¤¨à¤¤à¥‡ à¤¹à¥ˆà¤‚ à¤œà¤¿à¤¸à¥‡ à¤†à¤ª à¤¸à¥‡ à¤¸à¤‚à¤ªà¤°à¥à¤• à¤•à¤°à¤¨à¤¾ à¤šà¤¾à¤¹à¤¤à¥‡ à¤¹à¥ˆà¤‚ à¤¤à¥‹ à¤•à¥ƒà¤ªà¤¯à¤¾ à¤‰à¤ªà¤¸à¤°à¥à¤— 208 à¤¡à¤¾à¤¯à¤² à¤•à¤°à¥‡à¤‚, à¤‡à¤¸à¤•à¥‡ à¤¬à¤¾à¤¦ à¤à¤•à¥à¤¸à¤Ÿà¥‡à¤‚à¤¶à¤¨ à¤¨à¤‚à¤¬à¤°\r\n\r\nà¤ˆ-à¤®à¥‡à¤²à¤¿à¤‚à¤— RT&Eacute;\r\nà¤¯à¤¦à¤¿ à¤†à¤ª à¤‰à¤¸ à¤µà¥à¤¯à¤•à¥à¤¤à¤¿ à¤•à¤¾ à¤¨à¤¾à¤® à¤œà¤¾à¤¨à¤¤à¥‡ à¤¹à¥ˆà¤‚ à¤œà¤¿à¤¸à¥‡ à¤†à¤ª à¤†à¤°à¤Ÿà¥€à¤ˆ à¤®à¥‡à¤‚ à¤ˆ-à¤®à¥‡à¤² à¤•à¤°à¤¨à¤¾ à¤šà¤¾à¤¹à¤¤à¥‡ à¤¹à¥ˆà¤‚ à¤¤à¥‹ à¤†à¤ª à¤¨à¤¿à¤®à¥à¤¨ à¤¸à¥‚à¤¤à¥à¤° à¤•à¤¾ à¤‰à¤ªà¤¯à¥‹à¤— à¤•à¤°à¤•à¥‡ à¤ˆ-à¤®à¥‡à¤² à¤•à¤° à¤¸à¤•à¤¤à¥‡ à¤¹à¥ˆà¤‚à¥¤ à¤ªà¥à¤°à¤¥à¤® à¤¨à¤¾à¤®.à¤¸à¤¾à¤®à¤¾à¤¨à¥à¤¯ @ rte.ie à¤‰à¤¦à¤¾à¥¤ Joe.bloggs@rte.ie\r\n\r\nà¤¸à¤¾à¤®à¤¾à¤¨à¥à¤¯ à¤ªà¥à¤°à¤¶à¥à¤¨ / à¤•à¤¾à¤°à¥à¤¯à¤•à¥à¤°à¤® à¤¸à¥‚à¤šà¤¨à¤¾\r\nà¤†à¤°à¤Ÿà¥€à¤†à¤ˆ à¤¸à¥‚à¤šà¤¨à¤¾ à¤•à¤¾à¤°à¥à¤¯à¤¾à¤²à¤¯ à¤ªà¥à¤°à¤¤à¥à¤¯à¥‡à¤• à¤¸à¥‹à¤®à¤µà¤¾à¤° à¤¸à¥‡ à¤¶à¥à¤•à¥à¤°à¤µà¤¾à¤° 9.30 à¤¬à¤œà¥‡ à¤¸à¥‡ à¤¶à¤¾à¤® 7 à¤¬à¤œà¥‡ à¤”à¤° à¤ªà¥à¤°à¤¤à¥à¤¯à¥‡à¤• à¤¶à¤¨à¤¿à¤µà¤¾à¤° à¤•à¥‹ à¤¶à¤¾à¤® 10 à¤¬à¤œà¥‡ à¤¸à¥‡ 3 à¤¬à¤œà¥‡ à¤¤à¤• à¤–à¥à¤²à¤¤à¤¾ à¤¹à¥ˆà¥¤ à¤•à¤¾à¤°à¥à¤¯à¤¾à¤²à¤¯ à¤Ÿà¥‡à¤²à¥€à¤«à¥‹à¤¨ (01) 208 3434 à¤ªà¤° à¤¯à¤¾ à¤ˆ-à¤®à¥‡à¤² à¤¦à¥à¤µà¤¾à¤°à¤¾ info@rte.ie à¤ªà¤° à¤¸à¤‚à¤ªà¤°à¥à¤• à¤•à¤¿à¤¯à¤¾ à¤œà¤¾à¤¤à¤¾ à¤¹à¥ˆà¥¤ à¤¸à¤¾à¤°à¥à¤µà¤œà¤¨à¤¿à¤• à¤”à¤° à¤¬à¥ˆà¤‚à¤• à¤›à¥à¤Ÿà¥à¤Ÿà¥€ à¤•à¥‡ à¤¸à¤®à¤¯ à¤­à¤¿à¤¨à¥à¤¨ à¤¹à¥‹ à¤¸à¤•à¤¤à¥‡ à¤¹à¥ˆà¤‚ à¤†à¤ª à¤•à¤¾à¤°à¥à¤¯à¤¾à¤²à¤¯ à¤•à¥‡ à¤˜à¤‚à¤Ÿà¥‡ à¤•à¥‡ à¤¬à¤¾à¤¹à¤° à¤­à¥€ à¤•à¥‰à¤² à¤•à¤° à¤¸à¤•à¤¤à¥‡ à¤¹à¥ˆà¤‚ à¤”à¤° à¤à¤• à¤†à¤µà¤¾à¤œ à¤¸à¤‚à¤¦à¥‡à¤¶ à¤›à¥‹à¤¡à¤¼ à¤¸à¤•à¤¤à¥‡ à¤¹à¥ˆà¤‚à¥¤ à¤†à¤ªà¤•à¤¾ à¤•à¥‰à¤² à¤…à¤—à¤²à¥‡ à¤•à¤¾à¤°à¥à¤¯ à¤¦à¤¿à¤µà¤¸ à¤ªà¤° à¤µà¤¾à¤ªà¤¸ à¤•à¤° à¤¦à¤¿à¤¯à¤¾ à¤œà¤¾à¤à¤—à¤¾à¥¤ à¤…à¤§à¤¿à¤• à¤œà¤¾à¤¨à¤•à¤¾à¤°à¥€ à¤•à¥‡ à¤²à¤¿à¤, à¤¯à¤¹à¤¾à¤‚ à¤•à¥à¤²à¤¿à¤• à¤•à¤°à¥‡à¤‚à¥¤\r\n\r\nRT&Eacute; à¤•à¥‹ à¤¶à¤¿à¤•à¤¾à¤¯à¤¤ à¤¦à¤°à¥à¤œ à¤•à¤°à¤¨à¤¾\r\nà¤¶à¤¿à¤•à¤¾à¤¯à¤¤ à¤¸à¥‡ à¤¨à¤¿à¤ªà¤Ÿà¤¨à¥‡ à¤•à¥‡ à¤²à¤¿à¤ à¤†à¤°à¤Ÿà¥€à¤ˆ à¤•à¥€ à¤à¤• à¤ªà¥à¤°à¤•à¥à¤°à¤¿à¤¯à¤¾ à¤¹à¥ˆ à¤…à¤§à¤¿à¤• à¤œà¤¾à¤¨à¤•à¤¾à¤°à¥€ à¤•à¥‡ à¤²à¤¿à¤, à¤¯à¤¹à¤¾à¤‚ à¤•à¥à¤²à¤¿à¤• à¤•à¤°à¥‡à¤‚à¥¤\r\n\r\nà¤Ÿà¥‡à¤²à¥€à¤µà¤¿à¤œà¤¨ à¤¯à¤¾ à¤°à¥‡à¤¡à¤¿à¤¯à¥‹ à¤°à¤¿à¤¸à¥‡à¤ªà¥à¤¶à¤¨ à¤•à¥‡ à¤¸à¤¾à¤¥ à¤¸à¤®à¤¸à¥à¤¯à¤¾à¤“à¤‚ à¤•à¥€ à¤°à¤¿à¤ªà¥‹à¤°à¥à¤Ÿà¤¿à¤‚à¤—\r\nà¤†à¤ª à¤†à¤°à¤Ÿà¥€à¤ˆ à¤Ÿà¥€à¤µà¥€ / à¤°à¥‡à¤¡à¤¿à¤¯à¥‹ à¤°à¤¿à¤¸à¥‡à¤ªà¥à¤¶à¤¨ à¤•à¥à¤µà¥‡à¤°à¥€à¤œ à¤¸à¥‡ à¤¸à¤‚à¤ªà¤°à¥à¤• à¤•à¤°à¤•à¥‡ à¤°à¤¿à¤¸à¥‡à¤ªà¥à¤¶à¤¨ à¤—à¤²à¤¤à¥€ à¤•à¥€ à¤°à¤¿à¤ªà¥‹à¤°à¥à¤Ÿ à¤•à¤° à¤¸à¤•à¤¤à¥‡ à¤¹à¥ˆà¤‚à¥¤ à¤•à¥‰à¤²à¤µà¥‡ 1850 584 584 à¤¯à¤¾ à¤ˆà¤®à¥‡à¤², rtenltech@rte.ie\r\n\r\nRT&Eacute; à¤ªà¥à¤²à¥‡à¤¯à¤° à¤¸à¥‡ à¤¸à¤‚à¤¬à¤‚à¤§à¤¿à¤¤ à¤•à¤¿à¤¸à¥€ à¤¸à¤®à¤¸à¥à¤¯à¤¾ à¤•à¥€ à¤°à¤¿à¤ªà¥‹à¤°à¥à¤Ÿ à¤•à¤°à¤¨à¤¾\r\n\r\nà¤ˆ-à¤®à¥‡à¤²à¤¿à¤‚à¤— playerfeedback@rte.ie à¤¦à¥à¤µà¤¾à¤°à¤¾ RT&Eacute; à¤ªà¥à¤²à¥‡à¤¯à¤° à¤Ÿà¥€à¤® à¤¸à¥‡ à¤¸à¤‚à¤ªà¤°à¥à¤• à¤•à¤°à¥‡à¤‚</span></pre>', '2017-04-02 10:43:29'),
(18, 'H_how to use', '<pre class=\"tw-data-text tw-ta tw-text-small\" data-fulltext=\"\" data-placeholder=\"Translation\" dir=\"ltr\" id=\"tw-target-text\" style=\"unicode-bidi: isolate; border: none; padding: 0px 0.14em 0px 0px; position: relative; margin-top: 0px; margin-bottom: 0px; resize: none; font-family: inherit; overflow: hidden; width: 276px; color: rgb(33, 33, 33); height: 48px; font-size: 16px !important; line-height: 24px !important;\">\r\n<span lang=\"hi\">à¤à¤• à¤µà¤¿à¤¸à¥à¤¤à¥ƒà¤¤ à¤¡à¥‡à¤®à¥‹ à¤µà¥€à¤¡à¤¿à¤¯à¥‹ à¤•à¥‡ à¤¸à¤¾à¤¥ à¤¨à¤¿à¤°à¥à¤¦à¥‡à¤¶ à¤œà¤²à¥à¤¦ à¤¹à¥€ à¤…à¤ªà¤²à¥‹à¤¡ à¤•à¤¿à¤ à¤œà¤¾à¤à¤‚à¤—à¥‡à¥¤ à¤§à¤¨à¥à¤¯à¤µà¤¾à¤¦</span></pre>', '2017-04-02 10:44:12');

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Member ID` varchar(255) DEFAULT NULL,
  `School ID` varchar(255) NOT NULL,
  `Position` varchar(30) DEFAULT NULL,
  `Mobile` varchar(15) DEFAULT NULL,
  `email ID` varchar(255) NOT NULL,
  `Added By` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`id`, `Name`, `Member ID`, `School ID`, `Position`, `Mobile`, `email ID`, `Added By`, `time`) VALUES
(1, 'Ranjit', 'M2138', '4', 'Principal', '9060308030', 'ranjit@gmail.com', '21', '2017-04-01 17:16:56'),
(2, 'Ramanujan', 'M4740', '4', 'maths teacher', '9060305030', 'rama@gmail.com', '21', '2017-04-02 04:56:46'),
(3, 'Ramanujan', 'M2841', '4', 'maths teacher', '9060305030', 'rama@gmail.com', '21', '2017-04-02 05:00:04'),
(4, 'Ramanujan', 'M7542', '4', 'maths teacher', '9060305030', 'rama@gmail.com', '21', '2017-04-02 05:04:18'),
(5, 'Ramanujan', 'M7143', '4', 'maths teacher', '9060305030', 'rama@gmail.com', '21', '2017-04-02 05:05:50'),
(6, 'Anuj Dahiya', 'M4944', '4', 'Engineer', '80609030', 'anuj@gmail.com', '21', '2017-04-02 05:10:23'),
(7, 'hbcdbhjk', 'M2245', '4', 'cdbcwd', 'dchjbds', 'vhssb', '21', '2017-04-02 05:12:31'),
(8, 'Anuj Pal', 'M4946', '1', 'Principal', '1111111111', 'anuj@gmail.com', '21', '2017-04-02 05:21:13'),
(9, 'Ramavtar sakhre', 'M4047', '4', 'Sectretary', '348206498', 'ramavtar@gmail.com', '21', '2017-04-02 05:48:32'),
(10, 'Abcd', 'M6048', '4', 'xyz', '1020304050', 'ab@gmail.com', '21', '2017-04-02 06:36:57'),
(11, 'Abcd', 'M1049', '3', 'xyz', '1020304050', 'ab@gmail.com', '21', '2017-04-02 06:39:01'),
(12, 'Sawan chourey', 'M1850', '3', 'teacher', '7777777777', 'sawan@gmail.com', '21', '2017-04-02 09:04:23');

-- --------------------------------------------------------

--
-- Table structure for table `district_table`
--

CREATE TABLE `district_table` (
  `id` int(4) NOT NULL,
  `District ID` varchar(5) NOT NULL,
  `District` varchar(30) NOT NULL,
  `State ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district_table`
--

INSERT INTO `district_table` (`id`, `District ID`, `District`, `State ID`) VALUES
(1, '01', 'Anantapur', '01'),
(2, '02', 'Chittoor', '01'),
(3, '03', 'East Godavari	', '01'),
(4, '04', 'Guntur', '01'),
(5, '05', 'Kadapa', '01'),
(6, '06', 'anjaw', '02'),
(7, '07', 'Bilaspur', '03'),
(8, '08', 'aara', '04'),
(9, '09', 'chappra', '04');

-- --------------------------------------------------------

--
-- Table structure for table `fund_table`
--

CREATE TABLE `fund_table` (
  `id` int(8) UNSIGNED NOT NULL,
  `Month` varchar(10) DEFAULT NULL,
  `Year` year(4) DEFAULT NULL,
  `Fund_sought` varchar(20) DEFAULT NULL,
  `Fund_received` varchar(20) DEFAULT NULL,
  `fund_used` varchar(255) NOT NULL,
  `Available_Fund` varchar(255) NOT NULL,
  `Used` varchar(250) DEFAULT NULL,
  `School ID` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Added By` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fund_table`
--

INSERT INTO `fund_table` (`id`, `Month`, `Year`, `Fund_sought`, `Fund_received`, `fund_used`, `Available_Fund`, `Used`, `School ID`, `image`, `Added By`, `time`) VALUES
(1, 'April', 2017, '18000', '20000', '', '', 'Used in mid-day meal', '4', '', 'M2138', '2017-04-01 22:05:15');

-- --------------------------------------------------------

--
-- Table structure for table `grievance_table`
--

CREATE TABLE `grievance_table` (
  `id` bigint(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `School ID` varchar(255) NOT NULL,
  `stakeholder` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Reply` varchar(255) NOT NULL,
  `Added By` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meeting_table`
--

CREATE TABLE `meeting_table` (
  `id` int(5) UNSIGNED NOT NULL,
  `Agenda` varchar(250) DEFAULT NULL,
  `Decisions` varchar(500) DEFAULT NULL,
  `Date` varchar(15) DEFAULT NULL,
  `Added By` varchar(255) NOT NULL,
  `School ID` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting_table`
--

INSERT INTO `meeting_table` (`id`, `Agenda`, `Decisions`, `Date`, `Added By`, `School ID`, `time`, `Status`, `image`) VALUES
(1, 'SDP of todays mereting', 'Decisions in meeting are\r\n1', '2-04-2017', 'M2138', '4', '2017-04-01 22:00:29', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mid_day_meal`
--

CREATE TABLE `mid_day_meal` (
  `id` bigint(15) NOT NULL,
  `Week` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `School ID` varchar(255) NOT NULL,
  `Fund_allocated` varchar(255) NOT NULL,
  `Fund_used` varchar(255) NOT NULL,
  `Fund_available` varchar(255) NOT NULL,
  `How_used` varchar(255) NOT NULL,
  `Students Availed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news_school_table`
--

CREATE TABLE `news_school_table` (
  `id` bigint(15) NOT NULL,
  `News` varchar(255) NOT NULL,
  `School ID` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quality_dimensions`
--

CREATE TABLE `quality_dimensions` (
  `id` int(5) NOT NULL,
  `DID` varchar(50) NOT NULL,
  `Dimension` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quality_dimensions`
--

INSERT INTO `quality_dimensions` (`id`, `DID`, `Dimension`, `time`) VALUES
(1, '1', 'Infrastructure', ''),
(2, '2', 'academic Progress', '');

-- --------------------------------------------------------

--
-- Table structure for table `quality_indicators`
--

CREATE TABLE `quality_indicators` (
  `QID` int(8) NOT NULL,
  `Indicator` varchar(255) NOT NULL,
  `DID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quality_indicators`
--

INSERT INTO `quality_indicators` (`QID`, `Indicator`, `DID`) VALUES
(1, 'Classrooms', '1'),
(2, 'Ground facility', '1');

-- --------------------------------------------------------

--
-- Table structure for table `quality_results`
--

CREATE TABLE `quality_results` (
  `id` bigint(12) NOT NULL,
  `DID` varchar(255) NOT NULL,
  `Dimension` varchar(255) NOT NULL,
  `QID` varchar(255) NOT NULL,
  `Indicator` varchar(255) NOT NULL,
  `School ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quality_results`
--

INSERT INTO `quality_results` (`id`, `DID`, `Dimension`, `QID`, `Indicator`, `School ID`) VALUES
(1, '1', 'Infrastructure', '1', 'Classrooms', '4');

-- --------------------------------------------------------

--
-- Table structure for table `rte_announcements`
--

CREATE TABLE `rte_announcements` (
  `id` int(5) NOT NULL,
  `Announcements` text NOT NULL,
  `Added By` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rte_announcements`
--

INSERT INTO `rte_announcements` (`id`, `Announcements`, `Added By`, `time`) VALUES
(5, 'announcements....', '1', '2017-04-01 12:33:02'),
(6, 'Announcement added by announcements..', '', '2017-04-01 12:39:37'),
(7, 'Announcement_added by nitin', '', '2017-04-01 12:43:09'),
(8, 'announcement by nitin', '', '2017-04-01 12:46:05'),
(9, 'hghghjgjh', '21', '2017-04-01 12:53:06'),
(10, 'new announcement at 14:42', '21', '2017-04-01 14:42:41'),
(11, 'SIH hackathon is going well..', '21', '2017-04-01 17:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `rte_images`
--

CREATE TABLE `rte_images` (
  `id` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Added By` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rte_images`
--

INSERT INTO `rte_images` (`id`, `image`, `Added By`, `time`) VALUES
(1, '84balbhartischool.png', '21', '2017-04-01 17:38:42'),
(2, '61big_23_237.jpg', '21', '2017-04-01 17:39:39'),
(3, '272115school.jpg', '21', '2017-04-01 18:11:34'),
(4, '67vidhyabharti.jpg', '21', '2017-04-01 18:11:57'),
(6, '13balbhartischool.png', '21', '2017-04-01 18:12:11'),
(8, '782115school.jpg', '21', '2017-04-01 18:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `rte_officials`
--

CREATE TABLE `rte_officials` (
  `Sr No` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `position` varchar(25) NOT NULL,
  `Member ID` bigint(11) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `Random UID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rte_officials`
--

INSERT INTO `rte_officials` (`Sr No`, `name`, `mobile`, `position`, `Member ID`, `Username`, `password`, `Random UID`) VALUES
(1, 'Nitin Singh', 1020304050, 'district level officer', 21, 'nitin', 'nitin', 123456),
(2, 'kamal ', 8888888888, 'staff', 22, 'kamal', 'kamal', 123456),
(3, 'richa', 5555555555, 'teacher', 23, 'richa', 'richa', 333333);

-- --------------------------------------------------------

--
-- Table structure for table `school_attendance`
--

CREATE TABLE `school_attendance` (
  `id` bigint(15) NOT NULL,
  `School ID` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Boys Present` varchar(255) NOT NULL,
  `Boys Total` varchar(255) NOT NULL,
  `Girls Present` varchar(255) NOT NULL,
  `Girls Total` varchar(255) NOT NULL,
  `Staff Present` varchar(255) NOT NULL,
  `Staff Total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_list`
--

CREATE TABLE `school_list` (
  `id` int(10) NOT NULL,
  `School` varchar(50) NOT NULL,
  `School ID` varchar(15) NOT NULL,
  `District` varchar(25) NOT NULL,
  `District ID` varchar(255) NOT NULL,
  `State` varchar(25) NOT NULL,
  `State ID` int(11) NOT NULL,
  `About` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `Added By` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_list`
--

INSERT INTO `school_list` (`id`, `School`, `School ID`, `District`, `District ID`, `State`, `State ID`, `About`, `image`, `Added By`, `time`) VALUES
(1, 'Anantapur public school', '1', 'Anantapur', '01', 'Andhra Pradesh', 1, 'best school', '', '', ''),
(2, 'jhjhj', '2', 'Chittoor', '02', 'Andhra Pradesh', 1, 'jhkjhk', '', '21', '2017-04-01 14:53:48'),
(3, 'YSR school', '3', 'Anantapur', '01', 'Andhra Pradesh', 1, 'about YSR school', '', '21', '2017-04-01 14:58:34'),
(4, 'sawan school', '4', 'Anantapur', '01', 'Andhra Pradesh', 1, 'About school of \r\nsawan school ', '13572115school.jpg', '21', '2017-04-01 15:07:11'),
(6, 'anjaw public school', '5', 'anjaw', '06', 'Arunachal Pradesh', 2, 'Description of anjaw public school', '1362anjaw.jpg', '21', '2017-04-02 09:15:56'),
(7, 'Krishna public school govt.', '7', 'aara', '08', 'Bihar', 4, 'Description of this school krishna public school', '7012', '21', '2017-04-02 09:18:52');

-- --------------------------------------------------------

--
-- Table structure for table `sdp_table`
--

CREATE TABLE `sdp_table` (
  `id` bigint(15) NOT NULL,
  `Plans` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `How_done` varchar(255) NOT NULL,
  `Deadline` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Why_not_done` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `smc_member_data`
--

CREATE TABLE `smc_member_data` (
  `Sr No` int(8) NOT NULL,
  `name` varchar(25) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email ID` varchar(255) NOT NULL,
  `Aadhar No` varchar(255) NOT NULL,
  `position` varchar(25) NOT NULL,
  `school` varchar(50) NOT NULL,
  `School ID` varchar(255) NOT NULL,
  `district` varchar(25) NOT NULL,
  `District ID` varchar(255) NOT NULL,
  `state` varchar(25) NOT NULL,
  `State ID` varchar(255) NOT NULL,
  `Member ID` varchar(255) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `Profile pic` varchar(255) NOT NULL,
  `Qualification` varchar(255) NOT NULL,
  `certificate_image` varchar(255) NOT NULL,
  `Random UID` varchar(255) NOT NULL,
  `Added By` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smc_member_data`
--

INSERT INTO `smc_member_data` (`Sr No`, `name`, `mobile`, `email ID`, `Aadhar No`, `position`, `school`, `School ID`, `district`, `District ID`, `state`, `State ID`, `Member ID`, `Username`, `password`, `Profile pic`, `Qualification`, `certificate_image`, `Random UID`, `Added By`, `time`) VALUES
(40, 'Ramanujan', '9060305030', 'rama@gmail.com', '1234523674588956', 'maths teacher', 'sawan school', '4', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M4740', 'ramanujan', 'ramanujan', '', 'M Sc', '722', '125460', '21', '2017-04-02 04:56:45'),
(41, 'Ramanujan', '9060305030', 'rama@gmail.com', '1234523674588956', 'maths teacher', 'sawan school', '4', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M2841', '', '', '', 'M Sc', '1846', '849707', '21', '2017-04-02 05:00:04'),
(42, 'Ramanujan', '9060305030', 'rama@gmail.com', '1234523674588956', 'maths teacher', 'sawan school', '4', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M7542', '', '', '', 'M Sc', '5335', '863467', '21', '2017-04-02 05:04:18'),
(43, 'Ramanujan', '9060305030', 'rama@gmail.com', '1234523674588956', 'maths teacher', 'sawan school', '4', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M7143', '', '', '', 'M Sc', '9967', '284487', '21', '2017-04-02 05:05:50'),
(44, 'Anuj Dahiya', '80609030', 'anuj@gmail.com', '', 'Engineer', 'sawan school', '4', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M4944', '', '', '', '', '9631', '512948', '21', '2017-04-02 05:10:23'),
(45, 'hbcdbhjk', 'dchjbds', 'vhssb', '6541389321', 'cdbcwd', 'sawan school', '4', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M2245', '', '', '', 'MA', '859', '218103', '21', '2017-04-02 05:12:31'),
(46, 'Anuj Pal', '1111111111', 'anuj@gmail.com', '11111111111', 'Principal', 'Anantapur public school', '1', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M4946', '', '', '', 'enginner', '6644', '200772', '21', '2017-04-02 05:21:12'),
(47, 'Ramavtar sakhre', '348206498', 'ramavtar@gmail.com', '635346230579', 'Sectretary', 'sawan school', '4', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M4047', '', '', '', 'M Sc', '3374', '114666', '21', '2017-04-02 05:48:31'),
(48, 'Abcd', '1020304050', 'ab@gmail.com', '4586926282', 'xyz', 'sawan school', '4', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M6048', '', '', '', 'MA', '3555', '616275', '21', '2017-04-02 06:36:57'),
(49, 'Abcd', '1020304050', 'ab@gmail.com', '4586926282', 'xyz', 'YSR school', '3', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M1049', 'purush', 'purush', '', 'MA', '2283big_23_237.jpg', '996429', '21', '2017-04-02 06:39:01'),
(50, 'Sawan chourey', '7777777777', 'sawan@gmail.com', '77888888888', 'teacher', 'YSR school', '3', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M1850', 'mahendra', 'mahendra', '', 'B.tech', '6205', '491168', '21', '2017-04-02 09:04:23');

-- --------------------------------------------------------

--
-- Table structure for table `state_list`
--

CREATE TABLE `state_list` (
  `id` int(3) NOT NULL,
  `State ID` varchar(5) NOT NULL,
  `State` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_list`
--

INSERT INTO `state_list` (`id`, `State ID`, `State`) VALUES
(1, '01', 'Andhra Pradesh'),
(2, '02', 'Arunachal Pradesh'),
(3, '03', 'Assam'),
(4, '04', 'Bihar'),
(5, '05', 'Chhattisgarh');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion_table`
--

CREATE TABLE `suggestion_table` (
  `id` bigint(15) NOT NULL,
  `Suggestion` varchar(255) NOT NULL,
  `School ID` varchar(255) NOT NULL,
  `Given By` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `task_table`
--

CREATE TABLE `task_table` (
  `id` int(8) UNSIGNED NOT NULL,
  `Task` varchar(50) DEFAULT NULL,
  `Implementation` varchar(250) DEFAULT NULL,
  `School ID` varchar(255) NOT NULL,
  `Added By` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `Given_to` varchar(255) NOT NULL,
  `Deadline` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_table`
--

INSERT INTO `task_table` (`id`, `Task`, `Implementation`, `School ID`, `Added By`, `time`, `Given_to`, `Deadline`, `Status`, `image`) VALUES
(1, 'Recovery of class rooms', 'Recovery', '4', 'M2138', '2017-04-01 22:07:47', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial_table`
--

CREATE TABLE `tutorial_table` (
  `id` bigint(15) NOT NULL,
  `Topic` varchar(255) NOT NULL,
  `Material` varchar(255) NOT NULL,
  `Plan` varchar(255) NOT NULL,
  `School ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence_table`
--
ALTER TABLE `attendence_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district_table`
--
ALTER TABLE `district_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fund_table`
--
ALTER TABLE `fund_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grievance_table`
--
ALTER TABLE `grievance_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting_table`
--
ALTER TABLE `meeting_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mid_day_meal`
--
ALTER TABLE `mid_day_meal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_school_table`
--
ALTER TABLE `news_school_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quality_dimensions`
--
ALTER TABLE `quality_dimensions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quality_indicators`
--
ALTER TABLE `quality_indicators`
  ADD PRIMARY KEY (`QID`);

--
-- Indexes for table `quality_results`
--
ALTER TABLE `quality_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rte_announcements`
--
ALTER TABLE `rte_announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rte_images`
--
ALTER TABLE `rte_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rte_officials`
--
ALTER TABLE `rte_officials`
  ADD PRIMARY KEY (`Sr No`);

--
-- Indexes for table `school_list`
--
ALTER TABLE `school_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sdp_table`
--
ALTER TABLE `sdp_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smc_member_data`
--
ALTER TABLE `smc_member_data`
  ADD PRIMARY KEY (`Sr No`);

--
-- Indexes for table `state_list`
--
ALTER TABLE `state_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestion_table`
--
ALTER TABLE `suggestion_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_table`
--
ALTER TABLE `task_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorial_table`
--
ALTER TABLE `tutorial_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `attendence_table`
--
ALTER TABLE `attendence_table`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `district_table`
--
ALTER TABLE `district_table`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `fund_table`
--
ALTER TABLE `fund_table`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `grievance_table`
--
ALTER TABLE `grievance_table`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `meeting_table`
--
ALTER TABLE `meeting_table`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mid_day_meal`
--
ALTER TABLE `mid_day_meal`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news_school_table`
--
ALTER TABLE `news_school_table`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quality_dimensions`
--
ALTER TABLE `quality_dimensions`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `quality_indicators`
--
ALTER TABLE `quality_indicators`
  MODIFY `QID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `quality_results`
--
ALTER TABLE `quality_results`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rte_announcements`
--
ALTER TABLE `rte_announcements`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `rte_images`
--
ALTER TABLE `rte_images`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `rte_officials`
--
ALTER TABLE `rte_officials`
  MODIFY `Sr No` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `school_list`
--
ALTER TABLE `school_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sdp_table`
--
ALTER TABLE `sdp_table`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `smc_member_data`
--
ALTER TABLE `smc_member_data`
  MODIFY `Sr No` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `state_list`
--
ALTER TABLE `state_list`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `suggestion_table`
--
ALTER TABLE `suggestion_table`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `task_table`
--
ALTER TABLE `task_table`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tutorial_table`
--
ALTER TABLE `tutorial_table`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
