@extends('user.layouts.index')
@section('content')



  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Account Page</h2>
        {{-- <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li class="active">Account</li>
        </ol> --}}
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">
            <div class="row">
              <div class="col-md-12">
                <div class="aa-myaccount-login">
                <h4>Login</h4>
                 @include('account.alter')
                 <form  class="aa-login-form"  action="{{ url('account/process-login') }}" method="post">
                    @csrf
                  <label for="">Email<span>*</span></label>
                   <input type="text" name="email" placeholder="Email">
                   <label for="">Mật khẩu<span>*</span></label>
                    <input type="password" name="password" placeholder="Mật khẩu">
                    <button type="submit" class="aa-browse-btn">Login</button>
                    <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme" name="remember"> Ghi nhớ đăng nhập </label>
                     <p class="aa-lost-password"> Bạn chưa có tài khoản ? <strong><a href="{{url('account/register')}}">Đăng ký tài khoản</a></strong> </p>

                    <p class="aa-lost-password"><a href="#">Quên mật khẩu ?</a></p>
                  </form>
                </div>
              </div>


 </section>
 <!-- / Cart view section -->


@endsection




