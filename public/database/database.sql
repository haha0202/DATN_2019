drop database if exists DuocPham;
create database DuocPham character set utf8 collate utf8_unicode_ci;
use DuocPham;
create table category(
	id int primary key auto_increment,
	name varchar(100)
);
create table product(
	id int primary key auto_increment,
	name varchar(100) not null,
	avatar varchar(100),
	cate_id int not null,
	price int(11) not null,
	mieu_ta text,
	Khuyen_mai int(11),
	quantity_pro int(11),
	foreign key (cate_id) references category(id)

);
create table sale(
	id int primary key auto_increment,
	content varchar(100),
	status tinyint(1) default '0',
	date_start date,
	date_end date
);
create table customer(
	id int primary key auto_increment,
	name varchar(100),
	mail varchar(150) unique,
	phone varchar(15) unique,
	address varchar(100),
	usename varchar(100) unique,
	password varchar(100) unique

);

create table orders(
	id int primary key auto_increment,
	custom_id int not null,
	order_date date,
	foreign key (custom_id) references customer(id)
	
);
create table order_detail(
	id int primary key auto_increment,
	pro_id int not null,
	order_id int not null,
	quantity int(11),
	price int(11),
	foreign key (pro_id) references product(id),
	foreign key (order_id) references orders(id)
);
create table product_image(
	id int primary key auto_increment,
	pro_id int not null,
	hinh_anh varchar(200),
	foreign key (pro_id) references product(id)
);
create table contact(
	id int primary key auto_increment,
	name varchar(100),
	address varchar(200),
	phone varchar(15),
	mail varchar(150),
	title varchar(100),
	content text
);
create table knowledge(
	id int primary key auto_increment,
	name varchar(100),
	content text,
	image varchar(200),
	knowledge_date date
);
create table news(
	id int primary key auto_increment,
	name varchar(100),
	content text,
	image varchar(200),
	new_date date
);

create table account(
	id int primary key auto_increment,
	usename varchar(100) unique,
	password varchar(100) unique,
	auth tinyint default '0'
);
insert into sale(content,date_start,date_end) values 
	('chao he 2019','2019-6-19','2019-6-22');
insert into category(name) values
	('linh chi đỏ'),
	('hoạt huyết'),
	('nano curcumin'),
	('thảo dược khác');
