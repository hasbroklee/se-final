
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Tài liệu</title>
    @include('layouts.backend.css')
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">


</head>
<body class="d-flex flex-column" style="background: #404258;width: 100%;height: 100%;">
    <!-- navigation -->
    @include('layouts.frontend.header')




    <div id="container">

        <div class="content">
            <div class="subject-list">
                <div class="sj">
                    <div class="sj-topic">
                        <b>Cơ sở khối ngành</b>

                    </div>
                    <ul class="sj-list">
                        <li><a href="#cpp">Lập trình nâng cao</a></li>
                        <li><a href="#python">Lập trình Python</a></li>
                        <li><a href="#oop">Lập trình OOP</a></li>
                    </ul>
                </div>

                <div class="sj">
                    <div class="sj-topic">
                        <b>Khoa học tự nhiên</b>

                    </div>
                    <ul class="sj-list">
                        <li><a href="#toan1">Giải tích hàm 1 biến</a></li>
                        <li><a href="#toan2">Giải tích hàm nhiều biến</a></li>
                        <li><a href="#toantt">Đại số tuyến tính</a></li>

                    </ul>
                </div>

                <div class="sj">
                    <div class="sj-topic">
                        <b>Lý luận chính trị</b>

                    </div>
                    <ul class="sj-list">
                        <li><a href="#lsd">Lịch sử Đảng</a></li>
                        <li><a href="#ktct">Kinh tế chính trị</a></li>
                        <li><a href="#tthcm">Tư tưởng HCM</a></li>
                    </ul>
                </div>


            </div>

            <div class="subject-content">
                <div class="search">
                    <input type="text" placeholder="Tìm kiếm tài liệu...">
                    <div class="selection">
                            <a href="cpp">Lập trình nâng cao</a>
                            <a>Lập trình Python</a>
                            <a>Lập trình OOP</a>
                            <a>Giải tích hàm 1 biến</a>
                            <a>Giải tích hàm nhiều biến</a>
                            <a>Đại số tuyến tuyến</a>
                            <a>Lịch sử Đảng</a>
                            <a>Kinh tế chính trị</a>
                            <a>Tư Tưởng HCM</a>
                    </div>
                </div>
                <h1>Chọn bài giảng bên trái <br> Hoặc tìm kiếm bằng thanh công cụ</h1>

