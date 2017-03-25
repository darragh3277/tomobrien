@extends('layouts.layout')

@section('page-title')
Welcome
@endsection

@section('page-description')
Welcome to tomobrien.ie, a site dedicated to the poetry and stories of Tom O'Brien
@endsection

@section('header-type')
	navbar-custom-header
@endsection

@section('header')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('/img/layout/home-bg.jpg')"></header>
@endsection

@section('content')


<!-- Main Content -->
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			<h1 class="text-center">Thomas C. O'Brien</h1>
			<p class="subnote text-center">(1919 - 2009)</p>
			<p>This site is dedicated to the poems and songs of the late Tom
				O'Brien. Tom was a devoted husband, father and grandfather who had a
				passion for history, sport, poetry and song. Over many years Tom
				wrote this collection of poetry and was delighted when his daughter
				Anne had it published in 2002. Tom's inspiration came from everyday
				things, including memories of his youth, his garden, his family and
				of course Maureen his beloved wife of 60 years.
			</p>
			
			<p>
			Below are a few of Tom's poems selected by his children.
			</p>

			<hr>

			<div class="row featured">
				<div class="col-md-2 text-center">
					<img class="img-circle" src="img/layout/profile.png" />
					<h3>Anne</h3>
				</div>
				<div class="col-md-10">
					<p>"Duis volutpat quis ante in tempor. Duis sed vehicula erat, at
						efficitur magna. Nullam eleifend lacus ut convallis consequat.
						Praesent egestas lacus in feugiat vestibulum. Praesent egestas
						lacus in feugiat vestibulum."</p>
					<p>
						Read <a href="/poems/10/a-worthy-of-thomond">A Worthy of Thomond</a>
					</p>
				</div>
			</div>

			<hr>

			<div class="row featured">
				<div class="col-md-10">
					<p>"Cras tempus sem mauris, nec molestie nisi tempor et.
						Pellentesque condimentum arcu mauris. Vivamus facilisis porttitor
						velit, at tristique elit tristique eget. Sed suscipit efficitur
						leo, sit amet tincidunt odio suscipit at."</p>
					<p>
						Read <a href="/poems/2/a-rose-blooms-in-winter">A Rose Blooms in Winter</a>
					</p>
				</div>
				<div class="col-md-2 text-center">
					<img class="img-circle" src="img/layout/anne.jpg" />
					<h3>Anne</h3>
				</div>
			</div>
			
			<hr>

			<div class="row featured">
				<div class="col-md-2 text-center">
					<img class="img-circle" src="img/layout/tom.jpg" />
					<h3>Tom</h3>
				</div>
				<div class="col-md-10">
					<p>"Duis volutpat quis ante in tempor. Duis sed vehicula erat, at
						efficitur magna. Nullam eleifend lacus ut convallis consequat.
						Praesent egestas lacus in feugiat vestibulum. Praesent egestas
						lacus in feugiat vestibulum."</p>
					<p>
						Read <a href="/poems/10/a-worthy-of-thomond">A Worthy of Thomond</a>
					</p>
				</div>
			</div>

			<hr>

			<div class="row featured">
				<div class="col-md-10">
					<p>"Cras tempus sem mauris, nec molestie nisi tempor et.
						Pellentesque condimentum arcu mauris. Vivamus facilisis porttitor
						velit, at tristique elit tristique eget. Sed suscipit efficitur
						leo, sit amet tincidunt odio suscipit at."</p>
					<p>
						Read <a href="/poems/2/a-rose-blooms-in-winter">A Rose Blooms in Winter</a>
					</p>
				</div>
				<div class="col-md-2 text-center">
					<img class="img-circle" src="img/layout/michelle.jpg" />
					<h3>Michelle</h3>
				</div>
			</div>

		</div>
	</div>
</div>

<hr>
@endsection