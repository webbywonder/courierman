@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">All Type List
        <a href="{{ route('type.create') }}" class="btn btn-primary btn-md float-right">
            <i class="fa fa-list"></i>   Add Type
        </a>
    </h2>
    <div class="card mb-4">
        <div class="card-body">
            <table id="table" class="table table-hover table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Unit</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courierTypeList as $courierType)
                    <tr>
                        <td>{{ $courierType->name }}</td>
                        <td>{{ $courierType->unit->name }}</td>
                        <td>{{ $courierType->price }}</td>
                        <td>
                            @if($courierType->status  == 'Active')
                            <span class="badge badge-success">Active</span>
                            @else
                            <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('type.edit',$courierType->id) }}"><button class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> EDIT</button></a>                           
                        </td> 
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#courierSetting").addClass("show");
    $("#courierSetting li:nth-child(2)").addClass("active");
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
@endsection