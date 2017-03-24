@extends('layouts.layout')

@section('page-title')
Poems by Tom O'Brien
@endsection

@section('page-description')
Navigate all the poems published on this site
@endsection

@section('header-type')
	navbar-custom-no-header
@endsection

@section('content')
<div class="container">

	@if (count($alphaPoems) > 0)
		<div class="row">
			<ul class="alpha-nav list-inline">
				<li class="active"><a href="#" data-poem-index="All">All</a></li>
				@foreach ($alphaPoems as $letter => $poems)
					<li><a href="#" data-poem-index="{{$letter}}">{{$letter}}</a></li>
				@endforeach
			</ul>
		</div>
	
		<div class="row col-md-4 col-md-offset-4">
			@foreach ($alphaPoems as $letter => $poems)
				<ul class="poem-list poem-index-{{$letter}}">
					@foreach($poems as $poem)
						<li><a href="poems/{{$poem->id}}/{{str_slug($poem->title)}}">{{$poem->title}}</a></li>
					@endforeach
				</ul>
			@endforeach
		</div>
	@else
		<div class="row text-center">
			There are no poems to display.
		</div>
	@endif

</div>
@endsection

@section('page-javascript')
<script type="text/javascript" src="/js/poems.js"></script>
@endsection
