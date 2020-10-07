@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;"> Social Link
        <a href="#" class="btn btn-primary btn-md float-right" data-toggle="modal" data-target="#addNew">
            <i class="fa fa-plus"></i>   ADD NEW
        </a>
    </h2>
    <div class="card mb-4">
        <div class="card-body">
            <table id="table" class="table table-hover table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Icon</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($socialList as $key=>$social)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $social->name }}</td>
                        <td>{!! $social->code !!}</td>
                        <td>{{ $social->link }}</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit{{ $social->id }}">
                                <i class="fa fa-edit"></i>  Edit
                            </button>
                            <div class="modal fade" id="edit{{ $social->id }}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-share-square"></i> Edit Social</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <form method="POST" action="{{ route('frontend.socialUpdate',$social->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <div class="form-group error">
                                                    <label for="name" class="col-sm-3 control-label bold uppercase"><strong>Name :</strong> </label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control has-error bold " value="{{ $social->name ?? old('name') }}" id="name" name="name" placeholder="Social Name">
                                                    </div>
                                                </div>
                                                <div class="form-group error">
                                                    <label for="code" class="col-sm-3 control-label bold uppercase"><strong>Icon Code :</strong> </label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control has-error bold demo" id="code" value="{{ $social->code ?? old('code') }}" name="code" placeholder="Social Fontawesome Code">
                                                        <small class="text-danger"><strong>For Fontawesome code visit : http://fontawesome.io/icons/</strong></small>
                                                    </div>
                                                </div>
                                                <div class="form-group error">
                                                    <label for="link" class="col-sm-3 control-label bold uppercase"><strong>Link :</strong> </label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control has-error bold " value="{{ $social->link ?? old('link') }}" id="link" name="link" placeholder="Social Link">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                <button type="submit" class="btn btn-primary bold uppercase"><i class="fas fa-arrow-alt-circle-up"></i> Save Social</button>
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
                                        <form method="POST" action="{{ route('frontend.socialDestroy',$social->id) }}">
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
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-share-square"></i> Manage Social</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <form method="POST" action="{{ route('frontend.social') }}">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group error">
                                        <label for="name" class="col-sm-3 control-label bold uppercase"><strong>Name :</strong> </label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control has-error bold " id="name" name="name" placeholder="Social Name">
                                        </div>
                                    </div>
                                    <div class="form-group error">
                                        <label for="code" class="col-sm-3 control-label bold uppercase"><strong>Icon Code :</strong> </label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control has-error bold demo" id="code" name="code" placeholder="Social Fontawesome Code <i class='fa fa-facebook'></i>">
                                            <small class="text-danger"><strong>For Fontawesome code visit : http://fontawesome.io/icons/</strong></small>
                                        </div>
                                    </div>
                                    <div class="form-group error">
                                        <label for="link" class="col-sm-3 control-label bold uppercase"><strong>Link :</strong> </label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control has-error bold " id="link" name="link" placeholder="Social Link">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                    <button type="submit" class="btn btn-primary bold uppercase"><i class="fas fa-arrow-alt-circle-up"></i> Save Social</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#frontend").addClass("show");
    $("#frontend li:nth-child(2)").addClass("active");
</script>
@endsection