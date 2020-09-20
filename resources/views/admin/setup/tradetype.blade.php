@extends('layouts.admin.master')

@section('title')
    Trade Type Setup
@endsection

@section('pagename')
    Trade Type Setup
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-10 header-title btn btn-primary" id="showAddModal">Add Trade Type</h4>
            <br><br><br>
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Action</th>
                    <th>#</th>
                    <th>Trade Type</th>
                </tr>
                </thead>
                <?php $i = 1 ?>
                <tbody>
                   
                    @foreach ($tradeTypes as $type)
                    <tr>
                        <td>
                            <button data-id={{$type->id}} data-token={{ csrf_token() }} id="showEditForm" class="glyphicon glyphicon-edit btn btn-primary"></button>
                            <a onclick="return confirm('Are you sure you want to delete {{$type->type}}?')" href="{{ route('deletetradetype', ['id'=> $type->id]) }}" class="glyphicon glyphicon-trash btn btn-danger"></a>
                        </td>
                        <td>{{ $i++ }}</td>
                        <td>{{ $type->type }}</td>
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
                <h4 class="modal-title" id="modal-title">Add Trade Type</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('addtrade') }}" method="post">
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
                                <label for="field-3" class="control-label">Trade Type</label>
                                <input type="text" class="form-control" name="type" id="field-3" placeholder="Trade Type">
                                <input type="hidden" class="form-control" name="id" id="type-id" >
                            </div>
                        </div>
                    </div>
            </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="button-title">Add Trade Type</button>
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
            $('#modal-title').html('Add Type Type')
            $('#button-title').html('Add Type Type')
            $('#field-3').val('')
            $('#type-id').val('')
            $("#con-close-modal").modal("show");
        })
        $(document).on('click', '#showEditForm', function(){
            var dataId = $(this).attr('data-id')
            var dataToken = $(this).attr('data-token')
            $.ajax({
                url: "{{ route('gettradetype',['id'=>"+dataId+"]) }}",
                type: 'GET',
                contentType: 'application/json',
                data:{ '_token':dataToken, 'id':dataId },
                success: function (data) {
                    if(data.status){
                        $('#modal-title').html('Edit Type Type')
                        $('#button-title').html('Update Type Type')
                        $('#field-3').val(data.data.type)
                        $('#type-id').val(data.data.id)
                        $("#con-close-modal").modal("show");
                    }
                    else{
                        setTimeout(function(){
                            window.location = "{{ route('tradetype') }}";
                        }, 5000);
                    }
                },
                error: function(xhr, status,error){
                    console.log(error)
                    setTimeout(function(){
                        window.location = "{{ route('tradetype') }}";
                    }, 5000);
                }
            })
        })
    });
</script>
@endsection