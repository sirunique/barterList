@extends('layouts.user.slave')

@section('title')
    User | view catalog
@endsection

@section('pagename')
    User Catalog Detail
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <p><a href="javascript:window.history.back();" class="btn btn-primary waves-effect waves-light m-b-20 text-lg">Go Back</a></p>

            <div class="row">
                {{-- <div class="col-sm-6 col-lg-3 col-md-4 creative personal photography">
                    <div class="gal-detail thumb">
                        <a href="{{asset('masterassets/images/gallery/3.jpg')}}" class="image-popup" title="Screenshot-2">
                            <img src="{{asset('masterassets/images/gallery/6.jpg')}}" class="thumb-img" alt="work-thumbnail">
                        </a>
                        <h4>Gallary Image</h4>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                            iste itaque voluptas corrupti ratione reprehenderit magni similique.
                        </p>
                    </div>
                </div> --}}
                <div class="col-md-6">
                    <div class="gal-detail thumb">
                        <a href="{{asset('masterassets/images/gallery/3.jpg')}}" class="image-popup" title="Screenshot-2">
                            <img src="{{asset('masterassets/images/gallery/6.jpg')}}" class="thumb-img" alt="work-thumbnail">
                        </a>
                        <h4>Gallary Image</h4>
                        {{-- <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                            iste itaque voluptas corrupti ratione reprehenderit magni similique.
                        </p> --}}
                    </div>
                </div>
                <div class="col-md-6">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Title</th>
                                <td>{{$trade[0]->title}}</td>
                            </tr>
                            <tr>
                                <th>Item No</th>
                                <td>{{$trade[0]->itemnumber}}</td>
                            </tr>
                            <tr>
                                <th>Service</th>
                                <td>{{$trade[0]->servicetype}}</td>
                            </tr>
                            <tr>
                                <th>Trade Value</th>
                                <td>${{number_format($trade[0]->tradevalue)}}</td>
                            </tr>
                            <tr>
                                <th>Cash Value</th>
                                <td>${{number_format($trade[0]->cashvalue)}}</td>
                            </tr>
                            <tr>
                                <th>Package & Handling Amount</th>
                                <td>${{number_format($trade[0]->package_handling_amount)}}</td>
                            </tr>
                            <tr>
                                <th>Shipping Type</th>
                                <td>${{number_format($trade[0]->package_handling_amount)}}</td>
                            </tr>
                            <tr>
                                <th>Shipping Amount</th>
                                <td>${{number_format($trade[0]->package_handling_amount)}}</td>
                            </tr>
                           
                            <tr>
                                <th>Return Policy</th>
                                <td>{{$trade[0]->returnpolicy}}</td>
                            </tr>
                            <tr>
                                <th>Short Description</th>
                                <td>{{$trade[0]->shortdescription}}</td>
                            </tr>
                            <tr>
                                <th>Full Description</th>
                                <td>{{$trade[0]->longdescription}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
           
        </div>
    </div><!-- end col -->
</div>
@endsection