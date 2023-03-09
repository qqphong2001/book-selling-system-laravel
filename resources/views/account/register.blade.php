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
                <div class="aa-myaccount-register">
                 <h4>Register</h4>
            @include('account.alter')
                 <form action="{{ url('account/process-register')}}" method="post" class="aa-login-form">
                    @csrf
                    <label for="">Email address<span>*</span></label>
                    <input type="text" placeholder="email" name="email">
                    <label for="">Name<span>*</span></label>
                    <input type="text" placeholder="Name" name="name">
                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password" name="password">
                    <button type="submit" class="aa-browse-btn" style="">Register</button>
                    <div >
                   <p class="aa-lost-password"  style="line-height: 38px;
                   padding-left: 50px;">Already Registered. <strong><a href="{{url('/account/login')}}">Login</a></strong></p>

                    </div>


                  </form>
                </div>
              </div>
            </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->


@endsection