insert into product(name,avatar,cate_id,price,mieu_ta,Khuyen_mai,quantity_pro) values
	('Nấm linh chi nguyên tai','linh-chi-nguyen-tai.jpg',1,450000,'Đây là giống nấm Linh chi đỏ ngắn ngày, thời gian trồng 3 tháng, sản lượng cao, dễ trồng và chăm sóc.
Sau khi cấy giống vô bịch phôi, khoảng 2,5 tháng nấm kết thúc thời kỳ phát triển và trưởng thành, bắt đầu phóng bào tử. Sau đó, nấm được để thểm khoảng ~2 tuần, mục đích cho lớp bào tử bám chắc vào bề mặt tai nấm, là thu hoạch. Không thể kéo dài thời gian trồng hơn, vì cây nấm sẽ bị chết, bị mốc, và bị chai.
Sản phẩm được thu hoạch thủ công 100% nhằm lưu giữ tối đa lượng bào tử, chất lượng đảm bảo và ổn định.
Quy cách đóng gói: Túi hút chân không (500g x 1)
Kèm theo: Túi chống ẩm + Hướng dẫn sử dụng',360000,500),

	('Nấm linh chi cắt sẵn','nam-linh-chi-cat-lat.jpg',1,450000,'Đây là giống nấm Linh chi đỏ ngắn ngày, thời gian trồng 3 tháng, sản lượng cao, dễ trồng và chăm sóc.
Sau khi cấy giống vô bịch phôi, khoảng 2,5 tháng nấm kết thúc thời kỳ phát triển và trưởng thành, bắt đầu phóng bào tử. Sau đó, nấm được để thểm khoảng ~2 tuần, mục đích cho lớp bào tử bám chắc vào bề mặt tai nấm, là thu hoạch. Không thể kéo dài thời gian trồng hơn, vì cây nấm sẽ bị chết, bị mốc, và bị chai.
Sản phẩm được thu hoạch thủ công 100% nhằm lưu giữ tối đa lượng bào tử, chất lượng đảm bảo và ổn định.
Quy cách đóng gói: Túi hút chân không (500g x 1)
Kèm theo: Túi chống ẩm + Hướng dẫn sử dụng',360000,500),

	('Nấm linh chi xay bột','linh-chi-xay-bot.jpg',1,450000,'Đây là giống nấm Linh chi đỏ ngắn ngày, thời gian trồng 3 tháng, sản lượng cao, dễ trồng và chăm sóc.
Sản phẩm được xay sẵn bằng máy xay chuyên dụng công nghệ cao. Mỗi mẻ xay tối thiểu 200 kg, hạn chế tối đa sự hao hụt thất thoát bào tử nấm, đảm bảo chất lượng và thuận tiện sử dụng. 
Cách tốt nhất sử dụng nấm Linh chi là dùng loại xay bột, do dược tính có thể được chiết xuất, hòa tan triệt để trong quá trình nấu.
Quy cách đóng gói: Túi hút chân không (500g x 1)
Kèm theo: Túi chống ẩm + Hướng dẫn sử dụng',360000,500),

	('Nấm linh chi loại cao cấp nguyên tai','linh-chi-nguyen-tai.jpg',1,685000,'Đây là giống nấm Linh chi đỏ trồng 6 tháng, có lớp bào tử rất dày, tác dụng tăng cường sức khỏe, phòng và chống nhiều căn bệnh khác nhau.
Sau khi cấy giống vô bịch phôi, khoảng 6 tháng (± 20 ngày, tùy vào điều kiện thời tiết, phương pháp nuôi trồng, và điều kiện trang trại) nấm kết thúc thời kỳ phát triển và trưởng thành, bắt đầu phóng bào tử. Sau đó, nấm được để thểm khoảng ~2 tuần, mục đích cho lớp bào tử bám chắc vào bề mặt tai nấm, là thu hoạch. Không thể kéo dài thời gian trồng hơn, vì cây nấm sẽ bị chết, bị mốc, và bị chai.
Sản phẩm được thu hoạch thủ công 100% nhằm lưu giữ tối đa lượng bào tử, nấm có chất lượng cao và dược tính mạnh.
Quy cách đóng gói: Túi hút chân không (500g x 1)
Kèm theo: Túi chống ẩm + Hướng dẫn sử dụng',500000,500),

	('Nấm linh chi loại cao cấp cắt sẵn','nam-linh-chi-cat-lat.jpg',1,685000,'Đây là giống nấm Linh chi đỏ trồng 6 tháng, có lớp bào tử rất dày, tác dụng tăng cường sức khỏe, phòng và chống nhiều căn bệnh khác nhau.
Sau khi cấy giống vô bịch phôi, khoảng 6 tháng (± 20 ngày, tùy vào điều kiện thời tiết, phương pháp nuôi trồng, và điều kiện trang trại) nấm kết thúc thời kỳ phát triển và trưởng thành, bắt đầu phóng bào tử. Sau đó, nấm được để thểm khoảng ~2 tuần, mục đích cho lớp bào tử bám chắc vào bề mặt tai nấm, là thu hoạch. Không thể kéo dài thời gian trồng hơn, vì cây nấm sẽ bị chết, bị mốc, và bị chai.
Sản phẩm được thu hoạch thủ công 100% nhằm lưu giữ tối đa lượng bào tử, nấm có chất lượng cao và dược tính mạnh.
Quy cách đóng gói: Túi hút chân không (500g x 1)
Kèm theo: Túi chống ẩm + Hướng dẫn sử dụng',500000,500),

	('Nấm linh chi loại cao cấp xay bột','linh-chi-xay-bot.jpg',1,685000,'Đây là giống nấm Linh chi đỏ trồng 6 tháng, xay sẵn, thuận tiện sử dụng, tác dụng tăng cường sức khỏe, phòng và chống nhiều căn bệnh khác nhau.
Sản phẩm được xay sẵn bằng máy xay chuyên dụng công nghệ cao. Mỗi mẻ xay tối thiểu 200 kg, hạn chế tối đa sự hao hụt thất thoát bào tử nấm, đảm bảo giữ nguyên chất lượng nấm.
Cách tốt nhất sử dụng nấm Linh chi là dùng loại xay bột, do dược tính có thể được chiết xuất, hòa tan triệt để trong quá trình nấu.
Quy cách đóng gói: Túi hút chân không (500g x 1)
Kèm theo: Túi chống ẩm + Hướng dẫn sử dụng',500000,500),
	
	('Nấm linh chi thượng hạng','item_linhchido.jpg',1,1900000,'Đây là loại nấm Linh chi đỏ giống Nhật, trồng 1 năm, là loại nấm trồng lâu nhất trong điều kiện tự nhiên. 
Sau khi cấy giống vô bịch phôi, khoảng 12 tháng (± 30 ngày, tùy vào điều kiện thời tiết, phương pháp nuôi trồng, và điều kiện trang trại) nấm kết thúc thời kỳ phát triển và trưởng thành, bắt đầu phóng bào tử. Sau đó, nấm được để thểm khoảng ~2 tuần, mục đích cho lớp bào tử bám chắc vào bề mặt tai nấm, là thu hoạch. Không thể kéo dài thời gian trồng hơn, vì cây nấm sẽ bị chết, bị mốc, và bị chai.
Sản phẩm được thu hoạch thủ công 100% nhằm lưu giữ tối đa lượng bào tử, nấm có chất lượng tuyệt hảo và dược tính rất mạnh.
Đây cũng là sản phẩm được khách hàng ưa chuộng nhất, do nấm có chất lượng cao và giá thành rẻ (~ 1/2 giá thị trường)
Quy cách đóng gói: Túi hút chân không (500g x 1)
Kèm theo: Túi chống ẩm + Hướng dẫn sử dụng',1700000,500),
	
	('Hoạt huyết dạng viên','hoathuyet2_2551.jpg',2,150000,'Thuốc được bào chế từ những vị thuốc, thảo dược thiên nhiên đã được sử dụng trong suốt hàng ngàn năm y học cổ truyền. Thuốc “Hoạt huyết Khuê Đường” không sử dụng bất kỳ một loại chất bảo quản nào trong quá trình sản xuất và tuyệt đối thân thiện với cơ thể con người.
Thành phần: Xuyên khung, Quy vĩ, Đan sâm, Chỉ xác, Hòe hoa, Cam thảo...',100000,500),
	('Hoạt huyết dạng lỏng','hoathuyet-long.jpg',2,150000,'Thuốc được bào chế từ những vị thuốc, thảo dược thiên nhiên đã được sử dụng trong suốt hàng ngàn năm y học cổ truyền. Thuốc “Hoạt huyết Khuê Đường” không sử dụng bất kỳ một loại chất bảo quản nào trong quá trình sản xuất và tuyệt đối thân thiện với cơ thể con người.
Thành phần: Xuyên khung, Quy vĩ, Đan sâm, Chỉ xác, Hòe hoa, Cam thảo...',100000,500),
	('Nano Curcumin dạng lỏng','curcumin-long.jpg',3,350000,'Tinh chất nghệ vàng Curcumin có nhiều hoạt tính sinh học quý như chống viêm, giảm đau, kháng khuẩn, diệt gốc tự do, chống ung thư… nhưng curcumin ít tan trong nước, dùng đường uống chỉ hấp thu 2-3% vào máu, không đủ nồng độ phát huy hiệu quả. Và công nghệ nano là giải pháp tốt nhất để phá vỡ rào cản đó, giúp nâng tầm giá trị tinh chất nghệ.',300000,500),
	('Nano Curcumin dạng nén','curcumin-nén.jpg',3,420000,'Tinh chất nghệ vàng Curcumin có nhiều hoạt tính sinh học quý như chống viêm, giảm đau, kháng khuẩn, diệt gốc tự do, chống ung thư… nhưng curcumin ít tan trong nước, dùng đường uống chỉ hấp thu 2-3% vào máu, không đủ nồng độ phát huy hiệu quả. Và công nghệ nano là giải pháp tốt nhất để phá vỡ rào cản đó, giúp nâng tầm giá trị tinh chất nghệ.',390000,500),
	('Nano Curcumin dạng bột','nano-curcumin-bot.jpg',3,390000,'Tinh chất nghệ vàng Curcumin có nhiều hoạt tính sinh học quý như chống viêm, giảm đau, kháng khuẩn, diệt gốc tự do, chống ung thư… nhưng curcumin ít tan trong nước, dùng đường uống chỉ hấp thu 2-3% vào máu, không đủ nồng độ phát huy hiệu quả. Và công nghệ nano là giải pháp tốt nhất để phá vỡ rào cản đó, giúp nâng tầm giá trị tinh chất nghệ.',340000,500),
	('Trà Sâm','tra-sam.jpg',4,600000,'Trà Hồng Sâm Hàn Quốc - Korean Ginseng Tea là sản phẩm trà cao cấp có hương vị độc đáo, đậm đà của tinh chất hồng sâm. Với công thức chế biến đặc biệt làm dịu vị đắng của hồng sâm. Trà Hồng Sâm Hàn Quốc - Korean Ginseng Tea được sản xuất dưới dạng gói bột  hoà tan tiện lợi cho việc sử dụng trà.',500000,500),
	('Trà Gừng','tragung.jpg',4,300000,'Trà gừng là một thức uống quen thuộc chứa nhiều vitamin, khoáng chất và các chất chống oxy hóa rất tốt cho sức khỏe. Ngoài ra trà gừng còn có công dụng hỗ trợ khi bị cảm lạnh, chống buồn nôn, giảm đau bụng do ăn thức ăn, giúp tăng cường sức đề kháng và giữ ấm cho cơ thể. Trà gừng hòa tan Linh Khuê Đường được làm từ những lá trà tươi ngon nhất, kết hợp với bột gừng già, cho hương vị ngọt ngọt thanh và cay nồng. Cách pha chế trà cũng rất đơn giản, chỉ cần thêm một chút nước sôi và lượng đường tùy khẩu vị rồi thưởng thức, có thể uống nóng hoặc đá tùy theo sở thích của mỗi người.',260000,500);	

insert into product_image(pro_id,hinh_anh) values
	(1,'linh-chi-nguyen-tai.jpg'),
	(2,'nam-linh-chi-cat-lat.jpg'),
	(3,'linh-chi-xay-bot.jpg'),
	(4,'linh-chi-nguyen-tai.jpg'),
	(5,'nam-linh-chi-cat-lat.jpg'),
	(6,'linh-chi-xay-bot.jpg'),
	(7,'item_linhchido.jpg'),
	(8,'hoathuyet2_2551.jpg'),
	(9,'hoathuyet-long.jpg'),
	(10,'curcumin-long.jpg'),
	(11,'curcumin-nén.jpg'),
	(12,'nano-curcumin-bot.jpg'),
	(13,'tra-sam.jpg'),
	(14,'tragung.jpg');

	
	
	
	
insert into account(usename,password,auth) values
	('admin','admin123',1),
	('nvtung','123456',2);
	
insert into contact(name,address,phone,mail,title,content) values
	('Nguyễn Văn Hùng','số 22 Hai Bà Trưng Hà Nội',0123456,'hung@gmail.com','chất lượng sản phẩm','Tôi rất ưng ý về chất lượng sản phẩm của công ty, dùng rất thích'),
	('Lê Anh Tuấn','số 222 đường Láng Hà Nội',03698945,'tuan@gmail.com','chất lượng sản phẩm','Tôi rất ưng ý về chất lượng sản phẩm của công ty, dùng rất thích'),
	('Phạm Ngọc Mai','số 25 Kim Mã Hà Nội',032064588,'mai321@gmail.com','chất lượng sản phẩm','Tôi rất ưng ý về chất lượng sản phẩm của công ty, dùng rất thích');

