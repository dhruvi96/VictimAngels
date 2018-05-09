-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2018 at 02:55 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `angel`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE IF NOT EXISTS `alogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`id`, `uname`, `pass`) VALUES
(1, 'admin', 'dhruvi');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `disp` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `img`, `disp`) VALUES
(1, 'Soak in the Moment', 'blog1.jpg', 'I want so desperately to freeze this moment. To drink in every sound, every sight, every delightful evidence of life. So many things to be thankful for.I’ve had thousands of these everyday life minutes, but tonight is different. I remembered to pause. To acknowledge what I’ve been blessed with. . . . I sat and soaked in the moment. And with every tear that spilled out, I felt more and more full.Maybe this is the true secret to being fulfilled and content. Living in the moment with God, defined by His truth, and with no unrealistic expectations for others.'),
(2, 'God is Calling You to be a Part of Something Bigge', 'blog2.jpg', 'Excerpt from The Playful and Powerful WARRIOR within YOU!Do you sense there is something bigger out in the world for you to accomplish? God is calling you to trust Him and choose big steps of faith to create a significant difference in the world. The only way to find the ultimate purpose of your life is by respond- ing to God’s call to enter into a personal relationship with Him. You are called to a personal relationship with God who created you. It is in God that you are able to discover your origin, your identity, your meaning, your purpose, your significance, and your destiny. Every other path leads to a dead end. God created you and accepts you no matter what you have ever done or failed to do.'),
(3, 'Dr. Apratim Goel | CEO', 'blog3.png', 'Dr. Apratim Goel in the CEO and Medical Director of a chain of laser and cosmetic clinics called Cutis Skin Studio ,Mumbai, India.A strong feminist, an extremely passionate aesthetician and board certified dermatologist, Dr.Goel advises many established brands to put them on the road to profitability and is a true inspiration for many budding cosmetic dermatologists globally.An author and voracious reader...<'),
(4, 'Sex Education', 'blog5.jpg', 'In India we don’t hesitate to have sex, but when we have to talk about it, it’s against our culture,” said Anju Kishinchandani, a sex educator who runs weekend workshops in Mumbai to get children, teenagers and their parents to talk about the birds and the bees.In a country where conversations about sex are all but taboo, Ms. Kishinchandani offers one of a growing number of privately run programs that Indian parents send their children to instead of discussing the topic at home...'),
(5, 'What I’m going through! the afterlife of acid atta', 'blog6.jpeg', 'Acid attack, one of the most heinous crimes against humanity, especially women, still exists in the world and if the statistics are to be believed not even countries like Bangladesh, Pakistan and India have the records but also United States and European Union have their share of reports but most cases cover South East Asian countries where the incidents simply never seem to take a halt. Both men and women as well as children are targeted in such cases but women are the...'),
(6, 'Ms. Vandana Gupta | Founder of Devditi Foundation', 'blog4.png', 'Vandana Gupta is one of the co-founders of Devditi Foundation, and is a self-motivated go-getter.Hailing from an affluent business family and a graduate from Lady Shriram College, Gupta co-founded a successful stockbroking company after her marriage into a family of finance professionals. She has successfully juggled multiple roles of a mother, wife and homemaker along with her professional life.');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `add` varchar(50) NOT NULL,
  `special` varchar(50) NOT NULL,
  `num` varchar(50) NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `add`, `special`, `num`, `img`) VALUES
(1, 'Dr. Sumit Singh', 'Ahemdabad,Gujrat,India', 'ENT specialist', '+91 8888888888', 'dr1.jpg'),
(2, 'Dr. Sweta Singla', 'Vadodara,Gujrat,India', 'Neorologist', '+91 8888888888', 'dr3.jpg'),
(3, 'Dr. Sankalp Mohan', 'New Delhi,India', 'Gynaecologist', '+91 8888888888', 'dr2.jpg'),
(4, 'Dr. Sonia Lal Gupta', 'Mumbai,India', 'Gynaecologist', '+91 8888888888', 'dr4.png'),
(5, 'Dr. Aparna Gupta', 'Jaipur,India', 'Orthopedic', '+91 8888888888', 'dr5.jpg'),
(6, 'Dr. Jaideep Bansal', 'Bangalore, Bangalore Urban, Karnataka, India', 'Orthopedic', '+91 8888888888', 'dr6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `type` text NOT NULL,
  `location` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `name`, `type`, `location`) VALUES
(1, 'krishna', 'p', 'ahemdabad'),
(2, 'gitanjali', 'p', 'vadodara'),
(3, 'anand orthpedic', 'p', 'anand'),
(4, 'apollo', 'p', 'ahemdabad'),
(5, 'civil hospital', 'g', 'ahemdabad'),
(6, 'general hospital', 'g', 'anand'),
(7, 'CHC', 'g', 'dakor'),
(8, 'Gita', 'p', 'Dakor');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE IF NOT EXISTS `lawyer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `fee` int(11) NOT NULL,
  `img` text NOT NULL,
  `desp` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`id`, `name`, `city`, `state`, `country`, `fee`, `img`, `desp`) VALUES
