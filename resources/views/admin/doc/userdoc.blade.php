@extends('layouts.admin.master')

@section('title')
    Documentation
@endsection

@section('pagename')
    Documentation
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-10 header-title btn btn-primary" data-toggle="modal" data-target="#con-close-modal">Add Documentation</h4>
           <br><br><br>
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Action</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                   
                    @foreach ($userDocs as $document)
                    <tr>
                        <td>
                            <a href="" class="glyphicon glyphicon-edit btn btn-primary"></a>
                            <a onclick="return confirm('Are you sure you want to delete {{$document->title}}?')" href="{{ route('userdoc.destroy', ['id'=> $document->id]) }}" class="glyphicon glyphicon-trash btn btn-danger"></a>
                        </td>
                        <td>{{ $document->title }}</td>
                        <td>{{ $document->description }}</td>
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
                <h4 class="modal-title">New Documentation</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.adddoc') }}" method="post">
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
                                <label for="field-3" class="control-label">Title</label>
                                <input type="text" class="form-control" name="title" id="field-3" placeholder="Title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Description</label>
                                <textarea class="form-control" name="description" rows="5" placeholder="Description"></textarea>
                            </div>
                        </div>
                    </div>
            </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add Documentation</button>
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        
                    </div>
                </form>
        </div>
    </div>
</div><!-- /.modal -->

@endsection