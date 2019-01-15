@extends('layout.publiclayout')
@section('content')
    <div class="container single_product_container">
        <div class="row">
            <div class="col">
                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="/">@lang('public.home')</a></li>
                        <li><a href="categories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>{!! $books->cat_name !!}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @include('errors.alert')
        <div class="row">
            <div class="col-lg-7">
                <div class="single_product_pics">
                    <div class="row">
                        <div class="col-lg-3 thumbnails_col order-lg-1 order-2">
                            <div class="single_product_thumbnails">
                                <ul>
                                    <li><img src="/assets/images/{!! $books->picture !!}" alt="" data-image="/assets/images/{!! $books->picture !!}"></li>
                                    <li><img src="/assets/images/{{$books->picture}}" alt="" data-image="/assets/images/{!! $books->picture !!}"></li>
                                    <li><img src="/assets/images/{!! $books->picture !!}" alt="" data-image="/assets/images/{!! $books->picture !!}"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 image_col order-lg-2 order-1">
                            <div class="single_product_image">
                                <div class="single_product_image_background" style="background-image:url(/assets/images/{!! $books->picture !!})"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="product_details">
                    <div class="product_details_title">
                        <h2>{!! $books->title !!}</h2>
                        <div class="product_favorite d-flex flex-column align-items-center justify-content-center"></div>
                        <p>{!! $books->preview !!}</p>
                        <a href=""><span>{!! $books->name !!}</span></a>
                    </div>
                    <div class="free_delivery d-flex flex-row align-items-center justify-content-center">
                        <span class="ti-truck"></span><span>@lang('public.lb-delivery')</span>
                    </div>

                    <div class="product_price">$495.00</div>
                    <div class="user_rating">
                        <ul class="star_rating">
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                        </ul>
                    </div>
                    {!! Form::open(['method' => 'POST', 'route' => ['detail.add', $books->id] ]) !!}
                        {!! Form::submit(trans('public.btn-borrow'), ['class' => 'btn btn-success btn-md']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 reviews_col">
            <div class="tab_title reviews_title">
                <h4>@lang('public.lb-comment')</h4>
            </div>
            <div class="user_review_container d-flex flex-column flex-sm-row">
                <div class="user">
                    <div class="user_pic"></div>
                    <div class="user_rating">
                        <ul class="star_rating">
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="review">
                    <div class="review_date">27 Aug 2016</div>
                    <div class="user_name">Brandon William</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 add_review_col">

            <div class="add_review">
                <form id="review_form" action="post">
                    <div>
                        <h1>@lang('public.your-rating')</h1>
                        <ul class="user_star_rating">
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                        </ul>
                        <textarea id="review_message" class="input_review" name="message"  placeholder="{{ trans('public.your-rev') }}" rows="4" required data-error="Please, leave us a review."></textarea>
                    </div>
                    <div class="text-left text-sm-right">
                        <button id="review_submit" type="submit" class="red_button review_submit_btn trans_300" value="Submit">@lang('public.btn-review')</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
