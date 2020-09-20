@extends('layouts.user.slave')

@section('title')
    User | Add Catalog
@endsection

@section('pagename')
   {{ $trade == null ? 'Add' : 'Update' }} Catalog
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <form method="POST" action="{{ route('account.postcatalog') }}" enctype="multipart/form-data">
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
                            <label>Title</label>
                            <input type="hidden" name="id" value="{{$trade == null ? '' : $trade->id}}" >
                            <input type="text" name="title" class="form-control" placeholder="Product/Service Title" value="{{$trade == null ? '' : $trade->title}}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Item Condition</label>
                            <select class="form-control" name="itemconditionid" required>
                                <option>Select Item Condition</option>
                                @foreach ($itemCondition as $condition)
                                    <option value="{{$condition->id}}"
                                        @if ($trade == null ? '' : $trade->itemconditionid == $condition->id)
                                            selected
                                        @endif
                                        >{{$condition->itemcondition}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Item Type</label>
                            <select class="form-control" name="serviceid" required>
                                <option value="">Select Item Type</option>
                                @foreach ($serviceType as $service)                                    
                                    <option value="{{$service->id}}" 
                                        @if($trade == null ? '' : $trade->serviceid == $service->id)
                                            selected
                                        @endif 
                                        >{{$service->servicetype}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Item Category</label>
                            <select class="form-control" name="serviceid" required>
                                <option value="">Select Item Category</option>
                                @foreach ($categoryType as $category)                                    
                                    <option value="{{$category->id}}" 
                                        @if($trade == null ? '' : $trade->categoryid == $category->id)
                                            selected
                                        @endif 
                                        >{{$category->category}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Web Reference</label>
                            <input type="text" id="" name="websiteref" class="form-control" placeholder="Website Reference" value="{{$trade == null ? '' : $trade->websiteref}}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Trade Value</label>
                            <input type="text" name="tradevalue" class="form-control" placeholder="Trade Amount" value="{{$trade == null ? '' : $trade->tradevalue}}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Cash Value</label>
                            <input type="text" name="cashvalue" class="form-control" placeholder="Cash Amount" value="{{$trade == null ? '' : $trade->cashvalue}}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Shipping Type</label>
                            <select class="form-control" name="shippingtypeid" required>
                                <option value="">Select Shipping Type</option>
                                    @foreach ($shippingType as $shipping)                                    
                                        <option value="{{$shipping->id}}" 
                                            @if($trade == null ? '' : $trade->shippingtypeid == $shipping->id)
                                            selected
                                        @endif
                                            >{{$shipping->shippingType}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Shipping Amount</label>
                            <input type="text" name="shippingamount" class="form-control" placeholder="Shipping Price" value="{{$trade == null ? '' : $trade->shippingamount}}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Handling Amount</label>
                            <input type="text" name="package_handling_amount" class="form-control" placeholder="Package and Handling Amount" value="{{$trade == null ? '' : $trade->package_handling_amount}}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Return Policy</label>
                            <input type="text" id="" name="returnpolicy" class="form-control" placeholder="Return Policy" value="{{$trade == null ? '' : $trade->returnpolicy}}" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Short Description</label>
                            <input type="text" class="form-control" name="shortdescription" placeholder="Description" value="{{$trade == null ? '' : $trade->shortdescription}}" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Full Description</label>
                            <textarea class="form-control" name="longdescription" rows="5" placeholder="Full Description" required>
                                {{$trade == null ? '' : $trade->longdescription}}
                            </textarea>
                        </div>
                    </div>

                    @if ($trade == null)
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Image(s)</label>
                                {{-- <input type="file" id="productimage" name="productimage" multiple class="form-control"> --}}
                                <div class="needsclick dropzone" id="document_file-dropzone">

                                </div>
                            </div>
                        </div>
                    @endif

                </div>
                <div class="row">
                    <div class="col-md-12 text-center m-t-10">
                        <button class="btn btn-primary waves-effect waves-light m-b-20 text-lg" type="submit">
                            {{ $trade == null ? 'Add' : 'Update' }} Catalog
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('scripts')
    <script>
        Dropzone.options.documentFileDropzone = {
            url: '{{ route('account.postcatalog') }}',
            maxFilesize: 2, // MB
            maxFiles: 1,
            addRemoveLinks: true,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            timeout: 5000,
            renameFile: function(file){
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 2
            },
            success: function(file, response){
                $('form').find('input[name="document_file"]').remove()
                $('form').append('<input type="hidden" name="document_file" value="' + response.name + '">')
            },
            removedfile: function(file){
                file.previewElement.remove()
                if(file.status !== 'error'){
                    $('form').find('input[name="document_file"]').remove()
                    this.options.maxFiles = this.options.maxFiles - 1
                }
            },
           
        }
    </script>
@endsection