<!-- Cơ sở khối ngành -->
                <div class="subject-item" id = "cpp">
                    <div class="sj-des">
                        <img src="{{ asset('assets/img/cpp_logo.png') }}" class = "logo-sj">
                        <div class="sj-des-text">
                            <b class = "topic-name">C++</b>

                            <p>C++ là ngôn ngữ đa nền tảng có thể được sử dụng để tạo các ứng dụng hiệu năng cao được phát triển bởi Bjarne Stroustrup, như một phần mở rộng của ngôn ngữ C. C++ cung cấp cho người lập trình khả năng kiểm soát cao đối với tài nguyên hệ thống và bộ nhớ.</p>
                        </div>
                    </div>

                    <div class="sj-lesson">
                            <p>
                                <b>Bài 1: Giới thiệu môn học và nhắc lại kiến thức C/C++</b>
                                <embed src="{{ asset('assets/Documents/cpp/cpp1.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 2+3: Hàm trong C/C++</b>
                                <embed src="{{ asset('assets/Documents/cpp/cpp23.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 4+5+6: Kiểu dữ liệu mảng và xâu ký tự trong C/C++</b>
                                <embed src="{{ asset('assets/Documents/cpp/cpp456.pdf') }}" type="application/pdf">
                            </p>
                            <p>
                                <b>Bài 7+8+9: Con trỏ và bộ nhớ trong C/C++</b>
                                <embed src="{{ asset('assets/Documents/cpp/cpp789.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 10+11+12: Kiểu cấu trúc (struct) và kiểu hợp nhất (union)</b>
                                <embed src="{{ asset('assets/Documents/cpp/cpp101112.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 13+14+15: Vào ra dữ liệu với tập tin</b>
                                <embed src="{{ asset('assets/Documents/cpp/cpp131415.pdf') }}" type="application/pdf" >
                            </p>
                    </div>
                </div>


                <div class="subject-item" id="python">
                    <div class="sj-des">
                        <img src="{{ asset('assets/img/pylogo.png') }}" class = "logo-sj">
                        <div class="sj-des-text">
                            <b class = "topic-name">Python</b>

                            <p>Python là ngôn ngữ có hình thức rất sáng sủa, cấu trúc rõ ràng, thuận tiện cho người mới học lập trình và là ngôn ngữ lập trình dễ học; được dùng rộng rãi trong phát triển trí tuệ nhân tạo. Cấu trúc của Python còn cho phép người sử dụng viết mã lệnh với số lần gõ phím tối thiểu.</p>
                        </div>
                    </div>

                    <div class="sj-lesson">
                            <p>
                                <b>Bài 1: Giới thiệu về Python</b>
                                <embed src="{{ asset('assets/Documents/python/python1.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 2: Hàm và rẽ nhánh trong python</b>
                                <embed src="{{ asset('assets/Documents/python/python2.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 3: Vòng lặp trong python</b>
                                <embed src="{{ asset('assets/Documents/python/python3.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 4: Kiểu tuần tự trong python</b>
                                <embed src="{{ asset('assets/Documents/python/python4.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 5: Kiểu tuần tự trong python (phần 2)</b>
                                <embed src="{{ asset('assets/Documents/python/python5.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 6: Kiểu tập hợp và kiểu tập tĩnh</b>
                                <embed src="{{ asset('assets/Documents/python/python6.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 7: Kiểu từ điển, module và package</b>
                                <embed src="{{ asset('assets/Documents/python/python7.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 8: Ngoại lệ và xử lý ngoại lệ</b>
                                <embed src="{{ asset('assets/Documents/python/python8.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 9: Làm việc với tệp tin trong python</b>
                                <embed src="{{ asset('assets/Documents/python/python9.pdf') }}" type="application/pdf" >
                            </p>
                    </div>
                </div>


                <div class="subject-item" id = "oop">
                    <div class="sj-des">
                        <img src="{{ asset('assets/img/oop_logo.png') }}" class = "logo-sj">
                        <div class="sj-des-text">
                            <b class = "topic-name">Nguyên lý lập trình hướng đối tượng</b>

                            <p>OOP (từ viết tắt của Object Oriented Programming) lập trình hướng đối tượng là một phương pháp lập trình dựa trên các khái niệm về lớp và đối tượng. OOP thường tập trung vào các đối tượng thao tác hơn là logic để có thể thao tác chúng. </p>
                        </div>
                    </div>

                    <div class="sj-lesson">
                            <p>
                                <b>Bài 1: Giới thiệu về C++ và nhắc lại về C</b>
                                <embed src="{{ asset('assets/Documents/lthdt/lthdt1.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 2: Lớp và đối tượng</b>
                                <embed src="{{ asset('assets/Documents/lthdt/lthdt2.pdf') }}" type="application/pdf">
                            </p>
                            <p>
                                <b>Bài 3: Nạp chồng toán tử</b>
                                <embed src="{{ asset('assets/Documents/lthdt/lthdt3.pdf') }}" type="application/pdf">
                            </p>
                            <p>
                                <b>Bài 4: Nguyên lý kế thừa</b>
                                <embed src="{{ asset('assets/Documents/lthdt/lthdt4.pdf') }}" type="application/pdf">
                            </p>
                            <p>
                                <b>Bài 5: Hàm ảo và đa hình</b>
                                <embed src="{{ asset('assets/Documents/lthdt/lthdt5.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 6: Khuôn mẫu template và thư viện chuẩn STL</b>
                                <embed src="{{ asset('assets/Documents/lthdt/lthdt6.pdf') }}" type="application/pdf">
                            </p>
                    </div>
                </div>
