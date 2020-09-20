@extends('layouts.user.slave')

@section('title')
    Account | Profile
@endsection

@section('pagename')
    Profile
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="row" style="background:#fff">
            <div class="col-lg-4">
                <div class="card-box">
                    <div class="bg-picture border-right">
                        <div class="profile-info-name">
                            <img src="{{ asset('assets/images/profile.jpg')}}"
                                class="img-thumbnail rounded-circle" alt="profile-image">
            
                            
            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="profile-info-detail" >
                        <h3 class="m-t-0 m-b-0">{{ $userProfile->firstname }} {{ $userProfile->lastname }}</h3>
                        {{-- <p class="text-muted m-b-20"><i>Web Designer</i></p> --}}
                        <p class="text-justify">{{ $userProfile->description }}</p>

                        <div class="button-list m-t-20 text-center">
                            <a href="{{ $userProfile->facebook }}"  class="btn btn-facebook btn-sm waves-effect waves-light">
                            <i class="fa fa-facebook"></i>
                            </a>

                            <a href="{{ $userProfile->twitter }}"  class="btn btn-sm btn-twitter waves-effect waves-light">
                            <i class="fa fa-twitter"></i>
                            </a>

                            <a href="{{ $userProfile->phone }}"  class="btn btn-sm btn-linkedin waves-effect waves-light">
                            <i class="fa fa-linkedin"></i>
                            </a>

                            <button  class="btn btn-sm btn-dribbble waves-effect waves-light">
                            <i class="fa fa-dribbble"></i>
                            </button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card-box"style="padding-left: 2em; height:70vh; overflow-y:scroll">
                    <h4 class="header-title m-t-0 m-b-30">Bio Data</h4>
        
                    <ul class="list-group m-b-0 user-list">
                        <li class="list-group-item">
                            <div class="user-list-item">
                                <div class="avatar">
                                    <span class="fa fa-address-card m-t-10 text-primary"></span>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Address</span>
                                    <span class="desc">{{ $userProfile->address1 }} {{ $userProfile->address2 }}, </span>
                                </div>
                            </div>
                        </li>
        
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <span class="fa fa-globe m-t-10"></span>
                                    
                                </div>
                                <div class="user-desc">
                                    <span class="name">Country</span>
                                    <span class="desc">{{ $userProfile->country }}</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <span class="fa fa-area-chart m-t-10"></span>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Region</span>
                                    <span class="desc">{{ $userProfile->region }}</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <span class="fa fa-flag m-t-10"></span>
                                </div>
                                <div class="user-desc">
                                    <span class="name">State</span>
                                    <span class="desc">{{ $userProfile->state }}</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <span class="fa fa-phone m-t-10"></span>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Phone</span>
                                    <span class="desc">{{ $userProfile->phone }}</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <span class="fa fa-envelope-open m-t-10"></span>
                                    
                                </div>
                                <div class="user-desc">
                                    <span class="name">Email</span>
                                    <span class="desc">{{ $userProfile->email }}</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <span class="fa fa-percent m-t-10"></span>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Tax Number</span>
                                    <span class="desc">{{ $userProfile->taxid }}</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <span class="fa fa-transgender m-t-10"></span>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Gender</span>
                                    <span class="desc">{{ $userProfile->gender }}</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <span class="fa fa-handshake-o m-t-10"></span>
                                </div>
                                {{-- <div class="user-desc">
                                    <span class="name">Marital Status</span>
                                    <span class="desc">{{ $userProfile->maritalstatus }}</span>
                                </div> --}}
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <span class="fa fa-user m-t-10"></span>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Next of Kin</span>
                                    <span class="desc">{{ $userProfile->state }}</span>
                                </div>
                            </a>
                        </li>
                        {{-- <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">State</span>
                                    <span class="desc">{{ $userProfile->state }}</span>
                                </div>
                            </a>
                        </li> --}}
                    </ul>
                   
                </div>
                <div class="text-center">
                    <a href="{{ route('account.editprofile') }}" class="btn btn-primary waves-effect waves-light m-b-20 text-lg">Edit Profile</a>
                </div>
            </div>
        </div>
        
        <!--/ meta -->
    </div>

    
</div>
@endsection