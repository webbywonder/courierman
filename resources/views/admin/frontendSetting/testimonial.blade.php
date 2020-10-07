@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">Testimonial Setting
        <a href="#" class="btn btn-primary btn-md float-right" data-toggle="modal" data-target="#addNew">
            <i class="fa fa-plus"></i>   ADD NEW
        </a>
    </h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('frontend.testimonial') }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="testimonial_title" style="text-transform: uppercase;"><strong>Testimonial Title</strong></label>
                                <input class="form-control form-control-lg mb-3" name="testimonial_title" value="{{ $setting->testimonial_title ?? old('testimonial_title') }}"  type="text">
                                <input class="form-control form-control-lg mb-3" name="id" value="{{ $setting->id }}"  type="hidden">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="testimonial_details" style="text-transform: uppercase;"><strong>Testimonial Details</strong></label>
                                <textarea class="form-control" id="join_us_details" rows="2" name="testimonial_details">{{ $setting->testimonial_details ?? old('testimonial_details') }}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">UPDATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <table id="table" class="table table-hover table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Comment</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($testimonialList as $key=>$testimonial)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $testimonial->name }}</td>
                                <td>
                                    <img style="width: 100px;height: 100px;" class="thumbnail img-responsive" src="{{asset('assets/frontend/images/testimonial/'.$testimonial->image)}}"/>
                                </td>
                                <td>
                                    {!! str_limit($testimonial->comment, 15,'') !!}
                                    @if(str_word_count($testimonial->comment) > 5)
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#commentDetails{{ $testimonial->id }}">
                                        <i class="fa fa-eye"></i>  Details
                                    </button>
                                    <div class="modal fade" id="commentDetails{{ $testimonial->id }}" role="dialog" aria-labelledby="#commentDetails" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" style="text-transform: uppercase">&nbsp; Comment Details </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p><strong>{!! $testimonial->comment !!}</strong></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </td>
                                <td>{{ $testimonial->designation ?? 'No Information' }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editTestimonial{{ $testimonial->id }}">
                                        <i class="fa fa-edit"></i>  Edit
                                    </button>
                                    <div class="modal fade" id="editTestimonial{{ $testimonial->id }}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-share-square"></i> Edit Testimonial</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <form method="POST" action="{{ route('frontend.updateTestimonial',$testimonial->id) }}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="image" class="col-sm-3 control-label bold uppercase"><strong>Image :</strong> </label>
                                                                <div class="col-sm-12">
                                                                    <input type="file" class="form-control has-error bold " id="image" name="image">
                                                                    <small class="text-danger h6">Image will be resize at 352*352 [Image format: JPG,JPEG]</small>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    @if($testimonial->image)
                                                                    <img style="width: 100px;height: 100px;" class="thumbnail img-responsive" src="{{asset('assets/frontend/images/testimonial/'.$testimonial->image)}}"/>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name" class="col-sm-3 control-label bold uppercase"><strong>Name :</strong> </label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control has-error bold " id="name" name="name" value="{{ $testimonial->name ?? old('name') }}" placeholder="Full name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="designation" class="col-sm-3 control-label bold uppercase"><strong>Designation :</strong></label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control has-error bold " value="{{ $testimonial->designation ?? old('designation') }}" id="designation" name="designation" placeholder="Designation [ Optional ]">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="comment" class="col-sm-3 control-label bold uppercase"><strong>Comment :</strong> </label>
                                                                <div class="col-sm-12">
                                                                    <textarea class="form-control" id="comment" rows="2" name="comment">{{ $testimonial->comment ?? old('comment') }}</textarea>
                                                                </div>
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
                                                <form method="POST" action="{{ route('frontend.deleteTestimonial',$testimonial->id) }}">
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
                                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-share-square"></i> Add New Testimonial</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <form method="POST" action="{{ route('frontend.storeTestimonial') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="image" class="col-sm-3 control-label bold uppercase"><strong>Image :</strong> </label>
                                                <div class="col-sm-12">
                                                    <input type="file" class="form-control has-error bold " id="image" name="image">
                                                    <small class="text-danger h6">Image will be resize at 352*352 [Image format: JPG,JPEG]</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-3 control-label bold uppercase"><strong>Name :</strong> </label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control has-error bold " id="name" name="name" placeholder="Full name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="designation" class="col-sm-3 control-label bold uppercase"><strong>Designation :</strong></label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control has-error bold " id="designation" name="designation" placeholder="Designation [ Optional ]">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="comment" class="col-sm-3 control-label bold uppercase"><strong>Comment :</strong> </label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control has-error bold " id="comment" name="comment" placeholder="Comment">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                            <button type="submit" class="btn btn-primary bold uppercase"><i class="fas fa-arrow-alt-circle-up"></i> Save Testimonial</button>
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
    $("#frontend li:nth-child(9)").addClass("active");
    bkLib.onDomLoaded(function () {
        new nicEditor({iconsPath: '../assets/admin/img/nicEditorIcons.gif'}).panelInstance('popular_exam_details');
    });
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
@endsection