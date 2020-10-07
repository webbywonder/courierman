@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">Faq Setting
        <a href="#" class="btn btn-primary btn-md float-right" data-toggle="modal" data-target="#addNew">
            <i class="fa fa-plus"></i>   ADD NEW
        </a>
    </h2>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <table id="table" class="table table-hover table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($faqList as $key=>$faq)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $faq->question }}</td>
                                <td>
                                    {!! str_limit($faq->answer, 15,'') !!}
                                    @if(str_word_count($faq->answer) > 5)
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#commentDetails{{ $faq->id }}">
                                        <i class="fa fa-eye"></i>  Details
                                    </button>
                                    <div class="modal fade" id="commentDetails{{ $faq->id }}" role="dialog" aria-labelledby="#commentDetails" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" style="text-transform: uppercase">&nbsp; Answer Details </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p><strong>{!! $faq->answer !!}</strong></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editFaq{{ $faq->id }}">
                                        <i class="fa fa-edit"></i>  Edit
                                    </button>
                                    <div class="modal fade" id="editFaq{{ $faq->id }}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-share-square"></i> Edit Faq</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <form method="POST" action="{{ route('frontend.updateFaq',$faq->id) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="question" class="col-sm-3 control-label bold uppercase"><strong>Question :</strong> </label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control has-error bold " id="question" name="question" value="{{ $faq->question ?? old('question') }}" placeholder="Question">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="answer" class="col-sm-3 control-label bold uppercase"><strong>Answer :</strong> </label>
                                                                <div class="col-sm-12">
                                                                    <textarea class="form-control" id="comment" rows="2" name="answer">{{ $faq->answer ?? old('answer') }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                        <button type="submit" class="btn btn-primary bold uppercase"><i class="fas fa-arrow-alt-circle-up"></i> Update Faq</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger btn-sm delete_button" data-toggle="modal" data-target="#delete">
                                        <i class="fa fa-times"></i>  DELETE
                                    </button>
                                    <div class="modal fade" id="delete" role="dialog" aria-labelledby="#delete" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <form method="POST" action="{{ route('frontend.deleteFaq',$faq->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="delete"><i class="fa fa-trash"></i>&nbsp;Delete !</h5>
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
                        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-share-square"></i> Add New Faq</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <form method="POST" action="{{ route('frontend.storeFaq') }}">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="question" class="col-sm-3 control-label bold uppercase"><strong>Question :</strong> </label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control has-error bold " id="name" name="question" placeholder="Question">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="answer" class="col-sm-3 control-label bold uppercase"><strong>Answer :</strong> </label>
                                                <div class="col-sm-12">
                                                    <textarea class="form-control" id="answer" rows="2" name="answer"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                            <button type="submit" class="btn btn-primary bold uppercase"><i class="fas fa-arrow-alt-circle-up"></i> Save Faq</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#frontend").addClass("show");
    $("#frontend li:nth-child(12)").addClass("active");

    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
@endsection