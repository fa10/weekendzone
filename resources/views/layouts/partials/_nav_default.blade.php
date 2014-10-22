            <nav class="main-nav dark stick-fixed">
                <div class="container relative clearfix">

                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="/" class="logo">{!! Html::image('images/logo.png', '', array('width'=>'80','height'=>'27px')) !!}</a>
                    </div>

					<div class="mobile-nav"><i class="fa fa-bars"></i></div>

					<!-- Main Menu -->
            		@include('layouts.partials._nav')

                </div>
            </nav>