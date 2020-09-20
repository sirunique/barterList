<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App title -->
        <title>Adminto - Responsive Admin Dashboard Template</title>

        <!-- App CSS -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/components.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{asset('assets/js/modernizr.min.js')}}"></script>

    </head>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="text-center">
                <a href="index.html" class="logo"><span>Admin<span>to</span></span></a>
                <h5 class="text-muted m-t-0 font-600">Responsive Admin Dashboard</h5>
            </div>
        	<div class="m-t-40 card-box">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0">Register</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal m-t-20" id="registerform" method="post" autocomplete="off" onsubmit="return false">
                        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

						<div class="form-group ">
							<div class="col-xs-12">
                                <input class="form-control" type="text" name="firstname" id="firstname" placeholder="First Name" autofocus>
                                <span class="help-block" id="firstnameError"></span>
							</div>
                        </div>
						<div class="form-group ">
							<div class="col-xs-12">
                                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Last Name" >
                                <span class="help-block" id="lastnameError"></span>
							</div>
                        </div>
						<div class="form-group ">
							<div class="col-xs-12">
                                <input class="form-control" type="text" name="email" id="email" placeholder="Email" >
                                <span class="help-block" id="emailError"></span>
							</div>
                        </div>
						<div class="form-group ">
							<div class="col-xs-12">
                                <input class="form-control" type="password" name="password" id="password" placeholder="Password" >
                                <span class="help-block" id="passwordError"></span>
							</div>
                        </div>
                        
						<div class="form-group">
							<div class="col-xs-12">
								<div class="checkbox checkbox-custom">
                                    {{-- checked="checked" --}}
									<input id="checkbox-signup" type="checkbox"  name="checkbox-signup" >
									<label for="checkbox-signup" id="accept">I accept <a href="#">Terms and Conditions</a></label>
								</div>
							</div>
						</div>

						<div class="form-group text-center m-t-40">
							<div class="col-xs-12">
								<button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" name="btnregister"  id="btnregister">
									Register
								</button>
							</div>
						</div>

					</form>

                </div>
            </div>
            <!-- end card-box -->

			<div class="row">
				<div class="col-sm-12 text-center">
                <p class="text-muted">Already have account?<a href="{{route('account.login')}}" class="text-primary m-l-5"><b>Sign In</b></a></p>
				</div>
			</div>

        </div>
        <!-- end wrapper page -->




    	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/detect.js')}}"></script>
        <script src="{{asset('assets/js/fastclick.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('assets/js/jquery.app.js')}}"></script>


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