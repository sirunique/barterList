@extends('layouts.admin.master')

@section('title')
    User Accounts
@endsection

@section('pagename')
    User Accounts
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th class="text-center">Action</th>
                    <th class="text-center">First Name</th>
                    <th class="text-center">Last Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Country</th>
                    <th class="text-center">State</th>
                    <th class="text-center">Tax Number</th>
                    <th class="text-center">Phone</th>
                    <th class="text-center">Gender</th>
                    <th class="text-center">Verified</th>
                </tr>
                </thead>
                <tbody>
                   
                    @foreach ($userDetails as $userDetail)
                    <tr>
                        <td class="text-center">
                            <a href="" class="mdi mdi-information-outline btn btn-success" title="view {{ $userDetail->firstname }} detail"></a>
                            {{-- <a onclick="return confirm('Are you sure you want to delete {{$gender->gender}}?')" href="{{ route('destroy.gender', ['id'=> $gender->id]) }}" class="glyphicon glyphicon-trash btn btn-danger"></a> --}}
                        </td>
                        <td>{{ $userDetail->firstname }}</td>
                        <td>{{ $userDetail->lastname }}</td>
                        <td>{{ $userDetail->email }}</td>
                        <td>{{ $userDetail->country }}</td>
                        <td>{{ $userDetail->state }}</td>
                        <td>{{ $userDetail->taxid }}</td>
                        <td>{{ $userDetail->phone }}</td>
                        <td>{{ $userDetail->gender }}</td>
                        <td>{{ $userDetail->is_verify ? "Yes": "No" }}</td>
                        {{-- <td>{{ $userDetail->lastname }}</td>
                        <td>{{ $userDetail->lastname }}</td>
                        <td>{{ $userDetail->lastname }}</td> --}}
                    </tr>
                    @endforeach            
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection