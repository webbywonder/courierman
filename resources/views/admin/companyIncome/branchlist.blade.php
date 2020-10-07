@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;"> Company Income
    </h2>
    <div class="card mb-4">
        <div class="card-body">
            <table id="table" class="table table-hover table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Branch Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($branchList as $key=>$branch)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $branch->name }}</td>
                        <td>
                            <a href="{{ route('admin.branch.income',$branch->id) }}"><button class="btn btn-info btn-sm"> <i class="fa fa-eye"></i>&nbsp;View Income</button></a> 
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">No Information</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#companyIncomeList").addClass("active");
    $(document).ready(function () {
        $('#table').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
@endsection