@extends('frontend.main_master')
@section('content')

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="home.html">Home</a></li>
                <li class='active'>Login</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->
  
<div class="body-content">
    <div class="container">
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->            
<div class="col-md-6 col-sm-6 sign-in">
    <h4 class="">Sign in</h4>
    <p class="">Hello, Welcome to your account.</p>
    <div class="social-sign-in outer-top-xs">
        <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
        <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
    </div>


    <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
            @csrf
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
            <input type="email" id="email" name="email" :value="old('email')" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
        </div>
        <div class="form-group">
            <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
            <input type="password" name="password" id="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" >
        </div>
        <div class="radio outer-xs">
            <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Remember me!
            </label>
            <a href="{{route('password.request')}}" class="forgot-password pull-right">Forgot your Password?</a>
        </div>
        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
    </form>                 
</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
    <h4 class="checkout-subtitle">Create a new account</h4>
    <p class="text title-tag-line">Create your new account.</p>
      <form method="POST" class="register-form outer-top-xs" action="{{ route('register') }}">
            @csrf

        <div class="form-group">
        <label class="info-title" for="exampleInputName">Name <span>*</span></label>
        <input type="text" name="name" id="name" :value="old('name')" class="form-control unicase-form-control text-input" >
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
        </div>
     <div class="form-group">
            <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
            <input type="email" name="email" id="email" :value="old('email')" class="form-control unicase-form-control text-input">
             @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
        </div>
       
        <div class="form-group">
            <label class="info-title" for="exampleInputPhone">Phone Number <span>*</span></label>
            <input type="text" name="phone" id="phone" :value="old('phone')" class="form-control unicase-form-control text-input">
             @error('phone')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
        </div>
        <div class="form-group">
            <label class="info-title" for="exampleInputPassword">Password <span>*</span></label>
            <input type="password" name="password" id="password" class="form-control unicase-form-control text-input">
             @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
        </div>
         <div class="form-group">
            <label class="info-title" for="exampleInputConfirmation">Confirm Password <span>*</span></label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control unicase-form-control text-input">
             @error('password_confirmation')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
        </div>
        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
    </form>
    
    
</div>  
<!-- create a new account -->           </div><!-- /.row -->
        </div><!-- /.sigin-in-->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->

@include('frontend.body.brand')
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->    </div><!-- /.container -->
</div><!-- /.body-content -->
@endsection