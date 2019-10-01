-- phpMyAdmin SQL Dump
-- version 4.4.2
-- http://www.phpmyadmin.net
--
-- Client :  servinfo-db
-- Généré le :  Ven 17 Avril 2015 à 10:57
-- Version du serveur :  5.5.41-MariaDB-1ubuntu0.14.04.1
-- Version de PHP :  5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `dbgerard`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteurs`
--

DROP TABLE IF EXISTS `acteurs`;
CREATE TABLE IF NOT EXISTS `acteurs` (
  `ref_code_film` int(11) DEFAULT NULL,
  `ref_code_acteur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `acteurs`
--

INSERT INTO `acteurs` (`ref_code_film`, `ref_code_acteur`) VALUES
(1, 29),
(1, 31),
(2, 32),
(2, 33),
(3, 34),
(3, 35),
(4, 36),
(4, 37),
(4, 38),
(5, 39),
(6, 12),
(7, 40),
(7, 41),
(7, 42),
(7, 43),
(8, 14),
(10, 44),
(10, 45),
(11, 46),
(11, 47),
(11, 48),
(12, 31),
(12, 49),
(12, 50),
(13, 51),
(13, 52),
(13, 53),
(14, 54),
(14, 55),
(14, 56),
(14, 41),
(14, 57),
(14, 58),
(14, 45),
(15, 60),
(15, 59),
(16, 61),
(16, 41),
(16, 62),
(16, 63),
(16, 64),
(17, 65),
(17, 66),
(17, 67),
(18, 68),
(18, 69),
(18, 70),
(19, 63),
(19, 71),
(20, 72),
(21, 73),
(21, 74),
(6, 77),
(19, 78),
(19, 76),
(12, 75),
(20, 79),
(25, 12),
(26, 82),
(26, 83),
(26, 84),
(29, 92),
(30, 86),
(30, 87),
(30, 88),
(35, 102),
(35, 75),
(36, 29),
(36, 101),
(33, 94),
(33, 95),
(33, 96),
(34, 98),
(34, 97),
(34, 96),
(37, 104),
(37, 106),
(37, 105),
(37, 35),
(38, 107),
(38, 108),
(39, 109),
(39, 111),
(41, 113),
(41, 101),
(40, 114),
(40, 115),
(40, 31),
(42, 116),
(42, 108),
(44, 118),
(44, 120),
(44, 119),
(46, 124),
(46, 122),
(46, 123),
(47, 54),
(45, 14),
(48, 126),
(48, 125),
(49, 127),
(49, 96),
(49, 95),
(50, 128),
(50, 98),
(50, 95),
(50, 129),
(33, 129),
(51, 98),
(16, 133),
(52, 133),
(52, 63),
(52, 131),
(52, 130),
(52, 134),
(54, 138),
(54, 136),
(54, 137),
(56, 139),
(56, 140),
(57, 142),
(57, 141),
(58, 130),
(58, 143),
(58, 144),
(58, 145),
(58, 146),
(58, 147),
(58, 148),
(59, 12),
(59, 149),
(59, 150),
(60, 152),
(60, 151),
(60, 153),
(61, 144),
(61, 154),
(61, 146),
(61, 155),
(61, 156),
(63, 158),
(63, 36),
(63, 159),
(64, 162),
(64, 161),
(65, 164),
(65, 163),
(66, 163),
(66, 165),
(68, 167),
(68, 159),
(68, 166),
(69, 170),
(69, 171),
(69, 169),
(70, 175),
(70, 176),
(70, 174),
(71, 178),
(73, 183),
(73, 181),
(73, 182),
(74, 185),
(74, 186),
(75, 189),
(75, 188),
(75, 190),
(78, 119),
(78, 197),
(78, 196),
(78, 195),
(77, 63),
(77, 192),
(79, 201),
(79, 200),
(79, 199),
(79, 202),
(80, 109),
(80, 97),
(84, 207),
(85, 206),
(83, 208),
(83, 209),
(87, 211),
(87, 163),
(86, 210),
(88, 214),
(88, 31),
(89, 215),
(89, 217),
(89, 218),
(90, 135),
(93, 58),
(93, 221),
(94, 223),
(94, 225),
(94, 224),
(95, 227),
(96, 169),
(96, 171),
(97, 214),
(99, 58),
(99, 230),
(98, 232),
(98, 231),
(100, 33),
(100, 49),
(102, 12),
(101, 234),
(103, 236),
(104, 107),
(104, 237),
(105, 14),
(102, 77),
(106, 239),
(106, 238),
(106, 116),
(106, 193),
(107, 139),
(107, 241),
(107, 153),
(107, 240),
(39, 240),
(111, 94),
(111, 167),
(112, 246),
(112, 247),
(112, 248),
(113, 249),
(113, 250),
(114, 253),
(114, 254),
(115, 139),
(115, 153),
(116, 139),
(116, 153),
(116, 255),
(116, 97),
(116, 218),
(116, 257),
(116, 256),
(117, 149),
(117, 259),
(117, 260),
(117, 258),
(117, 139),
(40, 259),
(118, 151),
(118, 153),
(118, 140),
(118, 218),
(118, 152),
(117, 153),
(119, 101),
(119, 94),
(119, 263),
(119, 262),
(48, 262),
(120, 264),
(120, 265),
(121, 266),
(121, 83),
(87, 266),
(122, 268),
(122, 269),
(124, 159),
(127, 250),
(129, 273),
(129, 92),
(130, 275),
(130, 276),
(130, 277),
(130, 278),
(131, 161),
(131, 197),
(131, 270),
(132, 268),
(132, 46),
(132, 279),
(132, 262),
(132, 280),
(48, 280),
(133, 46),
(133, 126),
(133, 281),
(133, 280),
(134, 283),
(134, 284),
(135, 286),
(135, 287),
(135, 288),
(136, 289),
(30, 289),
(137, 292),
(137, 290),
(35, 295),
(138, 295),
(139, 295),
(139, 294),
(140, 297),
(140, 298),
(140, 299),
(140, 300),
(140, 301),
(141, 56),
(141, 304),
(141, 266),
(141, 303),
(141, 305),
(141, 281),
(141, 62),
(141, 302),
(142, 306),
(142, 308),
(142, 309),
(143, 310),
(143, 171),
(144, 312),
(144, 82),
(144, 311),
(144, 62),
(145, 317),
(145, 316),
(145, 315),
(146, 61),
(146, 318),
(147, 320),
(147, 321),
(148, 322),
(112, 322),
(150, 94),
(151, 193),
(152, 324),
(153, 326),
(153, 325),
(153, 246),
(153, 97),
(153, 327),
(154, 48),
(154, 304),
(154, 328),
(154, 329),
(72, 330),
(147, 330),
(72, 331),
(155, 333),
(156, 297),
(156, 298),
(156, 299),
(156, 330),
(158, 102),
(158, 337),
(159, 338),
(91, 338),
(160, 279),
(162, 340),
(162, 232),
(162, 259),
(162, 339),
(164, 342),
(166, 344),
(166, 345),
(166, 343),
(167, 347),
(167, 346),
(90, 342),
(169, 163),
(171, 94),
(171, 114),
(119, 350),
(171, 350),
(172, 352),
(172, 351),
(174, 354),
(134, 356),
(176, 356),
(176, 357),
(177, 359),
(177, 360),
(178, 362),
(178, 363),
(179, 365),
(179, 366),
(179, 364),
(180, 367),
(181, 370),
(181, 369),
(182, 372),
(182, 238),
(182, 139),
(182, 375),
(182, 371),
(182, 107),
(182, 374),
(182, 49),
(182, 171),
(182, 373),
(183, 378),
(183, 377),
(183, 379),
(184, 381),
(184, 383),
(184, 382),
(185, 306),
(185, 385),
(185, 386),
(186, 329),
(186, 315),
(186, 387),
(187, 388),
(187, 262),
(187, 46),
(188, 391),
(188, 57),
(188, 309),
(188, 73),
(189, 393),
(189, 306),
(189, 392),
(190, 394),
(191, 396),
(192, 312),
(192, 398),
(192, 136),
(192, 399),
(193, 400),
(194, 36),
(195, 403),
(195, 345),
(195, 163),
(195, 402),
(196, 404),
(196, 57),
(197, 96),
(197, 97),
(197, 127),
(198, 406),
(198, 407),
(198, 408),
(198, 409),
(199, 398),
(199, 410),
(200, 398),
(200, 209),
(198, 413),
(198, 412),
(201, 414),
(201, 416),
(201, 159),
(201, 415),
(202, 417),
(202, 418),
(202, 419),
(202, 402),
(203, 421),
(203, 420),
(204, 423),
(205, 122),
(205, 424),
(205, 425),
(204, 312),
(206, 428),
(206, 432),
(206, 431),
(206, 429),
(206, 435),
(206, 433),
(206, 434),
(207, 437),
(207, 436),
(208, 406),
(208, 438),
(208, 407),
(208, 33),
(208, 140),
(208, 439),
(209, 439),
(209, 407),
(209, 140),
(209, 161),
(209, 440),
(208, 440),
(210, 439),
(210, 140),
(210, 441),
(210, 415),
(210, 442),
(169, 446),
(211, 169),
(211, 443),
(211, 445),
(211, 446),
(211, 295),
(212, 448),
(213, 101),
(213, 320),
(214, 312),
(214, 450),
(214, 452),
(214, 451),
(215, 453),
(215, 454),
(216, 457),
(216, 414),
(216, 455),
(216, 456),
(217, 460),
(217, 459),
(218, 462),
(219, 350),
(219, 463),
(178, 463),
(220, 99),
(220, 443),
(220, 464),
(220, 254),
(220, 170),
(221, 139),
(222, 396),
(222, 465),
(191, 465),
(223, 465),
(223, 396),
(223, 466),
(222, 468),
(223, 468),
(223, 467),
(222, 467),
(222, 469),
(223, 469),
(223, 470),
(222, 470),
(191, 472),
(223, 471),
(224, 474),
(224, 288),
(224, 473),
(225, 478),
(225, 479),
(225, 480),
(225, 477),
(226, 114),
(226, 320),
(227, 481),
(228, 482),
(228, 101),
(228, 483),
(228, 263),
(119, 483),
(229, 263),
(230, 485),
(230, 310),
(231, 406),
(231, 115),
(231, 487),
(232, 488),
(232, 36),
(232, 489),
(232, 195),
(232, 70),
(232, 490),
(232, 352),
(232, 492),
(233, 168),
(68, 168),
(233, 459),
(233, 421),
(233, 495),
(234, 497),
(234, 498),
(235, 500),
(236, 502),
(236, 501),
(236, 209),
(239, 64),
(239, 505),
(240, 490),
(240, 506),
(241, 167),
(242, 175),
(242, 509),
(242, 302),
(164, 509),
(245, 511),
(245, 510),
(246, 515),
(246, 513),
(246, 489),
(246, 514),
(247, 517),
(247, 518),
(247, 276),
(246, 224),
(248, 279),
(249, 481),
(249, 337),
(249, 99),
(249, 519),
(249, 520),
(249, 158),
(250, 107),
(250, 41),
(250, 62),
(251, 522),
(218, 522),
(251, 462),
(251, 521),
(252, 523),
(252, 306),
(252, 133),
(253, 525),
(254, 527),
(54, 527),
(255, 530),
(255, 529),
(255, 116),
(255, 528),
(256, 46),
(256, 328),
(256, 532),
(256, 531),
(257, 56),
(257, 31),
(258, 365),
(259, 114),
(259, 231),
(259, 534),
(260, 214),
(260, 535),
(260, 536),
(260, 482),
(261, 408),
(261, 538),
(261, 537),
(263, 541),
(262, 541),
(262, 531),
(132, 541),
(151, 541),
(52, 541),
(265, 116),
(265, 530),
(262, 542),
(132, 542),
(266, 64),
(266, 387),
(266, 387),
(266, 543),
(266, 544),
(267, 64),
(267, 209),
(270, 549),
(270, 548),
(211, 549),
(228, 549),
(270, 551),
(271, 552),
(271, 279),
(271, 493),
(271, 375),
(270, 262),
(271, 150),
(272, 171),
(272, 436),
(273, 531),
(274, 531),
(275, 215),
(275, 259),
(276, 46),
(276, 553),
(121, 553),
(133, 554),
(276, 280),
(276, 554),
(277, 556),
(277, 558),
(277, 557),
(278, 255),
(278, 560),
(278, 412),
(278, 59),
(279, 412),
(279, 255),
(279, 560),
(280, 412),
(280, 255),
(280, 560),
(281, 101),
(281, 113),
(281, 262),
(281, 483),
(281, 563),
(202, 563),
(125, 563),
(282, 459),
(282, 344),
(282, 171),
(282, 249),
(282, 564),
(241, 564),
(272, 564),
(283, 116),
(285, 49),
(286, 73),
(287, 73),
(287, 566),
(286, 566),
(286, 567),
(287, 567),
(287, 569),
(286, 569),
(286, 568),
(287, 568),
(288, 416),
(288, 339),
(288, 75),
(289, 159),
(289, 262),
(289, 572),
(289, 573),
(220, 572),
(290, 574),
(290, 575),
(15, 575),
(290, 167),
(292, 576),
(292, 577),
(292, 578),
(30, 576),
(296, 12),
(295, 12),
(298, 580),
(301, 582),
(302, 583),
(303, 281),
(306, 587),
(306, 586),
(306, 141),
(307, 589),
(307, 588),
(308, 450),
(309, 29),
(309, 459),
(309, 373),
(309, 590),
(249, 590),
(310, 423),
(311, 276),
(311, 592),
(317, 39),
(317, 595),
(316, 72),
(316, 163),
(315, 594),
(315, 210),
(18, 595),
(318, 119),
(318, 256),
(318, 52),
(319, 165),
(319, 596),
(320, 371),
(320, 598),
(320, 597),
(322, 599),
(323, 543),
(324, 192),
(324, 209),
(325, 273),
(325, 602),
(325, 603),
(326, 603),
(326, 92),
(326, 605),
(326, 606),
(326, 604),
(167, 604),
(29, 606),
(327, 394),
(328, 608),
(328, 370),
(329, 120),
(329, 497),
(329, 363),
(330, 46),
(330, 78),
(330, 610),
(331, 406),
(331, 116),
(331, 611),
(332, 82),
(332, 613),
(333, 615),
(333, 614),
(333, 148),
(334, 616),
(334, 136),
(335, 617),
(335, 339),
(335, 618),
(335, 619),
(2, 619),
(282, 619),
(336, 239),
(336, 230),
(336, 620),
(336, 621),
(337, 614),
(337, 622),
(338, 459),
(338, 625),
(340, 328),
(340, 566),
(340, 170),
(341, 630),
(341, 628),
(341, 629),
(342, 632),
(342, 631),
(343, 260),
(344, 406),
(344, 487),
(345, 634),
(345, 635),
(346, 398),
(345, 563),
(348, 523),
(348, 315),
(349, 127),
(349, 96),
(349, 128),
(349, 97),
(349, 638),
(351, 142),
(352, 437),
(352, 62),
(352, 302),
(353, 175),
(353, 302),
(354, 161),
(354, 283),
(355, 639),
(355, 302),
(355, 610),
(356, 302),
(356, 640),
(210, 640),
(320, 640),
(357, 54),
(357, 315),
(357, 57),
(357, 528),
(110, 641),
(358, 641),
(359, 459),
(359, 616),
(359, 640),
(360, 12),
(361, 644),
(361, 645),
(362, 12),
(363, 249),
(364, 625),
(364, 373),
(528, 856),
(528, 580),
(367, 647),
(369, 647),
(368, 647),
(371, 175),
(371, 46),
(371, 650),
(284, 651),
(373, 651),
(374, 651),
(375, 652),
(376, 602),
(376, 605),
(377, 101),
(377, 445),
(377, 263),
(321, 654),
(377, 654),
(377, 655),
(378, 142),
(378, 136),
(379, 634),
(379, 249),
(380, 249),
(380, 114),
(380, 656),
(187, 657),
(381, 657),
(381, 531),
(382, 253),
(382, 519),
(382, 167),
(383, 94),
(383, 443),
(384, 658),
(384, 660),
(385, 250),
(386, 450),
(386, 99),
(386, 588),
(386, 548),
(387, 661),
(387, 260),
(387, 371),
(389, 645),
(389, 663),
(391, 650),
(391, 610),
(391, 665),
(392, 580),
(392, 666),
(298, 666),
(299, 666),
(393, 381),
(393, 668),
(394, 58),
(394, 330),
(394, 596),
(395, 669),
(215, 669),
(386, 669),
(395, 167),
(395, 670),
(359, 670),
(396, 671),
(396, 673),
(397, 671),
(397, 674),
(397, 675),
(398, 150),
(399, 150),
(400, 175),
(400, 610),
(400, 309),
(400, 386),
(400, 679),
(400, 679),
(401, 680),
(401, 393),
(401, 386),
(401, 610),
(382, 683),
(403, 683),
(403, 681),
(89, 681),
(233, 681),
(233, 683),
(403, 682),
(403, 548),
(404, 684),
(405, 114),
(405, 685),
(406, 231),
(406, 686),
(407, 687),
(407, 421),
(408, 400),
(408, 689),
(409, 101),
(409, 166),
(409, 455),
(410, 101),
(410, 400),
(410, 685),
(410, 692),
(63, 692),
(157, 692),
(411, 101),
(411, 400),
(412, 400),
(412, 694),
(413, 695),
(414, 697),
(414, 696),
(415, 143),
(415, 130),
(416, 130),
(416, 143),
(417, 130),
(417, 143),
(417, 192),
(417, 398),
(417, 190),
(417, 145),
(418, 175),
(418, 505),
(418, 698),
(419, 161),
(419, 699),
(420, 701),
(168, 701),
(168, 702),
(84, 702),
(421, 703),
(422, 87),
(423, 704),
(423, 706),
(423, 707),
(423, 537),
(423, 705),
(423, 708),
(424, 711),
(424, 710),
(424, 712),
(425, 133),
(425, 78),
(425, 714),
(425, 713),
(426, 412),
(426, 715),
(427, 716),
(427, 412),
(428, 594),
(428, 412),
(430, 340),
(430, 29),
(430, 374),
(430, 50),
(431, 256),
(431, 719),
(431, 720),
(432, 721),
(434, 460),
(434, 725),
(434, 724),
(435, 169),
(435, 459),
(435, 421),
(436, 116),
(437, 436),
(438, 726),
(439, 668),
(439, 727),
(82, 728),
(439, 728),
(82, 729),
(440, 728),
(440, 729),
(441, 731),
(441, 730),
(292, 731),
(442, 230),
(442, 254),
(442, 732),
(443, 420),
(443, 339),
(443, 733),
(444, 706),
(444, 362),
(444, 258),
(444, 119),
(444, 197),
(444, 196),
(444, 735),
(444, 734),
(224, 734),
(445, 462),
(447, 738),
(449, 99),
(448, 741),
(449, 741),
(450, 169),
(450, 168),
(450, 742),
(451, 253),
(451, 114),
(452, 453),
(452, 321),
(453, 114),
(453, 744),
(454, 745),
(454, 114),
(453, 746),
(455, 748),
(302, 749),
(378, 749),
(456, 749),
(456, 142),
(456, 751),
(456, 750),
(57, 750),
(457, 752),
(458, 754),
(458, 755),
(459, 756),
(459, 583),
(192, 756),
(274, 757),
(462, 12),
(462, 760),
(462, 759),
(463, 762),
(463, 608),
(464, 543),
(464, 227),
(465, 136),
(465, 398),
(465, 62),
(465, 209),
(465, 410),
(458, 763),
(467, 412),
(468, 437),
(468, 231),
(468, 225),
(469, 114),
(469, 320),
(469, 163),
(470, 479),
(470, 707),
(470, 726),
(470, 42),
(471, 766),
(178, 766),
(463, 766),
(74, 766),
(471, 513),
(472, 254),
(472, 767),
(473, 768),
(473, 641),
(370, 768),
(476, 225),
(476, 515),
(476, 697),
(476, 770),
(477, 772),
(477, 771),
(477, 773),
(477, 163),
(246, 772),
(100, 773),
(384, 773),
(246, 776),
(480, 775),
(480, 777),
(480, 776),
(321, 778),
(120, 778),
(448, 779),
(481, 779),
(481, 778),
(481, 263),
(482, 163),
(482, 780),
(397, 781),
(482, 781),
(71, 781),
(483, 784),
(483, 783),
(484, 786),
(484, 787),
(485, 82),
(485, 788),
(485, 756),
(485, 312),
(485, 174),
(485, 789),
(485, 790),
(47, 789),
(486, 56),
(486, 54),
(486, 792),
(19, 792),
(486, 192),
(486, 793),
(487, 794),
(487, 108),
(487, 564),
(488, 796),
(488, 795),
(488, 116),
(488, 40),
(489, 161),
(489, 162),
(489, 797),
(489, 152),
(490, 169),
(490, 798),
(491, 58),
(491, 799),
(491, 800),
(491, 801),
(483, 802),
(275, 802),
(275, 804),
(275, 803),
(275, 805),
(492, 807),
(492, 806),
(493, 808),
(494, 675),
(495, 810),
(495, 613),
(355, 811),
(496, 813),
(371, 813),
(496, 812),
(119, 812),
(163, 812),
(497, 265),
(497, 247),
(497, 622),
(497, 815),
(498, 528),
(500, 450),
(500, 635),
(500, 572),
(500, 818),
(452, 818),
(270, 818),
(501, 450),
(502, 821),
(502, 822),
(82, 822),
(503, 641),
(504, 824),
(504, 823),
(504, 505),
(240, 826),
(232, 826),
(504, 364),
(505, 826),
(505, 488),
(505, 825),
(506, 829),
(506, 451),
(506, 828),
(499, 828),
(507, 830),
(509, 150),
(510, 832),
(510, 833),
(511, 835),
(511, 727),
(511, 834),
(512, 208),
(512, 836),
(85, 836),
(513, 837),
(513, 838),
(424, 838),
(396, 564),
(363, 564),
(515, 839),
(516, 754),
(516, 755),
(516, 841),
(516, 842),
(516, 843),
(182, 844),
(517, 844),
(517, 445),
(517, 669),
(518, 618),
(518, 44),
(519, 808),
(520, 529),
(520, 528),
(521, 675),
(522, 127),
(522, 129),
(522, 95),
(523, 846),
(524, 847),
(524, 119),
(524, 848),
(524, 849),
(318, 849),
(209, 849),
(523, 851),
(307, 851),
(124, 850),
(523, 850),
(525, 842),
(525, 754),
(525, 852),
(458, 852),
(516, 852),
(526, 515),
(526, 241),
(526, 514),
(526, 224),
(527, 199),
(527, 587),
(527, 853),
(527, 853),
(527, 854),
(527, 855),
(76, 855),
(552, 370),
(552, 883),
(358, 857),
(473, 857),
(108, 857),
(110, 857),
(503, 857),
(161, 857),
(529, 858),
(529, 413),
(529, 859),
(529, 408),
(529, 847),
(529, 492),
(26, 598),
(531, 33),
(531, 860),
(344, 860),
(41, 860),
(228, 860),
(532, 176),
(532, 813),
(533, 297),
(533, 298),
(533, 299),
(533, 300),
(533, 863),
(534, 297),
(534, 298),
(534, 299),
(534, 300),
(534, 863),
(458, 866),
(535, 866),
(525, 866),
(535, 865),
(536, 868),
(537, 129),
(539, 665),
(539, 133),
(540, 870),
(540, 598),
(540, 698),
(540, 610),
(541, 139),
(541, 140),
(541, 872),
(56, 872),
(118, 872),
(542, 641),
(543, 594),
(544, 875),
(544, 874),
(545, 877),
(546, 76),
(546, 41),
(546, 823),
(546, 125),
(548, 515),
(548, 352),
(548, 879),
(549, 78),
(549, 41),
(549, 880),
(550, 543),
(550, 668),
(550, 620),
(550, 529),
(550, 78),
(550, 309),
(551, 882),
(341, 366),
(366, 647),
(552, 97),
(554, 301),
(554, 297),
(554, 298),
(554, 299),
(554, 300),
(555, 139),
(555, 140),
(555, 186),
(556, 613),
(556, 885),
(557, 142),
(557, 583),
(557, 886),
(302, 886),
(209, 886),
(558, 31),
(558, 534),
(559, 139),
(559, 502),
(559, 712),
(559, 872),
(560, 139),
(560, 153),
(561, 887),
(561, 794),
(561, 663),
(561, 645),
(562, 726),
(562, 611),
(563, 241),
(563, 153),
(563, 888),
(563, 442),
(564, 453),
(564, 317),
(564, 231),
(565, 450),
(565, 846),
(566, 139),
(80, 890),
(566, 890),
(566, 889),
(566, 278),
(568, 530),
(568, 41),
(568, 891),
(518, 413),
(1, 29),
(1, 31),
(2, 32),
(2, 33),
(3, 34),
(3, 35),
(4, 36),
(4, 37),
(4, 38),
(5, 39),
(6, 12),
(7, 40),
(7, 41),
(7, 42),
(7, 43),
(8, 14),
(10, 44),
(10, 45),
(11, 46),
(11, 47),
(11, 48),
(12, 31),
(12, 49),
(12, 50),
(13, 51),
(13, 52),
(13, 53),
(14, 54),
(14, 55),
(14, 56),
(14, 41),
(14, 57),
(14, 58),
(14, 45),
(15, 60),
(15, 59),
(16, 61),
(16, 41),
(16, 62),
(16, 63),
(16, 64),
(17, 65),
(17, 66),
(17, 67),
(18, 68),
(18, 69),
(18, 70),
(19, 63),
(19, 71),
(20, 72),
(21, 73),
(21, 74),
(6, 77),
(19, 78),
(19, 76),
(12, 75),
(20, 79),
(25, 12),
(26, 82),
(26, 83),
(26, 84),
(29, 92),
(30, 86),
(30, 87),
(30, 88),
(35, 102),
(35, 75),
(36, 29),
(36, 101),
(33, 94),
(33, 95),
(33, 96),
(34, 98),
(34, 97),
(34, 96),
(37, 104),
(37, 106),
(37, 105),
(37, 35),
(38, 107),
(38, 108),
(39, 109),
(39, 111),
(41, 113),
(41, 101),
(40, 114),
(40, 115),
(40, 31),
(42, 116),
(42, 108),
(44, 118),
(44, 120),
(44, 119),
(46, 124),
(46, 122),
(46, 123),
(47, 54),
(45, 14),
(48, 126),
(48, 125),
(49, 127),
(49, 96),
(49, 95),
(50, 128),
(50, 98),
(50, 95),
(50, 129),
(33, 129),
(51, 98),
(16, 133),
(52, 133),
(52, 63),
(52, 131),
(52, 130),
(52, 134),
(54, 138),
(54, 136),
(54, 137),
(56, 139),
(56, 140),
(57, 142),
(57, 141),
(58, 130),
(58, 143),
(58, 144),
(58, 145),
(58, 146),
(58, 147),
(58, 148),
(59, 12),
(59, 149),
(59, 150),
(60, 152),
(60, 151),
(60, 153),
(61, 144),
(61, 154),
(61, 146),
(61, 155),
(61, 156),
(63, 158),
(63, 36),
(63, 159),
(64, 162),
(64, 161),
(65, 164),
(65, 163),
(66, 163),
(66, 165),
(68, 167),
(68, 159),
(68, 166),
(69, 170),
(69, 171),
(69, 169),
(70, 175),
(70, 176),
(70, 174),
(71, 178),
(73, 183),
(73, 181),
(73, 182),
(74, 185),
(74, 186),
(75, 189),
(75, 188),
(75, 190),
(78, 119),
(78, 197),
(78, 196),
(78, 195),
(77, 63),
(77, 192),
(79, 201),
(79, 200),
(79, 199),
(79, 202),
(80, 109),
(80, 97),
(84, 207),
(85, 206),
(83, 208),
(83, 209),
(87, 211),
(87, 163),
(86, 210),
(88, 214),
(88, 31),
(89, 215),
(89, 217),
(89, 218),
(90, 135),
(93, 58),
(93, 221),
(94, 223),
(94, 225),
(94, 224),
(95, 227),
(96, 169),
(96, 171),
(97, 214),
(99, 58),
(99, 230),
(98, 232),
(98, 231),
(100, 33),
(100, 49),
(102, 12),
(101, 234),
(103, 236),
(104, 107),
(104, 237),
(105, 14),
(102, 77),
(106, 239),
(106, 238),
(106, 116),
(106, 193),
(107, 139),
(107, 241),
(107, 153),
(107, 240),
(39, 240),
(111, 94),
(111, 167),
(112, 246),
(112, 247),
(112, 248),
(113, 249),
(113, 250),
(114, 253),
(114, 254),
(115, 139),
(115, 153),
(116, 139),
(116, 153),
(116, 255),
(116, 97),
(116, 218),
(116, 257),
(116, 256),
(117, 149),
(117, 259),
(117, 260),
(117, 258),
(117, 139),
(40, 259),
(118, 151),
(118, 153),
(118, 140),
(118, 218),
(118, 152),
(117, 153),
(119, 101),
(119, 94),
(119, 263),
(119, 262),
(48, 262),
(120, 264),
(120, 265),
(121, 266),
(121, 83),
(87, 266),
(122, 268),
(122, 269),
(124, 159),
(127, 250),
(129, 273),
(129, 92),
(130, 275),
(130, 276),
(130, 277),
(130, 278),
(131, 161),
(131, 197),
(131, 270),
(132, 268),
(132, 46),
(132, 279),
(132, 262),
(132, 280),
(48, 280),
(133, 46),
(133, 126),
(133, 281),
(133, 280),
(134, 283),
(134, 284),
(135, 286),
(135, 287),
(135, 288),
(136, 289),
(30, 289),
(137, 292),
(137, 290),
(35, 295),
(138, 295),
(139, 295),
(139, 294),
(140, 297),
(140, 298),
(140, 299),
(140, 300),
(140, 301),
(141, 56),
(141, 304),
(141, 266),
(141, 303),
(141, 305),
(141, 281),
(141, 62),
(141, 302),
(142, 306),
(142, 308),
(142, 309),
(143, 310),
(143, 171),
(144, 312),
(144, 82),
(144, 311),
(144, 62),
(145, 317),
(145, 316),
(145, 315),
(146, 61),
(146, 318),
(147, 320),
(147, 321),
(148, 322),
(112, 322),
(150, 94),
(151, 193),
(152, 324),
(153, 326),
(153, 325),
(153, 246),
(153, 97),
(153, 327),
(154, 48),
(154, 304),
(154, 328),
(154, 329),
(72, 330),
(147, 330),
(72, 331),
(155, 333),
(156, 297),
(156, 298),
(156, 299),
(156, 330),
(158, 102),
(158, 337),
(159, 338),
(91, 338),
(160, 279),
(162, 340),
(162, 232),
(162, 259),
(162, 339),
(164, 342),
(166, 344),
(166, 345),
(166, 343),
(167, 347),
(167, 346),
(90, 342),
(169, 163),
(171, 94),
(171, 114),
(119, 350),
(171, 350),
(172, 352),
(172, 351),
(174, 354),
(134, 356),
(176, 356),
(176, 357),
(177, 359),
(177, 360),
(178, 362),
(178, 363),
(179, 365),
(179, 366),
(179, 364),
(180, 367),
(181, 370),
(181, 369),
(182, 372),
(182, 238),
(182, 139),
(182, 375),
(182, 371),
(182, 107),
(182, 374),
(182, 49),
(182, 171),
(182, 373),
(183, 378),
(183, 377),
(183, 379),
(184, 381),
(184, 383),
(184, 382),
(185, 306),
(185, 385),
(185, 386),
(186, 329),
(186, 315),
(186, 387),
(187, 388),
(187, 262),
(187, 46),
(188, 391),
(188, 57),
(188, 309),
(188, 73),
(189, 393),
(189, 306),
(189, 392),
(190, 394),
(191, 396),
(192, 312),
(192, 398),
(192, 136),
(192, 399),
(193, 400),
(194, 36),
(195, 403),
(195, 345),
(195, 163),
(195, 402),
(196, 404),
(196, 57),
(197, 96),
(197, 97),
(197, 127),
(198, 406),
(198, 407),
(198, 408),
(198, 409),
(199, 398),
(199, 410),
(200, 398),
(200, 209),
(198, 413),
(198, 412),
(201, 414),
(201, 416),
(201, 159),
(201, 415),
(202, 417),
(202, 418),
(202, 419),
(202, 402),
(203, 421),
(203, 420),
(204, 423),
(205, 122),
(205, 424),
(205, 425),
(204, 312),
(206, 428),
(206, 432),
(206, 431),
(206, 429),
(206, 435),
(206, 433),
(206, 434),
(207, 437),
(207, 436),
(208, 406),
(208, 438),
(208, 407),
(208, 33),
(208, 140),
(208, 439),
(209, 439),
(209, 407),
(209, 140),
(209, 161),
(209, 440),
(208, 440),
(210, 439),
(210, 140),
(210, 441),
(210, 415),
(210, 442),
(169, 446),
(211, 169),
(211, 443),
(211, 445),
(211, 446),
(211, 295),
(212, 448),
(213, 101),
(213, 320),
(214, 312),
(214, 450),
(214, 452),
(214, 451),
(215, 453),
(215, 454),
(216, 457),
(216, 414),
(216, 455),
(216, 456),
(217, 460),
(217, 459),
(218, 462),
(219, 350),
(219, 463),
(178, 463),
(220, 99),
(220, 443),
(220, 464),
(220, 254),
(220, 170),
(221, 139),
(222, 396),
(222, 465),
(191, 465),
(223, 465),
(223, 396),
(223, 466),
(222, 468),
(223, 468),
(223, 467),
(222, 467),
(222, 469),
(223, 469),
(223, 470),
(222, 470),
(191, 472),
(223, 471),
(224, 474),
(224, 288),
(224, 473),
(225, 478),
(225, 479),
(225, 480),
(225, 477),
(226, 114),
(226, 320),
(227, 481),
(228, 482),
(228, 101),
(228, 483),
(228, 263),
(119, 483),
(229, 263),
(230, 485),
(230, 310),
(231, 406),
(231, 115),
(231, 487),
(232, 488),
(232, 36),
(232, 489),
(232, 195),
(232, 70),
(232, 490),
(232, 352),
(232, 492),
(233, 168),
(68, 168),
(233, 459),
(233, 421),
(233, 495),
(234, 497),
(234, 498),
(235, 500),
(236, 502),
(236, 501),
(236, 209),
(239, 64),
(239, 505),
(240, 490),
(240, 506),
(241, 167),
(242, 175),
(242, 509),
(242, 302),
(164, 509),
(245, 511),
(245, 510),
(246, 515),
(246, 513),
(246, 489),
(246, 514),
(247, 517),
(247, 518),
(247, 276),
(246, 224),
(248, 279),
(249, 481),
(249, 337),
(249, 99),
(249, 519),
(249, 520),
(249, 158),
(250, 107),
(250, 41),
(250, 62),
(251, 522),
(218, 522),
(251, 462),
(251, 521),
(252, 523),
(252, 306),
(252, 133),
(253, 525),
(254, 527),
(54, 527),
(255, 530),
(255, 529),
(255, 116),
(255, 528),
(256, 46),
(256, 328),
(256, 532),
(256, 531),
(257, 56),
(257, 31),
(258, 365),
(259, 114),
(259, 231),
(259, 534),
(260, 214),
(260, 535),
(260, 536),
(260, 482),
(261, 408),
(261, 538),
(261, 537),
(263, 541),
(262, 541),
(262, 531),
(132, 541),
(151, 541),
(52, 541),
(265, 116),
(265, 530),
(262, 542),
(132, 542),
(266, 64),
(266, 387),
(266, 387),
(266, 543),
(266, 544),
(267, 64),
(267, 209),
(270, 549),
(270, 548),
(211, 549),
(228, 549),
(270, 551),
(271, 552),
(271, 279),
(271, 493),
(271, 375),
(270, 262),
(271, 150),
(272, 171),
(272, 436),
(273, 531),
(274, 531),
(275, 215),
(275, 259),
(276, 46),
(276, 553),
(121, 553),
(133, 554),
(276, 280),
(276, 554),
(277, 556),
(277, 558),
(277, 557),
(278, 255),
(278, 560),
(278, 412),
(278, 59),
(279, 412),
(279, 255),
(279, 560),
(280, 412),
(280, 255),
(280, 560),
(281, 101),
(281, 113),
(281, 262),
(281, 483),
(281, 563),
(202, 563),
(125, 563),
(282, 459),
(282, 344),
(282, 171),
(282, 249),
(282, 564),
(241, 564),
(272, 564),
(283, 116),
(285, 49),
(286, 73),
(287, 73),
(287, 566),
(286, 566),
(286, 567),
(287, 567),
(287, 569),
(286, 569),
(286, 568),
(287, 568),
(288, 416),
(288, 339),
(288, 75),
(289, 159),
(289, 262),
(289, 572),
(289, 573),
(220, 572),
(290, 574),
(290, 575),
(15, 575),
(290, 167),
(292, 576),
(292, 577),
(292, 578),
(30, 576),
(296, 12),
(295, 12),
(298, 580),
(301, 582),
(302, 583),
(303, 281),
(306, 587),
(306, 586),
(306, 141),
(307, 589),
(307, 588),
(308, 450),
(309, 29),
(309, 459),
(309, 373),
(309, 590),
(249, 590),
(310, 423),
(311, 276),
(311, 592),
(317, 39),
(317, 595),
(316, 72),
(316, 163),
(315, 594),
(315, 210),
(18, 595),
(318, 119),
(318, 256),
(318, 52),
(319, 165),
(319, 596),
(320, 371),
(320, 598),
(320, 597),
(322, 599),
(323, 543),
(324, 192),
(324, 209),
(325, 273),
(325, 602),
(325, 603),
(326, 603),
(326, 92),
(326, 605),
(326, 606),
(326, 604),
(167, 604),
(29, 606),
(327, 394),
(328, 608),
(328, 370),
(329, 120),
(329, 497),
(329, 363),
(330, 46),
(330, 78),
(330, 610),
(331, 406),
(331, 116),
(331, 611),
(332, 82),
(332, 613),
(333, 615),
(333, 614),
(333, 148),
(334, 616),
(334, 136),
(335, 617),
(335, 339),
(335, 618),
(335, 619),
(2, 619),
(282, 619),
(336, 239),
(336, 230),
(336, 620),
(336, 621),
(337, 614),
(337, 622),
(338, 459),
(338, 625),
(340, 328),
(340, 566),
(340, 170),
(341, 630),
(341, 628),
(341, 629),
(342, 632),
(342, 631),
(343, 260),
(344, 406),
(344, 487),
(345, 634),
(345, 635),
(346, 398),
(345, 563),
(348, 523),
(348, 315),
(349, 127),
(349, 96),
(349, 128),
(349, 97),
(349, 638),
(351, 142),
(352, 437),
(352, 62),
(352, 302),
(353, 175),
(353, 302),
(354, 161),
(354, 283),
(355, 639),
(355, 302),
(355, 610),
(356, 302),
(356, 640),
(210, 640),
(320, 640),
(357, 54),
(357, 315),
(357, 57),
(357, 528),
(110, 641),
(358, 641),
(359, 459),
(359, 616),
(359, 640),
(360, 12),
(361, 644),
(361, 645),
(362, 12),
(363, 249),
(364, 625),
(364, 373),
(528, 856),
(528, 580),
(367, 647),
(369, 647),
(368, 647),
(371, 175),
(371, 46),
(371, 650),
(284, 651),
(373, 651),
(374, 651),
(375, 652),
(376, 602),
(376, 605),
(377, 101),
(377, 445),
(377, 263),
(321, 654),
(377, 654),
(377, 655),
(378, 142),
(378, 136),
(379, 634),
(379, 249),
(380, 249),
(380, 114),
(380, 656),
(187, 657),
(381, 657),
(381, 531),
(382, 253),
(382, 519),
(382, 167),
(383, 94),
(383, 443),
(384, 658),
(384, 660),
(385, 250),
(386, 450),
(386, 99),
(386, 588),
(386, 548),
(387, 661),
(387, 260),
(387, 371),
(389, 645),
(389, 663),
(391, 650),
(391, 610),
(391, 665),
(392, 580),
(392, 666),
(298, 666),
(299, 666),
(393, 381),
(393, 668),
(394, 58),
(394, 330),
(394, 596),
(395, 669),
(215, 669),
(386, 669),
(395, 167),
(395, 670),
(359, 670),
(396, 671),
(396, 673),
(397, 671),
(397, 674),
(397, 675),
(398, 150),
(399, 150),
(400, 175),
(400, 610),
(400, 309),
(400, 386),
(400, 679),
(400, 679),
(401, 680),
(401, 393),
(401, 386),
(401, 610),
(382, 683),
(403, 683),
(403, 681),
(89, 681),
(233, 681),
(233, 683),
(403, 682),
(403, 548),
(404, 684),
(405, 114),
(405, 685),
(406, 231),
(406, 686),
(407, 687),
(407, 421),
(408, 400),
(408, 689),
(409, 101),
(409, 166),
(409, 455),
(410, 101),
(410, 400),
(410, 685),
(410, 692),
(63, 692),
(157, 692),
(411, 101),
(411, 400),
(412, 400),
(412, 694),
(413, 695),
(414, 697),
(414, 696),
(415, 143),
(415, 130),
(416, 130),
(416, 143),
(417, 130),
(417, 143),
(417, 192),
(417, 398),
(417, 190),
(417, 145),
(418, 175),
(418, 505),
(418, 698),
(419, 161),
(419, 699),
(420, 701),
(168, 701),
(168, 702),
(84, 702),
(421, 703),
(422, 87),
(423, 704),
(423, 706),
(423, 707),
(423, 537),
(423, 705),
(423, 708),
(424, 711),
(424, 710),
(424, 712),
(425, 133),
(425, 78),
(425, 714),
(425, 713),
(426, 412),
(426, 715),
(427, 716),
(427, 412),
(428, 594),
(428, 412),
(430, 340),
(430, 29),
(430, 374),
(430, 50),
(431, 256),
(431, 719),
(431, 720),
(432, 721),
(434, 460),
(434, 725),
(434, 724),
(435, 169),
(435, 459),
(435, 421),
(436, 116),
(437, 436),
(438, 726),
(439, 668),
(439, 727),
(82, 728),
(439, 728),
(82, 729),
(440, 728),
(440, 729),
(441, 731),
(441, 730),
(292, 731),
(442, 230),
(442, 254),
(442, 732),
(443, 420),
(443, 339),
(443, 733),
(444, 706),
(444, 362),
(444, 258),
(444, 119),
(444, 197),
(444, 196),
(444, 735),
(444, 734),
(224, 734),
(445, 462),
(447, 738),
(449, 99),
(448, 741),
(449, 741),
(450, 169),
(450, 168),
(450, 742),
(451, 253),
(451, 114),
(452, 453),
(452, 321),
(453, 114),
(453, 744),
(454, 745),
(454, 114),
(453, 746),
(455, 748),
(302, 749),
(378, 749),
(456, 749),
(456, 142),
(456, 751),
(456, 750),
(57, 750),
(457, 752),
(458, 754),
(458, 755),
(459, 756),
(459, 583),
(192, 756),
(274, 757),
(462, 12),
(462, 760),
(462, 759),
(463, 762),
(463, 608),
(464, 543),
(464, 227),
(465, 136),
(465, 398),
(465, 62),
(465, 209),
(465, 410),
(458, 763),
(467, 412),
(468, 437),
(468, 231),
(468, 225),
(469, 114),
(469, 320),
(469, 163),
(470, 479),
(470, 707),
(470, 726),
(470, 42),
(471, 766),
(178, 766),
(463, 766),
(74, 766),
(471, 513),
(472, 254),
(472, 767),
(473, 768),
(473, 641),
(370, 768),
(476, 225),
(476, 515),
(476, 697),
(476, 770),
(477, 772),
(477, 771),
(477, 773),
(477, 163),
(246, 772),
(100, 773),
(384, 773),
(246, 776),
(480, 775),
(480, 777),
(480, 776),
(321, 778),
(120, 778),
(448, 779),
(481, 779),
(481, 778),
(481, 263),
(482, 163),
(482, 780),
(397, 781),
(482, 781),
(71, 781),
(483, 784),
(483, 783),
(484, 786),
(484, 787),
(485, 82),
(485, 788),
(485, 756),
(485, 312),
(485, 174),
(485, 789),
(485, 790),
(47, 789),
(486, 56),
(486, 54),
(486, 792),
(19, 792),
(486, 192),
(486, 793),
(487, 794),
(487, 108),
(487, 564),
(488, 796),
(488, 795),
(488, 116),
(488, 40),
(489, 161),
(489, 162),
(489, 797),
(489, 152),
(490, 169),
(490, 798),
(491, 58),
(491, 799),
(491, 800),
(491, 801),
(483, 802),
(275, 802),
(275, 804),
(275, 803),
(275, 805),
(492, 807),
(492, 806),
(493, 808),
(494, 675),
(495, 810),
(495, 613),
(355, 811),
(496, 813),
(371, 813),
(496, 812),
(119, 812),
(163, 812),
(497, 265),
(497, 247),
(497, 622),
(497, 815),
(498, 528),
(500, 450),
(500, 635),
(500, 572),
(500, 818),
(452, 818),
(270, 818),
(501, 450),
(502, 821),
(502, 822),
(82, 822),
(503, 641),
(504, 824),
(504, 823),
(504, 505),
(240, 826),
(232, 826),
(504, 364),
(505, 826),
(505, 488),
(505, 825),
(506, 829),
(506, 451),
(506, 828),
(499, 828),
(507, 830),
(509, 150),
(510, 832),
(510, 833),
(511, 835),
(511, 727),
(511, 834),
(512, 208),
(512, 836),
(85, 836),
(513, 837),
(513, 838),
(424, 838),
(396, 564),
(363, 564),
(515, 839),
(516, 754),
(516, 755),
(516, 841),
(516, 842),
(516, 843),
(182, 844),
(517, 844),
(517, 445),
(517, 669),
(518, 618),
(518, 44),
(519, 808),
(520, 529),
(520, 528),
(521, 675),
(522, 127),
(522, 129),
(522, 95),
(523, 846),
(524, 847),
(524, 119),
(524, 848),
(524, 849),
(318, 849),
(209, 849),
(523, 851),
(307, 851),
(124, 850),
(523, 850),
(525, 842),
(525, 754),
(525, 852),
(458, 852),
(516, 852),
(526, 515),
(526, 241),
(526, 514),
(526, 224),
(527, 199),
(527, 587),
(527, 853),
(527, 853),
(527, 854),
(527, 855),
(76, 855),
(552, 370),
(552, 883),
(358, 857),
(473, 857),
(108, 857),
(110, 857),
(503, 857),
(161, 857),
(529, 858),
(529, 413),
(529, 859),
(529, 408),
(529, 847),
(529, 492),
(26, 598),
(531, 33),
(531, 860),
(344, 860),
(41, 860),
(228, 860),
(532, 176),
(532, 813),
(533, 297),
(533, 298),
(533, 299),
(533, 300),
(533, 863),
(534, 297),
(534, 298),
(534, 299),
(534, 300),
(534, 863),
(458, 866),
(535, 866),
(525, 866),
(535, 865),
(536, 868),
(537, 129),
(539, 665),
(539, 133),
(540, 870),
(540, 598),
(540, 698),
(540, 610),
(541, 139),
(541, 140),
(541, 872),
(56, 872),
(118, 872),
(542, 641),
(543, 594),
(544, 875),
(544, 874),
(545, 877),
(546, 76),
(546, 41),
(546, 823),
(546, 125),
(548, 515),
(548, 352),
(548, 879),
(549, 78),
(549, 41),
(549, 880),
(550, 543),
(550, 668),
(550, 620),
(550, 529),
(550, 78),
(550, 309),
(551, 882),
(341, 366),
(366, 647),
(552, 97),
(554, 301),
(554, 297),
(554, 298),
(554, 299),
(554, 300),
(555, 139),
(555, 140),
(555, 186),
(556, 613),
(556, 885),
(557, 142),
(557, 583),
(557, 886),
(302, 886),
(209, 886),
(558, 31),
(558, 534),
(559, 139),
(559, 502),
(559, 712),
(559, 872),
(560, 139),
(560, 153),
(561, 887),
(561, 794),
(561, 663),
(561, 645),
(562, 726),
(562, 611),
(563, 241),
(563, 153),
(563, 888),
(563, 442),
(564, 453),
(564, 317),
(564, 231),
(565, 450),
(565, 846),
(566, 139),
(80, 890),
(566, 890),
(566, 889),
(566, 278),
(568, 530),
(568, 41),
(568, 891),
(518, 413);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
