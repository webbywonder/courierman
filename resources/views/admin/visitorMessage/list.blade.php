@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;"> Visitor Message List 
    </h2>
    <div class="card mb-4">
        <div class="card-body">
            <table id="table" class="table table-hover table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Details</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($visitorMessageList as $visitorMessage)
                    <tr>
                        <td>{{ $visitorMessage->name }}</td>
                        <td>{{ $visitorMessage->email }}</td>
                        <td>{{ $visitorMessage->phone }}</td>
                        <td>
                            @if($visitorMessage->messages)
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#details{{ $visitorMessage->id }}">
                                <i class="fa fa-eye"></i>  Details
                            </button>
                            <div class="modal fade" id="details{{ $visitorMessage->id }}" role="dialog" aria-labelledby="#details{{ $visitorMessage->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" style="text-transform: uppercase">&nbsp;{{$visitorMessage->name}} Message Details  </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>{!! $visitorMessage->messages !!}</strong></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <p class="text-info" style="font-weight:600;">No Information</p>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm delete_button" data-toggle="modal" data-target="#delete{{ $visitorMessage->id }}">
                                <i class="fa fa-times"></i>  DELETE
                            </button>
                            <div class="modal fade" id="delete{{ $visitorMessage->id }}" role="dialog" aria-labelledby="#delete{{ $visitorMessage->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <form method="POST" action="{{ route('frontend.deleteVisitorMessage',$visitorMessage->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-header">
                                                <h5 class="modal-title"><i class="fa fa-trash"></i>&nbsp;Delete !</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>Are you sure, you want to delete ?</strong></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>                 
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#visitorMessage").addClass("active");
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
@endsection