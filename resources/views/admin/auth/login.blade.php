<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>Admin | Login</title>

         <!-- App css -->
         <link href="{{asset('masterassets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('masterassets/css/core.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('masterassets/css/components.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('masterassets/css/icons.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('masterassets/css/pages.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('masterassets/css/menu.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('masterassets/css/responsive.css')}}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{asset('masterassets/js/modernizr.min.js')}}"></script>

    </head>


    <body class="bg-transparent">

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h3 class="text-warning">
                                       Admin Login
                                    </h3>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" id="loginform" method="post" autocomplete="off" onsubmit="return false">
                                        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" name="email" id="email" placeholder="Email">
                                                <span class="help-block" id="emailError"></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                                                <span class="help-block" id="emailPassword"></span>
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <div class="checkbox checkbox-success">
                                                    <input id="checkbox-signup" type="checkbox" checked>
                                                    <label for="checkbox-signup">
                                                        Remember me
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        {{-- <div class="form-group text-center m-t-30">
                                            <div class="col-sm-12">
                                                <a href="page-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                            </div>
                                        </div> --}}

                                        <div class="form-group text-center m-t-50">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" name="btnlogin" id="btnlogin">Log In</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('masterassets/js/jquery.min.js')}}"></script>
        <script src="{{asset('masterassets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('masterassets/js/detect.js')}}"></script>
        <script src="{{asset('masterassets/js/fastclick.js')}}"></script>
        <script src="{{asset('masterassets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('masterassets/js/waves.js')}}"></script>
        <script src="{{asset('masterassets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('masterassets/js/jquery.scrollTo.min.js')}}"></script>
      

       <!-- App js -->
       <script src="{{asset('masterassets/js/jquery.core.js')}}"></script>
       <script src="{{asset('masterassets/js/jquery.app.js')}}"></script>

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
                     url: "{{ route('admin.login') }}",
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
                             window.location= "{{route('admin.dashboard')}}";
                             },2000);
                         }
                         else{
                              // invalid login
                             setTimeout(function()
                             {
                             $("#btnlogin").html(data.message);
                             window.location= "{{route('admin.login')}}";
                             },5000);
                         }
                        
                     }, 
                     error: function(xhr, status,error){
                         console.log(error)
                         setTimeout(function(){
                             $('#btnlogin').html('Try Again');
                             window.location = "{{ route('admin.login') }}";
                         }, 5000);
                     }
                 })
             }
        });
    </script>
 
    </body>
</html>