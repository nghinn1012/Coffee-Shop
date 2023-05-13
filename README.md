# Phần mềm quản lí quán cafe

## Cách cài đặt

* Cài đặt Xampp [tại đây](https://sourceforge.net/projects/xampp/files/latest/download)
* Tải source code [tại đây](https://github.com/nghinn1012/Coffee-Shop/archive/refs/heads/main.zip)
* Giải nén file code vào thư mục htdocs trong file xampp vừa cài đặt

## Cách chạy chương trình
* Khởi chạy xampp với lựa chọn Run as administrator
* Start dòng Apache và dòng MySQL
* Vào trang web [này](http://localhost/phpmyadmin/), thêm csdl có tên là coffee-db, kéo file coffee-db.sql trong file source code lên vào thực hiện
* Vào trang web http://localhost/Coffee-Shop-main/ để sự dụng trang web

## Các chức năng

* Đối với khách hàng:
+ Có chức năng đăng nhập để lưu lại các dữ liệu của người dùng thông qua tài khoản đăng nhập.
+ Người dùng chỉnh sửa được thông tin cá nhân, có thể tìm kiếm sản phẩm, sắp xếp sản phẩm, gửi lời nhắn
+ Hiển thị được chính xác các thông tin sản phẩm của cửa hàng, các thông tin về đánh giá, vị trí, liên hệ của cửa hàng
+ Hiển thị được thông tin giỏ hàng, thông tin các đơn đặt hàng của người dùng
+ Tính toán, thống kê các đơn đặt hàng để đưa ra giá trị đơn hàng khi khách hàng đặt hàng
* Đối với người quản lý
+ Có chức năng đăng nhập để đảm bảo người có quyền mới được truy cập vào hệ thống quản lý
+ Người quản lý có thể quản lý tài khoản admin, tài khoản người dùng
+ Người quản lý có thể quản lý sản phẩm, quản lý các đơn đặt hàng
+ Người quản lý có thể xem thống kê về số lượng đơn đặt hàng, trạng thái đơn, giá trị đơn đặt hàng.


Mặc định cho roles admin
username: admin
pass:111
