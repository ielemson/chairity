@extends('layouts.frontend')


@section('main-content')
    {{-- include page navbar --}}
    @include('includes.page-navbar')
    {{-- include page navbar --}}

    @include('includes.page-section',['page_image'=>'assets/images/backgrounds/contact_bg.jpg','page_title'=>'Contact','page_header'=>'Contact Us'])


    <main class="xs-main">

        <section class="xs-contact-section-v2">
            <div class="container">
                <div class="xs-contact-container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="xs-contact-form-wraper">
                                <h4>Drop us a line</h4>
                                <form action="#" method="POST" id="xs-contact-form" class="xs-contact-form contact-form-v2">
                                    <div class="input-group">
                                        <input type="text" name="name" id="xs-name" class="form-control" placeholder="Enter Your Name.....">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <input type="email" name="email" id="xs-email" class="form-control" placeholder="Enter Your Email.....">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group massage-group">
                                        <textarea name="massage" placeholder="Enter Your Message....." id="xs-massage" class="form-control" cols="30" rows="10"></textarea>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fa fa-pencil"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-success" type="submit" id="xs-submit">submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="xs-maps-wraper map-wraper-v2">
                                <div id="xs-map" class="xs-box-shadow-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="xs-contact-details">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="xs-contact-details">
                                <div class="xs-widnow-wraper">
                                    <div class="xs-window-top">
                                        <img src="assets/images/contact/contact-info-img-1.png" alt="">
                                    </div>
                                    <div class="xs-window-back">
                                        <div id="xs-multiple-map-1" class="xs-map"></div>
                                    </div>
                                    <div class="xs-window-nav">
                                        <a href="#" class="xs-window-opener">
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <ul class="xs-unorder-list">
                                    <li>
                                        <i class="fa fa-phone color-green"></i>+88 00 11 22 33</li>
                                    <li>
                                        <i class="fa fa-envelope-o color-green"></i>
                                        <a href="https://demo.xpeedstudio.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d7b9b6bab297aeb8a2a5b3b8bab6beb9f9b4b8ba">[email&#160;protected]</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker color-green"></i>Welington City, Beside Pull, Australia</li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="xs-contact-details">
                                <div class="xs-widnow-wraper">
                                    <div class="xs-window-top">
                                        <img src="assets/images/contact/contact-info-img-2.png" alt="">
                                    </div>
                                    <div class="xs-window-back">
                                        <div id="xs-multiple-map-2" class="xs-map"></div>
                                    </div>
                                    <div class="xs-window-nav">
                                        <a href="#" class="xs-window-opener">
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <ul class="xs-unorder-list">
                                    <li>
                                        <i class="fa fa-phone color-green"></i>+09 56 43 768</li>
                                    <li>
                                        <i class="fa fa-envelope-o color-green"></i>
                                        <a href="https://demo.xpeedstudio.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="eb858a868eab92849e998f84868a8285c5888486">[email&#160;protected]</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker color-green"></i>10/A, Hesting City, USA</li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="xs-contact-details">
                                <div class="xs-widnow-wraper">
                                    <div class="xs-window-top">
                                        <img src="assets/images/contact/contact-info-img-3.png" alt="">
                                    </div>
                                    <div class="xs-window-back">
                                        <div id="xs-multiple-map-3" class="xs-map"></div>
                                    </div>
                                    <div class="xs-window-nav">
                                        <a href="#" class="xs-window-opener">
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <ul class="xs-unorder-list">
                                    <li>
                                        <i class="fa fa-phone color-green"></i>+00 876 54 34</li>
                                    <li>
                                        <i class="fa fa-envelope-o color-green"></i>
                                        <a href="https://demo.xpeedstudio.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d8b6b9b5bd98a1b7adaabcb7b5b9b1b6f6bbb7b5">[email&#160;protected]</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker color-green"></i>Protus Thom, Prekunak, Africa</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
@endsection
