

### Slide 1

Em chào mọi người, em xin tự giới thiệu em tên là trần Đại hiệp và bạn cùng nhóm vs em là vương tùng dương.
Khi đi mua điện thoại tại các của hàng hay là các siêu thị thì em thấy các thiết bị luôn được bảo vệ bằng hệ thống an toàn, bọn em cảm thấy tò mò và thấy nó thú vị do đó đợt thực tập này bọn em đã lựa chọn Đề tài "Track & manager samsung samartphone smaples at retail shops"
- Hệ thống an ninh được cài đặt để ngăn chặn trường hợp trộm cắp và sạc ổn định các thiết bị được trưng bày tại cửa hàng. 
- Hệ thống này sẽ rung chuông báo động cho nhân viên cửa hàng để ngăn chặn trường hợp trộm cắp, xây dựng một giải pháp có yếu tố hình thức nhỏ hơn.
- Hệ thống bảo vệ của các cửa hàng hiện tại hình thức cồng kềnh, khi họ sử dụng các control box, không chỉ cồng kềnh, mà hình thức cũng ko được đẹp, chi phí lắp đặt cũng đắt đỏ và tốn kém hơn, không đồng bộ được hệ thống an ninh.

- Bọn em thấy việc tích hợp hai ứng dụng bảo vệ thiết bị và phát video quảng cáo là việc cần thiết và rất hợp lý 

### slide còn lại

Bọn em phát triển ứng dụng với các chức năng để khắc phục các nhược điểm trên, ứng dụng của bọn em gồm các chức năng:
- **Chức năng bảo vệ thiết bị và cảnh báo trộm**
	- ứng dụng của bọn em chỉ được chạy khi ứng dụng đang được cắm cáp kết nối.  
		- không thể xóa
		- không thể tắt nguồn, không thể khởi động lại
		- không thể kill app
		- không thể bị remove admin
		
		
	- khi người dùng rút cáp ra ứng dụng sẽ phát động kêu cảnh báo và khi đó màn hình và các nút bấm đề được khóa lại. (tránh trường hợp người dùng cho nhỏ âm lượng, hay tắt thiết bị khi đang bị cảnh báo)
	- [cắm thiết bị]
	- Ứng dụng của chúng em có hai lớp khóa, lớp khóa thứ nhất là mật khẩu ở dạng text, và lớp khóa thử hai là thẻ NFC. nhằm nâng cao tính bảo mật
	- NFC : 
		- *NFC (viết tắt của Near-Field Communications) là công nghệ giao tiếp trường gần, sử dụng cảm ứng từ trường để thực hiện kết nối giữa các thiết bị khi có sự tiếp xúc trực tiếp hay để gần nhau.*
		- *Do khoảng cách truyền dữ liệu khá ngắn (trong khoảng cách 4 cm) nên giao dịch qua công nghệ NFC được xem là an toàn*
		- Khi áp thẻ nfc vào máy thì chúng sẽ đọc được một đoạn mã, do đó tính bảo mật được nâng cao
	-	Ứng dụng khi được kích hoạt thì không thể xóa nó, chỉ có thể xóa được khi tắt kích hoạt ứng dụng

- **Phát video quảng cáo khi điện thoại ở chế độ rảnh. Các video này được đồng bộ với nhau tại cùng thời điểm**
	- chức năng video intro, các video được đồng bộ với nhau tại cùng thời điểm khi điện thoại ở chế độ rảnh.
		- bọn em thực hiện đọc video intro từ trong bộ nhớ của thiết bị,
		- các video đọc lên được sắp xếp lại theo thứ tự a->b. Nhằm tránh trường hợp các máy đọc ra thứ tự khác nhau.
		- sau khi đọc ra được video và đã sắp xếp theo thứ tự, 
	tiếp đó, em bắt đầu tính tổng thời gian
	và lưu lại các mốc thời gian đầu, nhằm để sau biết nó ở time nào của video nào để phát, do các video có thời lượng khác nhau, VD:
	50, 60, 40 => thì mảng sẽ là : [0, 50, 110, 150]
	
	- Lấy ra thời gian hiện tại:
	Em tạo ra một object để lưu lại:
		+ vị trí của video
		+ và thời gian start của video hiện tại.

	thời gian hiện tại  =  (thời gian hệ thống % tổng thời gian của các video) - thời gian bắt đầu của video ở vị trí i - random(500){vì có thể bị lệch 500 ms}

- **Chức năng cài đặt thời gian phát và dừng phát video - chức năng này nhằm tránh việc làm tốn tài nguyên hệ thống như pin, chip, ram ...**
- **Đăng nhập (chính là bước kích hoạt ứng dụng), đăng xuất (hủy kích hoạt ứng dụng)**

- ** Biểu đồ sử dụng pin, tests trên 5h 20h và 40h sử dụng **
- ** Biểu đồ sử dụng ram trên các thiết bị ram 3gb, 4gb, 6gb, và 8gb **
....
- Chức năng bảo vệ thiết bị(điện thoại đang ở chế độ oke, config các thứ oke).
			
	- trình rút cáp - bấm các nút ko thực hiện được  ....
	- cắm vào mở cap - các nút bấm vẫn ko bấm được -> unlock thành công.
	- nói về cái tính xóa đc, ko tắt nguồn các thứ các.
	- NFC mở khóa : sử dụng thêm một lớp NFC để đảm bảo tính năng an toàn 
	


	