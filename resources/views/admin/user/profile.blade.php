@extends('layouts.admin.master')

@section('title')
    Barterlist | Profile
@endsection

@section('pagename')
    Profile
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="text-center card-box">
                        <div class="member-card">
                            <div class="thumb-xl member-thumb m-b-10 center-block">
                                <img src="assets/images/users/avatar-1.jpg" class="img-circle img-thumbnail" alt="profile-image">
                                <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                            </div>

                            <div class="">
                                <h4 class="m-b-5">Mark A. McKnight</h4>
                                <p class="text-muted">@webdesigner</p>
                            </div>

                            <button type="button" class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Follow</button>
                            <button type="button" class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Message</button>

                            <p class="text-muted font-13 m-t-20">
                                Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                            </p>

                            <hr/>

                            <div class="text-left">
                                <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">Johnathan Deo</span></p>

                                <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">(123) 123 1234</span></p>

                                <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">coderthemes@gmail.com</span></p>

                                <p class="text-muted font-13"><strong>Location :</strong> <span class="m-l-15">USA</span></p>
                            </div>

                            <ul class="social-links list-inline m-t-30">
                                <li>
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                </li>
                            </ul>

                        </div>

                    </div> <!-- end card-box -->

                </div> <!-- end col -->

                <div class="col-md-8 col-lg-9">
                    {{-- <h4>Expertise</h4>

                    <div class="row m-t-20">
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="p-t-10">
                                <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round
                                    data-fgColor="#2abfcc" value="89" data-skin="tron" data-angleOffset="180"
                                    data-readOnly=true data-thickness=".1"/>
                                <h6 class="text-muted m-t-10">HTML5</h6>
                            </div>
                        </div><!-- end col-->

                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="p-t-10">
                                <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round
                                    data-fgColor="#2abfcc" value="94" data-skin="tron" data-angleOffset="180"
                                    data-readOnly=true data-thickness=".1"/>
                                <h6 class="text-muted m-t-10">CSS3</h6>
                            </div>
                        </div><!-- end col-->

                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="p-t-10">
                                <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round
                                    data-fgColor="#2abfcc" value="75" data-skin="tron" data-angleOffset="180"
                                    data-readOnly=true data-thickness=".1"/>
                                <h6 class="text-muted m-t-10">Wordpress</h6>
                            </div>
                        </div><!-- end col-->

                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="p-t-10">
                                <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round
                                    data-fgColor="#2abfcc" value="85" data-skin="tron" data-angleOffset="180"
                                    data-readOnly=true data-thickness=".1"/>
                                <h6 class="text-muted m-t-10">AngularJs</h6>
                            </div>
                        </div><!-- end col-->

                    </div> <!-- end row --> --}}

                    {{-- <hr/> --}}

                    <div class="row">
                        <div class="col-md-8 col-sm-6">
                            <h4>Experience</h4>

                            <div class=" p-t-10">
                                <h5 class="text-custom m-b-5">Lead designer / Developer</h5>
                                <p class="m-b-0">websitename.com</p>
                                <p><b>2010-2015</b></p>

                                <p class="text-muted font-13 m-b-0">Lorem Ipsum is simply dummy text
                                    of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever since the
                                    1500s, when an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book.
                                </p>
                            </div>

                            <hr/>

                            <div class="">
                                <h5 class="text-custom m-b-5">Senior Graphic Designer</h5>
                                <p class="m-b-0">coderthemes.com</p>
                                <p><b>2007-2009</b></p>

                                <p class="text-muted font-13">Lorem Ipsum is simply dummy text
                                    of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever since the
                                    1500s, when an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book.
                                </p>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-md-4 col-sm-6">
                            <h4>Friends</h4>

                            <div class="inbox-widget">
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="img-circle" alt=""></div>
                                        <p class="inbox-item-author">Tomaslau</p>
                                        <p class="inbox-item-text">I've finished it! See you so...</p>
                                        <p class="inbox-item-date">
                                            <button type="button" class="btn btn-xs btn-success">Follow</button>
                                        </p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="img-circle" alt=""></div>
                                        <p class="inbox-item-author">Stillnotdavid</p>
                                        <p class="inbox-item-text">This theme is awesome!</p>
                                        <p class="inbox-item-date">
                                            <button type="button" class="btn btn-xs btn-danger">Unfollow</button>
                                        </p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="img-circle" alt=""></div>
                                        <p class="inbox-item-author">Kurafire</p>
                                        <p class="inbox-item-text">Nice to meet you</p>
                                        <p class="inbox-item-date">
                                            <button type="button" class="btn btn-xs btn-success">Follow</button>
                                        </p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="img-circle" alt=""></div>
                                        <p class="inbox-item-author">Shahedk</p>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <p class="inbox-item-date">
                                            <button type="button" class="btn btn-xs btn-success">Follow</button>
                                        </p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg" class="img-circle" alt=""></div>
                                        <p class="inbox-item-author">Adhamdannaway</p>
                                        <p class="inbox-item-text">This theme is awesome!</p>
                                        <p class="inbox-item-date">
                                            <button type="button" class="btn btn-xs btn-success">Follow</button>
                                        </p>
                                    </div>
                                </a>
                            </div>

                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <h4 class="m-t-30">Recent Works</h4>

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class=" thumb">
                                <a href="#" class="image-popup" title="Screenshot-1">
                                    <img src="assets/images/shots/shot-1.png" class="thumb-img" alt="work-thumbnail">
                                </a>
                                <div class="gal-detail">
                                    <h4>Travel Guide</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class=" thumb">
                                <a href="#" title="Screenshot-2">
                                    <img src="assets/images/shots/shot-2.png" class="thumb-img" alt="work-thumbnail">
                                </a>
                                <div class="gal-detail">
                                    <h4>Interval timer (app concept)</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class=" thumb">
                                <a href="#" class="image-popup" title="Screenshot-3">
                                    <img src="assets/images/shots/shot-3.png" class="thumb-img" alt="work-thumbnail">
                                </a>
                                <div class="gal-detail">
                                    <h4>Ecommerce app</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

            </div>
        </div>
    </div>
</div>   
@endsection
@section('script')
    
@endsection