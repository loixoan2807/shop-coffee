@extends('client.layout')
@section('content')
    <main>
        <!-- breadcrumb area start -->
        <section class="breadcrumb-area pt-140 pb-140 bg_img" data-background="assets/images/bg/breadcrumb-bg-1.jpeg"
                 data-overlay="dark" data-opacity="5">
            <div class="shape shape__1"><img src="{{asset('client/assets/images/shape/breadcrumb-shape-1.png')}}"
                                             alt=""></div>
            <div class="shape shape__2"><img src="{{asset('client/assets/images/shape/breadcrumb-shape-2.png')}}"
                                             alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <h2 class="page-title">Cafena Checkout</h2>
                        <div class="cafena-breadcrumb breadcrumbs">
                            <ul class="list-unstyled d-flex align-items-center justify-content-center">
                                <li class="cafenabcrumb-item duxinbcrumb-begin">
                                    <a href="{{route('client.home')}}"><span>Home</span></a>
                                </li>
                                <li class="cafenabcrumb-item duxinbcrumb-end">
                                    <span>Faq</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- cart area start -->
        <div class="checkout-area pt-120 pb-120">
            <div class="container">
                <div class="row">

                    <div class="col-xl-12">

                        <div class="cart-wrapper checkout-wrapper">
                            <form action="" method="get">
                            <div class="row">
                                <h1 class="title" align="center">Xác nhận đơn hàng</h1>
                                <div class="col-xl-5">
                                    <div class="checkout-top">
                                        <div class="tab-content" id="pdContent">
                                            <h2 class="title text-start">Thông Tin Khách Hàng</h2>
                                            <div class="tab-pane fade show active" id="pd-1" role="tabpanel"
                                                 aria-labelledby="pd-1-tab">
                                                <div class="cart-form">

                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="from-group mt-30">
                                                                    <input type="text" name="name" id="name"
                                                                           placeholder="Tên người nhận">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="from-group mt-30">
                                                                    <input type="text" name="phone_number" id="tel"
                                                                           placeholder="Số điện thoại">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="from-group mt-30">
                                                                    <textarea name="note" id="ainfo" placeholder="Ghi chú"></textarea>
                                                                </div>
                                                            </div>

                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1"></div>
                                <div class="col-xl-6">
                                    <div class="cart-total mt-45 text-end">
                                        <h2 class="title text-start">Tổng Tiền</h2>
                                        <div class="ct-sub ct-sub__total">
                                            <span>Total</span>
                                            <span>{{number_format(session()->get('allPrice'))}}đ</span>
                                        </div>
                                        <button class="site-btn">Procced to checkout</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart area end -->


    </main>
@endsection