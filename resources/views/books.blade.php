@extends('layouts.main')

@section('css')
    <style>
        .page-item.active .page-link {
            z-index: 3;
            color: white;
            background-color: #e3b14f;
            border-color: #e3b14f;
        }

        .page-link {
            color: black;
        }
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

    @if(count($books))
        @foreach($books as $book)
            <section class="book-sec">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="signature-side">
                                <h2 class="col-span">{{$book->title}}</h2>
                                {!! $book->description !!}
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="signature-img for-inner-book">
                                <figure>
                                    <img src="{{asset($book->image)}}" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
        <div class="m-auto col-2">
            {{ $books->links() }}
        </div>
    @else
        <div class="m-auto col-12 text-center text-white mb-4">
            <h4>No books found.</h4>
        </div>
    @endif



@endsection

@section('js')
    <script type="text/javascript"></script>
@endsection