@extends('layouts.admin')

@section('content')

<h1>Edit User</h1>
        <div class="row">
        	<div class="col-sm-3">
        		<img src="{{$user->photo ? $user->photo->file : '/images/defaultuser.png'}}" alt="" class="img-responsive img-rounded">
        		</div>
        <div class="col-sm-9">		
		
			{!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update', $user->id],'files'=>true])!!}
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
			        {!! Form::select('role_id', $roles, null,['class'=>'form-control']) !!}
			    </div>

			    <div class='form-group'>
			        {!! Form::label('is_active','Status:') !!}
			        {!! Form::select('is_active', array(1=>'active', 0 =>'not active'),null, ['class'=>'form-control']) !!}
			    </div>

			    <div class='form-group'>
			        {!! Form::label('password',' change Password ?') !!}
			        {!! Form::password('password',['class'=>'form-control']) !!}
			    </div>

			    <div class='form-group'>
			        {!! Form::label('name','photo_id:') !!}
			        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
			    </div>

			    <div class='form-group'>
			        {!! Form::submit('update User',['class'=>'btn btn-primary']) !!}
			    </div>

				

			{!! Form::close() !!}

		</div>

		
    </div>
		<div class="row">
			
			@include('includes.form_error')
		</div>

		



@endsection