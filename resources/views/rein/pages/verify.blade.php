@extends('rein.layouts.auth')

@section('content')
    <section id="hero" class="hero hero-9 bg-overlay bg-overlay-dark">
        <div class="bg-section">
            <img src="{{url('/assets/images/hero/hero-10.jpg')}}" alt="Background"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5">
                    <div class="hero-content">
                        <h1>Join us and listen to the best speakers in one place</h1>
                        <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum
                            velit.</p>
                    </div>
                </div><!-- .col-md-6 end -->
                <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-2">
                    <div class="hero-form">
                        <h2 class="mb-0">Verification</h2>



                        {{--                        ERROR SECTION--}}
                        <div class="alert alert-danger" hidden="hidden" id="alertError">
                            <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                <i class="nc-icon nc-simple-remove"></i>
                            </button>
                            <span id="errors"></span>
                        </div>
                        {{--                        END ERROR--}}

                        {{--                        NOTIF TIME + username input--}}
                        <div id="time-message" hidden="hidden">The Verification code has been sent to your phone.
                            if you don't receieved it in <span id="time"></span> second please try again
                        </div>
                        <form id="sign-in-form" action="#" hidden="hidden">
                            <!-- Input to enter the phone number -->
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" pattern="\+[0-9\s\-\(\)]+"
                                       id="phone-number" value="{{$username}}">
                            </div>
                        </form>
                        {{--                        END NOTIF TIME + username input--}}


                        <form id="verification-code-form" action="#">

                            <input type="text" disabled="disabled" placeholder="CODE" id="verification-code" class="form-control" name="verification-code"
                                   id="verification-code" required>


                            {{--                             Sign-in button --}}
                            <button hidden="hidden" id="sign-in-button">
                                Send SMS
                            </button>
                            <button class="btn btn-primary" id="test-sign-in-button">
                                Send SMS
                            </button>



                            <button class="btn btn-primary" disabled="disabled" type="submit" id="verify-code-button">Verify</button>
                            <div>Verified already? <a href="{{route('signin')}}"> SignIn</a></div>
                        </form>

                        {{--                            hidden form untuk timestamp--}}
                        <div hidden="hidden">
                            <form method="POST" action="{{route('verifying')}}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" placeholder="Phone Number" class="form-control" name="username"
                                           value="{{$username}}">
                                    <input type="text" name="reset" value="{{session('reset')}}">
                                </div>
                                <button type="submit" class="btn btn-fill btn-info btn-wd" id="update-timestamp">Sign
                                    In
                                </button>
                            </form>
                        </div>

                    </div>
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </section><!-- #hero end -->
@endsection
