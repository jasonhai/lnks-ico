<footer id="footer" class="footer bg-white pb-4">
    <div class="container">

        @include('partials.footer_menu')
        <hr class="mt-0 mb-4">

        <div class="row justify-content-between">
            <div class="col-lg-6 col-md-6 mb-5 mb-lg-0">


                <div class="f-contact row">
                    <div class="col-8 mb-3 mb-md-4">
                        <h3 class="mb-3 mb-md-4 fs-16">
                            Hệ thống cửa hàng kết nối tài chính
                        </h3>
                        <ul class="p-0 ml-10px">
                            <li class="m-10px"><span class="text-uppercase"> 960 Đường Láng, Hà Nội</span> <br /> Hotline: (024) 7302 8822</li>
                            <li class="m-10px"><span class="text-uppercase">199 Hồ Tùng Mậu, Hà Nội</span><br /> Hotline: (024) 7303 8822</li>
                            <li class="m-10px"><span class="text-uppercase">Ki ốt 124 Chợ Bách Khoa, Lê Thanh Nghị</span><br /> Hotline: (024) 7304 8822</li>
                            <li class="m-10px"><span class="text-uppercase">958 Trương Định, Hà Nội</span><br /> Hotline: (024) 7305 8822</li>
                        </ul>


                    </div>


                    <div class="col-md-4 col-xs-12">

                        <h3 class="mb-3 mb-md-4 fs-16">
                            Hỗ trợ khách hàng
                        </h3>
                        <a class="d-flex align-items-center text-primary" href="tel:1900633688">
                            <div class="f-contact__icon mr-10px mb-10px">
                                <i class="icon-phone-sm d-flex"></i>
                            </div>
                            <strong class="fs-20 text-primary">1900.633.688</strong>
                        </a>

                        <a class="d-flex align-items-center" href="Home/Support/index.html">
                            <div class="f-contact__icon mr-10px mb-10px">
                                <i class="icon-faq-black d-flex"></i>
                            </div>
                            Câu hỏi thường gặp
                        </a>

                        <a class="d-flex align-items-center" href="mailto:support@andydang.com">
                            <div class="f-contact__icon mr-10px mb-10px">
                                <i class="icon-email-1 d-flex"></i>
                            </div>
                            support@andydang.com
                        </a>
                        <a class="d-flex align-items-center" href="https://www.facebook.com/andydang.com/" target="_blank">
                            <div class="f-contact__icon mr-10px mb-10px">
                                <i class="icon-facebook-circle d-flex"></i>
                            </div>
                            andydang.com
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-xl-6 col-lg-7 ">
                <div class="">  {{--d-flex flex-column flex-md-row--}}
                    <div class="footer__copyright text-lg-right mb-5 mb-md-0">
                        <h3 class="mb-3 mb-md-4 fs-16">
                            Công ty cổ phần tập đoàn ABC
                        </h3>

                        <div class="pl-xl-7">
                            <p>
                                Số 275, Nguyễn Trãi, Thanh Xuân, Hà Nội <br />
                                Giấy CN ĐKDN số 0107333139 được cấp bởi <br />Sở Kế hoạch và Đầu tư TP. Hà Nội
                            </p>
                            <p class="mb-0">
                                © {{ date('Y') }} Bản quyền thuộc về ABC
                            </p>
                        </div>
                    </div>

                    {{--<div class="divider-v mx-6 hidden-sm-down"></div>--}}

                    {{--<div class="gomobile">--}}
                        {{--<div>--}}
                            {{--<h3 class="mb-3 mb-md-5 fs-14 text-danger">--}}
                                {{--Tải ứng dụng ABC cho nhà đầu tư--}}
                            {{--</h3>--}}
                            {{--<div class="d-flex flex-row flex-md-column">--}}
                                {{--<div class="mb-3 mr-3 mr-md-0">--}}
                                    {{--<a target="_blank" class="gomobile__link" href="https://itunes.apple.com/us/app/tima-cho-vay/id1434498255?ls=1&amp;mt=8">--}}
                                        {{--<img class="img-responsive" src="template/images/appstore.png" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div>--}}
                                    {{--<a target="_blank" class="gomobile__link" href="https://play.google.com/store/apps/details?id=com.timaV2">--}}
                                        {{--<img class="img-responsive" src="template/images/googleplay.png" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<br />--}}
                        {{--<div>--}}
                            {{--<h3 class="mb-3 mb-md-5 fs-14 text-info">--}}
                                {{--Tải ứng dụng ABC cho người đi vay--}}
                            {{--</h3>--}}
                            {{--<div class="d-flex flex-row flex-md-column">--}}
                                {{--<div class="mb-3 mr-3 mr-md-0">--}}
                                    {{--<a target="_blank" class="gomobile__link" href="https://itunes.apple.com/vn/app/tima-sàn-kết-nối-tài-chính/id1291754151?l=vi&amp;mt=8">--}}
                                        {{--<img class="img-responsive" src="template/images/appstore.png" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div>--}}
                                    {{--<a target="_blank" class="gomobile__link" href="https://play.google.com/store/apps/details?id=com.santima">--}}
                                        {{--<img class="img-responsive" src="template/images/googleplay.png" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                </div>
            </div>
        </div>

    </div>
</footer>