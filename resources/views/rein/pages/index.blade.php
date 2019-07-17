@extends('rein.layouts.rein')

@section('content')

<!-- Hero #4
    ============================================= -->
<section id="hero" class="hero hero-5 bg-overlay bg-overlay-dark">
    <div class="bg-section">
        <img src="{{url('/assets/images/hero/hero-5.jpg')}}" alt="Background"/>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="hero-content">
                    <h1>Interact</h1>
                    <p>Whatever the level of support you require, we are sure that we will<br> have a package that meets your needs.</p>
                    <div class="form-action">
                        <form>
                            <input type="text" class="form-control" id="your-name" name="name" placeholder="Your name*">
                            <input type="text" class="form-control" id="your-address" name="email" placeholder="Your email address*">
                            <button type="submit" class="btn btn-primary">Start Free Trial</button>
                        </form>
                    </div>
                    <div class="credit">Get 30 days free trial now, No credit card required!</div>
                </div>
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
    <div class="hero-next">
        <a data-scroll="scrollTo" href="#tab1"><i class="lnr lnr-chevron-down"></i></a>
    </div>
</section><!-- #hero end -->

<!-- Tab#1
============================================= -->
<section id="tab1" class="tabs tab-1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading text-center">
                    <h2>How We Can Help You ?</h2>
                </div>
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="text-center">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                                <i class="lnr lnr-pie-chart"></i>
                                <h3>Data Pie Charts</h3>
                            </a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="lnr lnr-bookmark"></i>
                                <h3>User Analysis</h3></a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="lnr lnr-map"></i>
                                <h3>Financial Guide</h3></a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <p>Proin gravida nibh vel velit auctor aliquet aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit. Duis sed odio amet nibh vulputate cursus a sit amet mauris viele morbi accumsan ipsum velit.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile">
                            <p>Proin gravida nibh vel velit auctor aliquet aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit. Duis sed odio amet nibh vulputate cursus a sit amet mauris viele morbi accumsan ipsum velit.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="messages">
                            <p>Proin gravida nibh vel velit auctor aliquet aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit. Duis sed odio amet nibh vulputate cursus a sit amet mauris viele morbi accumsan ipsum velit.</p>
                        </div>
                    </div>

                </div>
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</section><!-- #tab1 end -->
<hr class="mt-0 mb-0">

<!-- Featured#1
============================================= -->
<section id="tab1" class="featured featured-1">
    <div class="container">
        <div class="row">
            <!-- Featured Panel #1 -->
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="featured-panel">
                    <div class="featured-icon">
                        <i class="lnr lnr-laptop-phone"></i>
                    </div>
                    <div class="featured-content">
                        <h3>Mobile First</h3>
                        <p>Duis sed odio sit amet nibh vuutate cursus a sit amet mauris morbi accumsan ipsum velit nam nec tellus viele a odio.</p>
                    </div>
                </div>
            </div><!-- .col-md-4 end -->

            <!-- Featured Panel #2 -->
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="featured-panel">
                    <div class="featured-icon">
                        <i class="lnr lnr-sync"></i>
                    </div>
                    <div class="featured-content">
                        <h3>Up To Date</h3>
                        <p>Duis sed odio sit amet nibh vuutate cursus a sit amet mauris morbi accumsan ipsum velit nam nec tellus viele a odio.</p>
                    </div>
                </div>
            </div><!-- .col-md-4 end -->

            <!-- Featured Panel #3 -->
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="featured-panel">
                    <div class="featured-icon">
                        <i class="lnr lnr-cloud-check"></i>
                    </div>
                    <div class="featured-content">
                        <h3>Cloud Data</h3>
                        <p>Duis sed odio sit amet nibh vuutate cursus a sit amet mauris morbi accumsan ipsum velit nam nec tellus viele a odio.</p>
                    </div>
                </div>
            </div><!-- .col-md-4 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</section><!-- #featured1 end -->

<!-- Pricing#2
============================================= -->
<section id="pricing2" class="pricing pricing-2 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="heading text-center">
                    <h2>Suitable Pricing</h2>
                    <p>Lorem ipsum dolor amet, consectetur adipisicing elite,sede eiusmod tempor incididunt labore.</p>
                </div>
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
        <div class="row">
            <!-- Pricing Packge #1
            ============================================= -->
            <div class=" col-xs-12 col-sm-4 col-md-4 price-table">
                <div class="panel">
                    <!--  Packge heading  -->
                    <div class="panel-heading text-center">
                        <h4>Free</h4>
                        <p>0<span>$</span></p>
                    </div>
                    <!--  Packge heading  -->
                    <div class="panel-body text-center">
                        <p>Class aptent taciti sociosqu ad litora torent per conubia nostra mauris.</p>
                        <a class="btn btn-primary" href="#">Get started</a>
                    </div>
                    <!--  Packge Body  -->
                </div>
            </div>
            <!-- Package End -->

            <!-- Pricing Packge #2
            ============================================= -->
            <div class=" col-xs-12 col-sm-4 col-md-4 price-table active">
                <div class="panel">
                    <!--  Packge heading  -->
                    <div class="panel-heading text-center">
                        <h4>Basic</h4>
                        <p>15<span>$</span></p>
                    </div>
                    <!--  Packge heading  -->
                    <div class="panel-body text-center">
                        <p>Class aptent taciti sociosqu ad litora torent per conubia nostra mauris.</p>
                        <a class="btn btn-primary" href="#">Get started</a>
                    </div>
                    <!--  Packge Body  -->
                </div>
            </div>
            <!-- Package End -->

            <!-- Pricing Packge #3
            ============================================= -->
            <div class=" col-xs-12 col-sm-4 col-md-4 price-table">
                <div class="panel">
                    <!--  Packge heading  -->
                    <div class="panel-heading text-center">
                        <h4>Pro</h4>
                        <p>30<span>$</span></p>
                    </div>
                    <!--  Packge heading  -->
                    <div class="panel-body text-center">
                        <p>Class aptent taciti sociosqu ad litora torent per conubia nostra mauris.</p>
                        <a class="btn btn-primary" href="#">Get started</a>
                    </div>
                    <!--  Packge Body  -->
                </div>
            </div>
            <!-- Package End -->

        </div><!-- .row end -->
    </div><!-- .container end -->
</section><!-- #pricing2 end -->

<!-- Subscription#2
============================================= -->
<section id="subscription2" class="sub-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="heading text-center">
                    <h2>Get Latest News & Updates</h2>
                    <p>Lorem ipsum dolor amet, consectetur adipisicing elite,sede eiusmod tempor incididunt labore.</p>
                </div>
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="sub-form center-block">
                    <form id="mailchimp" class="form-inline">
                        <input type="text" id="name" class="form-control" name="name" placeholder="Your name*" required />
                        <input type="email" id="email" class="form-control" name="email" placeholder="Your Email Address*" required/>
                        <button class="btn btn-primary" type="submit">Subscribe</button>
                    </form>
                </div>
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</section><!-- #subscription2 end -->


<!-- Footer#5
============================================= -->
<footer id="footer5" class="footer footer-5 text-center bg-gray pt-0 pb-0">
    <div class="container">
        <div class="row widget-boxes">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="widget-info-box">
                    <i class="lnr lnr-home"></i>
                    <h4>Address</h4>
                    <p>1220 Petersham town, Wardell St.<br>Australia PA 6550.</p>
                </div><!-- .widget-info-box end -->
            </div><!-- .col-md-4 end -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="widget-info-box">
                    <i class="lnr lnr-phone-handset"></i>
                    <h4>Phone</h4>
                    <p>+02 0111 99 2507</p>
                </div><!-- .widget-info-box end -->
            </div><!-- .col-md-4 end -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="widget-info-box">
                    <i class="lnr lnr-envelope"></i>
                    <h4>Email</h4>
                    <p>Contact@zytheme.com</p>
                </div><!-- .widget-info-box end -->
            </div><!-- .col-md-4 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
    <hr>
    <div class="container footer-bar">
        <div class="row">
            <div class="col-xs-12 col-ms-12 col-md-6">
                <div class="widget-copyright">
                    <p>&copy; Zytheme 2016, All Rights Reserved.</p>
                </div>
            </div><!-- .col-md-6 end -->
            <div class="col-xs-12 col-ms-12 col-md-6">
                <div class="widget-social text-right">
                    <a class="facebook" href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="twitter" href="#" >
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="dribbble" href="#">
                        <i class="fa fa-dribbble"></i>
                    </a>
                    <a class="vimeo" href="#">
                        <i class="fa fa-vimeo"></i>
                    </a>
                </div>
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</footer><!-- #footer5 end -->


@endsection
