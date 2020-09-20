<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Visual Barter | Register</title>

<!--  Favicon Icon  -->
<link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
<link rel="shortcut icon" href="images/favicon/favicon.ico" />

<link rel="stylesheet" href="{{ asset('css/sign-in.css') }}"/>

<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:300,400,600,700&display=swap" rel="stylesheet"> 

</head>
<body>



<section class="login-section register-section">
<div class="row no-gutters">

<div class="col-lg-8 col-md-12">	
<div class="left-box">
<ul class="header-box text-white text-center">
<li><h1>Barter <strong>List</strong></h1></li>
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
        <form class="login_form right-box" method="POST" id="registerform" autocomplete="off" onsubmit="return false">
            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
				<div class="logo-box">
					<img src="{{ asset('images/pes.png')}}" alt="logo">
				</div>
				<div class="form_body">
					<h3>Register</h3>
					<p class="signin">or <a href="#">sign in to your account</a></p>
					<div class="form-group">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" autofocus>
                        <span class="help-block" id="firstnameError"></span>
					</div>
					<div class="form-group">
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name" id="lastname">
                        <span class="help-block" id="lastnameError"></span>
					</div>
					<div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        <span class="help-block" id="emailError"></span>
					</div>
					<div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <span class="help-block" id="passwordError"></span>
					</div>
					<p>This page is protected by reCAPTCHA, and subject to the Google <a href="#">Privancy Policy</a> and <a href="#">Terms of Service</a></p>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="accept defaultChecked2" name="checkbox-signup">
						<label class="custom-control-label" for="defaultChecked2"><span class="ml-2">I agree to the <a href="#">VisualBarter Terms</a></span></label>
					</div>

					<div class="submit_field">
						<button class="submit_button" name="btnregister"  id="btnregister">
                            Register
                        </button>
					</div>
				</div>
		</form>
</div>

</div>
</section>





<script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script> 
<script src="{{ asset('js/bootstrap-s.min.js')}}"></script>

<script>
    $('form#registerform').submit(function(){
        var email = $('#email').val();
        var password  = $('#password').val();
        var firstname  = $('#firstname').val();
        var lastname  = $('#lastname').val();
        var _token = $('#_token').val();
        var status = "";

        // validate firstname
        if(firstname == ""){
            $('#firstnameError').html('Firstname Password').addClass('text-danger');
            status = true;
        }else{
            $('#firstnameError').html(" ");
        }
        // validate firstname
        if(lastname == ""){
            $('#lastnameError').html('Lastname Password').addClass('text-danger');
            status = true;
        }else{
            $('#lastnameError').html(" ");
        }


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


        // Accept Terms
        if(!$('#checkbox-signup').is(':checked')){
            $('#accept').addClass('text-danger');
            status = true;
            acceptTerms = false
        }

        if(status != true){
            var data = {'email': email, 'password': password, 'firstname': firstname, 'lastname': lastname,  '_token': _token,}
            console.log(data) 
            $.ajax({
                url: "{{route('account.register')}}",
                type: 'POST',
                data: data,
                dataType: 'JSON',
                success:function(data){
                    console.log(data)
                    $('#btnregister').attr('disabled', true)
                    $('#btnregister').html('Processing');
                    if(data.status){
                        // Proceed to dashboard
                        setTimeout(function()
                        {
                        $("#btnregister").html(data.message);
                        window.location= "{{route('account.dashboard')}}";
                        },2000);
                    }
                    else{
                         // invalid login
                        setTimeout(function()
                        {
                        $("#btnregister").html(data.message);
                        window.location= "{{route('account.register')}}";
                        },5000);
                    }
                },
                error:function(xhr, status, error){
                    console.log(error)
                    console.log(error)
                    if(xhr.responseJSON.errors.email != null){
                        $('#emailError').html(xhr.responseJSON.errors.email[0]).addClass('text-danger');
                    }else{
                        setTimeout(function(){
                            $('#btnregister').html('Try Again');
                            window.location = "{{ route('account.register') }}";
                        }, 5000);
                    }
                }
            })
        }
    })
</script>

</body>
</html>