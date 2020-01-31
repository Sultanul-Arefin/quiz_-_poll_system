-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- হোষ্ট: localhost:3306
-- তৈরী করতে ব্যবহৃত সময়: জুল 07, 2019 at 02:37 PM
-- সার্ভার সংস্করন: 10.2.21-MariaDB-cll-lve
-- পিএইছপির সংস্করন: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- ডাটাবেইজ: `dhaka18_worldcup`
--

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `questions` varchar(333) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionA` varchar(22) CHARACTER SET utf8 NOT NULL,
  `optionB` varchar(22) CHARACTER SET utf8 NOT NULL,
  `optionC` varchar(22) CHARACTER SET utf8 NOT NULL,
  `optionD` varchar(22) CHARACTER SET utf8 NOT NULL,
  `correctAnswer` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `questions`
--

INSERT INTO `questions` (`id`, `questions`, `optionA`, `optionB`, `optionC`, `optionD`, `correctAnswer`) VALUES
(3, 'এবার বিশ্বকাপে মোট কয়টি দল অংশগ্রহণ করছে?', '৮টি', '৯টি', '১০টি', '১২টি', '3'),
(4, 'বিশ্বকাপে বাংলাদেশের প্রথম সেঞ্চুরিয়ান কে?', 'সাকিব আল হা', 'তামিম ইকবাল', 'মাহমুদউল্লা', 'মেহরাব হোসে', '3'),
(5, '২০১৯ বিশ্বকাপ কোন দেশে অনুষ্ঠিত হচ্ছে?', 'বাংলাদেশ', 'ইংল্যান্ড', 'অস্ট্রেলিয়া', 'ভারত', '2'),
(6, '', '', '', '', '', ''),
(7, '২০১৫ বিশ্বকাপের ফাইনাল ম্যাচটি কোথায় অনুষ্ঠিত হয়?', 'অ্যাডিলেড', 'ব্রিসবেন', 'ক্যানবেরা', 'মেলবোর্ন', '4'),
(14, 'ওয়ানডে ক্রিকেটে বাংলাদেশের শীর্ষ উইকেট শিকারী কে?', 'সাকিব', 'রাজ্জাক', 'মাশরাফি', 'রফিক', '3'),
(15, 'বিশ্বকাপ ক্রিকেটের বর্তমান চ্যাম্পিয়ান কে?', 'ভারত', 'পাকিস্তান', 'নিউজিল্যান্ড', 'অস্ট্রেলিয়া', '4'),
(16, '২০১১ বিশ্বকাপের উদ্ভোধনি ম্যাচটি কোন দেশের মাঠে হয়েছিল?', 'বাংলাদেশ', 'শ্রীলঙ্কা', 'পাকিস্তান', 'ভারত', '1'),
(17, '“জিতবে এবার জিতবে ক্রিকেট” বিশ্বকাপের কত আসরের গান?', '২০১৯', '২০০৭', '২০১৫', '২০১১', '4'),
(18, 'টেস্ট ও ওয়ানডে ক্রিকেটে শততম শতক করেন কে?', 'সৌরভ গাঙ্গুলি', 'শচিন টেন্ডুলকার', 'রিকি পন্টিং', 'হাসিম আমলা', '2'),
(19, 'বিশ্বের সর্বকনিষ্ঠ টেস্ট সেঞ্চুরীয়ান কে ?', 'কোহলী', 'পন্টিং', 'আফ্রিদি', 'আশরাফুল', '4'),
(20, '২০১৫ সালে বিশ্বকাপে ম্যান অব দ্য টুর্নামেন্ট কে হয়?', 'ভিরাট কোহলী', 'সাকিব আল হাসান', 'মিচেল স্টার্ক', 'কেন উইলিয়ামসন', '3'),
(21, 'বাংলাদেশের প্রথম টেস্ট অধিনায়ক কে?', 'জাবেদ ওমর', 'আকরাম খান', 'হাবিবুল বাশার', 'নাঈমুর রহমান দুর্জয়', '4'),
(22, 'টেস্ট ক্রিকেট শুরু হয় কবে ?', '১৮৭১', '১৮৭৭', '১৯৪৯', '১৮৬৫', '2'),
(23, 'টেস্ট এবং ওয়ানডে মিলে সর্বোচ্চ উইকেট শিকারী কে?', 'মুরালিধরন', 'চামিন্ডা ভাস', 'ম্যাকগ্রা', 'শেন ওয়ার্ন', '1'),
(24, 'তামিম ইকবাল উইজডেন ক্রিকেটার অফ দি ইয়্যার নির্বাচিত হন?', '২০১০', '১০১১', '১০১৮', '১০১৭', '2'),
(25, 'টি২০ ক্রিকেটে সাকিবের সেরা বোলিং ফিগার ৪-০-৬-৬। কোন দলের হয়ে?', 'সানরাইজার্স হায়দ্রাবা', 'ঢাকা ডায়নামাইটস', 'বার্বাডোজ ট্রাইডেন্টস', 'কলকাতা নাইট রাইডার্স', '3');

--
-- স্তুপকৃত টেবলের ইনডেক্স
--

--
-- টেবিলের ইনডেক্সসমুহ `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- স্তুপকৃত টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT)
--

--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
