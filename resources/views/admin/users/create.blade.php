@extends('layouts.admin')

@section('content')

<h1>Creat Users</h1>
        <div class="row">
		
			{!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true])!!}
			    <div class='form-group'>
			        {!! Form::label('name','Name:') !!}
			        {!! Form::text('name',null,['class'=>'form-control']) !!}
			    </div>

			    <div class='form-group'>
			        {!! Form::label('email','Email:') !!}
			        {!! Form::email('email',null,['class'=>'form-control']) !!}
			    </div>

			    <div class='form-group'>
			        {!! Form::label('role_id','Role:') !!}
			        {!! Form::select('role_id', [''=>'choose Role'] + $roles, null,['class'=>'form-control']) !!}
			    </div>

			    <div class='form-group'>
			        {!! Form::label('is_active','Status:') !!}
			        {!! Form::select('is_active', array(1=>'active', 0=>'not active'), 0,['class'=>'form-control']) !!}
			    </div>

			    <div class='form-group'>
			        {!! Form::label('password','Password:') !!}
			        {!! Form::password('password',['class'=>'form-control']) !!}
			    </div>

			    <div class='form-group'>
			        {!! Form::label('name','photo_id:') !!}
			        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
			    </div>

			    <div class='form-group'>
			        {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
			    </div>

				

			{!! Form::close() !!}

		</div>
		

		<div class="row">
			
			@include('includes.form_error')
		</div>
		



@endsection