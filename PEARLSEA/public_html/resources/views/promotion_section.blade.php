@section('promotion_section')
<div class="btn-main mg-promotion">
    <div class="row">
        @foreach ($promotions as $pro)
            <h2 class="mg-sec-left-title" style="margin: 0; padding-bottom: 5px;">{{$pro->description}} : {{$pro->sale_off}}</h2>
            <p style="margin-bottom: 0;">{{$constants['room']['promotion_app']}} {{$constants['room']['promotion_from']}} :  {{ date('d-m-Y', strtotime($pro->apply_time_from)) }} {{$constants['room']['promotion_to']}} :  {{ date('d-m-Y', strtotime($pro->apply_time_to)) }}</p>
        @endforeach
    </div>
</div>
@show