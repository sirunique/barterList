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
        <div class="card-box table-responsive page-error">
            <h1>
                <i class="fa fa-exclamation-circle"></i> Error 401: Unauthorized
            </h1>
            <p>The page you have requested is not found.</p>
            <p><a href="javascript:window.history.back();" class="btn btn-primary waves-effect waves-light m-b-20 text-lg">Go Back</a></p>

        </div>
    </div><!-- end col -->
</div>
@endsection