@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">SMS Setting</h2>
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('admin.smsSettingUpdate',$settings->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="table-scrollable">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> CODE </th>
                                <th> DESCRIPTION </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1 </td>
                                <td> <pre>&#123;&#123;message&#125;&#125;</pre></pre> </td>
                                <td> Details Text From Script</td>
                            </tr>

                            <tr>
                                <td> 2 </td>
                                <td> <pre>&#123;&#123;number&#125;&#125;</pre> </td>
                                <td> Destination Number</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12  container-fluid">
                    <div class="form-group">
                        <label for="sms_api" style="text-transform: uppercase;"><strong>Sms Api</strong></label>
                        
                        <input class="form-control form-control-lg mb-3" type="text" name="sms_api"  value="{{ $settings->sms_api }}">
                        
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

<script type="text/javascript">
    $("#settings").addClass("show");
    $("#settings li:nth-child(2)").addClass("active");
    new nicEditor({fullPanel: true, iconsPath: '../assets/admin/img/nicEditorIcons.gif'}).panelInstance('sms_api');
</script>
@endsection
