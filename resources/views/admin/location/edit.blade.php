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
                    <div class="card">
                        <div class="">
                            <h3>
                                Add New Location
                            </h3>
                        </div>
                        <div class="card-body">
                           <form id="form_validation" method="POST" action="{{ route('location.update',$company_location->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group ">
                                    <label class="form-label">Country</label>
                                    <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{$company_location->country}}" placeholder="Country" required autofocus>
                                    @error('country')
                                        <label id="country-error" class="error" for="country">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group ">
                                    <label class="form-label">State/Province</label>
                                    <input type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{$company_location->state}}" placeholder="State/Province" required autofocus>
                                    @error('state')
                                        <label id="state-error" class="error" for="state">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group ">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$company_location->email}}" placeholder="Email Id" required autofocus>
                                    @error('email')
                                        <label id="email-error" class="error" for="email">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group ">
                                    <label class="form-label">Mobile</label>
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$company_location->phone}}" placeholder="10 digit Mobile number" minlength=10 maxlength=10 pattern="\d*" title="10 digit Mobile number" required>
                                    @error('phone')
                                        <label id="phone-error" class="error" for="phone">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group ">
                                    <label class="form-label">Address</label>
                                    <textarea  class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Physical Address" required autofocus>{{$company_location->address}}</textarea>
                                    @error('address')
                                        <label id="address-error" class="error" for="address">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group ">
                                    <label class="form-label">picture</label>
                                    <input type="file" class="form-control @error('picture') is-invalid @enderror" name="picture" placeholder="Location Image" required>
                                    @error('picture')
                                        <label id="picture-error" class="error" for="picture">{{ $message }}</label>
                                    @enderror
                                </div>


                                <button class="btn btn-primary btn-md" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->

        </div>
@endsection

@section('extra-script')
@endsection
