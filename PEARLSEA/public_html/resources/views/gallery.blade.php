@extends('master')
@section('content_section')
@include('title_section')
<div class="mg-gallery-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="mg-filter">
					<form id="mg-filter">
						<fieldset>
							<label class="btn btn-dark btn-main"><input type="radio" name="filter" value="all" checked="checked">All</label>
							<label class="btn btn-dark"><input type="radio" name="filter" value="1">STANDARD</label>
							<label class="btn btn-dark"><input type="radio" name="filter" value="2">SUPERIOR DOUBLE</label>
							<label class="btn btn-dark"><input type="radio" name="filter" value="3">SUPERIOR TRIPLE</label>
							<label class="btn btn-dark"><input type="radio" name="filter" value="4">DELUXE DOUBLE</label>
							<label class="btn btn-dark"><input type="radio" name="filter" value="5">DELUXE TRIPLE</label>
						</fieldset>
					</form>
				</div>

				<div class="row" id="mg-grid">
					@foreach ($images as $image)
                        <figure class="col-md-3 mg-gallery-item" data-groups='["{{$image -> room_id}}"]'>
							<a href="{{asset($image -> url)}}" data-lightbox-gallery="rooms"><img src="{{asset($image -> url)}}" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
						</figure>
                    @endforeach
				</div>
			</div>
		</div>
	</div>
</div>

@endsection