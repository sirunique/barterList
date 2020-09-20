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

        	<div class="m-t-40 card-box" id="initBox">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0">{{$pageTitle}}</h4>
                </div>
                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0" id="error-message"></h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal m-t-20" id="loginform" method="post" autocomplete="off" onsubmit="return false">
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="email" id="email" placeholder="Email" autofocus>
                                <span class="help-block" id="emailError"></span>
                            </div>
                        </div>

                        <div class="form-group text-center m-t-30">
                            <div class="col-xs-12">
                                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" name="btnlogin" id="btnlogin">{{$btnTitle}}</button>
                            </div>
                        </div>

                        <div class="form-group m-t-30 m-b-0">
                            <div class="col-sm-12">
                                <a href="page-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        	<div class="m-t-40 card-box" id="msgBox">
                <div class="text-center">
                    <h4 class="text-capitalize font-bold m-b-0" id="getmessage">
                        {{-- if we found an account associated with tha email address, we've sent verifcation instruction to the primary email addresson the account --}}
                    </h4>
                </div>
            </div>
            <!-- end card-box-->

           
            
        </div>
        <!-- end wrapper page -->
        

        
    	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/detect.js')}}"></script>
        <script src="{{ asset('assets/js/fastclick.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{ asset('assets/js/waves.js')}}"></script>
        <script src="{{ asset('assets/js/wow.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js')}}"></script>

       <!-- App js -->
       <script src="{{asset('assets/js/jquery.core.js')}}"></script>
       <script src="{{asset('assets/js/jquery.app.js')}}"></script>

       <script>
        $('#initBox').show();
        $('#msgBox').hide();
           $('form#loginform').submit(function(){
               
                var email = $('#email').val();
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
                

                if(status != true){
                    var data = {'email': email,'_token':_token}
                    $.ajax({
                        url: "{{ route('account.request') }}",
                        type: 'POST',
                        data: data,
                        dataType: 'JSON',
                        success:function(data){
                            console.log(data)
                            $('#btnlogin').attr('disabled', true)
                            $('#btnlogin').html('Processing');
                            if(data.status){
                                $('#initBox').hide();
                                $('#msgBox').show();
                                $('#getmessage').html(data.message);
                                setTimeout(function()
                                {
                                    window.location= "{{route('account.login')}}";
                                },2000);
                            }
                            else{
                                $('#initBox').hide();
                                $('#msgBox').show();
                                $('#getmessage').html(data.message);
                                setTimeout(function()
                                {
                                    window.location= "{{route('account.login')}}";
                                },2000);
                            }
                        }, 
                        error: function(xhr, status,error){
                            setTimeout(function(){
                                $('#btnlogin').html('Try Again');
                                window.location = "{{ route('account.login') }}";
                            }, 2000);
                        }
                    })
                }
           });
       </script>
	
	</body>
</html>