<!-- Khoa học tự nhiên -->
                <div class="subject-item" id = "toan1">
                    <div class="sj-des">
                        <img src="{{ asset('assets/img/mathlogo.png') }}" class = "logo-sj">
                        <div class="sj-des-text">
                            <b class = "topic-name">Giải tích hàm một biến</b>

                            <p>Giải tích hàm một biến là một môn học cơ sở cung cấp các kiến thức nền tảng cho các môn học giải tích nhiều biến, vật lý, xác suất thống kê, toán rời rạc và các môn chuyên ngành khác</p>
                        </div>
                    </div>

                    <div class="sj-lesson">
                            <p>
                                <b>Bài 1: Hàm số một biến. Giới hạn và tính liên tục</b>
                                <embed src="{{ asset('assets/Documents/1b/b1.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 2: GIới hạn dạng vô định. Tính liên tục</b>
                                <embed src="{{ asset('assets/Documents/1b/b2.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 3: Đạo hàm vi phân của hàm một biến</b>
                                <embed src="{{ asset('assets/Documents/1b/b3.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 4: Đạo hàm hàm ngược. Đạo hàm cấp cao</b>
                                <embed src="{{ asset('assets/Documents/1b/b4.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 5: Ứng dụng của đạo hàm</b>
                                <embed src="{{ asset('assets/Documents/1b/b5.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 6: Khái niệm nguyên hàm và tích phân</b>
                                <embed src="{{ asset('assets/Documents/1b/b6.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 6: Khái niệm nguyên hàm và tích phân</b>
                                <embed src="{{ asset('assets/Documents/1b/b6.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 7: Một số dạng tích phân</b>
                                <embed src="{{ asset('assets/Documents/1b/b7.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 8: Tích phân suy rộng</b>
                                <embed src="{{ asset('assets/Documents/1b/b8.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 9: Phương trình tham số. Toạ độ cực</b>
                                <embed src="{{ asset('assets/Documents/1b/b9.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 10: Ứng dụng của tích phân xác định: Diện tích miền phẳng</b>
                                <embed src="{{ asset('assets/Documents/1b/b10.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 11: Thể tích. Độ dài cung phẳng. Diện tích mặt tròn xoay</b>
                                <embed src="{{ asset('assets/Documents/1b/b11.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 12: Chuỗi số. Sự hội tụ của chuỗi số dương</b>
                                <embed src="{{ asset('assets/Documents/1b/b12.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 13: Chuỗi đan dấu. Chuỗi luỹ thừa. Chuỗi Taylor</b>
                                <embed src="{{ asset('assets/Documents/1b/b13.pdf') }}" type="application/pdf" >
                            </p>
                        </div>
                </div>


                <div class="subject-item" id="toan2">
                    <div class="sj-des">
                        <img src="{{ asset('assets/img/mathlogo.png') }}" class = "logo-sj">
                        <div class="sj-des-text">
                            <b class = "topic-name">Giải tích hàm nhiều biến</b>
                            <p>Giải tích hàm nhiều biến là một môn học cơ sở cung cấp các kiến thức nền tảng cho các môn học đại số tuyến tính, vật lý, xác suất thống kê, toán rời rạc và các môn chuyên ngành khác</p>
                        </div>
                    </div>

                    <div class="sj-lesson">
                            <p>
                                <b>Bài 2: Hệ toạ độ trụ, hệ toạ độ cầu</b>
                                <embed src="{{ asset('assets/Documents/nb/b2.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 3: Hàm nhiều biến, đạo hàm riêng, vi phân</b>
                                <embed src="{{ asset('assets/Documents/nb/b3.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 4: Trường vô hướng, đạo hàm theo hướng, gradient</b>
                                <embed src="{{ asset('assets/Documents/nb/b4.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 5: Bài toán cực đại và cực tiểu</b>
                                <embed src="{{ asset('assets/Documents/nb/b5.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 6: Các phương trình Laplace, truyền nhiệt, truyền sóng</b>
                                <embed src="{{ asset('assets/Documents/nb/b6.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 7: Tính thế tích bằng tích phân lặp</b>
                                <embed src="{{ asset('assets/Documents/nb/b7.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 8: Biến đổi trong tích phân bội. Định thức Jacobian</b>
                                <embed src="{{ asset('assets/Documents/nb/b8.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 9: Ứng dụng diện tích mặt cong</b>
                                <embed src="{{ asset('assets/Documents/nb/b9.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 10: Tích phân bội ba</b>
                                <embed src="{{ asset('assets/Documents/nb/b10.pdf') }}" type="application/pdf" >
                            </p>

                    </div>
                </div>


                <div class="subject-item" id = "toantt">
                    <div class="sj-des">
                        <img src="{{ asset('assets/img/mathlogo.png') }}"class = "logo-sj">
                        <div class="sj-des-text">
                            <b class = "topic-name">Đại số tuyến tính</b>

                            <p>Đại số tuyến tính là một môn học cơ sở cung cấp các kiến thức nền tảng cho các môn học vật lý, xác suất thống kê, toán rời rạc và các môn chuyên ngành khác</p>
                        </div>
                    </div>

                    <div class="sj-lesson">
                            <p>
                                <b>Bài 1: Vector - ma trận</b>
                                <embed src="{{ asset('assets/Documents/dstt/1.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 2: Hệ phương trình tuyến tính. Ma trận nghịch đảo</b>
                                <embed src="{{ asset('assets/Documents/dstt/2.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 3: Định thức</b>
                                <embed src="{{ asset('assets/Documents/dstt/3.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 4: Không gian vector - Không gian con</b>
                                <embed src="{{ asset('assets/Documents/dstt/4.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 5: Hạng của ma trận - nghiệm đầy đủ của hpt tuyến tính</b>
                                <embed src="{{ asset('assets/Documents/dstt/5.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 6: Cơ sở - số chiều của một không gian vector</b>
                                <embed src="{{ asset('assets/Documents/dstt/6.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 7: Giá trị riêng - Vector riêng</b>
                                <embed src="{{ asset('assets/Documents/dstt/7.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 8: Tính trực giao</b>
                                <embed src="{{ asset('assets/Documents/dstt/8.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 9: Phép chiếu và pp bình phương tối thiểu</b>
                                <embed src="{{ asset('assets/Documents/dstt/9.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 10: Ma trận đối xứng và ma trận xdd</b>
                                <embed src="{{ asset('assets/Documents/dstt/10.pdf') }}" type="application/pdf" >
                            </p>

                    </div>
                </div>