(1, 'Chaitanya Joshi', 'Ahemdabad', 'Gujrat', 'India', 3000, 'boy1.jpg', ' 5 yrs work experience'),
(2, 'Nitesh V Gorasia', 'New Delhi', 'Delhi', 'India', 3000, 'boy2.png', '2 yrs experience'),
(3, 'Hemendra A Shah', 'Vadodara', 'Gujrat', 'India', 2000, 'boy3.jpg', '1 yr work experience'),
(4, 'Juris Emergency', 'Mumbai', 'Maharastra', 'India', 6000, 'boy4.jpg', '8 yrs work experience'),
(5, 'Zaid Saiyed', 'Jaipur', 'Rajasthan', 'India', 500, 'boy5.jpg', ' 1 yr work experience'),
(6, 'Sujit Uday', 'Bangalore', 'Karnataka', 'India', 1500, 'boy6.jpg', '3 yrs work experience');

-- --------------------------------------------------------

--
-- Table structure for table `matrimonial`
--

CREATE TABLE IF NOT EXISTS `matrimonial` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `for` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dobd` int(11) NOT NULL,
  `dobm` int(11) NOT NULL,
  `doby` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `mtongue` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `ccode` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `img` text NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `matrimonial`
--

INSERT INTO `matrimonial` (`m_id`, `for`, `name`, `gender`, `dobd`, `dobm`, `doby`, `city`, `religion`, `mtongue`, `country`, `ccode`, `mobile`, `email`, `img`, `pass`) VALUES
(1, 'myself', 'Dhruvi', 'female', 0, 12, 1996, 'Dakor', '1', '14', '98', '98', 2147483647, 'shahdhruvi96@gmail.com', 'blog3.png', 'dhruvi'),
(2, 'brother', 'Jay Shah', 'male', 0, 10, 1992, 'Umreth', '1', '14', '98', '98', 2147483647, 'jayuushah@gmail.com', 'boy3.jpg', 'jayshah'),
(3, 'myself', 'Adarsh', 'male', 0, 2, 196, 'Pansora', '1', '31', '98', '98', 2147483647, 'adi_boxy@gmail.com', 'dr2.jpg', 'adi'),
(4, 'son', 'Burhan', 'male', 0, 2, 1996, 'Anand', '11', '14', '98', '98', 2147483647, 'burhan@gmail.com', 'dr1.jpg', 'buru'),
(5, 'friend', 'Purvik', 'male', 0, 10, 1993, 'Dharmaj', '1', '14', '98', '98', 2147483647, 'purvik@gmail.com', 'boy1.jpg', 'purvik'),
(6, 'myself', 'Karan', 'male', 0, 11, 1991, 'Bedva', '1', '14', '98', '98', 2147483647, 'karan@yahoo.com', 'boy4.jpg', 'karan'),
(7, 'relative', 'Jainam', 'male', 0, 3, 1997, 'Vasad', '15', '14', '98', '98', 2147483647, 'jainam@gmail.com', 'boy6.jpg', 'jainam'),
(8, 'daughter', 'Kruti', 'female', 0, 9, 1990, 'Nadiad', '1', '14', '98', '98', 2147483647, 'kruti@gmail.com', 'blog4.png', 'kruti'),
(9, 'sister', 'Vrunda', 'female', 0, 3, 1995, 'Vadodara', '1', '14', '98', '98', 2147483647, 'vrunda@gmail.com', 'dr3.jpg', 'vrunda'),
(10, 'relative', 'Sachi', 'female', 0, 12, 1985, 'Vemar', '1', '14', '98', '98', 2147483647, 'sachi@gmail.com', 'dr5.jpg', 'sachi'),
(11, 'friend', 'Hiral', 'female', 0, 9, 1988, 'Karamsad', '1', '14', '98', '98', 2147483647, 'hiral@gmail.com', 'dr4.png', 'hiral'),
(12, 'friend', 'Rinkal', 'female', 0, 9, 1994, 'Khambhat', '1', '14', '98', '98', 2147483647, 'rinkal@gmail.com', 'needyIMG_1081 1.jpg', 'rinkal');

-- --------------------------------------------------------

--
-- Table structure for table `mslider`
--

CREATE TABLE IF NOT EXISTS `mslider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `simg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mslider`
--

