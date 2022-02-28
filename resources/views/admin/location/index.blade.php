@extends('home')

@section('title')
	Location
@endsection

@section('extra-css')

@endsection

@section('index')
        <div class="content">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="row">
                           
                            @if (count($company_location) > 0)
                                
                            @foreach ($company_location as $location)
                            <div class="col-md-6 col-lg-4 card">

                                <div class="xs-contact-details">
                                    <div class="xs-widnow-wraper">
                                        <div class="xs-window-top">
                                            <img src="/assets/image/location/{{$location->picture}}" alt="">
                                        </div>
                                        <div class="xs-window-back">
                                            <div id="xs-multiple-map-1" class="xs-map"></div>
                                        </div>
                                       
                                    </div>
    
                                    <ul class="xs-unorder-list">
                                        <li>
                                            <i class="fa fa-phone color-green"></i>{{$location->phone}}</li>
                                        <li>
                                            <i class="fa fa-envelope-o color-green"></i>
                                            <a href="https://demo.xpeedstudio.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d7b9b6bab297aeb8a2a5b3b8bab6beb9f9b4b8ba">{{$location->email}}</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-map-marker color-green"></i>{{$location->country}}</li>
                                    </ul>
                                </div>
                                    <div class="btn-group mx-auto">
                                       <form action="{{route('location.destroy',$location->id)}}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>    
                                    </form>
                                        <a href="{{route('location.edit',$location->id)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
                                    </div>
                            </div>
                            @endforeach

                            @endif

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->

        </div>
@endsection

@section('extra-script')
@endsection
