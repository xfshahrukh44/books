@extends('layouts.main')

@section('css')
    <style>

    </style>
@endsection


@section('content')

    <!-- ============================================================== -->
    <!-- BODY START HERE -->
    <!-- ============================================================== -->

    <section class="home-about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="author-web">
{{--                        <h1>Welcome To Dennis <span class="col-span">Hodgdon World</span></h1>--}}
{{--                        <p>Discover a destination offering captivating books spanning the realms of science and fiction.--}}
{{--                        </p>--}}
                        {!! $page->sections[0]->value !!}
                        <div class="contct-btn">
                            <a href="{{route('front.contact')}}" class="btn btn-yellow trans-btn">Contact Me</a>
                            <a href="{{route('front.books')}}" class="btn btn-yellow">My Books</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <video autoplay="" loop="" muted="">
            <source src="{{asset('images/shadow.mp4')}}" type="video/mp4">
        </video>
    </section>


    <section class="popular-book">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="book-f">
                        <h3>{{$page->sections[1]->value ?? 'Popular Books'}}</h3>
                        <a href="{{route('front.books')}}" class="btn btn-yellow trans-btn">Explore more <i
                                    class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>

                @foreach($popular_books as $popular_book)
                    <div class="col-lg-4">
                        <div class="main-popular" data-aos="flip-right" data-aos-duration="2000">
                            <a href="{{route('front.bookDetail', $popular_book->id)}}">
                                <figure>
                                    <img src="{{asset($popular_book->image)}}" class="img-fluid" alt="">
                                </figure>
                            </a>
                            <h6>{{$popular_book->title}}</h6>
                            <div class="botom-po">
                                <p>Dennis Hodgdon</p>
                                <!--<span><i class="fa-solid fa-star"></i> 4.8</span>-->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="testimonils">
        <div class="contianer-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="main-testimonial">
{{--                        <h2>People Are Saying</h2>--}}
                        <h2>{{$page->sections[2]->value ?? 'People Are Saying'}}</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-slides">
                        <div class="happy-client owl-carousel owl-theme">
                            @foreach($reviews as $review)
                                <div class="item">
                                    <div class="main-client">
                                        <img src="{{asset('images/21.png')}}" class="img-fluid" alt="">
                                        <p>{{$review->content}}</p>
                                        <div class="name-client">
                                            <h6>{{$review->author}}
{{--                                                <span class="d-block">{{$review->position}}</span>--}}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="author-btn review-btn">
                        <a href="{{route('front.reviews')}}" class="btn btn-yellow">More Reviews</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('js')

    <script type="text/javascript">
        @foreach ($popular_specialty_materials as $product)
            var swiper = new Swiper(".ms3_{{$product->id}}", {
                spaceBetween: 10,
                slidesPerView: 6,
                freeMode: true,
                watchSlidesProgress: true,
            });
            var swiper2 = new Swiper(".ms4_{{$product->id}}", {
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                thumbs: {
                    swiper: swiper,
                },
            });
        @endforeach
        @foreach ($popular_heat_transfers as $product)
            var swiper = new Swiper(".ms3_{{$product->id}}", {
                spaceBetween: 10,
                slidesPerView: 6,
                freeMode: true,
                watchSlidesProgress: true,
            });
            var swiper2 = new Swiper(".ms4_{{$product->id}}", {
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                thumbs: {
                    swiper: swiper,
                },
            });
        @endforeach
    </script>
    <script type="text/javascript">
        $('.anchor_child_sub_category').on('click', function () {
            $('#subcategory').val($(this).data('sub'));
            $('#childsubcategory').val($(this).data('child'));
            $('#form_product_search').submit();
        });
    </script>
@endsection
