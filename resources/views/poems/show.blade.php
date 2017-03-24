@extends('layouts.layout')

@section('page-title')
{{$poem->title}}
@endsection

@section('page-description')
{{$poem->title}} was written by {{$poem->author}}
@endsection

@section('header-type')
navbar-custom-no-header
@endsection

@section('content')
<div class="container">
	<div class="row poem">
		<div
			class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 text-center">
			<h2>{{$poem->title}}</h2>
			<p class="poem-meta">{{$poem->subnote}}</p>
			<p class="poem-content">{{$poem->body}}</p>
			<p class="poem-footnote">{{$poem->footnote}}</p>
		</div>
	</div>
</div>
@endsection
