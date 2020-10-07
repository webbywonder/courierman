@extends('manager.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">{{ Auth::user()->branch->name }} Branch Income List
        <a href="{{ route('manager.branch.income') }}" class="btn btn-primary btn-md float-right">
            <i class="fa fa-backward"></i>   Go Back
        </a>
    </h2>
    <div class="card mb-4">
        <div class="card-body">
            <table id="table" class="table table-hover table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Date</th>
                        <th>Branch Income</th>
                        <th>Cash Receiver Name</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($branchIncomeList as $key=>$branchIncome)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $branchIncome->payment_date }}</td>
                        <td>{{ $branchIncome->payment_balance }}&nbsp;{{ $gs->base_currency }}</td>
                        <td>{{ $branchIncome->payment_receiver->name }} [ {{ $branchIncome->payment_receiver->type }} ]</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">No Information</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $branchIncomeList->appends(['start_date'=>request()->start_date,'end_date'=>request()->end_date])->links() }}
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#branchIncome").addClass("active");
</script>
@endsection