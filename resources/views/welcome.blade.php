<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.backend.css')
</head>
<body class="d-flex flex-column" style="background: #404258;width: 100%;height: 100%;">

    @include('layouts.frontend.header')   
    <div class="card" style="margin-top: 20px;margin-right: 27px;margin-left: 27px;border-radius: 10px;border-color: #474E68;">
        <div class="card-header" style="background: #474E68;">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
                <li class="nav-item" style="font-family: Inter, sans-serif;">
                    <a class="nav-link active" id="item-1-1-tab" role="tab" aria-controls="item-1-1" aria-selected="true" href="#item-1-1" data-bs-toggle="tab">Giới thiệu</a>
                </li>
                <li class="nav-item"><a class="nav-link" id="item-1-2-tab" role="tab" aria-controls="item-1-2" aria-selected="false" href="#item-1-2" data-bs-toggle="tab" style="font-family: Inter, sans-serif;">Tin tức</a></li>
                <li class="nav-item"><a class="nav-link" id="item-1-3-tab" role="tab" aria-controls="item-1-3" aria-selected="false" href="#item-1-3" data-bs-toggle="tab" style="font-family: Inter, sans-serif;">Đào tạo</a></li>
                <li class="nav-item"><a class="nav-link" id="item-1-4-tab" role="tab" aria-controls="item-1-4" aria-selected="false" href="#item-1-4" data-bs-toggle="tab" style="font-family: Inter, sans-serif;">Thông báo</a></li>
                <li class="nav-item"><a class="nav-link" id="item-1-5-tab" role="tab" aria-controls="item-1-5" aria-selected="false" href="#item-1-5" data-bs-toggle="tab" style="font-family: Inter, sans-serif;">Bộ môn</a></li>
                <li class="nav-item"><a class="nav-link" id="item-1-6-tab" role="tab" aria-controls="item-1-6" aria-selected="false" href="#item-1-6" data-bs-toggle="tab" style="font-family: Inter, sans-serif;">Nghiên cứu khoa học</a></li>
                <li class="nav-item"><a class="nav-link" id="item-1-7-tab" role="tab" aria-controls="item-1-7" aria-selected="false" href="#item-1-7" data-bs-toggle="tab" style="font-family: Inter, sans-serif;">Liên hệ</a></li>
            </ul>
        </div>

        <div class="card-body" style="background: #474E68;">
            <div id="nav-tabContent" class="tab-content">

                <div id="item-1-1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-1-tab">
                    <div class="container" style="margin-top: 20px;">
                        <div class="row" style="height: 400px;">
                            <div class="col-7" style="background: url(&quot;assets/img/CSE_logo-removebg-preview.png&quot;) center / contain no-repeat;"></div>
                            <div class="col">
                                <h1 style="margin-top: 10px;">Giới thiệu</h1>
                                <p style="font-size: 20px;">Xin chào các cô giáo, thầy giáo, anh chị và các bạn ghé thăm trang web của Khoa CNTT!<br>Năm 2001, lãnh đạo Bộ Nông nghiệp &amp; PTNT, lãnh đạo trường Đại học Thủy lợi khi đó đã nhận ra xu hướng và cơ hội của ngành Công nghệ thông tin (CNTT) trong tương lai, đồng thời cũng do nhu cầu bức thiết về đội ngũ kỹ sư công nghệ thông tin trong ngành và toàn xã hội, khoa CNTT được thành lập ngày 19/11/2001 từ việc sáp nhập Trung tâm tin học và Bộ môn Toán học của trường. Kể từ khi thành lập, Khoa CNTT đã phát triển không ngừng.<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000" id="carousel-t" style="margin-top: 90px;background: #474E68;">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <h3 style="text-align: center;">Ban chủ nhiệm khoa</h3>
                                <div class="col-9 text-center mx-auto testimonial-content" style="background: #404258;border-radius: 40px;height: 330px;"><img class="rounded-circle" src="assets/img/Testimonial%20male%20white.svg" width="100" style="margin-top: 20px;">
                                    <p class="text-center rating" style="width: 150px;background: #50577A;font-size: 24px;font-weight: bold;">Trưởng Khoa</p>
                                    <p class="signature">PGS. TS. Nguyễn Thanh Tùng</p>
                                    <p class="signature" style="font-size: 20px;">Email: tungnt@tlu.edu.vn</p>
                                    <p class="signature" style="font-size: 20px;">SĐT:&nbsp;+84-4-********</p>
                                    <p class="signature" style="font-size: 20px;">Phòng làm việc: P305 Tầng 3 Nhà C1</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <h3 style="text-align: center;">Ban chủ nhiệm khoa</h3>
                                <div class="col-9 text-center mx-auto testimonial-content" style="background: #404258;height: 330px;border-radius: 40px;"><img class="rounded-circle" src="assets/img/Testimonial%20male%20white.svg" width="100" style="margin-top: 20px;">
                                    <p class="text-center rating" style="width: 180px;background: #50577A;font-size: 24px;font-weight: bold;">Phó Trưởng Khoa</p>
                                    <p class="signature">PGS. TS. Nguyễn Hữu Quỳnh</p>
                                    <p class="signature" style="font-size: 20px;">Email: quynhnh@tlu.edu.vn</p>
                                    <p class="signature" style="font-size: 20px;">SĐT:&nbsp;+84-4-********</p>
                                    <p class="signature" style="font-size: 20px;">Phòng làm việc: P204 Tầng 2 Nhà C5</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <h3 style="text-align: center;">Ban chủ nhiệm khoa</h3>
                                <div class="col-9 text-center mx-auto testimonial-content" style="background: #404258;height: 330px;border-radius: 40px;"><img class="rounded-circle" src="assets/img/Testimonial%20male%20white.svg" width="100" style="margin-top: 20px;">
                                    <p class="text-center rating" style="width: 180px;background: #50577A;font-size: 24px;font-weight: bold;">Phó Trưởng Khoa</p>
                                    <p class="signature">TS. Tạ Quang Chiểu</p>
                                    <p class="signature" style="font-size: 20px;">Email: chieutq@tlu.edu.vn</p>
                                    <p class="signature" style="font-size: 20px;">SĐT:&nbsp;+84-4-********</p>
                                    <p class="signature" style="font-size: 20px;">Phòng làm việc: P203 Tầng 2 Nhà C5</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <h3 style="text-align: center;">Ban chủ nhiệm khoa</h3>
                                <div class="col-9 text-center mx-auto testimonial-content" style="background: #404258;height: 330px;border-radius: 40px;"><img class="rounded-circle" src="assets/img/Testimonial%20male%20white.svg" width="100" style="margin-top: 20px;">
                                    <p class="text-center rating" style="width: 150px;background: #50577A;font-size: 24px;font-weight: bold;">Trợ Lý Khoa</p>
                                    <p class="signature">KS. Nguyễn Khánh Linh</p>
                                    <p class="signature" style="font-size: 20px;">Email: linhnk@tlu.edu.vn</p>
                                    <p class="signature" style="font-size: 20px;">SĐT:&nbsp;+84-4-********</p>
                                    <p class="signature" style="font-size: 20px;">Phòng làm việc: P204 Tầng 2 Nhà C1</p>
                                </div>
                            </div>
                        </div>
                        <div><a class="carousel-control-prev" href="#carousel-t" role="button" data-bs-slide="prev" style="background: #474E68;"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-t" role="button" data-bs-slide="next" style="background: #474E68;"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carousel-t" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carousel-t" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carousel-t" data-bs-slide-to="2"></li>
                            <li data-bs-target="#carousel-t" data-bs-slide-to="3"></li>
                        </ol>
                    </div>
                </div>

                <!-- Bài viết -->
                <div id="item-1-2" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-2-tab">
                    <div class="row flex-column" style="margin-right: 10px;margin-left: 10px;">                       
                        
                        @foreach($posts->reverse() as $row)
                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px; 
                                                                                     background: #50577A;
                                                                                     border-radius: 20px;">
                            <a href="#"><img width="250px" height="auto" src="{{ $row->img_post }}"></a>
                            <a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="width: 100%; 
                                                                                                         color: var(--bs-card-bg);
                                                                                                         font-family: Inter, sans-serif;">
                                <div style="margin-left: 40px;">
                                    <h1 style="font-weight: bold;"><strong>{{ $row->title_post }}</strong></h1>
                                </div>
                                <div class="d-xxl-flex justify-content-xxl-end">
                                    <a href="post/{{ $row->id }}" >
                                        <button class="btn btn-primary" type="button" style="margin-top: 100px; 
                                                                                             width: 120.2px;
                                                                                             height: 56px;
                                                                                             font-size: 19px;
                                                                                             background: #404258;
                                                                                             border-style: none;">
                                            <strong>Xem thêm</strong>
                                        </button>
                                    </a>   
                                </div>
                            </a>
                        </div>
                        @endforeach
                        
                    </div>

                    <nav class="d-xl-flex justify-content-xl-center" style="height: 55px;margin-top: 20px;">
                        <ul class="pagination">
                            <li class="page-item d-xl-flex"><a class="page-link" href="#" aria-label="Previous">«</a></li>
                            <li class="page-item d-xl-flex"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next">»</a></li>
                        </ul>
                    </nav>
                </div>

                <div id="item-1-3" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-3-tab">
                    <div class="card" id="dtao-1" style="background: #474E68;">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="item-1-t-1" role="tab" aria-controls="item-1-t1" aria-selected="true" href="#item-1-t1" data-bs-toggle="tab">Đào tạo đại học</a></li>
                                <li class="nav-item"><a class="nav-link" id="item-1-t-2" role="tab" aria-controls="item-1-t2" aria-selected="false" href="#item-1-t2" data-bs-toggle="tab">Đào tạo sau đại học</a></li>
                                <li class="nav-item"><a class="nav-link" id="item-1-t-3" role="tab" aria-controls="item-1-t3" aria-selected="false" href="#item-1-t3" data-bs-toggle="tab">Mô tả chương trình đào tạo</a></li>
                                <li class="nav-item"><a class="nav-link" id="item-1-t-4" role="tab" aria-controls="item-1-t4" aria-selected="false" href="#item-1-t4" data-bs-toggle="tab">Định hướng ra nghề</a></li>
                                <li class="nav-item"><a class="nav-link" id="item-1-t-5" role="tab" aria-controls="item-1-t5" aria-selected="false" href="#item-1-t5" data-bs-toggle="tab">Chuẩn đầu ra</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div id="nav-tabContent-2" class="tab-content">
                                <div id="item-1-t1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-t1">
                                    <div class="row flex-column" style="margin-right: 10px;margin-left: 10px;">
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                    </div>
                                    <nav class="d-xl-flex justify-content-xl-center" style="height: 55px;margin-top: 20px;">
                                        <ul class="pagination">
                                            <li class="page-item d-xl-flex"><a class="page-link" href="#" aria-label="Previous">«</a></li>
                                            <li class="page-item d-xl-flex"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next">»</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div id="item-1-t2" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-t2">
                                    <div class="row flex-column" style="margin-right: 10px;margin-left: 10px;">
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                    </div>
                                    <nav class="d-xl-flex justify-content-xl-center" style="height: 55px;margin-top: 20px;">
                                        <ul class="pagination">
                                            <li class="page-item d-xl-flex"><a class="page-link" href="#" aria-label="Previous">«</a></li>
                                            <li class="page-item d-xl-flex"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next">»</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div id="item-1-t3" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-t3">
                                    <div class="row flex-column" style="margin-right: 10px;margin-left: 10px;">
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                    </div>
                                    <nav class="d-xl-flex justify-content-xl-center" style="height: 55px;margin-top: 20px;">
                                        <ul class="pagination">
                                            <li class="page-item d-xl-flex"><a class="page-link" href="#" aria-label="Previous">«</a></li>
                                            <li class="page-item d-xl-flex"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next">»</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div id="item-1-t4" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-t4">
                                    <div class="row flex-column" style="margin-right: 10px;margin-left: 10px;">
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                    </div>
                                    <nav class="d-xl-flex justify-content-xl-center" style="height: 55px;margin-top: 20px;">
                                        <ul class="pagination">
                                            <li class="page-item d-xl-flex"><a class="page-link" href="#" aria-label="Previous">«</a></li>
                                            <li class="page-item d-xl-flex"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next">»</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div id="item-1-t5" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-t5">
                                    <div class="row flex-column" style="margin-right: 10px;margin-left: 10px;">
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                                <div style="margin-left: 40px;">
                                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                                </div>
                                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                                            </a></div>
                                    </div>
                                    <nav class="d-xl-flex justify-content-xl-center" style="height: 55px;margin-top: 20px;">
                                        <ul class="pagination">
                                            <li class="page-item d-xl-flex"><a class="page-link" href="#" aria-label="Previous">«</a></li>
                                            <li class="page-item d-xl-flex"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next">»</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="item-1-4" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-4-tab">
                    <div class="row flex-column" style="margin-right: 10px;margin-left: 10px;">
                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                <div style="margin-left: 40px;">
                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                </div>
                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                            </a></div>
                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                <div style="margin-left: 40px;">
                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                </div>
                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                            </a></div>
                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                <div style="margin-left: 40px;">
                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                </div>
                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                            </a></div>
                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                <div style="margin-left: 40px;">
                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                </div>
                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                            </a></div>
                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                <div style="margin-left: 40px;">
                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                </div>
                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                            </a></div>
                        <div class="col d-xxl-flex justify-content-xxl-start" style="margin-top: 40px;background: #50577A;border-radius: 20px;"><a href="#"><img width="350px" height="236px" src="assets/img/CSE_logo-removebg-preview.png"></a><a class="d-xxl-flex flex-column justify-content-xxl-center" href="#" style="color: var(--bs-card-bg);font-family: Inter, sans-serif;">
                                <div style="margin-left: 40px;">
                                    <h1 style="font-weight: bold;"><strong>Tiêu đề</strong></h1>
                                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perferendis deleniti quo veniam quae fugit natus unde ullam eveniet odio!<br></p>
                                </div>
                                <div class="d-xxl-flex justify-content-xxl-end"><button class="btn btn-primary" type="button" style="width: 120.2px;height: 56px;font-size: 19px;background: #404258;border-style: none;"><strong>Xem thêm</strong></button></div>
                            </a></div>
                    </div>
                    <nav class="d-xl-flex justify-content-xl-center" style="height:55px;">
                        <ul class="pagination">
                            <li class="page-item d-xl-flex"><a class="page-link" href="#" aria-label="Previous">«</a></li>
                            <li class="page-item d-xl-flex"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next">»</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- Bài giảng -->
                <div id="item-1-5" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-5-tab">
                    <div class="container py-4 py-xl-5">
                        <div class="row mb-5">
                            <div class="col-md-8 col-xl-6 text-center mx-auto">
                                <h2 style="font-family: Inter, sans-serif;font-weight: bold;">Các bộ môn của khoa CNTT</h2>
                                
                                @guest
                                    @if (Route::has('login'))
                                    @endif
                                @else
                                    <p class="w-lg-50" style="font-family: Inter, sans-serif;">Bạn muốn xem bài giảng? Bấm vào nút dưới đây</p><a href="/users/documents" class="btn btn-primary" type="button" style="background: #404258;border-style: none;">Bài giảng các môn học</a>
                                @endguest

                            </div>
                        </div>
                        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                            <div class="col">
                                <div class="card" style="background: #404258;"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/CSE_logo-removebg-preview.png">
                                    <div class="card-body p-4">
                                        <p class="text-primary card-text mb-0">CNTT</p>
                                        <h4 class="card-title">Công Nghệ Phần Mềm</h4>
                                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                                            <div>
                                                <p class="fw-bold mb-0">TS Lê Nguyễn Tuấn Thành</p>
                                                <p class="text-muted mb-0">Trưởng bộ môn</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="background: #404258;"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/CSE_logo-removebg-preview.png">
                                    <div class="card-body p-4">
                                        <p class="text-primary card-text mb-0">CNTT</p>
                                        <h4 class="card-title">Hệ Thống Thông Tin</h4>
                                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                                            <div>
                                                <p class="fw-bold mb-0">TS Trần Mạnh Tuấn</p>
                                                <p class="text-muted mb-0">Phó trưởng bộ môn</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="background: #404258;"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/CSE_logo-removebg-preview.png">
                                    <div class="card-body p-4">
                                        <p class="text-primary card-text mb-0">CNTT</p>
                                        <h4 class="card-title">Trí Tuệ Nhân Tạo</h4>
                                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                                            <div>
                                                <p class="fw-bold mb-0">TS Tạ Quang Chiểu</p>
                                                <p class="text-muted mb-0">Trưởng bộ môn</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="background: #404258;"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/CSE_logo-removebg-preview.png">
                                    <div class="card-body p-4">
                                        <p class="text-primary card-text mb-0">CNTT</p>
                                        <h4 class="card-title">Mạng và An Toàn Thông Tin</h4>
                                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                                            <div>
                                                <p class="fw-bold mb-0">ThS Phạm Thanh Bình</p>
                                                <p class="text-muted mb-0">Phó trưởng bộ môn</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="background: #404258;"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/CSE_logo-removebg-preview.png">
                                    <div class="card-body p-4">
                                        <p class="text-primary card-text mb-0">Toán học</p>
                                        <h4 class="card-title">Giải Tích</h4>
                                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                                            <div>
                                                <p class="fw-bold mb-0">TS Nguyễn Hữu Thọ</p>
                                                <p class="text-muted mb-0">Trưởng bộ môn</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="background: #404258;"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/CSE_logo-removebg-preview.png">
                                    <div class="card-body p-4">
                                        <p class="text-primary card-text mb-0">Toán học</p>
                                        <h4 class="card-title">Đại Số Tuyến Tính</h4>
                                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                                            <div>
                                                <p class="fw-bold mb-0">TS Nguyễn Đức Hậu</p>
                                                <p class="text-muted mb-0">Phó trưởng bộ môn</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="item-1-6" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-6-tab">
                    <div class="container py-4 py-xl-5">
                        <div class="row mb-5">
                            <div class="col-md-8 col-xl-6 text-center mx-auto">
                                <h2 style="background: #6B728E;border-radius: 20px;">Một số hướng nghiên cứu về CNTT</h2>
                            </div>
                        </div>
                        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                            <div class="col">
                                <div class="p-4"><span class="badge rounded-pill bg-primary mb-2">Nghiên cứu khoa học</span>
                                    <h4>Thị giác máy và nhận mẫu</h4>
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/Testimonial%20male%20white.svg">
                                        <div>
                                            <p class="fw-bold mb-0">Nguyễn Văn A</p>
                                            <p class="text-muted mb-0">Erat netus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-4"><span class="badge rounded-pill bg-primary mb-2">Nghiên cứu khoa học</span>
                                    <h4>Xử lý ngôn ngữ tự nhiên</h4>
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/Testimonial%20male%20white.svg">
                                        <div>
                                            <p class="fw-bold mb-0">Nguyễn Văn A</p>
                                            <p class="text-muted mb-0">Erat netus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-4"><span class="badge rounded-pill bg-primary mb-2">Nghiên cứu khoa học</span>
                                    <h4>Tin sinh học</h4>
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/Testimonial%20male%20white.svg">
                                        <div>
                                            <p class="fw-bold mb-0">Nguyễn Văn A</p>
                                            <p class="text-muted mb-0">Erat netus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-4"><span class="badge rounded-pill bg-primary mb-2">Nghiên cứu khoa học</span>
                                    <h4>Mạng nơ-ron và tính toán tiến hóa</h4>
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/Testimonial%20male%20white.svg">
                                        <div>
                                            <p class="fw-bold mb-0">Nguyễn Văn A</p>
                                            <p class="text-muted mb-0">Erat netus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-4"><span class="badge rounded-pill bg-primary mb-2">Nghiên cứu khoa học</span>
                                    <h4>Mạng máy tính và an ninh mạng</h4>
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/Testimonial%20male%20white.svg">
                                        <div>
                                            <p class="fw-bold mb-0">Nguyễn Văn A</p>
                                            <p class="text-muted mb-0">Erat netus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-4"><span class="badge rounded-pill bg-primary mb-2">Nghiên cứu khoa học</span>
                                    <h4>Mạng cảm biến không dây</h4>
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/Testimonial%20male%20white.svg">
                                        <div>
                                            <p class="fw-bold mb-0">Nguyễn Văn A</p>
                                            <p class="text-muted mb-0">Erat netus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container py-4 py-xl-5">
                        <div class="row mb-5">
                            <div class="col-md-8 col-xl-6 text-center mx-auto">
                                <h2 style="border-radius: 22px;background: #6B728E;">Ứng dụng CNTT trong Thủy Lợi</h2>
                            </div>
                        </div>
                        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                            <div class="col">
                                <div class="p-4"><span class="badge rounded-pill bg-primary mb-2">Nghiên cứu khoa học</span>
                                    <h4>Xây dựng cơ sở dữ liệu và khai phá dữ liệu trong thủy lợi, thủy điện và tài nguyên nước</h4>
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/Testimonial%20male%20white.svg">
                                        <div>
                                            <p class="fw-bold mb-0">Nguyễn Văn A</p>
                                            <p class="text-muted mb-0">Erat netus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-4"><span class="badge rounded-pill bg-primary mb-2">Nghiên cứu khoa học</span>
                                    <h4>GIS trong quản lý đê điều và quản lý thông tin thiên tai<br></h4>
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/Testimonial%20male%20white.svg">
                                        <div>
                                            <p class="fw-bold mb-0">Nguyễn Văn A</p>
                                            <p class="text-muted mb-0">Erat netus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-4"><span class="badge rounded-pill bg-primary mb-2">Nghiên cứu khoa học</span>
                                    <h4>Các phương pháp học máy trong dự báo thủy văn và dòng chảy</h4>
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/Testimonial%20male%20white.svg">
                                        <div>
                                            <p class="fw-bold mb-0">Nguyễn Văn A</p>
                                            <p class="text-muted mb-0">Erat netus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-4"><span class="badge rounded-pill bg-primary mb-2">Nghiên cứu khoa học</span>
                                    <h4>Mô hình hóa và mô phỏng các công trình thủy lợi</h4>
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/Testimonial%20male%20white.svg">
                                        <div>
                                            <p class="fw-bold mb-0">Nguyễn Văn A</p>
                                            <p class="text-muted mb-0">Erat netus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-4"><span class="badge rounded-pill bg-primary mb-2">Nghiên cứu khoa học</span>
                                    <h4>Phần mềm hỗ trợ tính toán kỹ thuật, quản lý và vận hành công trình</h4>
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/Testimonial%20male%20white.svg">
                                        <div>
                                            <p class="fw-bold mb-0">Nguyễn Văn A</p>
                                            <p class="text-muted mb-0">Erat netus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-4"><span class="badge rounded-pill bg-primary mb-2">Nghiên cứu khoa học</span>
                                    <h4>Quản lý và điều hành trên Internet trong các tổ chức đào tạo và cơ quan quản lý nhà nước</h4>
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/Testimonial%20male%20white.svg">
                                        <div>
                                            <p class="fw-bold mb-0">Nguyễn Văn A</p>
                                            <p class="text-muted mb-0">Erat netus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container py-4 py-xl-5">
                        <div class="row mb-5">
                            <div class="col-md-8 col-xl-6 text-center mx-auto">
                                <h2 style="background: #6B728E;border-radius: 20px;">Một số hướng nghiên cứu về Toán học</h2>
                            </div>
                        </div>
                        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                            <div class="col">
                                <div class="p-4"><span class="badge rounded-pill bg-primary mb-2">Nghiên cứu khoa học</span>
                                    <h4>Toán cho thủy lực, mô hình toán của dòng chảy hai pha</h4>
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/Testimonial%20male%20white.svg">
                                        <div>
                                            <p class="fw-bold mb-0">Nguyễn Văn A</p>
                                            <p class="text-muted mb-0">Erat netus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-4"><span class="badge rounded-pill bg-primary mb-2">Nghiên cứu khoa học</span>
                                    <h4>Proper Orthogonal Decomposition (POD), Reduced Order Modeling (ROM)</h4>
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/Testimonial%20male%20white.svg">
                                        <div>
                                            <p class="fw-bold mb-0">Nguyễn Văn A</p>
                                            <p class="text-muted mb-0">Erat netus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-4"><span class="badge rounded-pill bg-primary mb-2">Nghiên cứu khoa học</span>
                                    <h4>Nghiên cứu biểu diễn các dạng nghiệm suy rộng</h4>
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/Testimonial%20male%20white.svg">
                                        <div>
                                            <p class="fw-bold mb-0">Nguyễn Văn A</p>
                                            <p class="text-muted mb-0">Erat netus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-4"><span class="badge rounded-pill bg-primary mb-2">Nghiên cứu khoa học</span>
                                    <h4>Lý thuyết hệ động lực vô hạn chiều</h4>
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/Testimonial%20male%20white.svg">
                                        <div>
                                            <p class="fw-bold mb-0">Nguyễn Văn A</p>
                                            <p class="text-muted mb-0">Erat netus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-4"><span class="badge rounded-pill bg-primary mb-2">Nghiên cứu khoa học</span>
                                    <h4>Lý thuyết điều khiển phương trình đạo hàm riêng<br></h4>
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/Testimonial%20male%20white.svg">
                                        <div>
                                            <p class="fw-bold mb-0">Nguyễn Văn A</p>
                                            <p class="text-muted mb-0">Erat netus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-4"><span class="badge rounded-pill bg-primary mb-2">Nghiên cứu khoa học</span>
                                    <h4>Tính giải được và tính ổn định nghiệm của bài toán phương trình vi phân bậc phân số</h4>
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/Testimonial%20male%20white.svg">
                                        <div>
                                            <p class="fw-bold mb-0">Nguyễn Văn A</p>
                                            <p class="text-muted mb-0">Erat netus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="item-1-7" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-7-tab">
                    <section class="position-relative py-4 py-xl-5">
                        <div class="container position-relative">
                            <div class="row mb-5">
                                <div class="col-md-8 col-xl-6 text-center mx-auto">
                                    <h2 style="background: #6B728E;border-radius: 17px;font-family: Inter, sans-serif;font-weight: bold;">Liên hệ với chúng tôi</h2>
                                    <p class="w-lg-50" style="font-family: Inter, sans-serif;">Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. Vestibulum dui eget ultrices.</p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="d-flex flex-column justify-content-center align-items-start h-100">
                                        <div class="d-flex align-items-center p-3">
                                            <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon" style="background: #404258;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone">
                                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                                                </svg></div>
                                            <div class="px-2">
                                                <h6 class="mb-0" style="font-family: Inter, sans-serif;font-weight: bold;">Điện thoại</h6>
                                                <p class="mb-0" style="font-family: Inter, sans-serif;">(+84) 0243 5632 211</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center p-3">
                                            <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon" style="background: #404258;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                                    <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"></path>
                                                </svg></div>
                                            <div class="px-2">
                                                <h6 class="mb-0" style="font-family: Inter, sans-serif;font-weight: bold;">Email</h6>
                                                <p class="mb-0" style="font-family: Inter, sans-serif;">vpkcntt@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center p-3">
                                            <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon" style="background: #404258;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pin">
                                                    <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A5.921 5.921 0 0 1 5 6.708V2.277a2.77 2.77 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354zm1.58 1.408-.002-.001.002.001zm-.002-.001.002.001A.5.5 0 0 1 6 2v5a.5.5 0 0 1-.276.447h-.002l-.012.007-.054.03a4.922 4.922 0 0 0-.827.58c-.318.278-.585.596-.725.936h7.792c-.14-.34-.407-.658-.725-.936a4.915 4.915 0 0 0-.881-.61l-.012-.006h-.002A.5.5 0 0 1 10 7V2a.5.5 0 0 1 .295-.458 1.775 1.775 0 0 0 .351-.271c.08-.08.155-.17.214-.271H5.14c.06.1.133.191.214.271a1.78 1.78 0 0 0 .37.282z"></path>
                                                </svg></div>
                                            <div class="px-2">
                                                <h6 class="mb-0" style="font-family: Inter, sans-serif;font-weight: bold;">Địa chỉ</h6>
                                                <p class="mb-0" style="font-family: Inter, sans-serif;">Nhà C1, Đại học Thủy Lợi, 175 Tây Sơn Đống Đa, Hà Nội</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-5 col-xl-4">
                                    <div>
                                        <form class="p-3 p-xl-4" method="post">
                                            <div class="mb-3"><input class="form-control" type="text" id="name-2" name="name" placeholder="Name" style="font-family: Inter, sans-serif;"></div>
                                            <div class="mb-3"><input class="form-control" type="email" id="email-2" name="email" placeholder="Email" style="font-family: Inter, sans-serif;"></div>
                                            <div class="mb-3"><textarea class="form-control" id="message-2" name="message" rows="6" placeholder="Message" style="font-family: Inter, sans-serif;"></textarea></div>
                                            <div><button class="btn btn-primary d-block w-100" type="submit" style="background: #404258;font-family: Inter, sans-serif;border-style: none;">Send </button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>

    @include('layouts.frontend.footer')
    @include('layouts.backend.js')
    </body>
</html>
