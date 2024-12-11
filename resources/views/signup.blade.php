
 @extends('layouts.master')
 @section('content')

<!-- Inner Banner Section Start -->
            <section class="inner-banner-sec">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="inner-banner-txt">
                      <h3>Signup</h3>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Inner Banner Section End -->
    
      
      <section id="auth"> 
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-6 offset-lg-3">
        				<div class="login_register">
        					<h3 class="section-heading">Sign Up</h3>
        					<form action="" method="post">
        						<input type="text" name="name" value="" class="form-control " placeholder="Name">
        						
        						
        						<input type="email" name="email" value="" class="form-control " placeholder="Email">
        
        						
        						<input type="text" name="phone" value="" class="form-control " placeholder="Phone">
        
        						
        						<input type="password" name="password" class="form-control " placeholder="Password">
        
        						
        						<input type="password" name="password_confirmation" class="form-control " placeholder="Password Confrimation">
        
        						
        						<button type="submit" class="btn-login">Sign Up</button>
        
        						<div class="text-center">
        							<a href="/login" class="right_link">Already have an account?</a>
        						</div>
        					</form>
        				</div>
        			</div>
        		</div>
	        </div>
      </section>
      
      @endsection