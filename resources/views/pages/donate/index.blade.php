@extends('layouts.frontend')


@section('main-content')
    {{-- include page navbar --}}
    @include('includes.page-navbar')
    {{-- include page navbar --}}

    @include('includes.page-section',['page_image'=>'assets/images/backgrounds/donate.jpg','page_title'=>'Donate','page_header'=>'Donate
    Now'])

<main class="xs-main">

    <section class="xs-what-we-do-box">
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="xs-service-promo box-color bg-light-red">
                <span class="icon-water"></span>
                <h5>Pure Water
                    <br>For Poor People</h5>
                <p>663 million people drink dirty water. Learn how access to clean water.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="xs-service-promo box-color bg-green">
                <span class="icon-groceries"></span>
                <h5>Healty Food
                    <br>For Poor People</h5>
                <p>663 million people drink dirty water. Learn how access to clean water.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="xs-service-promo box-color bg-blue">
                <span class="icon-heartbeat"></span>
                <h5>Medical
                    <br>Facilities for People</h5>
                <p>663 million people drink dirty water. Learn how access to clean water.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="xs-service-promo box-color bg-purple">
                <span class="icon-open-book"></span>
                <h5>Pure Education
                    <br>For Every Children</h5>
                <p>663 million people drink dirty water. Learn how access to clean water.</p>
            </div>
        </div>
    </div>
    </div>
    </section>
    
    <section class="xs-section-padding bg-gray">
    <div class="container">
    <div class="row">
    <div class="col-lg-6">
        <div class="xs-donation-form-images">
            <img src="assets/images/backgrounds/donate-with-love.jpg" class="img-responsive" alt="Family Images">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="xs-donation-form-wraper">
            <div class="xs-heading xs-mb-30">
                <h2 class="xs-title">Make a donation</h2>
                <p class="small">To learn more about make donate charity with us visit our "<span class="color-green">Contact us</span>" site. By calling
                    <span class="color-green">+44(0) 800 883 8450</span>.</p>
                <span class="xs-separetor v2"></span>
            </div>
            <form action="#" method="POST" id="xs-donation-form" class="xs-donation-form">
                <div class="xs-input-group">
                    <label for="xs-donate-name">Donation Amount
                        <span class="color-light-red">**</span>
                    </label>
                    <input type="text" name="name" id="xs-donate-name" class="form-control" placeholder="Minimum of $5">
                </div>
                <div class="xs-input-group">
                    <label for="xs-donate-charity">Payment Type
                        <span class="color-light-red">**</span>
                    </label>
                    <select name="charity-name" id="xs-donate-charity" class="form-control">
                        <option value="">Select Payment Type</option>
                        <option value="amarokSocity">Paystack &#8358;</option>
                        <option value="amarokSocity">Paystack &dollar;</option>
                        <option value="amarokSocity">Paypal  <img src="assets/images/payment/bitcoin.png " class="img-responsive" ></option>
                        <option value="amarokSocity">Cryptocurrency</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-warning">
                    <span class="badge">
                        <i class="fa fa-heart"></i>
                    </span>
                    Donate now</button>
            </form>
        </div>
    </div>
    </div>
    </div>
    </section>
    
    </main>
@endsection



