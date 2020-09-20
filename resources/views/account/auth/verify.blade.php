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
                    <h4 class="text-uppercase font-bold m-b-0">Verify Account</h4>
                </div>

                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0" id="error-message"></h4>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal m-t-20" id="verifyform" method="post" autocomplete="off" onsubmit="return false">
                        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" id="id" value="{{$account->id}}">

						<div class="form-group ">
							<div class="col-xs-6">
                                <input class="form-control" type="text" value="{{$account->firstname}}" disabled>
							</div>
							<div class="col-xs-6">
                                <input class="form-control" type="text" value="{{$account->lastname}}" disabled>
							</div>
                        </div>
						<div class="form-group ">
							<div class="col-xs-12">
                                <input class="form-control" type="text" value="{{$account->email}}" disabled>
							</div>
                        </div>

						<div class="form-group ">
							<div class="col-xs-6">
                                <input class="form-control" type="text" name="country" id="country" placeholder="Country" >
                                <span class="help-block" id="countryError"></span>
							</div>
							<div class="col-xs-6">
                                <input class="form-control" type="text" name="state" id="state" placeholder="State" >
                                <span class="help-block" id="stateError"></span>
							</div>
                        </div>

						<div class="form-group ">
							<div class="col-xs-6">
                                <input class="form-control" type="text" name="city" id="city" placeholder="City" >
                                <span class="help-block" id="cityError"></span>
							</div>
							<div class="col-xs-6">
                                <input class="form-control" type="text" name="region" id="region" placeholder="Region" >
                                <span class="help-block" id="regionError"></span>
							</div>
                        </div>

						<div class="form-group ">
							<div class="col-xs-6">
                                <input class="form-control" type="text" name="zip" id="zip" placeholder="Zip" >
                                <span class="help-block" id="zipError"></span>
							</div>
							<div class="col-xs-6">
                                <input class="form-control" type="text" name="taxid" id="taxid" placeholder="taxid" >
                                <span class="help-block" id="taxidError"></span>
							</div>
                        </div>

                        <div class="form-group ">
							<div class="col-xs-6">
                                <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone" >
                                <span class="help-block" id="phoneError"></span>
							</div>
							<div class="col-xs-6">
                                <input class="form-control" type="text" name="gender" id="gender" placeholder="Gender" >
                                <span class="help-block" id="genderError"></span>
							</div>
                        </div>

						<div class="form-group ">
							<div class="col-xs-6">
                                <Textarea class="form-control" type="text" name="address1" id="address1" placeholder="Address 1"></Textarea>
                                <span class="help-block" id="address1Error"></span>
							</div>
							<div class="col-xs-6">
                                <Textarea class="form-control" type="text" name="address2" id="address2" placeholder="Address 2"></Textarea>
                                <span class="help-block" id="address2Error"></span>
							</div>
                        </div>
						
						
                      
						<div class="form-group text-center m-t-40">
							<div class="col-xs-12">
								<button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" name="btnverify"  id="btnverify">
									Verify
								</button>
							</div>
						</div>

					</form>

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
            $('form#verifyform').submit(function(){
                var id = $('#id').val();
                var country = $('#country').val();
                var state  = $('#state').val();
                var city  = $('#city').val();
                var region  = $('#region').val();
                var zip  = $('#zip').val();
                var taxid  = $('#taxid').val();
                var phone  = $('#phone').val();
                var gender  = $('#gender').val();
                var address1  = $('#address1').val();
                var address2  = $('#address2').val();


                var _token = $('#_token').val();
                var status = "";

                // validate 
                if(country == "" || state == "" || city == "" || region == "" || zip == "" || taxid == "" || phone == "" || gender == "" ||
                address1 == "" || address2 == ""
                ){
                    $('#error-message').html('Enter All Required Data').addClass('text-danger');
                    status = true;
                }else{
                    $('#error-message').html(" ");
                }

                if(status != true){
                    var data = {'country': country, 'state': state, 'city': city,
                     'region': region, 'zip': zip, 'taxid': taxid, 'phone': phone, 'gender': gender,
                      'address1':address1, 'address2': address2, '_token': _token,}
                    console.log(data) 
                    $.ajax({
                        url: "/account/verify/"+id,
                        type: 'POST',
                        data: data,
                        dataType: 'JSON',
                        success:function(data){
                            console.log(data)
                            $('#btnverify').attr('disabled', true)
                            $('#btnverify').html('Processing');
                            if(data.status){
                                // Proceed to dashboard
                                setTimeout(function()
                                {
                                $("#error-message").html(data.message).addClass('text-success');
                                $("#btnverify").html(data.message);
                                window.location= "{{route('account.dashboard')}}";
                                },2000);
                            }
                            else{
                                 // invalid login
                                setTimeout(function()
                                {
                                $("#error-message").html(data.message).addClass('text-success');
                                $("#btnverify").html(data.message);
                                window.location= "{{route('account.login')}}";
                                },5000);
                            }
                        },
                        error:function(xhr, status, error){
                            if(xhr.responseJSON.errors.email != null){
                                $('#emailError').html(xhr.responseJSON.errors.email[0]).addClass('text-danger');
                            }else{
                                setTimeout(function(){
                                    $('#btnverify').html('Try Again');
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