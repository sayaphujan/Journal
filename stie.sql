-- phpMyAdmin SQL Dump
-- version 2.9.1.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Sep 23, 2013 at 10:06 AM
-- Server version: 5.0.27
-- PHP Version: 5.2.0
-- 
-- Database: `stie`
-- 
CREATE DATABASE `stie` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `stie`;

-- --------------------------------------------------------

-- 
-- Table structure for table `anggota`
-- 

CREATE TABLE `anggota` (
  `user` varchar(10) collate latin1_general_ci NOT NULL,
  `pass` varchar(20) collate latin1_general_ci NOT NULL,
  `nama` varchar(30) collate latin1_general_ci NOT NULL,
  `TglLhr` date NOT NULL,
  `alamat` text collate latin1_general_ci NOT NULL,
  `email` varchar(20) collate latin1_general_ci NOT NULL,
  `status` varchar(20) collate latin1_general_ci NOT NULL,
  `level` int(1) NOT NULL,
  `aktivasi` enum('0','1') collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `anggota`
-- 

INSERT INTO `anggota` (`user`, `pass`, `nama`, `TglLhr`, `alamat`, `email`, `status`, `level`, `aktivasi`) VALUES ('admin', 'admin', 'web master', '2013-09-05', 'df', 'rain@gmail.com', 'lainnya', 4, '1');
INSERT INTO `anggota` (`user`, `pass`, `nama`, `TglLhr`, `alamat`, `email`, `status`, `level`, `aktivasi`) VALUES ('user', 'level1', 'user', '2006-01-28', 'pekalongan', 'pekalongan@gmail.com', 'lainnya', 1, '1');
INSERT INTO `anggota` (`user`, `pass`, `nama`, `TglLhr`, `alamat`, `email`, `status`, `level`, `aktivasi`) VALUES ('author', 'level2', 'author', '2006-01-07', 'pekalongan', 'a@gmail.com', 'mhsSTIEM', 2, '1');
INSERT INTO `anggota` (`user`, `pass`, `nama`, `TglLhr`, `alamat`, `email`, `status`, `level`, `aktivasi`) VALUES ('editor', 'level3', 'editor', '2006-01-05', 'skj', 'pekalongan@gmail.com', 'lainnya', 3, '1');

-- --------------------------------------------------------

-- 
-- Table structure for table `bukutamu`
-- 

CREATE TABLE `bukutamu` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(30) collate latin1_general_ci NOT NULL,
  `email` varchar(50) collate latin1_general_ci NOT NULL,
  `komentar` text collate latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=20 ;

-- 
-- Dumping data for table `bukutamu`
-- 

INSERT INTO `bukutamu` (`id`, `nama`, `email`, `komentar`, `tanggal`) VALUES (19, 's', 's', 's', '0000-00-00');

-- --------------------------------------------------------

-- 
-- Table structure for table `hasil`
-- 

CREATE TABLE `hasil` (
  `idHasil` int(11) NOT NULL auto_increment,
  `idJurnal` int(11) NOT NULL,
  `idTopik` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY  (`idHasil`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=45 ;

-- 
-- Dumping data for table `hasil`
-- 

INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (1, 24, 1, 1, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (2, 24, 2, 6, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (3, 24, 3, 11, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (4, 24, 4, 16, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (5, 24, 1, 2, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (6, 24, 2, 8, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (7, 24, 3, 14, 2);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (8, 24, 4, 20, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (9, 0, 1, 4, 2);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (10, 0, 2, 9, 2);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (11, 0, 3, 14, 2);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (12, 0, 4, 19, 2);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (13, 26, 1, 1, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (14, 26, 2, 6, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (15, 26, 3, 11, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (16, 26, 4, 16, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (17, 26, 1, 5, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (18, 26, 2, 10, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (19, 26, 3, 15, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (20, 26, 4, 20, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (21, 26, 1, 3, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (22, 26, 2, 8, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (23, 26, 3, 13, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (24, 26, 4, 18, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (25, 26, 1, 3, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (26, 26, 2, 8, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (27, 26, 3, 13, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (28, 26, 4, 18, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (29, 25, 1, 3, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (30, 25, 2, 8, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (31, 25, 3, 11, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (32, 25, 4, 16, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (33, 26, 1, 1, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (34, 26, 2, 6, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (35, 26, 3, 15, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (36, 26, 4, 20, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (37, 0, 1, 5, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (38, 0, 2, 10, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (39, 0, 3, 15, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (40, 0, 4, 20, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (41, 26, 1, 5, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (42, 26, 2, 10, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (43, 26, 3, 15, 1);
INSERT INTO `hasil` (`idHasil`, `idJurnal`, `idTopik`, `id`, `jumlah`) VALUES (44, 26, 4, 16, 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `jurnal`
-- 

CREATE TABLE `jurnal` (
  `idJurnal` int(11) NOT NULL auto_increment,
  `nama` text collate latin1_general_ci NOT NULL,
  `judul` text collate latin1_general_ci NOT NULL,
  `abstrak` longtext collate latin1_general_ci NOT NULL,
  `keyword` varchar(100) collate latin1_general_ci NOT NULL,
  `kategori` varchar(25) collate latin1_general_ci NOT NULL,
  `issue` varchar(30) collate latin1_general_ci NOT NULL,
  `author` varchar(25) collate latin1_general_ci NOT NULL,
  `mainname` varchar(100) collate latin1_general_ci NOT NULL,
  `maintype` varchar(30) collate latin1_general_ci NOT NULL,
  `mainsize` int(11) NOT NULL,
  `maincontent` longblob NOT NULL,
  `supname` varchar(100) collate latin1_general_ci NOT NULL,
  `suptype` varchar(30) collate latin1_general_ci NOT NULL,
  `supsize` varchar(11) collate latin1_general_ci NOT NULL,
  `supcontent` longblob NOT NULL,
  `publikasi` enum('0','1') collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`idJurnal`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=33 ;

-- 
-- Dumping data for table `jurnal`
-- 

INSERT INTO `jurnal` (`idJurnal`, `nama`, `judul`, `abstrak`, `keyword`, `kategori`, `issue`, `author`, `mainname`, `maintype`, `mainsize`, `maincontent`, `supname`, `suptype`, `supsize`, `supcontent`, `publikasi`) VALUES (26, '(DJAUHAR EDI PURNOMO, SE., MSi.)', 'PENGARUH RASIO CAMEL TERHADAP PERTUMBUHAN LABA (Studi pada Bank GO Publik yang Terdaftar di BEI Periode 2007 – 2010)', 'This research aims to examine the influence of CAMEL ratios with earnings growth. Ratios that was applied in this research are : CAR, NPL, NPM, BO/PO and LDR.\r\nThe population in this research are all of banking firsm listed in Indonesian stock Exchange 2007 – 2010. Total sample in this research are 23 banking firms that selected with purposive sampling. Independent variable in this research are : CAR (Capital Adequacy Ratio), NPL (Non Performing Loan), NPM (Net Profit Margin), BO/PO (Operational Expenses to Operational Revenue), LDR (Loan to Deposit Ratio). Dependent variable in this research is earning growth. Data analyzed with classic assumption test and hypothetical testing with multiple regression models.\r\nThe results of this research indicates that NPM and LDR variable had positive influence to earning growth. BO/PO variable had negative influence to earning growth. CAR and NPL variable had not influence to earning growth.\r\n', 'CAMEL Ratios, earning growth.', 'lainnya', 'jun 2012', 'web master', 'Djauhar.docx', 'application/vnd.openxmlformats', 77641, '', '', '', '0', '', '1');
INSERT INTO `jurnal` (`idJurnal`, `nama`, `judul`, `abstrak`, `keyword`, `kategori`, `issue`, `author`, `mainname`, `maintype`, `mainsize`, `maincontent`, `supname`, `suptype`, `supsize`, `supcontent`, `publikasi`) VALUES (25, 'Murtini, SE, Msi, Ak', 'FAKTOR-FAKTOR YANG MEMPENGARUHI  TINGKAT  PROFITABILITAS EKUITAS  (Studi pada UKM di Kota Pekalongan)', '           The purpose of this study was to obtain empirical evidence about the effect of profit margin, total asset turnover and equity multiplier effect on profitability of equity. The research was conducted on SMEs Pekalongan. The variables used include the dependent variable is financial performance of equity proxied by profitability, and independent veriabel which include profit margin, total asset turnover and equity multiplier.\r\nThe method of analysis used in this study is multiple regression analysis, beginning with the classic test assumptions include normality test, test and test multikolenieritas heteroscedasticity. The following results are the first results of hypothesis testing can be seen that the variable PM produces t value of 2.944 with a significance value of 0.016 which is significant value less than 0.05 (5 percent). This means that H1 is accepted. As for the second hypothesis examines generate t count each of 1.758 with a significance value of 0.113 is greater than 5%, this means that H2 is rejected. Similarly for the third hypothesis testing bring out t count 0.887 with a significance level of 0.398 is greater than 5%, this means that H3 is rejected. Testing Results simultaneously generate F value of 3.124 and significance value of 0.08. Due to the significant value of less than 0.10 (&#945; = 10 percent), it can be concluded that H0 is rejected and Ha accepted.\r\nThe Adjusted R-square value of 0374 or 37.4%. This means that 37.4 percent of the variation in profitability of equity that can be explained by the variation of the three independent variables, namely profit margin, total asset  turnover dan equity multiplier.', 'profitabilitas ekuitas, profit margin, total asset  turnover dan equity multiplier', 'lainnya', 'jun 2012', 'web master', 'murtini.docx', 'application/vnd.openxmlformats', 152576, '', '', '', '0', '', '1');
INSERT INTO `jurnal` (`idJurnal`, `nama`, `judul`, `abstrak`, `keyword`, `kategori`, `issue`, `author`, `mainname`, `maintype`, `mainsize`, `maincontent`, `supname`, `suptype`, `supsize`, `supcontent`, `publikasi`) VALUES (27, 'M. Shofiyuddin Retnowati', 'ANALISIS PENGARUH PERIKLANAN DAN ATRIBUT PRODUK TERHADAP KEPUTUSAN MEMBELI PRODUK SARIMI INSTAN  STUDI KASUS DI KOTA PEKALONGAN', 'This research entiled “The Influence of Analysis Advertising and Product Attribute toward Purchasing Decisions Sarimi  Instan Product on Pekalongan City. The aim of this research is to know and to analyze the influence of availability advertising and product attribute sarimi instan product toward purchasing decisions either partially and simultanously. The data which be used are the primer (using questionary) and secondary data, based on accindental sampling method and purposive sampling Method.  This research used validity test and reability test, then analyze using multiple regression tehnique to test the hypothesis with F test and t test. The result of the research showed that availability is significant influence variable advertising and product attribute sarimi instan product toward purchasing decisions either partially or simultanously, while the purchasing decisions the product sarimi instan can be explained by variable advertising and product attribute is 99 %.', 'advertising, product attribute, purchasing decisions. ', 'lainnya', 'jun 2012', 'author', 'Retno.doc', 'application/msword', 167936, '', '', '', '0', '', '1');

-- --------------------------------------------------------

-- 
-- Table structure for table `komentar`
-- 

CREATE TABLE `komentar` (
  `idComment` int(11) NOT NULL auto_increment,
  `idJurnal` int(11) NOT NULL,
  `commentator` varchar(30) collate latin1_general_ci NOT NULL,
  `urlComment` varchar(30) collate latin1_general_ci NOT NULL,
  `comment` text collate latin1_general_ci NOT NULL,
  `commentDate` date NOT NULL,
  PRIMARY KEY  (`idComment`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=48 ;

-- 
-- Dumping data for table `komentar`
-- 

INSERT INTO `komentar` (`idComment`, `idJurnal`, `commentator`, `urlComment`, `comment`, `commentDate`) VALUES (44, 24, 'web master', 'feather.com', 'komentar lagi\r\ntes br <br>', '2013-09-09');
INSERT INTO `komentar` (`idComment`, `idJurnal`, `commentator`, `urlComment`, `comment`, `commentDate`) VALUES (43, 24, 'web master', 'feather.com', 'bismillah', '2013-09-09');
INSERT INTO `komentar` (`idComment`, `idJurnal`, `commentator`, `urlComment`, `comment`, `commentDate`) VALUES (42, 23, 'web master', '', 'tes', '2013-09-08');
INSERT INTO `komentar` (`idComment`, `idJurnal`, `commentator`, `urlComment`, `comment`, `commentDate`) VALUES (41, 6, 'admin', '', 'yes', '2013-09-06');
INSERT INTO `komentar` (`idComment`, `idJurnal`, `commentator`, `urlComment`, `comment`, `commentDate`) VALUES (40, 7, 'shien', '', 'ngetes y :D', '2013-09-06');
INSERT INTO `komentar` (`idComment`, `idJurnal`, `commentator`, `urlComment`, `comment`, `commentDate`) VALUES (35, 2, 'shien', '', 'tes ', '2013-09-05');
INSERT INTO `komentar` (`idComment`, `idJurnal`, `commentator`, `urlComment`, `comment`, `commentDate`) VALUES (39, 7, 'visitor', '', 'asjdhakjs', '2013-09-06');
INSERT INTO `komentar` (`idComment`, `idJurnal`, `commentator`, `urlComment`, `comment`, `commentDate`) VALUES (38, 2, 'habibie', '', '3', '2013-09-06');
INSERT INTO `komentar` (`idComment`, `idJurnal`, `commentator`, `urlComment`, `comment`, `commentDate`) VALUES (36, 2, 'shien', '', '1', '2013-09-05');
INSERT INTO `komentar` (`idComment`, `idJurnal`, `commentator`, `urlComment`, `comment`, `commentDate`) VALUES (37, 2, 'shien', '', '2', '2013-09-05');
INSERT INTO `komentar` (`idComment`, `idJurnal`, `commentator`, `urlComment`, `comment`, `commentDate`) VALUES (45, 26, 'web master', 'rain.com', 'tes komentar', '2013-09-23');
INSERT INTO `komentar` (`idComment`, `idJurnal`, `commentator`, `urlComment`, `comment`, `commentDate`) VALUES (46, 26, 'web master', 'rain.com', 'komentar', '2013-09-23');
INSERT INTO `komentar` (`idComment`, `idJurnal`, `commentator`, `urlComment`, `comment`, `commentDate`) VALUES (47, 26, 'web master', 'rain.com', 'coba komentar', '2013-09-23');

-- --------------------------------------------------------

-- 
-- Table structure for table `menu`
-- 

CREATE TABLE `menu` (
  `id` int(11) NOT NULL auto_increment,
  `menu` varchar(20) collate latin1_general_ci NOT NULL,
  `Status` enum('1','0') collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `menu`
-- 

INSERT INTO `menu` (`id`, `menu`, `Status`) VALUES (1, 'Jurnal', '1');
INSERT INTO `menu` (`id`, `menu`, `Status`) VALUES (2, 'Buku Tamu', '1');
INSERT INTO `menu` (`id`, `menu`, `Status`) VALUES (3, 'User', '1');
INSERT INTO `menu` (`id`, `menu`, `Status`) VALUES (4, 'Password', '1');
INSERT INTO `menu` (`id`, `menu`, `Status`) VALUES (5, 'Akun', '1');

-- --------------------------------------------------------

-- 
-- Table structure for table `polling`
-- 

CREATE TABLE `polling` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) collate latin1_general_ci NOT NULL,
  `idTopik` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `polling`
-- 

INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (1, '11', 1, 1);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (2, '21', 1, 0);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (3, '31', 1, 0);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (4, '41', 1, 0);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (5, '51', 1, 1);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (6, '11', 2, 1);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (7, '21', 2, 0);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (8, '31', 2, 0);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (9, '41', 2, 0);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (10, '51', 2, 1);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (11, '13', 3, 1);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (12, '23', 3, 0);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (13, '33', 3, 0);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (14, '34', 3, 0);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (15, '53', 3, 1);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (16, '14', 4, 1);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (17, '24', 4, 0);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (18, '34', 4, 0);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (19, '44', 4, 0);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (20, '54', 4, 1);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (21, '', 0, 0);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (22, '', 0, 0);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (23, '', 0, 0);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (24, '', 0, 0);
INSERT INTO `polling` (`id`, `kategori`, `idTopik`, `jumlah`) VALUES (25, '', 0, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `topik`
-- 

CREATE TABLE `topik` (
  `idTopik` int(11) NOT NULL,
  `topik` varchar(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`idTopik`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `topik`
-- 

INSERT INTO `topik` (`idTopik`, `topik`) VALUES (1, 'topik1');
INSERT INTO `topik` (`idTopik`, `topik`) VALUES (2, 'topik2');
INSERT INTO `topik` (`idTopik`, `topik`) VALUES (3, 'topik3');
INSERT INTO `topik` (`idTopik`, `topik`) VALUES (4, 'topik4');
INSERT INTO `topik` (`idTopik`, `topik`) VALUES (5, 'topik5');
INSERT INTO `topik` (`idTopik`, `topik`) VALUES (0, '');
