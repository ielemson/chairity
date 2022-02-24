@extends('layouts.frontend')

@section('main-content')

{{-- include main page navbar --}}
@section('navbar')
@include('includes.main-navbar')
@endsection
{{-- include main page navbar --}}

@include('includes.slider')

@include('includes.about')

<section class="bg-gray waypoint-tigger xs-section-padding xs-popularCauses-v2">
    <div class="container">
        {{-- <div class="xs-heading row xs-mb-60">
            <div class="col-md-9 col-xl-9">
                <h2 class="xs-title">Popular Causes</h2>
                <span class="xs-separetor dashed"></span>
                <p>FundPress has built a platform focused on aiding entrepreneurs, startups, and <br> companies
                    raise capital from anyone.</p>
            </div>
            <div class="col-xl-3 col-md-3 xs-btn-wraper">
                <a href="#" class="btn btn-primary bg-orange">all Causes</a>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="xs-text-content xs-pr-20">
                    <h2 class="color-navy-blue">Welcome to Abusufyan International Foundation.</h2>
                    <p>The Abusufyan International Foundation community was named a “Top 25 Best Global Philanthropist” by Barron’s. We
                        beat Oprah. And, Mashable named Abusufyan International Foundation something like “the best place to raise money
                        online for your favorite causes.”</p>
                    <blockquote>
                        If you don't understand how fast and easy it is to so long for your favorite charity on
                        FundPress, please try it. <span>How it works</span> page, <span>Contact us</span>.
                    </blockquote>
                    <a href="#" class="btn btn-primary bg-light-red">
                        <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="xs-feature-image">
                    <img src="assets/images/features_1.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="xs-feature-image">
                    <img src="assets/images/features_2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="xs-text-content xs-pr-20">
                    <h2 class="color-navy-blue">Welcome to Abusufyan International Foundation.</h2>
                    <p>The Abusufyan International Foundation community was named a “Top 25 Best Global Philanthropist” by Barron’s. We
                        beat Oprah. And, Mashable named Abusufyan International Foundation something like “the best place to raise money
                        online for your favorite causes.”</p>
                    <blockquote>
                        If you don't understand how fast and easy it is to so long for your favorite charity on
                        FundPress, please try it. <span>How it works</span> page, <span>Contact us</span>.
                    </blockquote>
                    <a href="#" class="btn btn-primary bg-light-red">
                        <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="xs-feature-image">
                    <img src="assets/images/features_1.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="xs-feature-image">
                    <img src="assets/images/features_2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section> --}}

<div class="xs-section-paddding xs-ipad-overlay xs-funFact-v3 waypoint-tigger"
    style="background-image: url('assets/images/backgrounds/funfact-bg-image.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
                <div class="xs-funfact-content-wraper">
                    <div class="xs-heading">
                        <h2 class="xs-title">There's no limit to what you could raise!</h2>
                        <p>Just by shopping online for new clothes via Give as you Live, means you could easily
                            raise £10 a year for your charity. There are hundreds of leading retailers including
                            M&S, Asos, Debenhams, House of Fraser, Next and New Look.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="media xs-single-funFact-v3 xs-mb-50">
                                <span class="d-flex icon-children"></span>
                                <div class="media-body">
                                    <span class="number-percentage-count number-percentage" data-value="1900"
                                        data-animation-duration="3500">0</span>
                                    <small>Children rescued</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media xs-single-funFact-v3  xs-mb-50">
                                <span class="d-flex icon-coin"></span>
                                <div class="media-body">
                                    <span class="funfact-sign">$</span>
                                    <span class="number-percentage-count number-percentage" data-value="56000"
                                        data-animation-duration="3500">0</span>
                                    <small>Total donation</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media xs-single-funFact-v3">
                                <span class="d-flex icon-like"></span>
                                <div class="media-body">
                                    <span class="number-percentage-count number-percentage" data-value="2000"
                                        data-animation-duration="3500">0</span>
                                    <small>Project completed</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media xs-single-funFact-v3">
                                <span class="d-flex icon-team_2"></span>
                                <div class="media-body">
                                    <span class="number-percentage-count number-percentage" data-value="120"
                                        data-animation-duration="3500">0</span>
                                    <small>Active volunteer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="xs-content-section-padding">
    <div class="container">
        <div class="xs-heading row col-lg-10 xs-mb-70 text-center mx-auto">
            <h2 class="xs-mb-0 xs-title">We’ve funded <span class="color-green">120,00 charity projects</span>
                for 20M people around the world.</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="xs-service-promo">
                    <span class="icon-water color-orange"></span>
                    <h5>Pure Water <br>For Poor People</h5>
                    <p>663 million people drink dirty water. Learn how access to clean water can improve health,
                        boost local economies.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="xs-service-promo">
                    <span class="icon-groceries color-red"></span>
                    <h5>Healty Food <br>For Poor People</h5>
                    <p>663 million people drink dirty water. Learn how access to clean water can improve health,
                        boost local economies.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="xs-service-promo">
                    <span class="icon-heartbeat color-purple"></span>
                    <h5>Medical <br>Facilities for People</h5>
                    <p>663 million people drink dirty water. Learn how access to clean water can improve health,
                        boost local economies.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="xs-service-promo">
                    <span class="icon-open-book color-green"></span>
                    <h5>Pure Education <br>For Every Children</h5>
                    <p>663 million people drink dirty water. Learn how access to clean water can improve health,
                        boost local economies.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="parallax-window xs-become-a-volunteer xs-section-padding"
    style="background-image: url('assets/images/backgrounds/volunteer-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-7">
                <div class="xs-volunteer-form-wraper volunteer-version-3">
                    <i class="icon-support icon-watermark"></i>
                    <h2>Become a Volunteer</h2>
                    <p>It only takes a minute to set up a campaign. Decide what to do. Pick a name. Pick a photo.
                        And just like that, you’ll be ready to start raising money.</p>
                    <form action="#" method="POST" id="volunteer-form" class="xs-volunteer-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" id="volunteer_name" class="form-control"
                                    placeholder="Your Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" id="volunteer_email" class="form-control"
                                    placeholder="Your Email">
                            </div>
                            <div class="col-lg-6">
                                <select name="branch" class="form-control" id="volunteer_brach">
                                    <option value="">Select</option>
                                    <option value="">Branch</option>
                                    <option value="">New york</option>
                                    <option value="">washington</option>
                                </select>
                            </div>
                            <div class="col-lg-6 xs-mb-20">
                                <div class="xs-fileContainer">
                                    <input type="file" id="volunteer_cv" class="form-control" name="file">
                                    <label for="volunteer_cv">Upload Your CV</label>
                                </div>
                            </div>
                        </div>
                        <textarea name="massage" id="massage" placeholder="Enter your massage" cols="30"
                            class="form-control" rows="10"></textarea>
                        <button type="submit" class="btn btn-primary bg-green">apply now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="xs-section-padding">
    <div class="container">
        <div class="xs-heading row xs-mb-60">
            <div class="col-md-9 col-xl-9">
                <h2 class="xs-title">Our Events</h2>
                <span class="xs-separetor dashed"></span>
                <p>FundPress has built a platform focused on aiding entrepreneurs, startups, and <br> companies
                    raise capital from anyone.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 row xs-single-event event-green">
                <div class="col-md-5">
                    <div class="xs-event-image">
                        <img src="assets/images/event/event_1.jpg" alt="">
                        <div class="xs-entry-date">
                            <span class="entry-date-day">27</span>
                            <span class="entry-date-month">dec</span>
                        </div>
                        <div class="xs-black-overlay"></div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="xs-event-content">
                        <a href="#">Raspberry velbet</a>
                        <p>In a time of overwhelming emotions, sadness, and pain, obligations.</p>
                        <div class="xs-countdown-timer" data-countdown="2020/01/24"></div>
                        <a href="#" class="btn btn-primary">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 row xs-single-event event-purple">
                <div class="col-md-5">
                    <div class="xs-event-image">
                        <img src="assets/images/event/event_2.jpg" alt="">
                        <div class="xs-entry-date">
                            <span class="entry-date-day">15</span>
                            <span class="entry-date-month">aug</span>
                        </div>
                        <div class="xs-black-overlay"></div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="xs-event-content">
                        <a href="#">Arsenal, the intelligent.</a>
                        <p>In a time of overwhelming emotions, sadness, and pain, obligations.</p>
                        <div class="xs-countdown-timer" data-countdown="2020/08/24"></div>
                        <a href="#" class="btn btn-primary">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 row xs-single-event event-red">
                <div class="col-md-5">
                    <div class="xs-event-image">
                        <img src="assets/images/event/event_3.jpg" alt="">
                        <div class="xs-entry-date">
                            <span class="entry-date-day">24</span>
                            <span class="entry-date-month">jan</span>
                        </div>
                        <div class="xs-black-overlay"></div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="xs-event-content">
                        <a href="#">Waterproof drone that</a>
                        <p>In a time of overwhelming emotions, sadness, and pain, obligations.</p>
                        <div class="xs-countdown-timer" data-countdown="2019/05/24"></div>
                        <a href="#" class="btn btn-primary">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 row xs-single-event event-blue">
                <div class="col-md-5">
                    <div class="xs-event-image">
                        <img src="assets/images/event/event_4.jpg" alt="">
                        <div class="xs-entry-date">
                            <span class="entry-date-day">23</span>
                            <span class="entry-date-month">jun</span>
                        </div>
                        <div class="xs-black-overlay"></div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="xs-event-content">
                        <a href="#">Braille Literacy Tool for.</a>
                        <p>In a time of overwhelming emotions, sadness, and pain, obligations.</p>
                        <div class="xs-countdown-timer" data-countdown="2020/02/24"></div>
                        <a href="#" class="btn btn-primary">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray xs-partner-section" style="background-image: url('assets/images/map.png');">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="xs-partner-content">
                    <div class="xs-heading xs-mb-40">
                        <h2 class="xs-mb-0 xs-title">Trusted by the biggest <span
                                class="color-green">brand.</span></h2>
                    </div>
                    <p>In-kind donations from our donors and partners allow charity: water to pass 100% of public
                        donations straight to water projects. We are deeply grateful for those who have surprised us
                        with their generosity. A big thanks to the following companies and people who have helped
                        make charity: water’s work possible.</p>
                    <a href="#" class="btn btn-primary bg-orange">
                        join us now
                    </a>
                </div>
            </div>
            <div class="col-lg-7">
                <ul class="fundpress-partners">
                    <li><a href="#"><img src="assets/images/partner/client_1.png" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/partner/client_2.png" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/partner/client_3.png" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/partner/client_4.png" alt=""></a></li>
                    <li><a href="#"><img src="assets/images/partner/client_5.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="xs-section-padding">
    <div class="container">
        <div class="xs-heading row xs-mb-60">
            <div class="col-md-9 col-xl-9">
                <h2 class="xs-title">From the Journal</h2>
                <span class="xs-separetor dashed"></span>
                <p>It allows you to gather monthly subscriptions from fans to help fund your creative projects. They
                    also encourage their users to offer rewards to fans as a way to repay them for their support.
                </p>
            </div>
            <div class="col-xl-3 col-md-3 xs-btn-wraper">
                <a href="#" class="btn btn-primary bg-light-green">all Causes</a>
            </div>
        </div>
        <div class="row xs-mb-50">
            <div class="col-lg-4 col-md-6">
                <div class="xs-box-shadow xs-single-journal xs-mb-30">
                    <div class="entry-thumbnail ">
                        <img src="assets/images/blog/blog_1.jpg" alt="">
                        <div class="post-author">
                            <span class="xs-round-avatar">
                                <img class="img-responsive" src="assets/images/avatar/avatar_1.jpg" alt="">
                            </span>
                            <span class="author-name">
                                <a href="#">By Simona</a>
                            </span>
                        </div>
                    </div>
                    <div class="entry-header">
                        <div class="entry-meta">
                            <span class="date">
                                <a href="#" rel="bookmark" class="entry-date">
                                    27th August 2017
                                </a>
                            </span>
                        </div>
                        <h4 class="entry-title">
                            <a href="#">Brilliant After All, A New Album by Rebecca: Help poor people</a>
                        </h4>
                    </div>
                    <span class="xs-separetor"></span>
                    <div class="post-meta meta-style-color">
                        <span class="comments-link">
                            <i class="fa fa-comments-o"></i>
                            <a href="#">300 Comments</a>
                        </span>
                        <span class="view-link">
                            <i class="fa fa-eye"></i>
                            <a href="#">1000 Views</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xs-box-shadow xs-single-journal  xs-mb-30">
                    <div class="entry-thumbnail ">
                        <img src="assets/images/blog/blog_2.jpg" alt="">
                        <div class="post-author">
                            <span class="xs-round-avatar">
                                <img class="img-responsive" src="assets/images/avatar/avatar_2.jpg" alt="">
                            </span>
                            <span class="author-name">
                                <a href="#">By Julian</a>
                            </span>
                        </div>
                    </div>
                    <div class="entry-header">
                        <div class="entry-meta">
                            <span class="date">
                                <a href="#" rel="bookmark" class="entry-date">
                                    02 May 2017
                                </a>
                            </span>
                        </div>
                        <h4 class="entry-title">
                            <a href="#">South african pre primary school build for children</a>
                        </h4>
                    </div>
                    <span class="xs-separetor"></span>
                    <div class="post-meta meta-style-color">
                        <span class="comments-link">
                            <i class="fa fa-comments-o"></i>
                            <a href="#">300 Comments</a>
                        </span>
                        <span class="view-link">
                            <i class="fa fa-eye"></i>
                            <a href="#">1000 Views</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xs-box-shadow xs-single-journal  xs-mb-30">
                    <div class="entry-thumbnail ">
                        <img src="assets/images/blog/blog_3.jpg" alt="">
                        <div class="post-author">
                            <span class="xs-round-avatar">
                                <img class="img-responsive" src="assets/images/avatar/avatar_3.jpg" alt="">
                            </span>
                            <span class="author-name">
                                <a href="#">By Evan</a>
                            </span>
                        </div>
                    </div>
                    <div class="entry-header">
                        <div class="entry-meta">
                            <span class="date">
                                <a href="#" rel="bookmark" class="entry-date">
                                    13 January 2017
                                </a>
                            </span>
                        </div>
                        <h4 class="entry-title">
                            <a href="#">Provide pure water for syrian poor people</a>
                        </h4>
                    </div>
                    <span class="xs-separetor"></span>
                    <div class="post-meta meta-style-color">
                        <span class="comments-link">
                            <i class="fa fa-comments-o"></i>
                            <a href="#">300 Comments</a>
                        </span>
                        <span class="view-link">
                            <i class="fa fa-eye"></i>
                            <a href="#">1000 Views</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection