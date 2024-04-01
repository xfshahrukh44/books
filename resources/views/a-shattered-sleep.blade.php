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
                        <h2>My Books</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="book-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="signature-side">
                        <h2 class="col-span">A Shattered Sleep</h2>
                        <figure>
                            <img src="{{asset('images/24.png')}}" class="img-fluid for-height">
                        </figure>
                        <p>A Shattered Sleep describes the journey of a naïve youth of the ‘60s from his rural roots in
                            Maine to a distinguished career as a Navy fighter pilot. Rob Johnson typifies the plight of
                            young men of his generation who faced being drafted into the military with the cloud of a tour
                            in Vietnam looming on the horizon. What was that experience like? Rob, like so many, had no clue
                            what lay before him. Though Rob had experienced a number of trying events in his young life: his
                            parent’s divorce, the sudden death of his estranged father, and the unexpected and tragic death
                            of the girl he loved, Rob was unprepared for the rigors of combat. Rob is carrying some extra
                            baggage as he faces the greatest unknown; the battlefield in Vietnam.</p>
                        <p>Rob’s experience was not kind to him, leaving indelible reminders; ones he is unable to escape.
                            The story is not about combat, but about how someone deals first with the reality and then tries
                            to deal with its aftermath. There are a number of issues. What was it like? Years later a caring
                            and compassionate woman helps him find some answers and a certain peace. Combat PTSD is a
                            serious issue. Follow one man’s journey through the experience, particularly if you know someone
                            who is struggling with this same issues</p>
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
