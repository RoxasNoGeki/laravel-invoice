@extends('rein.layouts.auth')

@section('content')
    <section id="hero" class="hero hero-9 bg-overlay bg-overlay-dark">
        <div class="bg-section" >
            <img src="assets/images/hero/hero-10.jpg" alt="Background"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5">
                    <div class="hero-content">
                        <h1>Join us and listen to the best speakers in one place</h1>
                        <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
                    </div>
                </div><!-- .col-md-6 end -->
                <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-2">
                    <div class="hero-form">
                        <h2 class="mb-0">Change Password</h2>
                        @include('rein.components.error')
                        <form method="POST" action="{{route('changingpw')}}">
                            @csrf
                            <input type="hidden" name="_method" value="PATCH">
                            <input type="password"  class="form-control" name="password" placeholder="Your New Password" required />
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </section><!-- #hero end -->
@endsection
