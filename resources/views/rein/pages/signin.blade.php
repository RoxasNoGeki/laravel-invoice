@extends('rein.layouts.auth')

@section('content')
<section id="hero" class="hero hero-9 bg-overlay bg-overlay-dark">
    <div class="bg-section" >
        <img src="{{url('/assets/images/hero/hero-10.jpg')}}" alt="Background"/>
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
                    <h2 class="mb-0">Sign In</h2>
                    @include('rein.components.error')
                    <form method="POST" action="{{route('signingin')}}">
                        @csrf
                        <input type="text" placeholder="Phone Number" class="form-control" name="username" id="phone" >
                        <input type="password" placeholder="Password" class="form-control" name="password" >
                        <button class="btn btn-primary" type="submit">Register Now</button>
                        <div>Sign up already? <a href="{{route('signup')}}"> SignUp</a></div>
                        <div>Forget Password? <a href="{{route('resetpw')}}"> Reset Password</a></div>
                    </form>
                </div>
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</section><!-- #hero end -->
@endsection
