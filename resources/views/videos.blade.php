@extends('layouts.layout')

@section('page-title')
Videos
@endsection

@section('page-description')
Videos of Tom O'Brien singing and discussing his life and history.
@endsection

@section('header-type')
	navbar-custom-no-header
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs text-center video-gallery">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/itxgMu7VnXg" frameborder="0" allowfullscreen></iframe>
		</div>
		<p class="subnote text-center">Tom singing to Maureen</p>
	</div>
	
	<div class="row">
		<div class="col-xs text-center video-gallery">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/j5AGZ_UWbzI" frameborder="0" allowfullscreen></iframe>
		</div>
		<p class="subnote text-center">Tom talks history part 1</p>
	</div>
	
	<div class="row">
		<div class="col-xs text-center video-gallery">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/F_9MbheCFuo" frameborder="0" allowfullscreen></iframe>
		</div>
		<p class="subnote text-center">Tom talks history part 2</p>
	</div>
	
	<div class="row">
		<div class="col-xs text-center video-gallery">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/1LdNg8P3in4" frameborder="0" allowfullscreen></iframe>
		</div>
		<p class="subnote text-center">Tom singing with some of his family</p>
	</div>
	
	<div class="row">
		<div class="col-xs text-center video-gallery">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/eUR2Ukg2R08" frameborder="0" allowfullscreen></iframe>
		</div>
		<p class="subnote text-center">Tom singing to some family members</p>
	</div>
</div>
@endsection
