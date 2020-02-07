@extends('layouts.master')
@section('title')
@endsection
@section('content')

<div class="container" style="text-align: center;" >
	<div class="row">
		<div class="col-md-12">
			<h3>Details</h3>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<strong>First Name :</strong> {{$biodata->fname}}

			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group">
				<strong>Last Name :</strong> {{$biodata->lname}}
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<strong>Email :</strong> {{$biodata->email}}
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<strong>Mobile Number :</strong> {{$biodata->mobile}}
			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group">
				<strong>About :</strong> {{$biodata->text}}
			</div>
		</div>

		<div class="col-md-12">
			<a href="{{route('biodata.index')}}" class="btn btn-sm btn-primary">Back</a>
		</div>
		

</div>
</div>

@endsection
@section('content')
