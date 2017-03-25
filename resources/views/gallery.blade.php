@extends('layouts.layout')

@section('page-title')
Gallery
@endsection

@section('page-description')
Photos of Tom O'Brien, his family and his life
@endsection

@section('header-type')
	navbar-custom-no-header
@endsection

@section('content')
<div class="container">

	@if (count($images) > 0)	
		<div class="row col-xs image-gallery">
			<div id="gallery-counter">1/{{count($images)}}</div>
			<a href="/img/gallery/{{$images[0]->filename}}" target="_blank">
				<img src="/img/gallery/{{$images[0]->filename}}" alt="{{$images[0]->alt}}" class="img-responsive" />
				<p class="subnote text-center">{{$images[0]->note}}</p>
			</a>
		</div>
		
		<div class="row col-xs">
			<button type="button" class="btn btn-default" id="prev-image">Previous</button>
			<button type="button" class="btn btn-default pull-right" id="next-image">Next</button>
		</div>
		
		<div class="row text-center" id="download-gallery">
			<a href="https://drive.google.com/open?id=0B2Ht7F8m43SacmNBTURUVDdDbTg"><span class="glyphicon glyphicon-download"></span> Download a zip of all photos</a>
		</div>
	@else
		<div class="row text-center">
			There are no images in the gallery.
		</div>
	@endif
	
</div>
@endsection

@section('page-javascript')
<script type="text/javascript">

	$(document).ready(function(){

		var images = JSON.parse('{!!$images!!}');
		
		var imageIndex = 0;
		var currentImage = "";
		var numImages = images.length;

		$('#prev-image').on('click', function(){

			if(imageIndex > 0){

				imageIndex--;

			} else {
				
				imageIndex = images.length - 1;
				
			}

			currentImage = images[imageIndex];

			$('.image-gallery img').attr('src', '/img/gallery/'+currentImage.filename);
			$('.image-gallery a').attr('href', '/img/gallery/'+currentImage.filename);
			$('.image-gallery img').attr('alt', currentImage.alt);
			$('.image-gallery .subnote').html(currentImage.note);
			$('#gallery-counter').html((imageIndex+1)+'/'+numImages);
			
		});

		$('#next-image').on('click', function(){

			if(imageIndex < images.length - 1){

				imageIndex++;

			} else {

				imageIndex = 0;

			}

			currentImage = images[imageIndex];

			$('.image-gallery img').attr('src', '/img/gallery/'+currentImage.filename);
			$('.image-gallery a').attr('href', '/img/gallery/'+currentImage.filename);
			$('.image-gallery img').attr('alt', currentImage.alt);
			$('.image-gallery .subnote').html(currentImage.note);

			$('#gallery-counter').html((imageIndex+1)+'/'+numImages);
			
		});

		$('.image-gallery').css('max-height',$( window ).height()*0.8);
		
	});//document.ready
	
</script>
@endsection