@extends('manager.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">Courier Invoice<hr></h2>
    <div class="card" id="printDiv">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <strong>Invoice No :
                        {{ $courierInfo->invoice_id }}</strong> 
                </div>

                <div class="col-md-6">
                    <span class="float-right"> <strong>Status:&nbsp;&nbsp;</strong>
                        @if($courierInfo->status == 'Delivered')
                        <span class="btn btn-sm btn-danger text-uppercase">{{ $courierInfo->status }}</span>
                        @else
                        <span class="btn btn-sm btn-success text-uppercase">{{ $courierInfo->status }}</span>
                        @endif
                    </span>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="col-md-12 text-center mb-4">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-6">
                            <strong  style="font-size:18px;">{{ $gs->title }}</strong><p style="font-size:16px;">{{ $gs->phone }} | {{ $gs->email }}</p>
                        </div>
                        <div class="col-md-4">
                            <strong>Date : </strong><p style="font-size:16px;">{{ Carbon\Carbon::now()->toDateTimeString() }}</p>
                        </div>
                    </div>
                </div><hr>
            </div>
            <div class="row mb-4">
                <div class="col-md-4 offset-md-2">
                    <h6 class="mb-2">Sender Details:</h6>
                    <div><strong>Branch&nbsp;&nbsp;:</strong>&nbsp;{{ $courierInfo->branch->name }}</div>
                    <div><strong>Name&nbsp;&nbsp;&nbsp;&nbsp;:</strong>&nbsp;{{ $courierInfo->sender_name }}</div>
                    @if($courierInfo->sender_email)
                    <div><strong>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong>&nbsp;{{ $courierInfo->sender_email }}</div>
                    @endif
                    <div><strong>Phone&nbsp;&nbsp;&nbsp;&nbsp;:</strong>&nbsp;{{ $courierInfo->sender_phone }}</div>
                    @if($courierInfo->sender_address)
                    <div><strong>Address&nbsp;:</strong>&nbsp;{!! $courierInfo->sender_address !!}</div>
                    @endif
                </div>
                <div class="col-md-4 offset-md-2">
                    <h6 class="mb-2">Receiver Details:</h6>
                    <div><strong>Branch&nbsp;&nbsp;:</strong>&nbsp;{{ $courierInfo->branch->name }}</div>
                    <div><strong>Name&nbsp;&nbsp;&nbsp;&nbsp;:</strong>&nbsp;{{ $courierInfo->receiver_name }}</div>
                    @if($courierInfo->receiver_email)
                    <div><strong>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong>&nbsp;{{ $courierInfo->receiver_email }}</div>
                    @endif
                    <div><strong>Phone&nbsp;&nbsp;&nbsp;&nbsp;:</strong>&nbsp;{{ $courierInfo->receiver_phone }}</div>
                    @if($courierInfo->receiver_address)
                    <div><strong>Address&nbsp;:</strong>&nbsp;{{ $courierInfo->receiver_address }}</div>
                    @endif
                </div>
            </div>
            <div class="container">
                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Courier Code</th>
                                <th>Courier Type</th>
                                <th>Sending Date</th>
                                <th>Courier Quantity</th>
                                <th>Courier Fee</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courierProductInfoList as $key=>$courierProductInfo)
                            <tr>
                                <td class="center">{{ $key+1 }}</td>
                                <td class="left strong">{{ $courierProductInfo->courier_code }}</td>
                                <td class="left">{{ $courierProductInfo->courier_type->name }}</td>
                                <td class="right">{{ $courierProductInfo->created_at->toDateTimeString() }}</td>
                                <td class="right">{{ $courierProductInfo->courier_quantity }}&nbsp;{{ $courierProductInfo->courier_type->unit->name }} </td>
                                <td class="center fee">{{ $courierProductInfo->courier_fee }} {{ $gs->base_currency_symbol }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">
                    </div>
                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="right">
                                        <strong><span class="totalPrice">450</span> {{ $gs->base_currency_symbol }}</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong>Payment Status</strong>
                                    </td>
                                    <td class="right">
                                        @if($courierInfo->payment_status=='Unpaid')
                                        <strong><span class="text-uppercase">{{ $courierInfo->payment_status }}</span></strong>
                                        @else
                                        <strong><span class="text-uppercase">{{ $courierInfo->payment_status }}</span></strong>
                                        @endif
                                    </td>
                                </tr>
                                @if($courierInfo->payment_status =='Paid')
                                <tr>
                                    <td class="left">
                                        <strong>Payment Receiver Name</strong>
                                    </td>
                                    <td class="right">
                                        <strong><span class="text-uppercase">{{ $courierInfo->payment_receiver->name }}</span></strong>&nbsp;<br>[{{$courierInfo->payment_receiver->type}}]
                                    </td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong>Branch</strong>
                                    </td>
                                    <td class="right">
                                        <strong><span class="text-uppercase">{{ $courierInfo->payment_receiver->branch->name }}</span></strong>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mb-2 ml-2">
                    <div class="container">
                        <button type="button" onclick="printDiv();" value="print" class="btn btn-info razu"><i class="fa fa-print"></i>&nbsp;Print Courier</button>
                        <a href="{{ route('manager.courier.slip',$courierInfo->id) }}" target="_blank"><button class="btn btn-primary"><i class="fa fa-print"></i> Print Slip</button></a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#courierInfo").addClass("show");
    $("#courierInfo li:nth-child(2)").addClass("active");
    $(document).ready(function () {
        totalPrice = 0;
        $(".fee").each(function () {
            totalPrice += parseInt($(this).html());
        });
        $(".totalPrice").text(totalPrice);
    });

    function printDiv()
    {

        var divToPrint = document.getElementById('printDiv');
        var newWin = window.open('', 'Print-Window');
        newWin.document.open();
        newWin.document.write('<html><head><title>eCourier Management System</title></head>');
        newWin.document.write('<body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');
        newWin.document.write('<link rel="stylesheet" href="{{asset('assets / user / css / bootstrap.min.css')}}">');
        newWin.document.close();
        setTimeout(function () {
            newWin.close();
        }, 10);

    }
</script>
@endsection

