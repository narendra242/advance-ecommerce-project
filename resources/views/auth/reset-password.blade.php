@extends('frontend.main_master')
@section('content')

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="home.html">Home</a></li>
                <li class='active'>Reset Password</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->
  
<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->            
<div class="col-md-6 col-sm-6 sign-in">
    <h4 class="">Reset Password</h4>
    <p class="">Reset your password? No Problem</p>
     <form method="POST" action="{{ route('password.update') }}">
            @csrf
      <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
            <input type="email" id="email" name="email" :value="old('email', $request->email)"  class="form-control unicase-form-control text-input">
        </div>

         <div class="form-group">
            <label class="info-title" for="exampleInputpassword">Password <span>*</span></label>
            <input type="password" id="password" name="password" class="form-control unicase-form-control text-input">
        </div>

         <div class="form-group">
            <label class="info-title" for="exampleInputpassword">Confirm Password <span>*</span></label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control unicase-form-control text-input">
        </div>
         <button type="submit" class="btn-upper btn btn-primary checkout-page-button"> {{ __('Reset Password') }}</button>
    </form>                 
</div>
<!-- Sign-in -->
 </div><!-- /.row -->
</div><!-- /.sigin-in-->
<!-- ============================================== BRANDS CAROUSEL ============================================== -->
@include('frontend.body.brand')
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->    
</div><!-- /.container -->
</div><!-- /.body-content -->
@endsection