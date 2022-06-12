@extends('layout.app')
@section('custom-css')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection
@section('content')
<section class="single_comic">
    <div class="blue_line"></div>
    <div class="container sm_ py-5">
        <div class="card_comic">
            <div class="img_comic">
                <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}" />
                <div class="text_img text-uppercase text-white">
                    <div class="top px-2">
                        comic book
                    </div>
                    <div class="bottom">
                        view gallery
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-8">
                <div class="text_comic">
                    <h2 class="text-uppercase mb-3 mt-4">{{$comic['title']}}</h2>
                    <div class="row g-0">
                        <div class="col-9">
                            <div class="price">
                                <p><span>U.S. Price: </span>{{$comic['price']}}</p>
                                <p><span>AVAILABLE</span></p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="check">
                                <p>Check Availability <i class="fa-solid fa-caret-down"></i></p>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3">{{$comic['description']}}</p>
                </div>
            </div>
            <div class="col-4">
                <div class="advertisement text-end">
                    <small>ADVERTISEMENT</small>
                    <img src="{{asset('../img/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="details_comic py-4">
    <div class="container sm_">
        <div class="row gx-5">
            <div class="col-6">
                <div class="talent pb-5 mb-5 pe-3">
                    <h5>Talent</h5>
                    <div class="detail">
                        <div class="row">
                            <div class="col-4">
                                <p>Art By:</p>
                            </div>
                            <div class="col-8">
                                <p>
                                    @php $artist = implode('<span class="text_dark">,</span> ',$comic['artists'])
                                    @endphp
                                    <span>{!!$artist!!}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="row">
                            <div class="col-4">
                                <p>Written By:</p>
                            </div>
                            <div class="col-8">
                                <p>
                                    @php $writer = implode('<span class="text_dark">,</span> ',$comic['writers'])
                                    @endphp
                                    <span>{!!$writer!!}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="specs">
                    <h5>Specs</h5>
                    <div class="detail">
                        <div class="row">
                            <div class="col-4">
                                <p>Series:</p>
                            </div>
                            <div class="col-8">
                                <p>
                                    <span class="text-uppercase">{{$comic['series']}}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="row">
                            <div class="col-4">
                                <p>U.S. Price:</p>
                            </div>
                            <div class="col-8">
                                <p>{{$comic['price']}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="row">
                            <div class="col-4">
                                <p>On Sale Date:</p>
                            </div>
                            <div class="col-8">
                                <p>
                                    {{date_format(date_create_from_format("Y-m-d",$comic['sale_date']),"M d Y")}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="slider_details">
    <div class="container sm_">
        <div class="row row-cols-4 g-0">
            <div class="col">
                <div class="card_slider">
                    <h6>Digital comics</h6>
                    <img src="{{asset('../img/cta-icons-1.png')}}" alt="">
                </div>
            </div>
            <div class="col">
                <div class="card_slider">
                    <h6>shop dc</h6>
                    <img src="{{asset('../img/cta-icons-4.png')}}" alt="">
                </div>
            </div>
            <div class="col">
                <div class="card_slider">
                    <h6>comic shop locator</h6>
                    <img src="{{asset('../img/cta-icons-3.png')}}" alt="">
                </div>
            </div>
            <div class="col">
                <div class="card_slider">
                    <h6>subscriptions</h6>
                    <img src="{{asset('../img/cta-icons-2.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection