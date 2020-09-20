@extends('layouts.user.slave')

@section('title')
    User | view catalog
@endsection

@section('pagename')
    User Catalog
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">

            <a href="{{route('account.addcatalog')}}" class="btn btn-primary waves-effect waves-light m-b-20 text-lg">Add Catalog</a>

            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Item No</th>
                        <th>Service</th>
                        <th>Trade Value</th>
                        <th>Cash Value</th>
                        <th>Handling Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trades as $trade)
                    <tr>
                        <td>{{$trade->title}}</td>
                        <td>{{$trade->itemnumber}}</td>
                        <td>{{$trade->servicetype}}</td>
                        <td>{{$trade->tradevalue}}</td>
                        <td>{{$trade->cashvalue}}</td>
                        <td>{{$trade->package_handling_amount}}</td>
                        {{-- <td>$320,800</td> --}}
                        <td>
                            <a href="{{route('account.catalogdetail', ['id' => $trade->id ])}}" class="btn btn-primary">View</a>
                            <a href="{{route('account.catalogdetail', ['id' => $trade->id, 'edit' => true ])}}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div><!-- end col -->
</div>
@endsection