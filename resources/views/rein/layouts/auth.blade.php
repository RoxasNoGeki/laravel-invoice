<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <!-- Document Meta
        ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Landing page html5 template">
    <link href="{{url('/assets/images/favicon/favicon.ico')}}" rel="icon">

    <!-- Fonts
        ============================================= -->
    <link href='http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CComfortaa:300,400,700'
          rel='stylesheet' type='text/css'>

    <!-- Stylesheets
        ============================================= -->
    <link href="{{url('/assets/css/external.css')}}" rel="stylesheet">
    <link href="{{url('/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('/assets/css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="{{url('/assets/js/html5shiv.js')}}"></script>
    <script src="{{url('/assets/js/respond.min.js')}}"></script>
    <![endif]-->

    <!-- Document Title
        ============================================= -->
    <title>Interact | Multi-purpose Landing Page Html5 Template - SHARED ON THEMELOCK.COM</title>
</head>
<body>
<!-- Document Wrapper
	============================================= -->
<div id="wrapper" class="wrapper clearfix">
    <nav id="primary-menu" class="navbar navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="logo" href="/">
                    <img src="{{url('/assets/images/logo/logo.png')}}" alt="Interact">
                </a>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    @yield('content')
</div><!-- #wrapper end -->
<!-- Footer Scripts
============================================= -->
<script src="{{url('/assets/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{url('/assets/js/plugins.js')}}"></script>
<script src="{{url('/assets/js/functions.js')}}"></script>
<!-- jquery.inputmask -->
<script src="{{url('/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>

</body>

<script>
    /* INPUT MASK */

    function init_InputMask() {

        if( typeof ($.fn.inputmask) === 'undefined'){ return; }
        console.log('init_InputMask');

        $(":input").inputmask();

    }
    $(document).ready(function() {
        init_InputMask();
    });

</script>



<script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
<script type="text/javascript">
    var config =
        {
            apiKey: "AIzaSyAmAbzmMLnXOE_F8lMVxcvItoq_cZJmgT0",
            authDomain: "vernon1.firebaseapp.com",
            databaseURL: "https://vernon1.firebaseio.com",
            storageBucket: "vernon1.appspot.com",
            messagingSenderId: "975772668027",
        };
    firebase.initializeApp(config);
    var database = firebase.database();
    window.onload = function () {
        firebase.auth().onAuthStateChanged(function (user) {
            if (user) {
                var phoneNumber = user.phoneNumber;
            }
        });
        document.getElementById('verification-code-form').addEventListener('submit', onVerifyCodeSubmit);
        window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('sign-in-button',
            {
                'size': 'invisible',
                'callback': function (response) {
                    onSignInSubmit();
                }
            });
        recaptchaVerifier.render().then(function (widgetId) {
            window.recaptchaWidgetId = widgetId;
        });

    };


    //membuat button disabled untuk 30s
    $fewSeconds = 30;
    $('#test-sign-in-button').click(function () {
        var btn = $(this);
        var spn = $('#time-message');
        var btn1= $('#verify-code-button');
        var frm= $('#verification-code');
        btn.prop('disabled', true);
        btn1.prop('disabled', false);
        frm.prop('disabled', false);
        setTimeout(function () {
            btn.prop('disabled', false);
        }, $fewSeconds * 1000);
        $("#time").text("29");
        $('#time').show();
        spn.prop('hidden', false);
        countdown = setInterval(counter, 1000);
        $('#sign-in-button').click();
    });


    //membuat timer countdown 30s
    var countdown;
    var spn = $('#time-message');

    function counter() {
        var time = parseInt($('#time').text());
        if (time !== 0) {
            $('#time').text(time - 1);
        } else {
            clearInterval(countdown);
            $('#time').hide();
            spn.prop('hidden', true);
        }
    }

    var ers = $('#alertError');

    function onSignInSubmit() {
        if (isPhoneNumberValid()) {
            window.signingIn = true;
            var phoneNumber = getPhoneNumberFromUserInput();
            var appVerifier = window.recaptchaVerifier;
            firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier).then(function (confirmationResult) {
                window.confirmationResult = confirmationResult;
                window.signingIn = false;
            }).catch(function (error) {
                console.error('Error during signInWithPhoneNumber', error);
                document.getElementById("errors").innerHTML = error;
                ers.prop('hidden', false);
                window.signingIn = false;
            });
        }
    }

    function onVerifyCodeSubmit(e) {
        e.preventDefault();
        if (!!getCodeFromUserInput()) {
            window.verifyingCode = true;
            var code = getCodeFromUserInput();
            confirmationResult.confirm(code).then(function (result) {
                var user = result.user;
                window.verifyingCode = false;
                window.confirmationResult = null;
                ers.prop('hidden', true);

                //menekan button submit untuk update timestamp
                var button = document.getElementById('update-timestamp');
                button.form.submit();

            }).catch(function (error) {
                document.getElementById("errors").innerHTML = error;
                ers.prop('hidden', false);
                console.error('Error while checking the verification code', error);
                window.verifyingCode = false;
            });
        }
    }

    function getCodeFromUserInput() {
        return document.getElementById('verification-code').value;
    }

    function getPhoneNumberFromUserInput() {
        return document.getElementById('phone-number').value;
    }

    function isPhoneNumberValid() {
        var pattern = /^\+[0-9\s\-\(\)]+$/;
        var phoneNumber = getPhoneNumberFromUserInput();
        return phoneNumber.search(pattern) !== -1;
    }

    function resetReCaptcha() {
        if (typeof grecaptcha !== 'undefined' && typeof window.recaptchaWidgetId !== 'undefined') {
            grecaptcha.reset(window.recaptchaWidgetId);
        }
    }
</script>

</html>
