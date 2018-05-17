{{-- If any error --}}
@if(count($errors) > 0)
	@foreach($errors->all() as $error)
		<div class="alert alert-danger">
			{{$error}}
		</div>
	@endforeach
@endif

{{-- If any success message --}}
@if(session('success'))
	<div class="alert alert-success">
		{{session('success')}}
	</div>
@endif

{{-- If any error message --}}
@if(session('error'))
	<div class="alert alert-danger">
		{{session('error')}}
	</div>
@endif
