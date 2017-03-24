@extends('layouts.layout')

@section('page-title')
Contact
@endsection

@section('page-description')
Send an email to the admin
@endsection

@section('header-type')
	navbar-custom-no-header
@endsection

@section('content')
<div class="container">
	
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			<form method="POST" action="/contact" name="sentMessage" id="contactForm">
			
				{{csrf_field()}}

				<div class="row control-group">
					<div
						class="form-group col-xs-12 floating-label-form-group controls">
						<label>Name</label> 
						<input type="text" class="form-control"
							placeholder="Name" id="name" required name="name">
					</div>
				</div>

				<div class="row control-group">
					<div
						class="form-group col-xs-12 floating-label-form-group controls">
						<label>Email Address</label>
						<input type="email"
							class="form-control" placeholder="Email Address" id="email"
							required name="email">
					</div>
				</div>
				
				<div class="row control-group">
					<div
						class="form-group col-xs-12 floating-label-form-group controls">
						<label>Message</label>
						<textarea rows="5" class="form-control" placeholder="Message"
							id="message" required name="message"></textarea>
					</div>
				</div>
				
				<br>
				
				<div class="row">
					<div class="form-group col-xs-12">
						<button type="submit" class="btn btn-default">Send</button>
					</div>
				</div>
				
			</form>
			
			@if (count($errors) > 0)
			    <div class="alert alert-danger contact-alert">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
			
			@if (Session::has('message'))
				<div class="alert alert-success contact-alert">
					{{Session::get('message')}}
				</div>
			@endif
		</div>
	</div>
</div>
@endsection
