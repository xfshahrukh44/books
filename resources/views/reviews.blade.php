@extends('layouts.main')

@section('css')
    <style>

    </style>
@endsection


@section('content')

    <!-- ============================================================== -->
    <!-- BODY START HERE -->
    <!-- ============================================================== -->



    <section class="banner-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-banner">
                        <h2>Reviews</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonils">
        <div class="contianer-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="main-testimonial">
                        <h2>People Are Saying</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-slides">
                        <div class="happy-client owl-carousel owl-theme owl-loaded owl-drag">


                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transition: all 0.25s ease 0s; width: 6755px; transform: translate3d(-2412px, 0px, 0px);">
                                    @foreach($reviews as $review)
                                        <div class="owl-item" style="width: 945px; margin-right: 20px;">
                                            <div class="item">
                                                <div class="main-client">
                                                    <img src="{{asset('images/21.png')}}" class="img-fluid" alt="">
                                                    <p>
                                                        {{$review->content}}
                                                    </p>
                                                    <div class="name-client">
                                                        <h6>
                                                            {{$review->author}}
                                                            <span class="d-block">{{$review->position}}</span>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev"><span
                                            aria-label="Previous">‹</span></button>
                                <button type="button" role="presentation" class="owl-next"><span
                                            aria-label="Next">›</span></button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('js')
    <script type="text/javascript"></script>
@endsection