<!-- Lý luận chính trị -->
                <div class="subject-item" id = "lsd">
                    <div class="sj-des">
                        <img src="{{ asset('assets/img/historylogo.png') }}" class = "logo-sj">
                        <div class="sj-des-text">
                            <b class = "topic-name">Lịch sử Đảng Cộng Sản</b>

                            <p>Lịch sử Đảng Cộng Sản nói về Lịch sử Đảng Cộng Sản</p>
                        </div>
                    </div>

                    <div class="sj-lesson">
                            <p>
                                <b>Bài 1: Đảng Cộng Sản Việt Nam ra đời và lãnh đạo đấu tranh giành chính quyền</b>
                                <embed src="{{ asset('assets/Documents/lsd/1.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 2: Đảng lãnh đạo hai cuộc kháng chiến hoàn thành giải phóng dân tộc, thống nhất đất nước</b>
                                <embed src="{{ asset('assets/Documents/lsd/2.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 3: Đảng lãnh đạo cả ngước quá độ lên chủ nghĩa xã họi và tiến hành công cuộc đổi mới</b>
                                <embed src="{{ asset('assets/Documents/lsd/3.pdf') }}" type="application/pdf">
                            </p>
                            <p>
                                <b>Bài 4: Đảng lãnh đạo công tác thuỷ lợi trong công cuộc xây dựng và phát triển đất nước</b>
                                <embed src="{{ asset('assets/Documents/lsd/4.pdf') }}" type="application/pdf" >
                            </p>
                    </div>
                </div>


                <div class="subject-item" id="ktct">
                    <div class="sj-des">
                        <img src="{{ asset('assets/img/trade.png') }}" class = "logo-sj">
                        <div class="sj-des-text">
                            <b class = "topic-name">Kinh tế chính trị</b>

                            <p>Kinh tế chính trị cung cấp những tri thức cơ bản về sự ra đời của kinh tế chính trị</p>
                        </div>
                    </div>

                    <div class="sj-lesson">
                            <p>
                                <b>Bài 1: Đối tượng, phương pháp nghiên cứu và chức năng của KTCT Mác - Lênin</b>
                                <embed src="{{ asset('assets/Documents/ktct/1.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 2: Hàng hoá, thị trường và vai trò của các chủ thể tham gia thị trường</b>
                                <embed src="{{ asset('assets/Documents/ktct/2.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 3: Giá trị thặng dư trong nền kinh tế thị trường</b>
                                <embed src="{{ asset('assets/Documents/ktct/3.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 4: Cạnh tranh và độc quyền trong nền kinh tế thị trường</b>
                                <embed src="{{ asset('assets/Documents/ktct/4.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 5: Kinh tế thị trường định hướng xã hội chủ nghĩa và các quan hệ lợi ích ở Việt Nam</b>
                                <embed src="{{ asset('assets/Documents/ktct/5.pdf') }}" type="application/pdf" >
                            </p>
                            <p>
                                <b>Bài 6: Công nghiệp hoá, hiện đại hoá và hội nhập kinh tế quốc tế của Việt Nam</b>
                                <embed src="{{ asset('assets/Documents/ktct/6.pdf') }}" type="application/pdf" >
                            </p>

                    </div>
                </div>


                <div class="subject-item" id = "tthcm">
                    <div class="sj-des">
                        <img src="{{ asset('assets/img/tthcm.svg') }}" class = "logo-sj">
                        <div class="sj-des-text">
                            <b class = "topic-name">Tư tưởng Hồ Chí Minh</b>

                            <p>Tư tưởng Hồ Chí Minh là một hệ thống quan điểm toàn diện và sâu sắc về những vấn đề cơ bản của cách mạng Việt Nam, là kết quả của sự vận dụng và phát triển sáng tạo chủ nghĩa Mác - Lênin vào điều kiện cụ thể của nước ta</p>
                        </div>
                    </div>

                    <div class="sj-lesson">
                        <p>
                            <b>Bài 1: Đối tượng, phương pháp nghiên cứu và ý nghĩa học tập môn tư tưởng HCM</b>
                            <embed src="{{ asset('assets/Documents/tthcm/1.pdf') }}" type="application/pdf" >
                        </p>
                        <p>
                            <b>Bài 2: Cơ sở, quá trình hình thành và phát triển tư tưởng </b>
                            <embed src="{{ asset('assets/Documents/tthcm/2.pdf') }}" type="application/pdf" >
                        </p>
                        <p>
                            <b>Bài 3: Tư tưởng HCM về độc lập dân tộc và CNXH</b>
                            <embed src="{{ asset('assets/Documents/tthcm/3.pdf') }}" type="application/pdf" >
                        </p>
                        <p>
                            <b>Bài 4: Tư tưởng HCM về ĐCS Việt Nam</b>
                            <embed src="{{ asset('assets/Documents/tthcm/4.pdf') }}" type="application/pdf" >
                        </p>
                        <p>
                            <b>Bài 5: Tư tưởng HCM về nhà nước Việt Nam</b>
                            <embed src="{{ asset('assets/Documents/tthcm/5.pdf') }}" type="application/pdf" >
                        </p>
                        <p>
                            <b>Bài 6: Tư tưởng HCM về đại đoàn kết dân tộc và đoàn kết quốc tế</b>
                            <embed src="{{ asset('assets/Documents/tthcm/6.pdf') }}" type="application/pdf" >
                        </p>
                        <p>
                            <b>Bài 7: Tư tưởng HCM về văn hoá, đạo đức, con người</b>
                            <embed src="{{ asset('assets/Documents/tthcm/7.pdf') }}" type="application/pdf" >
                        </p>
                    </div>
                </div>



            </div>
        </div>



    </div>
    <!-- Footer -->
    @include('layouts.frontend.footer')

    <script src="{{ asset('assets/Js/suggest.js') }}"></script>
    <script src="{{ asset('assets/Js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src ="{{ asset('assets/Js/menu.js') }}"></script>

    @include('layouts.backend.js')

</body>
</html>
