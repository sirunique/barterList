@extends('layouts.user.slave')

@section('title')
    Account | Profile
@endsection

@section('pagename')
    Update Profile
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <form method="POST" action="{{ route('account.editprofile', ['id'=> $userProfile->id]) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{-- {{ method_field('POST') }} --}}
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div> 
                @endif

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Firstname</label>
                            <input type="text" readonly name="firstname" class="form-control" value="{{ $userProfile->firstname }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Lastname</label>
                            <input type="text" readonly name="lastname" class="form-control" value="{{ $userProfile->lastname }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" readonly name="email" class="form-control" value="{{ $userProfile->email }}"placeholder="email" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" readonly name="country" class="form-control" value="{{ $userProfile->country }}"placeholder="country" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Region</label>
                            <input type="text" readonly name="region" class="form-control" value="{{ $userProfile->region }}"placeholder="region" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>State</label>
                            <input type="text" readonly name="state" class="form-control" value="{{ $userProfile->state }}"placeholder="state" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" readonly name="city" class="form-control" value="{{ $userProfile->city }}"placeholder="city" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Zip</label>
                            <input type="text" readonly name="zip" class="form-control" value="{{ $userProfile->zip }}"placeholder="zip" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tax Number</label>
                            <input type="text" readonly name="taxid" class="form-control" value="{{ $userProfile->taxid }}"placeholder="taxid" required>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Gender</label>
                            <select class="form-control" name="gender" required>
                                <option>Select Gender</option>
                                @foreach ($genders as $gender)
                                <option value="{{$gender->id}}"
                                    @if ($gender == null ? '' : $userProfile->gender == $gender->id)
                                        selected
                                    @endif
                                    >{{$gender->gender}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                   
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Marital Status</label>
                            <select class="form-control" name="maritalstatus" required>
                                <option>Select Status</option>

                                @foreach ($statuses as $status)
                                <option value="{{$status->id}}"
                                    @if ($status == null ? '' : $userProfile->maritalstatus == $status->id)
                                        selected
                                    @endif
                                    >{{$status->status}}</option>
                                @endforeach
                               
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" readonly name="phone" class="form-control" value="{{ $userProfile == null ? '': $userProfile->phone }}" placeholder="phone" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Fax</label>
                            <input type="text" name="fax" class="form-control" value="{{ $userProfile == null ? '': $userProfile->fax }}" placeholder="fax">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" name="twitter" class="form-control" value="{{ $userProfile == null ? '': $userProfile->twitter }}" placeholder="twitter">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" name="facebook" class="form-control" value="{{ $userProfile == null ? '': $userProfile->facebook }}" placeholder="facebook">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Whatsapp</label>
                            <input type="text" name="whatsapp" class="form-control" value="{{ $userProfile == null ? '': $userProfile->whatsapp }}" placeholder="whatsapp" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" name="company" class="form-control" value="{{ $userProfile->company }}"placeholder="company">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" id="avatar" name="avatar" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>About Me</label>
                            <textarea class="form-control" name="description" rows="5" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Address 1</label>
                            <textarea class="form-control" name="address1" rows="5" value="{{ $userProfile == null ? '': $userProfile->address1 }}" placeholder="Address 1" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Address 2</label>
                            <textarea class="form-control" name="address2" rows="5" value="{{ $userProfile == null ? '': $userProfile->address2 }}" placeholder="Address 2"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center m-t-10">
                        <button class="btn btn-primary waves-effect waves-light m-b-20 text-lg" type="submit">Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection