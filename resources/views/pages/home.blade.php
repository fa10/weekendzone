@extends('layouts.home_layout')

@section('homesection')
            <!-- Home Section -->
<section class="home-section bg-dark-alfa-50" data-background="images/full-width-images/night.jpg" id="home">
                <div class="js-height-full">

                    <!-- Home Page Content -->
                    <div class="home-content container">
                        <div class="home-text">

                            <div class="container animate-init" data-anim-type="fade-in-down-big" data-anim-delay="100">

                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                                        <!-- Headings -->
                                        <div class="hs-line-6 mb-20 mb-xs-10">
                                            <strong>Se hvad der sker i din zone!</strong>
                                        </div>
                                        <hr class="white" />
                                          <form class="form-inline form" role="form">
                                                <div class="search-wrap">
                                                    <input type="text" class="form-control search-field form-home" placeholder="Søg i din zone? Eller på begivenhed!">
                                                </div>
                                          </form>
                                        <!-- End Headings -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Home Page Content -->

                    <!-- Scroll Down -->
                    <div class="local-scroll">
                        <a href="#news" class="scroll-down static"><i class="fa fa-5x fa-angle-down white"></i></a>
                    </div>
                    <!-- End Scroll Down -->

                </div>
            </section>
            <!-- End Home Section -->
@stop

@section('newevents')
    <section class="page-section" id="news">
                <div class="relative">

                    <!-- Section Headings -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                                <div class="section-title">
                                    Nyeste events<span class="st-point">.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Section Headings -->


                </div>
            </section>
            <!--End  Blog Section -->
@stop