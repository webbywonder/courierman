@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">Create New Branch
        <a href="{{ route('branch.index') }}" class="btn btn-primary btn-md float-right">
            <i class="fa fa-list"></i>   View Branch
        </a>
    </h2>
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('branch.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12  container-fluid">
                    <div class="form-group">
                        <label for="name" style="text-transform: uppercase;"><strong>Name&nbsp;<span class="mark">*</span></strong></label>
                        <input class="form-control form-control-lg mb-3" type="text" name="name"  value="{{ old('name') }}" placeholder="Branch Name">
                    </div>
                </div>
                <div class="col-md-12 container-fluid">
                    <div class="form-group">
                        <label for="image" style="text-transform: uppercase;"><strong>Image</strong></label>
                        <input class="form-control form-control-lg mb-3" type="file" name="image">
                        <p style="color: red;"><strong>Notice: </strong>Branch Image format must be JPG,JPEG,PNG</p>
                    </div>
                </div>
                <div class="col-md-12 container-fluid">
                    <div class="form-group">
                        <label for="email" style="text-transform: uppercase;"><strong>Email</strong></label>
                        <input class="form-control form-control-lg mb-3" type="email" name="email"  value="{{ old('email') }}" placeholder="Branch Email">
                    </div>
                </div>
                <div class="col-md-12 container-fluid">
                    <div class="form-group">
                        <label for="phone" style="text-transform: uppercase;"><strong>Phone</strong></label>
                        <input class="form-control form-control-lg mb-3" type="text" name="phone"  value="{{ old('phone') }}" placeholder="Branch Phone">
                    </div>
                </div>
                <div class="col-md-12 container-fluid">
                    <div class="form-group">
                        <label for="address" style="text-transform: uppercase;"><strong>Address</strong></label>
                        <textarea class="form-control" rows="3" name="address" placeholder="Branch Address">{{ old('address') }}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="status" style="text-transform: uppercase;"><strong>Status</strong></label>
                        <input type="checkbox" data-onstyle="success" data-offstyle="danger" data-width="100%" data-on="Active" data-off="Inactive" data-toggle="toggle" name="status" {{ old('status')=='on' ? 'checked' : '' }}>
                    </div>
                </div> 
                <br>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Create New Branch</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#branch").addClass("show");
    $("#branch li:nth-child(1)").addClass("active");
</script>
@endsection