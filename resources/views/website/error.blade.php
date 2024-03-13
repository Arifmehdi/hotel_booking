@extends('website.partial.master')
@section('content')
        <!--================Error Area =================-->
        <section class="error_area">
            <div class="container">
                <div class="error_inner_text_area">
                    <div class="error_inner_text">
                        <h3>404</h3>
                        <h4>Oops! That page can’t be found</h4>
                        <h5>Sorry, but the page you are looking for does not existing</h5>
                        <a class="book_now_btn" href="{{route('home')}}">Go to home page</a>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Error Area =================-->
@endsection
