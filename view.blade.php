@section('content')
	<div class="row">
		{{-- $resume = Resume::all(); --}}
		@foreach($resume as $data)
			<div class="col-lg-6">
				<h3 class="resume-title">{{ $data->heading }}</h3>

				@php
					$career_position = explode('|', $data->career_position);
					$r_time = explode('|', $data->r_time);
					$place = explode('|', $data->place);
					$r_content = explode('|', $data->r_content);
				@endphp

				<div class="resume-item">
					@foreach(($career_position) as $key => $innerData)
						<h4>{{ $career_position[$key] }}</h4>
						<h4>{{ $r_time[$key] }}</h4>
						<p><em>{{ $place[$key] }}</em></p>
						<p>{!! $r_content[$key] !!}</p>
					@endforeach
				</div>
			</div>
		@endforeach
	</div>
@endsection