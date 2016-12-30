-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-12-30 14:39:33
-- 服务器版本： 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bishexuanti`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL COMMENT '编号',
  `aname` varchar(20) NOT NULL COMMENT '姓名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE `message` (
  `mid` int(11) NOT NULL COMMENT '留言编号',
  `mcontent` varchar(300) NOT NULL COMMENT '留言内容',
  `fromStudent` varchar(20) NOT NULL COMMENT '发出者（学生）',
  `toTeacher` varchar(20) NOT NULL COMMENT '接收者（老师）',
  `mdate` int(11) NOT NULL COMMENT '发出时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `notice`
--

CREATE TABLE `notice` (
  `nid` int(11) NOT NULL COMMENT '编号',
  `ntitle` varchar(30) NOT NULL COMMENT '公告标题',
  `ncontent` varchar(250) NOT NULL COMMENT '公告内容',
  `ndate` datetime NOT NULL COMMENT '公告日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `notice`
--

INSERT INTO `notice` (`nid`, `ntitle`, `ncontent`, `ndate`) VALUES
(1, '【华软通知】2017年元旦放假通知', '各位同学：\r\n\r\n根据国务院发布关于2017年节假日安排的通知精神，结合我院2016-2017学年度校历安排，现将元旦放假时间和有关事项通知如下：\r\n一、放假时间：2016年12月31日至2017年1月2日放假，共3天。\r\n二、特别提醒：2017年1月3日（星期二）正式进入期末考试阶段，请同学们元旦放假前查看好期末考试安排，按时参加考试，切勿错过时间。元旦放假期间同时做好复习考试的准备。\r\n \r\n特此通知。请各位同学相互知照。', '2016-12-24 00:00:00'),
(2, '【华软通知】关于举办计算机水平考试模拟测试的通知', '各位考生：\n   教学保障处定于12月22日（星期四）下午15:30－16:30为报名参加2016年下半年计算机水平考试的同学举行计算机水平考试模拟测试。测试课室为S502、S503、S504、S508、U206、U208、U306、U308、U406、U408，希望报名的同学按时参加测试。\n参加测试的同学，请按附件安排进入课室参加测试（请使用“查找”功能）。\n如有疑问，请及时与教务处王坚老师联系：电话 87818101。', '2016-12-22 00:00:00'),
(3, '测试公告栏', '测试内容', '2016-12-23 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL COMMENT '编号',
  `snum` varchar(20) NOT NULL COMMENT '学号',
  `spassword` varchar(30) NOT NULL COMMENT '学生密码',
  `sname` varchar(20) NOT NULL COMMENT '姓名',
  `sage` int(11) NOT NULL COMMENT '年龄',
  `ssex` int(11) NOT NULL COMMENT '性别',
  `sclass` int(11) NOT NULL COMMENT '班级',
  `sdept` varchar(20) NOT NULL COMMENT '系别',
  `grade` int(11) DEFAULT NULL COMMENT '毕设成绩',
  `topid` int(11) NOT NULL COMMENT '已选题目',
  `ispass` int(11) DEFAULT NULL COMMENT '是否通过'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`sid`, `snum`, `spassword`, `sname`, `sage`, `ssex`, `sclass`, `sdept`, `grade`, `topid`, `ispass`) VALUES
(1, '1440112140', '6', 'yuan', 21, 1, 5, '软件工程系', NULL, 1, NULL),
(2, '1440112141', '6', 'bin', 22, 1, 5, '软件工程系', NULL, 1, NULL),
(3, '1440112143', '6', 'you', 22, 1, 5, '软件工程系', NULL, 2, NULL),
(4, '1440112142', '6', '随便', 22, 1, 5, '软件工程系', NULL, 2, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE `teacher` (
  `tid` int(11) NOT NULL COMMENT '编号',
  `tnum` varchar(20) NOT NULL COMMENT '工号',
  `tpassword` varchar(30) NOT NULL COMMENT '教师密码',
  `tname` varchar(20) NOT NULL COMMENT '姓名',
  `tage` int(11) NOT NULL COMMENT '年龄',
  `tsex` int(11) NOT NULL COMMENT '性别',
  `tdept` varchar(20) NOT NULL COMMENT '系别'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`tid`, `tnum`, `tpassword`, `tname`, `tage`, `tsex`, `tdept`) VALUES
(1, '6666', '6666', 'Joryun', 22, 1, '软件工程系'),
(2, '5555', '5555', 'Hello', 30, 1, '软件工程系');

-- --------------------------------------------------------

--
-- 表的结构 `topic`
--

CREATE TABLE `topic` (
  `topid` int(11) NOT NULL COMMENT '编号',
  `ttitle` varchar(30) NOT NULL COMMENT '课题标题',
  `tcontent` varchar(300) NOT NULL COMMENT '课题内容',
  `trequirement` varchar(200) NOT NULL COMMENT '课题需求',
  `tmodule` varchar(200) NOT NULL COMMENT '功能模块',
  `tid` int(11) NOT NULL COMMENT '指导老师'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `topic`
--

INSERT INTO `topic` (`topid`, `ttitle`, `tcontent`, `trequirement`, `tmodule`, `tid`) VALUES
(1, '毕业设计选题管理系统', '服务对象：毕业指导教师和准毕业生。 主要功能：权限管理、教师管理、学生管理。权限管理：有3个角色，教师、学生和管理员。 管理员分为超级管理员和部门管理员，超级管理员拥有最高权限，部门管理员负责管理自己部门（院系）. 教师拥有发布公告、出题、分配选题、查看并确认学生选题、上传资料、指导、评阅和答辩等权限.学生拥有查看可选题目、确认选题、查看公告、下载资料、查看指导意见、评阅分数和答辩分数等权限. 教师管理功能：发布公告、出题、分配选题、查看并确认学生选题、上传资料、指导意见、评阅和答辩. 学生管理功能：查看可选题目、确认选题、查看公告、下载资料、查看指导意见、查看评阅分数和答辩分数。\n', '功能要具有实用性和通用性。可根据业务需要扩展相关功能模块。', '主要功能：权限管理、教师管理、学生管理。', 1),
(2, 'test test test title', 'test test test content', 'test requirement', 'test module', 1),
(3, '云端备忘录设计与实现', '主要实现的功能包括：\r\n1）能够对文本、语音、图片、视频进行备忘保存、删除和修改。\r\n2）能够设置定时提醒功能。\r\n3）能够支持随时拍照、语音和视频录制的备忘保存。\r\n4）能够支持所有格式的内容搜索，包括文本、语音、图片、视频格式等内容的查询功能。', '', '', 1),
(4, '校园导游软件设计与实现', '为每年开学新生准备，基于本地、简单、快捷、全面、小巧的校园地理指引程序，便于新生快速了解自己的学校。\r\n', '', '', 1),
(5, '基于Android平台跑步运动软件的设计与实现', '研究Android平台下的GPS、陀螺仪等传感器，百度地图（高德地图）等技术，实现一款简单实用的跑步运动软件\r\n', '', '', 1),
(6, 'hello', 'hello world', 'hello requirement', 'hello module', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `index_topid` (`topid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`topid`),
  ADD KEY `foreign_tid` (`tid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号';
--
-- 使用表AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT COMMENT '留言编号';
--
-- 使用表AUTO_INCREMENT `notice`
--
ALTER TABLE `notice`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号', AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号', AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号', AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `topic`
--
ALTER TABLE `topic`
  MODIFY `topid` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号', AUTO_INCREMENT=7;
--
-- 限制导出的表
--

--
-- 限制表 `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `cons_topid` FOREIGN KEY (`topid`) REFERENCES `topic` (`topid`);

--
-- 限制表 `topic`
--
ALTER TABLE `topic`
  ADD CONSTRAINT `cons_tid` FOREIGN KEY (`tid`) REFERENCES `teacher` (`tid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
