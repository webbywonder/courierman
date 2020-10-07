@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4 border-bottom pb-3 text-uppercase">Dashboard</h2>

    <div class="card mb-4">
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="d-flex border">
                        <div class="bg-custom-background text-light p-4">
                            <div class="d-flex align-items-center h-100">
                                <i class="fa fa-3x fa-fw fa-question"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 bg-white p-4">
                            <p class="text-uppercase text-secondary mb-0">Total Branch</p>
                            <h3 class="font-weight-bold mb-0">{{ $totalBranch }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex border">
                        <div class="bg-custom-background text-light p-4">
                            <div class="d-flex align-items-center h-100">
                                <i class="fa fa-3x fa-fw fa-users"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 bg-white p-4">
                            <p class="text-uppercase text-secondary mb-0">Total Manager</p>
                            <h3 class="font-weight-bold mb-0">{{  $totalManager }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex border">
                        <div class="bg-custom-background text-light p-4">
                            <div class="d-flex align-items-center h-100">
                                <i class="fa fa-3x fa-fw fa-money-bill-alt"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 bg-white p-4">
                            <p class="text-uppercase text-secondary mb-0">Total Company Income</p>
                            <h3 class="font-weight-bold mb-0">{{  $totalCompanyIncome }}&nbsp;{{ $gs->base_currency }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header font-weight-bold">
            <i class="fa fa-list"></i>
            MONTHLY INCOME STATISTICS
        </div>
        <div class="card-body mt-4">
            <div class="card-body p-0" id="appointment" style="height: 250px;">

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
       $(document).ready(function () {
           var months = {!! json_encode(array_values(month_arr())) !!};
           new Morris.Line({
               element: 'appointment',
               data: {!! $total_chart !!},
               xkey: 'month',
               ykeys: [ 'income'],
               labels: ['INCOME'],
               xLabelFormat: function(x) { // <--- x.getMonth() returns valid index
                   var month = months[x.getMonth()];
                   return month;
               },
               dateFormat: function(x) {
                   var month = months[new Date(x).getMonth()];
                   return month;
               },
           });
       });
   </script>
@endsection
