@extends('admin/admin')

@section('content')
    <div class="col-sm-offset-4 col-sm-4">
		<br>
		<div class="panel panel-primary">
			<div class="panel-heading">User's edit</div>
			<div class="panel-body">
				<div class="col-sm-12">
					{!! Form::open(array('url' => route('angkorcmsusers.update', array($user->id)), 'method' => 'put', 'class' => 'form-horizontal panel')) !!}
						<small class="text-danger">{{ $errors->first('name') }}</small>
					  <div class="form-group {{ $errors->has('name') ? 'has-error has-feedback' : '' }}">
					  	{!! Form::text('name', $user->name, array('class' => 'form-control', 'placeholder' => 'Name')) !!}
					  </div>
					  <small class="text-danger">{{ $errors->first('email') }}</small>
					  <div class="form-group {{ $errors->has('email') ? 'has-error has-feedback' : '' }}">
					  	{!! Form::email('email', $user->email, array('class' => 'form-control', 'placeholder' => 'Mail')) !!}
					  </div>
					  <small class="text-danger">{{ $errors->first('password') }}</small>
					  <div class="form-group {{ $errors->has('password') ? 'has-error has-feedback' : '' }}">
					  	{!! Form::password('password', array('value'=> '', 'class' => 'form-control', 'placeholder' => 'Password (Leave empty to keep the password)')) !!}
					  </div>
					  <small class="text-danger">{{ $errors->first('password_new') }}</small>
					  <div class="form-group {{ $errors->has('password_new') ? 'has-error has-feedback' : '' }}">
					  	{!! Form::password('password_new', array('value'=> '', 'class' => 'form-control', 'placeholder' => 'New Password (Leave empty to keep the password)')) !!}
					  </div>
					  <div class="form-group">
					  	{!! Form::password('password_new_confirmation', array('class' => 'form-control', 'placeholder' => 'New Password confirmation')) !!}
					  </div>
					  <small class="text-danger">{{ $errors->first('group_parent_id') }}</small>
					  <div class="form-group {{ $errors->has('group_id') ? 'has-error has-feedback' : '' }}">
                          {!! Form::select('group_id', ['' => 'Not in a group'] + $groups, $user->group_id) !!}
					  </div>
						<div class="checkbox">
						  {!! Form::checkbox('admin', 1, $user->admin) !!}Admin
						</div>
						{!! Form::submit('Send', array('class' => 'btn btn-primary pull-right')) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@stop
