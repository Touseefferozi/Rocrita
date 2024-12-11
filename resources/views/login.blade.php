@extends('layouts.master')
@section('content')

       <!-- Inner Banner Section Start -->
        <section class="inner-banner-sec">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="inner-banner-txt">
                  <h3>Login</h3>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Inner Banner Section End -->
           
        <!-- Login Section Start -->
      <section id="auth"> 
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-6 offset-lg-3">
        				<div class="login_register">					
        					<h3 class="section-heading">Log In</h3>
        					<form  action="login" method="POST" >
							@csrf
        						<input type="email" name="email" class="form-control"  placeholder="Email" required="">
        						<input type="password" name="password" class="form-control" placeholder="Password" required="">
        						<button type="submit" class="btn-login">Login</button>
        						<div class="text-center">
        							<a href="#" class="right_link">Forget Your Password?</a>
        						</div>
        					</form>
        				</div>
        				
        				<div class="text-center">
        					<a href="/signup" class="create-account-link">Create an Account</a>
                        </div>
        			</div>
        		</div>
        	</div>
      </section>
    <!-- Login Section End -->

	@endsection
