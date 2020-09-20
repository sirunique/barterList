@extends('layouts.user.slave')

@section('title')
    User | View Trade Console
@endsection

@section('pagename')
    Trade Console / Product Detail
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
            {{-- <div class="row"> --}}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="header-title m-t-0">Product Detail</h4>
                
                            <div class="widget-chart ">
                                <div id="carouselExampleSlidesOnly" class="carousel slide text-center" data-ride="carousel">
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img class="d-block" style="height: 250px; width:  500px; " src="{{asset("assets/images/email/1.png")}}" alt="First slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block" style="height: 250px; width:  500px;" src="{{asset("assets/images/email/2.png")}}" alt="Second slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block"  style="250px; width:  500px;" src="{{asset("assets/images/email/3.png")}}" alt="Third slide">
                                      </div>
                                    </div>
                                  </div>
                                <br>
                                <table class="table table table-hover m-0">
                                    <tr>
                                        <td colspan="4" class="text-uppercase"><strong>Seller's Detail </strong></td>
                                    </tr>
                                    <tr>
                                        <td>Name:</td>
                                        <td>Value</td>
                                        <td>Ratings:</td>
                                        <td>Value</td>
                                    </tr>
                                    <tr>
                                        <td>Total Sales/exchange:</td>
                                        <td>Value</td>
                                        <td>Registered On:</td>
                                        <td>Value</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-uppercase"><strong>Item Details </strong></td>
                                    </tr>
                                    <tr>
                                        <td>Title</td>
                                        <td>Value</td>
                                        <td>Title</td>
                                        <td>Value</td>
                                    </tr>
                                </table>
                                <br>
                                <div class="text-center">
                                    <a href="" type="button" class="btn btn-primary btn-sm">Add To Wish</a> | 
                                <a href="{{route('product.view', ['id'=> '1'])}}" type="button" class="btn btn-primary btn-sm">View</a></div>
                            </div>
                        </div>
                    </div><!-- end col -->
                
                    <div class="col-lg-6" id="mycatelog">
                        <div class="card-box">
                            <h4>My Catalogs</h4>
                        </div>
                        <div class="card-box">
                            <h4 class="header-title m-t-0">My Product</h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    <img style="height: 150px; " src="{{asset("assets/images/email/1.png")}}" class="w-100" alt="First slide">
                                </div>
                                <div class="col-sm-6 p-0">
                                    <table class="table table table-striped m-0">
                                        <tr>
                                            <td> Detail </td>
                                            <td> Detail </td>
                                        </tr>
                                        <tr>
                                            <td> Detail </td>
                                            <td> Detail </td>
                                        </tr>
                                        <tr>
                                            <td> Detail </td>
                                            <td> Detail </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            {{-- <div id="morris-bar-example" style="height: 280px;"></div> --}}
                        </div>
                    </div><!-- end col -->
                </div>            
            {{-- </div> --}}
        </div>
    </div><!-- end col -->
</div>
@endsection