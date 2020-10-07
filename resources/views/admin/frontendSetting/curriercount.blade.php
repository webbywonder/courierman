@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">Courier Count Info Setting</h2>
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('frontend.couriercountupdate',$setting->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row  container-fluid">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="departure_courier" style="text-transform: uppercase;"><strong>Departure Courier</strong></label>
                            <input class="form-control form-control-lg mb-3" name="departure_courier" value="{{ $setting->departure_courier ?? old('departure_courier') }}" type="text">
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="upcoming_courier" style="text-transform: uppercase;"><strong>Upcoming Courier</strong></label>
                            <input class="form-control form-control-lg mb-3" name="upcoming_courier" value="{{ $setting->upcoming_courier ?? old('upcoming_courier') }}"  type="text">
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="total_deliver" style="text-transform: uppercase;"><strong>Total Deliver Courier</strong></label>
                            <input class="form-control form-control-lg mb-3" name="total_deliver" value="{{ $setting->total_deliver ?? old('total_deliver') }}" type="text">
                        </div>
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
    $("#frontend").addClass("show");
    $("#frontend li:nth-child(5)").addClass("active");
</script>
@endsection
