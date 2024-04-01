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
                        <h2>ABOUT</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="book-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="signature-side">
{{--                        <h2 class="col-span">More About The Author</h2>--}}
                        {!! $page->sections[0]->value !!}

{{--                        <p>Dennis Hodgdon grew up in rural Maine, served seven years in a U.S. Navy intelligence group, and--}}
{{--                            worked professionally as a Defense Department systems engineer for thirty-five years. Most--}}
{{--                            notably was his participation in the development, testing, and fielding of military GPS. He’s a--}}
{{--                            musician who’s partial to the ballads from the ‘60s and ‘70s. His muses include Dan Fogelberg,--}}
{{--                            Gordon Lightfoot, and Kris Kristopherson. He enjoys restoring Chevy muscle cars and old trucks,--}}
{{--                            he was a dedicated athlete, and was an above-average distance runner into his late fifties. He--}}
{{--                            holds undergraduate degrees in English Literature and Computer Science, and a Masters in Systems--}}
{{--                            Engineering from USC. An avowed Christian, he spent nine years as an Associate Pastor of a--}}
{{--                            growing congregation in the East County of San Diego, California before retiring to his country--}}
{{--                            roots and moving to a quiet rural town in Middle Tennessee where he lives with his wife of--}}
{{--                            fifty-two years. He’s an avid reader and enjoys collecting old coins and rifles. His literary--}}
{{--                            muses include Thomas Wolfe, Joseph Conrad, Charles Dickens, Patrick O’Brian, and John Grisham.--}}
{{--                            He is unabashedly patriotic, loves baseball and hockey, is fascinated by life at sea, and--}}
{{--                            cherishes the company of family and friends. To date he has authored four novels: A Shattered--}}
{{--                            Sleep, Not On My Watch, Yesterday’s Shadows, and Cast The First Stone.</p>--}}
                        {!! $page->sections[1]->value !!}
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="signature-img">
                        <figure>
                            <img src="{{asset($page->sections[2]->value ?? 'images/about-man.jpg')}}" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

@section('js')
    <script type="text/javascript"></script>
@endsection