@extends('layout.publiclayout')

@section('content')
    <div class="main_slider" style="background-image:url(/assets/images/slider_2.jpg)">
        <div class="container fill_height">
            <div class="row align-items-center fill_height">
                <div class="col">
                    <div class="main_slider_content">
                        <h6>@lang('public.slider-content-h6')</h6>
                        <h1>@lang('public.slider-content-h1')</h1>
                        <div class="red_button shop_now_button"><a href="#">@lang('public.slider-button')</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="banner_item align-items-center" style="background-image:url(/assets/images/book_banner.jpeg)">
                        <div class="banner_category">
                            <a href="{{ route('category.show','1') }}">@lang('public.category-book')</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner_item align-items-center" style="background-image:url(/assets/images/author-background.jpg)">
                        <div class="banner_category">
                            <a href="{{ route('category.show','1') }}">@lang('public.category-author')</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner_item align-items-center" style="background-image:url(/assets/images/publisher.jpg)">
                        <div class="banner_category">
                            <a href="{{ route('category.show','1') }}">@lang('public.category-publisher')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>@lang('public.new-book')</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col text-center">
                    <div class="new_arrivals_sorting">
                        <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".womens">women's</li>
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".accessories">accessories</li>
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">men's</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

                        <!-- Product 1 -->

                        <div class="product-item men">
                            <div class="product discount product_filter">
                                <div class="product_image">
                                    <img src="/assets/images/product_1.png" alt="">
                                </div>
                                <div class="favorite favorite_left"></div>
                                <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
                                    <div class="product_price">$520.00<span>$590.00</span></div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="{{ route('detail.show','1') }}">Borrow</a></div>
                        </div>

                        <!-- Product 2 -->

                        <div class="product-item womens">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="/assets/images/product_2.png" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
                                    <div class="product_price">$610.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>

                        <!-- Product 3 -->

                        <div class="product-item women">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="/assets/images/product_3.png" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Blue Yeti USB Microphone Blackout Edition</a></h6>
                                    <div class="product_price">$120.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>

                        <!-- Product 4 -->

                        <div class="product-item accessories">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="/assets/images/product_4.png" alt="">
                                </div>
                                <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
                                <div class="favorite favorite_left"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
                                    <div class="product_price">$410.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>

                        <!-- Product 5 -->

                        <div class="product-item women men">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="/assets/images/product_5.png" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold & Grey</a></h6>
                                    <div class="product_price">$180.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>

                        <!-- Product 6 -->

                        <div class="product-item accessories">
                            <div class="product discount product_filter">
                                <div class="product_image">
                                    <img src="/assets/images/product_6.png" alt="">
                                </div>
                                <div class="favorite favorite_left"></div>
                                <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="#single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
                                    <div class="product_price">$520.00<span>$590.00</span></div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>

                        <!-- Product 7 -->

                        <div class="product-item women">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="/assets/images/product_7.png" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
                                    <div class="product_price">$610.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>

                        <!-- Product 8 -->

                        <div class="product-item accessories">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="/assets/images/product_8.png" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Blue Yeti USB Microphone Blackout Edition</a></h6>
                                    <div class="product_price">$120.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>

                        <!-- Product 9 -->

                        <div class="product-item men">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="/assets/images/product_9.png" alt="">
                                </div>
                                <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
                                <div class="favorite favorite_left"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
                                    <div class="product_price">$410.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>

                        <!-- Product 10 -->

                        <div class="product-item men">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="/assets/images/product_10.png" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold & Grey</a></h6>
                                    <div class="product_price">$180.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="deal_ofthe_week">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="deal_ofthe_week_img">
                        <img src="/assets/images/deal_ofthe_week.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 text-right deal_ofthe_week_col">
                    <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
                        <div class="section_title">
                            <h2>@lang('public.deal')</h2>
                        </div>
                        <ul class="timer">
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="day" class="timer_num">@lang('public.date-num')</div>
                                <div class="timer_unit">@lang('public.day')</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="hour" class="timer_num">@lang('public.hour-num')</div>
                                <div class="timer_unit">@lang('public.hours')</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="minute" class="timer_num">@lang('public.mins-num')</div>
                                <div class="timer_unit">@lang('public.mins')</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="second" class="timer_num">@lang('public.secs-num')</div>
                                <div class="timer_unit">@lang('public.secs')</div>
                            </li>
                        </ul>
                        <div class="red_button deal_ofthe_week_button"><a href="#">@lang('public.shopnow')</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="best_sellers">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>@lang('public.best-seller')</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product_slider_container">
                        <div class="owl-carousel owl-theme product_slider">

                            <!-- Slide 1 -->

                            <div class="owl-item product_slider_item">
                                <div class="product-item">
                                    <div class="product discount">
                                        <div class="product_image">
                                            <img src="/assets/images/product_1.png" alt="">
                                        </div>
                                        <div class="favorite favorite_left"></div>
                                        <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
                                            <div class="product_price">$520.00<span>$590.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 2 -->

                            <div class="owl-item product_slider_item">
                                <div class="product-item women">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="/assets/images/product_2.png" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
                                            <div class="product_price">$610.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 3 -->

                            <div class="owl-item product_slider_item">
                                <div class="product-item women">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="/assets/images/product_3.png" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Blue Yeti USB Microphone Blackout Edition</a></h6>
                                            <div class="product_price">$120.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 4 -->

                            <div class="owl-item product_slider_item">
                                <div class="product-item accessories">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="/assets/images/product_4.png" alt="">
                                        </div>
                                        <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
                                        <div class="favorite favorite_left"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
                                            <div class="product_price">$410.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 5 -->

                            <div class="owl-item product_slider_item">
                                <div class="product-item women men">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="/assets/images/product_5.png" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold & Grey</a></h6>
                                            <div class="product_price">$180.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 6 -->

                            <div class="owl-item product_slider_item">
                                <div class="product-item accessories">
                                    <div class="product discount">
                                        <div class="product_image">
                                            <img src="/assets/images/product_6.png" alt="">
                                        </div>
                                        <div class="favorite favorite_left"></div>
                                        <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
                                            <div class="product_price">$520.00<span>$590.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 7 -->

                            <div class="owl-item product_slider_item">
                                <div class="product-item women">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="/assets/images/product_7.png" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
                                            <div class="product_price">$610.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 8 -->

                            <div class="owl-item product_slider_item">
                                <div class="product-item accessories">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="/assets/images/product_8.png" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Blue Yeti USB Microphone Blackout Edition</a></h6>
                                            <div class="product_price">$120.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="owl-item product_slider_item">
                                <div class="product-item men">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="/assets/images/product_9.png" alt="">
                                        </div>
                                        <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
                                        <div class="favorite favorite_left"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
                                            <div class="product_price">$410.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 10 -->

                            <div class="owl-item product_slider_item">
                                <div class="product-item men">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="/assets/images/product_10.png" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold & Grey</a></h6>
                                            <div class="product_price">$180.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </div>
                        <div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
