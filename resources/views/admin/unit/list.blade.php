@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">All Unit List
        <a href="{{ route('unit.create') }}" class="btn btn-primary btn-md float-right">
            <i class="fa fa-list"></i>   Add Unit
        </a>
    </h2>
    <div class="card mb-4">
        <div class="card-body">
            <table id="table" class="table table-hover table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($unitList as $unit)
                    <tr>
                        <td>{{ $unit->name }}</td>
                        <td>
                            @if($unit->status  == 'Active')
                            <span class="badge badge-success">Active</span>
                            @else
                            <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('unit.edit',$unit->id) }}"><button class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> EDIT</button></a>                           
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
    $("#courierSetting li:nth-child(1)").addClass("active");
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
@endsection