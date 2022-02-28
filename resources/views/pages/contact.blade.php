@extends('layouts.frontend')


@section('main-content')
    {{-- include page navbar --}}
    @include('includes.page-navbar')
    {{-- include page navbar --}}

    @include('includes.page-section',['page_image'=>'assets/images/backgrounds/contact_bg.jpg','page_title'=>'Contact','page_header'=>'Contact
    Us'])

    <main class="xs-main">
        <section class="xs-contact-section-v2">
            <div class="container">
                <div class="xs-contact-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="xs-contact-form-wraper">
                                <div class="row mb-5">
                                    <div class="col-lg-12 mx-auto">
                                        <h6 class="font-weight-light mb-4 font-italic text-white">
                                            Search our various locations</h6>
                                            <!-- Underlined search bars with buttons -->
                                            <form action="#"  id="xs-contact-form"
                                                class="xs-contact-form contact-form-v2">
                                                <div class="input-group">
                                                    <input type="text"  id="search_location" class="form-control"
                                                        placeholder="Search by location.....">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text"><i class="fa fa-search"></i></div>
                                                    </div>
                                                </div>
                                               
            
                                            </form>
                                            <!-- End -->

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <section class="xs-contact-details">
                <div class="container">
                    <div class="row" id="collection"> </div>
                </div>
            </section>
        </section>
    </main>
@endsection

@push('extra-js')
    <script>
        $(document).ready(function() {

            fetch_customer_data();

            function fetch_customer_data(query = '') {
                $.ajax({
                    url: "{{ route('companysearch.action') }}",
                    method: 'GET',
                    data: {
                        query: query
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('#collection').html(data.company_data);

                    }
                })
            }

            $(document).on('keyup', '#search_location', function(e) {
                e.preventDefault();
                let query = $(this).val();
                fetch_customer_data(query);
            });
        });
    </script>
@endpush

@push('extra-css')
    <style>
        .location_image {
            width: 100%;
            max-height: 50vh;
            min-height: 25vh;
        }
    </style>
@endpush

