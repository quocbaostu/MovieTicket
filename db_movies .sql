-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 15, 2021 lúc 04:25 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_movies`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(60) NOT NULL,
  `mssv` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`, `name`, `email`, `mssv`) VALUES
('adminbao', '202cb962ac59075b964b07152d234b70', 'Trần Huỳnh Quốc Bảo', 'tranhuynhquocbao232@gmail.com', 'DH51703142'),
('adminduy', '202cb962ac59075b964b07152d234b70', 'Lê Duy', 'duyspecter@gmail.com', 'DH51703236'),
('adminkha', '202cb962ac59075b964b07152d234b70', 'Lương Văn Khá', 'luongvankha02021999@gmail.com', 'DH51705257'),
('adminthien', '202cb962ac59075b964b07152d234b70', 'Hứa Chấn Thiên', 'huachanthien@gmail.com', 'DH51705029'),
('admintri', '202cb962ac59075b964b07152d234b70', 'Nguyễn Mai Hữu Trí', 'tringuyen2091999@gmail.com', 'DH51705011');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `dm_id` varchar(5) CHARACTER SET utf8 NOT NULL,
  `dm_name` varchar(255) CHARACTER SET ucs2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`dm_id`, `dm_name`) VALUES
('pc', 'Phim Đang Chiếu'),
('psc', 'Phim Sắp Chiếu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `hd_id` int(10) NOT NULL,
  `dongia` int(100) NOT NULL,
  `ngaylaphd` varchar(50) NOT NULL,
  `social_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `phim_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `phim_name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `img` varchar(50) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `trailer` varchar(250) CHARACTER SET utf8 NOT NULL,
  `ngaybatdau` varchar(250) CHARACTER SET utf8 NOT NULL,
  `ngayketthuc` varchar(250) CHARACTER SET utf8 NOT NULL,
  `qg_id` varchar(5) CHARACTER SET utf8 NOT NULL,
  `cat_id` varchar(5) CHARACTER SET utf8 NOT NULL,
  `dm_id` varchar(5) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`phim_id`, `phim_name`, `img`, `description`, `trailer`, `ngaybatdau`, `ngayketthuc`, `qg_id`, `cat_id`, `dm_id`) VALUES
('1990', '1990', '199015.jpg', '1990 kể về hội bạn thân gồm ba cô gái với ba cá tính khác nhau. Khi ngưỡng tuổi “30 chênh vênh” ập đến với cả ba vào cùng một thời điểm, hàng loạt những vấn đề về hôn nhân, tình yêu, sự nghiệp,... lần lượt xuất hiện, buộc họ phải giúp đỡ nhau vượt qua cột mốc đầy sóng gió này.', 'https://www.youtube.com/embed/0509zlM8QA8', '2021-04-21', '2021-05-21', 'vn', 'tl', 'psc'),
('anquy', 'ẤN QUỶ', 'anquy5.jpg', 'Một cô gái khiếm thính gặp được Đức Mẹ Maria. Sau đó, cô có thể nghe, nói và chữa bệnh. Khi mọi người đến chứng kiến phép màu này, những sự kiện kinh khủng dần xảy ra. Đó thực sự là Đức Mẹ hay thế lực tà ác nào đó?  Kẻ mạo danh thần thánh từ phim The Unholy - Siêu phẩm kinh dị tháng 04 này đến từ \"ông trùm\" kinh dị Sam Raimi của Don\'t Breathe và Evil Dead.', 'https://www.youtube.com/embed/ORGObkH6fII', '2021-04-01', '2021-05-01', 'usa', 'kd', 'pc'),
('bantay', 'BÀN TAY DIỆT QUỶ', 'bantaydietquy78.jpg', 'Võ sĩ MMA Yong Hoo (Park Seo Joon) đi theo con đường trừ tà trục quỷ sau khi bỗng dưng sở hữu \"Bàn tay diệt quỷ\". Đối đầu với anh là Giám mục bóng tối - tên quỷ Satan đội lốt người. Dần dần, sự thật về cái chết của cha Yong Hoo và nguyên nhân anh trở thành \"người được chọn\" được hé lộ.', 'https://www.youtube.com/embed/uqJ9u7GSaYM', '2021-04-09', '2021-05-09', 'hq', 'hd', 'pc'),
('bayngotngao', 'BẪY NGỌT NGÀO', 'bayngotngao75.jpg', 'Nhóm bạn 4 người \"hội ế\" tái ngộ sau thời gian dài không gặp, vào đúng kỉ niệm ngày cưới thành viên nhóm - Camy. Cô là người duy nhất thoát ế, có cuộc sống trong mơ bên người chồng tài hoa Đăng Minh. Quỳnh Lam trở thành nhà thiết kế nổi tiếng, Linh Đan thành đạt ở vai trò luật sư, Ken mở phòng Gym. Từ buổi họp mặt ấy, những bí mật riêng tư của mỗi người dần hé lộ....', 'https://www.youtube.com/embed/1ElIav2gMQI', '2021-05-14', '2021-06-14', 'vn', 'tl', 'psc'),
('bogia', 'BỐ GIÀ', 'bogia25.jpg', 'Sau thành công của web-drama, Trấn Thành đã thừa thắng xông lên, hợp tác với đạo diễn Vũ Ngọc Đãng, biên kịch Nhi Bùi để thực hiện phiên bản điện ảnh của Bố Già. Cùng với Trấn Thành, các nhân vật còn lại vẫn tiếp tục được đảm nhiệm bởi các gương mặt đã từng xuất hiện trong phiên bản đầu tiên là NSND Ngọc Giàu, Tuấn Trần, Lê Giang… Ra mắt từ đầu năm 2020, đến thời điểm này, trung bình mỗi tập phim của Bố Già đều đạt trên 20 triệu lượt xem (cao nhất là tập 1 với 33 triệu lượt xem). Trong phim, Trấn Thành vào vai ông Tư – một tài xế xe ôm quần quật làm việc qua ngày để chăm lo cho gia đình của mình Xem thêm tại: https://www.galaxycine.vn/dat-ve/bo-gia\r\n\r\nXem thêm tại: https://www.galaxycine.vn/dat-ve/bo-gia', 'https://www.youtube.com/embed/g8_DQqqTabk', '2021-03-14', '2021-04-20', 'vn', 'gd', 'pc'),
('chiakhoatramty', 'CHÌA KHÓA TRĂM TÝ', 'chiakhoatramty27.jpg', 'Sau một năm 2020 thành công rực rỡ với Đôi Mắt Âm Dương, Tiệc Trăng Máu và đặc biệt là siêu phẩm Chị Mười Ba, \"nữ hoàng làng hài\" Thu Trang trở thành cái tên bảo chứng cho bất kỳ dự án nào mà cô tham gia.  Mở màn cho mùa phim Việt 2021, Thu Trang cùng người \"anh em\" lâu năm của mình là Kiều Minh Tuấn - nam diễn viên thuộc phái thực lực hàng đầu hiện nay, sẽ cùng góp mặt trong Chìa Khóa Trăm Tỷ của đạo diễn Võ Thanh Hòa.', 'https://www.youtube.com/embed/eM8DijtwwFE', '2021-07-30', '2021-08-30', 'vn', 'hai', 'psc'),
('chuyenma', 'CHUYỆN MA GẦN NHÀ', 'chuyenma81.jpg', 'Chuyện Ma Gần Nhà lấy cảm hứng từ các truyền thuyết đô thị tại Việt Nam, với phần đầu tiên gồm 3 chương chính lần lượt là Cô gái trên xe nước mía – Chung cư cũ  & Nhà ngoại cảm. Phim thuộc vũ trụ điện ảnh kinh dị - tâm lý đầu tiên tại Việt Nam.', 'https://www.youtube.com/embed/nmBqOZHl7ls', '2021-10-29', '2021-11-29', 'vn', 'tl', 'pc'),
('conan', 'CONAN', 'conan76.jpg', 'Hàng loạt vụ án xảy ra tại Tokyo khiến cảnh sát phải đau đầu! Ai là người đứng sau vụ án này? Tất cả sẽ được sáng tỏ nhờ tài trí của Shuichi Akai và Conan.   Lấy bối cảnh tại Tokyo, phim lấy thời gian Nhật Bản chuẩn bị để tổ chức Thế vận hội thể thao thế giới (WSG). Song song với sự kiện thể thao lớn nhất này là việc khai trương tuyến tàu điện Hyperlinear có tốc độc cực nhanh lên đến 1000km/ h.', 'https://www.youtube.com/embed/qZQJiyqBZHg', '2021-04-21', '2021-05-21', 'nb', 'hh', 'psc'),
('dreambuilders', 'DREAMBILDERS', 'dreambuilders11.jpg', 'Bạn có từng tưởng tượng “giấc mơ” của mình được tạo nên như thế nào chưa?    Nào Mình Cùng Mơ! là chuyến hành trình đầy màu sắc của cô bé Minna vào xứ sở của những giấc mơ, nơi có những “thợ xây mơ” dễ thương và rộn chuyện.    Cuộc sống của Minna đảo lộn khi cha cô tiến thêm bước nữa. Cô em gái Jenny mới đến là một “hot Instagram” khó ưa. Vì thế mà Minna quyết định xâm nhập và điều khiển giấc mơ, dạy cho Jenny một bài học. Và những màu nhiệm cũng như sự cố không ngờ đã xảy đến với “công xưởng giấc mơ”. Nào Mình Cùng Mơ! là bộ phim hoạt hình dễ thương và nhân văn cho cả gia đình trong những ngày đầu tháng 4 này.', 'https://www.youtube.com/embed/4MsZE1YB-R0', '2021-04-09', '2021-05-09', 'usa', 'hh', 'pc'),
('f9', 'QUÁ NHANH QUÁ NGUY HIỂM F9', 'f97.jpg', 'Fast & Furious 9 nói về trận chiến mới giữa Dom và những người đồng đội của mình. Lần này ngoại trừ nữ phản diện quen thuộc Cipher thì phim có thêm sự xuất hiện của nhân vật Jacob - em trai của Dom.', 'https://www.youtube.com/embed/LdprCQdFlfM', '2021-05-28', '2021-06-28', 'usa', 'hd', 'psc'),
('goaphuden', 'GÓA PHỤ ĐEN', 'goaphuden13.jpg', 'Cùng với cái chết của Iron Man, sự ra đi của Black Widow Natasha Romanoff là mất mát không thể thay thế của team Avengers. Người phụ nữ vừa mạnh mẽ vừa dịu dàng, coi Biệt Đội Siêu Anh Hùng như “gia đình” đã ra đi mãi mãi để đổi lấy viên đá linh hồn. Sự hy sinh của cô để lại trong lòng các fan vũ trụ điện ảnh Marvel niềm đau khó tả.', 'https://www.youtube.com/embed/8zyi9DrUb2Q', '2021-07-09', '2021-08-09', 'tq', 'hd', 'psc'),
('godzillavskong', 'GODZILLA VS KONG', 'KONG44.jpg', 'Cuộc chiến được chờ đợi nhất giữa hai siêu quái thú Godzilla và King Kong cuối cùng đã đến giờ G. Con người đóng vai trò gì trong trận battle siêu kinh điển này? Kết cục của thế giới sẽ ra sao? Có kinh phí đầu tư lên đến 165 triệu USD, Godzilla vs. Kong có thể là xem “cơn địa chấn” quái vật đầu tiên trong năm 2021 đến từ Hollywood. Dân ghiền phim có thể đang rất mong chờ sự tái xuất của hai siêu quái vật nổi tiếng nhất màn ảnh, theo như những hình ảnh trong trailer có thể thấy rằng cả King Kong lẫn Godzilla sẽ có màn “giáp lá cà” tưng bừng trong phim. Đặc sản của thương hiệu “vũ trụ quái vật” chính là hiệu ứng hình ảnh kỹ xảo bậc nhất và âm thanh đỉnh cao.', 'https://www.youtube.com/embed/AcfvncjOGS8', '2021-03-25', '2021-04-25', 'usa', 'khvt', 'pc'),
('josee', 'JOSSE: KHI NÀNG THƠ YÊU', 'josse39.jpg', '\"Đừng hứa sẽ bên nhau mãi mãi, hãy hứa sẽ đi cùng thật lâu.\"  Vì bệnh tật, cô nàng mộng mơ Josee phải ngồi trên xe lăn và sống nương tựa vào người bà. Tình cờ, Josee gặp chàng sinh viên năm cuối Tsuneo. Cậu nhận lời bà của Josee chăm sóc cho cô. Tsuneo là người đầu tiên giúp Josee hoà mình vào xã hội, giúp Josee trở nên tự tin vào chính mình hơn. Nhờ Tsuneo, tài năng vẽ tranh của Josee cũng được nhiều người biết đến. Không lâu sau, hàng loạt những biến cố trong cuộc sống bỗng dồn dập kéo đến...', 'https://www.youtube.com/embed/QdMH4SF2XYw', '2021-04-09', '2021-05-09', 'nb', 'hh', 'pc'),
('kieu', 'KIỀU', 'kieu34.jpg', 'Được lấy cảm hứng từ tác phẩm Truyện Kiều của đại thi hào Nguyễn Du, phim điện ảnh cổ trang Kiều chắt lọc những tình huống bi thương và hạnh phúc nhất trong chặng đời đầy truân chuyên của Thúy Kiều - một thân phận tài hoa và bạc mệnh. Sau khi bán mình chuộc cha, bị Mã Giám Sinh và Tú Bà lừa vào lầu xanh, Kiều với tài “cầm kỳ thi họa” đã trở thành một kỹ nữ tài sắc vẹn toàn khiến cho bao kẻ si mê. Nhưng “chữ tài liền với chữ tai”, nàng luôn đứng trước nguy cơ bị chiếm đoạt, hãm hại… Liệu những sóng gió gì sẽ lại ấp đến đời Kiều?', 'https://www.youtube.com/embed/QJH2OinB4a4', '2021-04-07', '2021-05-07', 'vn', 'tl', 'pc'),
('latmat48h', 'LẬT MẬT: 48H', '300-lat-mat_161484211258473.jpg', 'Một gia đình bị truy đuổi giữa vùng sông nước. Cơ hội nào cho người đàn ông cứu lấy vợ con khỏi bọn xã hội đen máu mặt? Trong phần 5 này, đạo diễn Lý Hải đã “mạnh tay” mời đạo diễn Kim Jung Min từ Hàn Quốc sang Việt Nam làm cố vấn hành động cho đoàn phim. Được biết, Kim Jung Min cũng chính là đạo diễn hành động của phim hay ra mắt năm 2018 The Witch: Part 1. The Subversion. Theo nhận xét của giới chuyên môn, yếu tố hành động trong siêu phẩm này được đánh giá cao bởi sự độc đáo, mạnh mẽ và ác liệt. Và với sự thể hiện này, tại giải thưởng điện ảnh danh giá Rồng Xanh lần thứ 39, Kim Jung Min và Park Jung Ryul đã nhận được đề cử ở hạng mục Kỹ thuật cho phần chỉ đạo hành động xuất sắc nhất.', 'https://www.youtube.com/embed/jox0zmGyHLU', '2021-04-14', '2021-05-14', 'vn', 'hd', 'pc'),
('lucchet', 'KHÔNG PHẢI LÚC CHẾT', 'lucchet92.jpg', 'Trong \"No Time To Die\", Bond không còn hoạt động tình báo mà đang tận hưởng cuộc sống yên bình ở Jamaica. Tuy nhiên, quãng thời gian nghỉ ngơi của anh không kéo dài được lâu khi người bạn cũ Felix Leiter từ CIA xuất hiện, cầu xin sự giúp đỡ. Bond sẽ thực hiện nhiệm vụ giải cứu nhà khoa học bị bắt cóc, và từ đó dẫn anh đến với tên ác nhân sở hữu một loại công nghệ nguy hiểm', 'https://www.youtube.com/embed/ITR7wrON0yc', '2021-10-08', '2021-11-08', 'usa', 'hd', 'psc'),
('mortalkombat', 'MORTAL KOMBAT', 'kombat12.jpg', 'Võ sĩ Cole Young mang trên người vết chàm rồng đen bí ẩn - biểu tượng của Mortal Kombat. Cole chẳng hề biết về dòng máu bí ẩn của mình cũng như tại sao tên sát thủ Sub-Zero săn lùng anh. Vì bảo vệ gia đình, Cole cùng một nhóm chiến binh được tuyển chọn để tham gia một trận chiến đẫm máu.', 'https://www.youtube.com/embed/Eru0ZDdfcvw', '2021-04-09', '2021-05-09', 'usa', 'hd', 'pc'),
('ongnhi', 'ONG NHÍ PHIÊU LƯU KÍ', 'ongnhi49.jpg', 'Vì quá háo hức chào đón mùa xuân, Maya và Willy đã thức dậy khỏi giấc ngủ đông sớm hơn dự định. Đôi bạn vô tình nhận một nhiệm vụ đặc biệt – bảo vệ và đưa quả trứng vàng đến ngôi nhà mới. Rắc rối bắt đầu khi quả trứng nứt ra và công chúa kiến bé nhỏ ra đời. Maya, Willy và những người bạn đồng hành phải phối hợp cùng nhau để chăm sóc và bảo vệ công chúa kiến khỏi vô vàn nguy hiểm xung quanh.', 'https://www.youtube.com/embed/qjcNehxk67c', '2021-04-23', '2021-05-23', 'duc', 'hh', 'psc'),
('rungthemang', 'RỪNG THẾ MẠNG', 'RUNGHTEMANG7.jpg', 'Phim được thực hiện dựa trên các sự kiện có thật xảy ra tại một trong những cung đường trekking nổi tiếng nhất nước ta: Tà Năng - Phan Dũng. Đây cũng là tác phẩm đầu tiên của điện ảnh Việt Nam làm về chủ đề sinh tồn.', 'https://www.youtube.com/embed/a7HSLTWLm2U', '2021-06-11', '2021-07-11', 'vn', 'kd', 'psc'),
('satnhan', 'SÁT NHÂN TRONG GƯƠNG', 'satnhan0.jpg', 'Khu Cabrini-Green tại Chicago không biết tự lúc nào bị ám ảnh bởi nỗi sợ hãi về một kẻ giết người siêu nhiên với chiếc tay móc câu. Để triệu hồi kẻ thủ ác này, chỉ cần nhắc tên hắn năm lần trước gương.  Nhiều năm sau, một thập kỷ từ khi tòa tháp Cabrini cuối cùng bị phá hủy, nghệ sĩ thị giác Anthony McCoy và người yêu - giám đốc phòng trưng bày Brianna Cartwright chuyển đến căn hộ gác mái sang trọng tại vùng này. Khi sự nghiệp Anthony đang trì trệ, anh tình cờ gặp một cư dân cũ của vùng này và biết được sự thật kinh hoàng về Candyman. Để duy trì vị thế của mình trong giới nghệ thuật, Anthony bắt đầu lấy những bí ẩn rùng rợn ấy làm cảm hứng cho tác phẩm mới. Hành động này vô tình mở ra cánh cửa dẫn tới quá khứ phức tạp, khiến Anthoy mất tỉnh táo và rơi vào vòng xoáy bạo lực!', 'https://www.youtube.com/embed/bHJKHtNmSY4', '2021-08-27', '2021-09-27', 'tl', 'kd', 'psc'),
('seobok', 'SEO BOK', 'seobok94.jpg', 'Ki Heon - một cựu nhân viên tình báo mắc chứng bệnh nan y được giao nhiệm vụ bảo vệ Seobok - người nhân bản đầu tiên trên thế giới. Bản thân Seobok mang bí mật về việc trường sinh bất tử ở con người nên đã bị truy đuổi. Liệu Ki Heon và Seobok sẽ làm cách nào để sống sót?', 'https://www.youtube.com/embed/URStJ9pzG-4', '2021-04-15', '2021-05-15', 'hq', 'hd', 'psc'),
('songsong', 'SONG SONG', 'songsong33.jpg', 'Muốn cứu mạng một cậu bé đã qua đời cách đây 21 năm, Trang đã lỡ thay đổi quá khứ, làm đảo lộn hiện tại, đánh mất luôn cuộc sống hoàn hảo của bản thân. Cố gắng cứu vãn tình thế và kết nối lại quá khứ, cô phát hiện ra một bí ẩn động trời.', 'https://www.youtube.com/embed/Txh0LIUH-HI', '2021-04-02', '2021-05-02', 'vn', 'tl', 'pc'),
('thanhdiabantron', 'THÁNH ĐỊA BÀN TRÒN', 'thanhdiabantron85.jpg', 'Fate/Grand Order lấy bối cảnh vào năm 2015, Tổ chức An ninh Chaldea đã tuyển dụng nhiều chuyên gia để quan sát tương lai của loài người nhằm dự đoán các sự kiện tận thế có thể xảy ra. Sự tồn vong của nhân loại đã được bảo đảm cho đến hàng trăm năm sau. Thế nhưng, một sự kiện gây ra tận thế bỗng nhiên xuất hiện vào cuối năm 2016. Nguyên nhân của nó vẫn chưa được xác định nhưng lại có liên quan đến thị trấn Fuyuki của Nhật Bản và các sự kiện năm 2004 của cuộc Thánh chiến lần thứ 5 trong Fate/Stay Night. Đáp lại, Chaldea đưa vào sử dung công nghệ du hành thời gian thử nghiệm Rayshift. Nhờ đó, Ritsuka Fujimaru, người mới được tuyển vào tổ chức, và một cô gái bí ẩn tên Mash Kyrielight, có thể du hành trở lại năm 2004 và tìm cách cứu thế giới.', 'https://www.youtube.com/embed/r1xrCiz1xHY', '2021-04-16', '2021-05-16', 'nb', 'hh', 'psc'),
('theking', 'THE KING\'S MAN', 'theking1.jpg', 'Tiếp tục là những nhiệm vụ tưởng chừng như bất khả thi nhằm giải cứu nhân loại của tổ chức mật vụ nổi tiếng bậc nhất màn ảnh rộng. Đặc biệt lần này, đối thủ của họ gồm một nhóm người được coi là những kẻ khủng bố và tàn bạo hàng đầu.', 'https://www.youtube.com/embed/AZQQsyW6rpM', '2021-08-20', '2021-09-20', 'usa', 'hd', 'psc'),
('thienthan', 'THIÊN THẦN HỘ MỆNH', 'thienthan57.jpg', 'Cái chết bí ẩn của một ngôi sao trong giới giải trí, được đồn đoán rằng có liên quan đến loại búp bê ma thuật có tính chất bùa ngải hắc ám. Liệu bí ẩn khủng khiếp nào đang bị che giấu?', 'https://www.youtube.com/embed/FzoWWAJeFgM', '2021-04-29', '2021-05-29', 'vn', 'kd', 'psc'),
('trangti', 'TRẠNG TÍ', 'trangti76.jpg', 'Đến từ nhà sản xuất Ngô Thanh Vân và được cầm trịch bởi đạo diễn Phan Gia Nhật Linh, Trạng Tí là bộ phim được đầu tư với kinh phí khủng. Tác phẩm lấy bối cảnh thực tế tại nhiều địa điểm nổi tiếng như đầm Vân Long (Ninh Bình), chùa Keo (Thái Bình), vườn quốc gia Nam Cát Tiên (Đồng Nai)... Riêng làng Phan Thị - nơi ở của Tí, được đoàn làm phim dựng lên với những mái nhà tranh cùng chiếc cầu tre mang đậm nét đặc trưng làng quê Việt Nam.', 'https://www.youtube.com/embed/jO7yELNiXac', '2021-04-30', '2021-05-30', 'vn', 'gd', 'psc'),
('vungdatcamlang2', 'VÙNG ĐẤT CÂM LẶNG', 'vungdatcamlang57.jpg', 'A Quiet Place 2 là bộ phim kinh dị được mong chờ nhất 2020. Mất đi người chồng người cha trụ cột, mẹ góa con côi nhà Abbott sẽ ra sao ở thế giới đầy bọn quái vật? Chắc chắn mẹ con Evelyn Abbott sẽ phải trải qua rất nhiều nguy hiểm để tìm cách sống còn. Liệu biến cố gì sẽ xảy ra ở phần 2?', 'https://www.youtube.com/embed/kpYSR-kY-4k', '2021-05-28', '2021-06-28', 'usa', 'kd', 'psc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `phong_id` varchar(10) CHARACTER SET utf8 NOT NULL,
  `phong_name` varchar(250) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`phong_id`, `phong_name`) VALUES
('p1', 'Phòng 1'),
('p2', 'Phòng 2'),
('p3', 'Phòng 3'),
('p4', 'Phòng 4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quocgia`
--

CREATE TABLE `quocgia` (
  `qg_id` varchar(5) CHARACTER SET utf8 NOT NULL,
  `qg_name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `quocgia`
--

INSERT INTO `quocgia` (`qg_id`, `qg_name`) VALUES
('duc', 'Đức'),
('hq', 'Hàn Quốc'),
('nb', 'Nhật Bản'),
('tl', 'Thái Lan'),
('tq', 'Trung Quốc'),
('usa', 'Mỹ'),
('vn', 'Việt Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `social`
--

CREATE TABLE `social` (
  `social_id` int(11) NOT NULL,
  `provider_user_id` varchar(255) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `social_name` varchar(255) NOT NULL,
  `social_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `social`
--

INSERT INTO `social` (`social_id`, `provider_user_id`, `provider`, `social_name`, `social_email`) VALUES
(1, '105446418595064517262', 'google', 'Duy Lê', 'duyspecter@gmail.com'),
(2, '114170662503067342551', 'google', 'Mèo Tư Bản', 'meodothai@gmail.com'),
(3, '113864731258564360152', 'google', 'Nguyen Tri', 'tringuyen190699@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suatchieu`
--

CREATE TABLE `suatchieu` (
  `sc_id` varchar(10) CHARACTER SET utf8 NOT NULL,
  `sc_name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `soluong` int(100) NOT NULL DEFAULT 0,
  `phim_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `phong_id` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `suatchieu`
--

INSERT INTO `suatchieu` (`sc_id`, `sc_name`, `soluong`, `phim_id`, `phong_id`) VALUES
('sc1', '08:00', 36, '1990', 'p1'),
('sc10', '08:00', 36, 'mortalkombat', 'p2'),
('sc11', '14:00', 36, 'mortalkombat', 'p2'),
('sc12', '20:00', 36, 'mortalkombat', 'p2'),
('sc13', '10:00', 36, 'latmat48h', 'p2'),
('sc14', '16:00', 36, 'latmat48h', 'p2'),
('sc15', '22:00', 36, 'latmat48h', 'p2'),
('sc16', '12:00', 36, 'kieu', 'p2'),
('sc17', '18:00', 36, 'kieu', 'p2'),
('sc18', '00:00', 36, 'kieu', 'p2'),
('sc19', '08:00', 36, 'josee', 'p3'),
('sc2', '10:00', 36, '1990', 'p1'),
('sc20', '14:00', 36, 'josee', 'p3'),
('sc21', '20:00', 36, 'josee', 'p3'),
('sc22', '10:00', 36, 'godzillavskong', 'p3'),
('sc23', '16:00', 36, 'godzillavskong', 'p3'),
('sc24', '22:00', 36, 'godzillavskong', 'p3'),
('sc25', '12:00', 36, 'dreambuilders', 'p3'),
('sc26', '18:00', 36, 'dreambuilders', 'p3'),
('sc27', '00:00', 36, 'dreambuilders', 'p3'),
('sc28', '08:00', 36, 'chuyenma', 'p4'),
('sc29', '14:00', 36, 'chuyenma', 'p4'),
('sc3', '12:00', 36, '1990', 'p1'),
('sc30', '20:00', 36, 'chuyenma', 'p4'),
('sc31', '10:00', 36, 'bogia', 'p4'),
('sc32', '16:00', 36, 'bogia', 'p4'),
('sc33', '22:00', 36, 'bogia', 'p4'),
('sc34', '12:00', 36, 'bantay', 'p4'),
('sc35', '18:00', 36, 'bantay', 'p4'),
('sc36', '00:00', 36, 'bantay', 'p4'),
('sc4', '14:00', 36, 'anquy', 'p1'),
('sc5', '16:00', 36, 'anquy', 'p1'),
('sc6', '18:00', 36, 'anquy', 'p1'),
('sc7', '20:00', 36, 'songsong', 'p1'),
('sc8', '22:00', 36, 'songsong', 'p1'),
('sc9', '00:00', 36, 'songsong', 'p1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `cat_id` varchar(5) CHARACTER SET utf8 NOT NULL,
  `cat_name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`cat_id`, `cat_name`) VALUES
('gd', 'Gia Đình'),
('hai', 'Hài'),
('hd', 'Hành Động'),
('hh', 'Hoạt Hình'),
('kd', 'Kinh Dị'),
('khvt', 'Khoa Học Viễn Tưởng'),
('ls', 'Lịch Sử'),
('tc', 'Tình Cảm'),
('tl', 'Tâm Lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vephim`
--

CREATE TABLE `vephim` (
  `ve_id` int(10) NOT NULL,
  `giave` int(100) NOT NULL,
  `soghe` int(10) NOT NULL DEFAULT 1,
  `sophong` int(10) NOT NULL DEFAULT 1,
  `sc_id` varchar(10) CHARACTER SET utf8 NOT NULL,
  `hd_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`dm_id`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`hd_id`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`phim_id`),
  ADD KEY `frk_category` (`cat_id`),
  ADD KEY `frk_danhmuc` (`dm_id`),
  ADD KEY `frk_quocgia` (`qg_id`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`phong_id`);

--
-- Chỉ mục cho bảng `quocgia`
--
ALTER TABLE `quocgia`
  ADD PRIMARY KEY (`qg_id`);

--
-- Chỉ mục cho bảng `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`social_id`);

--
-- Chỉ mục cho bảng `suatchieu`
--
ALTER TABLE `suatchieu`
  ADD PRIMARY KEY (`sc_id`),
  ADD KEY `frk_phim` (`phim_id`),
  ADD KEY `frk_phong` (`phong_id`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`cat_id`);

--
-- Chỉ mục cho bảng `vephim`
--
ALTER TABLE `vephim`
  ADD PRIMARY KEY (`ve_id`),
  ADD UNIQUE KEY `soghe` (`soghe`),
  ADD KEY `frk_suatchieu` (`sc_id`),
  ADD KEY `frk_hoadon` (`hd_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `hd_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `social`
--
ALTER TABLE `social`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `vephim`
--
ALTER TABLE `vephim`
  MODIFY `ve_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `phim`
--
ALTER TABLE `phim`
  ADD CONSTRAINT `frk_category` FOREIGN KEY (`cat_id`) REFERENCES `theloai` (`cat_id`),
  ADD CONSTRAINT `frk_danhmuc` FOREIGN KEY (`dm_id`) REFERENCES `danhmuc` (`dm_id`),
  ADD CONSTRAINT `frk_quocgia` FOREIGN KEY (`qg_id`) REFERENCES `quocgia` (`qg_id`);

--
-- Các ràng buộc cho bảng `suatchieu`
--
ALTER TABLE `suatchieu`
  ADD CONSTRAINT `frk_phim` FOREIGN KEY (`phim_id`) REFERENCES `phim` (`phim_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `frk_phong` FOREIGN KEY (`phong_id`) REFERENCES `phong` (`phong_id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `vephim`
--
ALTER TABLE `vephim`
  ADD CONSTRAINT `frk_hoadon` FOREIGN KEY (`hd_id`) REFERENCES `hoadon` (`hd_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `frk_suatchieu` FOREIGN KEY (`sc_id`) REFERENCES `suatchieu` (`sc_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
