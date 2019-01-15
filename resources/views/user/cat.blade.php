@extends('layout.publiclayout')
@section('content')
    <div class="container product_section_container">
        <div class="row">
            <div class="col product_section clearfix">
                <!-- Breadcrumbs -->
                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Men's</a></li>
                    </ul>
                </div>
                <!-- Sidebar -->
                <div class="sidebar">
                    <div class="sidebar_section">
                        <div class="sidebar_title">
                            <h5>Product Category</h5>
                        </div>
                        <ul class="sidebar_categories">
                            <li><a href="#">Men</a></li>
                            <li class="active"><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Women</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">New Arrivals</a></li>
                            <li><a href="#">Collection</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="main_content">
                    <div class="products_iso">
                        <div class="row">
                            <div class="col">
                                <div class="product-grid">
                                    <!-- Product 1 -->
                                    <div class="product-item men">
                                        <div class="product discount product_filter">
                                            <div class="product_image">
                                                <img src="images/product_1.png" alt="">
                                            </div>
                                            <div class="favorite favorite_left"></div>
                                            <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                            <div class="product_info">
                                                <h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
                                                <div class="product_price">$520.00<span>$590.00</span></div>
                                            </div>
                                        </div>
                                        <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                                    </div>
                                    <!-- Product 2 -->
                                    <div class="product-item women">
                                        <div class="product product_filter">
                                            <div class="product_image">
                                                <img src="images/product_2.png" alt="">
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
                                                <img src="images/product_3.png" alt="">
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
                                                <img src="images/product_4.png" alt="">
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
                                                <img src="images/product_5.png" alt="">
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
                                                <img src="images/product_6.png" alt="">
                                            </div>
                                            <div class="favorite favorite_left"></div>
                                            <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                            <div class="product_info">
                                                <h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
                                                <div class="product_price">$520.00<span>$590.00</span></div>
                                            </div>
                                        </div>
                                        <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                                    </div>
                                    <!-- Product 7 -->
                                    <div class="product-item women">
                                        <div class="product product_filter">
                                            <div class="product_image">
                                                <img src="images/product_7.png" alt="">
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
                                                <img src="images/product_8.png" alt="">
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
                                                <img src="images/product_9.png" alt="">
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
                                                <img src="images/product_10.png" alt="">
                                            </div>
                                            <div class="favorite"></div>
                                            <div class="product_info">
                                                <h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold & Grey</a></h6>
                                                <div class="product_price">$180.00</div>
                                            </div>
                                        </div>
                                        <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                                    </div>
                                    <!-- Product 11 -->
                                    <div class="product-item women men">
                                        <div class="product product_filter">
                                            <div class="product_image">
                                                <img src="images/product_5.png" alt="">
                                            </div>
                                            <div class="favorite"></div>
                                            <div class="product_info">
                                                <h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold & Grey</a></h6>
                                                <div class="product_price">$180.00</div>
                                            </div>
                                        </div>
                                        <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                                    </div>
                                    <!-- Product 12 -->
                                    <div class="product-item accessories">
                                        <div class="product discount product_filter">
                                            <div class="product_image">
                                                <img src="images/product_6.png" alt="">
                                            </div>
                                            <div class="favorite favorite_left"></div>
                                            <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                            <div class="product_info">
                                                <h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
                                                <div class="product_price">$520.00<span>$590.00</span></div>
                                            </div>
                                        </div>
                                        <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
