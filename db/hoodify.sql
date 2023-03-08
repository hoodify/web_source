-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- 생성 시간: 23-03-08 04:29
-- 서버 버전: 10.4.22-MariaDB
-- PHP 버전: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `hoodify`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `activity`
--

CREATE TABLE `activity` (
  `activity_code` int(11) NOT NULL,
  `activity_name` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'activity_name',
  `activity_desc` varchar(500) CHARACTER SET utf8 NOT NULL DEFAULT 'activity_desc',
  `activity_img` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '/hoodify/img/identity/hooodify_mini.png	',
  `identity_code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `activity`
--

INSERT INTO `activity` (`activity_code`, `activity_name`, `activity_desc`, `activity_img`, `identity_code`) VALUES
(1, '정보 습득', '책이나 영상 등 여러 매체를 통해 새로운 정보를 얻습니다. 자신의 배경지식에 엮어 기억할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 1),
(2, '설명해주기', '알고 있는 것을 설명할 때 지식은 더 견고해집니다.', '/hoodify/img/identity/hooodify_mini.png	', 1),
(3, '적절한 유머', '꽤 괜찮았던 멘트가 있었다면 기록으로 남겨봅시다.', '/hoodify/img/identity/hooodify_mini.png	', 3),
(4, '써먹을만한 얘기', '재밌는 얘기나 농담을 기억해둔다면 적절한 때에 써먹을 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 3),
(5, '수작업', '자신이 하는 수작업에 대해 소개해봅시다. 특히 어려웠던 부분이나 정교한 작업에 대해서 기록해봅시다.', '/hoodify/img/identity/hooodify_mini.png	', 4),
(6, '성공적인 협상', '여러 조건들을 조율해 성공적인 협상을 이끕니다', '/hoodify/img/identity/hooodify_mini.png	', 5),
(7, '작품', '자신의 미적 감각을 활용합니다. 인테리어나 사진, 미술 작품 등에 발휘될 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 6),
(8, '주종목', '자신이 특별히 잘하는 게임이 있습니다. 이 게임에서는 누구보다 자신있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 7),
(9, '새로운 게임', '비슷한 장르나 완전히 새로운 게임을 시도할 수 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 7),
(10, '포스팅', '잘 아는 게임과 과련된 글을 작성합니다. 간단한 리뷰나 자신만의 공략 방법을 쓸 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 7),
(11, '통찰의 근원', '지혜를 얻는 자신만의 방법이 있습니다. 사람을 만나거나 책을 읽는 것 등이 될 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 8),
(12, '현명한 결정', '통찰력을 발휘해 현명한 결정을 내립니다. 이 결정은 두고두고 흐뭇한 마음이 들게합니다.', '/hoodify/img/identity/hooodify_mini.png	', 8),
(13, '새로운 도전', '각자의 삶에는 그 나름의 도전 과제들이 놓여져 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 9),
(14, '동료', '뜻을 함께하거나 나를 지원해주는 사람을 찾을 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 9),
(15, '시행착오', '정해지지 않은 길에는 수많은 시행착오가 기다립니다.', '/hoodify/img/identity/hooodify_mini.png	', 9),
(16, '에피소드', '새로운 도전은 새로운 이야기거리를 만들어냅니다. ', '/hoodify/img/identity/hooodify_mini.png	', 9),
(17, '더딘 움직임', ' 남들이 정신없이 바쁠 때 느긋하게 행동합니다. 남들과 다른 자신만의 속도가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 10),
(18, '낮잠', ' 해가 중천에 떠일 때 잠시 휴식을 취합니다.', '/hoodify/img/identity/hooodify_mini.png	', 10),
(19, '즉흥적', '남들이 빠듯하게 계획을 세우지만 자신은 즉흥적으로 처리하는 일들이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 11),
(20, '솔로 플레이', '혼자 영화를 보거나 여행을 가는 등 홀로 즐기는 일들이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 12),
(21, '나만의 관심사', '너드에게는 다른 것들을 사소하게 만드는 자신만의 관심사가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 13),
(22, '컴퓨터 작업', '컴퓨터와 인터넷만 있다면 어디서든 작업할 수 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 14),
(23, '새로운 장소', '회사나 집 이외에 새로 일할 장소를 물색합니다. 어떤 사람은 물가가 낮은 다른 나라를 선택하기도 합니다.', '/hoodify/img/identity/hooodify_mini.png	', 14),
(24, '가치관', '이상해보일 수 있는 말과 행동에는 자신만의 취향과 가치관이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 2),
(25, '마음 맞는 이', '드물게 자신을 이해해주는 사람을 만나기도 합니다.', '/hoodify/img/identity/hooodify_mini.png	', 2),
(26, '알바 경력', '다양한 알바 경력이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 15),
(27, '에피소드', '아르바이트를 하면서 생긱 여러 에피소드가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 15),
(28, '전문성', '자신이 전문적으로 다루고 있는 분야와 기술이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 16),
(29, '프로젝트', '자신의 전문 분야와 관련된 연구 프로젝트에 참여할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 16),
(30, '업데이트', '해당 분야의 최신 지식을 공부하고 다른 전문가들과 공유합니다.', '/hoodify/img/identity/hooodify_mini.png	', 16),
(31, '지식 전파', '자신이 가진 지식을 다른 사람에 알려주기로 할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 16),
(32, '글 조각 모음', ' 작은 글들이 모이고 다듬어져 하나의 완성된 글이 됩니다. 글을 쓰기로 한 주제의 작은 글 조각을 모읍니다.', '/hoodify/img/identity/hooodify_mini.png	', 17),
(33, '첨삭', ' 첫 글은 조악하기 마련입니다. 그 글들을 매끄럽게 다듬을 필요가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 17),
(34, '조사', '주제와 관련된 배경 지식을 공부하고 조사합니다.', '/hoodify/img/identity/hooodify_mini.png	', 17),
(35, '기고&출간&포스팅', ' 자신의 글을 다양한 채널을 통해 세상에 내어보입니다.', '/hoodify/img/identity/hooodify_mini.png	', 17),
(36, '전문 분야', '프리랜서로 일하는 자신의 전문 분야가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 18),
(37, '마케팅', '자신을 알리고 홍보하는 일도 프리랜서의 몫입니다.', '/hoodify/img/identity/hooodify_mini.png	', 18),
(38, '설계', '아이디어를 구상하고 구체적으로 설계합니다. 모호한 부분을 다듬고 사소한 것까지 결정을 내립니다.\r\n', '/hoodify/img/identity/hooodify_mini.png	', 19),
(39, '사색', '자신이 깊이 생각해보는 주제가 있습니다. 원리를 밝혀내고 해답을 구합니다.', '/hoodify/img/identity/hooodify_mini.png	', 20),
(40, '토론과 논쟁', '주제에 대해 다른 사람과 얘기해봅니다. 토론과 논쟁을 통해 사색에 깊이를 더합니다.\r\n', '/hoodify/img/identity/hooodify_mini.png	', 20),
(41, '사무', '자신이 담당해 처리하는 사무가 있습니다. 양식과 절차에 따라 빠르고 정확하게 처리합니다.', '/hoodify/img/identity/hooodify_mini.png	', 21),
(42, '나만의 커피', '특별히 즐기는 커피와 장소, 루틴 등이 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 23),
(43, '새로운 장소', ' 새로운 장소에서 먹는 커피는 색다른 경험을 줍니다. 커피를 즐길만한 새로운 장소를 물색합니다.', '/hoodify/img/identity/hooodify_mini.png	', 23),
(44, '새로운 커피', ' 전에는 먹어보지 않았던 새로운 커피를 찾아마셔봅니다. 새로운 커피 취향을 발견할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 23),
(45, '커피에 대한 이해', '아는 것이 많을수록 즐길거리도 많아집니다. 커피와 관련된 지식을 탐구합니다. 커피의 종류, 유통, 제조부터 커피의 브랜드와 역사 등까지 알아볼 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 23),
(46, '힙합 음악', '즐겨듣는 힙합 음악이나 좋아하는 아티스트가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 24),
(47, '공연 감상', '힙합 공연을 라이브로 감상합니다. 라이브 공연에서 오는 현장감은 오직 그곳에서만 느낄 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 24),
(48, '후드 코디', '자신이 즐겨 입는 후드 코디가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 25),
(49, '새로운 후드', '마음에 드는 후드를 물색하고 구입합니다. 원하는 디자인을 직접 커스텀할 수도 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 25),
(50, '치즈 요리', '치즈가 들어간 요리를 즐겨 먹습니다.', '/hoodify/img/identity/hooodify_mini.png	', 26),
(51, '치즈 구비', '직접 요리에 먹기위한 치즈를 물색하고 구입합니다.', '/hoodify/img/identity/hooodify_mini.png	', 26),
(52, '새로운 치즈', '이전에는 먹어보지 않았던 새로운 치즈나 치즈 요리를 찾아먹어봅니다.', '/hoodify/img/identity/hooodify_mini.png	', 26),
(53, '매운 맛', '즐겨먹는 매콤한 음식이 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 27),
(54, '새로운 음식', '이전에는 먹어보지 못한 매운 음식을 찾아먹습니다.', '/hoodify/img/identity/hooodify_mini.png	', 27),
(55, '민트맛', '특별히 즐겨먹는 민트맛 음식이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 28),
(56, '새로운 민트 음식', '민트 풍미가 있는 새로운 음식을 찾아먹습니다.', '/hoodify/img/identity/hooodify_mini.png	', 28),
(57, '오늘은 치킨', '치킨을 먹습니다. 식사로나 간식으로나 손색이 없습니다.', '/hoodify/img/identity/hooodify_mini.png	', 29),
(58, '새로운 치킨', '새로운 치킨을 먹어보거나 새로운 음식점의 치킨을 시켜봅니다.', '/hoodify/img/identity/hooodify_mini.png	', 29),
(59, '즐겨먹는 샐러드', '특별히 즐겨먹는 샐러드 재료나 드레싱의 조합이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 30),
(60, '새로운 시도', '전에 먹어보지 않았던 새로운 샐러드를 먹어봅니다.', '/hoodify/img/identity/hooodify_mini.png	', 30),
(61, '덜어내기', '삶에서 덜어낼 수 있는 것들을 과감히 덜어냅니다.', '/hoodify/img/identity/hooodify_mini.png	', 31),
(63, '자취 생활', '쓰레기를 버리고 청소를 합니다. 세탁을 하고 설거지를 합니다. 자취인이 되면서 사소한 집안일까지 직접 해야합니다.', '/hoodify/img/identity/hooodify_mini.png	', 32),
(64, '자취 인테리어', '취향에 맞는 가구와 인테리어 용품을 들여 나만의 방으로 꾸밉니다.', '/hoodify/img/identity/hooodify_mini.png	', 32),
(65, '식사', '직접 끼니를 챙겨야합니다. 요리를 해먹거나 간단히 사먹습니다. 너무 귀찮으면 생략하기도 합니다.', '/hoodify/img/identity/hooodify_mini.png	', 32),
(66, '지인 초대', '자취 방에 다른 사람을 초대해볼 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 32),
(67, '첫 만남', '각자 다양한 길로 고양이를 만납니다. 입양을 하거나 길고양이를 들이기도 하며 누구는 간택을 당하기도 합니다.', '/hoodify/img/identity/hooodify_mini.png	', 33),
(68, '기록 남기기', '함께했던 순간이나 성장 과정을 사진과 영상으로 남깁니다.', '/hoodify/img/identity/hooodify_mini.png	', 33),
(69, '늦잠', '늦게 잠들어 늦게 일어납니다. 아침부터 활동하는 사람들과는 다른 자신만의 수면 주기가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 34),
(70, '저녁 산책', '조용한 밤에 하는 산책은 색다른 느낌을 줍니다.', '/hoodify/img/identity/hooodify_mini.png	', 34),
(71, '절약과 재활용', '사기 전에 생각하고 버리기 전에 생각합니다. 이 사람들에게 허투루 쓰이는 물건은 없습니다.', '/hoodify/img/identity/hooodify_mini.png	', 35),
(72, '방콕', '쉬는 날 집 안에 꼼짝않고 있습니다. 음식과 할 거리를 준비해 즐깁니다.', '/hoodify/img/identity/hooodify_mini.png	', 36),
(73, '정보 수집', '자신이 지원하려는 회사와 직무에 무엇이 필요한지 조사합니다. ', '/hoodify/img/identity/hooodify_mini.png	', 37),
(74, '준비', '필요한 지원 자격을 갖춥니다. 숙지할 내용을 다시 점검합니다. ', '/hoodify/img/identity/hooodify_mini.png	', 37),
(75, '걸어다니기', '웬만한 거리는 걸어다닙니다. 먼 곳은 대중교통을 이용합니다', '/hoodify/img/identity/hooodify_mini.png	', 38),
(76, '허약함', '많은 경험으로 자신의 몸 상태에 대해 알고 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 39),
(77, '모태솔로 빌드', '모태솔로가 된 배경에는 특별한 성격이나 배경이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 40),
(78, '다른 관심거리', '허전함을 느끼지 못하게하는 자신의 관심사가 있을 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 40),
(79, '사건 사고', '자신에게 닥친 여러 사건 사고들이 있습니다. 삶의 난이도를 높입니다.', '/hoodify/img/identity/hooodify_mini.png	', 41),
(80, '불운 관리', '불운을 받아들이는 방식은 사람에 따라 다릅니다.', '/hoodify/img/identity/hooodify_mini.png	', 41),
(81, '백수의 삶', '집에 머물며 시간을 보냅니다. ', '/hoodify/img/identity/hooodify_mini.png	', 42),
(82, '새로운 일감', '권태에서 벗어나기 위해 또는 돈을 벌기 위해 새로운 일감을 찾아나섭니다.', '/hoodify/img/identity/hooodify_mini.png	', 42),
(83, '에피소드', '가난한 환경에서 생기는 여러 에피소드가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 43),
(84, 'DIY', '직접 조립하고 만들어낸 가구나 물건이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 44),
(85, '방송 시청', '즐겨보는 방송인이나 콘텐츠가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 45),
(86, '소통', '메시지나 후원 등을 통해 방송인과 소통합니다.', '/hoodify/img/identity/hooodify_mini.png	', 45),
(87, '여행', '새로운 장소를 방문하면서 그곳의 문화와 음식을 즐깁니다.', '/hoodify/img/identity/hooodify_mini.png	', 46),
(88, '캠핑', '음식과 장비를 준비하고 캠핑에 나섭니다. 날씨와 장소에 따라 다양한 무드를 느낄 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 47),
(89, '캠핑 음식', '캠핑 음식은 캠핑을 하는 중요한 이유 중 하나입니다. 캠핑을 하며 먹는 음식은 이전에 먹던 것과는 다른 느낌을 줍니다.', '/hoodify/img/identity/hooodify_mini.png	', 47),
(90, '산책', '그날의 날씨를 즐기며 사람을 구경하기도 하며 머릿속의 생각을 정리하기도 합니다.', '/hoodify/img/identity/hooodify_mini.png	', 48),
(91, '새로운 코스', '이전에는 다녀보지 않았던 새로운 길을 걸어봅니다. ', '/hoodify/img/identity/hooodify_mini.png	', 48),
(92, '사진 남기기', '풍경이나 인물 등 자신이 사진으로 남기는 것들이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 49),
(93, '앨범 정리', '찍어두었던 사진을 정리합니다. 지울 것은 지우고 주제에 맞게 분류합니다.', '/hoodify/img/identity/hooodify_mini.png	', 49),
(94, '탐색과 수집', '원하는 물건을 찾아 구합니다.', '/hoodify/img/identity/hooodify_mini.png	', 50),
(95, '목소리', '자신의 좋은 목소리를 들려주는 방법이 있습니다. 노래를 부르거나 팟캐스트 콘텐츠를 만듭니다.', '/hoodify/img/identity/hooodify_mini.png	', 51),
(96, '방황', '각자 다양한 이유와 고민을 가지고 방황합니다. 자신이 방황하고 있는 문제에 대해 얘기해봅시다.', '/hoodify/img/identity/hooodify_mini.png	', 52),
(97, '무난한 패션', '즐겨입는 무난한 코디가 있습니다. 뒤쳐지지도 않고 앞서 나가지도 않습니다.', '/hoodify/img/identity/hooodify_mini.png	', 53),
(98, '새로운 장소', '머물던 곳을 떠나 새로운 곳으로 이동합니다. 건강이나 경제적 조건 또는 새로운 도전 등의 이유가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 54),
(99, '새로운 사람', '새로운 장소에서 새로운 사람을 만납니다.', '/hoodify/img/identity/hooodify_mini.png	', 54),
(100, '소지품 정리', '짐이 무거우면 옮기기 불편합니다. 꼭 필요한 것을 추려 짐을 정리합니다.', '/hoodify/img/identity/hooodify_mini.png	', 54),
(101, '기획', '실현하고자 하는 아이디어가 있습니다. 그 방법을 모색합니다. ', '/hoodify/img/identity/hooodify_mini.png	', 55),
(102, '동료가 되어라', '상품이나 서비스를 만들어내는 일은 결코 쉽지 않습니다. 뜻을 모아 험난한 여정을 함께할 동료를 구합니다. ', '/hoodify/img/identity/hooodify_mini.png	', 55),
(103, '결과물', '어떻게든 결과물을 만들어냅니다. 이를 바탕으로 다시 다음 방향을 설정합니다.', '/hoodify/img/identity/hooodify_mini.png	', 55),
(104, '투자 받기', '수익이 나기 전까지 운영에 필요한 자금을 구합니다.', '/hoodify/img/identity/hooodify_mini.png	', 55),
(105, '프로젝트', '프로젝트에 참여합니다. 메인 프로젝트가 있고 여유가 있다면 사이드 프로젝트도 찾아볼 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 56),
(106, '개인 레퍼런스', '작성했던 코드를 자신의 방법으로 잘 정리합니다.', '/hoodify/img/identity/hooodify_mini.png	', 56),
(107, '이스터에그', '상황에 따라 자신만의 메시지를 코드에 남겨둘 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 56),
(108, '재배', '자신이 가꾸는 작물이 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 57),
(109, '판매', '재배한 작물을 판매합니다.', '/hoodify/img/identity/hooodify_mini.png	', 57),
(110, '딱 맞는 옷', '밖에 나갈 때 항상 입는 옷이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 58),
(111, '문제', '자신에게 닥친 여러 문제들이 있습니다. 문제 해결의 시작은 그 문제를 정의하는 것입니다.', '/hoodify/img/identity/hooodify_mini.png	', 59),
(112, '도움 요청', '자신의 상황을 알리고 도움을 요청한다면 예상치못한 해결책을 별견할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 59),
(113, '게임 플레이', '각자 즐기는 게임이 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 60),
(114, '게임 리뷰', '플레이한 게임에 대해 평가를 내려봅니다. 어떤 좀이 좋았고 어떤 점이 아쉬웠는지 구체적으로 생각해봅니다. 훌륭한 게임은 유저와 제작자간의 대화를 통해 완성됩니다.', '/hoodify/img/identity/hooodify_mini.png	', 60),
(115, '행사와 이벤트', '좋아하는 게임과 관련된 행사나 이벤트에 참여해봅니다.', '/hoodify/img/identity/hooodify_mini.png	', 60),
(116, '같이하는 재미', '다른 사람과 함께하면 게임의 즐거움은 배가됩니다.', '/hoodify/img/identity/hooodify_mini.png	', 60),
(117, '빈티지 스타일', '빈티지 스타일로 외출합니다. ', '/hoodify/img/identity/hooodify_mini.png	', 61),
(118, '빈티지 아이템 구입', '빈티지 옷을 물색하고 구입합니다.', '/hoodify/img/identity/hooodify_mini.png	', 61),
(119, '교양 쌓기', '다양한 교육, 문화, 사회 활동을 통해 교양을 쌓습니다.', '/hoodify/img/identity/hooodify_mini.png	', 62),
(120, '클래식 음악', '클래식 음악을 즐깁니다. 좋아하는 장르나 작곡가의 작품이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 63),
(121, '클래식 코디', '클래식 스타일로 입는 코디가 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 63),
(122, '클래식 인테리어', '클래식 스타일로 꾸민 인테리어가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 63),
(123, '헤어스타일', '자신에게 어울리는 머리 스타일을 압니다. 머리를 단장하는 것만으로 인상이 달라집니다.', '/hoodify/img/identity/hooodify_mini.png	', 64),
(124, '코디', '자신의 취향과 체형에 맞게 옷을 입습니다. 다양한 시도를 통해 어울리는 코디를 발견합니다.', '/hoodify/img/identity/hooodify_mini.png	', 64),
(125, '연구와 시도', '여러 스타일링 방법에 대해서 배웁니다. 전문가의 콘텐츠를 보거나 직접 조언을 구하기도 합니다.', '/hoodify/img/identity/hooodify_mini.png	', 64),
(126, '오늘의 코디', '즐겨입는 비즈니스 캐주얼 코디가 있습니다. 일을 하거나 외출을 할 때 입습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 65),
(127, '새로운 코디', '괜찮은 비즈니스 캐주얼 옷들을 물색하고 구입합니다.', '/hoodify/img/identity/hooodify_mini.png	', 65),
(128, '오버핏 코디', '자신이 즐겨입는 오버핏 코디가 있습니다. 외출할 때 챙겨있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 66),
(129, '오버핏 코디 물색', '괜찮은 코디를 찾고 마음에 드는 것을 구입합니다.', '/hoodify/img/identity/hooodify_mini.png	', 66),
(130, '모임', '약속을 잡고 사람을 만납니다. 이런저런 얘기를 하면서 삶의 활력을 얻습니다.', '/hoodify/img/identity/hooodify_mini.png	', 67),
(131, '얘기거리', '큰 사건부터 사소한 일까지 이런 저런 얘기거리들을 쌓아둡니다. 드라마나 영화, 유튜나 콘텐츠, 세계의 사건 사고 등을 보고 듣습니다.', '/hoodify/img/identity/hooodify_mini.png	', 67),
(132, '모임 약속', '약속을 잡고 사람을 만납니다. 얘기를 나누며 삶의 활력을 얻습니다.', '/hoodify/img/identity/hooodify_mini.png	', 68),
(133, '새로운 사람', '새로운 사람을 사귑니다. 삶에 새로운 활력과 흥미로운 이야깃거리를 가져다줍니다.', '/hoodify/img/identity/hooodify_mini.png	', 68),
(134, '자신의 역할', '자신이 속한 조직과 거기에서 맡은 역할이 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 69),
(135, '만담꾼의 이야기', '재밌는 얘기를 다른 사람에게 들려줍니다. ', '/hoodify/img/identity/hooodify_mini.png	', 70),
(136, '이야깃거리 담기', '흥미로운 에피소드를 찾아 자신의 이야기 리스트에 추가합니다.', '/hoodify/img/identity/hooodify_mini.png	', 70),
(137, '혼자 있기', '밖에 나가 다른 사람을 만나기 보다는 집에 머물며 즐기는 일이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 71),
(138, '상황 피하기', '부담스러운 약속이나 만남을 피합니다. ', '/hoodify/img/identity/hooodify_mini.png	', 72),
(139, '해야할 일', '부족한 에너지지만 꼭 해야할 일에 씁니다. ', '/hoodify/img/identity/hooodify_mini.png	', 72),
(140, '들을 줄 아는 것', ' 무작정 말하는 것은 쉽습니다. 어려운 것은 잘 듣는 능력입니다. 다른 사람의 얘기를 듣고 무엇을 말하는지 깊이 이해합니다.', '/hoodify/img/identity/hooodify_mini.png	', 73),
(141, '서포팅', '자신이 서포트하는 사람과 작업이 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 74),
(142, '할 말은 한다', '남을 의식하지 않고 했던 행동이나 말이 있습니다. 다른 사람들은 눈치를 보거나 몸을 사리느라 하지 못했던 것들입니다.', '/hoodify/img/identity/hooodify_mini.png	', 75),
(143, '출가', '집을 떠나 홀로 머물 곳을 구해 삶을 꾸려갑니다. ', '/hoodify/img/identity/hooodify_mini.png	', 76),
(144, '경제 활동', '돈을 벌며 경제적으로 독립합니다.', '/hoodify/img/identity/hooodify_mini.png	', 76),
(145, '홀로서기', '관계에 집착하거나 의존하지 않습니다. 홀로설 수 있는 사람들간의 관게가 더 건강할 수 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 76),
(146, '예술 활동', '자신의 분야에서 예술 활동을 합니다. 공연을 하거나 창작물을 만들어냅니다. ', '/hoodify/img/identity/hooodify_mini.png	', 77),
(147, '마감 맞추기', '미루다 마감에 맞춰 일을 끝냅니다. 이 순간만큼은 누구보다 집중하고 최고의 효율을 냅니다.', '/hoodify/img/identity/hooodify_mini.png	', 78),
(148, '영감의 원천', '영감을 얻어내는 자신만의 방법이 있습니다. 새로운 사람을 만나거나 문화를 즐기는 것, 또는 어떤 생활의 루틴일 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 79),
(149, '모든 것은 계획으로부터', '계획을 세우고 차근차근 실현합니다.', '/hoodify/img/identity/hooodify_mini.png	', 80),
(150, '피드백', '자신이 세웠던 계획을 평가하고 무엇이 좋았고 무엇이 부족했는지 검토해봅니다.', '/hoodify/img/identity/hooodify_mini.png	', 80),
(151, '가지치기', '실현 가능한 것과 아닌 것을 분별할 수 있습니다. 때로는 현실적으로 불가능한 것들이 무리하게 진행되지 않도록 제어합니다. ', '/hoodify/img/identity/hooodify_mini.png	', 81),
(152, '마무리짓기', ' 마무리지어지지 못한 일들은 그것이 현실적으로 다뤄지지 않았기 때문입니다. 반대로 어떤 결과든 마무리지어진 일들은 현실적으로 다뤄진 것들입니다.', '/hoodify/img/identity/hooodify_mini.png	', 81),
(153, '식사 약속', '사람을 소개하기 위한 자리를 마련합니다.', '/hoodify/img/identity/hooodify_mini.png	', 82),
(154, '새로운 사람', '새로운 사람을 만나 알아갑니다.', '/hoodify/img/identity/hooodify_mini.png	', 82),
(155, '궁여지책', '지출을 아끼는 자신만의 방법이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 83),
(156, '실현', '자신이 작성한 설계도에 따라 대상이 만들어지는 과정을 관찰합니다. 그리고 그것을 바탕으로 자신의 설계 과정을 피드백합니다.', '/hoodify/img/identity/hooodify_mini.png	', 19),
(157, '풍요로움', '보통 사람들과는 다른 풍요로운 환경이 주어집니다.', '/hoodify/img/identity/hooodify_mini.png	', 84),
(158, '남다른 피지컬', '남다른 피지컬로 자신이 인자강이라는 것을 깨닫게되는 순간이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 85),
(159, '훈련', '몸의 잠재력을 끌어올리기 위해 갈고 닦습니다.', '/hoodify/img/identity/hooodify_mini.png	', 85),
(160, '집안 음식', '가족을 위한 식사를 차립니다.', '/hoodify/img/identity/hooodify_mini.png	', 86),
(161, '청소', '집 곳곳을 청소하며 청결한 상태를 유지합니다.', '/hoodify/img/identity/hooodify_mini.png	', 86),
(162, '배달 완료', 'act 물건을 배달합니다. 자신이 주로 맡는 지역이나 배달 물품이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 87),
(163, '일러스트레이팅', '어떤 주제나 요청에 맞는 일러스트를 그립니다.', '/hoodify/img/identity/hooodify_mini.png	', 88),
(164, '관리', '적절한 식단과 운동으로 최고의 상태를 유지합니다.', '/hoodify/img/identity/hooodify_mini.png	', 89),
(165, '공부와 훈련', '스타일링과 연기, 워킹과 포즈에 대해 연구하고 훈련합니다.', '/hoodify/img/identity/hooodify_mini.png	', 89),
(166, '콘텐츠 기획', '어떤 콘텐츠를 어떻게 제작할지 여러 아이디어를 내고 다듬습니다.', '/hoodify/img/identity/hooodify_mini.png	', 90),
(167, '콘텐츠 제작', '다듬어진 아이디어를 바탕으로 자신만의 콘텐츠를 만들어냅니다. ', '/hoodify/img/identity/hooodify_mini.png	', 90),
(168, '기획', '여러 자원과 일정을 고려해 프로젝트를 기획합니다.', '/hoodify/img/identity/hooodify_mini.png	', 91),
(169, '팀플레이', '프로젝트와 관련된 사람들에게 내용을 전달하고 협업합니다.', '/hoodify/img/identity/hooodify_mini.png	', 91),
(170, '게임 개발', '자신이 개발에 참여한 게임과 거기서 맡은 역할이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 92),
(171, '사업', '자신이 제공하는 상품이나 서비스가 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 93),
(172, '요리', '재료를 다듬어 요리를 만듭니다. ', '/hoodify/img/identity/hooodify_mini.png	', 94),
(173, '새로운 요리', '새로운 음식을 먹어보고 새로운 음식을 만들어봅니다.', '/hoodify/img/identity/hooodify_mini.png	', 94);

-- --------------------------------------------------------

--
-- 테이블 구조 `category`
--

CREATE TABLE `category` (
  `category_code` int(11) NOT NULL,
  `category_name` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'category_name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `category`
--

INSERT INTO `category` (`category_code`, `category_name`) VALUES
(9, '가치관'),
(1, '능력'),
(21, '상태'),
(17, '생활'),
(16, '성격'),
(10, '성향'),
(18, '습관'),
(5, '신체'),
(6, '예술'),
(22, '음식'),
(3, '인간관계'),
(23, '자기 관리'),
(2, '지성'),
(19, '직업'),
(8, '취미'),
(20, '취향'),
(11, '태도');

-- --------------------------------------------------------

--
-- 테이블 구조 `caution`
--

CREATE TABLE `caution` (
  `caution_code` int(10) NOT NULL,
  `caution_name` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'caution_name',
  `caution_desc` varchar(500) CHARACTER SET utf8 NOT NULL DEFAULT 'caution_desc',
  `caution_img` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '/hoodify/img/identity/hooodify_mini.png	',
  `identity_code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `caution`
--

INSERT INTO `caution` (`caution_code`, `caution_name`, `caution_desc`, `caution_img`, `identity_code`) VALUES
(1, '잘난척', ' 자신의 지식을 지나치게 뽐낸다면 잘난척하는듯한 인상을 남길 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 1),
(2, '무례함', '다른 사람을 희화화하고 놀리는 유머는 그 사람을 불쾌하게 만들 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 3),
(3, '가벼워보임', ' 가볍고 얕은 유머는 진중하지 못한 사람이라는 인상을 줍니다.', '/hoodify/img/identity/hooodify_mini.png	', 3),
(4, '까다로움', '상대에게 손해라는 느낌이 들게 하거나 매번 지나치게 조건을 따진다면 까다로운 사람이라는 평을 얻게될 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 5),
(5, '불편함', '때로 편리함과 아름다움은 상반되는 요소입니다. 아름다움을 위해 편리함을 포기해야할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 6),
(6, '불안정', '안정적인 모험은 없습니다. 모험의 본질은 그 불확실함에 있습니다. 하지만 상황을 정확히 인지하고 관리해야합니다.', '/hoodify/img/identity/hooodify_mini.png	', 9),
(7, '리스크', ' 때로는 무모한 도전으로 많은 것을 잃기도 합니다.', '/hoodify/img/identity/hooodify_mini.png	', 9),
(8, '시간 낭비', '적절한 시기를 기다리며 충전하고 있는지, 아니면 그저 시간을 낭비하고 있는지 분별해야합니다.', '/hoodify/img/identity/hooodify_mini.png	', 10),
(9, '오해와 비난', '느긋한 모습은 게으르고 일을 맡길 사람이 되지 않는다는 평가를 받을 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 10),
(10, '준비되지 않음', '정작 필요한 때에 준비되지 않아 기회를 놓칠 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 11),
(11, '고립', '혼자 지내는 것을 고집하면서 사회적으로 점점 고립될 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 12),
(12, '낮은 사회성', '꾀죄죄한 패션과 부족한 말주변이 사회성이 떨어지는 사람이라는 느낌을 주기도 합니다.', '/hoodify/img/identity/hooodify_mini.png	', 13),
(13, '불안정', '정착하지 않는 떠돌이 생활은 안정적이지 않을 수 있습니다.\r\n', '/hoodify/img/identity/hooodify_mini.png	', 14),
(14, '갈등', ' 때로는 무례한 말과 행동으로 굳이 겪어도 되지 않을 문제에 휩싸이기도 합니다.', '/hoodify/img/identity/hooodify_mini.png	', 2),
(15, '가벼운 마음', '잠깐 하고 마는 일이라 여기고 가볍게 생각 할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 15),
(16, '좁은 시야', '한 분야에만 매몰되어 시야가 좁아질 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 16),
(17, '스트레스', '창작의 고통은 뼈를 깎습니다. 심한 스트레스에 매몰되지 않도록 관리해야합니다.', '/hoodify/img/identity/hooodify_mini.png	', 17),
(18, '박봉', '글만으로 먹고 산다는 것은 어려운 일입니다.', '/hoodify/img/identity/hooodify_mini.png	', 17),
(19, '불안정', '고용이 보장되지 않기 때문에 수입이 불안정할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 18),
(20, '완벽주의', '설계하는 대상에 따라서는 빠르게 시도하고 보완하는 것이 나을 수 있습니다. 설계는 설계를 위한 것이 아니라 실제로 만들어지기 위한 것입니다.', '/hoodify/img/identity/hooodify_mini.png	', 19),
(21, '현학적', '어려운 말들이 자신의 지식을 뽐내려는 느낌을 줄 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 20),
(22, '탁상공론', '때로는 몸으로 배울 필요가 있습니다. 뜬구름 잡는 소리와 탁상공론으로 이리저리 재기만하다 시간만 낭비해서는 안 됩니다.', '/hoodify/img/identity/hooodify_mini.png	', 20),
(23, '권태', '오랫동안 반복적인 업무를 하다보면 권태에 빠질 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 21),
(24, '카페인 과다', '커피에 있는 카페인은 수면을 방해하거나 소화에 좋지 못할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 23),
(25, '겉멋', '힙합이 추구하는 저항과 자유는 단순히 겉멋을 위한 것이 아닙니다. ', '/hoodify/img/identity/hooodify_mini.png	', 24),
(26, '비격식', '격식을 갖춰야하는 자리에 후드는 어울리지 않는 복장일 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 25),
(27, '소화불량', '자극적인 맛은 위에 부담을 줄 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 27),
(28, '기이한 취향', '민트 풍미를 치약에 비유하며 이상한 취향을 가졌다는 평가를 받기도 합니다.', '/hoodify/img/identity/hooodify_mini.png	', 28),
(29, '영양 불균형', '많은 끼니를 치킨으로 때우는 습관을 건강에 불균형을 초래할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 29),
(30, '단조로움', '미니멀 디자인은 단순하고 무미건조하다는 평가를 받기도 합니다.', '/hoodify/img/identity/hooodify_mini.png	', 31),
(31, '방탕함', '혼자 지내면서 지저분하거나 게을러질 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 32),
(32, '털날림', '고양이 털은 지저분해보일 수 있고 누군가에게는 알레르기를 일으키기도 합니다.', '/hoodify/img/identity/hooodify_mini.png	', 33),
(33, '일정 관리', ' 평범하지 않은 생활 패턴은 다른 일정을 조율하는 데에 문제가 될 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 34),
(34, '건강', '몸에 맞지 않는 수면패턴은 건강을 해칠 수 있습니다.\r\n', '/hoodify/img/identity/hooodify_mini.png	', 34),
(35, '인색함', '지나치게 아끼면서 인색하다는 평가를 받을 수도 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 35),
(36, '무기력', '집 안에만 머물다보면 몸과 마음이 무기력해질 수 있습니다. 적절한 환기가 필요한 시점일지 모릅니다.', '/hoodify/img/identity/hooodify_mini.png	', 36),
(37, '불안정', '취업을 준비하는 기간이 길어지면서 불안해지고 자존감이 낮아질 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 37),
(38, '불편함', '가족이 생기거나 이동이 잦은 일을 할 경우 불편할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 38),
(39, '병가', '몸이 아파 다른 일정이나 계획에 지장이 생길 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 39),
(40, '쑥맥', '어색한 자리에서 말과 행동이 이상해집니다. 때로는 무리수를 두어 분위기를 망치기도 합니다.', '/hoodify/img/identity/hooodify_mini.png	', 40),
(41, '무기력', '자신의 처지를 비관하고 무기력에 빠질 수 있습니다.\r\n', '/hoodify/img/identity/hooodify_mini.png	', 41),
(42, '불운의 피해자', '삶을 불운의 연속으로 여기며 남들에게 동정받는 것에 빠질 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 41),
(43, '빈곤', '주변의 지원이나 모아둔 돈이 없다면 빈곤에 시달릴 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 42),
(44, '무기력', '무기력에 빠져 모든 일에 의욕을 잃게될 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 42),
(45, '낮은 자존감', '일하지 않은 시간이 오래된다면 자존감이 떨어질 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 42),
(46, '자포자기', '집의 경제적 여견을 비관하면서 자포자기할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 43),
(47, '안전 사고', '무겁고 날카로운 물건을 다룰 때 생기는 안전 사고에 유의해야합니다.', '/hoodify/img/identity/hooodify_mini.png	', 44),
(48, '과몰입', '방송인과 콘텐츠에 지나치게 몰입하면서 실수를 저지를 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 45),
(49, '사건사고', '새로운 곳에 머물면서 여러가지 예상치못한 문제가 생길 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 46),
(50, '위법', ' 캠핑이 가능한 곳인지, 취사가 가능한 곳인지 등을 확인할 필요가 있습니다. 법에 위배되지 않게 캠핑을 즐겨야합니다.', '/hoodify/img/identity/hooodify_mini.png	', 47),
(51, '방황을 위한 방황', '방황 속에서도 결국 결정을 내리고 길을 나서야합니다. ', '/hoodify/img/identity/hooodify_mini.png	', 52),
(52, '개성 없음', '옷은 때로 자신의 취향과 가치관을 표현할 수 있는 수단입니다. ', '/hoodify/img/identity/hooodify_mini.png	', 53),
(53, '불안정', '시장에 자리를 잡고 안정적인 수익을 얻기 까지는 항상 불안정한 상태입니다.', '/hoodify/img/identity/hooodify_mini.png	', 55),
(54, '사람 문제', '스타트업에서 사람 문제는 사업의 존폐를 좌우할 정도로 치명적일 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 55),
(55, '운동부족', '건강하지 못한 몸매는 이 분야 사람들의 공통된 이미지라고 생각하는 사람이 있습니다. 지나치게 오랬동안 앉아 작업하면서 건강의 균형을 잃을 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 56),
(56, '오래된 방식', '하던 방식을 바꾸고 새로운 것을 도입하는 것은 부담스럽고 힘든 과정이 될 수 있습니다. 하지만 이런 시도들을 하지 않는다면 더 이상의 발전은 없습니다.', '/hoodify/img/identity/hooodify_mini.png	', 56),
(57, '외곽지역', '도심에서 멀리 떨어져 생활하게됩니다. 교통이 불편하거나 도심에서 얻을 수 있는 것들에 대한 접근성이 떨어질 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 57),
(58, '식상함', '변화없는 모습은 식상하고 고리타분한 사람으로 보여질 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 58),
(59, '자포자기', '너무 많은 문제에 압도되어 의욕을 잃고 포기하기에 이릅니다.', '/hoodify/img/identity/hooodify_mini.png	', 59),
(60, '중독', '게임에 너무 빠져 일상 생활의 균형을 잃지 않도록 주의해야합니다.', '/hoodify/img/identity/hooodify_mini.png	', 60),
(61, '낡음', '빈티지 패션은 낡고 허름한 인상을 주기도 합니다.', '/hoodify/img/identity/hooodify_mini.png	', 61),
(62, '고지식함', '지나치게 격식을 차리고 교양과 매너에 집착하면서 고지식하다는 평가를 받을 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 62),
(63, '올드함', '클래식한 취향은 올드하고 구식이라는 인상을 줄수도 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 63),
(64, '과소비', '옷에 너무 많은 돈을 쓰면서 다른 생활에 지장이 생길 수 있습니다. 모든 소비는 자신의 소득 수준에 맞춰 이뤄져야 합니다.', '/hoodify/img/identity/hooodify_mini.png	', 64),
(65, '사람 문제', '팀 프로젝트는 잘못된 의사 결정만큼 팀원들간의 갈등으로 실패하는 경우가 많습니다. 팀 플레이어는 항상 팀 간의 화합에 신경써야합니다. ', '/hoodify/img/identity/hooodify_mini.png	', 69),
(66, '고립', ' 혼자 지내면서 다른 사람들로부터 멀어집니다. 대인관계에서 얻을 수 있는 여러 유익들이 있습니다. 고립되는 것보다 적절히 균형을 유지할 필요가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 71),
(67, '무기력', '자신을 적절한 환경에 놓아두지 않는다면 끝없이 무기력해질 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 72),
(68, '부정적인 사람', '항상 쳐진 분위기를 풍긴다면 부정적인 사람이라는 인상을 줄 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 72),
(69, '의사표현 부족', ' 잘 들어주기만하면 되는 대화가 있는 반면 자신의 생각을 적극적으로 말할 필요가 있는 대화가 있습니다. 필요할 때에는 자신의 의견을 조리있게 말해야합니다.', '/hoodify/img/identity/hooodify_mini.png	', 73),
(70, '무책임', '주목받지 않고 비교적 책임에서 자유롭기 때문에 가벼운 마음으로 임하게될 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 74),
(71, '악명', '남을 배려하지 않고 자기 멋대로 한다는 평판을 얻을 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 75),
(72, '고립', ' 혼자서 지낼 수 있는 것과 혼자를 고집하는 것은 다릅니다. 때로는 도움을 요청하고 다른 사람과 함께하는 것도 필요합니다.', '/hoodify/img/identity/hooodify_mini.png	', 76),
(73, '창작의 고통', '창작은 고통의 과정입니다. 스트레스를 관리하는 방법이 필요합니다.', '/hoodify/img/identity/hooodify_mini.png	', 77),
(74, '완벽주의', '완벽해야 한다는 부담감이 일을 미루게만들 수 있습니다. 때로는 미완성으로 결과를 내고 빠른 피드백을 받는 것이 좋을 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 78),
(75, '예상치못한 사고', ' 때로 예상지 못한 일이 발생하면서 도저히 감당할 수 없을 정도로 일이 많아질 수 있습니다. 긴박함은 이 사람들의 능력을 끌어내지만 자신의 관리 범위를 벗어나지 않도록 주의할 필요가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 78),
(76, '스트레스', '영감에 대한 집착은 많은 스트레스를 가져옵니다.', '/hoodify/img/identity/hooodify_mini.png	', 79),
(77, '시간 낭비', '계획에 지나치게 시간과 노력을 들이면서 정작 실현하지는 못할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 80),
(78, '부정적', ' 현실적인 태도는 안 되는 이유만 찾는 부정적인 태도로 바뀌기 쉽습니다. 때로는 어려운 일이라도 그것을 해야하는 이유에가 더 중요할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 81),
(79, '과소비', '어떤 수집품은 고가에 거래됩니다. 수집을 즐길만한 경제적 여유가 뒷받침되어야 합니다.', '/hoodify/img/identity/hooodify_mini.png	', 50),
(80, '사건사고', '여유롭지 못할 때에 생기는 사고는 치명적일 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 83),
(81, '시기와 질투', '부유함은 다른 사람의 시기를 불러일으킵니다. ', '/hoodify/img/identity/hooodify_mini.png	', 84),
(82, '안전사고', '몸의 능력을 믿고 무리하다 부상을 당할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 85),
(83, '안전사고', '빠른 배달을 위해 위험하게 운전하면서 사고를 일으킬 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 87),
(84, '건강 문제', '지나치게 마른 몸매를 만들면서 건강의 균형을 잃을 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 89),
(85, '어그로', '사람들의 관심을 끌기 위해 내용을 지나치게 과장할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 90),
(86, '게임에 대한 환상', '게임을 즐기는 것과 게임을 개발하는 것은 완전히 다른 것입니다. 게임을 개발한다는 것은 훨씬 정적이고 길며 고된 과정일 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 92),
(87, '리스크', '초기 투자가 많이 필요한만큼 큰 위험부담을 지게됩니다.', '/hoodify/img/identity/hooodify_mini.png	', 93);

-- --------------------------------------------------------

--
-- 테이블 구조 `feedback`
--

CREATE TABLE `feedback` (
  `feedback_code` int(20) NOT NULL,
  `feedback_desc` varchar(1000) CHARACTER SET utf8mb4 NOT NULL DEFAULT 'mail_desc'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `feedback`
--

INSERT INTO `feedback` (`feedback_code`, `feedback_desc`) VALUES
(7, 'sadfasdfdf'),
(8, '이러저러한 내용을 추가해주세요');

-- --------------------------------------------------------

--
-- 테이블 구조 `identity`
--

CREATE TABLE `identity` (
  `identity_code` int(10) NOT NULL,
  `identity_name` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'identity_name',
  `identity_desc` varchar(500) CHARACTER SET utf8 NOT NULL DEFAULT 'identity_desc',
  `identity_img` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '/hoodify/img/identity/hooodify_mini.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `identity`
--

INSERT INTO `identity` (`identity_code`, `identity_name`, `identity_desc`, `identity_img`) VALUES
(1, '잡학다식', ' 다양한 분야에 대해 알고 있는 사람들이 있습니다. 궁금한 것이 생긴다면 우선 이 사람들을 찾아보세요. 다만, 이야기가 너무 길어질 수도 있습니다.', '/hoodify/img/identity/hooodify_mini.png'),
(2, '괴짜', ' 괴이한 행동을 합니다. 남들은 이해할 수 없지만 이 사람은 자신만의 눈으로 세상을 봅니다.', '/hoodify/img/identity/hooodify_mini2.png'),
(3, '유머감각', '센스있는 말로 웃음을 주는 사람들이 있습니다. 유머감각은 긴장된 분위기를 풀어주며 그 사람을 매력적으로 만듭니다.', '/hoodify/img/identity/hooodify_mini.png'),
(4, '손재주', ' 손으로 하는 일에 남다른 감각을 가진 사람들이 있습니다. 정교하고 어려운 작업을 능숙하게 해낼 수 있습니다. 의사와 기술직같은 분야에 종사하는 사람부터 피규어를 조립하거나 수공예를 하는 사람들 등이 이 능력을 가집니다.', '/hoodify/img/identity/hooodify_mini.png'),
(5, '협상의 달인', ' 뛰어난 협상 능력을 발휘하는 사람들입니다. 더 좋은 조건에서 거래를 달성하고 다른 사람들을 설득시킬 수 있습니다. 여러 이해관계와 쟁점에 대해 깊이 이해하고 있으며 자신의 뜻을 관철시키기 위한 강직함도 갖추고 잇습니다.', '/hoodify/img/identity/hooodify_mini.png'),
(6, '미적 감각', ' 아름다움 대해 남다른 감각을 타고난 사람들이 있습니다. 이 사람들의 배치는 인테리어가 되고 코디는 패션이 되며 그림은 작품이 됩니다.', '/hoodify/img/identity/hooodify_mini.png'),
(7, '겜잘알', ' 능숙하게 플레이할 수 있는 게임이 있습니다. 많은 시간과 노력을 들인 끝에 장인의 경지에 올랐습니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(8, '세상을 보는 눈', ' 보이지 않는 것을 읽어내는 통찰력을 가진 사람들이 있습니다. 남들이 눈앞에 보이는 것들에 휘둘릴때 현명한 결정을 내립니다.', '/hoodify/img/identity/hooodify_mini.png'),
(9, '모험가의 심장', ' 세상에는 나름대로 정해진 길이 있습니다. 하지만 어떤 사람들은 그 길에서 벗어나 다른 곳을 향해 걸어가기로 합니다. 무엇이 그 사람들을 움직이게 만들까요? 어쩌면 그 사람들에게는 모험가의 심장이 있는 것일지 모릅니다.', '/hoodify/img/identity/hooodify_mini.png'),
(10, '게으른 움직임', ' 느긋하게 움직이며 절대 서두르지 않는 사람들입니다. 누구는 게으르다고 하지만 이 사람들은 정말 필요할 때에 움직입니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(11, '무계획', ' 즉흥적인 상황에 더 강한 사람들이 있습니다. 계획에 의존하지 않고 항상 상황에 대처할 여유를 갖고 있습니다. 계획에 집착하는 사람들은 작은 변화에도 흔들리고 길을 잃지만 이 사람들은 오히려 그런 불확실함을 감당하기를 즐깁니다.', '/hoodify/img/identity/hooodify_mini.png'),
(12, '솔로 플레이어', ' 뭐든 혼자 하는 것이 편한 사람들이 있습니다. 여럿이 몰려다니는 것보다 혼자 계획하고 혼자 수행합니다. 일과 관련해서 팀 플레이어로서는 어울리지 않을 수 있지만 맡은 일에 대해서는 누구보다 전문적인 결과를 내놓습니다.', '/hoodify/img/identity/hooodify_mini.png'),
(13, '너드', '자신의 관심사에만 몰두하고 인간 관계나 패션에 무관심한 사람들이 있습니다. 사회성이 부족해 보이기도하고 후줄근한 모습이 우습기도 하지만 이 사람들에게는 그런 평가가 중요하지 않습니다.', '/hoodify/img/identity/hooodify_mini.png'),
(14, '디지털노마드', ' 공간에 제약없이 자유롭게 이동하면서 일하는 사람들입니다. 노트북과 인터넷만 있다면 어디서든 일할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png'),
(15, '아르바이트 마스터', ' 짧은 기간 동안 아르바이트를 하며 돈을 버는 사람들이 있습니다. 다양한 경험을 하며 생존 능력을 높입니다. 아르바이트를 시작하는 데에는 다양한 배경이 있습니다. 학생 때 생활비를 벌기위해서, 집에서 쉬는 것이 답답해서 또는 지인의 일을 잠깐 도와주기 아르바이트를 시작하기도 합니다.', '/hoodify/img/identity/hooodify_mini.png'),
(16, '전문가', ' 자신만의 확고한 분야가 있는 사람들입니다. 그 분야에 대한 풍부한 지식과 경험으로 독보적인 입지를 가집니다. 많은 사람들이 관련 분야에 대해 자문을 구하고 프로젝트를 맡깁니다.', '/hoodify/img/identity/hooodify_mini.png'),
(17, '작가', '허공을 떠다니는 수많은 생각과 이야기의 실마리들이 보이나요? 이 사람들은 그것들을 엮어 종이에다 풀어냅니다. 우리 삶의 다양한 주제들을 글에 담습니다.\r\n', '/hoodify/img/identity/hooodify_mini.png'),
(18, '프리랜서', ' 이 사람들은 각자가 대표이면서 노동자입니다. 자기 자신이 브랜드이자 회사 그 자체입니다. 더 많은 자유가 주어지지만 그에따른 책임을 져야합니다.', '/hoodify/img/identity/hooodify_mini.png'),
(19, '설계자', ' 아무것도 없는 백지상태에서 전체적인 구조와 세부사항을 그려냅니다. 이 사람들은 정교한 설계를 통해 아이디어에 생명을 부여합니다.', '/hoodify/img/identity/hooodify_mini.png'),
(20, '사색하는 철학자', ' 세상의 이치에 대해 사색하는 사람들입니다. 철학은 모든 학문의 근본이고 인간 지성의 결정체입니다.', '/hoodify/img/identity/hooodify_mini.png'),
(21, '사무직', '일반적인 사무 업무를 보는 사람들입니다. 문서를 작성하고 서류들을 처리합니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(23, '커피 한 잔', '지금 뭔가 부족하다고 느낀다면 그건 커피 한 잔일 수 있습니다. 이 사람들은 커피 한 잔으로 그 날을 더 풍부하게 만듭니다. \r\n', '/hoodify/img/identity/hooodify_mini.png'),
(24, '힙합', ' 힙합 문화를 즐기는 사람들입니다. 음악과 패션 그리고 그것이 추구하는 가치를 따릅니다. 자유롭고 거침없는 모습이 매력적입니다.', '/hoodify/img/identity/hooodify_mini.png'),
(25, '후드 매니아', ' 후드를 즐겨 입는 사랍들입니다. 후드는 일하거나 쉴 때, 운동하거나 잘 때도 입을 수 있는 만능 옷입니다. 이런 편리함은 단순히 옷을 넘어 하나의 가치관을 나타냅니다.', '/hoodify/img/identity/hooodify_mini.png'),
(26, '치즈 추가', '치즈는 음식에 풍미를 더합니다. 이 사람들은 치즈가 들어간 음식을 즐깁니다.', '/hoodify/img/identity/hooodify_mini.png'),
(27, '매콤하게', '  매콤하게 먹는 것을 선호합니다. 얼큰한 맛이 스트레스를 날려줍니다. 맵지 않은 음식은 뭔가 심심하게 느껴집니다.', '/hoodify/img/identity/hooodify_mini.png'),
(28, '민트 선호', ' 민트맛을 즐기는 사람들입니다. 많은 사람들이 치약 맛이라고 폄하하고 먹기 꺼려합니다. 하지만 민트가 주는 풍미는 다른 곳에서는 찾기 힘든 것입니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(29, '치킨 학살자', ' 치킨을 즐겨 먹는 사람들입니다. 치킨만큼은 질리지 않고 먹을 수 있습니다. 여러 치킨집의 미묘한 맛을 구별할 수 있으며 다양한 치킨을 즐깁니다.', '/hoodify/img/identity/hooodify_mini.png'),
(30, '샐러드광', '샐러드를 즐겨먹는 사람들입니다. 다양한 야채와 드레싱을 즐기며 산뜻한 기분을 느낍니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(31, '미니멀리즘', ' 화려함과 과잉의 시대에 단순함을 추구하는 사람들입니다. 패션과 인테리어, 생활 방식에서 화려함을 걷어내고 최소한의 것만 남겨둡니다.', '/hoodify/img/identity/hooodify_mini.png'),
(32, '자취인', '이 사람들은 집을 떠나 따로 살림을 차렸습니다. 각종 집안일을 도맡아하면서 살림살이를 배웁니다.', '/hoodify/img/identity/hooodify_mini.png'),
(33, '집사', ' 도도한 고양이의 비위를 맞추는 것은 까다로우면서도 즐거운 일입니다. 이 사람들은 고양이를 보살피며 함께 지내기로 했습니다.', '/hoodify/img/identity/hooodify_mini.png'),
(34, '올빼미족', '밤이 되어서야 하루가 시작되는 사람들이 있습니다. 남들이 일어났을 때 잠에 들고 느지막이 일어납니다.\r\n', '/hoodify/img/identity/hooodify_mini.png'),
(35, '알뜰살뜰', '작은 것 하나도 허투루 쓰지 않는 사람들이 있습니다. 절약하고 아끼는 것이 몸에 배어있습니다. 작은 것도 그 쓰임새를 다 합니다.', '/hoodify/img/identity/hooodify_mini.png'),
(36, '방콕', '집에 틀어박혀서 나가기 싫어하는 사람들이 있습니다. 날이 어떻든 상관하지 않고 방 안에서 자신의 소소한 즐거움을 누립니다. 어쩌다 나가야하는 일이 생기면 혹시나 약속이 취소되지 않을까 기대하고 약속을 피할 적절한 변명거리를 생각합니다. \r\n', '/hoodify/img/identity/hooodify_mini.png'),
(37, '취준생', ' 일할 곳을 찾아 취업을 준비하는 사람들입니다. 원하는 회사나 직무에 지원하기 위해 정보를 수집하고 자기 자신을 갈고 닦습니다.', '/hoodify/img/identity/hooodify_mini.png'),
(38, '뚜벅이', '특별한 이동수단 없이 걸어다니는 사람들입니다. 웬만한 거리는 걸어다니고 필요한 경우 대중교통을 이용합니다. 차를 구할 의향이 없거나 많이 이동할 필요가 없는 사람들입니다.', '/hoodify/img/identity/hooodify_mini.png'),
(39, '허약체질', '쉽게 지치고 병에 걸립니다. 이 사람들은 남들보다 약한 몸을 가지고 태어났습니다.', '/hoodify/img/identity/hooodify_mini.png'),
(40, '모태솔로', ' 평생을 솔로로 지낸 사람들입니다. 보수적인 환경에서 자랐거나 자신의 일에 바쁜 사람들일 수 있습니다. 또는 지나치게 눈이 높기 때문일수도 있습니다.', '/hoodify/img/identity/hooodify_mini.png'),
(41, '불운', '유독 불운이 많이 찾아오는 사람들이 있습니다. 예상치못한 사고가 일어나고 준비한 일들이 잘 풀리지 않습니다. 왜 하필 이런 일들이 나에게 일어날까하는 생각이 듭니다. 이제 상황을 어떻게 받아들일지 결정해야 합니다.', '/hoodify/img/identity/hooodify_mini.png'),
(42, '백수', ' 일을 하지 않고 집에 머물며 쉬는 사람들입니다. 아직 취업하지 않았거나 이직을 준비하는 상태일 수 있습니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(43, '흙수저', '가난한 집안에서 자라나는 사람들이 있습니다. 경제적 빈곤은 마음의 여유까지 앗아갑니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(44, 'DIY족', ' 필요한 것들을 직접 만드는 사람들이 있습니다. 가구나 물건들을 완성품으로 사지않고 재료들을 직접 구하고 가공합니다. 자신이 필요한 것을 직접 만드는 것은 즐겁고 보람찬 일입니다. 인건비가 줄어드는 것은 덤입니다.', '/hoodify/img/identity/hooodify_mini.png'),
(45, '인방 시청자', ' 여러 방송 플랫폼에는 수많은 사람들이 다양한 콘텐츠로 방송을 하고 있습니다. 이 사람들은 그 중 자신의 관심사에 맞는 방송을 찾아 챙겨봅니다. 인터넷 방송에는 공영 방송에서는 볼 수 없는 현장감과 소통이 있습니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(46, '여행가', ' 여행을 즐기는 사람들이 있습니다. 다양한 지역을 방문해서 새로운 사람을 만나고 새로운 문화와 음식을 즐깁니다.', '/hoodify/img/identity/hooodify_mini.png'),
(47, '캠핑족', ' 집을 벗어나 자연과 더 가까운 곳에서 머뭅니다. 익숙한 환경을 벗어나 낯선 장소에서 삶을 환기시키고 새로운 활력을 얻습니다. 각자의 취향에 따라 다양한 캠핑 옵션이 있습니다. 숲속이나 강가 섬과 같은 장소부터 차 안에서 하는 캠핑, 텐트를 치는 캠핑 등을 자신의 기호에 맞게 고를 수 있습니다. \r\n', '/hoodify/img/identity/hooodify_mini.png'),
(48, '산책가', '  하루 중 산책할 시간이 없다는 것은 지나치게 바쁘게 살고 있다는 것입니다. 이 사람들은 자신의 시간에 산책을 즐기며 그 하루를 충분히 만끽합니다.', '/hoodify/img/identity/hooodify_mini.png'),
(49, '사진 한 장', '  삶의 순간들은 계속해서 쌓여 어느 순간 기억 저편으로 사라집니다. 하지만 이 사람들은 그 순간들을 잡아 기록해놓습니다. 사진으로 남겨진 순간은 그때의 기억을 통째로 불러옵니다. 그곳의 풍경, 냄새까지 잇다라 딸려나옵니다. 기억할 것이 많은 만큼 더 풍요로운 삶이 됩니다.\r\n', '/hoodify/img/identity/hooodify_mini.png'),
(50, '수집가', '수집을 즐기는 사람들이 있습니다. 우표, 화폐, 포스터 등 각자의 취향과 흥미에 따라 다양한 것을 수집합니다. 새로운 수집품을 찾아다니고 그것을 소중히 모아둡니다.', '/hoodify/img/identity/hooodify_mini.png'),
(51, '매력적인 목소리', ' 목소리를 듣기전까지는 이 사람들의 매력을 알 수 있습니다. 매력적인 목소리는 이 사람들의 인상을 완전히 바꿔놓습니다. 선천적으로 좋은 목소리를 타고나기도 하지만 발성과 교정을 통해 좋은 목소리를 얻기도 합니다.', '/hoodify/img/identity/hooodify_mini.png'),
(52, '끝없는 방황', ' 반듯하게 세워진 길 위를 살아가는 사람들이 있는 반면, 항상 길을 잃고 방황하는 사람들이 있습니다. 처음 살아가는 삶에서 방황하는 것은 자연스럽스운 일입니다. 방황의 폭풍이 가면 우리는 더 성숙해집니다.', '/hoodify/img/identity/hooodify_mini.png'),
(53, '평범한 옷차림', ' 남들만큼만, 평범하게 입는 사람들입니다. 많은 돈과 시간을 쓰며 화려하게 꾸미진 않지만 깔끔하고 무난하게 단장합니다.', '/hoodify/img/identity/hooodify_mini.png'),
(54, '유목민', ' 이 사람들은  한 곳에 안주하지 않습니다. 가벼운 짐을 가지고 더 좋은 곳을 향해 떠날 준비가 되어있습니다.', '/hoodify/img/identity/hooodify_mini.png'),
(55, '스타트업', '  거대한 기업도 그 시작은 스타트업입니다. 이 사람들은 큰 뜻을 품고 위대하고 험난한 여정을 시작합니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(56, '코드라는 벽돌', '세상의 많은 서비스들이 컴퓨터를 통해 제공됩니다. 그리고 어딘가에는 그 소프트웨어를 만들어내는 사람들이 있습니다. 이 사람들은 고도의 지식과 기술을 통해 그 서비스를 한땀한땀 구현해냅니다.', '/hoodify/img/identity/hooodify_mini.png'),
(57, '농부', ' 논과 밭 등을 가꾸며 작물을 재배하는 사람들입니다. 계절과 날씨를 살피며 최고의 수확물을 만들어냅니다.', '/hoodify/img/identity/hooodify_mini.png'),
(58, '단벌신사', ' 같은 옷을 오랫동안 입는 사람들이 있습니다. 옷을 사고 보관하기 귀찮아서, 또는 정말 마음에 드는 옷이 있어 그것만 입습니다. 주변 사람들은 그 사람의 옷만 보고 누구인지 알아채기도 합니다.', '/hoodify/img/identity/hooodify_mini.png'),
(59, '문제투성이', ' 삶의 문제들로 과부화된 상태입니다. 일, 인간관계, 건강 등 삶의 여러 문야에서 동시다발적으로 문제가 발생했습니다. 자포자기하고싶은 마음입니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(60, '게임 플레이어', '  게임은 문학이고 엔터테인먼트이자 스포츠입니다. 게임에는 세상의 일부가 담겨있습니다. 이 사람들은 게임을 통해 새로운 세상을 경험합니다. 사람을 만나고 새로운 역할을 수행하며 새로운 지식을 배우기도 합니다.\r\n', '/hoodify/img/identity/hooodify_mini.png'),
(61, '빈티지', ' 오랜되어도 가치있는 것이 있습니다. 색이 바래 헌 느낌을 주기도 하지만 편안하면서 오히려 그 사람의 세련됨을 강조하기도 합니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(62, '신사', ' 사람은 동물에서 교육과 사회화를 통해 한 인간으로 거듭납니다. 그중 세련되게 다듬어진 사람들은 특별한 교양과 품위를 풍깁니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(63, '클래식', '오랜 기간 전해진 클래식 문화에는 변하지 않는 가치가 있습니다. 이 사람들은 그것을 음미할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png'),
(64, '셀프 스타일리스트', '자기 자신을 꾸밀줄 아는 사람들입니다. 적절한 헤어스타일, 코디 등을 통해 자신의 매력을 극대화합니다. 여러 스타일을 연구하고 시도하며 자신만의 분위기를 만들고 대체할 수 없는 개성을 만들어냅니다.', '/hoodify/img/identity/hooodify_mini.png'),
(65, '비즈니스 캐주얼', ' 비즈니스 캐주얼 코디를 즐겨 입는 사람들입니다. 격식을 차릴줄 알지만 편안함도 잃지 않습니다. 단정한 차림이 신뢰를 줍니다.', '/hoodify/img/identity/hooodify_mini.png'),
(66, '오버핏', '널널하게 입는 것을 선호하는 사람들입니다. 넉넉한 사이즈가 편리하고 자신의 체형을 보완해줍니다.  ', '/hoodify/img/identity/hooodify_mini.png'),
(67, '분위기 메이커', ' 항상 즐거운 분위기를 만들어내는 사람들이 있습니다. 이 사람의 말과 행동이 그곳을 더 활기차게 만듭니다. 모임이 있다면 이 사람을 초대해야합니다.', '/hoodify/img/identity/hooodify_mini.png'),
(68, '인싸', ' 다른 사람과 어울리기 좋아하는 사람들입니다. 대화에 적극적이고 밝은 분위기를 만들어냅니다. 새로운 사람을 만나고 사귀는 것은 누군가에게는 부담스러운 일이지만 이 사람들에게는 자연스럽고 쉬운 일입니다. 많은 사람들이 이 인싸들의 에너지에 이끌립니다.', '/hoodify/img/identity/hooodify_mini.png'),
(69, '팀 플레이어', ' 팀 플레이에 익숙한 사람들입니다. 자신의 역할이 무엇인지 알고 능숙한 의사소통으로 다른 사람과 협동할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png'),
(70, '만담꾼', ' 항상 재미있는 얘기를 들려주는 사람들이 있습니다. 흥미진진한 내용에 주위 사람들의 이목이 집중됩니다. 같은 내용이라도 더 맛깔나게 전달하는 재주를 지녔습니다.', '/hoodify/img/identity/hooodify_mini.png'),
(71, '웅크리기', ' 혼자 있는 것이 편한 사람들이 있씁니다. 다른 사람과 함께하는 자리가 부담스럽습니다. 어쩌다 여러 사람들이 모이는 자리에 끼면 그날은 다른 일을 하기 힘들정도로 피곤해집니다. 미리 잡은 약속이 부담스럽고 어쩌다 약속이 취소되면 그리 반가울 수 없습니다.\r\n', '/hoodify/img/identity/hooodify_mini.png'),
(72, '저기압', '에너지 수치가 선천적으로 낮은 사람들이 있습니다. 남들보다 더 큰 자극에만 반응하고 쉽게 지칩니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(73, '경청자', ' 대부분의 사람들은 자기 얘기만 하고 자기가 듣고 싶은 대로만 듣습니다. 하지만 진정한 대화는 잘 듣는 사람으로 완성됩니다. 이 사람들을 잘 듣고 다른 사람이 무엇을 말하는지, 무엇을 말하고싶어하는지 이해합니다.', '/hoodify/img/identity/hooodify_mini.png'),
(74, '서포터', ' 훌륭한 성과는 많은 사람들의 기여로 만들어지지만 때로 특별한 몇 명만 주목받게됩니다. 서포터들은 많은 사람들에게 인정받는 위치는 아니지만 최고의 결과를 만들어낼 수 있도록 다른 사람들을 서포팅합니다. 그리고 그 자체로 큰 만족을 누립니다.', '/hoodify/img/identity/hooodify_mini.png'),
(75, '철면피', ' 남의 시선과 평판에 크게 신경쓰지 않는 사람들이 있습니다. 부끄러움을 모른다고 하지만 눈치를 보면서 살기에는 놓치는 것들이 너무나 많습니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(76, '홀로서기', ' 가족이나 다른 사람의 도움 없이 독립하기로 한 사람들입니다. 신세지기를 싫어하거나 혼자 지내는 것이 편한 사람들일 수 있습니다. 가족이라는 울타리마저 벗어나 혼자 삶을 가꿔가며 진정한 자유를 누립니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(77, '예술가', '영감을 통해 창조 활동을 하는 사람들이 있습니다. 고통과 인내의 과정으로 자신만의 것을 만들어냅니다.', '/hoodify/img/identity/hooodify_mini.png'),
(78, '벼락치기', ' 일을 미루다 해야할 수 밖에 없을 때 비로소 시작하는 사람들이 있습니다. 어쩌면 이 사람들은 자신을 압박하는 극한의 상황을 기다리고있는지 모릅니다.', '/hoodify/img/identity/hooodify_mini.png'),
(79, '영감을 찾아서', ' 새로운 영감을 찾아다니는 사람들입니다. 예술적 영감이나 문제 해결을 위한 아이디어가 필요할 수 있습니다. 뛰어난 통찰과 남들이 보지 못하는 것을 보는 안목을 가지고자 합니다.', '/hoodify/img/identity/hooodify_mini.png'),
(80, '신중한 계획자', ' 계획은 기술입니다. 아무렇게나 세운다고 실현되지않습니다. 이 사람들은 능숙하게 계획을 세우고 그것을 실현시킬 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png'),
(81, '현실감각', ' 뜬구름 잡는 소리는 누구나 쉽게 할 수 있습니다. 하지만 결국 실현되는 것은 현실적인 것들입니다. 이 사람들은 어떤 것들이 실제로 구현될 수 있는지 잘 이해하고 있습니다. 완벽하지는 못하지만 결국 마무리 짓고 결과를 만들어냅니다.', '/hoodify/img/identity/hooodify_mini.png'),
(82, '사람을 잇는 다리', ' 다양한 사람들을 두루 알고 서로를 소개시켜주는 다리 역할을 하는 사람들입니다. 관심사나 성향이 비슷한 사람을 소개하거나 어울리는 한 쌍을 연결해주기도 합니다. 때로는 조직에 필요한 사람을 찾아 소개해주는 역할을 맡습니다. 사람들을 이어 관계의 시너지를 만들어냅니다. \r\n', '/hoodify/img/identity/hooodify_mini.png'),
(83, '빈털터리', ' 수중에 땡전 한 푼 없는 사람들입니다. 사업이나 투자에 실패했거나 수입이 없는채로 오랜 시간이 지났을 수 있습니다. 이제 가벼운 몸과 마음으로 새로운 길을 찾아야합니다.', '/hoodify/img/identity/hooodify_mini.png'),
(84, '금수저', '  풍족한 환경에서 자란 사람들이 있습니다. 삶이 여유롭고 새로운 도전을 하는 것이 두렵지 않습니다. 인생에 더 많은 기회들이 열려있습니다.', '/hoodify/img/identity/hooodify_mini.png'),
(85, '인자강', '인간 자체가 강한 사람들이 있습니다. 튼튼한 골격을 가졌거나 체형에 비해 큰 힘을 낼 수 있습니다. 헬스 트레이닝과 운동 분야에서 이 재능을 발휘할 수 있습니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(86, '주부', ' 집안일을 하며 가정을 돌보는 사람입니다. 음식을 차리는 것에서부터 방을 청소하고 빨래를 처리하는 등 집안의 살림살이를 도맡아 처리합니다.', '/hoodify/img/identity/hooodify_mini.png'),
(87, '배달기사', ' 물건을 찾아 주문한 사람에게 전달해주는 일을 하는 사람들입니다. 오토바이나 트럭 등을 운전하며 정확하고 신속하게 배달합니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(88, '일러스트레이터', ' 게임이나 책, 발표 자료 등에 필요한 삽화를 그리는 사람들입니다. 상상 속에 있는 캐릭터나 세상 또는 추상적인 글을 구체적인 그림으로 표현할 수 있습니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(89, '모델', '  이 사람들은 그 자체로 하나의 작품입니다. 잘 가꿔진 몸과 표정 몸짓으로 다른 사람을 끌어들이는 개성과 매력을 발산합니다.', '/hoodify/img/identity/hooodify_mini.png'),
(90, '콘텐츠 크리에이터', '여러가지 주제로 영상, 오디오 등의 콘텐츠를 만들어내는 사람들입니다. 아이디어를 콘텐츠로 만들고 여러 사람들에게 전달합니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(91, '기획자', ' 아이디어를 내고 그것을 어떻게 실현시킬지 계획하는 사람들입니다. 모든 프로젝트는 기획으로부터 만들어집니다. 기획은 일의 첫 단추로 이 단계에서 이미 그 프로젝트의 성패가 달리게됩니다.', '/hoodify/img/identity/hooodify_mini.png'),
(92, '게임 개발자', ' 아이디어와 기획으로만 존재하는 게임을 실제로 구현해내는 사람들입니다. 누구나 그럴듯한 게임을 생각해낼 수는 있습니다. 하지만 그것을 직접 플레이할 수 있는 것으로 만들어내는 것은 이 사람들의 몫입니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(93, '자영업자', '자신의 사업을 운영하는 사람들입니다. 음식, 교육 등 다양한 서비스업을 다룹니다. 많은 리스크를 가지지만 큰 성공을 이룰수도 있습니다. ', '/hoodify/img/identity/hooodify_mini.png'),
(94, '요리사', '  상품으로서 가치가 있는 요리를 만들어내는 사람들입니다. 평범한 재료들을 다듬고 조합해 훌륭한 요리로 완성시킵니다.', '/hoodify/img/identity/hooodify_mini.png');

-- --------------------------------------------------------

--
-- 테이블 구조 `identity_category`
--

CREATE TABLE `identity_category` (
  `identity_category_code` int(10) NOT NULL,
  `identity_code` int(10) NOT NULL,
  `category_code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `identity_category`
--

INSERT INTO `identity_category` (`identity_category_code`, `identity_code`, `category_code`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 3, 1),
(4, 3, 3),
(5, 4, 1),
(6, 4, 5),
(7, 5, 1),
(8, 5, 2),
(9, 6, 1),
(10, 6, 6),
(11, 7, 1),
(12, 7, 8),
(13, 8, 1),
(14, 8, 2),
(15, 9, 9),
(16, 9, 11),
(17, 9, 10),
(18, 10, 10),
(19, 10, 17),
(20, 10, 18),
(21, 10, 16),
(22, 11, 9),
(23, 11, 10),
(24, 11, 17),
(25, 12, 20),
(26, 12, 10),
(27, 12, 1),
(28, 12, 9),
(29, 12, 19),
(30, 13, 17),
(31, 13, 16),
(32, 13, 9),
(33, 14, 9),
(34, 14, 1),
(35, 14, 17),
(36, 14, 19),
(37, 14, 10),
(38, 2, 10),
(39, 2, 16),
(40, 2, 9),
(43, 15, 19),
(44, 15, 21),
(45, 16, 19),
(46, 16, 10),
(47, 16, 2),
(48, 17, 19),
(49, 17, 6),
(50, 17, 8),
(51, 18, 9),
(52, 18, 1),
(53, 18, 19),
(54, 19, 19),
(55, 19, 1),
(56, 19, 2),
(57, 20, 2),
(58, 20, 10),
(59, 21, 19),
(60, 21, 17),
(61, 23, 20),
(62, 24, 20),
(63, 24, 6),
(64, 24, 9),
(65, 24, 17),
(66, 25, 20),
(67, 23, 22),
(68, 26, 22),
(69, 26, 20),
(70, 27, 20),
(71, 27, 22),
(72, 28, 22),
(73, 28, 20),
(74, 29, 20),
(75, 29, 22),
(76, 30, 20),
(77, 30, 22),
(78, 31, 9),
(79, 31, 17),
(80, 31, 10),
(81, 31, 20),
(82, 32, 17),
(83, 32, 21),
(84, 33, 17),
(85, 33, 21),
(86, 34, 17),
(87, 34, 21),
(88, 34, 5),
(89, 35, 17),
(90, 35, 1),
(91, 35, 9),
(92, 36, 17),
(93, 36, 18),
(94, 36, 10),
(95, 37, 21),
(96, 37, 17),
(97, 38, 17),
(98, 39, 21),
(99, 39, 5),
(100, 40, 21),
(101, 40, 3),
(102, 40, 10),
(103, 41, 21),
(104, 41, 17),
(105, 42, 17),
(106, 42, 21),
(107, 43, 17),
(108, 43, 21),
(109, 44, 8),
(110, 44, 9),
(111, 45, 8),
(112, 45, 17),
(113, 46, 8),
(114, 46, 10),
(115, 47, 8),
(116, 47, 20),
(117, 48, 8),
(118, 48, 17),
(119, 49, 8),
(120, 50, 8),
(121, 50, 20),
(122, 51, 1),
(123, 51, 5),
(124, 52, 21),
(125, 52, 10),
(126, 52, 17),
(127, 53, 10),
(128, 53, 17),
(129, 53, 9),
(130, 53, 20),
(131, 54, 17),
(132, 54, 9),
(133, 54, 10),
(134, 40, 20),
(135, 55, 19),
(136, 55, 9),
(137, 55, 10),
(138, 57, 17),
(139, 57, 19),
(140, 57, 20),
(141, 58, 20),
(142, 58, 9),
(143, 58, 17),
(144, 59, 21),
(145, 59, 17),
(146, 60, 8),
(147, 61, 20),
(148, 61, 9),
(149, 62, 17),
(150, 62, 10),
(151, 62, 9),
(152, 63, 10),
(153, 63, 20),
(154, 64, 23),
(155, 64, 1),
(156, 65, 20),
(157, 65, 9),
(158, 66, 20),
(159, 67, 1),
(160, 67, 3),
(161, 68, 16),
(162, 68, 10),
(163, 68, 1),
(164, 70, 1),
(165, 71, 10),
(166, 71, 16),
(167, 72, 17),
(168, 72, 16),
(169, 72, 10),
(170, 73, 10),
(171, 73, 16),
(172, 73, 1),
(173, 74, 16),
(174, 74, 10),
(175, 74, 1),
(176, 74, 19),
(177, 75, 10),
(178, 75, 9),
(179, 75, 1),
(180, 76, 10),
(181, 76, 1),
(182, 76, 9),
(183, 77, 1),
(184, 77, 17),
(185, 77, 19),
(186, 77, 1),
(187, 78, 10),
(188, 78, 18),
(189, 79, 10),
(190, 79, 1),
(191, 79, 2),
(192, 80, 10),
(193, 80, 1),
(194, 80, 2),
(195, 81, 1),
(196, 81, 10),
(197, 81, 16),
(198, 82, 1),
(199, 82, 3),
(200, 82, 10),
(201, 83, 17),
(202, 83, 21),
(203, 84, 17),
(204, 84, 21),
(205, 85, 1),
(206, 85, 23),
(207, 86, 9),
(208, 86, 1),
(209, 86, 19),
(212, 87, 19),
(213, 88, 1),
(214, 88, 6),
(215, 88, 19),
(216, 89, 1),
(217, 89, 6),
(218, 89, 19),
(219, 89, 5),
(220, 90, 19),
(221, 90, 1),
(222, 91, 1),
(223, 91, 19),
(224, 91, 2),
(225, 92, 19),
(226, 92, 1),
(227, 93, 21),
(228, 93, 19),
(229, 94, 19),
(230, 94, 1);

-- --------------------------------------------------------

--
-- 테이블 구조 `identity_keyword`
--

CREATE TABLE `identity_keyword` (
  `identity_keyword_code` int(11) NOT NULL,
  `identity_code` int(10) NOT NULL,
  `keyword_code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `identity_keyword`
--

INSERT INTO `identity_keyword` (`identity_keyword_code`, `identity_code`, `keyword_code`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 3, 5),
(4, 3, 3),
(5, 3, 4),
(6, 4, 6),
(7, 4, 7),
(8, 5, 8),
(9, 5, 9),
(10, 6, 10),
(11, 6, 11),
(12, 6, 12),
(13, 6, 13),
(14, 7, 14),
(15, 7, 15),
(16, 7, 16),
(17, 8, 17),
(18, 8, 18),
(19, 9, 19),
(20, 9, 20),
(21, 9, 21),
(22, 9, 22),
(23, 10, 24),
(24, 29, 23),
(25, 9, 25),
(26, 11, 26),
(27, 11, 27),
(28, 12, 31),
(29, 12, 30),
(30, 12, 29),
(31, 12, 28),
(32, 13, 34),
(33, 13, 33),
(34, 13, 32),
(35, 14, 38),
(36, 14, 37),
(37, 14, 36),
(38, 14, 35),
(39, 2, 33),
(40, 2, 41),
(41, 15, 42),
(42, 15, 43),
(43, 15, 47),
(44, 15, 44),
(45, 15, 48),
(46, 15, 45),
(47, 15, 46),
(48, 16, 49),
(49, 16, 51),
(50, 16, 50),
(51, 17, 52),
(52, 17, 53),
(53, 18, 55),
(54, 18, 54),
(55, 19, 56),
(56, 19, 57),
(57, 20, 60),
(58, 20, 59),
(59, 20, 58),
(60, 21, 61),
(61, 21, 62),
(62, 21, 63),
(63, 23, 64),
(64, 23, 65),
(65, 24, 66),
(66, 24, 67),
(67, 24, 68),
(68, 25, 71),
(69, 25, 70),
(70, 2, 69),
(71, 27, 76),
(72, 27, 77),
(73, 28, 79),
(74, 28, 78),
(75, 29, 83),
(76, 29, 82),
(77, 29, 81),
(78, 29, 80),
(79, 30, 88),
(80, 30, 87),
(81, 30, 86),
(82, 30, 85),
(83, 3, 84),
(84, 31, 89),
(85, 31, 90),
(86, 31, 91),
(87, 32, 92),
(88, 32, 93),
(89, 33, 94),
(90, 33, 95),
(91, 34, 96),
(92, 34, 97),
(93, 35, 98),
(94, 35, 99),
(95, 35, 100),
(96, 36, 101),
(97, 36, 102),
(98, 37, 103),
(99, 37, 104),
(100, 37, 105),
(101, 38, 106),
(102, 38, 107),
(103, 38, 108),
(104, 39, 109),
(105, 39, 110),
(106, 40, 111),
(107, 40, 112),
(108, 40, 113),
(109, 41, 114),
(110, 41, 115),
(111, 41, 116),
(112, 42, 105),
(113, 42, 121),
(114, 42, 122),
(115, 42, 123),
(116, 43, 124),
(117, 44, 129),
(118, 44, 130),
(119, 44, 28),
(120, 44, 131),
(121, 45, 132),
(122, 45, 134),
(123, 45, 133),
(124, 45, 135),
(125, 46, 138),
(126, 46, 19),
(127, 47, 139),
(128, 47, 140),
(129, 48, 141),
(130, 48, 142),
(131, 49, 12),
(132, 49, 147),
(133, 49, 148),
(134, 49, 149),
(135, 50, 150),
(136, 50, 151),
(137, 50, 152),
(138, 51, 153),
(139, 51, 154),
(140, 51, 155),
(141, 51, 156),
(142, 52, 158),
(143, 52, 157),
(144, 53, 159),
(145, 53, 160),
(146, 54, 164),
(147, 54, 165),
(148, 54, 35),
(149, 54, 19),
(150, 54, 22),
(151, 55, 173),
(152, 55, 174),
(153, 55, 19),
(154, 55, 20),
(155, 55, 22),
(156, 56, 37),
(157, 56, 179),
(158, 56, 180),
(159, 56, 181),
(160, 57, 182),
(161, 57, 183),
(162, 57, 184),
(163, 58, 185),
(164, 58, 186),
(165, 59, 187),
(166, 59, 188),
(167, 60, 16),
(168, 60, 189),
(169, 60, 190),
(170, 61, 191),
(171, 61, 192),
(172, 61, 193),
(173, 62, 195),
(174, 62, 196),
(175, 62, 194),
(176, 63, 197),
(177, 63, 198),
(178, 63, 199),
(179, 64, 200),
(180, 64, 201),
(181, 64, 202),
(182, 64, 203),
(183, 64, 204),
(184, 65, 205),
(185, 65, 206),
(186, 65, 207),
(187, 65, 208),
(188, 66, 209),
(189, 66, 210),
(190, 66, 211),
(191, 66, 212),
(192, 66, 204),
(193, 67, 5),
(194, 67, 213),
(195, 68, 5),
(196, 68, 217),
(197, 68, 218),
(198, 69, 220),
(199, 69, 221),
(200, 69, 219),
(201, 70, 222),
(202, 70, 223),
(203, 71, 224),
(204, 71, 225),
(205, 71, 226),
(206, 72, 227),
(207, 72, 228),
(208, 72, 229),
(209, 73, 231),
(210, 73, 230),
(211, 74, 232),
(212, 74, 233),
(213, 75, 234),
(214, 75, 235),
(215, 75, 236),
(216, 75, 237),
(217, 76, 55),
(218, 76, 240),
(219, 76, 238),
(220, 76, 239),
(221, 77, 242),
(222, 77, 241),
(223, 77, 10),
(224, 78, 245),
(225, 78, 25),
(226, 79, 249),
(227, 79, 250),
(228, 79, 241),
(229, 79, 10),
(230, 80, 254),
(231, 80, 255),
(232, 80, 56),
(233, 81, 256),
(234, 81, 257),
(235, 82, 258),
(236, 82, 260),
(237, 82, 261),
(238, 82, 259),
(239, 82, 262),
(240, 83, 263),
(241, 83, 264),
(242, 84, 265),
(243, 84, 266),
(244, 85, 267),
(245, 85, 268),
(246, 86, 269),
(247, 86, 270),
(248, 87, 271),
(249, 87, 272),
(250, 88, 274),
(251, 88, 273),
(252, 89, 277),
(253, 89, 278),
(254, 90, 134),
(255, 90, 279),
(256, 90, 280),
(257, 90, 281),
(258, 91, 250),
(259, 91, 56),
(260, 92, 37),
(261, 92, 189),
(262, 93, 288),
(263, 94, 289),
(264, 94, 290),
(265, 94, 291);

-- --------------------------------------------------------

--
-- 테이블 구조 `item`
--

CREATE TABLE `item` (
  `item_code` int(10) NOT NULL,
  `item_name` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'item_name',
  `item_desc` varchar(500) CHARACTER SET utf8 NOT NULL DEFAULT 'item_desc',
  `item_img` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '/hoodify/img/identity/hooodify_mini.png	',
  `identity_code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `item`
--

INSERT INTO `item` (`item_code`, `item_name`, `item_desc`, `item_img`, `identity_code`) VALUES
(1, '책', '읽었던 책과 글들의 모음입니다.', '/hoodify/img/identity/hooodify_mini.png	', 1),
(2, '유머노트', '인상적인 유머나 기발한 아이디어를 정리해놓는 유머노트입니다. ', '/hoodify/img/identity/hooodify_mini.png	', 3),
(3, '수작업품', '자신이 작업한 결과물입니다. ', '/hoodify/img/identity/hooodify_mini.png	', 4),
(4, '작품', '자신이 미적 감각이 담긴 작품입니다.', '/hoodify/img/identity/hooodify_mini.png	', 6),
(5, '게임', '구매해 소장하고 있는 게임들입니다.', '/hoodify/img/identity/hooodify_mini.png	', 7),
(6, '게임 기기', '콘솔이나 pc 등 게임을 플레이하기 위한 기기입니다.', '/hoodify/img/identity/hooodify_mini.png	', 7),
(7, '게임 굿즈', '좋아하는 게임과 관련 굿즈입니다.', '/hoodify/img/identity/hooodify_mini.png	', 7),
(8, '모험의 서', '자신의 모험에 대한 기록입니다.', '/hoodify/img/identity/hooodify_mini.png	', 9),
(9, '상징품', '특별한 의미가 담겨있는 물건들입니다.', '/hoodify/img/identity/hooodify_mini.png	', 9),
(10, '침구류', '편히 누워서 쉴 수 있는 익숙한 침구류입니다.', '/hoodify/img/identity/hooodify_mini.png	', 10),
(11, '수면도구', '수면을 도와주는 도구입니다.', '/hoodify/img/identity/hooodify_mini.png	', 10),
(12, '단벌', '자주 입는 옷이 있습니다. 다른 사람들은 이 옷을 보고 누구인지 알 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 13),
(13, '노트북', '어디서든 작업할 수 있도록 해주는 노트북입니다.', '/hoodify/img/identity/hooodify_mini.png	', 14),
(14, '근로계약서', '일과 관련된 여러 조건들이 명시되어 있는 계약서입니다.', '/hoodify/img/identity/hooodify_mini.png	', 15),
(15, '이력서', '자신의 근무 경험이 정리된 문서입니다.', '/hoodify/img/identity/hooodify_mini.png	', 15),
(16, '자격증', '해당 분야에 대한 전문성을 공인하는 자격증입니다.', '/hoodify/img/identity/hooodify_mini.png	', 16),
(17, '글', '그 분야와 관련된 저서나 리포트를 모아 정리해뒀습니다.', '/hoodify/img/identity/hooodify_mini.png	', 16),
(18, '필기도구', '글을 기록하는 자신만의 도구입니다.', '/hoodify/img/identity/hooodify_mini.png	', 17),
(19, '완성된 글', '자신이 써낸 글을 모아 정리해뒀습니다.', '/hoodify/img/identity/hooodify_mini.png	', 17),
(20, '포트폴리오', '프리랜서로서 자신의 활동이 정리되어있는 문서입니다.', '/hoodify/img/identity/hooodify_mini.png	', 18),
(21, '설계도', '양식에 따라 작성된 설계도 입니다. 설계하는 대상에 따라 다양한 종류가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 19),
(22, '오피스 코디', '출근할 때 입는 단정한 옷입니다.', '/hoodify/img/identity/hooodify_mini.png	', 21),
(23, '커피 용기', '커피를 담아 마시는 개인 용기 입니다. ', '/hoodify/img/identity/hooodify_mini.png	', 23),
(24, '커피', '집에 따로 구비해놓은 커피 재료입니다. ', '/hoodify/img/identity/hooodify_mini.png	', 23),
(25, '음악 리스트', '즐겨듣는 음악의 리스트입니다.', '/hoodify/img/identity/hooodify_mini.png	', 24),
(26, '앨범', '좋아하는 앨범은 직접 구입해 보관합니다.', '/hoodify/img/identity/hooodify_mini.png	', 24),
(27, '힙합 코디', '즐겨입는 힙합 코디입니다. ', '/hoodify/img/identity/hooodify_mini.png	', 24),
(28, '후드', '즐겨입는 후드입니다. ', '/hoodify/img/identity/hooodify_mini.png	', 25),
(29, '치즈', '즐겨먹는 치즈를 집에 구비해둡니다.', '/hoodify/img/identity/hooodify_mini.png	', 26),
(30, '매콤한 풍미', '음식에 매콤한 맛을 더하기 위한 재료를 구비해놓습니다.', '/hoodify/img/identity/hooodify_mini.png	', 27),
(31, '민트 음식', '따로 집에 구비해둔 민트 음식입니다.', '/hoodify/img/identity/hooodify_mini.png	', 28),
(32, '소스', '치킨과 어울리는 소스는 따로 집에 구비해둘 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 29),
(33, '드레싱', '특별히 좋아하는 드레싱은 집에 따로 구비해둡니다.', '/hoodify/img/identity/hooodify_mini.png	', 30),
(34, '미니멀 아이템', '미니멀리즘이 표현된 가구, 옷과 같은 물건입니다.', '/hoodify/img/identity/hooodify_mini.png	', 31),
(35, '계약서', '자취방의 계약 조건이 명시되어 있는 문서입니다.', '/hoodify/img/identity/hooodify_mini.png	', 32),
(36, '자취 용품', '자취방을 꾸미는 실용적이고 멋진 아이템입니다.', '/hoodify/img/identity/hooodify_mini.png	', 32),
(37, '구비 음식', '냉장고나 찬장에 자취를 하며 먹을 음식들이 저장되어 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 32),
(38, '고양이용품', '고양이를 위한 장난감, 캣타워 등의 물건입니다.', '/hoodify/img/identity/hooodify_mini.png	', 33),
(39, '스탠드', '밤에 켜놓는 등입니다.', '/hoodify/img/identity/hooodify_mini.png	', 34),
(40, '암막 커튼', '낮에 자는 동안 밝은 빛을 막아주는 커튼입니다.', '/hoodify/img/identity/hooodify_mini.png	', 34),
(41, '가계부', '소득과 지출에 대해 기록합니다.', '/hoodify/img/identity/hooodify_mini.png	', 35),
(42, '쿠션', '편안히 기대거나 품을 수 있는 쿠션입니다.', '/hoodify/img/identity/hooodify_mini.png	', 36),
(43, '비축식량', '방에서 머물면서 먹기 위한 음식입니다. 간편하면서 먹은 후 처리하기도 쉽습니다.', '/hoodify/img/identity/hooodify_mini.png	', 36),
(44, '자기소개서', '자기 자신을 소개하는 글입니다. 다양한 질문에 대한 대답이 들어있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 37),
(45, '포트폴리오', '관련된 활동이 정리되어 있는 포트폴리오입니다.', '/hoodify/img/identity/hooodify_mini.png	', 37),
(46, '상비약', '자신에게 필요한 약들이 구비되어 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 39),
(47, '영양제', '필수 영양분을 보충해주는 영양제입니다.', '/hoodify/img/identity/hooodify_mini.png	', 39),
(48, '평상복', '집에 머물며 입는 편한 복장입니다.', '/hoodify/img/identity/hooodify_mini.png	', 42),
(49, '슬리퍼', '집 앞에 나갈 때 신는 편한 슬리퍼입니다.', '/hoodify/img/identity/hooodify_mini.png	', 42),
(50, '공구', '여러 작업을 위해 구비한 공구들입니다.', '/hoodify/img/identity/hooodify_mini.png	', 44),
(51, '플랫폼 화폐', '방송 플랫폼에서 후원이나 상품 구매를 위해 쓰이는 화폐입니다.', '/hoodify/img/identity/hooodify_mini.png	', 45),
(52, '굿즈', '방송 콘텐츠와 관련된 굿즈입니다.', '/hoodify/img/identity/hooodify_mini.png	', 45),
(53, '여행 장비', '여행을 위한 배낭, 세면용품 등의 장비입니다.', '/hoodify/img/identity/hooodify_mini.png	', 46),
(54, '여권', '해외 여행 시 필요한 신분증입니다.', '/hoodify/img/identity/hooodify_mini.png	', 46),
(55, '기념품', '여행을 하며 구한 기념품입니다.', '/hoodify/img/identity/hooodify_mini.png	', 46),
(56, '앨범', '여행에서 남긴 사진입니다.', '/hoodify/img/identity/hooodify_mini.png	', 46),
(57, '캠핑 도구', '캠핑을 위해 필요한 다양한 도구들입니다. 배낭과 텐트 조리 도구 등이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 47),
(58, '캠핑카', '캠핑을 위해 사용하는 차입니다. 캠핑에 필요한 여러 장비가 구비되어 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 47),
(59, '편안한 복장', '산책할 때 입는 편안한 복장입니다.', '/hoodify/img/identity/hooodify_mini.png	', 48),
(60, '사진기', '사진을 촬영할 수 있는 도구입니다. 스마트폰부터 전문적인 카메라가 될 수도 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 49),
(61, '앨범', '특정한 주제로 사진을 모아둔 앨범입니다.', '/hoodify/img/identity/hooodify_mini.png	', 49),
(62, '수집품', '이때까지 모아놓은 수집품들입니다.', '/hoodify/img/identity/hooodify_mini.png	', 5),
(63, '자서전', '여러 문제와 방황의 행적은 하나의 이야기가 됩니다. 그것을 기록으로 남겨 모으면 하나의 자서전이 됩니다.', '/hoodify/img/identity/hooodify_mini.png	', 52),
(64, '코디', '화려하진 않지만 깔끔한 옷과 신발 등의 조합입니다.', '/hoodify/img/identity/hooodify_mini.png	', 53),
(65, '필수품', '어디로 이동하든 꼭 챙겨야하는 자신의 필수품입니다.', '/hoodify/img/identity/hooodify_mini.png	', 54),
(66, '로고', '회사를 상징하는 이미지입니다.', '/hoodify/img/identity/hooodify_mini.png	', 55),
(67, '사업기획서', '사업의 개용와 앞으로의 운영 계획이 정리된 문서입니다.', '/hoodify/img/identity/hooodify_mini.png	', 55),
(68, 'MVP', '피드백을 받기위해 가볍게 만들어진 결과물입니다.', '/hoodify/img/identity/hooodify_mini.png	', 55),
(69, '데스크탑', '작업을 위해 쓰는 메인 컴퓨터입니다.', '/hoodify/img/identity/hooodify_mini.png	', 56),
(70, '노트북', '장소에 상관없이 편하게 사용가능한 노트북입니다.', '/hoodify/img/identity/hooodify_mini.png	', 56),
(71, '포트폴리오', '참여했던 프로젝트, 역할, 사용 가능한 언어와 환경 등에 대해 정리되어 있는 문서입니다.', '/hoodify/img/identity/hooodify_mini.png	', 56),
(72, '환경 세팅', '자신이 사용하는 툴과 세팅값의 조합입니다. 따로 정리해서 문서로 남겨둘 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 56),
(73, '농기구', '작물을 재배하기 위해 필요한 도구입니다.', '/hoodify/img/identity/hooodify_mini.png	', 57),
(74, '작물', '수확한 작물들을 보관해둡니다.', '/hoodify/img/identity/hooodify_mini.png	', 57),
(75, '단벌', '항상 입고다니는 몇 안되는 옷입니다.', '/hoodify/img/identity/hooodify_mini.png	', 58),
(76, '게임 기기', '게임을 플레이하기 위한 기기입니다. 콘솔, 피시, 스마트폰 등이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 60),
(77, '굿즈', '좋아하는 게임과 관련된 굿즈입니다.', '/hoodify/img/identity/hooodify_mini.png	', 60),
(78, '빈티지 아이템', '빈티지 스타일의 옷이나 물건입니다.', '/hoodify/img/identity/hooodify_mini.png	', 61),
(79, '단정한 옷차림', '정장처럼 격식을 갖춘 단정한 옷입니다.', '/hoodify/img/identity/hooodify_mini.png	', 62),
(82, '클래식 코디', '즐겨입는 클래식 스타일의 옷입니다.', '/hoodify/img/identity/hooodify_mini.png	', 63),
(83, '클래식 음박', '즐겨듣는 음반은 직접 소장하기로 할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 63),
(84, '코디', '자신이 즐겨입는 옷입니다.', '/hoodify/img/identity/hooodify_mini.png	', 64),
(85, '액세서리', '스타일에 포인트를 주는 액세서리입니다.', '/hoodify/img/identity/hooodify_mini.png	', 64),
(86, '비즈니스 캐주얼 코디', '즐겨입는 비즈니스 캐주얼 코디가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 65),
(87, '오버핏 코디', '즐겨입는 오버핏 옷들입니다.', '/hoodify/img/identity/hooodify_mini.png	', 66),
(88, '협업툴', '협업을 위한 소프트웨어나 다른 도구들입니다.', '/hoodify/img/identity/hooodify_mini.png	', 69),
(89, '이야기 보따리', '내가 들려줄 흥미로운 에피소드를 따로 모아둔 문서입니다.', '/hoodify/img/identity/hooodify_mini.png	', 70),
(90, '예술 작품', '자신의 혼이 들어간 예술 작품입니다. ', '/hoodify/img/identity/hooodify_mini.png	', 77),
(91, '상징품', '영감을 주는 특별한 물건입니다. 미술작품이거나 어떤 글귀가 새겨진 물건일 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 79),
(92, '플래너', '계획을 관리하는 자기만의 플래너가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 80),
(93, '명함집', '여러 사람들의 명함을 모아 관리하는 보관함입니다.', '/hoodify/img/identity/hooodify_mini.png	', 82),
(94, '수집품', '이때까지 모아둔 수집품입니다.', '/hoodify/img/identity/hooodify_mini.png	', 50),
(95, '책', '지식과 지혜의 정수가 담겨있는 책입니다.', '/hoodify/img/identity/hooodify_mini.png	', 20),
(96, '금수저의 자산', '금수저에게 주어지는 자산입니다. ', '/hoodify/img/identity/hooodify_mini.png	', 84),
(97, '운동 도구', '운동하는 데에 쓰이는 각종 도구입니다.', '/hoodify/img/identity/hooodify_mini.png	', 85),
(98, '청소 도구', '집을 청소하는 데에 쓰이는 도구들입니다.', '/hoodify/img/identity/hooodify_mini.png	', 86),
(99, '배달 차량', '배달에 쓰이는 이동 수단입니다. 오토바이나 트럭 등이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 87),
(100, '일러스트레이팅 툴', '그림을 그리는 데에 사용하는 도구입니다.', '/hoodify/img/identity/hooodify_mini.png	', 88),
(101, '포트폴리오', '자신의 작품을 모아 정리한 포트폴리오입니다.', '/hoodify/img/identity/hooodify_mini.png	', 88),
(102, '포트폴리오', '촬영 작품을 정리해 모아둡니다.', '/hoodify/img/identity/hooodify_mini.png	', 89),
(103, '코디', '여러 분위기를 연출할 수 있는 자신의 옷들입니다. ', '/hoodify/img/identity/hooodify_mini.png	', 89),
(104, '개발 도구', '노트북과 데스크톱 등 자신이 게임을 개발하는 데에 쓰는 도구입니다.', '/hoodify/img/identity/hooodify_mini.png	', 92),
(105, '사업자등록증', '자신의 사업을 신고하고 발급받는 문서입니다.', '/hoodify/img/identity/hooodify_mini.png	', 93),
(106, '조리 도구', '요리할 때 쓰이는 여러 도구들입니다. ', '/hoodify/img/identity/hooodify_mini.png	', 94),
(107, '앨범', '자신이 만든 요리를 사진으로 남겨둡니다.', '/hoodify/img/identity/hooodify_mini.png	', 94),
(108, '요리 재료', '특별히 즐기는 요리 재료는 따로 구비해둡니다.', '/hoodify/img/identity/hooodify_mini.png	', 94);

-- --------------------------------------------------------

--
-- 테이블 구조 `keyword`
--

CREATE TABLE `keyword` (
  `keyword_code` int(10) NOT NULL,
  `keyword_name` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'keyword_name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `keyword`
--

INSERT INTO `keyword` (`keyword_code`, `keyword_name`) VALUES
(222, ' 이야기'),
(218, 'E(MBTI)'),
(225, 'I(MBTI)'),
(38, 'IT'),
(124, '가난'),
(37, '개발자'),
(54, '개인사업자'),
(8, '거래'),
(264, '거지'),
(86, '건강'),
(268, '건강함'),
(106, '걷기'),
(24, '게으름'),
(189, '게임'),
(16, '게임 플레이어'),
(190, '겜돌이'),
(255, '계획'),
(75, '고소함'),
(95, '고양이'),
(15, '고인물'),
(199, '고전'),
(87, '관리'),
(33, '괴짜'),
(49, '교수'),
(197, '교양'),
(108, '교통'),
(100, '구두쇠'),
(51, '구루'),
(184, '귀농'),
(227, '귀차니즘'),
(273, '그림쟁이'),
(53, '글쓰기'),
(52, '글쟁이'),
(44, '기간제'),
(148, '기록'),
(174, '기업가정신'),
(41, '기인'),
(56, '기획'),
(155, '꾀꼬리'),
(200, '꾸미기'),
(142, '나들이'),
(228, '내성적'),
(256, '냉정함'),
(209, '널널함'),
(261, '넓은 발'),
(58, '논리'),
(60, '논쟁'),
(3, '농담'),
(183, '농사꾼'),
(182, '농업'),
(23, '느릿느릿'),
(123, '니트족'),
(185, '단벌'),
(90, '단순함'),
(207, '단정함'),
(20, '도전'),
(93, '독립'),
(231, '듣는 사람'),
(2, '똑똑함'),
(67, '랩'),
(210, '루즈핏'),
(235, '마이웨이'),
(262, '만남'),
(29, '만능'),
(130, '만들기'),
(229, '만성피로'),
(196, '매너'),
(76, '매움'),
(77, '매콤함'),
(278, '모델'),
(111, '모쏠'),
(213, '모임'),
(19, '모험'),
(22, '모험 정신'),
(153, '목소리'),
(245, '몰아치기'),
(160, '무난함'),
(263, '무일푼'),
(187, '문제'),
(89, '미니멀'),
(164, '미니멀 라이프'),
(25, '미루기'),
(11, '미술'),
(79, '민초단'),
(78, '민트'),
(211, '박스핏'),
(94, '반려동물'),
(154, '발성'),
(96, '밤샘'),
(226, '방콕'),
(158, '방황'),
(271, '배달'),
(272, '배달 기사'),
(105, '백수'),
(121, '백조'),
(47, '부업'),
(265, '부자'),
(48, '부지런함'),
(188, '불운'),
(110, '비실비실'),
(206, '비즈니스 캐주얼'),
(192, '빈티지'),
(237, '뻔뻔함'),
(230, '사려깊음'),
(61, '사무직'),
(12, '사진'),
(141, '산책'),
(84, '샐러드'),
(232, '서포터'),
(57, '설계'),
(9, '설득'),
(156, '성우'),
(291, '셰프'),
(259, '소개'),
(224, '소심함'),
(180, '소프트웨어'),
(131, '손재주'),
(112, '솔로'),
(238, '솔로 플레이어'),
(7, '수작업'),
(150, '수집'),
(151, '수집광'),
(203, '스타일링'),
(97, '시차'),
(195, '신사적임'),
(113, '쑥맥'),
(34, '아웃사이더'),
(250, '아이디어'),
(135, '아프리카TV'),
(99, '알뜰함'),
(42, '알바'),
(46, '알바생'),
(88, '야채'),
(109, '약체'),
(91, '여백의 미'),
(138, '여행'),
(116, '역경'),
(277, '연기'),
(249, '영감'),
(241, '예술'),
(10, '예술가'),
(205, '오피스룩'),
(202, '외모'),
(289, '요리'),
(43, '용돈'),
(74, '우유'),
(114, '운세'),
(85, '유기농'),
(165, '유목'),
(35, '유목민'),
(279, '유튜버'),
(134, '유튜브'),
(290, '음식'),
(68, '음악'),
(107, '이동'),
(223, '이야기꾼'),
(258, '인간 관계'),
(132, '인방'),
(18, '인사이트'),
(5, '인싸'),
(13, '인테리어'),
(186, '일관성'),
(30, '일인 기업'),
(201, '자기 관리'),
(239, '자립'),
(288, '자영업자'),
(240, '자유'),
(55, '자유로움'),
(92, '자취'),
(14, '장인'),
(266, '재벌'),
(4, '재치'),
(36, '재택근무'),
(217, '적극적'),
(31, '전문가'),
(208, '전문적'),
(50, '전문직'),
(98, '절약'),
(6, '정교함'),
(129, '제작'),
(194, '젠틀맨'),
(270, '주부'),
(191, '중고'),
(26, '즉흥적'),
(1, '지식인'),
(233, '지원가'),
(63, '직장인'),
(157, '질풍노도'),
(122, '집 보안관'),
(102, '집돌이'),
(101, '집순이'),
(269, '집안일'),
(73, '짭짤함'),
(32, '찐따'),
(140, '차박'),
(173, '창업'),
(242, '창작'),
(234, '철판'),
(59, '철학'),
(149, '촬영'),
(103, '취업'),
(104, '취업 준비'),
(80, '치느님'),
(83, '치맥'),
(72, '치즈'),
(81, '치킨'),
(147, '카메라'),
(71, '캐주얼'),
(139, '캠핑'),
(64, '커피'),
(181, '코더'),
(179, '코딩'),
(280, '콘텐츠'),
(152, '콜렉터'),
(281, '크리에이터'),
(198, '클래식'),
(21, '탐험'),
(82, '통닭'),
(267, '통뼈'),
(17, '통찰력'),
(133, '트위치'),
(65, '티타임'),
(221, '팀 플레이'),
(220, '팀원'),
(45, '파트타임'),
(115, '팔자'),
(204, '패션'),
(212, '펑퍼짐'),
(159, '평범함'),
(254, '플래너'),
(193, '헌 옷'),
(260, '헤드 헌터'),
(257, '현실적'),
(219, '협력'),
(28, '홀로서기'),
(274, '화가'),
(62, '화이트칼라'),
(69, '후드'),
(70, '후드티'),
(236, '후안무치'),
(27, '흘러가는 대로'),
(66, '힙합');

-- --------------------------------------------------------

--
-- 테이블 구조 `skill`
--

CREATE TABLE `skill` (
  `skill_code` int(11) NOT NULL,
  `skill_name` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'skill_name',
  `skill_desc` varchar(500) CHARACTER SET utf8 NOT NULL DEFAULT 'skill_desc',
  `skill_img` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '/hoodify/img/identity/hooodify_mini.png	',
  `identity_code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `skill`
--

INSERT INTO `skill` (`skill_code`, `skill_name`, `skill_desc`, `skill_img`, `identity_code`) VALUES
(1, '암기법', '여러 이름과 년도 등의 구체적인 정보를 기억해내는 자신만의 암기법이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 1),
(2, '순발력', '좋은 유머란 적절한 타이밍을 맞춘 유머입니다. 자신감 있거나 잘 준비된 내용일수록 이 순발력을 발휘하기 쉽습니다.', '/hoodify/img/identity/hooodify_mini.png	', 3),
(3, '밈에 대한 이해', '유행하는 여러 콘텐츠를 이해하고 적재적소에 활용할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 3),
(4, '문화에 대한 이해', '듣는 사람의 문화를 이해하고 있을 때 유머의 코드를 맞출 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 3),
(5, '정교함', '작고 세심한 작업까지 능숙하게 해낼 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 4),
(6, '배경지식', '작업 대상에 대한 경험과 배경지식은 더 정교한 작업을 가능하게 합니다.', '/hoodify/img/identity/hooodify_mini.png	', 4),
(7, '심리학', '여러 상황에서 가지는 사람의 심리를 이해한다면 상대방에게서 더 좋은 조건을 이끌어낼 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 5),
(8, '배경지식', '상황에서 중요한 쟁점이 무엇인지 알고 있습니다. 더 많은 것을 알고 있을수록 더 좋은 거래를 할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 5),
(9, '색과 구도', '색과 구도에 대한 감각입니다. 여러 교육과 훈련 및 경험을 통해 강화될 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 6),
(10, '게임 지식', '게임의 패턴을 파악해 상황을 예측하고 능숙하게 대처할 수 있습니다. 보기에는 쉬워보여도 수많은 시행착오와 경험이 필요합니다.', '/hoodify/img/identity/hooodify_mini.png	', 7),
(11, '배경지식', '알고 있는 것이 많을수록 더 많이 볼 수 있습니다. 단순히 암기하고 있는 지식이 아니라 상황에 맞게 적용할 수 있는 진짜 지식입니다.', '/hoodify/img/identity/hooodify_mini.png	', 8),
(12, '추진력', '너무 많은 생각은 포기해야할 이유를 만들 뿐입니다.', '/hoodify/img/identity/hooodify_mini.png	', 9),
(13, '안전망 구축', '무모함을 경계해야합니다. 적절한 안전망은 일을 더 능숙하게 처리할 여유를 줍니다.', '/hoodify/img/identity/hooodify_mini.png	', 9),
(14, '설득력', '때로는 다른 사람에게 당신의 도전에 대해서 설명하고 그 사람들을 설득시킬 필요가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 9),
(15, '마이웨이', '남들과 달라진다는 것은 때로 그들을 불편하게 만드는 일입니다. 모든 사람들을 설득할 필요는 없습니다. 그저 묵묵히 자신의 일을 해내도록 합시다.', '/hoodify/img/identity/hooodify_mini.png	', 9),
(16, '능률', ' 적은 시간과 노력을 가지고 효율적으로 일하는 방법을 압니다. 게으르기 위해 누구보다 능률적으로 일할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 10),
(17, '마이웨이', '남들이 어떻게 하든 휘둘리지 않고 자신의 방식으로 일합니다.', '/hoodify/img/identity/hooodify_mini.png	', 11),
(18, '다양한 능력', '혼자 일하며 다양한 분야를 감당하기 위해서는 다양한 지식과 능력을 섭렵할 필요가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 12),
(19, '마이웨이', '혼자 지내는 사람들을 이상하게 바라보는 시선이 있습니다. 이 사람들은 그런 것에 아랑곳하지 않습니다.', '/hoodify/img/identity/hooodify_mini.png	', 12),
(20, '마이웨이', '남의 시선과 평판에는 신경쓰지 않고 자신의 관심사에만 몰두합니다.', '/hoodify/img/identity/hooodify_mini.png	', 13),
(21, '컴퓨터 활용', '컴퓨터를 사용하는 작업에 능숙하며 여러 협업 툴에도 익숙합니다.', '/hoodify/img/identity/hooodify_mini.png	', 14),
(22, '전문성', '멀리서도 일을 구하기 위해서는 그만한 전문성을 갖춰야합니다.', '/hoodify/img/identity/hooodify_mini.png	', 14),
(23, '언어 능력', '다른 언어권의 일을 하거나 외국에서 생활한다면 그에 맞는 언어를 잘 사용할 수 있어야합니다.', '/hoodify/img/identity/hooodify_mini.png	', 14),
(24, '해외 거주', '다른 나라에서 생활하기로 한다면 그곳에서 생활하기 위한 여러 지식과 노하우가 필요합니다.', '/hoodify/img/identity/hooodify_mini.png	', 14),
(25, '처세술', '적절한 대인관계 기술은 다른 사람과 생기는 갈등을 줄여줍니다.\r\n', '/hoodify/img/identity/hooodify_mini.png	', 2),
(26, '대인 서비스', '서비스업에서 다른 사람을 대하는 기술입니다. 손님의 요청 사항을 능숙하게 처리합니다.', '/hoodify/img/identity/hooodify_mini.png	', 15),
(27, '근로노동법', '고용 형태에 따라 근무 조건이 법으로 정해져있습니다. 이를 정확히 숙지하고 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 15),
(28, '전문 지식', '자신의 전문 분야에서 누구보다 잘 알고 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 16),
(29, '영어', '많은 분야의 최신 지식은 영어로 다뤄집니다. ', '/hoodify/img/identity/hooodify_mini.png	', 16),
(33, '글쓰기', '풍부한 표현, 정확한 묘사, 참신한 생각 모두 글쓰기를 탁월하게 만들어줍니다.', '/hoodify/img/identity/hooodify_mini.png	', 17),
(34, '배경지식', '주제에 대한 배경지식은 글을 더 풍부하게 만들어줍니다.', '/hoodify/img/identity/hooodify_mini.png	', 17),
(35, '맞춤법', '정확한 맞춤법은 글을 흠잡음없게 만들어줍니다.', '/hoodify/img/identity/hooodify_mini.png	', 17),
(36, '전문성', '자신의 분야에 대한 전문성은 프리랜서로서 성공하기 위한 필수 사항입니다.', '/hoodify/img/identity/hooodify_mini.png	', 18),
(37, '생산성', '일에 대한 권한이 더 많은 만큼 높은 생산성을 발휘할 수 있습니다. 그리고 그 몫은 온전히 프리랜서 자신의 몫이 됩니다.', '/hoodify/img/identity/hooodify_mini.png	', 18),
(38, '마케팅', '자신이 무엇을 할 수 있고 얼마나 뛰어난지 스스로 알려야 합니다. ', '/hoodify/img/identity/hooodify_mini.png	', 18),
(39, '세무', '근로자로 일했을때는 직접 처리하지 않아도 되었던 세무를 관리해야합니다.', '/hoodify/img/identity/hooodify_mini.png	', 18),
(40, '배경지식', '설계하는 대상에 관련된 배경지식은 설계를 더 구체적이고 실행가능한 것으로 만듭니다.', '/hoodify/img/identity/hooodify_mini.png	', 19),
(41, '논리', '이유와 원리에 대해서 논리적으로 밝혀냅니다. 추상적이거나 감정적으로 생각하지 않습니다.', '/hoodify/img/identity/hooodify_mini.png	', 20),
(42, '토론', '주제에 대한 여러 견해와 주장을 이해하고 자신의 생각으로 받아칠 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 20),
(43, '문서 작성', '각종 양식에 맞춰 서류를 작성하는 데에 능숙합니다.', '/hoodify/img/identity/hooodify_mini.png	', 21),
(44, '의사소통', '자신의 의사를 명확하게 전달할 수 있고 상대가 하는 말의 핵심을 알아차릴 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 21),
(45, '커피 지식', '다양한 커피의 종류와 제조 방법 관련 역사 등에 대해 알고있습니다. 아는만큼 즐길 거리도 많아집니다.', '/hoodify/img/identity/hooodify_mini.png	', 23),
(46, '힙합 음악', '힙합 장르의 특징과 감상 포인트에 대해서 알고 있습니다. 여러 아티스트와 그들의 작품에 대해 알고 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 24),
(47, '코디', '후드에 어울리게 입는 방법을 알고 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 25),
(48, '매콤하게 먹는 법', '매콤한 맛을 내고 그것이 음식에 잘 어우러지도록 하는 방법을 알고 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 27),
(49, '민트 풍미', '민트와 어울리는 음식과 민트 맛을 즐기는 방법을 알고 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 28),
(50, '치킨을 먹는 법', '치킨을 먹는 자신만의 원칙과 방법이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 29),
(51, '샐러드 먹는법', '샐러드에 어울리는 여러 재료와 드레싱의 조합법에 대해 알고 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 30),
(52, '미니멀 디자인', '무엇을 덜어낼 수 있는지 구별할 수 있는 안목이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 31),
(53, '집안일', '아무나 할 수 있는 일처럼 보이지만 여러 노하우와 기술이 필요합니다.', '/hoodify/img/identity/hooodify_mini.png	', 32),
(54, '자취 요리', '있는 재료들로 간편하면서도 맛있는 음식을 만들 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 32),
(55, '고양이 지식', '고양이의 습성, 표현 방식, 건강 등에 관한 지식입니다.', '/hoodify/img/identity/hooodify_mini.png	', 33),
(56, '수면 관리', ' 일반적인 생활 패턴에서 벗어날 경우 좋은 질의 수면을 위한 관리가 따로 필요할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 34),
(57, '현명한 소비', '꼭 필요한 것을 분별할 수 있습니다. 좋은 상품을 가려낼 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 35),
(58, '최적화', '방에서 즐거움을 만끽하는 자신만의 최적화 방법이 있습니다. 해야할 일들을 끝낸 후 자리를 정리하고 간식을 준비합니다.', '/hoodify/img/identity/hooodify_mini.png	', 36),
(59, '솔직함', '자신을 솔직하게 표현할 수 있는 능력입니다. ', '/hoodify/img/identity/hooodify_mini.png	', 37),
(60, '대중교통', '목적지까지 가는 대중교통 루트를 잘 알고 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 38),
(61, '건강 관리', '자신의 몸에 대해 잘 알고 그에 맞춰 일상을 관리합니다.', '/hoodify/img/identity/hooodify_mini.png	', 39),
(62, '자기 관리', '연애를 못하는 것과 안 하는 것의 차이에는 꾸준한 자기 관리가 있습니다. 훌륭하고 매력적인 사람에게 연애는 선택의 문제입니다.', '/hoodify/img/identity/hooodify_mini.png	', 40),
(63, '도움 구하기', '상황에 맞게 적절한 도움을 구하는 능력이 필요합니다. ', '/hoodify/img/identity/hooodify_mini.png	', 41),
(64, '긍정적 마인드', '자포자기하지 않고 자신이 할 수 있는 일을 찾아냅니다. ', '/hoodify/img/identity/hooodify_mini.png	', 41),
(65, '도움 구하기', '주변에 자신의 상태에 대해서 알리고 도움을 구할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 42),
(66, '궁여지책', '살림을 최소화하고 적은 자원으로도 살아갈 수 있는 능력입니다.', '/hoodify/img/identity/hooodify_mini.png	', 43),
(67, '공구 다루기', '여러 공구를 능숙하게 다룰 수 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 44),
(68, '밈', '해당 방송인고 관련 콘텐츠에 대한 밈을 이해하고 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 45),
(69, '언어', '여행하는 곳의 언어에 익숙하다면 여행에 여러모로 도움이 됩니다.', '/hoodify/img/identity/hooodify_mini.png	', 46),
(70, '문화', '여행하는 곳의 문화를 알고 있다면 오해를 피하고 더 깊이있는 여행이 됩니다.', '/hoodify/img/identity/hooodify_mini.png	', 46),
(71, '캠핑 지식', '불을 지피거나 텐트 자리를 잡는 등 캠핑에 필요한 다양한 지식과 노하우가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 47),
(72, '캠핑 명당', '캠핑에 좋은 여러 자리를 알고 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 47),
(73, '메모', '산책을 하면서 얻는 아이디어를 기록하는 자신만의 방법이 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 48),
(74, '촬영 기술', '구도를 잡고 색감을 조정하는 등 더 세련된 사진을 찍기 위한 기술입니다.', '/hoodify/img/identity/hooodify_mini.png	', 49),
(75, '배경지식', '수집품과 관련된 지식입니다. 깊은 배경지식은 물건을 고르는 안목을 주고 그것을 더 가치있게 만듭니다.', '/hoodify/img/identity/hooodify_mini.png	', 50),
(76, '발성', '좋은 목소리는 적절한 훈련을 통해 매력을 더 극대화시킬 수 있습니다. 목에 부담을 주지 않으면서 정확하게 발성하는 방법을 압니다.', '/hoodify/img/identity/hooodify_mini.png	', 51),
(77, '유연함', '새로운 환경에 빠르게 적응합니다. 그곳의 문화와 가치관을 받아들일 준비가 되어있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 54),
(78, '정리정돈', '자신이 가지고 있는 것들에 대한 우선순위가 분명하고 필요하지 않는 것들은 과감히 처리할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 54),
(79, '기업가정신', '여러 불확실함과 위험을 무릅쓰고 아이디어를 실현하는 도전 정신입니다. 이 일을 해야하는 분명한 이유와 동기가 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 55),
(80, '추진력', '일을 진행시키고 결과를 만들어내는 능력입니다. 스타트업의 생존과 직결되어있는 필수 역량입니다.', '/hoodify/img/identity/hooodify_mini.png	', 55),
(81, '인적 자원 관리', '결국은 사람입니다. 시스템이 없는 조직은 모든 것이 구성원들의 역량과 협력에 달려 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 55),
(82, '문제 해결', '만들어야할 기능을 정의하고 그것을 어떻게 구현해야할 것인지 생각하고 코드로 구현할 수 있습니다. 간단해보이지만 높은 수준의 지적 능력이 필요합니다.', '/hoodify/img/identity/hooodify_mini.png	', 56),
(83, '영어', '영어가 가능하다면 더 방대한 창고를 이용할 수 있습니다. 더 다양한 레퍼런스를 찾고 더 많은 사람들에게 양질의 피드백을 받을 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 56),
(84, '컴퓨터 언어', '자신에게 익숙한 언어와 프레임워크가 있습니다. 그 환경에서는 더 빠르고 정확하게 개발할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 56),
(85, '오픈 마인드', '컴퓨터 언어와 관련 분야는 새로운 기술이 빠르게 나옵니다. 항상 배우는 자세와 새로운 것을 적용할 수 있는 열린 마음이 필요합니다.', '/hoodify/img/identity/hooodify_mini.png	', 56),
(86, '작물', '재배하는 종의 특성에 대해 알고 있습니다. 어떤 환경을 조성해야 하는지, 무엇이 필요하고 무엇을 조심해야하는지 알고 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 57),
(87, '농사일', '작물을 재배하는 도구와 기계를 능숙하게 다룰줄 압니다.', '/hoodify/img/identity/hooodify_mini.png	', 57),
(88, '문제 해결', '삶은 문제가 생기고 그것을 해결하는 과정의 연속입니다. 그 속에서 문제를 다루는 자신만의 방법을 터득하게 됩니다.', '/hoodify/img/identity/hooodify_mini.png	', 59),
(89, '배경 지식', '게임을 만드는 회사나 스튜디오 그리고 게임이 만들어지고 배포되는 과정에 대해 알고 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 60),
(90, '세계관', '게임 속 스토리와 세계관에 대해 안다면 더 몰입해 즐길 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 60),
(91, '빈티지 코디', '자신의 체형과 취향에 맞게 빈티지 코디를 맞출 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 61),
(92, '배경 지식', '클래식 문화는 관련된 지식을 아는만큼 즐길 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 63),
(93, '코디', '자신의 체형과 취향에 따라 클래식한 스타일을 연출할 수 있습니다.\r\n', '/hoodify/img/identity/hooodify_mini.png	', 63),
(94, '코디', '자신에게 맞는 옷을 찾아 입을 수 있습니다. 어울리는 옷들의 조합에 대해 알고 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 64),
(95, '비즈니스 캐주얼 코디', '자신의 취향과 체형에 맞춰 괜찮은 비즈니스 캐주얼 룩을 코디할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 65),
(96, '오버핏 코디', '오버핏 코디의 옷들로 적절한 스타일을 연출할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 66),
(97, '유머 감각', '적절한 상황에서 하는 적절한 말은 분위기를 한껏 즐겁게 만듭니다.', '/hoodify/img/identity/hooodify_mini.png	', 67),
(98, '리액션', '풍부한 리액션은 대화를 더 즐겁게 만듭니다.', '/hoodify/img/identity/hooodify_mini.png	', 67),
(99, '인간관계', '다른 사람에 대한 관심과 배려는 인싸를 더욱 매력적으로 만들어줍니다.', '/hoodify/img/identity/hooodify_mini.png	', 68),
(100, '의사소통', '능숙한 의사소통 기술은 협업을 위한 필수 능력입니다. 각자의 전문성만큼 팀의 성패를 가릅니다.', '/hoodify/img/identity/hooodify_mini.png	', 69),
(101, '묘사', '상황을 마치 눈앞에서 보듯 생생하게 표현하는 능력입니다. ', '/hoodify/img/identity/hooodify_mini.png	', 70),
(102, '처세술', '다른 사람과 원만한 관계를 유지하면서 자신의 에너지를 유지하는 적절한 방법에 대해 알고 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 71),
(103, '처세술', '분위기나 다른 사람의 기분을 해치지 않고 상황을 피하는 방법을 알고 있습니다. 자신의 에너지를 지키는 기술입니다. ', '/hoodify/img/identity/hooodify_mini.png	', 72),
(104, '의사소통', ' 상대방이 무엇을 말하는지 이해하고 그에 대해 적절히 반응하는 능력입니다. ', '/hoodify/img/identity/hooodify_mini.png	', 73),
(105, '배경지식', ' 자신이 서포트하는 대상에 대한 지식은 더 깊이있는 서포팅을 할 수 있게 만듭니다.', '/hoodify/img/identity/hooodify_mini.png	', 74),
(106, '마이웨이', '남들의 시선에 크게 신경쓰지 않습니다. 자신의 신념과 생각대로 말하고 행동합니다.', '/hoodify/img/identity/hooodify_mini.png	', 75),
(107, '경제 활동', '일을 하고 돈을 버는 것은 당연한듯 보이지만 많은 조건을 만족시켜야 하는 고도의 활동입니다. ', '/hoodify/img/identity/hooodify_mini.png	', 76),
(108, '성숙함', '다른 사람의 관계에 집착하지 않습니다. 정신적으로 부족함이 없을 때 진정한 홀로서기가 가능합니다.', '/hoodify/img/identity/hooodify_mini.png	', 76),
(109, '창작', '영감을 통해 창작을 하는 자신만의 방법과 노하우가 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 77),
(110, '생산성', '급박한 데드라인에 맞춰 폭발적인 생산성을 발휘할 수 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 78),
(111, '일정 관리', '일정을 조율하고 그 기간에 맞춰 일을 관리할 수 있는 능력입니다.', '/hoodify/img/identity/hooodify_mini.png	', 78),
(112, '통찰력', '누군가에게는 그저 스쳐 지나가는 것들도 이 사람들에게는 번뜩이는 아이디어가 됩니다. 좋은 아이디어와 아닌 것을 구별할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 79),
(113, '시간 관리', '시간에 대한 예민한 감각은 계획의 실현 가능성을 높여줍니다.', '/hoodify/img/identity/hooodify_mini.png	', 80),
(114, '추진력', '계획은 추진력을 통해 실현됩니다. ', '/hoodify/img/identity/hooodify_mini.png	', 80),
(115, '배경지식', '현실감각과 분별력은 결국 상황을 정확히 이해하는 데에서 옵니다. 더 많이 알수록 가능한 것과 불가능한 것을 구별하는 안목이 생깁니다.', '/hoodify/img/identity/hooodify_mini.png	', 81),
(116, '말하는 방법', '때로 현실적인 말은 상처가 됩니다. 그것을 상대방이 납득할 수 있도록 말하는 방법을 알고 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 81),
(117, '대화주도', '어색할 수 있는 자리에서 대화를 주도하고 분위기를 이끌어갈 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 82),
(118, '매너', '사람의 성향이나 문화에 대해 이해하고 이를 배려할줄 압니다.', '/hoodify/img/identity/hooodify_mini.png	', 62),
(119, '교양', '사회의 여러 이슈에 대해 알고있고 다양한 주제에 대해 얘기나눌 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 62),
(120, '치즈 지식', '다양한 치즈의 종류와 맛있게 즐기는 방법에 대해서 알고 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 26),
(121, '궁여지책', '지출을 줄이고 적은 돈으로도 생활할 수 있는 능력입니다. ', '/hoodify/img/identity/hooodify_mini.png	', 83),
(122, '자산 관리', '관리할만한 자산이 있다면 제대로 관리하는 법을 배워야 합니다.', '/hoodify/img/identity/hooodify_mini.png	', 84),
(123, '신체 능력', '근력, 지구력, 순발력 등 사람이 발휘할 수 있는 여러 신체 능력입니다. ', '/hoodify/img/identity/hooodify_mini.png	', 85),
(124, '집안 요리', '맛있고 영양이 풍부한 요리를 만듭니다. 재료에 낭비가 없고 음식을 만드는 과정이 군더더기가 없습니다.', '/hoodify/img/identity/hooodify_mini.png	', 86),
(125, '청소', '어느 곳을 어떻게 청소해야 하는지 알고 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 86),
(126, '지리', '배달 지역의 지리를 잘 알고 있습니다. 막히는 구간이나 지름길 등에 대해 알고 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 87),
(127, '구도와 채색', '적절한 구도와 채색으로 주제를 효과적으로 표현할 수 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 88),
(128, '패션', '여러 코디로 다양한 분위기와 스타일을 연출해낼 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 89),
(129, '관리', '몸을 가꾸고 유지하기 위한 지식입니다. 오랜 경험과 다양한 시도로 자신에게 맞는 방법을 알고 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 89),
(130, '연기', '주제나 상황에 맞게 연기할 수 있습니다. 출중한 연기력은 결과물에 대체할 수 없는 깊이를 더해줍니다.', '/hoodify/img/identity/hooodify_mini.png	', 89),
(131, '영상 촬영 & 편집', '동영상은 강력한 콘텐츠 형태입니다. 영상을 촬영하고 편집할 수 있다면 더 많은 사람들에게 효과적으로 콘텐츠를 알릴 수 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 90),
(132, '센스', '사람들의 관심을 끌고 유지하기 위해서는 적절한 센스가 필요합니다.', '/hoodify/img/identity/hooodify_mini.png	', 90),
(133, '배경지식', '기획하는 분야에 대한 지식은 기획을 더 정교하고 실현 가능한 것으로 만듭니다.', '/hoodify/img/identity/hooodify_mini.png	', 91),
(134, '일정 관리', '사람들의 일정을 조율하고 관리하는 능력입니다. 모든 프로젝트와 조직 활동에서 필요합니다.', '/hoodify/img/identity/hooodify_mini.png	', 91),
(138, '컴퓨터 언어', '자신이 주로 쓰는 개발 언어가 있고 그것을 능숙하게 사용할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 92),
(139, '의사소통', '의사소통 능력은 개발 과정에서 발생하는 시행착오를 크게 줄여줍니다. ', '/hoodify/img/identity/hooodify_mini.png	', 92),
(140, '게임 배경지식', '게임에 대한 이해가 바탕이 된다면 기획 의도와 개발 방향에 대해 더 잘 이해할 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 92),
(141, '경엉', '사업을 운영하는 전반적인 능력입니다. 자원을 관리하고 수익을 낼 수 있습니다.', '/hoodify/img/identity/hooodify_mini.png	', 93),
(142, '마케팅', '좋은 상품과 서비스라도 사람들이 모른다면 팔리지 않습니다. 잠재고객에게 홍보하고 고객을 늘리는 능력입니다.', '/hoodify/img/identity/hooodify_mini.png	', 93),
(143, '서비스', '작은 관심과 배려로 단골을 만듭니다. 고객이 무엇을 원하는지 파악하고 가려운 곳을 긁어줍니다.', '/hoodify/img/identity/hooodify_mini.png	', 93),
(144, '재료 다루기', '여러 요리 재료들을 어떻게 보관하고 손질해야 하는지 알고 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 94),
(145, '요리', '다양한 요리에 대해 알고 있고 그것을 만들 수 있습니다. ', '/hoodify/img/identity/hooodify_mini.png	', 94);

-- --------------------------------------------------------

--
-- 테이블 구조 `user`
--

CREATE TABLE `user` (
  `user_code` int(20) NOT NULL,
  `user_mail` varchar(40) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_code`),
  ADD KEY `acivity_identity` (`identity_code`);

--
-- 테이블의 인덱스 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_code`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- 테이블의 인덱스 `caution`
--
ALTER TABLE `caution`
  ADD PRIMARY KEY (`caution_code`),
  ADD KEY `caution_identity` (`identity_code`);

--
-- 테이블의 인덱스 `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_code`);

--
-- 테이블의 인덱스 `identity`
--
ALTER TABLE `identity`
  ADD PRIMARY KEY (`identity_code`);

--
-- 테이블의 인덱스 `identity_category`
--
ALTER TABLE `identity_category`
  ADD PRIMARY KEY (`identity_category_code`),
  ADD KEY `relation2_identity` (`identity_code`),
  ADD KEY `relation_category` (`category_code`);

--
-- 테이블의 인덱스 `identity_keyword`
--
ALTER TABLE `identity_keyword`
  ADD PRIMARY KEY (`identity_keyword_code`),
  ADD KEY `relation_identity` (`identity_code`),
  ADD KEY `relation_keyword` (`keyword_code`);

--
-- 테이블의 인덱스 `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_code`),
  ADD KEY `item_identity` (`identity_code`);

--
-- 테이블의 인덱스 `keyword`
--
ALTER TABLE `keyword`
  ADD PRIMARY KEY (`keyword_code`),
  ADD UNIQUE KEY `keyword_name` (`keyword_name`);

--
-- 테이블의 인덱스 `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skill_code`),
  ADD KEY `skill_identity` (`identity_code`);

--
-- 테이블의 인덱스 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_code`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- 테이블의 AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `category_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- 테이블의 AUTO_INCREMENT `caution`
--
ALTER TABLE `caution`
  MODIFY `caution_code` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- 테이블의 AUTO_INCREMENT `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_code` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 테이블의 AUTO_INCREMENT `identity`
--
ALTER TABLE `identity`
  MODIFY `identity_code` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- 테이블의 AUTO_INCREMENT `identity_category`
--
ALTER TABLE `identity_category`
  MODIFY `identity_category_code` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- 테이블의 AUTO_INCREMENT `identity_keyword`
--
ALTER TABLE `identity_keyword`
  MODIFY `identity_keyword_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=266;

--
-- 테이블의 AUTO_INCREMENT `item`
--
ALTER TABLE `item`
  MODIFY `item_code` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- 테이블의 AUTO_INCREMENT `keyword`
--
ALTER TABLE `keyword`
  MODIFY `keyword_code` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;

--
-- 테이블의 AUTO_INCREMENT `skill`
--
ALTER TABLE `skill`
  MODIFY `skill_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- 테이블의 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `user_code` int(20) NOT NULL AUTO_INCREMENT;

--
-- 덤프된 테이블의 제약사항
--

--
-- 테이블의 제약사항 `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `acivity_identity` FOREIGN KEY (`identity_code`) REFERENCES `identity` (`identity_code`);

--
-- 테이블의 제약사항 `caution`
--
ALTER TABLE `caution`
  ADD CONSTRAINT `caution_identity` FOREIGN KEY (`identity_code`) REFERENCES `identity` (`identity_code`);

--
-- 테이블의 제약사항 `identity_category`
--
ALTER TABLE `identity_category`
  ADD CONSTRAINT `relation2_identity` FOREIGN KEY (`identity_code`) REFERENCES `identity` (`identity_code`),
  ADD CONSTRAINT `relation_category` FOREIGN KEY (`category_code`) REFERENCES `category` (`category_code`);

--
-- 테이블의 제약사항 `identity_keyword`
--
ALTER TABLE `identity_keyword`
  ADD CONSTRAINT `relation_identity` FOREIGN KEY (`identity_code`) REFERENCES `identity` (`identity_code`),
  ADD CONSTRAINT `relation_keyword` FOREIGN KEY (`keyword_code`) REFERENCES `keyword` (`keyword_code`);

--
-- 테이블의 제약사항 `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_identity` FOREIGN KEY (`identity_code`) REFERENCES `identity` (`identity_code`);

--
-- 테이블의 제약사항 `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `skill_identity` FOREIGN KEY (`identity_code`) REFERENCES `identity` (`identity_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
