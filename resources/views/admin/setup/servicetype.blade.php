@extends('layouts.admin.master')

@section('title')
    Service Type Setup
@endsection

@section('pagename')
    Service Type Setup
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-10 header-title btn btn-primary" id="showAddModal">Add Service Type</h4>
           <br><br><br>
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Action</th>
                    <th>#</th>
                    <th>Service Type</th>
                </tr>
                </thead>
                <?php $i = 1 ?>
                <tbody>
                   
                    @foreach ($services as $service)
                    <tr>
                        <td>
                            <button data-id={{$service->id}} data-token={{ csrf_token() }} id="showEditForm" class="glyphicon glyphicon-edit btn btn-primary"></button>
                            <a onclick="return confirm('Are you sure you want to delete {{$service->servicetype}}?')" href="{{ route('deleteservices', ['id'=> $service->id]) }}" class="glyphicon glyphicon-trash btn btn-danger"></a>
                        </td>
                        <td>{{ $i++ }}</td>
                        <td>{{ $service->servicetype }}</td>
                    </tr>
                    @endforeach            
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="modal-title">Add Service Type</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('addservice') }}" method="post">
                    {{ csrf_field() }}
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
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Service Type</label>
                                <input type="text" class="form-control" name="servicetype" id="field-3" placeholder="Service Type">
                                <input type="hidden" class="form-control" name="id" id="service-id" >
                            </div>
                        </div>
                    </div>
            </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"  id="button-title">Add Service Type</button>
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        
                    </div>
                </form>
        </div>
    </div>
</div><!-- /.modal -->

@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        $(document).on('click', '#showAddModal', function(){
            $('#modal-title').html('Add Service Type')
            $('#button-title').html('Add Service Type')
            $('#field-3').val('')
            $('#service-id').val('')
            $("#con-close-modal").modal("show");
        })
        $(document).on('click', '#showEditForm', function(){
            var dataId = $(this).attr('data-id')
            var dataToken = $(this).attr('data-token')
            $.ajax({
                url: "{{ route('getservice',['id'=>"+dataId+"]) }}",
                type: 'GET',
                contentType: 'application/json',
                data:{ '_token':dataToken, 'id':dataId },
                success: function (data) {
                    if(data.status){
                        $('#modal-title').html('Edit Service Type')
                        $('#button-title').html('Update Service Type')
                        $('#field-3').val(data.data.servicetype)
                        $('#service-id').val(data.data.id)
                        $("#con-close-modal").modal("show");
                    }
                    else{
                        setTimeout(function(){
                            window.location = "{{ route('service') }}";
                        }, 5000);
                    }
                },
                error: function(xhr, status,error){
                    console.log(error)
                    setTimeout(function(){
                        window.location = "{{ route('service') }}";
                    }, 5000);
                }
            })
        })
    });
</script>
@endsection