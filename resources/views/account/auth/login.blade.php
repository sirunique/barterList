<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Visual Barter | Sign In</title>

<!--  Favicon Icon  -->
<link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
<link rel="shortcut icon" href="images/favicon/favicon.ico" />

<link rel="stylesheet" href="{{ asset('css/sign-in.css') }}"/>

<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:300,400,600,700&display=swap" rel="stylesheet"> 

</head>
<body>



<section class="login-section signIn-section">
<div class="row no-gutters">

<div class="col-lg-8 col-md-12">	
<div class="left-box">
<ul class="header-box text-white text-center">
<li><h1>Visual <strong>Barter</strong></h1></li>
<li><h3 class="secound-title">free version</h3></li>
<li><h3>pro version</h3></li>
</ul>
<p>Barter for what you need. Barter for what you want!</p>
<div class="img-box">
<img class="img-fluid" src="{{ asset('images/pepole-layer.jpg')}}" alt="People images">
</div>
<div class="footer-box">
	<p>© Copyright 2020 by BarterList. ALL RIGHTS RESERVED INTERNATIONALLY.</p>
</div>

</div>
</div>

<div class="col-lg-4 col-md-12">
        <form class="login_form right-box" method="POST" id="loginform" autocomplete="off" onsubmit="return false">
            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
				<div class="logo-box">
					<img src="{{ asset('images/pes.png')}}" alt="logo">
				</div>
				<div class="form_body">
					<h3>Sign In</h3>
					<p class="signin">or <a href="{{ route('account.register') }}">create an account</a></p>
					<div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" autofocus>
                        <span class="help-block" id="emailError"></span>
					</div>
					<div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <span class="help-block" id="emailPassword"></span>
					</div>
					<p>This page is protected by reCAPTCHA, and subject to the Google <a href="#">Privancy Policy</a> and <a href="#">Terms of Service</a></p>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="checkbox-signup">
						<label class="custom-control-label" for="defaultChecked2"><span class="ml-2">Remember me <a href="#">Forgot your password</a></span></label>
					</div>

					<div class="submit_field">
						<button name="btnlogin" id="btnlogin" class="submit_button">Login</button>
					</div>
				</div>
		</form>
</div>

</div>
</section>





<script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script> 
<script src="{{ asset('js/bootstrap-s.min.js')}}"></script>

<script>
    $('form#loginform').submit(function(){
        
         var email = $('#email').val();
         var password  = $('#password').val();
         var _token = $('#_token').val();
         var status = "";

         // email regular expression
         var emailRegex =/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
         // validate email
         if(email == "" || !emailRegex.test(email)) {
             $('#emailError').html('Enter Valid Email Address').addClass('text-danger');
             status = true;
         }
         else{
             $('#emailError').html(" ");
         }
         // validate password
         if(password == ""){
             $('#passwordError').html('Enter Password').addClass('text-danger');
             status = true;
         }else{
             $('#passwordError').html(" ");
         }

         if(status != true){
             var data = {'email': email, 'password':password, '_token':_token}
             $.ajax({
                 url: "{{ route('account.login') }}",
                 type: 'POST',
                 data: data,
                 dataType: 'JSON',
                 success:function(data){
                     console.log(data)
                     $('#btnlogin').attr('disabled', true)
                     $('#btnlogin').html('Authenticating');
                     if(data.status){
                         // Proceed to dashboard
                         setTimeout(function()
                         {
                         $("#btnlogin").html(data.message);
                         window.location= "{{route('account.dashboard')}}";
                         },2000);
                     }
                     else{
                          // invalid login
                         setTimeout(function()
                         {
                         $("#btnlogin").html(data.message);
                         window.location= "{{route('account.login')}}";
                         },5000);
                     }
                    
                 }, 
                 error: function(xhr, status,error){
                     console.log(error)
                     setTimeout(function(){
                         $('#btnlogin').html('Try Again');
                         window.location = "{{ route('account.login') }}";
                     }, 5000);
                 }
             })
         }
    });
</script>
</body>
</html>