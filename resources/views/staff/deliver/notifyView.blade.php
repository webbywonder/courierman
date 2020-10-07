@extends('staff.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">Send Notifications
    </h2>
    <div class="card mb-4">
        <div class="card-body">
            <form action="#" id="notifyForm">
                <div class="row">                
                    <div class="col-md-10">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg search" id='search' name="search" placeholder="Barcode/Phone">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <button type="button" id="searchCourierBtn" onclick="javascript:searhCourier()" class="btn btn-primary btn-block btn-lg search-btn"><i class='fa fa-search'></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <table id="table" class="table table-hover table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Invoice Id</th>
                        <th>Courier Code</th>
                        <th>Sender Name</th>
                        <th>Sender Phone</th>
                        <th>Recipient Branch</th>
                        <th>Recipient Name</th>
                        <th>Recipient Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="courierAdd">
                <td colspan="10" class="text-center no-info">No Information</td>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary btn-md delete_button float-right" id="sendnotification" style="display:none;" data-toggle="modal" data-target="#receive">
                <i class="fa fa-check"></i> Send Notification
            </button>
            <div class="modal fade" id="receive" role="dialog" aria-labelledby="#" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('send.notification.courier') }}">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="receive"><i class="fa fa-download"></i>&nbsp;Send Notification</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" id="code">
                                <p><strong>Are you sure to send them notifications their email & phone ?</strong></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                <button type="submit" class="btn btn-primary">Yes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $("#notifyForm").submit(function (e) {
        e.preventDefault();
        searhCourier();
    });

    $("#notify").addClass("active");

    function searhCourier() {
        var code = $('#search').val();
        $('#search').val("");
        if (code !== '') {
            var flag = 0;
            $(".invoice_unique").each(function () {
                if ($(this).text() == code) {
                    flag++;
                    toastr.error("Already selected this courier");
                }
            });
            if (flag == 0) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }});
                $.ajax({
                    type: 'POST',
                    url: '{{url("staff/courier/deliver/notification")}}',
                    dataType: 'json',
                    data: {
                        code: code
                    },
                    success: function (response) {
                        var obj = response;
                        console.log(obj.courier);
                        if (obj.output === "success") {
                            $.each(obj.courier, function (key, Event) {
                                var fieldHTML = '';
                                fieldHTML += '<tr id="element_' + Event.invoice_id + '">';
                                fieldHTML += '<td>' + Event.invoice_id + '</td>';
                                fieldHTML += '<td class="invoice_unique">' + Event.code + '</td>';
                                fieldHTML += '<td>' + Event.sender_name + '</td>';
                                fieldHTML += '<td>' + Event.sender_phone + '</td>';
                                fieldHTML += '<td>' + Event.branch.name + '</td>';
                                fieldHTML += '<td>' + Event.receiver_name + '</td>';
                                fieldHTML += '<td>' + Event.receiver_phone + '</td>';
                                fieldHTML += '<td><a href="javascript:void(0)" onclick="removeElement(' + Event.invoice_id + ')"><span id="remove_' + Event.invoice_id + '"><i class="far fa-times-circle fa-2x" style="color:red; border-radius:50%; margin-left:5px; margin-top: 5px;"></i></span></a></td>';
                                fieldHTML += '</tr>';
                                $("#courierAdd").append(fieldHTML);
                                var inputHTML = '';
                                inputHTML += '<input type="hidden" name="code[]" value="' + Event.code + '" id="input_' + Event.invoice_id + '">';
                                $("#code").append(inputHTML);
                            });
                            $(".no-info").css("display", "none");
                            $("#sendnotification").css("display", "");

                        } else {
                            toastr.error("No information found");
                        }
                    }
                });
            }
        } else {
            toastr.error("Please enter valid barcode");
        }
    }
    ;
    function removeElement(id) {
        var set_id = "#element_" + id;
        $(set_id).remove();
        if (!$(".invoice_unique").length) {
            $("#sendnotification").css("display", "none");
            $(".no-info").css("display", "");
        }
        var input_remove_id = "#input_" + id;
        $(input_remove_id).remove();
    }
</script>
@endsection
