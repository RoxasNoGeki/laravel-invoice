@inject('dollar', '\App\Helpers\Dollar')
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
                    <h2 class="mb-0">Register</h2>
                    <p class="mb-0">Sign up and get your own invoice template</p>
                    @include('rein.components.error')
                    <form method="POST" action="{{route('signingup')}}">
                        @csrf
                        <input type="text" placeholder="Your Name" class="form-control" name="name" >
                        <input type="text" placeholder="Phone Number" class="form-control" name="username" id="phone" data-inputmask="'mask': '+99-999-9999-9999'" >
                        <input type="password" placeholder="Password" class="form-control" name="password" >
                        <select class="form-control" name="plan_id">
                            @foreach($plans as $k => $v)
                                <option value="{{$v['id']}}">{{$v['name']}} ( {{$dollar::display($v['price']['price'])}} )</option>
                            @endforeach
                        </select>
                          <button class="btn btn-primary" type="submit">Register Now</button>
                        <div>Sign up already? <a href="{{route('signin')}}"> SignIn</a></div>

                    </form>
                </div>
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</section><!-- #hero end -->
@endsection
