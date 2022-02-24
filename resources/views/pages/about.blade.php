@extends('layouts.frontend')


@section('main-content')
    {{-- include page navbar --}}
    @include('includes.page-navbar')
    {{-- include page navbar --}}

    @include('includes.page-section',['page_image'=>'assets/images/backgrounds/about_bg.jpg','page_title'=>'About','page_header'=>'About Us'])


    <main class="xs-main">

        <div class="xs-video-popup-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 content-center">
                        <div class="xs-video-popup-wraper">
                            <img src="assets/images/video_img.jpg" alt="">
                            <div class="xs-video-popup-content">
                                <a href="https://www.youtube.com/watch?v=Tb1HsAGy-ls" class="xs-video-popup xs-round-btn">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="bg-gray waypoint-tigger xs-section-padding xs-popularCauses-v2 mt-5">
            <div class="container">
                <div class="xs-heading row xs-mb-60">
                    <div class="col-md-9 col-xl-9">
                        <h2 class="xs-title">About Us</h2>
                        <span class="xs-separetor dashed"></span>
                        <p>
                            Our foundation is a nonprofit organization, born out of the interest to help anyone and
                            everyone regardless of their background differences, and we do that through working
                            with like minded people and holding everyone of us accountable for their roles.
                            We’ve come to a total realization that global unity is all that the world needs, in order to
                            advance and be a better place for everyone. And that's why we've decided to start
                            working on the idea rather than keeping it to ourselves or in our minds.
                        </p>
                    </div>
                </div>

            </div>
        </section>



        <section class="xs-section-padding">
            <div class="container">
                <div class="xs-heading row xs-mb-60">
                    <div class="col-md-9 col-xl-9">
                        <h2 class="xs-title">Our Movement</h2>
                        <span class="xs-separetor dashed"></span>
                        <p>
                            Our movement is paid and unpaid, and it’s all dependent on transparency, efficiency
                            and commitment, to the betterment of the entire mankind. And every capable person is
                            included, i.e capable to be held responsible for their roles.
                            In order to ensure that, we organize teams in every of our branch around the world, to
                            open up opportunities for people that wants to contribute with their:
                        </p>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="xs-service-promo">
                            <h5>Time</h5>
                            <p>To work in our offices, and handle the day to day activities of the branches.</p>
                        </div>
                    </div>
                   

                    <div class="col-md-6 col-lg-3">
                        <div class="xs-service-promo">
                            <h5>Properties</h5>
                            <p>To use for offices and to accommodate the homeless.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="xs-service-promo">
                            <h5>Finance</h5>
                            <p>pay salaries and finance the projects approved by the board of trustees 
                                in general meetings</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="xs-service-promo">
                            <h5>Food</h5>
                            <p> Feed the obvious hungry people in the communities, and extend as far as 
                                we can get. </p>
                        </div>
                    </div>
                   

                    <div class="col-md-6 col-lg-3">
                        <div class="xs-service-promo">
                            <h5>Music</h5>
                            <p>Sing about global peace and unity. </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="xs-service-promo">
                            <h5>Arts</h5>
                            <p>Legally craft about global peace and unity.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="xs-service-promo">
                            <h5>Good Deals</h5>
                            <p>Deals that will offer us special prices to minimize the spending on 
                                the foundation funds. </p>
                        </div>
                    </div>
                    

                    <div class="col-md-6 col-lg-3">
                        <div class="xs-service-promo">
                            <h5>Legal Support</h5>
                            <p>To help with legal navigations, written contracts and advice.</p>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-3">
                        <div class="xs-service-promo">
                            <h5>Intelligence</h5>
                            <p>to help in finding out their local communities challenges, and 
                                strategically come up with lasting solutions as a team, for the project managers 
                                to work on.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="xs-service-promo">
                            <h5>Special Prayers</h5>
                            <p>Prayers from all religious leaders and individuals from all around 
                                the world, to peacefully unite the world, and make it a better place for everyone. </p>
                        </div>
                    </div>

                    
                    <div class="col-md-6 col-lg-3">
                        <div class="xs-service-promo">
                            <h5>Clothes</h5>
                            <p> Distribute them to the most needy people in the communities, and as far 
                                as we can get. </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="xs-service-promo">
                            <h5>Professionalism</h5>
                            <p>Professionals to ensure the efficient functionality of all our teams 
                                they are specialized on. </p>
                        </div>
                    </div>
                    
                </div>

            </div>
        </section>
    </main>
@endsection
