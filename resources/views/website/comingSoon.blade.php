@extends('website.partial.master')
@section('content')
 <!--================Comming Soon Area =================-->
        <section class="comming_soon_area">
            <div class="container">
                <div class="comming_soon_inner">
                    <div class="comming_soon_text">
                        <h3>Comming Soon</h3>
                        <div class='countdown' data-date="2018-02-01"></div>
                        <p>Our website is under construction. We'll be here soon with our new <br />awesome site, Subscribe to be notified.</p>
                        <div class="fun_subscrib_inner">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default submit_btn" type="button">Subscribtion</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Comming Soon Area =================-->
        @endsection
