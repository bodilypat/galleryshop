CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(45) DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES


-- --------------------------------------------------------

--
-- Table structure for table `tblartist`
--

CREATE TABLE `tblartist` (
  `ID` int(10) NOT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Education` mediumtext DEFAULT NULL,
  `Award` mediumtext DEFAULT NULL,
  `Profilepic` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblartist`
--

INSERT INTO `tblartist` (`ID`, `Name`, `MobileNumber`, `Email`, `Education`, `Award`, `Profilepic`, `CreationDate`) VALUES
(11, 'Arale', 4083203408, 'arale@gmail.com', '', 'The Hugo Boss Prize', 'c8bcaaec461a764d58bdb132a5d7d621.jpg', '2023-08-14 20:52:32'),
(13, 'Suyu', 4083203408, 'Suyu@gmail.com', '', 'Art of the year', '4ada9f465d9b631f2c89062d2989c119.jpg', '2023-08-14 20:59:10'),
(14, 'Anatasia', 4083203408, 'Anatasia@hotmail.com', '', 'The Bucksbaum Award', 'f6a86581c6c50e6da75e6b73661805a9.jpg', '2023-08-14 21:10:38'),
(15, 'pacha', 4083203408, 'pacha.sbodily@gmail.com', '', 'The Future Generation Art Prize', 'be5c76ddd4e7bf2669c3c5636932fc20.jpg', '2023-08-14 21:12:05'),
(16, 'Steve', 4083203460, 'Steve@gmail.com', '', 'The MacArthur Fellows Program', '585a74c5728a02ddc7974101b064f000.jpg', '2023-08-14 21:13:59'),
(17, 'Rinny', 4083203408, 'Rinny@gmail.com', '', 'he Marcel Duchamp Prize', '9c04572adfdcb732a710d2fab76a235b.jpg', '2023-08-14 21:31:18'),
(18, 'Branda', 4083203408, 'branda@gmail.com', '', 'The Turner Prize', '11c6dd94ec48dfdf0de825ffc0b84bcc.jpg', '2023-08-14 21:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `tblartmedium`
--

CREATE TABLE `tblartmedium` (
  `ID` int(5) NOT NULL,
  `ArtMedium` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblartmedium`
--

INSERT INTO `tblartmedium` (`ID`, `ArtMedium`, `CreationDate`) VALUES
(1, 'Wood and Bronze', '2022-12-22 04:57:04'),
(2, 'Acrylic on canvas', '2022-12-22 04:57:34'),
(3, 'Resin', '2022-12-22 04:58:00'),
(4, 'Mixed Media', '2022-12-22 06:09:12'),
(5, 'Bronze', '2022-12-22 06:09:35'),
(6, 'Fibre', '2022-12-22 06:09:53'),
(7, 'Steel', '2022-12-22 06:10:16'),
(8, 'Metal', '2022-12-22 06:10:35'),
(9, 'Oil on Canvas', '2022-12-22 06:11:31'),
(10, 'Oil on Linen', '2022-12-22 06:12:12'),
(11, 'Acrylics on paper', '2022-12-22 06:13:11'),
(12, 'Hand-painted on particle wood/MDF', '2022-12-22 06:14:03');

-- --------------------------------------------------------

--
-- Table structure for table `tblartproduct`
--

CREATE TABLE `tblartproduct` (
  `ID` int(5) NOT NULL,
  `Title` varchar(250) DEFAULT NULL,
  `Dimension` varchar(250) DEFAULT NULL,
  `Orientation` varchar(100) DEFAULT NULL,
  `Size` varchar(100) DEFAULT NULL,
  `Artist` int(5) DEFAULT NULL,
  `ArtType` int(5) DEFAULT NULL,
  `ArtMedium` int(5) DEFAULT NULL,
  `SellingPricing` decimal(10,0) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Image` varchar(250) DEFAULT NULL,
  `RefNum` int(10) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblartproduct`
--

INSERT INTO `tblartproduct` (`ID`, `Title`, `Dimension`, `Orientation`, `Size`, `Artist`, `ArtType`, `ArtMedium`, `SellingPricing`, `Description`, `Image`, `RefNum`, `CreationDate`) VALUES
(8, 'Dance ', '200x200', 'Potrait', 'Medium', 14, 2, 2, 2000, 'Serigraphy is a fancy term for silkscreen printing, coming from “seri,” which is Latin for “silk,” and “graphos,” which is Ancient Greek for “writing.” The word was coined early in the last century to distinguish the artistic use of the medium from its more common commercial purpose', 'f6a86581c6c50e6da75e6b73661805a91692049834.jpg', 965182344, '2023-08-14 21:50:34'),
(9, 'Queen', '100x200', 'Potrait', 'Small', 17, 1, 8, 5000, 'Sculpture is the branch of the visual arts that operates in three dimensions. Sculpture is the three-dimensional art work which is physically presented in the dimensions of height, width and depth.', 'c06b10b20e35413b441bd26b4f9805b21692050007.jpg', 186867148, '2023-08-14 21:53:27'),
(10, 'window', '200x200', 'Potrait', 'Medium', 14, 6, 11, 1500, 'The visual arts are art forms such as painting, drawing, printmaking, sculpture, ceramics, photography, video, filmmaking, design, crafts, and architecture. Many artistic disciplines, such as performing arts, conceptual art, and textile arts, also involve aspects of the visual arts as well as arts of other types', '9ce17efb583b457b92ad7d57c371c2221692052040.jpg', 624017534, '2023-08-14 22:27:20'),
(12, 'fantasy', '200x200', 'Potrait', 'Medium', 13, 7, 11, 2000, 'Contemporary art Dona i Ocell, by Joan Miró Rose, by Isa Genzken Contemporary art is the art of today, produced in the second half of the 20th century or in the 21st century. Contemporary artists work in a globally influenced, culturally diverse, and technologically advancing world', 'c89416101701900620d2fc557a1ef9821692052874.jpg', 143026497, '2023-08-14 22:41:14'),
(14, 'the wind blows', '400x400', 'Potrait', 'Medium', 18, 5, 11, 4000, 'Action painting, sometimes called \"gestural abstraction\", is a style of painting in which paint is spontaneously dribbled, splashed or smeared onto the canvas, rather than being carefully applied', '84485892c488b984231daab753e002681692053597.jpg', 949842191, '2023-08-14 22:53:17'),
(15, 'coldness', '200x200', 'Landscape', 'Medium', 18, 4, 11, 2500, 'Painting is the practice of applying paint, pigment, color or other medium to a solid surface. The medium is commonly applied to the base with a brush, but other implements, such as knives, sponges, and airbrushes, can be used. In art, the term \"painting\" describes both the act and the result of the action.', '11c6dd94ec48dfdf0de825ffc0b84bcc1692053882.jpg', 141312809, '2023-08-14 22:58:02'),
(16, 'waiting day', '400x400', 'Potrait', 'Medium', 14, 3, 10, 6000, 'Impressionism was a 19th-century art movement characterized by relatively small, thin, yet visible brush strokes, open composition, emphasis on accurate depiction of light in its changing qualities', 'be5c76ddd4e7bf2669c3c5636932fc201692054514.jpg', 493312508, '2023-08-14 23:08:34'),
(17, 'Vanopok', '200x200', 'Potrait', 'Small', 16, 12, 11, 1500, 'Drawing is a visual art that uses an instrument to mark paper or another two-dimensional surface. The instrument might be pencils, crayons, pens with inks, brushes with paints, or combinations of these, and in more modern times, computer styluses with graphics tablets', '75fb9587d678073a62df5a9e75ec5d971692055028.jpg', 897960398, '2023-08-14 23:17:08'),
(18, 'Waterfall stream', '400x400', 'Landscape', 'Medium', 11, 3, 9, 5000, 'Impressionism was a 19th-century art movement characterized by relatively small, thin, yet visible brush strokes, open composition, emphasis on accurate depiction of light in its changing qualities,', 'c31d8dee9209ab889e2dcb60188976a41692055417.jpg', 186864634, '2023-08-14 23:23:37'),
(19, 'Wolf', '200x200', 'Potrait', 'Small', 15, 1, 3, 1500, 'Sculpture is the branch of the visual arts that operates in three dimensions. Sculpture is the three-dimensional art work which is physically presented in the dimensions of height, width and depth. It is one of the plastic arts', '9231c477b01266868e45558f7b7a8abe1692056862.jpg', 553441876, '2023-08-14 23:47:42'),
(20, 'Dancer', '100x200', 'Potrait', 'Small', 11, 4, 11, 2000, 'Painting is one of the ancient forms of art, with cave paintings dating back to prehistoric times. Paintings are classified by both the subject matter, ', '4ada9f465d9b631f2c89062d2989c1191692057682.jpg', 250520501, '2023-08-15 00:01:22'),
(21, 'virtuous woman', '400x400', 'Potrait', 'Medium', 18, 4, 11, 5000, 'Painting is the practice of applying paint, pigment, color or other medium to a solid surface. The medium is commonly applied to the base with a brush, but other implements, such as knives, sponges, and airbrushes, can be used. In art, the term \"painting\" describes both the act and the result of the action.', '26bf386d353c2555cfd43f52cadfd3dc1692057853.jpg', 170813160, '2023-08-15 00:04:13'),
(22, 'happy girl', '400x400', 'Potrait', 'Medium', 11, 4, 11, 3000, 'Painting is a mode of creative expression, and can be done in numerous forms. Drawing, gesture , composition, narration , or abstraction , among other aesthetic modes, may serve to manifest the expressive and conceptual intention of the practitioner.', 'c8bcaaec461a764d58bdb132a5d7d6211692079189.jpg', 978922318, '2023-08-15 05:59:49'),
(23, 'eagle', '3D', 'Potrait', 'Small', 17, 1, 2, 2500, 'Sculpture is the branch of the visual arts that operates in three dimensions. It is one of the plastic arts. Durable sculptural processes originally used carving  and modelling , in stone, metal, ceramics, wood and other materials; but since modernism, shifts in sculptural process led to an almost complete freedom of materials and process. A wide variety of materials may be worked by removal such as carving, assembled by welding or modelling, cast', '0cc81ef624abc9b297500d3a0ea826d01692079469.jpg', 925766139, '2023-08-15 06:04:29'),
(24, 'Serigraphs', '600x800', 'Potrait', 'Large', 16, 2, 11, 12000, 'A serigraph is a type of printmaking process that involves pushing ink through a mesh stencil onto paper or another surface. Each color in the image requires a separate stencil, resulting in a unique, layered print. Serigraphs are often used in fine art, commercial printing, and textile design', 'c33442a99755c78ed75236e3394f6fb21692111720.jpg', 333776527, '2023-08-15 15:02:00'),
(25, 'keep an eye on', '400x400', 'Potrait', 'Medium', 18, 12, 4, 3000, 'Drawing is a visual art that uses an instrument to mark paper or another two-dimensional surface. The instrument might be pencils, crayons, pens with inks, brushes with paints, or combinations of these, and in more modern times, computer styluses with graphics tablets.', '585a74c5728a02ddc7974101b064f0001692113479.jpg', 198285196, '2023-08-15 15:31:19'),
(26, 'elephant', '200x200', 'Potrait', 'Small', 14, 1, 7, 2500, 'Sculpture is the branch of the visual arts that operates in three dimensions. Sculpture is the three-dimensional art work which is physically presented in the dimensions of height, width and depth. It is one of the plastic arts.', '9c04572adfdcb732a710d2fab76a235b1692113646.jpg', 258420407, '2023-08-15 15:34:06'),
(27, 'beautiful flowers in a vase', '400x400', 'Potrait', 'Medium', 15, 4, 11, 4000, 'Painting is the practice of applying paint, pigment, color or other medium to a solid surface. The medium is commonly applied to the base with a brush, but other implements, such as knives, sponges, and airbrushes, can be used. In art, the term \"painting\" describes both the act and the result of the action.', '8cff7c585c937f0be75d8ea1b3b902921692114447.jpg', 712892113, '2023-08-15 15:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `tblarttype`
--

CREATE TABLE `tblarttype` (
  `ID` int(5) NOT NULL,
  `ArtType` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblarttype`
--

INSERT INTO `tblarttype` (`ID`, `ArtType`, `CreationDate`) VALUES
(1, 'Sculptures', '2022-12-21 14:21:13'),
(2, 'Serigraphs', '2022-12-21 14:24:46'),
(3, 'Impressionism', '2022-12-21 14:25:00'),
(4, 'Painting', '2022-12-21 14:25:31'),
(5, 'abstraction', '2022-12-21 14:26:06'),
(6, 'Visual art ', '2022-12-21 14:26:29'),
(7, 'Conceptual art', '2022-12-21 14:26:45'),
(12, 'Drawing', '2023-08-14 23:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `ID` int(10) NOT NULL,
  `EnquiryNumber` varchar(10) NOT NULL,
  `Artpdid` int(9) DEFAULT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Message` varchar(250) DEFAULT NULL,
  `EnquiryDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` varchar(10) DEFAULT NULL,
  `AdminRemark` varchar(200) NOT NULL,
  `AdminRemarkdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblenquiry`
--

INSERT INTO `tblenquiry` (`ID`, `EnquiryNumber`, `Artpdid`, `FullName`, `Email`, `MobileNumber`, `Message`, `EnquiryDate`, `Status`, `AdminRemark`, `AdminRemarkdate`) VALUES
(1, '230873611', 4, 'Anuj kumar', 'ak@test.com', 1234567890, 'This is for testing Purpose.', '2023-01-02 18:16:47', 'Answer', 'test purpose', '2023-01-01 18:30:00'),
(2, '227883179', 5, 'Amit Kumar', 'amitk55@test.com', 1234434321, 'I want this painting', '2023-01-02 18:42:42', 'Answer', 'testing purpose', '2023-01-02 18:43:16');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us', '<font color=\"#202124\" face=\"arial, sans-serif\"><span style=\"font-size: 16px;\">Test system</span></font>', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', '2942 Edenbank Ct San Jose 95148', 'pacha.sbodily@gmail.com', 4083203408, NULL, '10:30 am to 7:30 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblartist`
--
ALTER TABLE `tblartist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblartmedium`
--
ALTER TABLE `tblartmedium`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblartproduct`
--
ALTER TABLE `tblartproduct`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblarttype`
--
ALTER TABLE `tblarttype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CardId` (`Artpdid`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblartist`
--
ALTER TABLE `tblartist`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblartmedium`
--
ALTER TABLE `tblartmedium`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblartproduct`
--
ALTER TABLE `tblartproduct`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tblarttype`
--
ALTER TABLE `tblarttype`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