INSERT INTO `mslider` (`id`, `simg`) VALUES
(1, 'Matrimonial.jpg'),
(2, 'matbg.jpg'),
(3, 'mat1.jpeg'),
(4, 'bg12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE IF NOT EXISTS `ngo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `web` varchar(50) NOT NULL,
  `disp` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`id`, `name`, `web`, `disp`) VALUES
(1, 'BGMS', 'http://www.bgms.in/', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. '),
(2, 'AZAD Foundation', 'http://azadfoundation.com/', 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `nlogin`
--

CREATE TABLE IF NOT EXISTS `nlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `probdet` varchar(200) NOT NULL,
  `action` varchar(100) NOT NULL,
  `justice` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `ability` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `nlogin`
--

INSERT INTO `nlogin` (`id`, `fname`, `mname`, `lname`, `uname`, `age`, `address`, `probdet`, `action`, `justice`, `img`, `pass`, `ability`) VALUES
(1, 'dhruvi', 'shaunak', 'shah', 'dhruvi', 21, 'dakor', 'harrasement', 'no action', 'yes', 'IMG_1081 1.jpg', 'dhruvi', 'IT field jobs'),
(2, 'kruti', 'shaunak', 'shah', 'kruti', 18, 'dakor', 'harrasement', 'no action', 'yes', 'IMG-20170408-WA0018.jpg', 'kruti', 'Management'),
(3, 'vrunda', 'h', 'rami', 'virat', 22, 'dakor', 'no', 'no', 'yes', 'IMG-20170404-WA0005.jpg', 'adi', 'Painting and Embroidary'),
(4, 'sachi', 'b', 'patel', 'sachi', 22, 'vemar', 'no problem', 'nothing', 'yes', 'IMG_1081 1.jpg', 'sachi', 'Management'),
(5, 'rinkal', 'h', 'patel', 'rinkal', 23, 'khambhat', 'no problem', 'no action', 'yes', 'IMG-20170404-WA0005.jpg', 'rinkal', 'Tailoring'),
(6, 'hiral', 'M', 'Patel', 'hiral', 23, 'nadiad', 'no problem', 'no action', 'yes', 'IMG-20170404-WA0005.jpg', 'hiral', 'IT field jobs');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE IF NOT EXISTS `story` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `disp` varchar(500) NOT NULL,
  `full_story` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `title`, `img`, `disp`, `full_story`) VALUES
(1, 'Dr. Sunitha Krishnan', 'success1.jpg', 'Krishnan was a social worker since childhood. She would teach dance to mentally challenged children when she herself was just eight years old. She was gang-raped when she was 12. The horrific incident left her angry, but instead of lamenting over her fate, she started an anti-trafficking organization Prajwala which works with the police and other law enforcement agencies to fight commercial sexual exploitation.....', 'Krishnan was a social worker since childhood. She would teach dance to mentally challenged children when she herself was just eight years old. She  was gang-raped when she was 12. The horrific incident left her angry, but instead of lamenting over her fate, she started an anti-trafficking organization Prajwala  which works with the police and other law enforcement agencies to fight commercial sexual exploitation. Through her organization, she is actively rescuing and  rehabilitating victims of sex-trafficking into society. Krishnan was also recently awarded the prestigious 2014 Nelson Mandela-Graca Machel Innovation Awards on November 24 at Johannesburg, South Africa. She is the first Indian to receive this honour. Her inspiring story is a motivation to all of us, especially those who are still fighting the horrific memories of rape. '),
(2, 'Urmila', 'urmila.png', 'Urmila, a Dalit woman who hails from a small village in Madhya Pradesh, was living a normal life with her husband and three kids when one day a man broke into her house when she was alone and raped her. She somehow managed to escape and went to the police station where no one filed her complaint till morning. She then went to Harijan’s police station, and after a few hours, her complaint was registered. Since then, her life completely changed. The society.....', 'Urmila, a Dalit woman who hails from a small village in Madhya Pradesh, was living a normal life with her husband and three kids when one day a  man broke into her house when she was alone and raped her. She somehow managed to escape and went to the police station where no one filed her complaint  till morning. She then went to Harijan’s police station, and after a few hours, her complaint was registered. Since then, her life completely changed. The society  blamed her and the neighbours and community cut off all communication with her family. She decided to fight back, and with her husband’s support, she  managed to stand tall even in the most difficult situations. The criminals pressurized her to take the police complaint back, they even beat up Urmila and her  husband brutally, but she faced them bravely. Urmila is an inspiring example of how, no matter where you are and which community you belong to, you should  never be afraid to raise your voice against wrong. She is still putting up a brave fight for justice.'),
(3, 'Sita', 'gita.jpg', 'The 20-year old construction labourer Sita was kidnapped, gang-raped and thrown on a railway track to die by a co-worker she had a small fight with.She became physically disabled and was abandoned by her own mother because she was no longer of any “use” to her in earning money. Instead of getting defeated by this harsh reality,Sita not only sent her violators to jail but also rebuilt her own life from scratch.....', 'The 20-year old construction labourer Sita was kidnapped, gang-raped and thrown on a railway track to die by a co-worker she had a small fight with.  She became physically disabled and was abandoned by her own mother because she was no longer of any “use” to her in earning money. Instead of getting  defeated by this harsh reality, Sita not only sent her violators to jail but also rebuilt her own life from scratch. Wheelchair ridden Sita did not shy away from  filing a complaint against her mother too, who was abetting the criminals against her daughter. To give a new shape to her life, she joined a bridge school run by  Prayas NGO, and with the help of her immense passion and will power, she managed to secure admission in class eight at the government-run Kasturba Gandhi  Balika Vidyalaya (KGBV). Sita is an inspiration to all of us and proves that nothing can beat a strong willpower. '),
(4, 'Nahida', 'nahida.jpg', 'On the very next day after Nahida was married, she found out that her husband was having an affair with his aunt. When she inquired about the affair, the beating started. Her first pregnancy ended in a still birth which she believes was caused by the abusive behavior of her husband.Nahida was forced to undergo four abortions by her husband as he was having an extra-marital affair and did not want to have children with Nahida......', 'On the very next day after Nahida was married, she found out that her husband was having an affair with his aunt. When she inquired about the affair, the beating started. Her first pregnancy ended in a still birth which she believes was caused by the abusive behavior of her husband. Nahida was forced to undergo four abortions by her husband as he was having an extra-marital affair and did not want to have children with Nahida. Eventually,  she did have several children  but his violent behavior continued. Although she filed two separate cases for financial support from her husband, the first one in 2005, she is still waiting for any semblance of justice. Under  section 125 of the code of Criminal Procedure, Nahida received a maintenance order of 1000 rupees per month by the family court. Even today, in 2013, she  has never received a single rupee from her husband, as he refuses to appear in court reducing the maintenance order to a useless piece of paper. She filed another  in 2007 under another law, the Protection of Women from Domestic Violence, with the same lack of results. In this case, she never even got an order from the  court as her husband refused to appear. HUMSAFAR is still trying to help Nahida receive justice through the court system, a daunting task. Meanwhile, Humsafar has facilitated her training as a  professional cab driver where she can earn some minimal amount to pay for necessities and keep two of her children in school.'),
(5, 'Indian Acid Attack Victim Wins ‘International Wome', 'laxmi.jpg', 'What’s the worst that could happen if you reject a man’s sexual advances? He calls you an obscene name, gives you an obscene gesture, or maybe slanders you in a public forum? Yes, those are un-called for indeed. But imagine you lived in a country where if you rejected a man, he threw acid on you in an attempt to ruin your life? Sounds far-fetched, yet it is a shocking truth one young girl had the misfortune of living out.......', 'What’s the worst that could happen if you reject a man’s sexual advances? He calls you an obscene name, gives you an obscene gesture, or maybe  slanders you in a public forum? Yes, those are un-called for indeed. But imagine you lived in a country where if you rejected a man, he threw acid on you in an  attempt to ruin your life? Sounds far-fetched, yet it is a shocking truth one young girl had the misfortune of living out.  Laxmi is a 24 year old from India who was disfigured permanently when a man threw acid on her while she was waiting for a bus in New Delhi in 2005. She  was 16 at the time. All because she refused his romantic pleas. Perhaps someone ought to tell that guy he needs therapy for his abandonment issues…  Well it ain’t gonna be Laxmi, because she has become an unlikely spokesperson for other acid attack victims in India. They say “success is the best revenge” but  for Laxmi, it is more about showing other victims (mostly women) that there is life beyond tragedy, and power in sharing your story.  It is very common for female acid attacks to hide away in shame of their appearance, or even in some extreme cases, commit suicide. This was not an option for  Laxmi. She started speaking out about her story, making numerous TV appearances.  She also gathered 27,000 signatures on her Change.org petition which was launched in conjunction with the Stop Acid Attacks org in 2013 to curb acid sales,  and took her cause to the Indian Supreme Court. Laxmi’s petition led the Supreme Court to order the Indian central and state governments to regulate  immediately the sale of acid, and the Parliament to make prosecutions of acid attacks easier to pursue.');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desp` varchar(500) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` text NOT NULL,
  `desig` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `desp`, `name`, `img`, `desig`) VALUES
(1, 'Nice Experience', 'dhruvi', '', 'Owner'),
(2, 'nice', 'dhruvi', 'facial.jpg', 'owner'),
(3, 'Is is awesome', 'Mitesh', '', 'student');
